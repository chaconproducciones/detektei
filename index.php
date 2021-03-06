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
            @include("header.php");
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
                  <input class="input-formulario" type="text" />
                  <p class="text-sidebar">Nachricht</p>
                  <div class="row" style="padding-left:7px;">
                      <div class="col-lg-7 col-md-7 col-sm-12">
                          <input class="input-formulario2" type="text" />
                          <p class="text-sidebar">Zeitfenster für Rückruf</p>
                      </div>
                      <div class="col-lg-5 col-md-5 col-sm-12">
                      <a href="#"><div id="circulo">Senden</div></a>
                      </div>
                  </div>
                </form>
              </div>
              <img class="puzzle" src='img/puzzle.jpg' />
              <div class="tablasidebar">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                      <div class="text-sidebar-bottom">Die Detektei Larsen: Verbände / Zertifkate</div>
                          <div class="col-lg-6 col-md-6 col-sm-12">
                            <img class="banner" src='img/bid-Logo Zertifizierung_animiert.png' />
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12">
                            <img class="banner" src='img/IKD_Logo.png' />
                          </div>
                    </div>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <img class="banner" src='img/WorldAssociationofDetectivesfooter.png' />
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <img class="banner" src='img/ODV_Logo-rgb.png' />
                      </div>
                    </div>
                  </div>
                </div>
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
                    <img src="img/empre0.png" alt="Detektei" width="100%" height="630">
                  </div>
                  <div class="carousel-item">
                    <img src="img/empre0.png" alt="Detektei" width="100%" height="630">
                    <div class="carousel-caption">
                      <div class="row" style="margin-bottom:-39px;">
                        <div class="col-lg-6 col-md-6 col-sm-6 wine-color-bg">
                          <a href="Wirtschaft.php"><div class="tittle-slider-caption">Wirtschaft</div></a>
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
                        <a href="privat.php"><div class="tittle-slider-caption">Privat</div></a>
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
                    <img src="img/empre0.png" alt="Detektei" width="100%" height="630">
                    <div class="carousel-caption">
                      <div class="row" style="margin-bottom:-37px;">
                        <div class="col-lg-6 col-md-6 col-sm-6 wine-color-bg">
                        <a href="Wirtschaft.php"><div class="tittle-slider-caption">Wirtschaft</div></a>
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
                        <a href="privat.php"><div class="tittle-slider-caption">Privat</div></a>
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
              <div class="row" style="height:100%;">
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
      <a href="index.php"><div class="container-detektei">
          <img id='detektei' src='img/logo_neu_web.png' />
        </div></a>
      </figure>
      <div class="alinear-derecha">
        Seit über 25 Jahren europaweit tätig.
        <br/> Mitglied im Berufsverband BID.
      </div>
      <br/>
    </div>
    <div id="mobile">
      <!-- Init Content Mobile -->
      <a href="Wirtschaft.php"><div class="row blue-color-bg tittle-mobile-sidebar" style="margin-bottom:7px;">
          Wirtschaft ▶
      </div></a>
      <a href="privat.php"><div class="row wine-color-bg tittle-mobile-sidebar" style="margin-bottom:7px;">
        Privat ▶
      </div></a>
      <a href="videouberwachung.php"><div class="row bg-dark-gray tittle-black-sidebar" style="margin-bottom:7px;">
        Videoüberwachung ▶
      </div></a>
      <div class="row" style="padding: 10px;">
        <div class="tittle-mobile">Gewissheit in allen Fällen</div>
        <div class="text-mobile">
          Das ist unser Anspruch an uns selbst zu Ihrem Vorteil. Denn unser wichtigstes Ziel ist es, Sie - unsere Kunden - mit unseren detektivi- schen Leistungen rundum zufrieden zu stellen.
          Wir nehmen uns Ihren Sorgen an: individuell, seriös und vertraulich
          Jeden Kunden betreuen wir als seriöse Detektei ganz individuell. Deshalb steht an erster Stelle ein ausführliches, kostenloses Bera- tungsgespräch. Gemeinsam besprechen wir Ihre Situation und eine mögliche Vorgehensweise. Als seriöse und nach den Grundsätzen der Berufsordnung für Detektive arbeitende Detektei geben wir Ihnen einen detaillierten Überblick über die Kosten, bevor wir für Sie tätig werden. Selbstverständlich werden alle Daten, die wir von Ihnen er- halten oder die wir für Sie ermitteln, absolut vertraulich und nach den Regeln des Datenschutzes behandelt.
        </div>
      </div>
      <div class="row bg-dark-gray" style="padding: 10px;">
        <div class="tittle-mobile">Die Detektei Larsen: Verbände / Zertifkate</div>
      </div>
      <div class="row bg-dark-gray">
        <div class="col-sm-12">
          <div class="row">
            <div class="col-sm-6">
              <img class="banner" src='img/bid-Logo Zertifizierung_animiert.png' />
            </div>
            <div class="col-sm-6">
              <img class="banner" src='img/IKD_Logo.png' />
            </div>
          </div>
        </div>
      </div>
      <div class="row bg-dark-gray" style="margin-bottom:7px;">
        <div class="col-sm-6">
          <img class="banner" src='img/WorldAssociationofDetectivesfooter.png' />
        </div>
        <div class="col-sm-6">
          <img class="banner" src='img/ODV_Logo-rgb.png' />
        </div>
      </div>
      <!-- End Content Mobile -->
    </div>
    <!-- End Mobile -->
    <!-- Init Footer -->
    <div class="row wine-color-bg">
      <?php
              @include("footer.php");
           ?>
    </div>
    <!-- End Footer -->
  </div>
</body>
</html>
