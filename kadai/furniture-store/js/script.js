//西暦の取得


//ハンバーガーメニュー
//#ham-btnをon.clickしたら
$('#ham-btn').on('click',function(){
$(this).toggleClass('is-active');
$('#sp-nav').toggleClass('slide');
});

//スクロールイベント
$(window).on('scroll', function(){
//自身のスクロール量を取得し代入
let y = $(window).scrollTop();
console.log(y);
//headerの高さを取得
let headerH = $('header').outerHeight();
console.log(headerH);

if(y > headerH){
$('body').addClass('scroll');
#sub-title
}else{
$('body').removeClass('scroll');
}
});
