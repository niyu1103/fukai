//スクロール
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

//スライド

$('.js-silde').slick({
	infinite: true, //スライドのループ有効化
	centerMode: true, //要素を中央寄せ
	variableWidth: true,
	arrows: false,
	autoplay: false, //自動再生
});


//TOTOP

$(function () {
	var topBtn = $('.p-pagetop');
	topBtn.hide();
	//スクロールが100に達したらボタン表示
	$(window).scroll(function () {
		if ($(this).scrollTop() > 100) {
			topBtn.fadeIn();
		} else {
			topBtn.fadeOut();
		}
	});
	//スクロールしてトップ
	topBtn.click(function () {
		$('body,html').animate({
			scrollTop: 0
		}, 500);
		return false;
	});
});

//会社概要 切り替え
$(".p-company__nav--item").on("click", function () {
	var $th = $(this).index(); //ここで何番目が押されたのか判別出来る。
	$(".p-company__nav--item").removeClass("is-current");
	$(".p-company__tab").hide().removeClass("is-active");
	$(this).addClass("is-current");
	$(".p-company__tab").eq($th).fadeIn('500').addClass("is-active");
	console.log($th);
});

//アコーディオンメニュー
$('.p-gnav__mega').on('click', function () {
	$('.p-gnav-sub').slideToggle();
})

$('.p-gnav-sub__link').on('click', function () {
	$('.p-gnav-sub').css('display', 'none');
})
