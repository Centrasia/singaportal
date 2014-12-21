<!DOCTYPE html>
<html lang="ja">
<head>
<title>Centrasiaツアーお申込みフォーム</title>
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
<h1>シンガポールツアーのお問い合わせ有り難うございます</h1>
	<h2>ツアー日程2015年4月1日(水)〜5日(日)</h2>
	<?php if(empty($_POST)){ ?>
	<?php if($_GET["error"] == "e"){
		echo ('<h3 style="color:red">※印は必ず入力して下さい。</h3>');
	} 
	?>
<h2>いずれかにチェックをお願い致します。</h2>
			</center>
		</div>
<center>
<div id="form">
<form action="#" method="POST">
	<div id="select">
		<span style="color:red;">※</span>
	<label><input name="answer" type="radio" value="ツアー申し込み">ツアー申し込みます</label>
	&nbsp;&nbsp;&nbsp;
	<label><input name="answer" type="radio" value="ツアー資料請求">ツアーの資料請求</label>
	</div>
	<div id="tablelayout">
<table>
	<tr>
	<th><span style="color:red;">※</span>お名前(漢字)</th>
	<td><input type="text" maxlength="15" name="yourname"></td>
	</tr>
	<tr>
		<th><span style="color:red;">※</span>クリニック名</th>
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
		<th>携帯MAIL</th>
		<td><input id="mobemail" type="email"  maxlength="30" name="mobemail"></td>
	</tr>
	<tr>
		<th>ご質問</th>
		<td><textarea id="textarea" maxlength="200" name="question" ></textarea></td>
	</tr>
</table>

</div>
	<div id="soshin">
		<input type="submit" value="送　信">
	</div>
</form>
</center>
</div>
<?php }else{

// POSTチェック
	if(empty($_POST["answer"]) || empty($_POST["email"]) || empty($_POST["email"]) || empty($_POST["shopname"])){?>
	<script type="text/javascript">
	 location.href = "http://singaportal.net/tmptourform/index.php?error=e";
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

	　この度は、シンガポールツアーへご連絡頂き誠にありがとうございます。
	下記の内容でお間違いないかお確かめ下さい。

	*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-

	ご希望：".$_POST["answer"]."

	お名前：".$_POST["yourname"]."
	クリニック名：".$_POST["shopname"]."
	住所：".$_POST["address"]."
	E-mail：".$_POST["email"]."
	携帯MAIL：".$_POST["mobemail"]."
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
 ->bcc( array("singapore@centrasia.com.sg","t.centrasia@gmail.com") )
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
<img src="./logo_footer.png" >
</center>
</div><!-- wrap -->
</body>
</html>