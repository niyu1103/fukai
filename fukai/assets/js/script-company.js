/* ===========================================
 会社概要 切り替え
=========================================== */

jQuery(".p-company__nav--item").on("click", function () {
  var th = $(this).index(); //ここで何番目が押されたのか判別出来る。
  $(".p-company__nav--item").removeClass("is-current");
  $(".p-company__tab").hide().removeClass("is-active");
  $(this).addClass("is-current");
  $(".p-company__tab").eq(th).fadeIn('500').addClass("is-active");
  console.log(th);
});
