<!DOCTYPE html>
<html lang="ja">
<head>
<title>お申込みフォーム | Centrasia Partners</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
<meta name="viewport" content="width=device-width,user-scalable=no,maximum-scale=1" />
<!-- <link rel="stylesheet" type="text/css" href="./style.css">  -->
<link rel="stylesheet" media="screen and (min-width: 769px)" type="text/css" href="./style.css" />
<link rel="stylesheet" media="screen and (max-width: 640px)" type="text/css" href="./stylemob.css" />
<!-- Fav icon -->
 <link rel="shortcut icon" type="image/ico" href="./img/favicon.ico" />

</head>
<body>
	<div id="wrap">
		<div id="center">
			<center>
<h1>申込書</h1>
	<?php if(empty($_POST)){ ?>
	<?php if($_GET["error"] == "e"){
		echo ('<h3 style="color:red">※印は必ず入力して下さい。</h3>');
	} 
	?>
		</center>
		</div>
<center>
<div id="form">
<form action="#" method="POST">
	<div id="select">
		MP4 借上げスキーム
	</div>

	<div id="tablelayout">
		<table>
			<tr>
			<th><span style="color:red;">※</span>氏名</th>
			<td><input id="name" type="text" maxlength="15" name="yourname"></td>
			</tr>
			<tr>
				<th><span style="color:red;">※</span>年齢</th>
				<td><input id="age" type="text" maxlength="2" size="4" name="age">歳</td>
			</tr>
			<tr>
				<th><span style="color:red;">※</span>医院名</th>
				<td><input id="shopname" type="text" maxlength="20" name="shopname"></td>
			</tr>
			<tr>
				<th>住所</th>
				<td><input id="address" type="text" maxlength="50" name="address"></td>
			</tr>
			<tr>
				<th><span style="color:red;">※</span>E-MAIL</th>
				<td><input id="email" type="email" maxlength="30" name="email"></td>
			</tr>
			<tr>
				<th>電話番号</th>
				<td><input id="tel" type="text"  maxlength="15" name="tel"></td>
			</tr>
			<tr>
				<th>物件の名前</th>
				<div class="radio_ex">
				<td><label><input id="nameofbuilt" type="checkbox"  name="nameofbuilt1" value="MP4">MP4</label>
				<label><input id="nameofbuilt" type="checkbox"  name="nameofbuilt2" value="MP3">MP3</label></td>
				</div>
			</tr>
			<tr>
				<th>部屋番号</th>
				<td><input id="roomnumber" type="text" maxlength="20" name="roomnumber"></td>
			</tr>
			<tr class="roomsizetag">
				<th>部屋の広さ</th>
				<td><input id="roomsizem" type="text" maxlength="4" name="roomsizem">㎡ または 
				<input id="roomsizesqft" type="text" maxlength="4" name="roomsizesqft">sqft</td>
			</tr>
			<tr>
				<th>購入日</th>
				<td><input id="pricedate" type="date"  name="pricedate"></td>
			</tr>
			<tr >
				<th>購入価格</th>
				<td><input id="price" type="text" maxlength="11" name="price">RM(リンギット)</td>
			</tr>
			<tr>
				<th>シンガポール法人はお持ちですか？</th>
				<div class="radio_ex">
				<td><label><input id="sgcompany" type="radio"  name="sgcompany" value="YES">YES</label>
				<label><input id="sgcompany" type="radio"  name="sgcompany" value="NO">NO</label></td>
				</div>
			</tr>
			<tr>
				<th>月額3万円はカード払いですか？</th>
				<div class="radio_ex">
				<td><label><input id="cardornot" type="radio"  name="cardornot" value="YES" >YES</label>
				<label><input id="cardornot" type="radio"  name="cardornot" value="NO">NO</label></td>
				</div>				
			</tr>
			<tr><td style="font-size:10px;">※カード決済には1,500円の手数料がかかります。</td></tr>
			<tr>
				<th>ご質問</th>
				<td><textarea id="question" maxlength="200" name="question" ></textarea></td>
			</tr>
		</table>
	</div>

	<div id="soshin">
		<input type="submit" value="送　信">
	</div>
</form>
<!-- 	<div class="comment">
		折り返し担当者から連絡させて頂きます。
	</div>
 -->	<!-- <div class="whoweare">
		<h3  class="pon1">Centrasia Partnersとは</h3>
		<p class="pon">弊社は、主に日本に住む歯科医の先生方向けにシンガポールツアーを年二回行っております。シンガポールの医療事情、</p>
		<p class="pon">お勧めの投資商品や話題のコンドミニアムなどの資産運用に関するセミナー、また歯科クリニック見学も行っております。</p>
		<p class="pon">2014年7月には、シンガポールに日本人経営初の歯科クリニックをオープンしました。日本にある医療法人の国際展開、</p>
		<p class="pon">海外金融知識と投資商品のご案内までシンガポールやアジア進出までトータルサポートをさせて頂いております。</p>
		
	</div> -->
</center>
</div>
<?php }else{

// POSTチェック
	if(empty($_POST["yourname"]) || empty($_POST["age"]) || empty($_POST["email"]) || empty($_POST["shopname"]) 
		||  empty($_POST["shopname"]) || empty($_POST["tel"]) 
	){?>
	<script type="text/javascript">
	 location.href = "http://singaportal.net/tmptourform2/index.php?error=e";
	</script>
<?php
}else{
	//$_POST = htmlspecialchars_decode($_POST);
// ファイルはメールで転送
require_once('./mailAttach.php');
//件名
$subject = '[Centrasia Partners]送信完了のご連絡';
//送信元メールアドレス
$from = 'noreply@centrasia.com';

$BCC ="singapore@centrasia.com.sg";
//メール本文
$message  = 
	$_POST["yourname"]."様

	　この度は、お問い合わせ頂き誠にありがとうございます。
	下記の内容でお間違いないかお確かめ下さい。

	弊社担当者より連絡させて頂きます。

	*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-


	お名前：".$_POST["yourname"]."
	年齢：".$_POST["age"]."
	医院名：".$_POST["shopname"]."
	住所：".$_POST["address"]."
	E-mail：".$_POST["email"]."
	電話番号：".$_POST["tel"]."
	物件の名前：".$_POST["nameofbuilt1"]."     ".$_POST["nameofbuilt2"]."
	部屋番号：".$_POST["roomnumber"]."
	部屋の広さ：".$_POST["roomsizem"]." または ".$_POST["roomsizesqft"]." 
	購入日：".$_POST["pricedate"]."
	購入価格：".$_POST["price"]."
	シンガポール法人：".$_POST["sgcompany"]."
	カード払い希望：".$_POST["cardornot"]."

	ご質問：".$_POST["question"]."

	*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-

	上記内容に間違いがある場合は、下記のお問い合わせへご連絡下さいませ。	

	----------------------------------------------------------------

	Centrasia Partners Pte. Ltd.
	お問い合わせ: singapore@centrasia.com.sg
	弊社HP: http://singaportal.net/

	----------------------------------------------------------------  
";
//echo (FILE_PASS.$_POST["filepath"]."/fileidentify/".$_POST["fileidentify"]);
//BCC singapore@centrasia.com.sg , izumi@centrasia.com.sg
if( ! Mail::create()
 ->name( "[Noreply] Centrasia Partners" )
 ->from( $from )
 ->to( $_POST["email"])
 ->title( $subject )
 ->body( $message )
 ->header( "" )
 ->param( "" )
 ->bcc( array("singapore@centrasia.com.sg","y.centrasia@gmail.com","d.centrasia@gmail.com", "t.centrasia@gmail.com") )
 ->send()
){
			// メール送信失敗
			//echo('<input type="button" onClick="history.back()">戻る</input>');
			exit("メール送信でエラーが発生しました。");
}else{
	echo("<h2>内容の送信完了致しました。</h3>
<h2>弊社担当者より連絡致しますので今しばらくお待ち下さいませ。</h4>");
}

}


}?>
<center>
<a href="http://singaportal.net/" target="_blank"><img src="./logo_footer.png" ></a>
</center>
</div><!-- wrap -->
</body>
</html>