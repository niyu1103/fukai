	<footer id="footer" class="l-footer">
	  <div class="l-footer__img">
	    <img class="u-use-pc" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/footer.png" alt="">
	    <img class="u-use-sp" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/sp_footer.png" alt="">
	  </div>
	  <div class="l-footer__inner">
	    <p class="p-pagetop">
					<a class="p-pagetop__link" href="#" title="PageTop"
						>PageTop</a>
				</p>
	    <div class="l-wapper">
	      <ul class="p-gnav p-footer__nav">
	        <li class="p-gnav__item p-footer">
	          <a class="p-footer__nav--link" href="<?php echo home_url(); ?>/about">深井醤油について</a>
	        </li>
	        <li class="p-gnav__item p-footer">
	          <a class="p-footer__nav--link" href="<?php echo home_url(); ?>/products-single">商品のご紹介</a>
	        </li>
	        <li class="p-gnav__item p-footer u-use-sp">
	          <a class="p-footer__nav--link" href="<?php echo home_url(); ?>/products-single">単品商品</a>
	        </li>
	        <li class="p-gnav__item p-footer u-use-sp">
	          <a class="p-footer__nav--link" href="<?php echo home_url(); ?>/products-set">セット商品</a>
	        </li>
	        <li class="p-gnav__item p-footer">
	          <a class="p-footer__nav--link" href="<?php echo home_url(); ?>/information">店舗情報</a>
	        </li>
	        <li class="p-gnav__item p-footer">
	          <a class="p-footer__nav--link" href="<?php echo home_url(); ?>/recipe">レシピ</a>
	        </li>
	        <li class="p-gnav__item p-footer">
	          <a class="p-footer__nav--link" href="<?php echo home_url(); ?>/news">お知らせ</a>
	        </li>
	        <li class="p-gnav__item p-footer u-use-sp">
	          <a class="p-footer__nav--link" href="<?php echo home_url(); ?>/products-single">オンラインショップ</a>
	        </li>
	        <li class="p-gnav__item p-footer">
	          <a class="p-footer__nav--link" href="<?php echo home_url(); ?>/company">会社概要</a>
	        </li>
	        <li class="p-gnav__item p-footer">
	          <a class="p-footer__nav--link" href="<?php echo home_url(); ?>/contact">お問い合わせ</a>
	        </li>
	        <li class="p-gnav__item p-footer p-gnav__onlineshop u-use-pc">
	          <a class="p-footer__nav--link" href="<?php echo home_url(); ?>/products-single">オンラインショップ</a>
	        </li>
	        <li class="p-gnav__item p-footer u-use-pc">
	          <a class="p-gnav__link--facebook" href="#"><i class="fab fa-facebook-square"></i></a>
	        </li>
	      </ul>
	      <a class="p-gnav__link p-footer-facebook u-use-sp" href="#"><i class="fab fa-facebook-square"></i></a>
	    </div>
	    <small class="p-copyright">&copy;2020 Fukai Shoyu. All rights reserved.</small>
	  </div>
	</footer>
	<?php wp_footer(); ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/lib/slick/slick.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/footerFixed.js"></script>
	<?php if (is_front_page()) : ?>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/script-top.js"></script>
	<?php elseif (is_page('company')): ?>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/script-company.js"></script>
	<?php elseif (is_page('contact')): ?>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/script-contact.js"></script>
	<?php endif; ?>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/script-common.js"></script>
	</body>
	</html>
