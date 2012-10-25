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
		//ִ��init������ǰ������
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
	
	
	//ͼƬ����������
	parts.popDetail = {
		execute:function(){
			
		},
		preCondition:function(){
			return $('#uploader').length == 0;
		}
	}
	
	$(function(){
		Basic.init();
    });
})(jQuery);
