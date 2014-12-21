<?php
//送信メッセージ
$mailMessage=
'以下の内容でアルムオフィシャルサイトご予約・お問い合わせフォームからの送信を受け付けました。
────────────────────────────────────

【ご希望の内容に関する項目】

■お問い合わせ項目
'.FORM_DATA_M('koumoku_1').'
'.FORM_DATA_M('koumoku_2').'
'.FORM_DATA_M('koumoku_3').'

■ご希望のメニュー
'.FORM_DATA_M('menu').'

■ご希望のメニュー詳細
'.FORM_DATA_M('menudetail').'


【ご来店に関する項目】

■ご来店希望日
'.FORM_DATA_M('kiboubi').'
第1希望'.FORM_DATA_M('kiboubi_m').'月'.FORM_DATA_M('kiboubi_d').'日
第2希望'.FORM_DATA_M('kiboubi_m_2').'月'.FORM_DATA_M('kiboubi_d_2').'日

■ご来店希望時間帯
'.FORM_DATA_M('kiboujikan').'
第1希望'.FORM_DATA_M('kiboujikan_h1').'時～'.FORM_DATA_M('kiboujikan_h2').'時
第2希望'.FORM_DATA_M('kiboujikan_h1_2').'時～'.FORM_DATA_M('kiboujikan_h2_2').'時


【お客様情報入力項目】

■お名前
'.FORM_DATA_M('name').'

■フリガナ
'.FORM_DATA_M('kana').'

■メールアドレス
'.FORM_DATA_M('email').'

■お電話番号
'.FORM_DATA_M('tel').'

■お問い合わせ内容
'.FORM_DATA_M('youbou').'

────────────────────────────────────
□ユーザー情報
'
.USERINFO();
?>
