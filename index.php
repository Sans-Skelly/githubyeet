<head>
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.green-orange.min.css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
.center {

text-align: center;

} 
</style>
  <script> 

      $(document).ready(function () {
          // Hide the div
          $("#loading1").hide();
          // Show the div after 5s
          $("#loading1").delay(2000).fadeIn(100);  
      });    
  </script>
  <script>
      $(document).ready(function () {
          // Hide the div
          $("#loading2").hide();
          // Show the div after 5s
          $("#loading2").delay(4000).fadeIn(100);  
      });    
  </script>  
  <script>
      $(document).ready(function () {
          // Hide the div
          $("#loading3").hide();
          // Show the div after 5s
          $("#loading3").delay(6000).fadeIn(100);  
      });    
  </script>  
  <script>
      $(document).ready(function () {
          // Hide the div
          $("#loading4").hide();
          // Show the div after 5s
          $("#loading4").delay(9000).fadeIn(100);  
      });    
  </script>    
  <script>
      $(document).ready(function () {
          // Hide the div
          $("#loading5").hide();
          // Show the div after 5s
          $("#loading5").delay(12000).fadeIn(100);  
      });    
  </script>  
  <script>
      $(document).ready(function () {
          // Hide the div
          $("#loading6").hide();
          // Show the div after 5s
          $("#loading6").delay(15000).fadeIn(100);  
      });    
  </script>  
  <script>
      $(document).ready(function () {
          // Hide the div
          $("#loading7").hide();
          // Show the div after 5s
          $("#loading7").delay(18000).fadeIn(100);  
      });    
  </script>  
  <script>
      $(document).ready(function () {
          // Hide the div
          $("#loading8").hide();
          // Show the div after 5s
          $("#loading8").delay(21000).fadeIn(100);  
      });    
  </script>   
  <script>
      $(document).ready(function () {
          // Hide the div
          $("#loading9").hide();
          // Show the div after 5s
          $("#loading9").delay(26000).fadeIn(100);  
      });    
  </script>   
  <script>
      $(document).ready(function () {
          // Hide the div
          $("#loading10").hide();
          // Show the div after 5s
          $("#loading10").delay(32000).fadeIn(100);  
      });    
  </script> 
  <script>
      $(document).ready(function () {
          // Hide the div
          $("#loading11").hide();
          // Show the div after 5s
          $("#loading11").delay(32000).fadeIn(100);  
      });    
  </script>  
</head>
<body>
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header
            mdl-layout--fixed-tabs">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span style="position:absolute!important; left:20px!important;" class="mdl-layout-title">armaan@fsms:~$ tail -f life_log_updated.txt </span>
    </div>
    <!-- Tabs -->
    <div class="mdl-layout__tab-bar mdl-js-ripple-effect">
      <a href="#main" class="mdl-layout__tab is-active">sshOnline</a>
    </div>
  </header>
  <main class="mdl-layout__content">
    <section class="mdl-layout__tab-panel is-active" id="main">
      <div class="page-content">
	  
	  <div id="loading1" style="position:relative!important; left:5px!important; display:none;">
	  <pre>armaan@fsms:~$ tail -f life_log_updated.txt</pre>
	  </div>
	  
      <div id="loading2" style="position:relative!important; left:5px!important; display:none;">
	  <pre>armaan@fsms:~$ Loading...</pre>
	  </div>
	  
	  <div id="loading3" style="position:relative!important; left:5px!important; display:none;">
      <pre>Tail: using <b>SuperSpeed</b></pre>
	  </div>	  
	  <div id="loading4" style="position:relative!important; left:5px!important; display:none;">
	  <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" onclick="location.href='2.php';">
      Initilization Complete!
      </button>
	  </div>
	  
	  
	  </div>
    </section>
  </main>
  <audio id="audio2" preload="auto" src="http://ahahaa.herokuapp.com/land.mp3">
    <p>Your browser does not support the audio element</p>
</audio>

  </div>
<script>
    myAudio=document.getElementById('audio2');
    myAudio.addEventListener('canplaythrough', function() {
      if(this.currentTime < 3){this.currentTime = 3;}
      this.play();
    });
  </script>
</body>
</html>
