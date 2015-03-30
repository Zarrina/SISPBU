<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Sistem Informasi SPBU</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Le styles -->
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <style type="text/css">
            body {
                padding-top: 40px;
                padding-bottom: 20px;
            }
            img{
                width : 700px;
                height : 700px;
            }
        </style>
        <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="../assets/js/html5shiv.js"></script>
        <![endif]-->

        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href="../assets/ico/spbu.png">
        <script type="text/javascript"
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCeXuhnPuSjpxqaDqviuxysoNxlfxc6mA0">
        </script>
        <script type="text/javascript">
            function initialize() {
                var mapOptions = {
                    center: {lat: -34.397, lng: 150.644},
                    zoom: 8
                };
                var map = new google.maps.Map(document.getElementById('map-canvas'),
                        mapOptions);
            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
    </head>

    <body>

        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="brand" href="#">Asik Surabaya</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li class="active"><a href="index.html">SPBU</a></li>
                            <li><a href="#Hotel">Hotel</a></li>
                            <li><a href="#Sport Center">Sport Center</a></li>
                            <li><a href="#Kuliner">Kuliner</a></li>
                            <li><a href="#Bengkel">Bengkel</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="container">
            <h1>Sistem Informasi SPBU</h1>
            <p class="lead">Sistem Informasi ini berfungsi sebagai petunjuk lokasi SPBU yang ditampilkan 
                dalam GPS dan dapat juga menampilkan detail informasi-informasi SPBU yang ada disekitar 
                Surabaya Timur. Detail informasi tersebut yaitu dapat menampilkan informasi terkait lokasi, 
                fasilitas, produk, dan jam operasional SPBU.</p>
        </div>

    </header>
    <div class="container">

        <div class="masthead">
            <h3 class="muted"></h3>
            <div class="navbar">
                <div class="navbar-inner">
                    <div class="container">
                        <ul class="nav">
                            <li class="active"><a href="#">Beranda</a></li>
                            <li><a href="#">Pencarian</a></li>
                            <li><a href="#">Posting</a></li>
                        </ul>
                    </div>
                </div>
            </div><!-- /.navbar -->
        </div>
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap-transition.js"></script>
    <script src="../assets/js/bootstrap-alert.js"></script>
    <script src="../assets/js/bootstrap-modal.js"></script>
    <script src="../assets/js/bootstrap-dropdown.js"></script>
    <script src="../assets/js/bootstrap-scrollspy.js"></script>
    <script src="../assets/js/bootstrap-tab.js"></script>
    <script src="../assets/js/bootstrap-tooltip.js"></script>
    <script src="../assets/js/bootstrap-popover.js"></script>
    <script src="../assets/js/bootstrap-button.js"></script>
    <script src="../assets/js/bootstrap-collapse.js"></script>
    <script src="../assets/js/bootstrap-carousel.js"></script>
    <script src="../assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>