<?php
$name = htmlspecialchars($_POST["onamae"],ENT_QUOTES);
$furigana = htmlspecialchars($_POST["furigana"],ENT_QUOTES);
$zip =($_POST["zip"]);
$address1 = htmlspecialchars($_POST["address1"],ENT_QUOTES);
$address2 = htmlspecialchars($_POST["address2"],ENT_QUOTES);
$address3 = htmlspecialchars($_POST["address3"],ENT_QUOTES);
$tel = htmlspecialchars($_POST["tel"],ENT_QUOTES);
$email = htmlspecialchars($_POST["email"],ENT_QUOTES);
$message = htmlspecialchars($_POST["message"],ENT_QUOTES);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Victoria of London|ヴィクトリア・オブ・ロンドン</title>
<meta name="description" content="お問い合わせの方はこちらからお願いいたします。ご注文に関するお問い合わせには、必ず「ご注文番号」をご記入くださいますようお願いいたします。">
<meta name="keywords" content="これは使用されていないので入れない">
<meta name="format-ditection" content="telephone=no">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abyssinica+SIL&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../css/style.css"> 
<link rel="stylesheet" href="../css/hamburgers.min.css">
<link rel="shortcut icon" href="../favicon.png">
<link rel="apple-touch-icon" href="touch-icon.png" sizes="192*192">
<script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>
</head>
<body>
<!-- sp用header & nav -->
<header class="header-sp">
  
<p class="hamburger hamburger--slider"  id="btn">
<span class="hamburger-box">
<span class="hamburger-inner"></span>
</span>
</p>

<div class="sp-company-name">
<h1>Victoria of London</h1>
</div><!-- /.sp-company-name -->
 
<div class="logo-wrapper">
<div class="search-logo-sp">
<a href="#"><img src="../img/search.svg" alt="検索のアイコン"></a>
</div><!-- /.search-logo-sp -->

<div class="bag-logo-sp"><a href="#">
<img src="../img/bag_sp.svg" alt="買い物カゴのアイコン"></a> 
</div><!-- /.bag-logo-sp -->

</div><!-- /.logo-wrapper -->
</header><!-- /.header-sp -->

<p class="search-sp"><input type="text" placeholder="Search products"><button id="s-btn"></button></p>

<nav id="g-nav-sp">
<h2>Victoria of London</h2>
<ul>
<li class="home-logo-sp"><a href="../"><img src="../img/home.png" alt="ホーム画面のアイコン"></a></li>
<li><a href="../tea/">紅茶</a></li>
<li><a href="../history/">ヒストリー</a></li>
<li><a href="../store/">店舗案内</a></li>
<li><a href="index.html">お問合せ</a></li>
</ul>

<div class="sns-wrapper-sp">
<a href="#"><img src="../img/line-brands.svg" alt="ラインのアイコン"></a>
<a href="https://twitter.com/Fortnums"><img src="../img/twitter-brands.svg " alt="インスタグラムのアイコン"></a>
<a href="#"><img src="../img/square-facebook-brands.svg" alt="フェイスブックのアイコン"></a>
<a href="#"><img src="../img/instagram-brands.svg" alt="ツィッターのアイコン"></a>
</div><!-- /.sns-wrapper-sp -->

<div class="symbol-logo-sp">
<a href="#"><img src="../img/symbol1.svg" alt="ヴィクトリア・メアリー・キャヴェンディッシュの紋章"></a>
<p>Coat of Arms of <br> Victoria Mary Cavendish,<br>Marchioness of Bradford</p>
</div><!-- /.symbol-wrapper -->
</nav>
<!-- ここまでがsp用header&nav -->

<!-- pc用header & nav -->

<header class="header-pc"> 

<div class="header-wrapper">
<div class="symbol-logo-pc">   
<a><img src="../img/symbol1.svg" alt="ヴィクトリア・キャヴェンディッシュの紋章"></a>
<p>Coat of Arms of <br> Victoria Mary Cavendish,<br>&nbsp;Marchioness of Bradford</p>
</div><!-- /.symbol-logo-pc -->

<div class="company-name">
<h1>Victoria&ensp;of&ensp;London</h1>
<p>EST 1837</p>
</div><!-- /.company-name -->

<div class="guide">
<ul>
<li><a href="../contact_us/">CONTACT US</a></li>
<li><a href="#">SIGN IN</a></li>
<li class="bag-logo-pc"><a href="#"><img src="../img/bag_pc.svg" alt="買い物カゴのアイコン"></a></li>
</ul>
</div><!-- /.guide -->
</div><!-- /.header-wrapper -->

<p class="search-pc"><input type="text" placeholder="Search products"></p>
</header><!-- header-pc -->

<nav class="g-nav-pc">
<ul>
<li class="home-logo-pc"><a href="../"><img src="../img/home.png" alt="ホーム画面のアイコン"></a></li>
<li class="nav-title"><a href="../tea/">紅茶</a></li>
<li class="nav-title"><a href="../history/">ヒストリー</a></li>
<li class="nav-title"><a href="../store/">店舗案内</a></li>
<li class="nav-title"><a href="index.html">お問合せ</a></li>
</ul>
</nav><!-- /.g-nav-pc -->

<div class="nav-underline">
</div><!-- /.nav-underline -->

<!-- ここまでがpc用header&nav -->

<h2>お問合せ(確認ページ)</h2>

<form id="g-form" class="h-adr" action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSe5NgXFeyXoB1_7-HIbyqLNqWgkqVq7Rd_l68MFLk5XNjBo6A/formResponse" method="post" >
<span class="p-country-name" style="display:none;">Japan</span><!-- 〒 -->

<p class="txt">内容によっては回答をさしあげるのにお時間をいただくこともございます。<br>
また、休業日は翌営業日以降の対応となりますのでご了承ください。</p>

<dl>
<dt>お名前<span class="red">※</span></dt>
<dd>
<?php echo $name; ?>
</dd>

<dt>お名前(フリガナ)<span class="red">※</span></dt>
<dd>
<?php echo $furigana; ?>    
</dd>

<dt>郵便番号(住所自動入力)</dt>
<dd>
<?php echo $zip; ?> 
</dd>
	
<dt>住所</dt>
<dd>
<?php
echo $address1."<br>";
echo $address2."<br>";
echo $address3;
?>
</dd>

<dt>電話番号</dt>
<dd>
<?php echo $tel; ?>
</dd>

<dt>メールアドレス<span class="red">※</span></dt>
<dd>
<?php echo $email; ?>
</dd>


<dt>お問合せ内容<span class="red">※</span><br>(全角1000字以下)</dt>
<dd>
<?php echo $message; ?>
</dd>   
</dl>


<input type="hidden" name="entry.1904645760" value="<?php echo $name; ?>"> 
<input type="hidden" name="entry.1386589028" value="<?php echo $furigana; ?>"> 
<input type="hidden" name="entry.1155819491" value="<?php echo $zip; ?>"> 
<input type="hidden" name="entry.138534836" value="<?php echo $address1;?>">
<input type="hidden" name="entry.836040688" value="<?php echo $address2;?>"> 
<input type="hidden" name="entry.1410511621" value="<?php echo $address3;?>"> 
<input type="hidden" name="entry.1276170155" value="<?php echo $tel; ?>">
<input type="hidden" name="entry.892738048" value="<?php echo $email; ?>">
<input type="hidden" name="entry.1429199988" value="<?php echo $message; ?>"> 


<div class="form-btn">
<input type="submit" value="送信"><!--送信ボタンはsubmit  -->
<input type="button" onclick="history.back();" value="入力画面に戻る">
</div><!-- /.form-btn -->

</form>

<!-- ここからfooter扱い -->
<div class="guide-wrapper">
<div class="shipping-cost">
<h4>オンラインストアでの送料について</h4>

<p>お買い上げ金額が5,400円(税込)未満の場合:送料770円(税込) <br>
お買い上げ金額が5,400円(税込)以上7,560円(税込)未満の場合:送料220円(税込) <br>
お買い上げ金額が7,560円(税込)以上の場合：送料無料</p>
</div><!-- /.shipping-cost -->

<div class="sns-wrapper-pc">
<a href="#"><img src="../img/line-brands.svg" alt="ラインのアイコン"></a>
<a href="https://twitter.com/Fortnums"><img src="../img/twitter-brands.svg " alt="ツィッターのアイコン"></a>
<a href="#"><img src="../img/square-facebook-brands.svg" alt="フェイスブックのアイコン"></a>
<a href="#"><img src="../img/instagram-brands.svg" alt="インスタグラムのアイコン"></a>
</div><!-- /.sns-wrapper-pc -->
</div><!-- /.guide-wrapper -->
        
<div class="info-wrapper">
<div class="shopping">
<h4>＜ショッピングガイド＞</h4>
<ul>
<li><a href="#">注文について</a></li>
<li><a href="#">お支払について</a></li>
<li><a href="#">Visit UK Site</a></li>
<li><a href="#">包装について</a></li>
<li><a href="#">配送について</a></li>
<li><a href="#">返品・交換・キャンセルについて</a></li>
</ul>
</div><!-- /.shopping -->
        
<div class="others">
<h4>＜その他＞</h4>
<ul>
<li><a href="index.html">お問合せ</a></li>
<li><a href="../history/">ヒストリー</a></li>
<li><a href="../store/">店舗案内</a></li>
<li><a href="#">Visit UK Site</a></li>
</ul>
</div><!-- /.others -->
</div><!-- /.info-wrapper -->
        
<footer>
<nav class="f-nav">
<ul>
<li><a href="../">ホーム</a></li>
<li><a href="#">買い物ガイド</a></li>
<li><a href="#">特定商取引法の表記</a></li>
<li><a href="index.html">お問合せ</a></li>
<li><a href="index.html">プライバシーポリシー</a></li>
</ul>
</nav><!-- /.f-nav -->
        
<div class="footer-company">
<p><small> &copy; Victoria of London 2018-<span id="this-year"></span>&nbsp; All Rights Reserved</small></p>
</div>
</footer><!-- /.footer-company -->
        
<div class="button"></div>
        
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        
<script>
        
$(function(){

/* sp検索 */
$('.search-logo-sp').on('click',function(){
$('.search-sp').slideToggle('slide');
});

$('#s-btn').on('click',function(){
$('.search-sp').slideToggle('slide');
}); 
    
/* ハンバーガーボタン&アコーディオン */
$('#btn').on('click',function(){
$(this).toggleClass('is-active');
$('#g-nav-sp').toggleClass('slide');
});
        
$('#g-nav-sp a').on('click',function(){
$('#g-nav-sp').removeClass('slide');
$('#btn').removeClass('is-active');
});
        
/* to-top */
var btn = $('.button');
$(window).on('load scroll', function(){
if($(this).scrollTop() > 100) {
btn.addClass('active');
}else{
btn.removeClass('active');
}
});
          
btn.on('click',function () {
$('body,html').animate({
scrollTop: 0
});
});
});

window.addEventListener('DOMContentLoaded', function(e){
document.querySelector(location.hash).checked=true;
});


$(function(){
$('#g-form').submit(function (event) {
var formData = $('#g-form').serialize();
$.ajax({
url: "https://docs.google.com/forms/u/0/d/e/1FAIpQLSe5NgXFeyXoB1_7-HIbyqLNqWgkqVq7Rd_l68MFLk5XNjBo6A/formResponse",
data: formData,
type: "POST",
dataType: "xml",
statusCode: {
0: function(){
window.location.href = "thanks.html";
},
200: function(){
//失敗したときの処理
}
}
});
//googleformへのページ遷移をキャンセル
event.preventDefault();
});
});

//西暦を取得
let fullYear = new Date().getFullYear();
$('#this-year').text(fullYear);

if(fullYear >= 2023){
$('#this-year').text('2022 - '+fullYear);
}
     
</script>
</body>
</html>