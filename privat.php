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
                          <div id="circulo">Senden</div>
                      </div>
                  </div>
                </form>
              </div>
              <div>
                &nbsp;
              </div>
              <div>
                <div class="wine-color-bg">
                  <div class="tittle-slider-caption" style="font-size:28px;">Privat</div>
                  <div class="text-slider-caption">
                    Partnerschaftskon ikte<br/>
                    <span style="color:#fff;">Personenüberwachung ►</span><br/>
                    Personenschutz Recherchen<br/>
                    Stalking<br/>
                    Analysen und Gutachten<br/>
                  </div>
                </div>
              </div>
              <div>
                <div class="blue-color-bg">
                  <div class="tittle-slider-caption" style="font-size:28px;">Wirtschaft ▶</div>
                </div>
              </div>
              <div>
                <div class="bg-dark-gray">
                  <div class="tittle-slider-caption" style="font-size:24px;color:#000;">Videoüberwachung ▶</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="web" class="col-lg-9 col-md-9 col-sm-12" style="padding-left:30px;">
          <!-- Init Content Web -->
          <div class="content-slider1">
            <div class="slider1">
              <div id="demo" class="carousel slide" data-ride="carousel">
                <!-- The slideshow -->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="img/Gewissheit-in-allen-Faellen_weiss.png" alt="Detektei" width="100%" height="238">
                  </div>
                  <div class="carousel-item">
                    <img src="img/Gewissheit-in-allen-Faellen_weiss.png" alt="Detektei" width="100%" height="238">
                  </div>
                  <div class="carousel-item">
                    <img src="img/Gewissheit-in-allen-Faellen_weiss.png" alt="Detektei" width="100%" height="238">
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
          <div class="row row-content">
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 wine-color-bg" style="margin:8px; color:#fff;">
                    <p class="titulos-pages">Personenüberwachung
liefert Beweise</p>
Personen, Räume und privates Eigentum beobachten
und überwachen – das ist das Kerngeschäft unserer
Detektei.
Unsere Mitarbeiter verfügen über
jahrelange Erfahrung.
Mit regelmäßigen Fortbildungen halten wir unser Know
how auf dem neuesten Stand der Technik.
Erfolgreiche Personenüberwachung ist diskret, unauffällig
und erfordert speziell geschulte Detektive. Wir
ermitteln für Sie unauffällig aus neutralen Einsatzfahrzeugen
heraus.
Wenn erforderlich, wechseln sich mehrere Mitarbeiter
ab. Das minimiert die Gefahr,entdeckt zu werden.
Verdeckte Observationen geben Ihnen sowohl im geschäftlichen
als auch im privaten Bereich Gewissheit.
Sie erhalten detaillierte Einblicke in den Tagesablauf
der beobachteten Person. Wir sichern für Sie gerichtsverwertbare
Beweise. Selbstverständlich stehen Ihnen
und Ihren Anwälten unsere Mitarbeiter, die die Personenüberwachung
durchführen, auch als Zeugen vor
Gericht zur Verfügung.
                </div>
              </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12">
              <div class="row">
                <div class="col-lg-1 col-md-1 col-sm-12">
                </div>
                <div class="col-lg-10 col-md-10 col-sm-12" style="margin-left:-10px;margin-right:-10px;">
                  <p  class="titulos-pages">Überwachung mit GPS</p>
Bei der Fahrzeug- und Warenüberwachung setzen wir modernste Hilfsmittel, wie die satellitengestützte Positionsbestimmung
(GPS-Technik) ein. Damit können wir Bewegungen von Fahrzeugen bis auf wenige Meter genau verfolgen und aufzeichnen. Das
hat für Sie den großen Vorteil, dass Sie so den Aufenthaltsort der gesuchten Person erfahren.


<p  class="titulos-pages">Überwachung mit Videotechnik</p>
Miniaturkamera an der Wand montiert Zur Überwachung kann auch Videotechnik eingesetzt werden. Aus Standfahrzeugen heraus
oder mit fest installierten Kameras überwachen wir Grundstücke, Wohnungen, Firmen oder PKWs. Mit Miniaturkameras führen
wir verdeckte Videobeobachtungen durch. Unsere Geräte sind so unauffällig, dass sie kaum bemerkt werden können. Dadurch
erhalten Sie unwiderlegbare Beweise.<br/>
Offen wird die Videotechnik von uns auch zur Abschreckung eingesetzt. Wollen Sie Ihr Firmengelände, Lagerräume oder Ihr Wohnhaus
schützen, stellen wir speziell auf Ihren Bedarf zugeschnittene Lösungen zur Verfügung. Gerne beraten wir Sie kompetent
auch in allen Fragen, die Sie zum Kauf einer Überwachungsanlage haben.
<br/>
Bitte beachten Sie hierzu die rechtlichen Voraussetzungen, die Sie auf unserer Seite Videoüberwachungen nachlesen können
<div style="background-color:#ECECEC;">
<p  class="titulos-pages" >offene Videoüberwachung im Innen- und Außenbereich</p>
Straftaten schon im Vorfeld zu verhindern. Das ist unser Ziel bei der offenen Videoüberwachung. Die für jedermann sichtbar installierten
Kameras haben eine abschreckende Wirkung. Dadurch erhöhen Sie Ihre eigene Sicherheit und schützen wirkungsvoll Ihr
Eigentum.</div>

<div style="background-color:#ECECEC;"><p  class="titulos-pages">verdeckte Videoüberwachung im Innen- und Außenbereich</p>
Beim Einsatz verdeckter Videokameras sind strenge rechtliche Regeln einzuhalten, sonst machen Sie sich selbst strafbar.
Heimlich angefertigte Videoaufnahmen sind ein Eingriff in das durch Artikel 2 Absatz 1 Grundgesetz geschützte allgemeine Persönlichkeitsrecht.
Durch dieses Recht werden Arbeitnehmer vor einer lückenlosen technischen Überwachung am Arbeitsplatz geschützt.
<br/>In jedem Einzelfall muss deshalb das allgemeine Persönlichkeitsrecht des Arbeitnehmers gegen das wirtschaftliche Interesse des
Arbeitgebers sorgfältig abgewogen werden.</div>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-12">
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
      <div class="alinear-derecha">
        Seit über 25 Jahren europaweit tätig.
        <br/> Mitglied im Berufsverband BID.
      </div>
    </div>
    <div id="mobile">
      <!-- Init Content Mobile -->
      <div class="row wine-color-bg tittle-mobile-sidebar">
          Wirtschaft ▶
      </div>
      <div class="row blue-color-bg tittle-mobile-sidebar">
        Privat ▶
      </div>
      <div class="row bg-dark-gray tittle-black-sidebar">
        Videoüberwachung ▶
      </div>
      <div class="row">
        <div class="tittle-mobile">Gewissheit in allen Fällen</div>
        <div class="text-mobile">
          Das ist unser Anspruch an uns selbst zu Ihrem Vorteil. Denn unser wichtigstes Ziel ist es, Sie - unsere Kunden - mit unseren detektivi- schen Leistungen rundum zufrieden zu stellen.
          Wir nehmen uns Ihren Sorgen an: individuell, seriös und vertraulich
          Jeden Kunden betreuen wir als seriöse Detektei ganz individuell. Deshalb steht an erster Stelle ein ausführliches, kostenloses Bera- tungsgespräch. Gemeinsam besprechen wir Ihre Situation und eine mögliche Vorgehensweise. Als seriöse und nach den Grundsätzen der Berufsordnung für Detektive arbeitende Detektei geben wir Ihnen einen detaillierten Überblick über die Kosten, bevor wir für Sie tätig werden. Selbstverständlich werden alle Daten, die wir von Ihnen er- halten oder die wir für Sie ermitteln, absolut vertraulich und nach den Regeln des Datenschutzes behandelt.
        </div>
      </div>
      <div class="row bg-dark-gray">
        <div class="tittle-mobile">Die Detektei Larsen: Verbände / Zertifkate</div>
      </div>
      <div class="row bg-dark-gray">
        <div class="col-sm-6 col-xs-6">
          <img class="banner" src='img/bid-Logo Zertifizierung_animiert.png' />
        </div>
        <div class="col-sm-6 col-xs-6">
          <img class="banner" src='img/IKD_Logo.png' /> </td>
        </div>
      </div>
      <div class="row bg-dark-gray">
        <div class="col-sm-6 col-xs-6">
          <img class="banner" src='img/WorldAssociationofDetectivesfooter.png' />
        </div>
        <div class="col-sm-6 col-xs-6">
          <img class="banner" src='img/ODV_Logo-rgb.png' /></td>
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
