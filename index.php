
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="">

    <title>Detektei-Web</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/generic_detektei.css" rel="stylesheet">
</head>
<body>
    <div id="app" class="container">
        <div class="row">
          <?php
              @include("directorio/commons/header.php");
           ?>
          <!-- Init Web -->
          <div id="web" class="col-lg-3 col-md-3 col-sm-12">
            <figure class="detektei">
                <div class="container-detektei">
                  <img id='detektei' src='img/logo_neu_web.png'/>
                </div>
            </figure>
          </div>
          <div  id="web" class="col-lg-9 col-md-9 col-sm-12">
            <!-- Init Content Web -->
            <!-- End Content Web -->
          </div>
          <!-- End Web -->
          <!-- Init Mobile -->
          <div id="mobile" class="col-sm-12">
            <figure class="detektei">
                <div class="container-detektei">
                  <img id='detektei' src='img/logo_neu_web.png'/>
                </div>
            </figure>
          </div>
          <div id="mobile" class="col-sm-12">
            <!-- Init Content Mobile -->
            <!-- End Content Mobile -->
          </div>
          <!-- End Mobile -->
        </div>
        <?php
            @include("directorio/commons/footer.php");
         ?>
    </div>
</body>
</html>
