/**
 *  @use motifs
 *  @author jx
 *  @date 2012-10-25
 **/

(function($){
	var Private = {
	};
	
	var _proto = {
		init:function(){
			if(this.preCondition()){
				this.execute();
			}	
		},
		//执行init方法的前置条件
		preCondition:function(){
			return true;
		},
		execute:function(){
		}
	};
	var Basic = {
		init:function(){
			for(var i in this.Parts){
				$.extend({}, _proto, this.Parts[i]).init();				
			}
		}
	};
	parts = (Basic.Parts = {});
	
	
	//图片浮出描述层
	parts.popDetail = {
		execute:function(){
			
		},
		preCondition:function(){
			return true;
		}
	}
	
	//喜欢motifs发送功能
	parts.sendLike = {
		execute:function(){
			var con = $('.likebox-content');
			
			this._initContent(con);	
			this._bindEvent(con);		
		},
		_initContent:function(con){
			var data = this._localStorage(null, 'getAll'),
				temp = $('<li>\
							<a data-lightview-group="likebox" class="lightview" href="">\
								<img src="">\
								<span></span>\
							</a>\
						</li>');
			for(var i in data){
				$('.likebox').show();
				var k = temp.clone();
				k.find('a').attr('favid', i).prop('href', data[i])
					.find('img').prop('src', data[i]);
				k.appendTo(con);
				//this._localStorage(k,'remove');
			}
		},
		_bindEvent:function(con){
			var self = this,
				motifs = $('.motifs-detail li span');
			
			//点击motifs上的我喜欢，加入喜欢列表功能
			motifs.on('click',function(e){
				e.preventDefault();
				e.stopPropagation();
				var li = $(this).closest('li'),
					cl = li.clone();
				
				//已经有了，则return
				if(self._localStorage(cl, 'has')){
					return;
				}
				$('.likebox').show();
				var thekey = self._localStorage(cl, 'add');
				cl.find('a').attr('data-lightview-group', 'likebox').attr('favid', thekey);
				cl.find('span').empty();
				con.append(cl);
				self._move(li,cl);
			});
			//点击列表图片右上角横杠，从列表中删除
			con.on('click','.lightview span',function(e){
				e.preventDefault();
				e.stopPropagation();
				var cl = $(this).closest('li');
				cl.remove();
				self._localStorage(cl, 'remove');
				if(con.find('li').length === 0){
					$('.likebox').hide();
				}
			});
			//图片链接列表提交到contact us页面
			$('#likebox-send').click(function(e){
				if($.browser.msie && $.browser.version < 8){
					var pics = $('.likebox .lightview img'),
						data = [],
						param = '';
					
					if(pics.length === 0 ){
						alert('Please choose your favourite motifs first！');
						return;
					}
					pics.each(function(i, el){
						data.push(el.src);
					});
					param = data.join(',');
					window.open('http://127.0.0.1/wordpress/contact?pics=' + encodeURIComponent(param) + '#contactmail','_self');						
				}
				else{
					window.open('http://127.0.0.1/wordpress/contact#contactmail','_self');
				}
			});
		},
		_move:function(from, to){
			var pos1 = from.offset(),
				pos2 = to.offset(),
				pic = from.find('img').clone();
			to.hide();
			pic.appendTo(document.body);
			pic.css({
				position:'absolute',
				width:180,
				height:140,
				left:pos1.left + 6,
				top:pos1.top + 6
			}).animate({
				width:50,
				height:50,
				left:pos2.left,
				top:pos2.top
			},1000,'linear',function(){
				to.show();
				pic.remove();
			});
				
		},
		_localStorage:function(obj, operation){
			if($.browser.msie && $.browser.version < 8){
				var data = $('.likebox .lightview img');
				switch (operation) {
					case 'has':
						var img = obj.find('img').prop('src');
						for(var i = 0; i < data.length; i++){
							if(data[i] === img){
								return true;
							}
						}
						return false;
						break;
					case 'getAll':
						return null;
						break;
					default:
						return 'fcie6';
				}
			}
			
			var self = this,
				item = localStorage.getItem('favpic'),
				data = (item && JSON.parse(item)) || {};
				
			switch (operation) {
				case 'has':
					var img = obj.find('img').prop('src');
					for(var i in data){
						if(data[i] === img){
							return true;
						}
					}
					return false;
					break;
				case 'get':
					return data[obj.find('a').attr('favid')];
					break;
				case 'getAll':
					return data;
					break;
				case 'add':
					var key = self._guid();
					data[key] = obj.find('img').prop('src');
					localStorage.setItem('favpic', JSON.stringify(data));
					return key;
					break;
				case 'remove':
					delete data[obj.find('a').attr('favid')];
					localStorage.setItem('favpic', JSON.stringify(data));
					break;
				case 'update':
					data[obj.find('a').attr('favid')] = obj.find('img').prop('src');
					localStorage.setItem('favpic', JSON.stringify(data));
					break;
			}
		},
		_S4:function() {
  			return (((1+Math.random())*0x10000)|0).toString(16).substring(1);
		},
		_guid:function(){
   			return (this._S4()+this._S4()+"-"+this._S4()+"-"+this._S4()+"-"+this._S4()+"-"+this._S4()+this._S4()+this._S4());
		},
		preCondition:function(){
			return $('.likebox').length > 0;
		}
	}
	
	$(function(){
		Basic.init();
    });
})(jQuery);
