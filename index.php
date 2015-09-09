<?php

$thx = false;

if (isset($_POST["inputName"]) && isset($_POST["inputEmail"]) && isset($_POST["inputMessage"])) {
        $name = htmlspecialchars($_POST["inputName"]);
        $address = htmlspecialchars($_POST["inputEmail"]);
        $message = htmlspecialchars($_POST["inputMessage"]);
        $thx = mail("jean.andre.santoni@gmail.com", "[Stellaria] Message from $name", $message, "From:$address");
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Stellaria</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Stellaria is a natal chart drawing tool for astrologers.<br/>It aims to be beautiful, accurate and easy to use.">
    <meta name="author" content="Jean-André Santoni">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-bottom: 40px;
      }

      /* Custom container */
      .container-narrow {
        margin: 0 auto;
        max-width: 768px;
      }

      /* Main marketing message and sign up button */
      .jumbotron {
        margin: 30px 0 60px 0;
        padding: 40px 0;
        text-align: left;
        background: #5855d6 50% 50%;
        color: #fff;
        text-shadow: 0 1px 3px rgba(0,0,0,.4), 0 0 30px rgba(0,0,0,.075);
        -webkit-box-shadow: inset 0 3px 7px rgba(0,0,0,.2), inset 0 -3px 7px rgba(0,0,0,.2);
        -moz-box-shadow: inset 0 3px 7px rgba(0,0,0,.2), inset 0 -3px 7px rgba(0,0,0,.2);
        box-shadow: inset 0 3px 7px rgba(0,0,0,.2), inset 0 -3px 7px rgba(0,0,0,.2);
      }
      
      .jumbotron h1 {
        font-size: 72px;
        line-height: 1;
      }
      .jumbotron .btn {
        font-size: 21px;
        padding: 14px 24px;
      }

      .example {
        padding: 30px 0;
        background: #f5f5f5;
        border-top: 1px solid #ddd;
        border-bottom: 1px solid #ddd;
      }

      .form-horizontal {
        margin-top: 30px;
      }

      .marketing {
        margin: 0 0 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }
      .footer {
        padding-top: 30px;
      }
    </style>
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="bootstrap/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="bootstrap/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"   href="bootstrap/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed"                 href="bootstrap/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon"                                href="bootstrap/ico/favicon.png">
  </head>

  <body>

    <div class="container-narrow">

      <div class="header">
        <ul class="nav nav-pills pull-right">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <h3 class="text-muted">Stellaria</h3>
      </div>

    </div>

    <div class="jumbotron">
      <div class="container-narrow">
        <h1>Now available on iPad and iPhone!</h1>
        <p>Stellaria is a natal chart drawing tool for astrologers.<br/>It aims to be beautiful, accurate and easy to use.</p>
        <a class="btn btn-large btn-default" href="https://itunes.apple.com/us/app/stellaria/id710885722"><i class="icon-arrow-right"></i> App Store</a>
      </div>
    </div>

    <div class="container-narrow">

      <?php

        if ($thx) {
          echo "<div class=\"alert alert-success\">Thank you for your message. I will reply as soon as possible.</div>";
        }

      ?>

      <h3 class="text-muted"><a id="about"></a>Features</h3>

      <div class="row marketing">
        <div class="col-lg-6">
          <h4>Neat</h4>
          <p>The charts are drawn using vector graphics, the result looks nice at any resolution.</p>

          <h4>Accurate</h4>
          <p>Based on the famous Swiss Ephemeris for very accurate astronomical computation.</p>

          <h4>Social</h4>
          <p>Share your chart on Facebook or Twitter, or send it in email.</p>
        </div>

        <div class="col-lg-6">
          <h4>Easy</h4>
          <p>Can look for cities and timezones in a large database. It also automatically compute daylight saving time.</p>

          <h4>Full featured</h4>
          <p>Is able to display 25 different celestial bodies, and 15 house systems.</p>

          <h4>Printing</h4>
          <p>You can print your charts directly from the device, or export them as PDF for later printing.</p>
        </div>
      </div>

    </div>

    <div class="example">
      <div class="container-narrow">

        <h3 class="text-muted"><a id="contact"></a>Get in touch</h3>
        
        <form class="form-horizontal" role="form" method="POST" action="">
          <div class="form-group">
            <label for="inputName" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
              <input class="form-control" name="inputName" id="inputName" placeholder="Name">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="Email">
            </div>
          </div>
          <div class="form-group">
            <label for="inputMessage" class="col-sm-2 control-label">Message</label>
            <div class="col-sm-10">
              <textarea class="form-control" name="inputMessage" id="inputMessage" rows="5" placeholder="Your message here"></textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-primary">Send message</button>
            </div>
          </div>
        </form>

      </div>
    </div>

    <div class="container-narrow">
      <div class="footer">
        <p>&copy; Jean-André Santoni 201-2015</p>
      </div>
    </div>

    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap-transition.js"></script>
    <script src="bootstrap/js/bootstrap-alert.js"></script>
    <script src="bootstrap/js/bootstrap-modal.js"></script>
    <script src="bootstrap/js/bootstrap-dropdown.js"></script>
    <script src="bootstrap/js/bootstrap-scrollspy.js"></script>
    <script src="bootstrap/js/bootstrap-tab.js"></script>
    <script src="bootstrap/js/bootstrap-tooltip.js"></script>
    <script src="bootstrap/js/bootstrap-popover.js"></script>
    <script src="bootstrap/js/bootstrap-button.js"></script>
    <script src="bootstrap/js/bootstrap-collapse.js"></script>
    <script src="bootstrap/js/bootstrap-carousel.js"></script>
    <script src="bootstrap/js/bootstrap-typeahead.js"></script>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    
      ga('create', 'UA-50454475-1', 'stellaria.fr');
      ga('send', 'pageview');
    
    </script>
  </body>
</html>
