<!DOCTYPE html>
<html>
<title>I Turn 2 Vintage</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="lib/w3.css">
<link rel="stylesheet" href="lib/w3-theme-black.css">
<link rel="stylesheet" href="lib/font-awesome-4.6.3/css/font-awesome.min.css">
<body id="myPage">

<!-- Side Navigation on click -->
<nav class="w3-sidenav w3-white w3-card-2 w3-animate-left" style="display:none;z-index:2" id="mySidenav">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-closenav w3-xxxlarge w3-text-deep-orange">Close
    <i class="fa fa-remove"></i>
  </a>
  <a href="#">Link 1</a>
  <a href="#">Link 2</a>
  <a href="#">Link 3</a>
  <a href="#">Link 4</a>
  <a href="#">Link 5</a>
</nav>

<!-- Navbar -->
<div class="w3-top">
 <ul class="w3-navbar w3-theme-d2 w3-left-align">
  <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
    <a class="w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  </li>
  <li><a href="#" class="w3-deep-orange"><i class="fa fa-home w3-margin-right"></i>IT2V</a></li>
  <li class="w3-hide w3-hide-small"><a href="#team" class="w3-hover-white">Team</a></li>
  <li class="w3-hide-small"><a href="#work" class="w3-hover-white">Lavori</a></li>
  <li class="w3-hide w3-hide-small"><a href="#pricing" class="w3-hover-white">Price</a></li>
  <li class="w3-hide-small"><a href="#contact" class="w3-hover-white">Contatti</a></li>
  <li class="w3-hide w3-hide-small w3-dropdown-hover">
    <a href="javascript:void(0);" title="Notifications">Dropdown <i class="fa fa-caret-down"></i></a>
    <div class="w3-dropdown-content w3-white w3-card-4">
      <a href="#">Link</a>
      <a href="#">Link</a>
      <a href="#">Link</a>
    </div>
  </li>
  <li class="w3-hide-small w3-right"><a href="#footer-search" class="w3-hover-deep-orange" title="Seguici"><i class="fa fa-search"></i></a></li>
 </ul>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-hide w3-hide-large w3-hide-medium">
    <ul class="w3-navbar w3-left-align w3-theme">
      <li class="w3-hide"><a href="#team">Team</a></li>
      <li><a href="#work">Lavori</a></li>
      <li class="w3-hide"><a href="#pricing">Price</a></li>
      <li><a href="#contact">Contatti</a></li>
      <li><a href="#footer-search">Seguici</a></li>
      <li class="w3-hide w3-dropdown-hover">
      <a href="javascript:void(0);" title="Notifications">Dropdown <i class="fa fa-caret-down"></i></a>
      <div class="w3-dropdown-content w3-light-grey w3-card-4">
        <a href="#">Link</a>
        <a href="#">Link</a>
        <a href="#">Link</a>
      </div>
      </li>
    </ul>
  </div>
</div>

<!-- Image Header -->
<div class="w3-display-container w3-animate-opacity">
  <img src="images/banner.jpg" alt="boat" style="width:100%;min-height:128px;max-height:512px;">
  <div class="w3-container w3-display-bottomleft w3-margin-bottom">
    <button onclick="document.getElementById('id01').style.display='block'" class="w3-hide w3-btn w3-xlarge w3-theme w3-hover-deep-orange" title="Go To W3.CSS">LEARN W3.CSS</button>
  </div>
</div>

<!-- Modal -->
<div id="id01" class="w3-modal">
  <div class="w3-modal-content w3-card-8 w3-animate-top">
    <header class="w3-container w3-deep-orange">
      <span onclick="document.getElementById('id01').style.display='none'" class="w3-closebtn"><i class="fa fa-remove"></i></span>
      <h4>Oh snap! We just showed you a modal..</h4>
      <h5>Because we can <i class="fa fa-smile-o"></i></h5>
    </header>
    <div class="w3-container">
      <p>Cool huh? Ok, enough teasing around..</p>
      <p>Go to our <a class="w3-btn" href="/w3css/default.asp">W3.CSS Tutorial</a> to learn more!</p>
    </div>
    <footer class="w3-container w3-deep-orange">
      <p>Modal footer</p>
    </footer>
  </div>
</div>

<!-- Team Container -->
<div class="w3-hide w3-container w3-padding-64 w3-center" id="team">
<h2>OUR TEAM</h2>
<p>Meet the team - our office rats:</p>

<div class="w3-row"><br>

<div class="w3-quarter">
  <img src="/w3images/avatar.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Johnny Walker</h3>
  <p>Web Designer</p>
</div>

<div class="w3-quarter">
  <img src="/w3images/avatar.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Rebecca Flex</h3>
  <p>Support</p>
</div>

<div class="w3-quarter">
  <img src="/w3images/avatar.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Jan Ringo</h3>
  <p>Boss man</p>
</div>

<div class="w3-quarter">
  <img src="/w3images/avatar.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Kai Ringo</h3>
  <p>Fixer</p>
</div>

</div>
</div>

<!-- Work Row -->
<div class="w3-row-padding w3-padding-64 w3-theme-l1" id="work">

<div class="w3-quarter">
<h2>I Nostri Lavori</h2>
<p>Qui si possono vedere alcuni dei nostri lavori di revisione e riparazione di obiettivi fotografici, ...</p>
</div>

<div class="w3-threequarter">
<div class="w3-card-2 w3-white">
  <!-- <img src="/w3images/fjords.jpg" alt="Vernazza" style="width:100%"> -->
  <div class="w3-container">
  <h3>Carl Zeiss Planar 1,7/50 T*</h3>
  <iframe class="w3-container" style="width:100%;min-height:120px;max-height:360px;" width="640" height="360" src="https://www.youtube.com/embed/XgLMUDWHiVw" frameborder="0" allowfullscreen></iframe>
  <h4>Descrizione</h4>
  <p>L'obiettivo presentava: tracce interne di sporco; l'anello della messa a fuoco sganciato; la separazione di una delle elicoidi responsabili del movimento del sistema di lenti.</p>
  <p>Si &egrave; quindi proceduto con lo smontaggio per:<ul>
  <li>reinserire nella corretta posizione l'elicoide</li>
  <li>riagganciare l'anello della messa a fuoco</li>
  <li>calibrazione della scala delle distanze</li>
  <li>ripulire lo sporco dai singoli <a href="https://en.wikipedia.org/wiki/Lens_(optics)">elementi/gruppi di lenti</a></li
  </ul></p>
  </div>
  </div>
</div>

<div class="w3-hide w3-threequarter">
 <div class="w3-card-2 w3-white">
  <img src="/w3images/lights.jpg" alt="Cinque Terre" style="width:100%">
  <div class="w3-container">
  <h3>Customer 2</h3>
  <h4>Trade</h4>
  <p>Blablabla</p>
  <p>Blablabla</p>
  <p>Blablabla</p>
  <p>Blablabla</p>
  </div>
 </div>
</div>

<div class="w3-hide w3-threequarter">
 <div class="w3-card-2 w3-white">
  <img src="/w3images/mountains.jpg" alt="Monterosso" style="width:100%">
  <div class="w3-container">
  <h3>Customer 3</h3>
  <h4>Trade</h4>
  <p>Blablabla</p>
  <p>Blablabla</p>
  <p>Blablabla</p>
  <p>Blablabla</p>
  </div>
 </div>
</div>

</div>

<!-- Container -->
<div class="w3-container" style="position:relative">
  <a onclick="w3_open()" class="w3-btn-floating-large w3-deep-orange" style="position:absolute;top:-28px;right:24px;z-index:0;">
  <i class="fa fa-plus"></i></a>
</div>

<!-- Pricing Row -->
<div class="w3-hide w3-row-padding w3-center w3-padding-64" id="pricing">
    <h2>PRICING</h2>
    <p>Choose a pricing plan that fits your needs.</p><br>
    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme">
          <p class="w3-xlarge">Basic</p>
        </li>
        <li class="w3-padding-16"><b>10GB</b> Storage</li>
        <li class="w3-padding-16"><b>10</b> Emails</li>
        <li class="w3-padding-16"><b>10</b> Domains</li>
        <li class="w3-padding-16"><b>Endless</b> Support</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide"><i class="fa fa-usd"></i> 10</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-theme-l5 w3-padding-24">
          <button class="w3-btn w3-deep-orange w3-padding-large"><i class="fa fa-check"></i> Sign Up</button>
        </li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme-l2">
          <p class="w3-xlarge">Pro</p>
        </li>
        <li class="w3-padding-16"><b>25GB</b> Storage</li>
        <li class="w3-padding-16"><b>25</b> Emails</li>
        <li class="w3-padding-16"><b>25</b> Domains</li>
        <li class="w3-padding-16"><b>Endless</b> Support</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide"><i class="fa fa-usd"></i> 25</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-theme-l5 w3-padding-24">
          <button class="w3-btn w3-deep-orange w3-padding-large"><i class="fa fa-check"></i> Sign Up</button>
        </li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme">
          <p class="w3-xlarge">Premium</p>
        </li>
        <li class="w3-padding-16"><b>50GB</b> Storage</li>
        <li class="w3-padding-16"><b>50</b> Emails</li>
        <li class="w3-padding-16"><b>50</b> Domains</li>
        <li class="w3-padding-16"><b>Endless</b> Support</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide"><i class="fa fa-usd"></i> 50</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-theme-l5 w3-padding-24">
          <button class="w3-btn w3-deep-orange w3-padding-large"><i class="fa fa-check"></i> Sign Up</button>
        </li>
      </ul>
    </div>
</div>

<!-- Contact Container -->
<div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
  <div class="w3-row">
    <div class="w3-col m5">
    <div class="w3-padding-16"><span class="w3-xlarge w3-border-deep-orange w3-bottombar">Contattaci</span></div>
      <h3>Recapiti</h3>
      <p class="w3-hide">Swing by for a cup of coffee, or whatever.</p>
      <p><i class="fa fa-map-marker w3-text-deep-orange w3-xlarge"></i>&nbsp;Perugia, IT</p>
      <p><i class="fa fa-whatsapp w3-text-deep-orange w3-xlarge"></i>&nbsp;+39 388 632 8393</a></p>
      <p><i class="fa fa-envelope-o w3-text-deep-orange w3-xlarge"></i>&nbsp;&nbsp;info<i class="fa fa-at w3-text-deep-orange"></i>it2v.com</p>
    </div>
    <div class="w3-col m7">
      <form class="w3-container w3-card-4 w3-padding-16 w3-white">
      <div class="w3-group">
        <label class="w3-label">Il tuo nome</label>
        <input class="w3-input" type="text" id="f-Body">
      </div>
      <div class="w3-hide w3-group">
        <label class="w3-label">Email</label>
        <input class="w3-input" type="text">
      </div>
      <div class="w3-group">
        <label class="w3-label">Oggetto</label>
        <input class="w3-input" type="text" id="f-Subject">
      </div>
      <input class="w3-check" type="checkbox" id="f-Like" checked>
      <label class="w3-validate">I Like it!</label>
      <button type="button" class="w3-btn w3-right w3-theme" onClick="location='mailto:info@it2v.com?Subject='+escape(document.getElementById('f-Subject').value)+'&body='+escape('\n\n--\nCordiali saluti\n'+document.getElementById('f-Body').value+'\nLike='+document.getElementById('f-Like').checked)">Invia una mail</button>
      </form>
    </div>
  </div>
</div>

<!-- Google Maps -->
<!--
<div class="w3-row-padding w3-padding-64 w3-theme-l1" id="map">
<div id="googleMap" style="width:100%;height:320px;"></div>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script>
var myCenter = new google.maps.LatLng(43.1121232, 12.3903272);

function initialize() {
var mapProp = {
  center: myCenter,
  zoom: 13,
  scrollwheel: false,
  draggable: false,
  mapTypeId: google.maps.MapTypeId.ROADMAP
  };

var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker = new google.maps.Marker({
  position: myCenter,
});

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
</div>
-->

<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center" id="footer-search">
  <h4>Seguici</h4>
  <a class="w3-btn-floating w3-deep-orange" href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
  <a class="w3-btn-floating w3-deep-orange" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a>
  <a class="w3-btn-floating w3-deep-orange" href="javascript:void(0)" title="Google +"><i class="fa fa-google-plus"></i></a>
  <a class="w3-btn-floating w3-deep-orange w3-hide-small" href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin"></i></a>
  <p>Powered by <a href="http://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>

  <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
    <span class="w3-text w3-padding w3-deep-orange w3-hide-small">Go To Top</span>
    <a class="w3-btn w3-theme" href="#myPage"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
</footer>

<!-- Script For Side Navigation -->
<script>
function w3_open() {
    var x = document.getElementById("mySidenav");
    x.style.width = "300px";
    x.style.textAlign = "center";
    x.style.fontSize = "40px";
    x.style.paddingTop = "10%";
    x.style.display = "block";
}
function w3_close() {
    document.getElementById("mySidenav").style.display = "none";
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html>
