<?php
//送信メッセージ
$mailMessage=
'以下の内容でシンガポータル現地GM面談の依頼フォームからの送信を受け付けました。
────────────────────────────────────

【お客様入力内容】

■氏名
'.FORM_DATA_M('sei').''.FORM_DATA_M('mei').'
'.FORM_DATA_M('kanasei').''.FORM_DATA_M('kanamei').'

■会社名
'.FORM_DATA_M('company').'

■メールアドレス
'.FORM_DATA_M('email').'

■スカイプ名
'.FORM_DATA_M('skype').'


■面談をご希望の日付
'.FORM_DATA_M('kiboubi').'
第1希望'.FORM_DATA_M('kiboubi_m').'月'.FORM_DATA_M('kiboubi_d').'日
第2希望'.FORM_DATA_M('kiboubi_m_2').'月'.FORM_DATA_M('kiboubi_d_2').'日

■面談をご希望の時間帯
'.FORM_DATA_M('kiboujikan').'
第1希望'.FORM_DATA_M('kiboujikan_h1').'時～'.FORM_DATA_M('kiboujikan_h2').'時
第2希望'.FORM_DATA_M('kiboujikan_h1_2').'時～'.FORM_DATA_M('kiboujikan_h2_2').'時


■お電話番号
'.FORM_DATA_M('tel').'

■ご相談内容・ご要望
'.FORM_DATA_M('youbou').'

■新着情報
'.FORM_DATA_M('opt').'

────────────────────────────────────
□ユーザー情報
'
.USERINFO();
?>
