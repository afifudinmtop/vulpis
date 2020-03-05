<html>
<head>
<title>VULPIS</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link rel="stylesheet" href="./main.css">

<link rel="manifest" href="./manifest.json">
<meta name="theme-color" content="white"/>
<link rel="icon" href="./favicon.ico" type="./image/x-icon" />
<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="./image/vulpis-152.png">
<meta name="theme-color" content="white"/>
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-title" content="VULPIS">
<meta name="msapplication-TileImage" content="./image/vulpis-144.png">
<meta name="msapplication-TileColor" content="#FFFFFF">

</head>
<body>

<div id="utama" class="utama">
  <div id="atas" class="atas"></div>
  <script>
          var display1 = "<?php echo $_COOKIE["display1"]?>";
          var display2 = "<?php echo $_COOKIE["display2"]?>";
          var display3 = "<?php echo $_COOKIE["display3"]?>";
          var display4 = "<?php echo $_COOKIE["display4"]?>";
          var display5 = "<?php echo $_COOKIE["display5"]?>";
          var display6 = "<?php echo $_COOKIE["display6"]?>";
          var display7 = "<?php echo $_COOKIE["display7"]?>";
          var display8 = "<?php echo $_COOKIE["display8"]?>";
          var display9 = "<?php echo $_COOKIE["display9"]?>";
          var display10 = "<?php echo $_COOKIE["display10"]?>";
  </script>

  <div id="judul" class="judul">VULPIS</div>
  <div id="judul1" class="judul1">Website Status Monitor</div>

  <div id="list" class="list">
    <!-- baris1 -->
    <div id="baris1" class="baris">
      <div id="up1" class="up" style="display:none"><img src="./image/up.png" alt="" height="30px" width="30px"></div>
      <div id="down1" class="down" style="display:none;"><img src="./image/down.png" alt="" height="30px" width="30px"></div>

      <div id="teks" class="teks">
        <div id="name1" class="name"></div>
        <div id="url1" class="url"></div>
        <script>
          var url1 = "<?php echo $_COOKIE["url1"]?>"
          var name1 = "<?php echo $_COOKIE["name1"]?>"
          document.getElementById("url1").innerHTML = url1;
          document.getElementById("name1").innerHTML = name1;
          if (display1 == 1) {
            var tambahx = 1;
            document.getElementById("baris1").style.display = "block";
          }
          else {
            document.getElementById("baris1").style.display = "none";
          }
        </script>
      </div>

      <div id="settings1" class="settings" onclick="popup1()">
        <img src="./image/settings.png" alt="" height="25px" width="25px">
      </div>

    </div>

    <!-- baris2 -->
    <div id="baris2" class="baris">
      <div id="up2" class="up" style="display:none"><img src="./image/up.png" alt="" height="30px" width="30px"></div>
      <div id="down2" class="down" style="display:none;"><img src="./image/down.png" alt="" height="30px" width="30px"></div>
      <div id="teks" class="teks">
        <div id="name2" class="name"></div>
        <div id="url2" class="url"></div>
        <script>
          var url2 = "<?php echo $_COOKIE["url2"]?>"
          var name2 = "<?php echo $_COOKIE["name2"]?>"
          console.log(name2);
          document.getElementById("url2").innerHTML = url2;
          document.getElementById("name2").innerHTML = name2;
          if (display2 == 1) {
            var tambahx = 2;
            document.getElementById("baris2").style.display = "block";
            console.log(name2);
          }
          else {
            document.getElementById("baris2").style.display = "none";
          }
        </script>
      </div>
      <div id="settings2" class="settings" onclick="popup2()">
        <img src="./image/settings.png" alt="" height="25px" width="25px">
      </div>
    </div>

    <!-- baris3 -->
    <div id="baris3" class="baris">
      <div id="up3" class="up" style="display:none"><img src="./image/up.png" alt="" height="30px" width="30px"></div>
      <div id="down3" class="down" style="display:none;"><img src="./image/down.png" alt="" height="30px" width="30px"></div>
      <div id="teks" class="teks">
        <div id="name3" class="name"></div>
        <div id="url3" class="url"></div>
        <script>
          var url3 = "<?php echo $_COOKIE["url3"]?>"
          var name3 = "<?php echo $_COOKIE["name3"]?>"
          document.getElementById("url3").innerHTML = url3;
          document.getElementById("name3").innerHTML = name3;
          if (display3 == 1) {
            var tambahx = 3;
            document.getElementById("baris3").style.display = "block";
          }
          else {
            document.getElementById("baris3").style.display = "none";
          }
        </script>
      </div>
      <div id="settings3" class="settings" onclick="popup3()">
        <img src="./image/settings.png" alt="" height="25px" width="25px">
      </div>
    </div>

    <!-- baris4 -->
    <div id="baris4" class="baris">
      <div id="up4" class="up" style="display:none"><img src="./image/up.png" alt="" height="30px" width="30px"></div>
      <div id="down4" class="down" style="display:none;"><img src="./image/down.png" alt="" height="30px" width="30px"></div>
      <div id="teks" class="teks">
        <div id="name4" class="name"></div>
        <div id="url4" class="url"></div>
        <script>
          var url4 = "<?php echo $_COOKIE["url4"]?>"
          var name4 = "<?php echo $_COOKIE["name4"]?>"
          document.getElementById("url4").innerHTML = url4;
          document.getElementById("name4").innerHTML = name4;
          if (display4 == 1) {
            var tambahx = 4;
            document.getElementById("baris4").style.display = "block";
          }
          else {
            document.getElementById("baris4").style.display = "none";
          }
        </script>
      </div>
      <div id="settings4" class="settings" onclick="popup4()">
        <img src="./image/settings.png" alt="" height="25px" width="25px">
      </div>
    </div>

    <!-- baris5 -->
    <div id="baris5" class="baris">
      <div id="up5" class="up" style="display:none"><img src="./image/up.png" alt="" height="30px" width="30px"></div>
      <div id="down5" class="down" style="display:none;"><img src="./image/down.png" alt="" height="30px" width="30px"></div>
      <div id="teks" class="teks">
        <div id="name5" class="name"></div>
        <div id="url5" class="url"></div>
        <script>
          var url5 = "<?php echo $_COOKIE["url5"]?>"
          var name5 = "<?php echo $_COOKIE["name5"]?>"
          document.getElementById("url5").innerHTML = url5;
          document.getElementById("name5").innerHTML = name5;
          if (display5 == 1) {
            var tambahx = 5;
            document.getElementById("baris5").style.display = "block";
          }
          else {
            document.getElementById("baris5").style.display = "none";
          }
        </script>
      </div>
      <div id="settings5" class="settings" onclick="popup5()">
        <img src="./image/settings.png" alt="" height="25px" width="25px">
      </div>
    </div>

    <!-- baris6 -->
    <div id="baris6" class="baris" style="display:none">
      <div id="up6" class="up" style="display:none"><img src="./image/up.png" alt="" height="30px" width="30px"></div>
      <div id="down6" class="down" style="display:none;"><img src="./image/down.png" alt="" height="30px" width="30px"></div>
      <div id="teks" class="teks">
        <div id="name6" class="name"></div>
        <div id="url6" class="url"></div>
        <script>
          var url6 = "<?php echo $_COOKIE["url6"]?>"
          var name6 = "<?php echo $_COOKIE["name6"]?>"
          document.getElementById("url6").innerHTML = url6;
          document.getElementById("name6").innerHTML = name6;
          if (display6 == 1) {
            var tambahx = 6;
            document.getElementById("baris6").style.display = "block";
          }
          else {
            document.getElementById("baris6").style.display = "none";
          }
        </script>
      </div>
      <div id="settings6" class="settings" onclick="popup6()">
        <img src="./image/settings.png" alt="" height="25px" width="25px">
      </div>
    </div>

    <!-- baris7 -->
    <div id="baris7" class="baris" style="display:none">
      <div id="up7" class="up" style="display:none"><img src="./image/up.png" alt="" height="30px" width="30px"></div>
      <div id="down7" class="down" style="display:none;"><img src="./image/down.png" alt="" height="30px" width="30px"></div>
      <div id="teks" class="teks">
        <div id="name7" class="name"></div>
        <div id="url7" class="url"></div>
        <script>
          var url7 = "<?php echo $_COOKIE["url7"]?>"
          var name7 = "<?php echo $_COOKIE["name7"]?>"
          document.getElementById("url7").innerHTML = url7;
          document.getElementById("name7").innerHTML = name7;
          if (display7 == 1) {
            var tambahx = 7;
            document.getElementById("baris7").style.display = "block";
          }
          else {
            document.getElementById("baris7").style.display = "none";
          }
        </script>
      </div>
      <div id="settings7" class="settings" onclick="popup7()">
        <img src="./image/settings.png" alt="" height="25px" width="25px">
      </div>
    </div>

    <!-- baris8 -->
    <div id="baris8" class="baris" style="display:none">
      <div id="up8" class="up" style="display:none"><img src="./image/up.png" alt="" height="30px" width="30px"></div>
      <div id="down8" class="down" style="display:none;"><img src="./image/down.png" alt="" height="30px" width="30px"></div>
      <div id="teks" class="teks">
        <div id="name8" class="name"></div>
        <div id="url8" class="url"></div>
        <script>
          var url8 = "<?php echo $_COOKIE["url8"]?>"
          var name8 = "<?php echo $_COOKIE["name8"]?>"
          document.getElementById("url8").innerHTML = url8;
          document.getElementById("name8").innerHTML = name8;
          if (display8 == 1) {
            var tambahx = 8;
            document.getElementById("baris8").style.display = "block";
          }
          else {
            document.getElementById("baris8").style.display = "none";
          }
        </script>
      </div>
      <div id="settings8" class="settings" onclick="popup8()">
        <img src="./image/settings.png" alt="" height="25px" width="25px">
      </div>
    </div>

    <!-- baris9 -->
    <div id="baris9" class="baris" style="display:none">
      <div id="up9" class="up" style="display:none"><img src="./image/up.png" alt="" height="30px" width="30px"></div>
      <div id="down9" class="down" style="display:none;"><img src="./image/down.png" alt="" height="30px" width="30px"></div>
      <div id="teks" class="teks">
        <div id="name9" class="name"></div>
        <div id="url9" class="url"></div>
        <script>
          var url9 = "<?php echo $_COOKIE["url9"]?>"
          var name9 = "<?php echo $_COOKIE["name9"]?>"
          document.getElementById("url9").innerHTML = url9;
          document.getElementById("name9").innerHTML = name9;
          if (display9 == 1) {
            var tambahx = 9;
            document.getElementById("baris9").style.display = "block";
          }
          else {
            document.getElementById("baris9").style.display = "none";
          }
        </script>
      </div>
      <div id="settings9" class="settings" onclick="popup9()">
        <img src="./image/settings.png" alt="" height="25px" width="25px">
      </div>
    </div>

    <!-- baris10 -->
    <div id="baris10" class="baris" style="display:none">
      <div id="up10" class="up" style="display:none"><img src="./image/up.png" alt="" height="30px" width="30px"></div>
      <div id="down10" class="down" style="display:none;"><img src="./image/down.png" alt="" height="30px" width="30px"></div>
      <div id="teks" class="teks">
        <div id="name10" class="name"></div>
        <div id="url10" class="url"></div>
        <script>
          var url10 = "<?php echo $_COOKIE["url10"]?>"
          var name10 = "<?php echo $_COOKIE["name10"]?>"
          document.getElementById("url10").innerHTML = url10;
          document.getElementById("name10").innerHTML = name10;
          if (display10 == 1) {
            var tambahx = 10;
            document.getElementById("baris10").style.display = "block";
          }
          else {
            document.getElementById("baris10").style.display = "none";
          }
        </script>
      </div>
      <div id="settings10" class="settings" onclick="popup10()">
        <img src="./image/settings.png" alt="" height="25px" width="25px">
      </div>
    </div>

  </div>

  <!-- baris tambah -->
  <div id="add" class="add" onclick="tambah()">
    <img src="./image/add.png" alt="" height="30px" width="30px">
    <script>
      function tambah() {
        switch (tambahx) {
          case 1:
            document.getElementById("baris2").style.display = "block";
            tambahx = 2;
            document.cookie = "tambahx=2 ;max-age=31536000";
            document.cookie = "display2=1 ;max-age=31536000";
            break;
          case 2:
            document.getElementById("baris3").style.display = "block";
            tambahx = 3;
            document.cookie = "tambahx=3 ;max-age=31536000";
            document.cookie = "display3=1 ;max-age=31536000";
            break;
          case 3:
            document.getElementById("baris4").style.display = "block";
            tambahx = 4;
            document.cookie = "tambahx=4 ;max-age=31536000";
            document.cookie = "display4=1 ;max-age=31536000";
            break;
          case 4:
            document.getElementById("baris5").style.display = "block";
            tambahx = 5;
            document.cookie = "tambahx=5 ;max-age=31536000";
            document.cookie = "display5=1 ;max-age=31536000";
            break;
          case 5:
            document.getElementById("baris6").style.display = "block";
            tambahx = 6;
            document.cookie = "tambahx=6 ;max-age=31536000";
            document.cookie = "display6=1 ;max-age=31536000";
            break;
          case 6:
            document.getElementById("baris7").style.display = "block";
            tambahx = 7;
            document.cookie = "tambahx=7 ;max-age=31536000";
            document.cookie = "display7=1 ;max-age=31536000";
            break;
          case 7:
            document.getElementById("baris8").style.display = "block";
            tambahx = 8;
            document.cookie = "tambahx=8 ;max-age=31536000";
            document.cookie = "display8=1 ;max-age=31536000";
            break;
          case 8:
            document.getElementById("baris9").style.display = "block";
            tambahx = 9;
            document.cookie = "tambahx=9 ;max-age=31536000";
            document.cookie = "display9=1 ;max-age=31536000";
            break;
          case 9:
            document.getElementById("baris10").style.display = "block";
            tambahx = 10;
            document.cookie = "tambahx=10 ;max-age=31536000";
            document.cookie = "display10=1 ;max-age=31536000";
            break;
          case 10:
            document.getElementById("baris11").style.display = "block";
            tambahx = 11;
            document.cookie = "tambahx=11 ;max-age=31536000";
            document.cookie = "display11=1 ;max-age=31536000";
            break;
        }
      }
    </script>
  </div>

  <div id="copyright" class="copyright">Copyright 2020. VULPIS 0.12</div>
  <div id="footerx" class="footerx"></div>

  <!-- popup1 -->
  <div id="popup1" class="popup" style="display:none;">
    <div id="popup_title" class="popup_title">Settings</div>
    <div id="popup_name" class="popup_name">
      <div id="popup_namex" class="popup_namex">Name</div>
      <input id="popup_name1" class="popup_name1">
    </div>
    <div id="popup_url" class="popup_url">
      <div id="popup_urlx" class="popup_urlx">Url</div>
      <input id="popup_url1" class="popup_url1">
    </div>
    <div id="confirm" class="confirm">
      <div id="popup_change" class="popup_change" onclick="change1();">Change</div>
      <div id="popup_delete" class="popup_delete" onclick="deletepopup1()">Delete</div>
      <div id="popup_cancel" class="popup_cancel" onclick="closepopup1()">
        <img src="./image/close.png" alt="" height="25px" width="25px">
      </div>
    </div>
  </div>

  <!-- popup2 -->
  <div id="popup2" class="popup" style="display:none;">
    <div id="popup_title" class="popup_title">Settings</div>
    <div id="popup_name" class="popup_name">
      <div id="popup_namex" class="popup_namex">Name</div>
      <input id="popup_name2" class="popup_name1">
    </div>
    <div id="popup_url" class="popup_url">
      <div id="popup_urlx" class="popup_urlx">Url</div>
      <input id="popup_url2" class="popup_url1">
    </div>
    <div id="confirm" class="confirm">
      <div id="popup_change" class="popup_change" onclick="change2();">Change</div>
      <div id="popup_delete" class="popup_delete" onclick="deletepopup2()">Delete</div>
      <div id="popup_cancel" class="popup_cancel" onclick="closepopup2()">
        <img src="./image/close.png" alt="" height="25px" width="25px">
      </div>
    </div>
  </div>

  <!-- popup3 -->
  <div id="popup3" class="popup" style="display:none;">
    <div id="popup_title" class="popup_title">Settings</div>
    <div id="popup_name" class="popup_name">
      <div id="popup_namex" class="popup_namex">Name</div>
      <input id="popup_name3" class="popup_name1">
    </div>
    <div id="popup_url" class="popup_url">
      <div id="popup_urlx" class="popup_urlx">Url</div>
      <input id="popup_url3" class="popup_url1">
    </div>
    <div id="confirm" class="confirm">
      <div id="popup_change" class="popup_change" onclick="change3();">Change</div>
      <div id="popup_delete" class="popup_delete" onclick="deletepopup3()">Delete</div>
      <div id="popup_cancel" class="popup_cancel" onclick="closepopup3()">
        <img src="./image/close.png" alt="" height="25px" width="25px">
      </div>
    </div>
  </div>

  <!-- popup4 -->
  <div id="popup4" class="popup" style="display:none;">
    <div id="popup_title" class="popup_title">Settings</div>
    <div id="popup_name" class="popup_name">
      <div id="popup_namex" class="popup_namex">Name</div>
      <input id="popup_name4" class="popup_name1">
    </div>
    <div id="popup_url" class="popup_url">
      <div id="popup_urlx" class="popup_urlx">Url</div>
      <input id="popup_url4" class="popup_url1">
    </div>
    <div id="confirm" class="confirm">
      <div id="popup_change" class="popup_change" onclick="change4();">Change</div>
      <div id="popup_delete" class="popup_delete" onclick="deletepopup4()">Delete</div>
      <div id="popup_cancel" class="popup_cancel" onclick="closepopup4()">
        <img src="./image/close.png" alt="" height="25px" width="25px">
      </div>
    </div>
  </div>

  <!-- popup5 -->
  <div id="popup5" class="popup" style="display:none;">
    <div id="popup_title" class="popup_title">Settings</div>
    <div id="popup_name" class="popup_name">
      <div id="popup_namex" class="popup_namex">Name</div>
      <input id="popup_name5" class="popup_name1">
    </div>
    <div id="popup_url" class="popup_url">
      <div id="popup_urlx" class="popup_urlx">Url</div>
      <input id="popup_url5" class="popup_url1">
    </div>
    <div id="confirm" class="confirm">
      <div id="popup_change" class="popup_change" onclick="change5();">Change</div>
      <div id="popup_delete" class="popup_delete" onclick="deletepopup5()">Delete</div>
      <div id="popup_cancel" class="popup_cancel" onclick="closepopup5()">
        <img src="./image/close.png" alt="" height="25px" width="25px">
      </div>
    </div>
  </div>

  <!-- popup6 -->
  <div id="popup6" class="popup" style="display:none;">
    <div id="popup_title" class="popup_title">Settings</div>
    <div id="popup_name" class="popup_name">
      <div id="popup_namex" class="popup_namex">Name</div>
      <input id="popup_name6" class="popup_name1">
    </div>
    <div id="popup_url" class="popup_url">
      <div id="popup_urlx" class="popup_urlx">Url</div>
      <input id="popup_url6" class="popup_url1">
    </div>
    <div id="confirm" class="confirm">
      <div id="popup_change" class="popup_change" onclick="change6();">Change</div>
      <div id="popup_delete" class="popup_delete" onclick="deletepopup6()">Delete</div>
      <div id="popup_cancel" class="popup_cancel" onclick="closepopup6()">
        <img src="./image/close.png" alt="" height="25px" width="25px">
      </div>
    </div>
  </div>

  <!-- popup7 -->
  <div id="popup7" class="popup" style="display:none;">
    <div id="popup_title" class="popup_title">Settings</div>
    <div id="popup_name" class="popup_name">
      <div id="popup_namex" class="popup_namex">Name</div>
      <input id="popup_name7" class="popup_name1">
    </div>
    <div id="popup_url" class="popup_url">
      <div id="popup_urlx" class="popup_urlx">Url</div>
      <input id="popup_url7" class="popup_url1">
    </div>
    <div id="confirm" class="confirm">
      <div id="popup_change" class="popup_change" onclick="change7();">Change</div>
      <div id="popup_delete" class="popup_delete" onclick="deletepopup7()">Delete</div>
      <div id="popup_cancel" class="popup_cancel" onclick="closepopup7()">
        <img src="./image/close.png" alt="" height="25px" width="25px">
      </div>
    </div>
  </div>

  <!-- popup8 -->
  <div id="popup8" class="popup" style="display:none;">
    <div id="popup_title" class="popup_title">Settings</div>
    <div id="popup_name" class="popup_name">
      <div id="popup_namex" class="popup_namex">Name</div>
      <input id="popup_name8" class="popup_name1">
    </div>
    <div id="popup_url" class="popup_url">
      <div id="popup_urlx" class="popup_urlx">Url</div>
      <input id="popup_url8" class="popup_url1">
    </div>
    <div id="confirm" class="confirm">
      <div id="popup_change" class="popup_change" onclick="change8();">Change</div>
      <div id="popup_delete" class="popup_delete" onclick="deletepopup8()">Delete</div>
      <div id="popup_cancel" class="popup_cancel" onclick="closepopup8()">
        <img src="./image/close.png" alt="" height="25px" width="25px">
      </div>
    </div>
  </div>

  <!-- popup9 -->
  <div id="popup9" class="popup" style="display:none;">
    <div id="popup_title" class="popup_title">Settings</div>
    <div id="popup_name" class="popup_name">
      <div id="popup_namex" class="popup_namex">Name</div>
      <input id="popup_name9" class="popup_name1">
    </div>
    <div id="popup_url" class="popup_url">
      <div id="popup_urlx" class="popup_urlx">Url</div>
      <input id="popup_url9" class="popup_url1">
    </div>
    <div id="confirm" class="confirm">
      <div id="popup_change" class="popup_change" onclick="change9();">Change</div>
      <div id="popup_delete" class="popup_delete" onclick="deletepopup9()">Delete</div>
      <div id="popup_cancel" class="popup_cancel" onclick="closepopup9()">
        <img src="./image/close.png" alt="" height="25px" width="25px">
      </div>
    </div>
  </div>

  <!-- popup10 -->
  <div id="popup10" class="popup" style="display:none;">
    <div id="popup_title" class="popup_title">Settings</div>
    <div id="popup_name" class="popup_name">
      <div id="popup_namex" class="popup_namex">Name</div>
      <input id="popup_name10" class="popup_name1">
    </div>
    <div id="popup_url" class="popup_url">
      <div id="popup_urlx" class="popup_urlx">Url</div>
      <input id="popup_url10" class="popup_url1">
    </div>
    <div id="confirm" class="confirm">
      <div id="popup_change" class="popup_change" onclick="change10();">Change</div>
      <div id="popup_delete" class="popup_delete" onclick="deletepopup10()">Delete</div>
      <div id="popup_cancel" class="popup_cancel" onclick="closepopup10()">
        <img src="./image/close.png" alt="" height="25px" width="25px">
      </div>
    </div>
  </div>

</div>
<script>
//popup1 js
function popup1() {
  document.getElementById("popup1").style.display = "inline";
  document.getElementById("list").style.display = "none";
  document.getElementById("add").style.display = "none";
  var placeholder1 = document.getElementById("name1").innerHTML;
  document.getElementById("popup_name1").placeholder = placeholder1;
  var placeholder2 = document.getElementById("url1").innerHTML;
  document.getElementById("popup_url1").placeholder = placeholder2;
}

function closepopup1() {
  document.getElementById("popup1").style.display = "none";
  document.getElementById("list").style.display = "block";
  document.getElementById("add").style.display = "block";
}

function change1() {
  var kosong1 = document.getElementById("popup_name1").value;
  var kosong2 = document.getElementById("popup_url1").value;
  if (kosong1 == "") {
    closepopup1()
  }
  else if (kosong2 == "") {
    closepopup1()
  }
  else {
    var changename1 = document.getElementById("popup_name1").value;
    document.getElementById("name1").innerHTML = changename1;
    var changeurl1 = document.getElementById("popup_url1").value;
    document.getElementById("url1").innerHTML = changeurl1;
    var url1 = document.getElementById("url1").innerHTML;
    document.cookie = "url1="+ url1 +"; max-age=31536000";
    var name1 = document.getElementById("name1").innerHTML;
    document.cookie = "name1="+ name1 +"; max-age=31536000";
    location.reload();
  }
}

function deletepopup1() {
  document.getElementById("baris1").style.display = "none";
  document.cookie = "display1=0 ;max-age=31536000";
  closepopup1();
}

//popup2 js
function popup2() {
  document.getElementById("popup2").style.display = "inline";
  document.getElementById("list").style.display = "none";
  document.getElementById("add").style.display = "none";
  var placeholder1 = document.getElementById("name2").innerHTML;
  document.getElementById("popup_name2").placeholder = placeholder1;
  var placeholder2 = document.getElementById("url2").innerHTML;
  document.getElementById("popup_url2").placeholder = placeholder2;
}

function closepopup2() {
  document.getElementById("popup2").style.display = "none";
  document.getElementById("list").style.display = "block";
  document.getElementById("add").style.display = "block";
}

function change2() {
  var kosong1 = document.getElementById("popup_name2").value;
  var kosong2 = document.getElementById("popup_url2").value;
  if (kosong1 == "") {
    closepopup2()
    console.log(name2);
  }
  else if (kosong2 == "") {
    closepopup2()
    console.log(name2);
  }
  else {
  var changename2 = document.getElementById("popup_name2").value;
  document.getElementById("name2").innerHTML = changename2;
  var changeurl2 = document.getElementById("popup_url2").value;
  document.getElementById("url2").innerHTML = changeurl2;
  var url2 = document.getElementById("url2").innerHTML;
  document.cookie = "url2="+ url2 +"; max-age=31536000";
  var name2 = document.getElementById("name2").innerHTML;
  document.cookie = "name2="+ name2 +"; max-age=31536000";
  console.log(name2);
  location.reload();
  }
}

function deletepopup2() {
  document.getElementById("baris2").style.display = "none";
  document.cookie = "display2=0 ;max-age=31536000";
  closepopup2();
}

//popup3 js
function popup3() {
  document.getElementById("popup3").style.display = "inline";
  document.getElementById("list").style.display = "none";
  document.getElementById("add").style.display = "none";
  var placeholder1 = document.getElementById("name3").innerHTML;
  document.getElementById("popup_name3").placeholder = placeholder1;
  var placeholder2 = document.getElementById("url3").innerHTML;
  document.getElementById("popup_url3").placeholder = placeholder2;
}

function closepopup3() {
  document.getElementById("popup3").style.display = "none";
  document.getElementById("list").style.display = "block";
  document.getElementById("add").style.display = "block";
}

function change3() {
  var kosong1 = document.getElementById("popup_name3").value;
  var kosong2 = document.getElementById("popup_url3").value;
  if (kosong1 == "") {
    closepopup3()
  }
  else if (kosong2 == "") {
    closepopup3()
  }
  else {
  var changename3 = document.getElementById("popup_name3").value;
  document.getElementById("name3").innerHTML = changename3;
  var changeurl3 = document.getElementById("popup_url3").value;
  document.getElementById("url3").innerHTML = changeurl3;
  var url3 = document.getElementById("url3").innerHTML;
  document.cookie = "url3="+ url3 +"; max-age=31536000";
  var name3 = document.getElementById("name3").innerHTML;
  document.cookie = "name3="+ name3 +"; max-age=31536000";
  location.reload();
  }
}

function deletepopup3() {
  document.getElementById("baris3").style.display = "none";
  document.cookie = "display3=0 ;max-age=31536000";
  closepopup3();
}

//popup4 js
function popup4() {
  document.getElementById("popup4").style.display = "inline";
  document.getElementById("list").style.display = "none";
  document.getElementById("add").style.display = "none";
  var placeholder1 = document.getElementById("name4").innerHTML;
  document.getElementById("popup_name4").placeholder = placeholder1;
  var placeholder2 = document.getElementById("url4").innerHTML;
  document.getElementById("popup_url4").placeholder = placeholder2;
}

function closepopup4() {
  document.getElementById("popup4").style.display = "none";
  document.getElementById("list").style.display = "block";
  document.getElementById("add").style.display = "block";
}

function change4() {
  var kosong1 = document.getElementById("popup_name4").value;
  var kosong2 = document.getElementById("popup_url4").value;
  if (kosong1 == "") {
    closepopup4()
  }
  else if (kosong2 == "") {
    closepopup4()
  }
  else {
  var changename4 = document.getElementById("popup_name4").value;
  document.getElementById("name4").innerHTML = changename4;
  var changeurl4 = document.getElementById("popup_url4").value;
  document.getElementById("url4").innerHTML = changeurl4;
  var url4 = document.getElementById("url4").innerHTML;
  document.cookie = "url4="+ url4 +"; max-age=31536000";
  var name4 = document.getElementById("name4").innerHTML;
  document.cookie = "name4="+ name4 +"; max-age=31536000";
  location.reload();
  }
}

function deletepopup4() {
  document.getElementById("baris4").style.display = "none";
  document.cookie = "display4=0 ;max-age=31536000";
  closepopup4();
}

//popup5 js
function popup5() {
  document.getElementById("popup5").style.display = "inline";
  document.getElementById("list").style.display = "none";
  document.getElementById("add").style.display = "none";
  var placeholder1 = document.getElementById("name5").innerHTML;
  document.getElementById("popup_name5").placeholder = placeholder1;
  var placeholder2 = document.getElementById("url5").innerHTML;
  document.getElementById("popup_url5").placeholder = placeholder2;
}

function closepopup5() {
  document.getElementById("popup5").style.display = "none";
  document.getElementById("list").style.display = "block";
  document.getElementById("add").style.display = "block";
}

function change5() {
  var kosong1 = document.getElementById("popup_name5").value;
  var kosong2 = document.getElementById("popup_url5").value;
  if (kosong1 == "") {
    closepopup5()
  }
  else if (kosong2 == "") {
    closepopup5()
  }
  else {
  var changename5 = document.getElementById("popup_name5").value;
  document.getElementById("name5").innerHTML = changename5;
  var changeurl5 = document.getElementById("popup_url5").value;
  document.getElementById("url5").innerHTML = changeurl5;
  var url5 = document.getElementById("url5").innerHTML;
  document.cookie = "url5="+ url5 +"; max-age=31536000";
  var name5 = document.getElementById("name5").innerHTML;
  document.cookie = "name5="+ name5 +"; max-age=31536000";
  location.reload();
  }
}

function deletepopup5() {
  document.getElementById("baris5").style.display = "none";
  document.cookie = "display5=0 ;max-age=31536000";
  closepopup5();
}

//popup6 js
function popup6() {
  document.getElementById("popup6").style.display = "inline";
  document.getElementById("list").style.display = "none";
  document.getElementById("add").style.display = "none";
  var placeholder1 = document.getElementById("name6").innerHTML;
  document.getElementById("popup_name6").placeholder = placeholder1;
  var placeholder2 = document.getElementById("url6").innerHTML;
  document.getElementById("popup_url6").placeholder = placeholder2;
}

function closepopup6() {
  document.getElementById("popup6").style.display = "none";
  document.getElementById("list").style.display = "block";
  document.getElementById("add").style.display = "block";
}

function change6() {
  var kosong1 = document.getElementById("popup_name6").value;
  var kosong2 = document.getElementById("popup_url6").value;
  if (kosong1 == "") {
    closepopup6()
  }
  else if (kosong2 == "") {
    closepopup6()
  }
  else {
  var changename6 = document.getElementById("popup_name6").value;
  document.getElementById("name6").innerHTML = changename6;
  var changeurl6 = document.getElementById("popup_url6").value;
  document.getElementById("url6").innerHTML = changeurl6;
  var url6 = document.getElementById("url6").innerHTML;
  document.cookie = "url6="+ url6 +"; max-age=31536000";
  var name6 = document.getElementById("name6").innerHTML;
  document.cookie = "name6="+ name6 +"; max-age=31536000";
  location.reload();
  }
}

function deletepopup6() {
  document.getElementById("baris6").style.display = "none";
  document.cookie = "display6=0 ;max-age=31536000";
  closepopup6();
}

//popup7 js
function popup7() {
  document.getElementById("popup7").style.display = "inline";
  document.getElementById("list").style.display = "none";
  document.getElementById("add").style.display = "none";
  var placeholder1 = document.getElementById("name7").innerHTML;
  document.getElementById("popup_name7").placeholder = placeholder1;
  var placeholder2 = document.getElementById("url7").innerHTML;
  document.getElementById("popup_url7").placeholder = placeholder2;
}

function closepopup7() {
  document.getElementById("popup7").style.display = "none";
  document.getElementById("list").style.display = "block";
  document.getElementById("add").style.display = "block";
}

function change7() {
  var kosong1 = document.getElementById("popup_name7").value;
  var kosong2 = document.getElementById("popup_url7").value;
  if (kosong1 == "") {
    closepopup7()
  }
  else if (kosong2 == "") {
    closepopup7()
  }
  else {
  var changename7 = document.getElementById("popup_name7").value;
  document.getElementById("name7").innerHTML = changename7;
  var changeurl7 = document.getElementById("popup_url7").value;
  document.getElementById("url7").innerHTML = changeurl7;
  var url7 = document.getElementById("url7").innerHTML;
  document.cookie = "url7="+ url7 +"; max-age=31536000";
  var name7 = document.getElementById("name7").innerHTML;
  document.cookie = "name7="+ name7 +"; max-age=31536000";
  location.reload();
  }
}

function deletepopup7() {
  document.getElementById("baris7").style.display = "none";
  document.cookie = "display7=0 ;max-age=31536000";
  closepopup7();
}

//popup8 js
function popup8() {
  document.getElementById("popup8").style.display = "inline";
  document.getElementById("list").style.display = "none";
  document.getElementById("add").style.display = "none";
  var placeholder1 = document.getElementById("name8").innerHTML;
  document.getElementById("popup_name8").placeholder = placeholder1;
  var placeholder2 = document.getElementById("url8").innerHTML;
  document.getElementById("popup_url8").placeholder = placeholder2;
}

function closepopup8() {
  document.getElementById("popup8").style.display = "none";
  document.getElementById("list").style.display = "block";
  document.getElementById("add").style.display = "block";
}

function change8() {
  var kosong1 = document.getElementById("popup_name8").value;
  var kosong2 = document.getElementById("popup_url8").value;
  if (kosong1 == "") {
    closepopup8()
  }
  else if (kosong2 == "") {
    closepopup8()
  }
  else {
  var changename8 = document.getElementById("popup_name8").value;
  document.getElementById("name8").innerHTML = changename8;
  var changeurl8 = document.getElementById("popup_url8").value;
  document.getElementById("url8").innerHTML = changeurl8;
  var url8 = document.getElementById("url8").innerHTML;
  document.cookie = "url8="+ url8 +"; max-age=31536000";
  var name8 = document.getElementById("name8").innerHTML;
  document.cookie = "name8="+ name8 +"; max-age=31536000";
  location.reload();
  }
}

function deletepopup8() {
  document.getElementById("baris8").style.display = "none";
  document.cookie = "display8=0 ;max-age=31536000";
  closepopup8();
}

//popup9 js
function popup9() {
  document.getElementById("popup9").style.display = "inline";
  document.getElementById("list").style.display = "none";
  document.getElementById("add").style.display = "none";
  var placeholder1 = document.getElementById("name9").innerHTML;
  document.getElementById("popup_name9").placeholder = placeholder1;
  var placeholder2 = document.getElementById("url9").innerHTML;
  document.getElementById("popup_url9").placeholder = placeholder2;
}

function closepopup9() {
  document.getElementById("popup9").style.display = "none";
  document.getElementById("list").style.display = "block";
  document.getElementById("add").style.display = "block";
}

function change9() {
  var kosong1 = document.getElementById("popup_name9").value;
  var kosong2 = document.getElementById("popup_url9").value;
  if (kosong1 == "") {
    closepopup9()
  }
  else if (kosong2 == "") {
    closepopup9()
  }
  else {
  var changename9 = document.getElementById("popup_name9").value;
  document.getElementById("name9").innerHTML = changename9;
  var changeurl9 = document.getElementById("popup_url9").value;
  document.getElementById("url9").innerHTML = changeurl9;
  var url9 = document.getElementById("url9").innerHTML;
  document.cookie = "url9="+ url9 +"; max-age=31536000";
  var name9 = document.getElementById("name9").innerHTML;
  document.cookie = "name9="+ name9 +"; max-age=31536000";
  location.reload();
  }
}

function deletepopup9() {
  document.getElementById("baris9").style.display = "none";
  document.cookie = "display9=0 ;max-age=31536000";
  closepopup9();
}

//popup10 js
function popup10() {
  document.getElementById("popup10").style.display = "inline";
  document.getElementById("list").style.display = "none";
  document.getElementById("add").style.display = "none";
  var placeholder1 = document.getElementById("name10").innerHTML;
  document.getElementById("popup_name10").placeholder = placeholder1;
  var placeholder2 = document.getElementById("url10").innerHTML;
  document.getElementById("popup_url10").placeholder = placeholder2;
}

function closepopup10() {
  document.getElementById("popup10").style.display = "none";
  document.getElementById("list").style.display = "block";
  document.getElementById("add").style.display = "block";
}

function change10() {
  var kosong1 = document.getElementById("popup_name10").value;
  var kosong2 = document.getElementById("popup_url10").value;
  if (kosong1 == "") {
    closepopup10()
  }
  else if (kosong2 == "") {
    closepopup10()
  }
  else {
  var changename10 = document.getElementById("popup_name10").value;
  document.getElementById("name10").innerHTML = changename10;
  var changeurl10 = document.getElementById("popup_url10").value;
  document.getElementById("url10").innerHTML = changeurl10;
  var url10 = document.getElementById("url10").innerHTML;
  document.cookie = "url10="+ url10 +"; max-age=31536000";
  var name10 = document.getElementById("name10").innerHTML;
  document.cookie = "name10="+ name10 +"; max-age=31536000";
  location.reload();
  }
}

function deletepopup10() {
  document.getElementById("baris10").style.display = "none";
  document.cookie = "display10=0 ;max-age=31536000";
  closepopup10();
}

</script>
<script src="./main.js"></script>
</body>
</html>
<?php

//load cookie url1
if(isset($_COOKIE["url1"])) {

  $host = $_COOKIE["url1"];
  //$host = "google.com";
  if($socket =@ fsockopen($host, 80, $errno, $errstr, 30)) {
    echo '<script type="text/javascript">',
     'document.getElementById("up1").style.display = "inline";',
     '</script>';
    fclose($socket);
    }

    else {
      echo '<script type="text/javascript">',
       'document.getElementById("down1").style.display = "inline";',
       '</script>';
    }
  }
  else {
    echo '<script type="text/javascript">',
     'document.getElementById("url1").innerHTML = "google.com";',
     'document.getElementById("name1").innerHTML = "Google";',
     'var url1 = document.getElementById("url1").innerHTML;',
     'var name1 = document.getElementById("name1").innerHTML;',
     'document.cookie = "url1="+ url1 +"; max-age=31536000";',
     'document.cookie = "name1="+ name1 +"; max-age=31536000";',

     'document.getElementById("url2").innerHTML = "facebook.com";',
     'document.getElementById("name2").innerHTML = "Facebook";',
     'var url2 = document.getElementById("url2").innerHTML;',
     'var name2 = document.getElementById("name2").innerHTML;',
     'document.cookie = "url2="+ url2 +"; max-age=31536000";',
     'document.cookie = "name2="+ name2 +"; max-age=31536000";',
     'console.log("masuk2");',

     'document.getElementById("url3").innerHTML = "amazon.com";',
     'document.getElementById("name3").innerHTML = "Amazon";',
     'var url3 = document.getElementById("url3").innerHTML;',
     'var name3 = document.getElementById("name3").innerHTML;',
     'document.cookie = "url3="+ url3 +"; max-age=31536000";',
     'document.cookie = "name3="+ name3 +"; max-age=31536000";',

     'document.getElementById("url4").innerHTML = "101.50.1.27";',
     'document.getElementById("name4").innerHTML = "Server Apip";',
     'var url4 = document.getElementById("url4").innerHTML;',
     'var name4 = document.getElementById("name4").innerHTML;',
     'document.cookie = "url4="+ url4 +"; max-age=31536000";',
     'document.cookie = "name4="+ name4 +"; max-age=31536000";',

     'document.getElementById("url5").innerHTML = "random.wow";',
     'document.getElementById("name5").innerHTML = "Random Web";',
     'var url5 = document.getElementById("url5").innerHTML;',
     'var name5 = document.getElementById("name5").innerHTML;',
     'document.cookie = "url5="+ url5 +"; max-age=31536000";',
     'document.cookie = "name5="+ name5 +"; max-age=31536000";',

     'document.getElementById("url6").innerHTML = "google.com";',
     'document.getElementById("name6").innerHTML = "Google";',
     'var url6 = document.getElementById("url6").innerHTML;',
     'var name6 = document.getElementById("name6").innerHTML;',
     'document.cookie = "url6="+ url6 +"; max-age=31536000";',
     'document.cookie = "name6="+ name6 +"; max-age=31536000";',

     'document.getElementById("url7").innerHTML = "google.com";',
     'document.getElementById("name7").innerHTML = "Google";',
     'var url7 = document.getElementById("url7").innerHTML;',
     'var name7 = document.getElementById("name7").innerHTML;',
     'document.cookie = "url7="+ url7 +"; max-age=31536000";',
     'document.cookie = "name7="+ name7 +"; max-age=31536000";',

     'document.getElementById("url8").innerHTML = "google.com";',
     'document.getElementById("name8").innerHTML = "Google";',
     'var url8 = document.getElementById("url8").innerHTML;',
     'var name8 = document.getElementById("name8").innerHTML;',
     'document.cookie = "url8="+ url8 +"; max-age=31536000";',
     'document.cookie = "name8="+ name8 +"; max-age=31536000";',

     'document.getElementById("url9").innerHTML = "google.com";',
     'document.getElementById("name9").innerHTML = "Google";',
     'var url9 = document.getElementById("url9").innerHTML;',
     'var name9 = document.getElementById("name9").innerHTML;',
     'document.cookie = "url9="+ url9 +"; max-age=31536000";',
     'document.cookie = "name9="+ name9 +"; max-age=31536000";',

     'document.getElementById("url10").innerHTML = "google.com";',
     'document.getElementById("name10").innerHTML = "Google";',
     'var url10 = document.getElementById("url10").innerHTML;',
     'var name10 = document.getElementById("name10").innerHTML;',
     'document.cookie = "url10="+ url10 +"; max-age=31536000";',
     'document.cookie = "name10="+ name10 +"; max-age=31536000";',

     //tambahx
     'document.cookie = "tambahx=0 ;max-age=31536000";',
     'document.cookie = "display1=1 ;max-age=31536000";',
     'document.cookie = "display2=1 ;max-age=31536000";',
     'document.cookie = "display3=1 ;max-age=31536000";',
     'document.cookie = "display4=1 ;max-age=31536000";',
     'document.cookie = "display5=1 ;max-age=31536000";',
     'document.cookie = "display6=0 ;max-age=31536000";',
     'document.cookie = "display7=0 ;max-age=31536000";',
     'document.cookie = "display8=0 ;max-age=31536000";',
     'document.cookie = "display9=0 ;max-age=31536000";',
     'document.cookie = "display10=0 ;max-age=31536000";',


     'location.reload();',
     '</script>';
    header("Refresh:0");
  }

//load cookie url2
if(isset($_COOKIE["url2"])) {

  $host = $_COOKIE["url2"];
  //$host = "google.com";
  if($socket =@ fsockopen($host, 80, $errno, $errstr, 30)) {
    echo '<script type="text/javascript">',
     'document.getElementById("up2").style.display = "inline";',
     '</script>';
    fclose($socket);
    }

    else {
      echo '<script type="text/javascript">',
       'document.getElementById("down2").style.display = "inline";',
       '</script>';
    }
  }

//load cookie url3
if(isset($_COOKIE["url3"])) {

  $host = $_COOKIE["url3"];
  //$host = "google.com";
  if($socket =@ fsockopen($host, 80, $errno, $errstr, 30)) {
    echo '<script type="text/javascript">',
     'document.getElementById("up3").style.display = "inline";',
     '</script>';
    fclose($socket);
    }

    else {
      echo '<script type="text/javascript">',
       'document.getElementById("down3").style.display = "inline";',
       '</script>';
    }
  }

//load cookie url4
if(isset($_COOKIE["url4"])) {

  $host = $_COOKIE["url4"];
  //$host = "google.com";
  if($socket =@ fsockopen($host, 80, $errno, $errstr, 30)) {
    echo '<script type="text/javascript">',
     'document.getElementById("up4").style.display = "inline";',
     '</script>';
    fclose($socket);
    }

    else {
      echo '<script type="text/javascript">',
       'document.getElementById("down4").style.display = "inline";',
       '</script>';
    }
  }

//load cookie url5
if(isset($_COOKIE["url5"])) {

  $host = $_COOKIE["url5"];
  //$host = "google.com";
  if($socket =@ fsockopen($host, 80, $errno, $errstr, 30)) {
    echo '<script type="text/javascript">',
     'document.getElementById("up5").style.display = "inline";',
     '</script>';
    fclose($socket);
    }

    else {
      echo '<script type="text/javascript">',
       'document.getElementById("down5").style.display = "inline";',
       '</script>';
    }
  }

//load cookie url6
if(isset($_COOKIE["url6"])) {

  $host = $_COOKIE["url6"];
  //$host = "google.com";
  if($socket =@ fsockopen($host, 80, $errno, $errstr, 30)) {
    echo '<script type="text/javascript">',
     'document.getElementById("up6").style.display = "inline";',
     '</script>';
    fclose($socket);
    }

    else {
      echo '<script type="text/javascript">',
       'document.getElementById("down6").style.display = "inline";',
       '</script>';
    }
  }

//load cookie url7
if(isset($_COOKIE["url7"])) {

  $host = $_COOKIE["url7"];
  //$host = "google.com";
  if($socket =@ fsockopen($host, 80, $errno, $errstr, 30)) {
    echo '<script type="text/javascript">',
     'document.getElementById("up7").style.display = "inline";',
     '</script>';
    fclose($socket);
    }

    else {
      echo '<script type="text/javascript">',
       'document.getElementById("down7").style.display = "inline";',
       '</script>';
    }
  }

//load cookie url8
if(isset($_COOKIE["url8"])) {

  $host = $_COOKIE["url8"];
  //$host = "google.com";
  if($socket =@ fsockopen($host, 80, $errno, $errstr, 30)) {
    echo '<script type="text/javascript">',
     'document.getElementById("up8").style.display = "inline";',
     '</script>';
    fclose($socket);
    }

    else {
      echo '<script type="text/javascript">',
       'document.getElementById("down8").style.display = "inline";',
       '</script>';
    }
  }


//load cookie url9
if(isset($_COOKIE["url9"])) {

  $host = $_COOKIE["url9"];
  //$host = "google.com";
  if($socket =@ fsockopen($host, 80, $errno, $errstr, 30)) {
    echo '<script type="text/javascript">',
     'document.getElementById("up9").style.display = "inline";',
     '</script>';
    fclose($socket);
    }

    else {
      echo '<script type="text/javascript">',
       'document.getElementById("down9").style.display = "inline";',
       '</script>';
    }
  }

//load cookie url10
if(isset($_COOKIE["url10"])) {

  $host = $_COOKIE["url10"];
  //$host = "google.com";
  if($socket =@ fsockopen($host, 80, $errno, $errstr, 30)) {
    echo '<script type="text/javascript">',
     'document.getElementById("up10").style.display = "inline";',
     '</script>';
    fclose($socket);
    }

    else {
      echo '<script type="text/javascript">',
       'document.getElementById("down10").style.display = "inline";',
       '</script>';
    }
  }

?>
