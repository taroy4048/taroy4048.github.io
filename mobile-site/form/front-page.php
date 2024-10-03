<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>スマホ特化型サイト｜購入画面</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">

<link rel="stylesheet" href="../css/stlyle.css">



</head>

<body>


<header>
<h1>IKEBUKURO COFFEE FESTIVAL</h1>
<p class="tag-line">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione, obcaecati.</p>
<p class="ticket"><img src="https://placehold.jp/1000x400.png" alt=""></p>

<nav id="pc-nav" >
<ul>
<li><a href="#news">News</a></li>
<li><a href="#culture">Culture</a></li>
<li><a href="#access">Access</a></li>
<li><a href="#gallery">Gallery</a></li>
</ul>
</nav>

</header><!-- header -->

<div class="container">

<button id="ham-btn"><span></span></button>
<div id="cover"></div>

<nav id="sp-nav" >
<ul>
<li><a href="#news">News</a></li>
<li><a href="#culture">Culture</a></li>
<li><a href="#access">Access</a></li>
<li><a href="#gallery">Gallery</a></li>
</ul>
</nav>

<div class="logo-box"><img src="img/logo.svg" alt=""></div>

<p class="topic">テレビ熊本において日曜日にオンエア予定。池袋のロースターが紹介されます。番組の名前は「ストーリーズ」です。どうぞご覧ください。<span>テレビ熊本において日曜日にオンエア予定。池袋のロースターが紹介されます。番組の名前は「ストーリーズ」です。どうぞご覧ください。</span></p>

<h2 class="form-title">チケット購入画面</h2>
<form action="confirm.php" method="post"> 
<dl class="ticket-form">
<dt>3杯券</dt>
<dd><input type="number" name="num_a" id="num_a" oninput="calcTotal()">枚</dd>
<dt>6杯券</dt>
<dd><input type="number" name="num_b" id="num_b" oninput="calcTotal()">枚</dd>
<dt>合計金額</dt>
<dd><span id="total"></span>円</dd>
<!-- 確認画面に送信する -->
<input type="hidden" name="total" id="total_hidden" value="">

<dt>お名前</dt>
<dd><input type="text" name="onamae" required autocomplete="name" placeholder="お名前を入力して下さい"></dd>
<dt>メールアドレス</dt>
<dd><input type="email" name="email" required autocomplete="email"></dd>
</dl>

<input type="submit" value="確認画面へ">

</form>

</div><!-- /.container -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


<script>
//チケットの合計金額の計算
function calcTotal(){
//チケットの金額を変数に代入
const priceA = 800;
const priceB = 1500;
//入力した個数を変数に代入
const numA = document.querySelector('#num_a').value;
const numB = document.querySelector('#num_b').value;
//合計金額を計算
const total = priceA*numA + priceB*numB
//合計金額を表示させる
document.querySelector('#total').textContent = total
//合計金額を送信する
document.querySelector('#total_hidden').value = total
}

$(function(){
//ハンバーガーボタン
$('#ham-btn').on('click',function(){
$('#cover').toggleClass('is-active');
$(this).toggleClass('is-active');
$('#sp-nav').fadeToggle(300);
});
});
</script>



</body>
</html>