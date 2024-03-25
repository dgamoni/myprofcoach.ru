/*********************
//* standart jQuery  document ready script theme 
//* autor: Andrey Monin
//* this theme "coaching" 
*********************/



	jQuery(document).ready(function($){
		
	
$("#plus2,#plus3").hide();


// programm show 6->9 9->12 12->6
var foo = function (event) {
	$(".run1").bind("click", function(){
     	$(".run1").unbind('click');
		$("#plus2")
 			 .css('opacity', 0)
  			 .animate(
               { opacity: 1 },
               { duration: 600 },
			   'easeInOutQuint'
        ).show(); // end show1
		// --------scroll to div
		//$('html, body').animate({scrollTop: $(".van4").offset().top	}, 1000);//end scroll
		$('html, body').animate({scrollTop: $(window).scrollTop() + 300 }, { duration: 1000 }, 'easeInOutQuint');
			// --------------- run2
			$(".run2").bind("click", function(){
    		$(".run2").unbind('click');
		  	$("#plus3") 
 			 .css('opacity', 0)
  			 .animate(
               { opacity: 1 },
               { duration: 600 },
			   'easeInOutQuint'
       		 ).show(); // end show 2
			 // --------scroll to div
			//$('html, body').animate({scrollTop: $(".van7").offset().top	}, 1000);//end scroll
			$('html, body').animate({scrollTop: $(window).scrollTop() + 300 }, { duration: 1000 }, 'easeInOutQuint');
			 //----------------
			 $('.run1').text('СВЕРНУТЬ ПРОГРАММЫ');
			 //---------- run3
				$(".run3").bind("click", function(){
    			$(".run3").unbind('click');
		  		$("#plus2,#plus3")
					.css('opacity', 1)
  			 	    .animate(
              		 { opacity: 0 },
               		 { duration: 300 },
			  		 'easeInOutQuint'
        		).hide(500); // end hide
				// ----------- scroll to div
				$('html, body').animate({
        			scrollTop: $(".van1").offset().top
    			}, 1000);// ---end scroll
				$(".run1").bind("click", foo);
				$('.run1').text('БОЛЬШЕ ПРОГРАММ');
				$('.run1').trigger('click');
				}); // end run3
			}); // end run2
		}); // end run1
}; // end foo

foo();	// run foo

		 $con3=$('#content_prog3').html();
		 $con6=$('#content_prog6').html();
		 $con9=$('#content_prog9').html();
		 $con12=$('#content_prog12').html();
	
// ---------------------content--------------------------------
var foo2 = function (i, $con3, $con6, $con9, $con12) {	
	$('.van' + i + ' .carousel_more').bind("click", function(){
		 
		 var j=i;
		 if(i==1 || i==2 || i==3){ j=3;} 
		 if(i==4 || i==5 || i==6){ j=6;}
		 if(i==7 || i==8 || i==9){ j=9;} 
		 if(i==10 || i==11 || i==12){ j=12;}
		 
		 
		 
		   if(i==1){
			$gg = $('#content_prog1').html(); 
		    $('#content_prog3').html($gg);
			$(".prog_baner").css('height', 626);
					
		   } else
		   if(i==2){
			$gg = $('#content_prog2').html(); 
		    $('#content_prog3').html($gg);
			$(".prog_baner").css('height', 626);
			
		   } else
		   if(i==3){
			$('#content_prog3').html($con3);
			$(".prog_baner").css('height', 626);
			
		   } else
		   
		   if(i==4){
			$gg = $('#content_prog4').html(); 
		    $('#content_prog6').html($gg);
			$(".prog_baner").css('height', 626);
			
		   } else
		   if(i==5){
			$gg = $('#content_prog5').html(); 
		    $('#content_prog6').html($gg);
			$(".prog_baner").css('height', 626);
			
		   } else
		   if(i==6){
			$('#content_prog6').html($con6);
			$(".prog_baner").css('height', 608);
			
		   } else
			if(i==7){
			$gg = $('#content_prog7').html(); 
		    $('#content_prog9').html($gg);
			$(".prog_baner").css('height', 560);
			
		   } else
		   if(i==8){
			$gg = $('#content_prog8').html(); 
		    $('#content_prog9').html($gg);
			$(".prog_baner").css('height', 686);
			
		   } else
		   if(i==9){
			$('#content_prog9').html($con9);
			$(".prog_baner").css('height', 668);
			
		   } else
		    if(i==10){
			$gg = $('#content_prog10').html(); 
		    $('#content_prog12').html($gg);
			$(".prog_baner").css('height', 605);
			
		   } else
		   if(i==11){
			$gg = $('#content_prog11').html(); 
		    $('#content_prog12').html($gg);
			$(".prog_baner").css('height', 610);
			
		   } else
		    if(i==12){
			$('#content_prog12').html($con12);
			$(".prog_baner").css('height', 584);
			
		   } 
		 //console.log(i);
		 //console.log(j);
		 
		//$('#content_prog' + j)
 			//.animate(
              // { opacity: 1 },
              // { duration: 1000 },
			  // 'easeInOutQuint'
        	//).toggle();
			
			
			//$('#content_prog' + j).slideToggle(500);
			slideToggleDiv(j);
			
			
			
		//	change button text				
		var text = $(this).text() == 'Узнать больше' ? 'Свернуть' : 'Узнать больше';
	    $(this)
	    .text(text)
	    .toggleClass("active");
		//---------
		
				
		 
		
		//$(this).prop('disabled', true);
		
	}); //end click
} // end foo2


// toggle slide content ----
function slideToggleDiv($j){ 
	 $('#content_prog' + $j).slideToggle(500);
	 $('#content_prog' + $j).css('display','inline-block');
	 
}


//----------------------------------
// noscroll in the index php  for program button
var full_url = $(location).attr('href');
if (full_url == 'http://myprofcoach.ru/') {  } else { 

			// ----scroll to content
 			$(".carousel_more").toggle(
      			function () {
        			$('html, body').animate({scrollTop: $(window).scrollTop() + 300 }, { duration: 1000 }, 'easeInOutQuint');
      			},
     			 function () {
       				 $('html, body').animate({scrollTop: $(window).scrollTop() - 300 }, { duration: 1000 }, 'easeInOutQuint');
      			}
			);// ---- end scroll to content

} // --------------------------


// run foo2
for (var i  = 0; i < 13; i++) {
		 
	foo2(i, $con3, $con6, $con9, $con12);
	
}

// -------- end run content----------------------------------

//--------------togle -----------------------
//----------------------------

// van1 ------------------------
$(".van1 .carousel_more").toggle(
      			function () {
        			$(".van2, .van3, .van4, .van5, .van6, .van7, .van8, .van9, .van10, .van11, .van12").css({"opacity":"0.5"});
					$(".van2 .carousel_more, .van3 .carousel_more, .van4 .carousel_more, .van5 .carousel_more, .van6 .carousel_more, .van7 .carousel_more, .van8 .carousel_more, .van9 .carousel_more, .van10 .carousel_more, .van11 .carousel_more, .van12 .carousel_more").prop('disabled', true);
      			},
     			 function () {
       				 $(".van2, .van3, .van4, .van5, .van6, .van7, .van8, .van9, .van10, .van11, .van12").css({"opacity":"1"});
					 $(".van2 .carousel_more, .van3 .carousel_more, .van4 .carousel_more, .van5 .carousel_more, .van6 .carousel_more, .van7 .carousel_more, .van8 .carousel_more, .van9 .carousel_more, .van10 .carousel_more, .van11 .carousel_more, .van12 .carousel_more").prop('disabled', false);
      			}
    		);
// end van1 -----------------
// van2 ------------------------
$(".van2 .carousel_more").toggle(
      			function () {
        			$(".van1, .van3, .van4, .van5, .van6, .van7, .van8, .van9, .van10, .van11, .van12").css({"opacity":"0.5"});
					$(".van1 .carousel_more, .van3 .carousel_more, .van4 .carousel_more, .van5 .carousel_more, .van6 .carousel_more, .van7 .carousel_more, .van8 .carousel_more, .van9 .carousel_more, .van10 .carousel_more, .van11 .carousel_more, .van12 .carousel_more").prop('disabled', true);
      			},
     			 function () {
       				 $(".van1, .van3, .van4, .van5, .van6, .van7, .van8, .van9, .van10, .van11, .van12").css({"opacity":"1"});
					 $(".van1 .carousel_more, .van3 .carousel_more, .van4 .carousel_more, .van5 .carousel_more, .van6 .carousel_more, .van7 .carousel_more, .van8 .carousel_more, .van9 .carousel_more, .van10 .carousel_more, .van11 .carousel_more, .van12 .carousel_more").prop('disabled', false);
      			}
    		);
// end van2 -----------------
// van3 ------------------------
$(".van3 .carousel_more").toggle(
      			function () {
        			$(".van2, .van1, .van4, .van5, .van6, .van7, .van8, .van9, .van10, .van11, .van12").css({"opacity":"0.5"});
					$(".van2 .carousel_more, .van1 .carousel_more, .van4 .carousel_more, .van5 .carousel_more, .van6 .carousel_more, .van7 .carousel_more, .van8 .carousel_more, .van9 .carousel_more, .van10 .carousel_more, .van11 .carousel_more, .van12 .carousel_more").prop('disabled', true);
      			},
     			 function () {
       				 $(".van2, .van1, .van4, .van5, .van6, .van7, .van8, .van9, .van10, .van11, .van12").css({"opacity":"1"});
					 $(".van2 .carousel_more, .van1 .carousel_more, .van4 .carousel_more, .van5 .carousel_more, .van6 .carousel_more, .van7 .carousel_more, .van8 .carousel_more, .van9 .carousel_more, .van10 .carousel_more, .van11 .carousel_more, .van12 .carousel_more").prop('disabled', false);
      			}
    		);
// end van3 -----------------
// van4 ------------------------
$(".van4 .carousel_more").toggle(
      			function () {
        			$(".van2, .van3, .van1, .van5, .van6, .van7, .van8, .van9, .van10, .van11, .van12").css({"opacity":"0.5"});
					$(".van2 .carousel_more, .van3 .carousel_more, .van1 .carousel_more, .van5 .carousel_more, .van6 .carousel_more, .van7 .carousel_more, .van8 .carousel_more, .van9 .carousel_more, .van10 .carousel_more, .van11 .carousel_more, .van12 .carousel_more").prop('disabled', true);
      			},
     			 function () {
       				 $(".van2, .van3, .van1, .van5, .van6, .van7, .van8, .van9, .van10, .van11, .van12").css({"opacity":"1"});
					 $(".van2 .carousel_more, .van3 .carousel_more, .van1 .carousel_more, .van5 .carousel_more, .van6 .carousel_more, .van7 .carousel_more, .van8 .carousel_more, .van9 .carousel_more, .van10 .carousel_more, .van11 .carousel_more, .van12 .carousel_more").prop('disabled', false);
      			}
    		);
// end van -----------------

// van5 ------------------------
$(".van5 .carousel_more").toggle(
      			function () {
        			$(".van2, .van3, .van4, .van1, .van6, .van7, .van8, .van9, .van10, .van11, .van12").css({"opacity":"0.5"});
					$(".van2 .carousel_more, .van3 .carousel_more, .van4 .carousel_more, .van1 .carousel_more, .van6 .carousel_more, .van7 .carousel_more, .van8 .carousel_more, .van9 .carousel_more, .van10 .carousel_more, .van11 .carousel_more, .van12 .carousel_more").prop('disabled', true);
      			},
     			 function () {
       				 $(".van2, .van3, .van4, .van1, .van6, .van7, .van8, .van9, .van10, .van11, .van12").css({"opacity":"1"});
					 $(".van2 .carousel_more, .van3 .carousel_more, .van4 .carousel_more, .van1 .carousel_more, .van6 .carousel_more, .van7 .carousel_more, .van8 .carousel_more, .van9 .carousel_more, .van10 .carousel_more, .van11 .carousel_more, .van12 .carousel_more").prop('disabled', false);
      			}
    		);
// end van5 -----------------

// van6------------------------
$(".van6 .carousel_more").toggle(
      			function () {
        			$(".van2, .van3, .van4, .van5, .van1, .van7, .van8, .van9, .van10, .van11, .van12").css({"opacity":"0.5"});
					$(".van2 .carousel_more, .van3 .carousel_more, .van4 .carousel_more, .van5 .carousel_more, .van1 .carousel_more, .van7 .carousel_more, .van8 .carousel_more, .van9 .carousel_more, .van10 .carousel_more, .van11 .carousel_more, .van12 .carousel_more").prop('disabled', true);
      			},
     			 function () {
       				 $(".van2, .van3, .van4, .van5, .van1, .van7, .van8, .van9, .van10, .van11, .van12").css({"opacity":"1"});
					 $(".van2 .carousel_more, .van3 .carousel_more, .van4 .carousel_more, .van5 .carousel_more, .van1 .carousel_more, .van7 .carousel_more, .van8 .carousel_more, .van9 .carousel_more, .van10 .carousel_more, .van11 .carousel_more, .van12 .carousel_more").prop('disabled', false);
      			}
    		);
// end van1 -----------------

// van7 ------------------------
$(".van7 .carousel_more").toggle(
      			function () {
        			$(".van2, .van3, .van4, .van5, .van6, .van1, .van8, .van9, .van10, .van11, .van12").css({"opacity":"0.5"});
					$(".van2 .carousel_more, .van3 .carousel_more, .van4 .carousel_more, .van5 .carousel_more, .van6 .carousel_more, .van1 .carousel_more, .van8 .carousel_more, .van9 .carousel_more, .van10 .carousel_more, .van11 .carousel_more, .van12 .carousel_more").prop('disabled', true);
      			},
     			 function () {
       				 $(".van2, .van3, .van4, .van5, .van6, .van1, .van8, .van9, .van10, .van11, .van12").css({"opacity":"1"});
					 $(".van2 .carousel_more, .van3 .carousel_more, .van4 .carousel_more, .van5 .carousel_more, .van6 .carousel_more, .van1 .carousel_more, .van8 .carousel_more, .van9 .carousel_more, .van10 .carousel_more, .van11 .carousel_more, .van12 .carousel_more").prop('disabled', false);
      			}
    		);
// end van1 -----------------

// van1 ------------------------
$(".van8 .carousel_more").toggle(
      			function () {
        			$(".van2, .van3, .van4, .van5, .van6, .van7, .van1, .van9, .van10, .van11, .van12").css({"opacity":"0.5"});
					$(".van2 .carousel_more, .van3 .carousel_more, .van4 .carousel_more, .van5 .carousel_more, .van6 .carousel_more, .van7 .carousel_more, .van1 .carousel_more, .van9 .carousel_more, .van10 .carousel_more, .van11 .carousel_more, .van12 .carousel_more").prop('disabled', true);
      			},
     			 function () {
       				 $(".van2, .van3, .van4, .van5, .van6, .van7, .van1, .van9, .van10, .van11, .van12").css({"opacity":"1"});
					 $(".van2 .carousel_more, .van3 .carousel_more, .van4 .carousel_more, .van5 .carousel_more, .van6 .carousel_more, .van7 .carousel_more, .van1 .carousel_more, .van9 .carousel_more, .van10 .carousel_more, .van11 .carousel_more, .van12 .carousel_more").prop('disabled', false);
      			}
    		);
// end van1 -----------------
// van1 ------------------------
$(".van9 .carousel_more").toggle(
      			function () {
        			$(".van2, .van3, .van4, .van5, .van6, .van7, .van8, .van1, .van10, .van11, .van12").css({"opacity":"0.5"});
					$(".van2 .carousel_more, .van3 .carousel_more, .van4 .carousel_more, .van5 .carousel_more, .van6 .carousel_more, .van7 .carousel_more, .van8 .carousel_more, .van1 .carousel_more, .van10 .carousel_more, .van11 .carousel_more, .van12 .carousel_more").prop('disabled', true);
      			},
     			 function () {
       				 $(".van2, .van3, .van4, .van5, .van6, .van7, .van8, .van1, .van10, .van11, .van12").css({"opacity":"1"});
					 $(".van2 .carousel_more, .van3 .carousel_more, .van4 .carousel_more, .van5 .carousel_more, .van6 .carousel_more, .van7 .carousel_more, .van8 .carousel_more, .van1 .carousel_more, .van10 .carousel_more, .van11 .carousel_more, .van12 .carousel_more").prop('disabled', false);
      			}
    		);
// end van1 -----------------
// van10 ------------------------
$(".van10 .carousel_more").toggle(
      			function () {
        			$(".van2, .van3, .van4, .van5, .van6, .van7, .van8, .van9, .van1, .van11, .van12").css({"opacity":"0.5"});
					$(".van2 .carousel_more, .van3 .carousel_more, .van4 .carousel_more, .van5 .carousel_more, .van6 .carousel_more, .van7 .carousel_more, .van8 .carousel_more, .van9 .carousel_more, .van1 .carousel_more, .van11 .carousel_more, .van12 .carousel_more").prop('disabled', true);
      			},
     			 function () {
       				 $(".van2, .van3, .van4, .van5, .van6, .van7, .van8, .van9, .van1, .van11, .van12").css({"opacity":"1"});
					 $(".van2 .carousel_more, .van3 .carousel_more, .van4 .carousel_more, .van5 .carousel_more, .van6 .carousel_more, .van7 .carousel_more, .van8 .carousel_more, .van9 .carousel_more, .van1 .carousel_more, .van11 .carousel_more, .van12 .carousel_more").prop('disabled', false);
      			}
    		);
// end van1 -----------------
// van11 ------------------------
$(".van11 .carousel_more").toggle(
      			function () {
        			$(".van2, .van3, .van4, .van5, .van6, .van7, .van8, .van9, .van10, .van1, .van12").css({"opacity":"0.5"});
					$(".van2 .carousel_more, .van3 .carousel_more, .van4 .carousel_more, .van5 .carousel_more, .van6 .carousel_more, .van7 .carousel_more, .van8 .carousel_more, .van9 .carousel_more, .van10 .carousel_more, .van1 .carousel_more, .van12 .carousel_more").prop('disabled', true);
      			},
     			 function () {
       				 $(".van2, .van3, .van4, .van5, .van6, .van7, .van8, .van9, .van10, .van1, .van12").css({"opacity":"1"});
					 $(".van2 .carousel_more, .van3 .carousel_more, .van4 .carousel_more, .van5 .carousel_more, .van6 .carousel_more, .van7 .carousel_more, .van8 .carousel_more, .van9 .carousel_more, .van10 .carousel_more, .van1 .carousel_more, .van12 .carousel_more").prop('disabled', false);
      			}
    		);
// end van1 -----------------
// van12 ------------------------
$(".van12 .carousel_more").toggle(
      			function () {
        			$(".van2, .van3, .van4, .van5, .van6, .van7, .van8, .van9, .van10, .van11, .van1").css({"opacity":"0.5"});
					$(".van2 .carousel_more, .van3 .carousel_more, .van4 .carousel_more, .van5 .carousel_more, .van6 .carousel_more, .van7 .carousel_more, .van8 .carousel_more, .van9 .carousel_more, .van10 .carousel_more, .van11 .carousel_more, .van1 .carousel_more").prop('disabled', true);
      			},
     			 function () {
       				 $(".van2, .van3, .van4, .van5, .van6, .van7, .van8, .van9, .van10, .van11, .van1").css({"opacity":"1"});
					 $(".van2 .carousel_more, .van3 .carousel_more, .van4 .carousel_more, .van5 .carousel_more, .van6 .carousel_more, .van7 .carousel_more, .van8 .carousel_more, .van9 .carousel_more, .van10 .carousel_more, .van11 .carousel_more, .van1 .carousel_more").prop('disabled', false);
      			}
    		);
// end van12 -----------------			
			


 

//----------------------- frase swith --------------

$('#frase2_1,#frase2_1q, #frase2_2,#frase2_2q, #frase2_3,#frase2_3q').hide();
$('#frase3_1,#frase3_1q, #frase3_2,#frase3_2q, #frase3_3,#frase3_3q').hide();

$myfrase = $("#frase1_1").text();


// $("#frase1_1").fadeOut(function() {
 // $(this).text("World")
//}).delay( 1800 ).fadeIn();

console.log($myfrase);

 	


//--------- program link -----------
//****************

var hash = window.location.hash.substring(1);
//console.log(hash);

if (hash == 'noviy_uroven') { 
	$('.van1 .carousel_more').trigger('click');
	$('html, body').animate({scrollTop: $(window).scrollTop() + 960 }, { duration: 1000 }, 'easeInOutQuint');
	}
if (hash == 'dohod') { 
	$('.van2 .carousel_more').trigger('click');
	$('html, body').animate({scrollTop: $(window).scrollTop() + 960 }, { duration: 1000 }, 'easeInOutQuint');
	}
if (hash == 'balans') { 
	$('.van3 .carousel_more').trigger('click');
	$('html, body').animate({scrollTop: $(window).scrollTop() + 960 }, { duration: 1000 }, 'easeInOutQuint');
	}
	
	
if (hash == 'vremya') { 
	$('.van4 .carousel_more').trigger('click');
	$('html, body').animate({scrollTop: $(window).scrollTop() + 1250 }, { duration: 1000 }, 'easeInOutQuint');
	}
if (hash == 'prioritety') { 
	$('.van5 .carousel_more').trigger('click');
	$('html, body').animate({scrollTop: $(window).scrollTop() + 1250 }, { duration: 1000 }, 'easeInOutQuint');
	}
if (hash == 'vip') {
	//$('.run1').trigger('click');
	//$('.run2').trigger('click');  
	$('.van6 .carousel_more').trigger('click');
	$('html, body').animate({scrollTop: $(window).scrollTop() + 1250 }, { duration: 1000 }, 'easeInOutQuint');
	}
	
	
if (hash == 'sposobnosty') { 
	$('.run1').trigger('click');
	$('.van7 .carousel_more').trigger('click');
	$('html, body').animate({scrollTop: $(window).scrollTop() + 1540 }, { duration: 1000 }, 'easeInOutQuint');
	}
if (hash == 'novaya_rabota') {
	$('.run1').trigger('click'); 
	$('.van8 .carousel_more').trigger('click');
	$('html, body').animate({scrollTop: $(window).scrollTop() + 1540 }, { duration: 1000 }, 'easeInOutQuint');
	}
if (hash == 'interesnaya_rabota') {
	$('.run1').trigger('click'); 
	$('.van9 .carousel_more').trigger('click');
	$('html, body').animate({scrollTop: $(window).scrollTop() + 1540 }, { duration: 1000 }, 'easeInOutQuint');
	}
	
	
	
if (hash == 'fresh_energy') { 
	$('.run1').trigger('click');
	$('.run2').trigger('click');
	$('.van10 .carousel_more').trigger('click');
	$('html, body').animate({scrollTop: $(window).scrollTop() + 1830 }, { duration: 1000 }, 'easeInOutQuint');
	}
if (hash == 'rukovoditel') {
	$('.run1').trigger('click');
	$('.run2').trigger('click'); 
	$('.van11 .carousel_more').trigger('click');
	$('html, body').animate({scrollTop: $(window).scrollTop() + 1830 }, { duration: 1000 }, 'easeInOutQuint');
	}
if (hash == 'komanda') {
	$('.run1').trigger('click');
	$('.run2').trigger('click');  
	$('.van12 .carousel_more').trigger('click');
	$('html, body').animate({scrollTop: $(window).scrollTop() + 1830 }, { duration: 1000 }, 'easeInOutQuint');
	}


 
//--------------------------------------



	}) //end document.ready -----------------------------------------------------------------




