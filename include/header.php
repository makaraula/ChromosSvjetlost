<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <base href="<?php echo _SITE_URL; ?>" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Chromos Svjetlost</title>
  <meta http-equiv='Cache-control' content='no-cache' />
  <meta name='robots' content='index,follow' />
  <meta name="Copyright" content="Chromos Svjetlost" />
  <meta name="DC.language" content="hr-HR" />
  <meta name="DC.title" content="Chromos Svjetlost" />
  <meta name="DC.format" content="text/html" />
  <meta name="DC.publisher" content="Chromos Svjetlost" />
  <meta name="description" content=""/>
  <meta name="keywords" content=""/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="../images/favicon.png">
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
  <link href="../js/bxslider/jquery.bxslider.css" rel="stylesheet" />
  <link rel="stylesheet" href="../js/magnific-popup/magnific-popup.css">
  <link href="../css/normalise.css" rel="stylesheet" type="text/css" />
  <link href="../css/style.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
  <script src="https://unpkg.com/scrollreveal@3.3.2/dist/scrollreveal.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
  <script src="../js/magnific-popup/jquery.magnific-popup.min.js"></script>
  <script src="../js/bxslider/jquery.bxslider.min.js"></script>
  <script type="text/javascript" src="../js/jquery.lazy.min.js"></script>
  <script type="text/javascript" src="../js/functions.js"></script>

  <!-- HTML5 shiv and respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->

   <script type="text/javascript">
       google.maps.event.addDomListener(window, 'load', init);

       function init() {
           var mapOptions = {
               zoom: 12,
               scrollwheel: false,
               center: new google.maps.LatLng(45.1611703, 17.7065771),
               styles: [{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#d3d3d3"}]},{"featureType":"transit","stylers":[{"color":"#808080"},{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"visibility":"on"},{"color":"#b3b3b3"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"weight":1.8}]},{"featureType":"road.local","elementType":"geometry.stroke","stylers":[{"color":"#d7d7d7"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ebebeb"}]},{"featureType":"administrative","elementType":"geometry","stylers":[{"color":"#a7a7a7"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"landscape","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#efefef"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#696969"}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"visibility":"on"},{"color":"#737373"}]},{"featureType":"poi","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#d6d6d6"}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"color":"#dadada"}]}]
           };
           var mapElement = document.getElementById('map');
           var map = new google.maps.Map(mapElement, mapOptions);
           var marker = new google.maps.Marker({
               position: new google.maps.LatLng(45.1611703, 17.7065771),
               map: map,
               icon:'../images/pin.png',
               title: 'Chromos Svjetlost'
           });
       }
   </script>

</head>

<body>

<div class="top-holder">
  <div class="row header-top">
    <div class="wrapper">
      <ul class="top-links">
        <li><a href="o_nama.php">O nama</a></li>
        <li><a href="kontakt.php">Kontakt</a></li>
      </ul><!-- end of .top-links -->
    </div><!-- end of .wrapper -->
  </div><!-- end of .header-top -->

  <div class="row header">
    <div class="wrapper">
      <div class="logo">
        <a href="home.php"><img src="../images/cs-logo.png" alt="" /></a>
      </div><!-- end of .logo -->
      <div class="w-search layout_fullscreen ush_search_1">
        <a href="javascript:;" class="w-search-open"><img src="../images/search-icon.svg" alt="" /></a>
        <div class="w-search-form">
          <a href="javascript:;" class="close"><img src="../images/close.svg" alt="" /></a>
          <form id="" method="GET" action="pretraga" name="" class="cs-search">
            <input id="polje" class="input-polje" type="text" value="" name="s" placeholder="Pretraga...">
            <input class="search-icon" type="submit" value="" name="pretraga">
          </form>
        </div><!-- end of .w-search-form -->
      </div><!-- end of .w-search -->
      <div class="izbornik">
        <ul class="menu-list">
          <li class="has-sub">
            <a href="javascript:;" class="sub-toggle">Aqualux program</a>
            <ul class="sub-menu">
              <li>
                <a href="javascript:;" class="sub-toggle sub-arrow">Naziv kategorije 1</a>
                <ul class="sub-menu-2">
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 1-1</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 1-2</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 1-3</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 1-4</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 1-5</a>
                  </li>
                </ul><!-- end of .sub-menu-2 -->
              </li>
              <li>
                <a href="javascript:;" class="sub-toggle sub-arrow">Naziv kategorije 2</a>
                <ul class="sub-menu-2">
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 2-1</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 2-2</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 2-3</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 2-4</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 2-5</a>
                  </li>
                </ul><!-- end of .sub-menu-2 -->
              </li>
              <li>
                <a href="javascript:;" class="sub-toggle sub-arrow">Naziv kategorije 3</a>
                <ul class="sub-menu-2">
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 3-1</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 3-2</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 3-3</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 3-4</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 3-5</a>
                  </li>
                </ul><!-- end of .sub-menu-2 -->
              </li>
            </ul><!-- end of .sub-menu -->
          </li>
          <li class="has-sub">
            <a href="javascript:;" class="sub-toggle">Zaštita metala</a>
            <ul class="sub-menu">
              <li>
                <a href="javascript:;" class="sub-toggle sub-arrow">Naziv kategorije 1</a>
                <ul class="sub-menu-2">
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 1-1</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 1-2</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 1-3</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 1-4</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 1-5</a>
                  </li>
                </ul><!-- end of .sub-menu-2 -->
              </li>
              <li>
                <a href="javascript:;" class="sub-toggle sub-arrow">Naziv kategorije 2</a>
                <ul class="sub-menu-2">
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 2-1</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 2-2</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 2-3</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 2-4</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 2-5</a>
                  </li>
                </ul><!-- end of .sub-menu-2 -->
              </li>
              <li>
                <a href="javascript:;" class="sub-toggle sub-arrow">Naziv kategorije 3</a>
                <ul class="sub-menu-2">
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 3-1</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 3-2</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 3-3</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 3-4</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 3-5</a>
                  </li>
                </ul><!-- end of .sub-menu-2 -->
              </li>
            </ul><!-- end of .sub-menu -->
          </li>
          <li class="has-sub">
            <a href="javascript:;" class="sub-toggle">Zaštita drva</a>
            <ul class="sub-menu">
              <li>
                <a href="javascript:;" class="sub-toggle sub-arrow">Naziv kategorije 1</a>
                <ul class="sub-menu-2">
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 1-1</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 1-2</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 1-3</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 1-4</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 1-5</a>
                  </li>
                </ul><!-- end of .sub-menu-2 -->
              </li>
              <li>
                <a href="javascript:;" class="sub-toggle sub-arrow">Naziv kategorije 2</a>
                <ul class="sub-menu-2">
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 2-1</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 2-2</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 2-3</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 2-4</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 2-5</a>
                  </li>
                </ul><!-- end of .sub-menu-2 -->
              </li>
              <li>
                <a href="javascript:;" class="sub-toggle sub-arrow">Naziv kategorije 3</a>
                <ul class="sub-menu-2">
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 3-1</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 3-2</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 3-3</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 3-4</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 3-5</a>
                  </li>
                </ul><!-- end of .sub-menu-2 -->
              </li>
            </ul><!-- end of .sub-menu -->
          </li>
          <li class="has-sub">
            <a href="javascript:;" class="sub-toggle">Fasade</a>
            <ul class="sub-menu">
              <li>
                <a href="javascript:;" class="sub-toggle sub-arrow">Naziv kategorije 1</a>
                <ul class="sub-menu-2">
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 1-1</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 1-2</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 1-3</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 1-4</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 1-5</a>
                  </li>
                </ul><!-- end of .sub-menu-2 -->
              </li>
              <li>
                <a href="javascript:;" class="sub-toggle sub-arrow">Naziv kategorije 2</a>
                <ul class="sub-menu-2">
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 2-1</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 2-2</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 2-3</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 2-4</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 2-5</a>
                  </li>
                </ul><!-- end of .sub-menu-2 -->
              </li>
              <li>
                <a href="javascript:;" class="sub-toggle sub-arrow">Naziv kategorije 3</a>
                <ul class="sub-menu-2">
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 3-1</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 3-2</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 3-3</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 3-4</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 3-5</a>
                  </li>
                </ul><!-- end of .sub-menu-2 -->
              </li>
            </ul><!-- end of .sub-menu -->
          </li>
          <li class="has-sub">
            <a href="javascript:;" class="sub-toggle">Unutarnji zidovi</a>
            <ul class="sub-menu">
              <li>
                <a href="javascript:;" class="sub-toggle sub-arrow">Naziv kategorije 1</a>
                <ul class="sub-menu-2">
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 1-1</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 1-2</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 1-3</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 1-4</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 1-5</a>
                  </li>
                </ul><!-- end of .sub-menu-2 -->
              </li>
              <li>
                <a href="javascript:;" class="sub-toggle sub-arrow">Naziv kategorije 2</a>
                <ul class="sub-menu-2">
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 2-1</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 2-2</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 2-3</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 2-4</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 2-5</a>
                  </li>
                </ul><!-- end of .sub-menu-2 -->
              </li>
              <li>
                <a href="javascript:;" class="sub-toggle sub-arrow">Naziv kategorije 3</a>
                <ul class="sub-menu-2">
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 3-1</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 3-2</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 3-3</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 3-4</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 3-5</a>
                  </li>
                </ul><!-- end of .sub-menu-2 -->
              </li>
            </ul><!-- end of .sub-menu -->
          </li>
          <li class="has-sub">
            <a href="javascript:;" class="sub-toggle">TOP MIX sustav</a>
            <ul class="sub-menu">
              <li>
                <a href="javascript:;" class="sub-toggle sub-arrow">Naziv kategorije 1</a>
                <ul class="sub-menu-2">
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 1-1</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 1-2</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 1-3</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 1-4</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 1-5</a>
                  </li>
                </ul><!-- end of .sub-menu-2 -->
              </li>
              <li>
                <a href="javascript:;" class="sub-toggle sub-arrow">Naziv kategorije 2</a>
                <ul class="sub-menu-2">
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 2-1</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 2-2</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 2-3</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 2-4</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 2-5</a>
                  </li>
                </ul><!-- end of .sub-menu-2 -->
              </li>
              <li>
                <a href="javascript:;" class="sub-toggle sub-arrow">Naziv kategorije 3</a>
                <ul class="sub-menu-2">
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 3-1</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 3-2</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 3-3</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 3-4</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 3-5</a>
                  </li>
                </ul><!-- end of .sub-menu-2 -->
              </li>
            </ul><!-- end of .sub-menu -->
          </li>
          <li class="has-sub">
            <a href="javascript:;" class="sub-toggle">Ostalo</a>
            <ul class="sub-menu">
              <li>
                <a href="javascript:;" class="sub-toggle sub-arrow">Naziv kategorije 1</a>
                <ul class="sub-menu-2">
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 1-1</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 1-2</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 1-3</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 1-4</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 1-5</a>
                  </li>
                </ul><!-- end of .sub-menu-2 -->
              </li>
              <li>
                <a href="javascript:;" class="sub-toggle sub-arrow">Naziv kategorije 2</a>
                <ul class="sub-menu-2">
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 2-1</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 2-2</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 2-3</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 2-4</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 2-5</a>
                  </li>
                </ul><!-- end of .sub-menu-2 -->
              </li>
              <li>
                <a href="javascript:;" class="sub-toggle sub-arrow">Naziv kategorije 3</a>
                <ul class="sub-menu-2">
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 3-1</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 3-2</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 3-3</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 3-4</a>
                  </li>
                  <li>
                    <a href="proizvodi.php">Naziv podkategorije 3-5</a>
                  </li>
                </ul><!-- end of .sub-menu-2 -->
              </li>
            </ul><!-- end of .sub-menu -->
          </li>
        </ul><!-- end of .menu-list -->
      </div><!-- end of .izbornik -->
    </div><!-- end of .wrapper -->
  </div><!-- end of .header -->
</div><!-- end of .top-holder -->
