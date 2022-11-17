<ul>
    <?php
    $url= file_get_contents('.env');
    $data = file_get_contents($url); // put the contents of the file into a variable
    $characters = json_decode($data); // decode the JSON feed

    $current_date = new DateTime("now");

    // sorting events
    $previous_concerts = array();
    $future_concerts = array();

    function printEvent($event) {
        $title = $event->summary;
        $datetime = new DateTime($event->start->dateTime);
        $location = "";
        $event_url = "";

        if (isset($event->location)) {
            $location = $event->location;
        }

        if (isset($event->description)) {
            // $description = $event->description;
            $description = explode(PHP_EOL, trim($event->description));
            if (substr($description[0], 0, 3) === "www") {
                $event_url = $description[0];
            }
        }
        echo "<li>" . $datetime->format('d/m') . " "
            . $title . ", " . $location
            . " kl. " . $datetime->format('H:i') . "  "
            . "<a href=\"https://" . $event_url . "\">" . $event_url . "</a>"
            . "</li>";
    }


    foreach ($characters->items as $event) {

        $datetime = new DateTime($event->start->dateTime);
        if ($datetime < $current_date){
            $previous_concerts[] = $event;
            //printEvent($event);
        } else {
            $future_concerts[] = $event;
            //printEvent($event);
        }
    }

    foreach ($future_concerts as $event) {
        printEvent($event);
        }

    echo "<li><br></li>";

    echo "Tidligere koncerter";

    // year of 1st previous event
    $datetime = new DateTime($previous_concerts[0]->start->dateTime);
    $year_so_far = $datetime->format('Y');
    echo "<li>" . $year_so_far . "</li>";


    foreach ($previous_concerts as $event) {
        $date_of_event = new DateTime($event->start->dateTime);
        $year_of_event = $date_of_event->format('Y');
        if ($year_of_event != $year_so_far) {
            $year_so_far = $year_of_event;
            echo "<li>" . $year_so_far . "</li>";
        }


        printEvent($event);
        }




    //echo "Created date is " . $datetime->format('d-m-Y H:i:s');
    // echo $characters->items[1]->summary;
    ?>
</ul>