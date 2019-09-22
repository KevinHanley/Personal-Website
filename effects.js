$(document).ready(function(){   

  /* clicking name returns to homepage */       
  $('.logo').on('click', function(){
    $(location).attr('href', './home.php');
  }); 

  /* clicking menu icon opens menu and toggles icon */
  $('i').on('click', function(){
    $('#mobile-links').toggle();

    if($(this).text() == 'menu'){
      $(this).text('clear');
    }else{
      $(this).text('menu');
    }
  }); 

});