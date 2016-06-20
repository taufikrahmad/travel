<?php $this->load->view('plugins')?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a modern responsive CSS framework based on Material Design by Google. ">
    <title><?=$title?></title>
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
    <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
    <!--  Android 5 Chrome Color-->
    <meta name="theme-color" content="#EE6E73">
    <script src="//cdn.transifex.com/live.js"></script>
    <script type="text/javascript" src="./Waves - Materialize_files/settings.all.jsonp"></script><script id="_carbonads_projs" type="text/javascript" src="http://srv.carbonads.net/ads/C6AILKT.json?segment=placement:materializecss&amp;callback=_carbonads_go"></script><script type="text/javascript" src="./Waves - Materialize_files/languages.jsonp"></script><style type="text/css">.txlive-langselector { position:fixed;z-index:999999;min-width: 120px;line-height:32px;background-color:rgba( 0,0,0,0.75 );box-shadow: 0 0 4px rgba( 0,0,0,0.3 );color: #fff;font-size: 14px;font-family: inherit; }.txlive-langselector * { margin: 0;padding: 0;border: 0;font-size: 100%;font: inherit;vertical-align: baseline;border-radius: 0;-moz-border-radius:0;-webkit-border-radius:0;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-border-radius:0;opacity:1; }.txlive-langselector.txlive-langselector-topleft { top:0;left:0;right:auto;bottom:auto;border-radius: 0 0 2px 0;-moz-border-radius: 0 0 2px 0;-webkit-border-radius: 0 0 2px 0; }.txlive-langselector.txlive-langselector-topright { top:0;left:auto;right:0;bottom:auto;border-radius: 0 2px 0 0;-moz-border-radius: 0 2px 0 0;-webkit-border-radius: 0 2px 0 0; }.txlive-langselector.txlive-langselector-bottomleft { top:auto;left:0;right:auto;bottom:0;border-radius: 0 2px 0 0;-moz-border-radius: 0 2px 0 0;-webkit-border-radius: 0 2px 0 0; }.txlive-langselector.txlive-langselector-bottomright { top:auto;left:auto;right:0;bottom:0;border-radius: 2px 0 0 0;-moz-border-radius: 2px 0 0 0;-webkit-border-radius: 2px 0 0 0; }.txlive-langselector .txlive-langselector-toggle { overflow: hidden;display: block;padding:2px 16px;width: 100%;height:36px;cursor:pointer;cursor:hand; }.txlive-langselector.txlive-langselector-topleft .txlive-langselector-toggle { overflow: hidden;display: block;border-top:2px solid #006f9f;padding:2px 16px;height:36px;line-height:32px;cursor:pointer;cursor:hand; }.txlive-langselector.txlive-langselector-topright .txlive-langselector-toggle { overflow: hidden;display: block;border-top:2px solid #006f9f;padding:2px 16px;height:36px;line-height:32px;cursor:pointer;cursor:hand; }.txlive-langselector.txlive-langselector-bottomleft .txlive-langselector-toggle { overflow: hidden;display: block;border-bottom:2px solid #006f9f;padding:2px 16px;height:36px;line-height:32px;cursor:pointer;cursor:hand; }.txlive-langselector.txlive-langselector-bottomright .txlive-langselector-toggle { overflow: hidden;display: block;border-bottom:2px solid #006f9f;padding:2px 16px;height:36px;line-height:32px;cursor:pointer;cursor:hand; }.txlive-langselector .txlive-langselector-current { float: left;padding: 0;max-width: 200px;overflow:hidden;white-space: nowrap;text-overflow:ellipsis; }.txlive-langselector .txlive-langselector-marker { float: right;display: block;position:relative;width:0;height:0;margin-left:8px;margin-top: 13px;border-right:4px dashed transparent;border-left:4px dashed transparent;}.txlive-langselector-topright .txlive-langselector-marker,.txlive-langselector-topleft .txlive-langselector-marker {border-top:4px solid #fff;}.txlive-langselector-bottomright .txlive-langselector-marker,.txlive-langselector-bottomleft .txlive-langselector-marker {border-bottom:4px solid #fff;}.txlive-langselector-list { position:absolute;width: 100%;margin:0;padding:10px 0;display:none;background-color:#eaf1f7;box-shadow: 0 0 4px rgba( 0,0,0,0.3 );color:#666;list-style-type:none; }.txlive-langselector-list.txlive-langselector-list-opened { display:block; }.txlive-langselector-list > li {padding:0 16px;width:100%;overflow:hidden;white-space: nowrap;text-overflow:ellipsis;}.txlive-langselector-list > li:hover {background-color:#b0b9c1;color:#fff;cursor:pointer;cursor:hand;}.txlive-langselector-topright > .txlive-langselector-list {top:40px;left:auto;right:0;bottom:auto;border-bottom: 1px solid #f4f7f9;}.txlive-langselector-topleft > .txlive-langselector-list {top:40px;left:0;right:auto;bottom:auto;border-bottom: 1px solid #f4f7f9;}.txlive-langselector-bottomright > .txlive-langselector-list {top:auto;left:auto;right:0;bottom:40px;border-top: 1px solid #f4f7f9;}.txlive-langselector-bottomleft > .txlive-langselector-list {top:auto;left:0;right:auto;bottom:40px;border-top: 1px solid #f4f7f9;}.txlive-langselector-topright > .txlive-langselector-list,.txlive-langselector-bottomright > .txlive-langselector-list {border-radius: 2px 0 0 2px;-moz-border-radius: 2px 0 0 2px;-webkit-border-radius: 2px 0 0 2px;}.txlive-langselector-topleft > .txlive-langselector-list,.txlive-langselector-bottomleft > .txlive-langselector-list {border-radius: 0 2px 2px 0;-moz-border-radius: 0 2px 2px 0;-webkit-border-radius: 0 2px 2px 0;}</style><script type="text/javascript" src="http://fallbacks.carbonads.com/home/e99a260b94849497ea962f674f0aebd9//materializecss/8/"></script>
  </head>
  <body>
    <header>
      <div class="container"><a href="" data-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only"><i class="material-icons">menu</i></a></div>
      <ul id="nav-mobile" class="side-nav fixed" style="transform: translateX(0%);">
        <li class="logo"><a id="logo-container" class="brand-logo">
            <object  type="image/svg+xml" data="<?=base_url()?>assets/img/logo.svg"
            width="70%">Your browser does not support SVG</object></a></li>
        
        <li class="bold <?=$this->uri->segment(1) == 'artikel' ? 'active' : ''?>"><a href="<?=base_url()?>index.php/paket" class="waves-effect waves-teal">Paket</a>
        </li>
        <li class="bold"><a href="<?=base_url()?>home/logout" class="waves-effect waves-teal">Logout</a></li>
      </ul>
    </header>
    <main>

<div class="section" id="index-banner" style="height= 100px;">
  <div class="container">
    <div class="row">
      <div class="col s12 m7">
        <h1 class="header center-on-small-only"><?=isset($title) ? $title : '';?></h1>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <!--  Outer row  -->
  <div class="row">
  <br/><br/>
    <?php
    if(isset($view)){
        $this->load->view($view);
      }
    ?>
    <br/><br/><br/><br/><br/>
      </div>
    </div> <!-- End Container -->
  </main>
<footer class="page-footer">
      <div class="footer-copyright">
        <div class="container">
        © 2016, All rights reserved.
        <a class="grey-text text-lighten-4 right" href="">XYZ</a>
        </div>
      </div>
    </footer>
    <!-- Twitter Button -->
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

    <!-- Google Plus Button-->
    <script src="https://apis.google.com/js/platform.js" async defer></script>

  </body>
</html>