$(function() {
	// Create a new instance of ladda for the specified button
	var subscribeBtnLadda = Ladda.create(document.getElementById('subscribe-btn'));

	// track external links
	$('a').click(function(){
		var url = $(this).attr('href');
		var txt = $(this).text();
		if (LSUtils.isExternal(url) && url !== "#") {
			ga('send', 'event', {
				eventCategory: 'Outbound Link',
				eventAction:  'click',
				eventLabel: url + ' - ' + txt,
				transport: 'beacon'
			});
		}
	});

	$('#subscribe').on('shown.bs.modal', function(e) {
		ga('send', 'pageview', '/subscribe-modal-shown');
	});

	$('#about').on('shown.bs.modal', function(e) {
		ga('send', 'pageview', '/about-modal-shown');
	});

	function validateEmail(email) {
		var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		return re.test(email);
	}

	// Submit form
	$('#mc-sub-form').on('click', '#subscribe-btn', function(e){
		$('.error').remove();
		subscribeBtnLadda.start();

		var email = $('#mc-email').val();

		if (!validateEmail(email)) {
			subscribeBtnLadda.stop();
			$('#mc-sub-form h3').after('<p class="error">Sorry, that email isn&rsquo;t valid.</p>');
			return;
		}

		//grab attributes and values out of the form
		var data = {email: $('#mc-email').val()};
		var endpoint = '/mc.php';

		//make the ajax request
		$.ajax({
			method: 'POST',
			dataType: "json",
			url: endpoint,
			data: data,
			success: function(data) {
				subscribeBtnLadda.stop();
				var $form = $('#mc-sub-form');

				if (data.id){
					$('.sr-only').remove();
					$('#mc-email').remove();
					$('#subscribe-btn').remove();
					$('#mc-sub-form h3').text('Thanks! We&rsquo;ll be in touch.');
					$('#mc-sub-form h3').after('<p>In the meantime, please feel free to email us at info@longshore.agency for more information or to get a free quote.</p>');
					//successful adds will have an id attribute on the object
					ga('set', 'dimension2', (new Date()).getTime().toString());
					ga('send', 'pageview', '/submitted-newsletter-signup');
				} else if (data.title == 'Member Exists') {
					//MC wil send back an error object with "Member Exists" as the title
					$('#mc-sub-form h3').after('<p class="error">Sorry, someone with that email has already signed up.</p>');
				} else {
					//something went wrong with the API call
					$('#mc-sub-form h3').after('<p class="error">Well, this is embarassing. Looks like something is broken. Please try again later.</p>');
				}
			},
			error: function(data) {
				subscribeBtnLadda.stop();
				//something went wrong with the API call but wasn't a 200
				$('#mc-sub-form h3').after('<p class="error">Well, this is embarassing. Looks like something is broken. Please try again later.</p>');
			}
		});
	});
});