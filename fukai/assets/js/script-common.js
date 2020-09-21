/* ===========================================
 loader
=========================================== */
var time = new Date().getTime();

var webStorage = function () {
	if (sessionStorage.getItem('access')) {
		console.log('2回目以降のアクセスです');
		$('.p-loader__wrap').css('display', 'none');
	} else {
		console.log('初回アクセスです');
		$('.p-mainvisual__home').hide();
		$('.l-header').hide();
		$(function () {
			var loader = $('.p-loader__wrap');
			$(window).on('load', function () {

				var now = new Date().getTime();
				if (now - time <= 5000) {
					setTimeout(5000 - (now - time));
					console.log('5秒以下');
					return;
				} else {
					$('.p-mainvisual__home').show();
					$('.l-header').show();
					loader.fadeOut();
				}
			});

			//ページの読み込みが完了してなくても5秒後にアニメーションを非表示にする
			setTimeout(function () {
				$('.p-mainvisual__home').show();
				$('.l-header').show();
				loader.fadeOut();
			}, 5000);
		});


		sessionStorage.setItem('access', 0);
	}
}

webStorage();

/* ===========================================
 loader スライド
=========================================== */
var $slider = $('.js-loadersilde')
	.on('afterChange', function (evt, slick, currentSlide) {
		// currentSlide は現在のスライドのインデックス 0 からカウント
		var slideCount = slick.slideCount - 1;
		if (slideCount === currentSlide) {
			$(this).slick('slickPause');
		}
	})
	.slick({
		slidesToShow: 1,
		autoplay: true,
		pauseOnHover: false,
		autoplaySpeed: 1000,
		arrows: false,
		fade: true
	});



/* ===========================================
 ヘッダー固定
=========================================== */
var windowWidth = $(window).width();
var windowSm = 768;
if (windowWidth >= windowSm) {
	jQuery(function () {
		var navPos = jQuery('#header').offset().top; // グローバルメニューの位置
		var navHeight = jQuery('#header').outerHeight(); // グローバルメニューの高さ

		jQuery(window).scroll(function () {
			if (jQuery(this).scrollTop() > navPos) {
				jQuery('body').css('padding-top', navHeight);
				jQuery('#header').addClass('is-fixed');
			} else {
				jQuery('body').css('padding-top', 0);
				jQuery('#header').removeClass('is-fixed');
			}
		});
	});
}


/* ===========================================
 スムーススクロール
=========================================== */
jQuery(function () {
	$('a[href*="#"], area[href*="#"]').each(function () {
		jQuery.easing.quart = function (x, t, b, c, d) {
			return -c * ((t = t / d - 1) * t * t * t - 1) + b;
		};
		if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname && this.hash.replace(/#/, '')) {
			var $targetId = $(this.hash),
				$targetAnchor = $('[name=' + this.hash.slice(1) + ']');
			var $target = $targetId.length ? $targetId : $targetAnchor.length ? $targetAnchor : false;

			if ($target) {
				var targetOffset = $target.offset().top - 52;

				$(this).click(function () {
					$('html, body').animate({
						scrollTop: targetOffset
					}, 500, 'quart');
					return false;
				});
			}
		}
	});

	if (location.hash) {
		var hash = location.hash;
		window.scroll(0, 0);
		$('a[href*="' + hash + '"]').click();
	}

});





/* ===========================================
 TOTOP
=========================================== */

jQuery(function () {
	var topBtn = jQuery('.p-pagetop');
	topBtn.hide();
	//スクロールが100に達したらボタン表示
	jQuery(window).scroll(function () {
		if (jQuery(this).scrollTop() > 100) {
			topBtn.fadeIn();
		} else {
			topBtn.fadeOut();
		}
	});
	//スクロールしてトップ
	topBtn.click(function () {
		jQuery('body,html').animate({
			scrollTop: 0
		}, 500);
		return false;
	});
});


/* ===========================================
 ナビゲーション アコーディオンメニュー
=========================================== */

var windowWidth = $(window).width();
var windowSm = 768;
if (windowWidth >= windowSm) {

	jQuery('.p-gnav__mega').on('click', function () {
		jQuery('.p-gnav-sub').slideToggle(200);
	})

	jQuery('.p-gnav-sub__link').on('click', function () {
		jQuery('.p-gnav-sub').css('display', 'none');
	})

}

/* ===========================================
 ナビゲーション ドロワー
=========================================== */
jQuery(function () {
	jQuery('.header--g-nav_link').click(function () {
		// もしチェックが入っていたら
		if (jQuery('#drawerCheckbox[name="check"]').prop('checked')) {
			// チェックを外す
			$('#drawerCheckbox[name="check"]').prop('checked', false);
			// もしチェックが外れていたら
		} else {
			// チェックを入れる
			jQuery('#drawerCheckbox[name="check"]').prop('checked', true);
		}
	});
});

/* ===========================================
カート　サムネイル　削除
=========================================== */
jQuery(function () {

	$("#cart .thumbnail").remove();
	$("#cart .stock").remove();

});

$(window).on('load resize', function () {
	var winW = $(window).width();
	var devW = 767;
	if (winW <= devW) {
		$("#cart .num").remove();
		$("#cart_table thead").remove();
		$(".skumulti thead").remove();
		$("#cart tfoot .action").remove();
	}
});
