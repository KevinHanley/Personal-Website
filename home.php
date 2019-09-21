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

  <!-- Google icons -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

  <!-- Add icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
  @import url('https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400');
  </style>
</head>


<body>
	<!-- this php will add the navbar -->
	<?php include("./Navigation/navigation.html"); ?>


  <div id="landing">
    <h1>Hi, Welcome!</h1>
    
    <i class="material-icons">arrow_downward</i>
  </div>


	<div id="introduction">

    <div class="intro-1">

      <p>Welcome to my personal website. Here you'll get to know a bit about me (hopefully).</p> 

      <p>I am currently a Business Information Systems (BSc) undergradute student in University College Cork, Ireland.</p>

      <br>
      <br>
    </div>



    <div class="intro-2">
      <h3>Personal Summary</h3>

      <p>An honest, reliable and highly-motivated team
      player, I always strive to attain the highest standards
      possible in any of my undertakings. I am a proactive
      and decisive person who works well under pressure,
      individually and as part of a group. I have a great
      interest in technology and I feel that I would bring a
      good work ethic and dedication to any role I am
      suitable for. Through my work and my time in
      University, I have developed skills and knowledge
      which I feel would be of benefit to your company.</p> 

      <br>
    </div>



    <div class="intro-3">
      <h3>Skills & Qualities</h3>

      <ul>
        <li>Proficient in a variety of computing languages such as SQL, Java, HTML, JavaScript and Visual Basic.</li>
        <li>Extensive knowledge with Microsoft Programs, including Visual Studio, Visio, Excel, etc.</li>
        <li>Well-developed communication and effective leadership skills, due to roles I have
        taken in a number of group projects in the BIS course.</li>
        <li>Customer service and sales.</li>
        <li>Stock and cash management.</li>
        <li>Teaching, both as part of my work and in programs like CoderDojo.</li>
        <li>A positive and hard-working mentality, that aids me in a group environment and that
        drives the high standard of my work.</li>
      </ul>
    </div>
     
  </div> <!-- end of introduction -->

</body>
</html>
