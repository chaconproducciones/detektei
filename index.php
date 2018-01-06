
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
                <div id="web" class="col-lg-3 col-md-3 col-sm-12">
                  <figure class="detektei">
                      <div class="container-detektei">
                        <img id='detektei' src='img/logo_neu_web.png'/>
                      </div>
                  </figure>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12">
                  <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-6">
                        <div id="web" class="pull-left">
                          Persönliche Beratung: 07031 / 498465 (Mo. bis Fr. von 8 bis 20 Uhr)
                        </div>
                        <div id="mobile" class="pull-left">
                          07031 / 498465 (Mo. bis Fr. von 8 bis 20 Uhr)
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="wine-color-bg font-white-bold pull-right" style="padding-right:10px;">
                          <img src="img/Pikto_Kontakt.png" width="auto" height="auto" style="padding-right:5px;">
                          CALL BACK - Service - Wir rufen Sie an!
                        </div>
                      </div>
                  </div>
                </div>
                <div id="mobile" class="col-sm-12">
                  <figure class="detektei">
                      <div class="container-detektei">
                        <img id='detektei' src='img/logo_neu_web.png'/>
                      </div>
                  </figure>
                </div>

              </div>
              <div class="alinear-derecha col-md-3">
                Seit über 25 Jahren europaweit tätig.
              <br/>
              Mitglied im Berufsverband BID.
            </div> 
              <div class="row">
                
                  
               
               
                 
             
                
              <div class="content-sidebar col-md-3">
              
             
                <div class="sidebar">
                  <form>
                  <p class="text-sidebar" style="font-size:24px; line-height:100%;">Nehmen Sie mit uns Kontakt auf. Wir rufen zurück!.</p>

                    
                      
                    <input class="input-formulario" type="text"/>
                      <p class="text-sidebar">Name</p>
                      <input class="input-formulario" type="text"/>
                      <p class="text-sidebar">E-Mail</p>
                      <div>
                        <input class="input-formulario" type="text"/>
                        <p class="text-sidebar">Nachricht</p>
                        <table>
                        <tr>
                        <div class="col-med-3">
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
                    <p class="text-sidebar1">Die Detektei Larsen: Verbände / Zertifkate</p>
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
            </figure>
          </div>
          <div id="mobile" class="col-sm-12">
            <!-- Init Content Mobile -->
            <!-- End Content Mobile -->
          </div>
          <!-- End Mobile -->
        </div>
        <div class="row wine-color-bg">
          <?php
              @include("directorio/commons/footer.php");
           ?>
        </div>
              </div>
              </div>  
    </div>
</body>
</html>
