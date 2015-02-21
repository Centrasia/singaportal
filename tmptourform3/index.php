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
<h1>シンガポール法人設立キャンペーン！</h1>
<h1>3/14(土)～3/22(日) 東京：大阪で個人面談します。</h1>
<h2>投資に関すること、シンガポール法人設立、銀行口座、海外保険、シンガポールの学校事情などシンガポールに関することなら何でもご相談ください。</h2>
	<?php if(empty($_POST)){ ?>
	<?php if($_GET["error"] == "e"){
		echo ('<h3 style="color:red">※印は必ず入力して下さい。</h3>');
	} 
	?>
<!-- <h2>いずれかにチェックをお願い致します。</h2> -->
			</center>
		</div>
<center>
<div id="form">
<form action="#" method="POST">
<!-- 	<div id="select">
		<span style="color:red;">※</span>
		<label><input name="answer" type="radio" value="ツアー申し込み">ツアー申し込みます</label>
		&nbsp;&nbsp;&nbsp;
		<label><input name="answer" type="radio" value="ツアー資料請求">ツアーの資料請求</label>
	</div>
 -->		<!-- <a class="pdf" href="dental.pdf" target="_blank">シンガポールデンタルツアーとは？</a> -->
<!-- 	<div class="selectcss3">
		<table>
			<tr>
				<td>
				<label><input name="touroption1" type="checkbox" value="1/25(日) ランチ会参加します">1/25(日) ランチ会参加します</label>
				</td>
				<td>
				<label><input name="touroption2" type="checkbox" value="1/17(土)大阪個人面談希望します">1/17(土) 大阪 個人面談希望します</label>
				</td>
			</tr>
			<tr>
				<td>
				<label><input name="touroption3" type="checkbox" value="1/18(日)東京個人面談希望します">1/18(日) 東京 個人面談希望します</label>
				</td>
			</tr>
			<tr>
				<td colspan="2">
				<label><input name="touroption4" type="checkbox" value="1/19(月)～1/24(土)東京近郊個人面談希望します">1/19(月)～1/24(土) 東京近郊個人面談希望します
				</td>
			</tr>
		</table>
	</div>
 -->
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
				<th><span style="color:red;">※</span>自宅住所</th>
				<td><input id="address" type="text" maxlength="50" name="address"></td>
			</tr>
			<tr>
				<th><span style="color:red;">※</span>E-MAIL</th>
				<td><input id="email" type="email" maxlength="30" name="email"></td>
			</tr>
			<tr>
				<th><span style="color:red;">※</span>携帯番号</th>
				<td><input id="mobemail" type="text"  maxlength="30" name="mobemail"></td>
			</tr>
			<tr>
				<th>その他ご意見・ご相談</th>
				<td><textarea id="textarea" style="width:100%;" maxlength="200" name="question" ></textarea></td>
			</tr>
		</table>
	</div>
	<div class="selectcss2">
		<table>
			<tr >
				<th colspan="3" >下記ご希望のお時間をチェックしてください。第二候補として複数のチェックも可能です(下記必須)</th>
			</tr>
			<tr>
				<td>
					3/14(土)
				</td>
				<td>
				<label><input name="select1" type="checkbox" value="3/14(土)午前">午前</label>
				<label><input name="select2" type="checkbox" value="3/14(土)午後">午後</label>
				<label><input name="select3" type="checkbox" value="3/14(土)17:00以降">17:00以降</label>
				</td>
				<td>
					大阪：リッツカールトンホテルラウンジ
				</td>
			</tr>
			<tr>
				<td>
					3/15(日)
				</td>
				<td>
				<label><input name="select4" type="checkbox" value="3/15(日)午前">午前</label>
				<label><input name="select5" type="checkbox" value="3/15(日)午後">午後</label>
				<label><input name="select6" type="checkbox" value="3/15(日)17:00以降">17:00以降</label>
				</td>
				<td>
					東京：ストリングホテル　インターコンチネンタル東京
				</td>
			</tr>
			<tr>
				<td>
					3/16(月)
				</td>
				<td>
				<label><input name="select7" type="checkbox" value="3/16(月)午前">午前</label>
				<label><input name="select8" type="checkbox" value="3/16(月)午後">午後</label>
				<label><input name="select9" type="checkbox" value="3/16(月)17:00以降">17:00以降</label>
				</td>
				<td>
					東京：ストリングホテル　インターコンチネンタル東京
				</td>
			</tr>
			<tr>
				<td>
					3/17(火)
				</td>
				<td>
				<label><input name="select10" type="checkbox" value="3/17(火)午前">午前</label>
				<label><input name="select11" type="checkbox" value="3/17(火)午後">午後</label>
				<label><input name="select12" type="checkbox" value="3/17(火)17:00以降">17:00以降</label>
				</td>
				<td>
					東京：ストリングホテル　インターコンチネンタル東京
				</td>
			</tr>
			<tr>
				<td>
					3/18(水)
				</td>
				<td>
				<label><input name="select13" type="checkbox" value="3/18(水)午前">午前</label>
				<label><input name="select14" type="checkbox" value="3/18(水)午後">午後</label>
				<label><input name="select15" type="checkbox" value="3/18(水)17:00以降">17:00以降</label>
				</td>
				<td>
					東京：ストリングホテル　インターコンチネンタル東京
				</td>
			</tr>
			<tr>
				<td>
					3/19(木)
				</td>
				<td>
				<label><input name="select16" type="checkbox" value="3/19(木)午前">午前</label>
				<label><input name="select17" type="checkbox" value="3/19(木)午後">午後</label>
				<label><input name="select18" type="checkbox" value="3/19(木)17:00以降">17:00以降</label>
				</td>
				<td>
					東京：ストリングホテル　インターコンチネンタル東京
				</td>
			</tr>
			<tr>
				<td>
					3/20(金)
				</td>
				<td>
				<label><input name="select19" type="checkbox" value="3/20(金)午前">午前</label>
				<label><input name="select20" type="checkbox" value="3/20(金)午後">午後</label>
				<label><input name="select21" type="checkbox" value="3/20(金)17:00以降">17:00以降</label>
				</td>
				<td>
					東京：ストリングホテル　インターコンチネンタル東京
				</td>
			</tr>
			<tr>
				<td>
					3/21(土)
				</td>
				<td>
				<label><input name="select22" type="checkbox" value="3/21(土)午前">午前</label>
				<label><input name="select23" type="checkbox" value="3/21(土)午後">午後</label>
				<label><input name="select24" type="checkbox" value="3/21(土)17:00以降">17:00以降</label>
				</td>
				<td>
					東京：ストリングホテル　インターコンチネンタル東京
				</td>
			</tr>
			<tr>
				<td>
					3/22(日)
				</td>
				<td>
				<label><input name="select25" type="checkbox" value="3/22(日)午前">午前</label>
				<label><input name="select26" type="checkbox" value="3/22(日)午後">午後</label>
				<label><input name="select27" type="checkbox" value="3/22(日)17:00以降">17:00以降</label>
				</td>
				<td>
					大阪：リッツカールトンホテルラウンジ
				</td>
			</tr>
			<tr>
				<td></td>

				<td><label><input name="select28" type="checkbox" value="その他会場相談">その他会場相談</label></td>
				<td><label><input name="select29" type="checkbox" value="スカイプで相談">スカイプで相談</label></td>

			</tr>
		</table>
	</div>
	<div id="soshin">
		<input id="submit_button" type="submit" value="送　信">
	</div>
</form>
	<div class="comment">
<p>【地図】</p>
<p>■ストリングホテル　インターコンチネンタル東京</p>
<p><a href="http://intercontinental-strings.jp/access/index.html" style="color:#000;">http://intercontinental-strings.jp/access/index.html</a></p>
<p>■リッツカールトン大阪</p>
<p><a href="https://www.ritz-carlton.co.jp/access/index.html" style="color:#000;">https://www.ritz-carlton.co.jp/access/index.html</a></p>
<p>※いずれもラウンジへお越しください。</p>
<br>
<p>CENTRASIA PARTNERS PTE LTD</p>
<p>10Anson 　Road　#24-031A INTERNATIPNALPLAZA</p>
<p>TEL　+65　6226-0092</p>
<p>MD　I.MORIYAMA</p>  
<p>E-MAIL<a href="mailto:izumi@centrasia.com.sg" style="color:#000;">izumi@centrasia.com.sg</a> </p>
<p>モバイル　+65　9018-3505</p>
<br>
<p>アシスタント　青木大輔</p>
<p>E-MAIL　<a href="mailto:d.centrasia@gmail.com" style="color:#000;">d.centrasia@gmail.com</a></p>
<p>モバイル　+65　9677-0263</p>
<p>スカイプ希望の場合は事前にご連絡ください。</p>
</div>
	<!-- <div class="whoweare">
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
	if(empty($_POST["yourname"]) || empty($_POST["shopname"]) || empty($_POST["address"]) || empty($_POST["email"])
		|| empty($_POST["mobemail"]) 
		){?>
	<script type="text/javascript">
	 location.href = "http://singaportal.net/tmptourform3/index.php?error=e";
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

	 if( isset($_POST["select1"]) || isset($_POST["select2"]) || isset($_POST["select3"]) ){
		$selectArray .= $_POST["select1"]." 、 ".$_POST["select2"]."  、 ".$_POST["select3"]."　東京：ストリングホテル　インターコンチネンタル東京\n" ;
	}
	if (isset($_POST["select4"]) || isset($_POST["select5"]) || isset($_POST["select6"]) ) {
		$selectArray .= $_POST["select4"]." 、 ".$_POST["select5"]."  、 ".$_POST["select6"]."　大阪：リッツカールトンホテルラウンジ\n" ;		
	}
	if (isset($_POST["select7"]) || isset($_POST["select8"]) || isset($_POST["select9"]) ) {
		$selectArray .= $_POST["select7"]." 、 ".$_POST["select8"]."  、 ".$_POST["select9"]."　東京：ストリングホテル　インターコンチネンタル東京\n" ;	
	}
	if (isset($_POST["select10"]) || isset($_POST["select11"]) || isset($_POST["select12"]) ) {
		$selectArray .= $_POST["select13"]." 、 ".$_POST["select14"]."  、 ".$_POST["select15"]."　東京：ストリングホテル　インターコンチネンタル東京\n" ;	
	}
	if (isset($_POST["select16"]) || isset($_POST["select17"]) || isset($_POST["select18"]) ) {
		$selectArray .= $_POST["select16"]." 、 ".$_POST["select17"]."  、 ".$_POST["select18"]."　東京：ストリングホテル　インターコンチネンタル東京\n" ;	
	}
	if (isset($_POST["select19"]) || isset($_POST["select20"]) || isset($_POST["select21"]) ) {
		$selectArray .= $_POST["select19"]." 、 ".$_POST["select20"]."  、 ".$_POST["select21"]."　東京：ストリングホテル　インターコンチネンタル東京\n" ;	
	}
	if (isset($_POST["select22"]) || isset($_POST["select23"]) || isset($_POST["select24"]) ) {
		$selectArray .= $_POST["select22"]." 、 ".$_POST["select23"]."  、 ".$_POST["select24"]."　大阪：リッツカールトンホテルラウンジ\n" ;	
	}
	if (isset($_POST["select25"]) || isset($_POST["select26"]) || isset($_POST["select27"]) ) {
		$selectArray .= $_POST["select25"]." 、 ".$_POST["select26"]."  、 ".$_POST["select27"]."　東京：ストリングホテル　インターコンチネンタル東京\n" ;	
	}


$message  = 
	$_POST["yourname"]."様

	　この度は、シンガポール法人設立キャンペーンへご申請頂き誠にありがとうございます。
	下記の内容でお間違いないかお確かめ下さい。

	*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-

	ご希望日程: 

	" . $selectArray ."
	
	".$_POST["select28"]." 、 ".$_POST["select29"]."  

	お名前：".$_POST["yourname"]."
	クリニック名：".$_POST["shopname"]."
	住所：".$_POST["address"]."
	E-mail：".$_POST["email"]."
	携帯番号：".$_POST["mobemail"]."
	その他ご意見・ご相談：".$_POST["question"]."

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
 ->bcc( array("singapore@centrasia.com.sg","t.centrasia@gmail.com","d.centrasia@gmail.com") )
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