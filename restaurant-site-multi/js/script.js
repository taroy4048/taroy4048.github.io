
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

<script>
//多言語用のリダイレクト
document.getElementById('#btn-jp').href = 'https://taroy4048.github.io/restaurant-site-multi/';
//イタリア語のリダイレクト
document.getElementById('#btn-it').href = 'https://taroy4048.github.io/restaurant-site-multi/';
//英語のリダイレクト
document.getElementById('#btn-en').href = 'https://taroy4048.github.io/restaurant-site-multi/';
</script>
});


//document.getElementById('btn-ja').href = 'https://taroy4048.github.io/restaurant-site-multi/';