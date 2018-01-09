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
            <a href="index.php"><div class="container-detektei">
              <img id='detektei' src='img/logo_neu_web.png' />
            </div>
          </figure>
          <div class="alinear-derecha">
            Seit über 25 Jahren europaweit tätig.
            <br/> Mitglied im Berufsverband BID.
          </div>
          <div class="row" style="height:70%;" >
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

              <div style="padding-top:15px;">
                <div class="blue-color-bg">
                  <a href="Wirtschaft.php"><div class="tittle-slider-caption" style="font-size:28px;">Wirtschaft ▶</div></a>
                </div>
              </div>
              <div style="padding-top:15px;">
              <div class="wine-color-bg">
              <a href="privat.php"><div class="tittle-slider-caption" style="font-size:28px;">Privat ▶</div></a>
               </div>
              </div>
              <div style="padding-top:15px;">
                <div class="bg-dark-gray">
                  <a href="videouberwachung.php"><div class="tittle-slider-caption" style="font-size:24px;color:#000;">Videoüberwachung ▶</div></a>
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
              <div class="row" style="height:100%;padding:0;vertical-align: middle;">
                <div class="col-lg-12 col-md-12 col-sm-12 bg-dark-gray" style="margin:8px; color:black;">
                    <p class="titulos-pages">Unsere Standorte</p>
                    <div style="font-size:14px;text-align: justify;"><p>Die Detektei Larsen macht darauf aufmerksam,
                        dass es sich bei den hier aufgeführten Standorte nicht um Niederlassungen handelt.
                        Mit Ausnahme von Stuttgart unterhalten wir aus Kostengründen an den genannten Städten keine Detektivbüros.</p>
                      <p>
                      Wir verfügen über eine große Anzahl von ortskundigen Einsatzkräften,
                      -Ermittlern und Wirtschaftsdetektiven, welche von uns an unseren
                      Standorten eingesetzt werden. Unsere Detektive vor Ort werden dabei bei Bedarf
                      durch unser versiertes und flexibles Einsatzteam unterstützt. Dieses ist innerhalb
                      kürzester Vorlaufzeit für Sie auch an allen anderen aufgeführten regionalen Standorten tätig.</p>
                      <p>
                      Außerhalb unseres direkten Einzugsgebietes arbeiten wir auch mit uns bekannten Partnern vor Ort zusammen.
                      Die Detektei Larsen verfügt über ein hervorragendes, bundesweites Netzwerk und ist über die IKD in der Lage,
                      weltweit Einsätze durchzuführen.</p>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-lg-8 col-md-8< col-sm-12">
              <div class="row" style="height:100%;">
                <div class="col-lg-12 col-md-12 col-sm-12" style="padding-left:38px;padding-right:22px;">
                  <div class="row" style="background-color:#ECECEC; margin-top:7px;">
                    <div class="col-lg-2 col-md-2 col-sm-2">
                        <img src="img/BW.png" />
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-10">
                      <div style="background-color:#ECECEC;"><p  class="titulos-pages" >Standorte Baden-Württemberg</p>
                        <p style="font-size:14px;text-align: justify;">Backnang, Balingen, Calw , Donaueschingen, Esslingen, Ettlingen, Filderstadt, Freudenstadt, Göppingen, Heilbronn,
                        Konstanz, Kirchheim unter Teck, Leonberg, Ludwigsburg, Mannheim, Pforzheim Nordschwarzwald, Reutlingen, Rottweil,
                        Remseck am Neckar, Schwäbisch-Gmünd, Stuttgart, Sulz am Neckar, Ulm, Villingen Schwenningen, Waiblingen,
                        Waldshut-Tiengen</p>

                        <p  class="titulos-pages">Regionale Einsatzorte Baden-Württemberg</p>
                        <p style="font-size:14px;text-align: justify;">Albstadt, Baden-Baden, Bietigheim-Bissingen, Bruchsal, Bad Liebenzell, Herrenberg Hechingen,
                          Kornwestheim, Messkirch, Metzingen, Mössingen, Nürtingen, Oberndorf a.N., Ravensburg, Schorndorf, Sindelfingen, St. Georgen im Schwarzwald,
                          Singen, Schramberg, Tübingen, Tuttlingen</p>
                      </div>
                    </div>
                </div>
                <div class="row" style="background-color:#ECECEC; margin-top:7px;">
                    <div class="col-lg-2 col-md-2 col-sm-2">
                        <img src="img/bayern.png" />
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-10">
                      <div style="background-color:#ECECEC;"><p  class="titulos-pages" >Standorte Bayern</p>
                        <p style="font-size:14px;text-align: justify;">Augsburg, Aschaffenburg, Bayreuth, Dachau, Donauwörth,
                          Fürth, Hirschau, Ingolstadt, Markt-Rettenbach, München, Neu- Ulm, Nürnberg, Nördlingen, Passau,
                          Schweinfurt, Weilheim in Oberbayern, Würzburg</p>
                      </div>
                    </div>
              </div>
              <div class="row" style="background-color:#ECECEC; margin-top:7px;">
                <div class="col-lg-2 col-md-2 col-sm-2">
                    <img src="img/hessen.png" />
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10">
                  <div style="background-color:#ECECEC;"><p class="titulos-pages" >Standorte Hessen</p>
                    <p style="font-size:14px;text-align: justify;">Darmstadt, Frankfurt am Main, Gießen, Kassel, Wiesbaden</p>
                  </div>
                </div>
              </div>
              <div class="row" style="background-color:#ECECEC; margin-top:7px;">
                <div class="col-lg-2 col-md-2 col-sm-2">
                    <img src="img/pfalz.png" />
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10">
                  <div style="background-color:#ECECEC;"><p  class="titulos-pages" >Standorte Pfalz / Saarland</p>
                    <p style="font-size:14px;text-align: justify;">Friedrichsthal, Koblenz, Mainz, Saarbrücken, Speyer, Trier, Völklingen</p>
                  </div>
                </div>
              </div>
          <!-- End Content Web -->
        </div>
      </div>
    </div>
  </div>
    <!-- End Web -->
  </div>
</div>
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
      <div class="row bg-dark-gray" style="padding: 10px;">
        <div class="tittle-mobile">Unsere Standorte</div>
        <div class="text-mobile">
          <p>Die Detektei Larsen macht darauf aufmerksam,
              dass es sich bei den hier aufgeführten Standorte nicht um Niederlassungen handelt.
              Mit Ausnahme von Stuttgart unterhalten wir aus Kostengründen an den genannten Städten keine Detektivbüros.</p>
            <p>
            Wir verfügen über eine große Anzahl von ortskundigen Einsatzkräften,
            -Ermittlern und Wirtschaftsdetektiven, welche von uns an unseren
            Standorten eingesetzt werden. Unsere Detektive vor Ort werden dabei bei Bedarf
            durch unser versiertes und flexibles Einsatzteam unterstützt. Dieses ist innerhalb
            kürzester Vorlaufzeit für Sie auch an allen anderen aufgeführten regionalen Standorten tätig.</p>
            <p>
            Außerhalb unseres direkten Einzugsgebietes arbeiten wir auch mit uns bekannten Partnern vor Ort zusammen.
            Die Detektei Larsen verfügt über ein hervorragendes, bundesweites Netzwerk und ist über die IKD in der Lage,
            weltweit Einsätze durchzuführen.</p>
        </div>
      </div>
      <div class="row bg-light-gray" style="margin-top: 7px;">
        <div class="col-sm-2 col-md-2">
            <img src="img/BW.png"/>
        </div>
        <div class="col-sm-10 col-md-10">
          <div class="tittle-mobile">Standorte Baden-Württemberg</div>
          <div class="text-mobile">
            Backnang, Balingen, Calw , Donaueschingen, Esslingen, Ettlingen, Filderstadt, Freudenstadt, Göppingen, Heilbronn,
            Konstanz, Kirchheim unter Teck, Leonberg, Ludwigsburg, Mannheim, Pforzheim Nordschwarzwald, Reutlingen, Rottweil,
            Remseck am Neckar, Schwäbisch-Gmünd, Stuttgart, Sulz am Neckar, Ulm, Villingen Schwenningen, Waiblingen,
            Waldshut-Tiengen
          </div>
          <div class="tittle-mobile">Regionale Einsatzorte Baden-Württemberg</div>
          <div class="text-mobile">
            Albstadt, Baden-Baden, Bietigheim-Bissingen, Bruchsal, Bad Liebenzell, Herrenberg Hechingen,
            Kornwestheim, Messkirch, Metzingen, Mössingen, Nürtingen, Oberndorf a.N., Ravensburg, Schorndorf, Sindelfingen, St. Georgen im Schwarzwald,
            Singen, Schramberg, Tübingen, Tuttlingen
          </div>
        </div>
      </div>
      <div class="row bg-light-gray" style="margin-top: 7px;">
        <div class="col-sm-2 col-md-2">
            <img src="img/bayern.png" />
        </div>
        <div class="col-sm-10 col-md-10">
          <div class="tittle-mobile">Standorte Bayern</div>
          <div class="text-mobile">
            Augsburg, Aschaffenburg, Bayreuth, Dachau, Donauwörth,
            Fürth, Hirschau, Ingolstadt, Markt-Rettenbach, München, Neu- Ulm, Nürnberg, Nördlingen, Passau,
            Schweinfurt, Weilheim in Oberbayern, Würzburg
          </div>
        </div>
      </div>
      <div class="row bg-light-gray" style="margin-top: 7px;">
        <div class="col-sm-2 col-md-2">
            <img src="img/hessen.png" />
        </div>
        <div class="col-sm-10 col-md-10">
          <div class="tittle-mobile">Standorte Hessen</div>
          <div class="text-mobile" style="float:left;">
            Darmstadt, Frankfurt am Main, Gießen, Kassel, Wiesbaden
          </div>
        </div>
      </div>
      <div class="row bg-light-gray" style="margin-top: 7px; margin-bottom: 7px;">
        <div class="col-sm-2 col-md-2">
            <img src="img/pfalz.png" />
        </div>
        <div class="col-sm-10 col-md-10">
          <div class="tittle-mobile">Standorte Pfalz / Saarland</div>
          <div class="text-mobile">
            Friedrichsthal, Koblenz, Mainz, Saarbrücken, Speyer, Trier, Völklingen
          </div>
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
