<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" id="viewport_device">

    <title>Dynamitskipperens sønner</title>
    <link rel="icon" href="/images/favicon.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
            integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
            crossorigin="anonymous"></script>
</head>
<body>

<?php include("navigation.php") ?>

<div id="content">
    <div class="lead-text container">
        <div class="row">
            <div class="col-sm">
                <p>Skipperviser: Halifax, Martha, Alle sømænd, Solskin ombord, Hjemmebrænderiet og MANGE flere...</p>
            </div>
        </div>
    </div>

    <div class="container main_image">
        <img src="images/smal-baggrund-1024x545.png" width="100%">
    </div>

    <div class="container section" id="om">
        <h1>Om sønnerne</h1>

        <div class="row">
            <div class="col-sm">
                <p>Dynamitskipperens sønner er flasket op med skipperviser,
                    som blev serveret med modermælken sammen med skipper-pilsnerne.
                    De mestrer kulturen omkring musikken og får publikum “rundt på gulvet”
                    i bogstaveligste forstand.</p>
                <p>Repertoiret er de klassiske skipperviser spillet på en autentisk måde.
                    Oplev hits som “Fra Halifax til Spanien”, “Alle sømænd er glade for piger”,
                    “Solskin ombord” og mange mange mange flere…</p>
            </div>
            <div class="col-sm">
                <p>Dynamitskipperen er den pensionerede kaptajn Peter Haaber, der er far til Anders Haaber fra
                    orkesteret.
                    Han har besejlet verdenshavene med sin sprængfarlige last og sørget for,
                    at sønnerne fik den nødvendige opdragelse med de gamle traditionsrige skipperviser.</p>
                <p>De er alle professionelle musikere, som mestrer de gode skipper instrumenter
                    som harmonika, guitar, mandolin, banjo, rumsterstang og ikke mindst klarinetten
                    og som har kærligheden dybt ankret i denne særlige gren af folkemusikken.
                    Et frisk vindstød fra de fire dynamitskippersønner.</p>
            </div>
        </div>
    </div>

    <div class="container section" id="video">
        <h1>Musik</h1>
        <p align="center"><iframe width="560" height="315" src="https://www.youtube.com/embed/OmS1nUnmZyQ?controls=0&modestbranding=0&start=39" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></p>
    </div>

    <div class="container" id="profiles">
        <div class="row">
            <div class="col-sm profile_image"><img src="images/anders.jpg"></div>
            <div class="col-sm profile_image"><img src="images/skovgaard.jpg"></div>
            <div class="col-sm profile_image"><img src="images/fribo.jpg"></div>
            <div class="col-sm profile_image"><img src="images/theis.jpg"></div>
        </div>
        <div class="row label-name">
            <div class="col-sm">Anders Haaber</div>
            <div class="col-sm">Rasmus Skovgaard</div>
            <div class="col-sm">Rasmus Fribo</div>
            <div class="col-sm">Theis Langlands</div>
        </div>
        <div class="row labels">
            <div class="col-sm">Den eftertænksomme søn</div>
            <div class="col-sm">Den glade søn</div>
            <div class="col-sm">Den gale søn</div>
            <div class="col-sm">Den kække søn</div>
        </div>
    </div>

    <div class="container section" id="kalender">
        <h1>Kalender</h1>
        <?php include("calendar.php") ?>
    </div>

    <div class="container section" id="presse">
        <h1>Presse</h1>
        <a href="downloads/dynamit-pressetekst.docx">Pressetekst.docx</a>
        <a href="downloads/dynamit_pressefoto.jpg">Pressefoto.jpg</a>
    </div>

    <div class="container section" id="kontakt">
        <h1>Kontakt</h1>
        <p>Anders Haaber</p>
        <p>skipperviser@gmail.com</p>
        <p>31 27 10 00</p>
    </div>
</div>

<?php include("footer.php")?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>
</html>