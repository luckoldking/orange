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
		
		//初始化邮件区块的喜欢motifs列表
		var likearea = $('.likearea');
		if(likearea.length > 0){
			this._initFavourite($('.likearea'));
		}	
	},
	_initFavourite:function(con){
		var data = this._localStorage(null, 'getAll'),
			temp = $('<li>\
						<a data-lightview-group="likebox" class="lightview" href="">\
							<img src="">\
							<span></span>\
						</a>\
					</li>');
		if($.browser.msie && $.browser.version < 8){
			// data = 
			data = decodeURIComponent(window.location.search.slice(1));
			if(data){
				data = data.slice(data.indexOf('pics=') + 5).split(',');
			}
		}
		for(var i in data){
			$('.favpiclist').show();
			var k = temp.clone();
			k.find('a').attr('favid', i).prop('href', data[i])
				.find('img').prop('src', data[i]);
			k.appendTo(con);
		}
		this._bindEvent(con);
	},
	_bindEvent:function(con){
		var self = this;
	
		//点击列表图片右上角横杠，从列表中删除
		con.on('click','.lightview span',function(e){
			e.preventDefault();
			e.stopPropagation();
			var cl = $(this).closest('li');
			cl.remove();
			self._localStorage(cl, 'remove');
			if(con.find('li').length === 0){
				$('.favpiclist').hide();
			}
		});
	},
	_localStorage:function(obj, operation){
		if($.browser.msie && $.browser.version < 8){
			return null;
		}
		var item = localStorage.getItem('favpic'),
			data = (item && JSON.parse(item)) || {};
			
		switch (operation) {
			case 'getAll':
				return data;
				break;
			case 'remove':
				delete data[obj.find('a').attr('favid')];
				localStorage.setItem('favpic', JSON.stringify(data));
				break;
		}
	}
};


$($.proxy(Contact, 'init'));


})(jQuery);
