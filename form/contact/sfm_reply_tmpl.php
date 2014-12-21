<?php
//送信メッセージ
$replyMessage=
'

'.FORM_DATA_M('sei').''.FORM_DATA_M('mei').'様


この度はご相談・お問い合わせいただき誠にありがとうございます。
追ってスタッフよりメールもしくはご記入の電話番号にご連絡をいたしますのでお待ち下さいませ。（通常当日～2営業日以内）

引き続き、シンガポータルをよろしくお願いいたします。


【お客様入力内容】

■ご相談・お問い合わせ内容
'.FORM_DATA_M('purpose00').'
'.FORM_DATA_M('purpose01').'
'.FORM_DATA_M('purpose02').'
'.FORM_DATA_M('purpose03').'
'.FORM_DATA_M('purpose04').'
'.FORM_DATA_M('purpose05').'
'.FORM_DATA_M('purpose06').'
'.FORM_DATA_M('purpose07').'

■氏名
'.FORM_DATA_M('sei').''.FORM_DATA_M('mei').'
'.FORM_DATA_M('kanasei').''.FORM_DATA_M('kanamei').'

■会社名
'.FORM_DATA_M('company').'

■メールアドレス
'.FORM_DATA_M('email').'

■お電話番号
'.FORM_DATA_M('tel').'

■ご職業
'.FORM_DATA_M('job').'

■業種
'.FORM_DATA_M('business').'

■お問い合わせ内容詳細
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
