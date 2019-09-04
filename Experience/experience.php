<!DOCTYPE html>
<html>
<head>
	<title>Experience</title>

	<link rel="stylesheet" href="../Navigation/navbar.css" type="text/css"/>
    <link rel="stylesheet" href="./experience.css" type="text/css"/>

    <meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
    <script>
      $(document).ready(function(){          
          $('.logo').on('click', function(){
              $(location).attr('href', '/home.php');
          }); 
      });
    </script>

    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
    @import url('https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400');
    </style>
</head>


<body>
	<!-- this php will add the navbar -->
	<?php include("../Navigation/navigation.html"); ?>

	<!-- This is the content displayed on the page -->
	<div id="content">

		<div class="toss-1">
	      <h1>Toss Bryans Ltd.</h1>

	      <h3>2015-2019</h3>
	    </div>


		<div class="toss-2">
	      <h3>Summary</h3>

	      <p><b>Role:</b> Sales Assisstant</p>

	      <p>During my time in Toss Bryans I worked in several different departments, ranging from DIY to Domestic Appliances to Tills. My core tasks involved; helping customers with in-store purchases, dealing with customer complaints, ordering and maintaing stock levels, handling money and training new part-time staff.</p>
	    </div>



    	<div class="cd-1">
	      <h1>CoderDojo</h1>

	      <h3>2019</h3>
	    </div>


		<div class="cd-2">
	      <h3>Summary</h3>

	      <p><b>Role:</b> Coding Instructor</p>

	      <p>During my time in Toss Bryans I worked in several different departments, ranging from DIY to Domestic Appliances to Tills. My core tasks involved; helping customers with in-store purchases, dealing with customer complaints, ordering and maintaing stock levels, handling money and training new part-time staff.</p>
	    </div>



	    <div class="camp-1">
	      <h1>Camp Sloane YMCA</h1>

	      <h3>2019</h3>
	    </div>


		<div class="camp-2">
	      <h3>Summary</h3>

	      <p><b>Role:</b> Camp Counsellor</p>

	      <p>During my time in Toss Bryans I worked in several different departments, ranging from DIY to Domestic Appliances to Tills. My core tasks involved; helping customers with in-store purchases, dealing with customer complaints, ordering and maintaing stock levels, handling money and training new part-time staff.</p>
	    </div>

	    
	</div>

</body>
</html>