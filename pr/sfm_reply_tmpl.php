<?php
//送信メッセージ
$replyMessage=
'

'.FORM_DATA_M('sei').''.FORM_DATA_M('mei').'様


この度は永住権取得要件診断のご依頼いただきありがとうございます。
追ってスタッフよりメールもしくはご記入の電話番号にご連絡をいたしますのでお待ち下さいませ。（通常当日～2営業日以内）

引き続き、シンガポータルをよろしくお願いいたします。


【お客様入力内容】

■氏名
'.FORM_DATA_M('sei').''.FORM_DATA_M('mei').'
'.FORM_DATA_M('kanasei').''.FORM_DATA_M('kanamei').'

■メールアドレス
'.FORM_DATA_M('email').'

■お電話番号
'.FORM_DATA_M('tel').'

■年齢
'.FORM_DATA_M('age').'歳

■性別
'.FORM_DATA_M('gender').'

■配偶者の有無
'.FORM_DATA_M('spouse').'

■ご職業
'.FORM_DATA_M('job').'

■業種
'.FORM_DATA_M('business').'

■年収
'.FORM_DATA_M('income').'万円

■資産状況
固定資産'.FORM_DATA_M('fixedasset').'万円
金融資産'.FORM_DATA_M('financialasset').'万円

■永住権取得の目的
'.FORM_DATA_M('purpose00').'
'.FORM_DATA_M('purpose01').'
'.FORM_DATA_M('purpose02').'
'.FORM_DATA_M('purpose03').'
'.FORM_DATA_M('purpose04').'

■ご相談内容・ご要望
'.FORM_DATA_M('youbou').'

■新着情報
'.FORM_DATA_M('opt').'



======================================================================

　　　　　　シンガポータル ｜ SINGAPORTAL

シンガポールでの法人設立・ビザ取得・永住権取得サポートなら
　　シンガポールのエキスパートへおまかせください
　
　　　　　　【URL】http://singaportal.net
　　　　　　【Mail】info@singaportal.net

　■ノウハウ満載の無料デジタル書籍！　http://singaportal.net/offer/
　■最新のセミナー情報はコチラから！　http://singaportal.net/seminar/
　■シンガポール視察ツアーの情報は！　http://singaportal.net/tour/

======================================================================


□ユーザー情報
'
.USERINFO();
?>
