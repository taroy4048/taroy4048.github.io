
//vegasの呼び出し

$('#main-visual').vegas({
    slides: [
        { src: "/img/main1.webp" },
        { src: "/img/main2.webp" },
        { src: "/img/main3.webp" },
    ],
timer: false,
    transition: 'blur',
    animation: 'random',
delay:5000,
animationDuration:3000,
});

$(function(){
//ハンバーガーボタン
//まず#g-navを非表示にする
$('#g-nav').hide();
//#ham-btnをon.clickしたら、thisにtoggleClassする
$('#ham-btn').on('click',function(){
$(this).toggleClass('is-active');
//さらに#g-navをfadeToggleする
$('#g-nav').fadeToggle(300);
});

//#g-nav aをon.clickしたら、#g-navをfadeOutする
$('#g-nav a').on('click',function(){
$('#g-nav').fadeOut(300);
$('#ham-btn').removeClass('is-active');
});

//ajaxで外部データを呼び出す
$('#news-list').load('news.txt');

/* カルーセル */
$('.bxslider').bxSlider({
ticker: true,
speed: 50000,
minSlides: 2,
maxSlides: 6,
slideWidth: 360,
});

const fullYear = new Date().getFullYear();
if(fullYear >= 2025){
$('#this-year').text('2024 - '+fullYear);
}else{
$('#this-year').text(fullYear);
}
});


