<?php include 'table.php'?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Sarkari Yojana WEB (Contact Us)</title>	
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
		 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
		<link rel="stylesheet" href="../style.css">
	    <link rel="icon" href="../logo.svg" type="image/x-icon">
		<!-- Google tag (gtag.js) -->
		<!--start-->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-NP3C2S7VQR"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'G-NP3C2S7VQR');
        </script>
        <!--end-->
      
	</head>
	<body class="contactpage">
		<style>
            .icon{
                font-size:40px;
            }
            #contactcontent a{
                background-color:balck;
            }
		</style>
		<!-- Header-->
         <?php include('../header.php'); ?>
		<p class="currentPage">You are here > <a href="../Home-Page" target="_self">HOME</a> > Contact Us</p> 
		<a href="../Home-Page" target="_self" class="home">
			Click Here to Visit SarkariYojanaWeb.com Home page
		</a>
		<br><br>
		
		<div class="container-fluid" class="form">
	    	<form action="../message.php" method="POST">
				<h3>GET IN TOUCH</h3>
			<span>Name:</span>	<input type="text" name="user" placeholder="Enter Your Name" required><br>
			<span>Email Id:</span>	<input type="email" name="emailid" placeholder="Enter Your Email Id" required><br>
		    <span>Message:</span>		<textarea rows="4" name="comment" placeholder="How can we help you?"></textarea>
				<button type="submit" class="btn btn-success" name="button">Send Message</button>
			</form>
		</div>
		<div class="container-fluid" id="contactcontent">
            In case of any kind of help or problem on the website of sarkariyojanaweb.com,
            <br>
            you can contact us at <b>sarkariyojanaweb@gmail.com</b>. You can also contact through the following links: 
            <br><br>
            <a href="https://www.facebook.com/profile.php?id=61553482957642"  target="_blank"><i class="fa-brands fa-square-facebook icon" style="color:blue;"></i></a>
            <a href="https://twitter.com/sarkariyojanaw?t=5LCt46DYkxlEmkWEttK_Bw&s=09" target="_blank"><i class="fa-brands fa-square-x-twitter icon"style="color:black;"></i></a>
            <a href="https://t.me/sarkariyojanaweb" target="_blank"> <i class="fa-brands fa-telegram icon" style="color:#1E90FF;"></i></a>
            <a href="https://whatsapp.com/channel/0029VaID8kN9cDDd2bxWQU0B" class="icon" target="_blank"><i class="fa-brands fa-square-whatsapp icon" style="color:#25D366;"></i></a>
            <!--<a href="https://youtube.com/@SarkariYojanaWeb?si=SVNUVAfs8oC-7VB9" target="_blank" style="color:red;"><i class="fa-brands fa-square-youtube icon" style="color:red;"></i></a>-->
        </div>
		<br>
		
	    <!--footer Start-->
		<div class="container-fluid" id="footercontainer">
    		<footer>
    		    <div class="row"  >
    		        <div class="col-3  footercol1">
    		            <br>
    		           <a href="../Home-Page" target="_self" class="footerlink">HOME</a>
    				    <br>
                        <a href="../About-Us" target="_self" class="footerlink">ABOUT US</a>
    			    	<br>
    			        <a href="../Contact-Us" target="_self" class="footerlink">CONTACT US</a>
    				    <br>
    				    <a href="../Privacy-Policy" target="_self" class="footerlink">PRIVACY POLICY</a>
    				    <br>
    				    <a href="../Disclaimer" target="_self" class="footerlink">DISCLAIMER</a>
    				    <br>
    				    <a href="../Term-and-Condition" target="_self" class="footerlink">TERM AND CONDITION</a>
    		        </div>
    		        <div class="col-2 footercol2">
    		            <h4 class="footerhead">Category</h4>
    		            <a href="../Central-Scheme" target="_self" class="footerlink">Central Scheme</a>
    				    <br>
    				    <a href="../State-Scheme" target="_self" class="footerlink">State Scheme</a>
    				    <br><br>
    				    <h4 class="footerhead">Quick Link</h4>
    				    <a href="https://www.facebook.com/profile.php?id=61553482957642" class="icon" target="_blank"><i class="fa-brands fa-square-facebook"></i></a>
                        <a href="https://twitter.com/sarkariyojanaw?t=5LCt46DYkxlEmkWEttK_Bw&s=09" class="icon" target="_blank"><i class="fa-brands fa-square-x-twitter"></i></a>
    					<a href="https://t.me/sarkariyojanaweb" class="icon" target="_blank"> <i class="fa-brands fa-telegram"></i></a>
    					<a href="https://whatsapp.com/channel/0029VaID8kN9cDDd2bxWQU0B" class="icon" target="_blank"><i class="fa-brands fa-square-whatsapp"></i></a>
    					<!--<a href="https://youtube.com/@SarkariYojanaWeb?si=SVNUVAfs8oC-7VB9" class="icon" target="_blank"><i class="fa-brands fa-square-youtube"></i></a>-->
    		        </div>
    		        <div class="col-7 footercol3">
    		             <h4 class="footerhead">About Us:</h4>
    		             <div class="footercol3-content">
        		            <div class="content1">
        		                 <img src="../logo.svg" alt="Sarkari Yojana Logo" class="img-fluid" width="1000px" height="500px">
        		            </div>
        		            <div class="content2">
        		                sarkariyojanaweb.com: The website (www.sarkariyojanaweb.com) is not a government-run website, nor does it have
        		                anything to do with any government ministry. This website has been created by a particular person who is interested
        		                 in government schemes and also wants to tell people about the scheme.
                                On this website, you are given information about the ongoing schemes of the Central Government and the State
                                Government (such as information about the scheme, eligibility and ineligibility, benefits, procedure to apply and
                                contact form related to the scheme).
                            </div>
                        </div>
    		         </div>
    		    </div>
    		    <br>
    		    <div class="footerrow2">
    		        <h4>SARKARI YOJANA WEB</h4>
    			    <p class="footerh5 h6">CIVIL LINES PRAYAGRAJ, UTTAR PRADESH-INDIA 211001</p>
    		    </div>
    		    <div class="footerrow2">
    		        <h4>For any Complaint or query: sarkariyojanaweb@gmail.com</h4>
    		        <p class="footerh5 h6">COPYRIGHT© 2024 SARKARI YOJANA WEB - ALL RIGHTS RESERVED</p>
    		     </div>
    	    </footer>
	    </div>

	</body>
</html>