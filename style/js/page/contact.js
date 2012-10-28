(function($) {


var Contact = {
	init: function() {
		var form = $('form.contact-form'),
			emailText = $('input[name=email]', form),
			emailPattern = /^(.+)@(\w+)(\.\w+)*\.(\w{2,6})$/;

		form.on('submit', function(e) {
			e.preventDefault();
			var email = $.trim(emailText.val());
			if (!email) {
				alert('please enter your email address');
				return;
			}

			if (!emailPattern.test(email)) {
				alert('invalid email address');
				return;
			}

			form[0].submit();
		});

	}

};


$($.proxy(Contact, 'init'));


})(jQuery);
