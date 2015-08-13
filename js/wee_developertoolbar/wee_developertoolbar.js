document.observe("dom:loaded", function() {
	
	$$('.blocks_infos').each(function(elem){elem.innerHTML="+"});
	
	$$('.magentoLogo').each(function(elemIdx1) {
		elemIdx1.observe('click', function(){
			$$(".weeDeveloperToolbarDetails").each(function(elemIdx2){elemIdx2.hide();});
		    $("weeDeveloperToolbar").toggle();
		});
	});
	
	new Array('info', 'profiler', 'database').each(function(elemIdx1){
		$('toolbaritem_' + elemIdx1).observe('click', function(){
			new Array('info', 'profiler', 'database').each(function(elemIdx2){
				if (elemIdx1 != elemIdx2) {
					$('weeDeveloperToolbarDetails_' + elemIdx2).hide();
				}
			});
			$('weeDeveloperToolbarDetails_' + elemIdx1).toggle();
		});
	});
	
	new Array('request', 'general', 'handles', 'blocks', 'config', 'phpinfo').each(function(elemIdx1){
		$('tab_' + elemIdx1).observe('click', function(){
			new Array('request', 'general', 'handles', 'blocks', 'config', 'phpinfo').each (function(elemIdx2){
				if (elemIdx1 != elemIdx2) {
					$('tab_' + elemIdx2).removeClassName('active');
					$('tabContent_' + elemIdx2).hide();
				}
			});
			$('tab_' + elemIdx1).addClassName('active');
			$('tabContent_' + elemIdx1).show();
		});
	});
	
	$$('.toggleBlogProperties').each(function(elem){
		elem.observe('click', function(){
			elem.next('ul.blockProperties').toggle();
		});
	});
	
});

