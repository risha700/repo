				// According
					 $(document).ready(function() {
								$('.ui.accordion').accordion();

							});

					 // open / close all according btn

					 $('#showdesc').on('click', function(){

					 $('.ui.accordion').accordion('open', '.title', '.content');
					 $('#showdesc').addClass('hiddenelem');
					 $('#hidedesc').removeClass('hiddenelem');
					});
 					 $('#hidedesc').on('click', function(){

					 $('.ui.accordion').accordion('close', '.title', '.content');
 					 $('#hidedesc').addClass('hiddenelem');
					 $('#showdesc').removeClass('hiddenelem');
					});




				// popups
						$(document).ready(function(){


							$('#elife_popup')
							  .popup({
							  	 inline: true,
							  	 popup : $('.elife.popup'),
							  	 position : 'right center',
							     hoverable    : true
							  })
							;
							$('#voda_popup')
							  .popup({
							  	 inline: true,
							  	 popup : $('.voda.popup'),
							  	 position : 'right center',
							     hoverable    : true
							  })
							;
							$('#exeed_popup')
							  .popup({
							  	 inline: true,
							  	 popup : $('.exeed.popup'),
							  	 position : 'right center',
							     hoverable    : true
							  })
							;							

							$('#carmudi_popup')
							  .popup({
							  	 inline: true,
							  	 popup : $('.carmudi.popup'),
							  	 position : 'right center',
							     hoverable    : true
							  })
							;
							$('#talabat_popup')
							  .popup({
							  	 inline: true,
							  	 popup : $('.talabat.popup'),
							  	 position : 'right center',
							     hoverable    : true
							  })
							  ;
							$('#telecom_popup')
							  .popup({
							  	 inline: true,
							  	 popup : $('.telecom.popup'),
							  	 position : 'right center',
							     hoverable    : true
							  })
							  ;
							$('#adlan_popup')
							  .popup({
							  	 inline: true,
							  	 popup : $('.adlan.popup'),
							  	 position : 'right center',
							     hoverable    : true
							  })

							;
							$('#o6u_popup')
							  .popup({
							  	 inline: true,
							  	 popup : $('.o6u.popup'),
							  	 position : 'right center',
							     hoverable    : true
							  })

							;

						});


			// fire menu button open and close

				$('#menubutton').on('click', function(){

				$('#demoside')
				.sidebar('setting', 'transition', 'push')
				.sidebar('setting', 'dimPage', false)
				.sidebar('toggle')
				.sidebar( 'setting', 'onShow', function (){$('#cont').removeClass('content').addClass('close')})
				.sidebar( 'setting' , 'onHidden', function (){$('#cont').removeClass('close').addClass('content')})
				$("#menubutton").css({"text-shadow":"none"});
					 
				});



			// typing title
			(function() {
			  var app;

			  $(document).ready(function() {
			    return app.init();
			  });

			  app = {
			    text: "Entrepreneur & Marketing Director",
			    index: 0,
			    chars: 0,
			    speed: 100,
			    container: ".myTitle",
			    init: function() {
			      this.chars = this.text.length;
			      return this.write();
			    },
			    write: function() {
			      $(this.container).append(this.text[this.index]);
			      if (this.index < this.chars) {
			        this.index++;
			        return window.setTimeout(function() {
			          return app.write();
			        }, this.speed);
			      }
			    }
			  };

			}).call(this);




			//sliding large header demo &  courses
			var $sl = $('.large-header, #adv-courses '),
			    slPos = 0,
			    goTo = "",
			    totW = 1690, // total image width
			    imgMap = {
			      1620 : "googledocs"
			    };

			function slide(){
			  slPos -= 1 ;
			  $sl.animate({backgroundPosition : slPos}, 10, 'linear', slide);
			}

			slide(); // START!	




			// text shadow instead of keyframes

			var repeater1;
			var repeater2;

			function doWork() {
			 $(".myName").css({
			        "text-shadow" : "0 0 10px #fff, 0 0 20px #fff, 0 0 30px #fff, 0 0 40px #228DFF, 0 0 50px #228DFF, 0 0 55px #228DFF, 0 0 60px #228DFF, 0 0 65px #228DFF"
			        }, 3000);
			 repeater1 = setTimeout(doWork, 2000);
			}
			doWork();

			function doWork2() {
				$(".myName").css({
			        "text-shadow" : "0 0 5px #fff, 0 0 10px #fff, 0 0 15px #fff, 0 0 20px #228DFF, 0 0 35px #228DFF, 0 0 40px #228DFF, 0 0 50px #228DFF, 0 0 75px #228DFF"
			        }, 3000);
			 repeater2 = setTimeout(doWork2, 5000);
			}
			doWork2();


			// glowing up menu button for fuckin blind user will stop on menu button click

			function shineUp() {
			 $("#menubutton").css({
			        "text-shadow" : "0 0 10px #fff, 0 0 20px #fff, 0 0 30px #fff, 0 0 40px #228DFF, 0 0 50px #228DFF, 0 0 55px #228DFF, 0 0 60px #228DFF, 0 0 65px #228DFF"
			        }, 3000);

			}
			shineUp();

			function shineUp2() {
				$("#menubutton").css({
			        "text-shadow" : "0 0 5px #fff, 0 0 10px #fff, 0 0 15px #fff, 0 0 20px #228DFF, 0 0 35px #228DFF, 0 0 40px #228DFF, 0 0 50px #228DFF, 0 0 75px #228DFF"
			        }, 3000);

			}
			shineUp2();




			// scroll detect plugin and trigger progress bar


			$(window).scroll(function(){
			  // This is then function used to detect if the element is scrolled into view
			  function elementScrolled(elem)
			  {
			    var docViewTop = $(window).scrollTop();
			    var docViewBottom = docViewTop + $(window).height();
			    var elemTop = $(elem).offset().top;
			    return ((elemTop <= docViewBottom) && (elemTop >= docViewTop));
			  }

			  // set conditions for scrolls
			  if(elementScrolled('.progress')) {


			$('.progress').progress({
							        debug     : false,
							        duration  : 2500,
							        easing: 'easeInOut',
							        label: false

							    });

			  }




			});



				// fire progress in case refresh out of view
			$(document).ready(function(){
			$('#skills').one('mouseenter touchenter touchstart', function() {
			// $('.progress').progress();
			    $('.progress').progress({
			        debug     : false,
			        duration  : 2500,
			        easing: 'easeInOut',
			        label: false
			    });

			})
			});



			// fires all the hidden elements before print

						function fireUp(number) {
						       	// $('.ui.accordion').accordion('open', '.title', '.content')
						       	$('.content').show();
						        $('.progress').progress({
							        debug     : false,
							        duration  : 2500,
							        easing: 'easeInOut',
							        label: false

							    });
						}




			(function() {
			    var beforePrint = function() {
								
				
								 fireUp();

			    };
			    var afterPrint = function() {
			        console.log('Thanks for Printing my resume :)');
			    };

			    if (window.matchMedia) {
			        var mediaQueryList = window.matchMedia('print');
			        mediaQueryList.addListener(function(mql) {
			            if (mql.matches) {
			                beforePrint();
			            } else {
			                afterPrint();
			            }
			        });
			    }

			    window.onbeforeprint = beforePrint;
			    window.onafterprint = afterPrint;
			}());



			// google chart

			      google.charts.load("current", {packages:["corechart"]});
			      google.charts.setOnLoadCallback(drawChart);
			      function drawChart() {
			        var data = google.visualization.arrayToDataTable([
			          ['status', 'Professional Ethics'],
			          ['Accountability',     25],
			          ['Motivation',     15],
			          ['Teamwork',  25],
			          ['Leadership', 20],
			          ['Transparency', 15   ]
			        ]);

			        var options = {
			          title: 'Code of Conduct',
			          is3D: true,

			        };
			        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
			        chart.draw(data, options);
			      }

			      google.charts.load('current', {'packages':['corechart', 'controls']});
			      google.charts.setOnLoadCallback(drawChart);




			// smooth scroll
			// Select all links with hashes
			$('a[href*="#"]')
			  // Remove links that don't actually link to anything
			  .not('[href="#"]')
			  .not('[href="#0"]')
			  .click(function(event) {
			    // On-page links
			    if (
			      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
			      && 
			      location.hostname == this.hostname
			    ) {
			      // Figure out element to scroll to
			      var target = $(this.hash);
			      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
			      // Does a scroll target exist?
			      if (target.length) {
			        // Only prevent default if animation is actually gonna happen
			        event.preventDefault();
			        $('html, body').animate({
			          scrollTop: target.offset().top
			        }, 1000, function() {
			          // Callback after animation
			          // Must change focus!
			          var $target = $(target);
			          $target.focus();
			          if ($target.is(":focus")) { // Checking if the target was focused
			            return false;
			          } else {
			            // $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
			            // $target.focus(); // Set focus again
			          };
			        });
			      }
			    }
			  });

				// share it modal
				$(document).ready(function() {
				    $('.lnk').click(function(e) {
				        e.preventDefault();
				        window.open($(this).attr('href'), 'fbShareWindow', 'height=450, width=550, top=' + ($(window).height() / 2 - 275) + ', left=' + ($(window).width() / 2 - 225) + ', toolbar=0, location=0, menubar=0, directories=0, scrollbars=0');
				        return false;
				    });
				});

			// modal open

					$('#contactus').on('click', function(){

						$('.ui.modal.contact')
						.modal({
								closable:true,
							    autofocus: true,
							    transition: 'fly left',
							    duration:1000,
							    observeChanges: true,
							    debug: false,
							    onUpdate: 'visible',
											  
									  })

							
					   			.modal('show');

						
							});

$(document).ready(function() {

// validation 
 $('.ui.form').form({
 	human: {
      identifier : 'human',
      rules: [
        {
          type   : 'isExactly[7]',
          prompt : 'Please Answer "sum of 3 + 4 = (one digit)"'
        }
      ]
    },
    email: {
      identifier : 'email',
      rules: [
        {
          type   : 'email',
          prompt : 'Please enter a valid email'
        }
      ]
    },

  name: {
      identifier : 'name',
      rules: [
        {
          type   : 'empty',
          prompt : 'Please enter your name'
        }
      ]
    
},
  phone: {
      identifier : 'phone',
      rules: [
        {
          type   : 'minLength[10]',
          prompt : 'Please enter a valid phone'
        }
      ]
    
},

  message: {
      identifier : 'message',
      rules: [
        {
          type   : 'empty',
          prompt : 'Please leave a message'
        }
      ]
    }
},
{
    inline: true,
    on: 'blur',
    onSuccess: function(){
    	event.preventDefault();
	post();
	vldMsg();
	thankYou();
	
    }
});



});





function vldMsg(){
			 $('.response').append("<div class='ui success message' id='dimSubmit'><div class='header'>Message sent</div></div>");
			 $('#submit').addClass('disabled');

			
}

function thankYou(){

	setTimeout(function() {
     $('#thankModal')
     .modal({
								closable:true,
							    autofocus: true,
							    transition: 'drop',
							    duration:500,
							    observeChanges: true,
							    debug: false,
							    onUpdate: 'visible',
											  
									  })

							
					   			.modal('show');


    }, 2500);
    			$('button.reset').on('click', function(){

						$('.form').form('clear');
						 $('button#submit').removeClass('disabled');

							});
}


function post(){




		 var form = $('.ui.form');
		 var data = {};

	form.find('[name]').each(function (){
		var tht = $(this),
			name = tht.attr('name'),
		   value = tht.val();

		   data[name] = value;
		});
	$.ajax({

		url: form.attr('action'),
		type: form.attr('method'),
		data: data,

		success: function(result){

			$('#response').html(result);
			console.log(data);

		}


	});

	return false;


}




