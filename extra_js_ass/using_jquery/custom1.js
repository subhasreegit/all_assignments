
$(document).ready(function(){
  $(".section1 button").click(function(){
    $(".section1 .height").css("height","300px");
    })
});


$(document).ready(function(){
$('.section2 button').click(function() {
		$('.section2 .height').animate({
			'marginLeft' : "+=400px","transition":"3s"} ,"slow"
		)
	})
});



$(window).scroll(function(){
  if($(window).scrollTop() > 700 && $(window).scrollTop() < 900)
  {
    $(".full").css({"position":"fixed",
            "top":"0px"});
  }
  else
  {
    $(".full").css({"position":"static",
            "top":"0px"});
  }
});


 $(document).ready(function() { 
    $(".section5 button").click(function() { 
       	$(".section5 p:nth-child(3)").wrap("<div></div>"); 
    }); 
}); 


$(document).ready(function() { 
    $(".section9 button").click(function() { 
       $('#test3').val("ABC");
       $(".section9 button").attr("disabled",true);
    }); 
}); 


$(document).ready(function() { 
    $(".section6 button").click(function() { 
       	$(".section6 p").not(".intro").css({"background-color":"transparent"});
    }); 
}); 


 $(document).ready(function() { 
    $(".section7 button").click(function() { 
       	$(".section7 li:nth-child(4)").css({"background-color":"red"}); 
       	$(".section7 li:nth-child(5)").css({"background-color":"green"}); 
       	$(".section7 li:nth-child(6)").css({"background-color":"blue"});
    }); 
});


$(document).ready(function() { 
    $(".section8 button").click(function() { 
       	$(".section8 li").not(".section8 li:nth-child(1)").css({"border-color":"red"});
    }); 
});



$(document).ready(function() {
	$(".tabcontent button:nth-child(1)").click(function(){
      $(".content").removeClass('active');
      $(".tabcontent .content:nth-child(3)").addClass('active');
  	}); 
$(".tabcontent button:nth-child(2)").click(function(){
      $(".content").removeClass('active');
      $(".tabcontent .content:nth-child(4)").addClass('active');
  	});
});






$(document).ready(function() { 
  $(".section10").click(function() {
      $("html").animate({ scrollTop: 0 }, 5050);;
  });
});













