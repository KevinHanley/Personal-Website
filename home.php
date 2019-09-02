<!DOCTYPE html>
<html>
<head>
	<title>Home - Welcome</title>

	<link rel="stylesheet" href="./Navigation/navbar.css" type="text/css"/>
  <link rel="stylesheet" href="./home.css" type="text/css"/>

  
  <meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
    <script>
      $(document).ready(function(){          
          $('.logo').on('click', function(){
              $(location).attr('href', './home.php');
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
	<?php include("./Navigation/navigation.html"); ?>

	<div id="introduction">

    <div class="text-box">
      <h1>Hi, Welcome!</h1>

      <p>Welcome to my person website. Here you will get to know a bit about me (hopefully).</p> 

      <p>I am currently a Business Information Systems undergradute student in University College Cork, Ireland.</p>
    </div>
     
  </div>

</body>
</html>
