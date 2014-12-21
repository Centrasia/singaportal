<?php
//送信メッセージ
$replyMessage=
'

'.FORM_DATA_M('name').'様


この度はARME de la femmeへのご予約もしくはお問い合わせ、誠にありがとうございます。

ご依頼内容につきまして、カウンセラー又はスタッフより確認のご連絡もしくはご返答をご入力いただいたメールアドレス宛に
させていただきますので、今しばらくお待ちいただきますよう、お願い申し上げます。

3営業日以上経過しても返信が届かない場合、メール不達の可能性がありますので、
お手数ではございますが、ご連絡先のメールアドレスをご確認の上、再度お問い合わせフォーム、
またはお電話にてご連絡をお願いいたします。

※お急ぎの場合やご不明点がございましたらご連絡くださいませ。（電話番号：052-238-0884）

※yahoo.co.jpなどのフリーメールをご利用の場合は迷惑メールフォルダなどに受信されている恐れがありますので
ご注意ください。


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


======================================================================

名古屋栄のトータルエステティックサロン
ARME de la femme ～アルム ドゥ ラ フェメ～

TEL：052-238-0884

営業時間：11:00～21:00
（最終受付：20:00）
定休日：年中無休

※地下鉄名城線「矢場町駅」徒歩3分
〒460-0008
名古屋市中央区栄3-27-15 DACビル4F

http://arme.jp


□ユーザー情報
'
.USERINFO();
?>
