<?php
function email($address, $name="") {
  for ($i = 0; $i < strlen($address); $i++) { $email .= (rand(0, 1) == 0) ? "&#" . ord(substr($address, $i)) . ";" : substr($address, $i, 1); }
  if ($name == "") $name = $email;
  echo "<a href=\"&#109;&#97;&#105;&#108;&#116;&#111;&#58;$email\">$name</a>";
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>KM Tooling<?php if ($PageTitle != "") echo " | " . $PageTitle; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <meta name="description" content="KM Tooling is a leader in precision mold design and manufacturing, trim die fabrication, and custom precision machining. Our expertise is key in turning your ideas into reality, successfully and on-time. We credit our expertise to our Journeyman Tool and Die Makers, Engineers, Pattern Makers, Jig and Fixture makers, and Machinists who in total have more than 250 years in the industry.">
    <meta name="keywords" content="mold design, manufacturing, trim die fabrication custom precision machining, machining, custom machining, die makers, jig makers, fixture makers, machinists, tool makers, vertical machining, sinker and wire edm, cnc turning, surface grinding, welding, cnc milling, km tooling, km tool, kmt delivers, rubber industry, polyurethane industry, mold construction, Knuth Machine Tool">
    <meta name="author" content="Foresite Group">

    <meta name="viewport" content="width=device-width">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="inc/main.css">

    <script type="text/javascript" src="inc/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="inc/bootstrap-collapse.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $("a[href^='http'], a[href$='.pdf']").not("[href*='" + window.location.host + "']").attr('target','_blank');
      });
    </script>

    <!--[if lt IE 9]><script src="inc/modernizr-2.6.2-respond-1.1.0.min.js"></script><![endif]-->
    <!--[if lt IE 7 ]>
    <script type="text/javascript" src="inc/dd_belatedpng.js"></script>
    <script type="text/javascript">DD_belatedPNG.fix('img, .png');</script>
    <![endif]-->
  </head>
  <body>

    <header>
      <img src="images/logo.png" alt="KM Tooling" id="logo">

      <div id="banner">
        <div id="banner-text">
          <h1>Ideas Delivered.</h1>
          <strong>KM Tooling</strong> is a leader in precision mold design and manufacture, trim die fabrication, and custom precision machining.  Our expertise is key in turning your ideas into reality, successfully and on-time.
        </div> <!-- END banner-text -->
      </div> <!-- END banner -->
    </header>

    <article class="two-col">
      <h2>Mold Design &amp; Construction</h2>
      <ul>
        <li>Rubber Industry - injection, transfer &amp; compression</li>
        <li>Polyurethane Industry - open cast, compression &amp; transfer</li>
      </ul>
      <br>
      <br>

      <h2>Trim Dies</h2>
      <ul>
        <li>Die-casting Industry</li>
      </ul>
      <br>
      <br>

      <h2>Custom precision machining</h2>
      KM Tooling, formerly Knuth Machine Tool, has been designing and manufacturing precision molds, tools, and trim dies since 1960. Our experience along with up-to-date, well-maintained equipment results in reliable quality. We credit our expertise to our Journeyman Tool and Die Makers, Engineers, Pattern Makers, Jig and Fixture makers, and Machinists who in total have more than 250 years in the industry.<br>
      <br>
      <br>

      <h2>Complete Line of Services</h2>
      <ul>
        <li>Vertical Machining</li>
        <li>Sinker and Wire EDM</li>
        <li>CNC Turning</li>
        <li>Surface Grinding</li>
        <li>CNC Milling</li>
        <li>Welding</li>
      </ul>
      <br>

      KM Tooling Engineers become active consultants during the product design process providing design for manufacturability suggestions. This ensures a robust process and quality outcome for the entire product life cycle.<br>
      <br>

      Our quality makes us an asset to every customer. KM Tooling incorporates both in-process and pre-shipment quality checks for prototype molds, production molds, trim dies, and custom machined product.<br>
      <br>

      Please Contact KM Tooling for a quote or more information.<br>
      <br>
      <br>
    </article>

    <article id="contact">
      <img src="images/contact.jpg" alt="">

      <h3 class="blue">CONTACT</h3>
      <strong>KM Tooling</strong><br>
      1668 9th Avenue<br>
      Grafton, WI 53024<br>
      <br>

      <strong class="blue">(P)</strong> 262-377-1677<br>
      <strong class="blue">(E)</strong> <?php email("sales@kmtdelivers.com"); ?><br>
    </article>

    <footer>
      Copyright &copy; <?php echo date("Y"); ?> All rights reserved
    </footer>

  </body>
</html>