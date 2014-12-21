<?php
//送信メッセージ
$mailMessage=
'以下の内容でシンガポータルセミナー・説明会・ツアーのご予約ご参加フォームからの送信を受け付けました。
────────────────────────────────────

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

────────────────────────────────────
□ユーザー情報
'
.USERINFO();
?>
