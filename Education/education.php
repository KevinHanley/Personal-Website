<!DOCTYPE html>
<html>
<head>
	<title>Education</title>

	<link rel="stylesheet" href="../Navigation/navbar.css" type="text/css"/>
  	<link rel="stylesheet" href="./education.css" type="text/css"/>

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

	<div id="introduction">

    <div class="text-box">
      <h1>This is the education section!</h1>

      
    </div>
     
  </div>

</body>
</html>
