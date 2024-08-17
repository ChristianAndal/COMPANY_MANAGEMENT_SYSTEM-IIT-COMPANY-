<!DOCTYPE html>
<html>
<head>
  <script src="ht.js"></script>
  <link rel="stylesheet" href="/COMPANY/css/qr.css">
  
</head>
<body>
  <video autoplay muted loop id="video-background">
    <source src="/COMPANY/content/background.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>
  <nav>
    <h1>IIT</h1>
    <ul>
      <li><a href="/COMPANY/LandingPage.php">HOME</a></li>
      <li><a href="">ABOUT</a></li>
      <li><a href="">DEVELOPERS</a></li>
    </ul>
  </nav>

  <div class="container">
<div class="row">
  <div class="col">
    <div style="width:500px;" id="reader"></div>
  </div><audio id="myAudio1">
  <source src="successtimeout.mp3" type="audio/ogg">
</audio>
<audio id="myAudio2">
  <source src="failes.mp3" type="audio/ogg">
</audio>
<script>
var x = document.getElementById("myAudio1");
var x2 = document.getElementById("myAudio2");      
function showHint(str) {
  if (str.length == 0) {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "gethint.php?q=" + str, true);
    xmlhttp.send();
  }
}

function playAudio() { 
  x.play(); 
} 


  </script>
  <div class="col" style="padding:30px;">
    <h4>SCAN RESULT</h4>
    <div>Employee name</div><form action="">
     <input type="text" name="start" class="input" id="result" onkeyup="showHint(this.value)" placeholder="result here" readonly="" /></form>
     <p>Status: <span id="txtHint"></span></p>
  </div>
</div>
<script type="text/javascript">
function onScanSuccess(qrCodeMessage) {
    document.getElementById("result").value = qrCodeMessage;
    showHint(qrCodeMessage);
playAudio();

}
function onScanError(errorMessage) {
  //handle scan error
}
var html5QrcodeScanner = new Html5QrcodeScanner(
    "reader", { fps: 10, qrbox: 250 });
html5QrcodeScanner.render(onScanSuccess, onScanError);
</script>
  </div>
</body>
</html>
