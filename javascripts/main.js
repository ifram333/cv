var filterWords = ['puto', 'puta', 'malparido', 'malparida', 'hijo de puta', 'hijueputa', 'culo', 'chimba', 'gonorrea', 'mierda', 'cabron', 'cabrón', 'verga', 'marica' ];
var lengthFilter = filterWords.length;

var word;
for (var i = 0; i < lengthFilter; i++) {
  word = '';
  for (var j = 0; j < filterWords[i].length; j++) {
    word = word + filterWords[i][j];
    word = word + ' ';
  }
  word = word.substring(0, word.length-1);
  filterWords.push(word);
}

var regBadWords = new RegExp(filterWords.join("|"), "gi");

$(document).ready(function() {

  /*Ajax*/

  $.ajax({
    type: 'GET',
    url: 'database/skills.php',
    dataType: 'html',
    success: function(response){
      $('.skill').html(response);

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

  $('.carousel').carousel();

  $('#message').characterCounter();

  $('.tooltip-name').hide();
  $('.tooltip-email-blank').hide();
  $('.tooltip-email-regexp').hide();
  $('.tooltip-message').hide();

  $('#message').keypress(function(e) {
    var tval = $('#message').val(),
    tlength = tval.length,
    set = 360,
    remain = parseInt(set - tlength);
    if (remain <= 0 && e.which !== 0 && e.charCode !== 0) {
      $('#message').val(tval);
      return false;
    }
  });

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
				500
        // ,
				// function() {
				// 	var $target = $(target);
				// 	$target.focus();
				// 	if ($target.is(":focus")) {
				// 		return false;
				// 	}
				// 	else {
				// 		$target.attr('tabindex','-1');
				// 		$target.focus();
				// 	};
				// }
      );
			}
		}
  });

  $('#message').keyup(function () {
    $('#message').val(
      $('#message').val().replace(regBadWords, '****')
    );
  });


  $('.btn-send').click(function () {
    var name = $('#name').val();
    var email = $('#email').val();
    var message = $('#message').val();

    var regEmail = new RegExp(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);

    if (name == '') {
      $('.tooltip-name').show();
      return;
    }
    if (email == '') {
      $('.tooltip-email-blank').show();
      return;
    }
    if (message == '') {
      $('.tooltip-message').show();
      return;
    }

    if (!regEmail.test(email)) {
      $('.tooltip-email-regexp').show();
      return
    }
    else {
      $('.tooltip-email-regexp').hide();
    }

    $.ajax({
      type: 'POST',
      url: 'mailer.php',
      data: {name1: name, email1: email, message1:message},
      success: function(response) {
        M.toast({html: 'El correo ha sido enviado con exito.'})
      }
    });

  });

  $('#name').keyup(function () {
    if ($('#name').val().length > 0) {
      $('.tooltip-name').hide();
    }
    else {
      $('.tooltip-name').show();
    }
  });

  $('#email').keyup(function () {
    if ($('#email').val().length > 0) {
      $('.tooltip-email-blank').hide();
    }
    else {
      $('.tooltip-email-blank').show();
    }
  });

  $('#message').keyup(function () {
    if ($('#message').val().length > 0) {
      $('.tooltip-message').hide();
    }
    else {
      $('.tooltip-message').show();
    }
  });

});

/*On window load*/

$( window ).on('load', function() {

  $('.loader').fadeOut('slow', function () {
  });

});
