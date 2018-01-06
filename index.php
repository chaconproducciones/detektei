
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
          <!-- Init Header -->
          <?php
              @include("directorio/commons/header.php");
           ?>
          <!-- End Header -->
          <!-- Init Web -->
          <div id="web" class="col-lg-3 col-md-3 col-sm-12">
            <figure class="detektei">
                <div class="container-detektei">
                  <img id='detektei' src='img/logo_neu_web.png'/>
                </div>
            </figure>
            <div class="alinear-derecha">
              Seit über 25 Jahren europaweit tätig.
              <br/>
              Mitglied im Berufsverband BID.
            </div>
            <div class="row">
              <div class="content-sidebar">
                <div class="sidebar">
                  <form>
                    <p class="tittle-sidebar">Nehmen Sie mit uns Kontakt auf. Wir rufen zurück!.</p>
                    <input class="input-formulario" type="text"/>
                    <p class="text-sidebar">Name</p>
                    <input class="input-formulario" type="text"/>
                    <p class="text-sidebar">E-Mail</p>
                    <div>
                        <input class="input-formulario" type="text"/>
                        <p class="text-sidebar">Nachricht</p>
                        <table>
                          <tr>
                          <div class=" col-lg-3 col-md-3 col-sm-12">
                          <td>
                            <input class="input-formulario2" type="text"/>
                            <p class="text-sidebar">Zeitfenster für Rückruf</p>
                          </td>
                          <td>
                            <div id="circulo">Senden</div>
                          </td>
                          </div>
                          </tr>
                        </table>
                    </div>
                  </form>
                </div>
                <img class="puzzle" src='img/puzzle.jpg'/>
                <div class="tablasidebar">
                  <table>
                    <tr>
                    <p class="text-sidebar-bottom">Die Detektei Larsen: Verbände / Zertifkate</p>
                    </tr>
                    <tr>
                      <td>
                      <img class="banner" src='img/bid-Logo Zertifizierung_animiert.png'/>

                      </td>
                      <td><img class="banner" src='img/IKD_Logo.png'/> </td>

                    </tr>
                    <tr>
                    <td><img class="banner" src='img/WorldAssociationofDetectivesfooter.png'/></td>
                      <td><img class="banner" src='img/ODV_Logo-rgb.png'/></td>

                    </tr>
                  </table>
                </div>
            </div>
          </div>
          </div>
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
          <!-- Init Footer -->
          <div class="row wine-color-bg">
            <?php
                @include("directorio/commons/footer.php");
             ?>
          </div>
          <!-- End Footer -->
  </div>
</body>
</html>
