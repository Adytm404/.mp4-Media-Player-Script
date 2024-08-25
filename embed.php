<?php
$id = $_GET['id'];
$id = base64_decode($id);
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Otakudesu Clone Streaming</title>
    <link rel="icon" href="/stream/logo-desu.png" type="image/x-icon" />
    <meta name="robots" content="noindex" />
    <meta name="googlebot" content="noindex" />
    <meta name="referrer" content="never" />
    <meta name="referrer" content="no-referrer" />
    <style type="text/css">
      * {
        margin: 0;
        padding: 0
      }

      #arsipin {
        position: absolute;
        width: 100% !important;
        height: 100% !important
      }

      .jw-button-color:hover,
      .jw-toggle,
      .jw-toggle:hover,
      .jw-open,
      .jw-progress {
        color: #008fee !important;
      }

      .jw-active-option {
        background-color: #008fee !important;
      }

      .jw-progress {
        background: #008fee !important;
      }

      .jw-skin-seven .jw-toggle.jw-off {
        color: #fff !important
      }
    </style>
    <script src="//content.jwplatform.com/libraries/zgIRUsiD.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <div id="arsipin" class="arsipin"></div>
    <script type="text/javascript">
      var playerInstance = jwplayer('arsipin');
      playerInstance.setup({
        title: '',
        tracks: [{
          file: '',
          kind: 'captions',
          'default': true
        }],
        sources: [{
          'file': '<?=$id?>',
          'type': 'video/mp4'
        }],
        image: "https://i.pinimg.com/originals/6f/2d/34/6f2d34fe6c8746c56c14fbc55308ef99.jpg",
        captions: {
          color: '#FFFF00',
          fontSize: 17,
          backgroundOpacity: 50
        },
      });
    </script>
    </center>
    <!-- Histats.com  START  (aync)-->
    <script type="text/javascript">
      var _Hasync = _Hasync || [];
      _Hasync.push(['Histats.start', '1,4254384,4,0,0,0,00010000']);
      _Hasync.push(['Histats.fasi', '1']);
      _Hasync.push(['Histats.track_hits', '']);
      (function() {
        var hs = document.createElement('script');
        hs.type = 'text/javascript';
        hs.async = true;
        hs.src = ('//s10.histats.com/js15_as.js');
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
      })();
    </script>
    <noscript>
      <a href="/" target="_blank">
        <img src="//sstatic1.histats.com/0.gif?4254384&101" alt="web statistics" border="0">
      </a>
    </noscript>
    <!-- Histats.com  END  -->
    <style>
      .box_item_ads_popup {
        position: fixed;
        z-index: 999;
        left: 0;
        margin: 0 auto;
        text-align: center;
        right: 0;
        width: 500px;
        height: 340px
      }

      .box_item_ads_popup img {
        max-width: 350px;
        max-height: 350px
      }

      .box_item_ads_popup .close-button {
        width: 30%;
        margin: auto;
        padding: 6px 10px;
        background: red;
        font-size: 11px;
        color: #fff;
      }

      @media only screen and (max-width:980px) {
        .box_item_ads_popup img {
          max-width: 300px;
          max-height: 250px
        }

        .box_item_ads_popup {
          width: 450px;
          height: 280px
        }
      }

      .box_item_ads .ads-460 {
        width: calc(50% - 0px)
      }

      .box_item_ads .ads-460 img,
      .box_item_ads .ads-720 img {
        height: 70px
      }

      .box_item_ads,
      .box_item_ads .ads-460,
      .box_item_ads .ads-720 {
        margin-bottom: 0;
        margin-top: 0
      }

      .box_item_ads .ads-720 {
        display: block
      }

      .box_item_ads {
        margin-bottom: 5px;
        display: block
      }

      .box_item_ads.box_item_ads_popup img {
        max-width: 460px;
        max-height: 280px
      }

      .box_item_ads_popup {
        width: 460px;
        height: 280px
      }
      }

      @media only screen and (max-width:480px) {
        .box_item_ads_popup img {
          max-width: 280px;
          max-height: 170px
        }

        .box_item_ads_popup {
          width: 335px;
          height: 234px
        }
      }

      @media only screen and (max-width:425px) {
        .box_item_ads_popup img {
          max-width: 250px;
          max-height: 140px
        }

        .box_item_ads_popup {
          width: 335px;
          height: 234px
        }
      }

      @media only screen and (max-width:320px) {
        .box_item_ads_popup img {
          max-width: 210px;
          max-height: 120px
        }

        .box_item_ads_popup {
          width: 335px;
          height: 234px
        }
      }
    </style>
    <script>
      $(document).ready(function() {
        $('div.close-button').click(function(eve) {
          eve.preventDefault();
          $(this).parents('div.box_item_ads_popup').fadeOut('fast');
        });
      });
    </script>
    <!-- <div class="box_item_ads_popup" style="display: flex;justify-content: center;align-items: center;background: transparent;height: 100%;">
      <div>
        <a href="https://luxury138.link/otakudesuplayer111" target="_blank" rel="nofollow">
          <img src="https://desustream.me/banner/Otakudesu-lx.gif" rel="nofollow" alt="Otakudesu" title="MAIN POKER ONLINE DAPAT VIVO V21 | KDSLOTS">
        </a>
        <div class="close-button">Tutup Iklan</div>
      </div> -->