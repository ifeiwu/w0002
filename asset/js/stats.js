(function() {
	
	var query = function(name) {
		var
		scripts = document.getElementsByTagName('script'),         
	    script = scripts[scripts.length - 1],
	    url = script.hasAttribute ? script.src : script.getAttribute('src', 4),
	    reg = new RegExp("(^|&|\\?)" + name + "=([^&]*)(&|$)", "i"),
	    r = url.substr(1).match(reg);
	    
	    if (r != null) {
	    	return unescape(r[2]);
		}
	    
	    return null;
	}

	var formData = new FormData();
	formData.append('url', location.href);
	formData.append('referer', document.referrer);
	formData.append('screen', window.screen.width + 'x' + window.screen.height);
	formData.append('much', query('m'));
	formData.append('unit', query('u'));
	formData.append('date', query('d'));

	var xhr = new XMLHttpRequest();
    xhr.open('POST', query('r') + 'stats', true);
    xhr.send(formData);
    
})();