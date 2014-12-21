<?php
//送信メッセージ
$replyMessage=
'

'.FORM_DATA_M('sei').''.FORM_DATA_M('mei').'様


この度はお申込みいただき誠にありがとうございます。受付完了メールをご記入いただいたメールアドレス宛に送信させていただきました。
※ツアーにお申し込みのお客様に関しましては追ってスタッフよりメールもしくはご記入の電話番号にご連絡をいたしますのでお待ち下さいませ。（通常当日～2営業日以内）
フリーメールなどをご利用の場合は、ご返信させていただいたメールが迷惑メールフォルダなどに入ることがございますのでお気をつけくださいませ。

引き続き、シンガポータルをよろしくお願いいたします。


【お客様入力内容】

■参加を希望するセミナー・ツアー
'.FORM_DATA_M('reservation00').'
'.FORM_DATA_M('reservation01').'
'.FORM_DATA_M('reservation02').'

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

■ご意見・ご要望
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
