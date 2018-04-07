$(document).ready(function() {

  /*Ajax*/

  $.ajax({
    type: "GET",
    url: "database/skills.php",
    dataType: "html",
    success: function(response){
      $(".skill").html(response);

      $('.show-less-skill').hide();
      skills = $('.skill').children();
      for (var i = 4; i < skills.length; i++) {
        $(skills[i]).hide();
      }

      $('.show-more-skill').click(function () {
        for (var i = 4; i < skills.length; i++) {
          $(skills[i]).show();
        }
        $('.show-more-skill').hide();
        $('.show-less-skill').show();
      });

      $('.show-less-skill').click(function () {
        for (var i = 4; i < skills.length; i++) {
          $(skills[i]).hide();
        }
        $('.show-more-skill').show();
        $('.show-less-skill').hide();
      });
    }
  });

  /****************************************************/

  $('.sidenav').sidenav();

  $('a[href*="#"]')
	.not('[href="#"]')
	.not('[href="#0"]')
	.click(function(event) {
		if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
			if (target.length) {
				event.preventDefault();
				$('html, body').animate({
					scrollTop: target.offset().top
				},
				500,
				function() {
					var $target = $(target);
					$target.focus();
					if ($target.is(":focus")) {
						return false;
					}
					else {
						$target.attr('tabindex','-1');
						$target.focus();
					};
				});
			}
		}
	});

  

});

/*On window load*/

$( window ).on('load', function() {

  $('.loader').fadeOut('slow', function () {
  });

});
