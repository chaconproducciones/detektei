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
          <div class="row" style="height:80%;" >
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
                <div class="bg-dark-gray">
                  <div class="tittle-slider-caption" style="font-size:24px;color:#000;">Videoüberwachung ▶</div>
                </div>
              </div>
              <div class="blue-color-bg" style="margin-top:15px;">
                <div class="tittle-slider-caption" style="font-size:28px;">Für Unternehmer</div>
                <div class="text-slider-caption">
                  <span style="color:#fff;">offene  ideoüberwachung ►</span><br/>
                  verdeckte  ideoüberwachung ►<br/>
                </div>
              </div>
              <div class="wine-color-bg" style="margin-top:15px;">
                <div class="tittle-slider-caption" style="font-size:28px;">Für Privatpersonen</div>
                <div class="text-slider-caption">
                  <span style="color:#fff;">offene  ideoüberwachung ►</span><br/>
                  verdeckte  ideoüberwachung ►<br/>
                </div>
              </div>
              <div style="margin-top:15px;">
                <img src="img/camera-img.png" width="100%" height="auto;" />
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
              <div class="row" style="height:100%;vertical-align: middle;">
                <div class="col-lg-12 col-md-12 col-sm-12 blue-color-bg" style="margin:8px; color:#fff;">
                    <p class="titulos-pages">offene
                    Videoüberwachung</p>
<p style="font-size:14px;text-align: left;">im Innen- und Außenbereich</p>
<div style="font-size:14px;text-align: justify;">Offene Videoüberwachung ist nicht nur für den Einzel- handel ein wichtiger Bestandteil der Sicherheitsmaß- nahmen. Präventiv helfen gut sichtbar angebrachte Kameras, potentielle Ladendiebe oder Einbrecher von Straftaten abzuhalten. Ist es trotzdem zu einem Rechts- bruch gekommen, können die Aufzeichnungen stichhal- tiges Beweismaterial liefern. Dank modernster Technik gelingen Aufnahmen auch bei ungünstigen Lichtverhält- nissen.</div>
                </div>
              </div>
            </div>
            <div class="col-lg-8 col-md-8< col-sm-12">
              <div class="row"  style="height:100%;">
                <div class="col-lg-12 col-md-12 col-sm-12" style="padding-left:30px;padding-right:30px;">
                  <p  class="titulos-pages">offene Videoüberwachung im Innenbereich</p>
<p style="font-size:14px;text-align: justify;">Wir verfügen über eine breite Palette verschiedener Geräte, die für vielfältige Einsatzzwecke geeignet sind.</p>
<p style="font-size:14px;text-align: justify;">Auf Ihren Bedarf abgestimmt, installieren wir einzelne Kameras in zuvor genau
                                              abgegrenzten Teilbereichen. So können Sie beispielsweise mit hochauflösenden
                                              Kameras oder kompakten Domekameras sämtliche Ereignisse im Eingangs-und
                                              Ausgangsbereich überwachen. Mehrere Kameras lassen sich auch miteinander zu
                                              einem Komplettsystem verbinden. Das ermöglicht eine exakte Beobachtung sehr
                                              großer Verkaufs- oder Lagerflächen.
                                            </p>
<p style="font-size:14px;text-align: justify;">Für die Ansicht der aufgenommenen Aufnahmen bieten wir Ihnen mehrere Alternativen.
                                                    Sie können innerhalb Ihres Gebäudes wählen, ob Sie die Überwachung
                                                    direkt auf einen PC schalten oder auf einen separaten Monitor. Gerne ermöglichen
                                                    wir Ihnen auch eine Fernabfrage über das Internet. Wenn Sie selbst nicht anwesend
                                                    sind, können Sie so trotzdem die Kundenfrequenz in Ihrem Unternehmen
                                                    überschauen oder überprüfen, ob alle sicherheitsrelevanten Maßnahmen, wie verschlossene
                                                    Türen zu bestimmten Abteilungen, durchgeführt sind.
                                            </p>

<p  class="titulos-pages">offene Videoüberwachung im Aussenbereich</p>
<p style="font-size:14px;text-align: justify;">Um potentielle Täter abzuschrecken und dadurch Ihr Eigentum zu schützen, bringen
                                                    wir elektronische Aufzeichnungsgeräte gut sichtbar und erkenntlich für jedermann
                                                    an. Die Kameras werden an Grundstückszufahrten und -grenzen, direkt an
                                                    Gebäuden, innerhalb der Zugangsbereiche oder im Bereich von Parkplätzen montiert.</p>
<p style="font-size:14px;text-align: justify;">Für den Außeneinsatz bieten wir Ihnen verschiedene wetterfeste Kameras in stabilen
                                                    Metallgehäusen. Für die Beweissicherung bei Dunkelheit setzen wir Nachtsichtkameras
                                                    mit Infrarot ein. Selbst bei schlechten Lichtverhältnissen (bis 0,05
                                                    Lux) und einer Entfernung von bis zu 25 Meter gelingen damit detailgenaue Aufnahmen.</p>
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
      <br/>
    </div>
    <div id="mobile">
      <!-- Init Content Mobile -->
      <div class="row bg-dark-gray tittle-black-sidebar" style="margin-bottom:7px;">
        Videoüberwachung ▶
      </div>
      <div class="row blue-color-bg" style="padding: 10px;">
        <div class="tittle-mobile" style="color:#fff;">Für Unternehmer<br/>offene Videoüberwachung</div>
        <div class="text-mobile" style="color:#fff;">
          im Innen- und Außenbereich<br/>
          Offene Videoüberwachung ist nicht nur für den Einzelhandel ein wichtiger Bestand- teil der Sicherheitsmaßnahmen. Präventiv helfen gut sichtbar angebrachte Kame- ras, potentielle Ladendiebe oder Einbrecher von Straftaten abzuhalten. Ist es trotz- dem zu einem Rechtsbruch gekommen, können die Aufzeichnungen stichhaltiges Beweismaterial liefern. Dank modernster Technik gelingen Aufnahmen auch bei ungünstigen Lichtverhältnissen.
        </div>
      </div>
      <div class="row" style="padding: 10px;">
        <div class="tittle-mobile">offene Videoüberwachung im Innenbereich</div>
        <div class="text-mobile">Wir verfügen über eine breite Palette verschiedener Geräte, die für vielfältige Einsatzzwecke geeignet sind.
        </div>
        <div class="text-mobile">
          Auf Ihren Bedarf abgestimmt, installieren wir einzelne Kameras in zuvor genau
                                                        abgegrenzten Teilbereichen. So können Sie beispielsweise mit hochauflösenden
                                                        Kameras oder kompakten Domekameras sämtliche Ereignisse im Eingangs-und
                                                        Ausgangsbereich überwachen. Mehrere Kameras lassen sich auch miteinander zu
                                                        einem Komplettsystem verbinden. Das ermöglicht eine exakte Beobachtung sehr
                                                        großer Verkaufs- oder Lagerflächen.
        </div>
        <div class="text-mobile">
          Für die Ansicht der aufgenommenen Aufnahmen bieten wir Ihnen mehrere Alternativen.
                                                              Sie können innerhalb Ihres Gebäudes wählen, ob Sie die Überwachung
                                                              direkt auf einen PC schalten oder auf einen separaten Monitor. Gerne ermöglichen
                                                              wir Ihnen auch eine Fernabfrage über das Internet. Wenn Sie selbst nicht anwesend
                                                              sind, können Sie so trotzdem die Kundenfrequenz in Ihrem Unternehmen
                                                              überschauen oder überprüfen, ob alle sicherheitsrelevanten Maßnahmen, wie verschlossene
                                                              Türen zu bestimmten Abteilungen, durchgeführt sind.
        </div>
      </div>
      <div class="row" style="padding: 10px;">
        <div class="tittle-mobile">offene Videoüberwachung im Aussenbereich</div>
        <div class="text-mobile">
          Um potentielle Täter abzuschrecken und dadurch Ihr Eigentum zu schützen, bringen
                                                              wir elektronische Aufzeichnungsgeräte gut sichtbar und erkenntlich für jedermann
                                                              an. Die Kameras werden an Grundstückszufahrten und -grenzen, direkt an
                                                              Gebäuden, innerhalb der Zugangsbereiche oder im Bereich von Parkplätzen montiert.
        </div>
        <div class="text-mobile">
          Für den Außeneinsatz bieten wir Ihnen verschiedene wetterfeste Kameras in stabilen
                                                              Metallgehäusen. Für die Beweissicherung bei Dunkelheit setzen wir Nachtsichtkameras
                                                              mit Infrarot ein. Selbst bei schlechten Lichtverhältnissen (bis 0,05
                                                              Lux) und einer Entfernung von bis zu 25 Meter gelingen damit detailgenaue Aufnahmen.
        </div>
      </div>
      <div class="row blue-color-bg tittle-mobile-sidebar" style="margin-bottom:7px;">
          Wirtschaft ▶
      </div>
      <div class="row wine-color-bg tittle-mobile-sidebar" style="margin-bottom:7px;">
        Privat ▶
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
