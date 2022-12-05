	/* .slider-category-img
	------------------------------------*/
	if($('.category-img-list').size()){
		$('.category-img-list li').each(function(index, element){
			if(index < 10){ index = '0'+index; }
			$(element).find('.slider-category-img, .slider-category-img-nav').addClass('slider-img-group' + index);
			$(element).find('.slider-category-img').addClass('slider-category-img' + index).slick({ speed: 200, arrows: false, draggable: true, swipe: true, swipeToSlide: true, touchMove: true, asNavFor: '.slider-img-group' + index });
			$(element).find('.slider-category-img-nav').addClass('slider-img-nav' + index).slick({ asNavFor: '.slider-img-group' + index, slidesToShow: 60, slidesToScroll: 1, focusOnSelect: true });
		});
		
		let category_img_width = $('.slider-category-img').width();
// 		let category_img_width2 = category_img_width * 2;
		let category_img_width2 = 0;
		
		if($('body.pc').length && $('.category-img-list').length){
			$('.category-img-list figure img').css('height', category_img_width);
		};
		
		$('.slider-category-img.swipe .slick-track').stop(true,false).velocity({ translateX: -category_img_width2 },{ duration: 0, delay: 399 });
		$('.category-img-list li').velocity({ opacity: 1 },{ duration: 200, delay: 400, easing: 'linear', complete: function(){
			if($('body.pc').length){
				$('.slider-category-img.swipe .slick-track').velocity({ translateX: -category_img_width },{ duration: 800, delay: 400, easing: 'easeInOutQuart' });
			}else{
				$('.category-img-list li:nth-of-type(3n-2) .slider-category-img.swipe .slick-track').velocity({ translateX: -category_img_width },{ duration: 700, delay: 300, easing: 'easeInOutQuart' });
				$('.category-img-list li:nth-of-type(3n-1) .slider-category-img.swipe .slick-track').velocity({ translateX: -category_img_width },{ duration: 700, delay: 590, easing: 'easeOutQuart' });
				$('.category-img-list li:nth-of-type(3n) .slider-category-img.swipe .slick-track').velocity({ translateX: -category_img_width },{ duration: 700, delay: 700, easing: 'easeOutQuart' });
			};
		}});
		
		if($('body.pc').length){
			$('.slider-category-img-nav .inner img').hover(function(e){
				let nav_class = $(this).parent().parent().parent().parent().attr('class');
				nav_class = nav_class.substr(24,18);
				var $currTarget = $(e.currentTarget),
				index = $currTarget.parent().data('slick-index');
				$('.slider-category-img.'+nav_class).slick('slickGoTo',index);
			},function(){
			});
		};
		
};
