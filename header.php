<!DOCTYPE html>
<html>
    <head>
		<!--<link rel="stylesheet" href="style.css">-->
		 <!--Google Ads tag Start-->
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2337533772478193"
             crossorigin="anonymous"></script>
            <link src="style.css" rel="stylesheet" type="text/CSS">
        <!--End-->
	</head>
	<body>
        <style>
            body {
                 margin: 0;
                 font-family: Arial, sans-serif;
                 overflow-x: hidden;
            }
        </style>
        <div class="container-fluid" style="background-color: #68009E;">
	    	<div class="row">
                <div class="col-3">
                    <img src="./logo.svg" alt="Sarkari Yojana Logo" height="100px" width="100px" class="img-fluid" id="logo">
                </div>
                <div class="col-9 containter" id="head">
                    <strong class="h2">SARKARI YOJANA WEB</strong>
                    <h6>WWW.SARKARIYOJANAWEB.COM</h6>
                </div>
			</div>
		</div>
        <nav class="navbar">
            <div class="nav-container">
                <p id="nav-home"><a href="/">Home</a></p>
              
                  <ul class="nav-list" id="nav-list">
                      <li>
                          <a href="./Navbar/Central-Scheme.php">Central Scheme</a>
                        </li>
                        <li>
                          <a href="./Navbar/State-Scheme.php">State Scheme</a>
                        </li>
                        <li>
                          <a href="./Navbar/About-Us.php">About Us</a>
                        </li>
                        <li>
                          <a href="./NavbarDisclaimer.php">Disclaimer</a>
                        </li>
                        <li>
                          <a href="./NavbarPrivacy-Policy.php">Privacy Policy</a>
                        </li>
                        <li>
                          <a href="./NavbarTerm-and-Condition.php">Term and Condition</a>
                        </li>
                        <li>
                          <a href="./NavbarContact-Us.php">Contact Us</a>
                        </li>
                  </ul>
                </div>
                <div class="burger-menu" onclick="toggleMenu()">&#9776;</div>
            </nav>
            
            
        <script>
            function toggleMenu() {
                var navList = document.getElementById("nav-list");
                navList.classList.toggle("show");
            }
        </script>
    </body>
</html>