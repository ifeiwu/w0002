$(function() {
	
	$('body').restive({
		breakpoints: ['10000'],
		classes: ['nb'],
		turbo_classes: 'is_mobile=mobi,is_phone=phone,is_tablet=tablet,is_pc=pc',
		onRotate: function(){

		},
		onResize: function(){

		},
		onPhone: function(){
			
		},
		onMobile: function(){

		}
    });

    if ($('.works .items').length)
	{
		var getSlides = function(id) {
			var 
			albums2 = albums[id],
			items = new Array(),
			count = albums2['image'].length;

			for (var i = 0; i < count; i++) {
				items[i] = {
					'title': albums2['title'][i]+'<br><small>'+albums2['summary'][i]+'</small>',
					'src': ifeiwu.baseurl + albums2['image_path']+'/'+albums2['image'][i],
					'w': albums2['width'][i],
					'h': albums2['height'][i],
					'pid': id
				};
			}
			
			return items;
		}
		
	    var openPhotoSwipe = function(items) {
	    	
		    var pswpElement = document.querySelectorAll('.pswp')[0];

		    var options = {
				shareEl: false,
		        history: true,
		        focus: true,
		        closeOnScroll: false,
		        galleryPIDs: true,
		
		        showAnimationDuration: 0,
		        hideAnimationDuration: 0
		    };

		    var gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, items, options);
		    
		    gallery.init();
		};
		
		var photoswipeParseHash = function() {
			
			var hash = window.location.hash.substring(1),
		    	params = {};
	
		    if(hash.length < 5) { // pid=1
		        return params;
		    }
	
		    var vars = hash.split('&');
		    for (var i = 0; i < vars.length; i++) {
		        if(!vars[i]) {
		            continue;
		        }
		        var pair = vars[i].split('=');  
		        if(pair.length < 2) {
		            continue;
		        }           
		        params[pair[0]] = pair[1];
		    }
	
		    if(params.gid) {
		    	params.gid = parseInt(params.gid, 10);
		    }
	
		    return params;
		};
		
		var hashData = photoswipeParseHash();

		if(hashData.pid && hashData.gid)
		{
			var items = getSlides(hashData.pid);
			openPhotoSwipe(items);
		}

		$('.works .items a').click(function(e) {
			e.preventDefault();
			
			var id = $(this).data('id');

			if (albums[id]) {
				var items = getSlides(id);
				openPhotoSwipe(items);
			}
			else {
				return;
			}
		});
	}
	
	
	if ($('.news').length)
	{
		$('.news p').trunk8({lines: 2});
		
		$(window).resize(function(e) {
		  	$('.news p').trunk8({lines: 2});
		});
	}
	
	if ($('.sns').length)
	{
		$.each($('.sns .image'), function() {
			var $this = $(this),
				a_width = $this.width();
				
			$this.find('span').css({'left':((a_width/2) - 76) + 'px'});
		});
		
		$('.sns .image').on('click', function(e){
			e.preventDefault();
			
			$(this).toggleClass('active');
		});
	}

	/*if( $('#more').length ) {
		$('#more').click(function(){
			$('#more').text('loading...');
			var page = $(this).data('page');
			$.getJSON('forms/items_loading.php',{'page':page},function(json) {
				if (json.page > 0) {
					$('#more').data('page', json.page).html('More');
				} else {
					$('#more').remove();
				}
				if (json.html != '') {
					$('.items').append(json.html);
				}
			});
			
		});
	}*/
	
});


		

