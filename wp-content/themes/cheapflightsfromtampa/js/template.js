(function($) {
	
	$(document).ready(function(){
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
	              $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
	              $target.focus(); // Set focus again
	            };
	          });
	        }
	      }
	    });		
	});
	
	
	$(document).ready(function(){		
			
		$(window).scroll(function() {    
		    var scroll = $(window).scrollTop();

		     //>=, not <=
		    if (scroll > 0) {
		        //clearHeader, not clearheader - caps H
		        $(".notification-bar").addClass("sticky");
		    } else {
		    	$(".notification-bar").removeClass("sticky");
		    }
		}); 			
	});
	
	$(document).ready(function(){		
		$(".answer").hide();

		$( ".question" ).on('click', function() {
		  $(this).next('.answer').slideToggle( '500' );
   	   	  $(this).prev( ".triangle-icon").toggleClass("rotate");
		  
		});

				
	});
	
	$(document).ready(function(){		
		/*ddexitpop.init({
			contentsource: ['id', 'ddexitpop1'],
			fxclass: 'random',
			displayfreq: 'always',
			mobileshowafter: 0,
			onddexitpop: function($popup){
				console.log('Exit Pop Animation Class Name: ' + ddexitpop.settings.fxclass)
			}

		})*/

		
					
	});
	
	$(document).ready(function(){
		
		jQuery(function($){
			$('#filter').submit(function(){
				var filter = $('#filter');
				$.ajax({
					url:filter.attr('action'),
					data:filter.serialize(), // form data
					type:filter.attr('method'), // POST
					beforeSend:function(xhr){
						filter.find('button').text('Processing...'); // changing the button label
					},
					success:function(data){
						filter.find('button').text('Apply filter'); // changing the button label back
						$('#response').html(data); // insert data
					}
				});
				return false;
			});
		});
		
	});
	
	$(document).ready(function(){
			
			
	});
		
})( jQuery );