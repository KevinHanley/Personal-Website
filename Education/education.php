<!DOCTYPE html>
<html>
<head>
	<title>Education</title>

	<link rel="stylesheet" href="../Navigation/navbar.css" type="text/css"/>
  <link rel="stylesheet" href="./education.css" type="text/css"/>

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


<!-- The first section is all content for St Colmans. -->
    <div class="colmans-1">
      <h1>St. Colmans College, Fermoy</h1>

      <h3>2011-2017</h3>

      <img src="/Images/colmans.jpg">
    </div>



    <div class="colmans-2">
      <h3>Summary</h3>

      <p>Between 2011-2017 I attended St. Colman's College secondary school in Fermoy, Co. Cork. Colman's is a medium sized, all-boys school with roughly 450 students and 50 staff members. Opened in 1858, the school has a rich history academically, religiously and in terms of sport.</p>
    </div>



    <div class="colmans-3">
      <h3>Awards</h3>

      <p>I earned several awards over my time in St. Colman's.</p>

      <ul>
        <li>Leaving Certificate Physics Award</li>
        <li>Leaving Certificate Chemistry Award</li>
        <li>AIB Build-a-Bank Manager</li>
      </ul>
    </div>



    <div class="colmans-4">
      <h3>Results</h3>

      <table border="1">
          <th colspan="2">Leaving Certificate Results&nbsp;</th>
          <tr>
              <td>Maths</td><td>H2</td>
          </tr>
          <tr>
              <td>English</td><td>H3</td>
          </tr>
          <tr>
              <td>Irish</td><td>O3</td>
          </tr>
          <tr>
              <td>Chemistry</td><td>H2</td>
          </tr>
          <tr>
              <td>Physics</td><td>H2</td>
          </tr>
          <tr>
              <td>Applied Maths</td><td>H3</td>
          </tr>
          <tr>
              <td>French</td><td>H4</td>
          </tr>
          <tr>
              <td>L.C.V.P</td><td>Distinction</td>
          </tr>
          <tr>
              <td><b>Total Points:</b></td><td><b>509</b></td>
          </tr>
      </table>
    </div>
     

<!-- This section is all UCC content -->



  </div> <!-- End of content class -->

</body>
</html>














