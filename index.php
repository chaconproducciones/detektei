<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
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
              <img id='detektei' src='img/logo_neu_web.png' />
            </div>
          </figure>
          <div class="alinear-derecha">
            Seit über 25 Jahren europaweit tätig.
            <br/> Mitglied im Berufsverband BID.
          </div>
          <div class="row">
            <div class="content-sidebar">
              <div class="sidebar">
                <form>
                  <p class="tittle-sidebar">Nehmen Sie mit uns Kontakt auf. Wir rufen zurück!.</p>
                  <input class="input-formulario" type="text" />
                  <p class="text-sidebar">Name</p>
                  <input class="input-formulario" type="text" />
                  <p class="text-sidebar">E-Mail</p>
                  <div>
                    <input class="input-formulario" type="text" />
                    <p class="text-sidebar">Nachricht</p>
                    <table>
                      <tr>
                        <div class=" col-lg-3 col-md-3 col-sm-12">
                          <td>
                            <input class="input-formulario2" type="text" />
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
              <img class="puzzle" src='img/puzzle.jpg' />
              <div class="tablasidebar">
                <table>
                  <tr>
                    <p class="text-sidebar-bottom">Die Detektei Larsen: Verbände / Zertifkate</p>
                  </tr>
                  <tr>
                    <td>
                      <img class="banner" src='img/bid-Logo Zertifizierung_animiert.png' />
                    </td>
                    <td><img class="banner" src='img/IKD_Logo.png' /> </td>
                  </tr>
                  <tr>
                    <td><img class="banner" src='img/WorldAssociationofDetectivesfooter.png' /></td>
                    <td><img class="banner" src='img/ODV_Logo-rgb.png' /></td>
                  </tr>
                </table>
              </div>
            </div>

          </div>
        </div>
        <div id="web" class="col-lg-9 col-md-9 col-sm-12">
          <!-- Init Content Web -->
          <div class="content-slider1">
            <div class="slider1">
              <div id="demo" class="carousel slide" data-ride="carousel">
                <!-- The slideshow -->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="img/empre0.png" alt="Detektei" width="100%" height="632">
                  </div>
                  <div class="carousel-item">
                    <img src="img/empre0.png" alt="Detektei" width="100%" height="632">
                    <div class="carousel-caption">
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 wine-color-bg">
                          <div class="tittle-slider-caption">Wirtschaft</div>
                          <div class="text-slider-caption">
                            Mitarbeiterüberprüfungen ►</br/>
                            Diebstahl und Betrug ►</br/>
                            Wettbewerbsverletzung ►</br/>
                            Abhörschutz ►</br/>
                            Beschädigung und Sabotage ►</br/>
                            Forderungsausfall ►</br/>
                            Beweissicherung und Ermittlungen ►</br/>
                            Sicherheitsanalysen ►</br/>
                            Sicherheitsdienste & Personenschutz ►</br/>
                            Tests und Kontrolle ►
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 blue-color-bg">
                          <div class="tittle-slider-caption">Privat</div>
                          <div class="text-slider-caption">
                            Partnerschaftskon ikte ►</br/>
                            Personenüberwachung ►</br/>
                            Personenschutz ►</br/>
                            Recherchen ►</br/>
                            Stalking ►</br/>
                            Analysen und Gutachten ►
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="img/empre0.png" alt="Detektei" width="100%" height="632">
                    <div class="carousel-caption">
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 wine-color-bg">
                          <div class="tittle-slider-caption">Wirtschaft</div>
                          <div class="text-slider-caption">
                            Mitarbeiterüberprüfungen ►</br/>
                            Diebstahl und Betrug ►</br/>
                            Wettbewerbsverletzung ►</br/>
                            Abhörschutz ►</br/>
                            Beschädigung und Sabotage ►</br/>
                            Forderungsausfall ►</br/>
                            Beweissicherung und Ermittlungen ►</br/>
                            Sicherheitsanalysen ►</br/>
                            Sicherheitsdienste & Personenschutz ►</br/>
                            Tests und Kontrolle ►
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 blue-color-bg">
                          <div class="tittle-slider-caption">Privat</div>
                          <div class="text-slider-caption">
                            Partnerschaftskon ikte ►</br/>
                            Personenüberwachung ►</br/>
                            Personenschutz ►</br/>
                            Recherchen ►</br/>
                            Stalking ►</br/>
                            Analysen und Gutachten ►
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </a>
              </div>
            </div>
          </div>
          <div class="row row-content bg-dark-gray">
            <div class="col-lg-12 col-md-12 col-sm-12 bigger-text">
              Videoüberwachung
            </div>
          </div>
          <div class="row row-content bg-light-gray">
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12">
                  <img class="banner-slider" src='img/camera.png' />
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12">
                  <div class="title-box"><b>offene Videoüberwachung</b></div><br/>
                  <div class="text-box"><b>im Innen- und Außenbereich</b> </div>
                  <div class="text-box">Straftaten schon im Vorfeld zu verhindern. Das ist unser Ziel bei der offenen Videoüberwachung. Die für jedermann sichtbar installierten Kameras haben eine abschreckende Wirkung. Dadurch erhöhen Sie Ihre eigene Sicherheit und schützen
                    wirkungsvoll Ihr Eigentum.</div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12">
                  <div class="title-box"><b>verdeckte Videoüberwachung</b></div><br/>
                  <div class="text-box"><b>im gewerblichen und privaten Bereich</b> </div>
                  <div class="text-box">Beim Einsatz verdeckter Videokameras sind strenge rechtliche Regeln einzuhalten, sonst machen Sie sich selbst strafbar. Heimlich angefertigte Videoaufnahmen sind ein Eingriff in das durch Artikel 2 Absatz 1 Grundgesetz geschützte allgemeine
                    Persönlichkeitsrecht. Durch dieses Recht werden Arbeitnehmer vor einer lückenlosen technischen Überwachung am Arbeitsplatz geschützt.<br> In jedem Einzelfall muss deshalb das allgemeine Persönlichkeitsrecht des Arbeitnehmers gegen
                    das wirtschaftliche Interesse des Arbeitgebers sorgfältig abgewogen werden.</div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                  <img class="banner-slider" src='img/people.png' />
                </div>
              </div>
            </div>
          </div>
          <!-- End Content Web -->
        </div>
    </div>
    <!-- End Web -->
    <!-- Init Mobile -->
    <div id="mobile" class="col-sm-12">
      <figure class="detektei">
        <div class="container-detektei">
          <img id='detektei' src='img/logo_neu_web.png' />
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
