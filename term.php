<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Terminology</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <?php include 'template/includes.php';?>
    </head>
    <body>
        <?php include 'template/navigation.php';?>
        <div id="term-container">
          <div id = "term-info">
            <h1 id="term-head">Terminology</h1>
            <p id="term-description"> This page provides you with the definitions of weather terminology that will be used on this site. Feel free to check this page out whenever you are unsure of what something means.</p>
          </div>
            <div class="accordion term-accordian" id="accordionExample">
                <div class="termcard">
                    <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <b class="term-button">Temperature</b>
                        </button>
                    </h2>
                    </div>
                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body expanded">
                        The measure of how hot or cold the atmosphere is.
                    </div>
                    </div>
                </div>
                <div class="termcard">
                    <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <b class="term-button">Humidity</b>
                        </button>
                    </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body expanded">
                    The state of the air when it is full of water vapor.
                    </div>
                    </div>
                </div>
                <div class="termcard">
                    <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <b class="term-button">Pressure</b>
                        </button>
                    </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body expanded">
                    The force exerted on a surface by the air above it as gravity
                    </div>
                    </div>
                </div>
                <div class="termcard">
                    <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        <b class="term-button">UV Index (UV)</b>
                        </button>
                    </h2>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body expanded">
                    The amount of skin-damaging UV radiation reaching the earth's surface.
                    </div>
                    </div>
                </div>
                <div class="termcard">
                    <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        <b class="term-button">Visibility</b>
                        </button>
                    </h2>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body expanded">
                    The measure of distance at which an object or light could be recognized.
                    </div>
                    </div>
                </div>
                <div class="termcard">
                    <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        <b class="term-button">Wind Speed</b>
                        </button>
                    </h2>
                    </div>
                    <div id="collapseSix" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body expanded">
                    The measure of how fast air is moving at a certain point of time.
                    </div>
                    </div>
                </div>
                <div class="termcard">
                    <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                        <b class="term-button">Wind Gust</b>
                        </button>
                    </h2>
                    </div>
                    <div id="collapseSeven" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body expanded">
                    The measure of the sudden increase in wind speed.
                    </div>
                    </div>
                </div>
                <div class="termcard">
                    <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                        <b class="term-button">Wind Degree</b>
                        </button>
                    </h2>
                    </div>
                    <div id="collapseTen" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body expanded">
                    The direction of which air is moving.
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'template/footer.php';?>
        <script src="" async defer></script>
    </body>
</html>