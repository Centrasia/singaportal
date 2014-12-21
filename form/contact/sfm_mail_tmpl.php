<?php
//送信メッセージ
$mailMessage=
'以下の内容でシンガポータルご相談・お問い合わせフォームからの送信を受け付けました。
────────────────────────────────────

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

────────────────────────────────────
□ユーザー情報
'
.USERINFO();
?>
