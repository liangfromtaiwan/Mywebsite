<?php


/* -- 以下、基本の設定 ------------------------------------------------------------------------------------------------------------------------------------------------- */


//【必須】 自分のメールアドレスの設定 -- 複数のメールアドレスに送信したい場合は、以下の行をコピーして増やしていけばOKです。行頭の//を消せば有効となります。いくつでも追加可能。 --
$rm_send_address[] = 'no-reply@toda-boatracer.com';
$rm_send_address[] = 'todasibuboatracer@yahoo.co.jp';




//【必須】 サンクスページのURL -- index.htmlからの相対パス、またはhttp://からの絶対パス --
$rm_thanks_page_url = 'thanks.html';








/* -- 以下、自分に届くメールの設定 ------------------------------------------------------------------------------------------------------------------------------------- */


//【任意】 自分に届くメールの題名
$rm_send_subject = 'ボートレーサー募集LPから資料請求がありました';




//【任意】 自分に届くメールの本文 -- EOMからEOM;までの間の文章を自由に変更してください。 --
$rm_send_body = <<<EOM

ボートレーサー募集LPから資料請求がありました。
送信内容は以下の通りです。

EOM;








/* -- 以下、相手への自動返信メールの設定 ------------------------------------------------------------------------------------------------------------------------------- */


//【任意】 相手に自動返信メールを送るかどうか -- 送らない場合は0、送る場合は1にしてください。 --
$rm_reply_mail = 1;




//【だいたい必須】 メールの差出人名に表示される自分の名前 -- 相手への自動返信メールに使用されます --
$rm_send_name = 'ボートレース戸田';




//【任意】 相手に届く自動返信メールの題名
$rm_thanks_subject = 'ボートレース戸田｜資料請求を承りました';




//【任意】 相手に届く自動返信メールの本文 -- EOMからEOM;までの間の文章を自由に変更してください。 --
$rm_thanks_body  = <<<EOM

本メールは自動返信メールです。
返信をいただいても回答はいたしかねますので予めご了承くださいませ。
ーーーーーーーー
この度は新ボートレーサー募集の資料をご請求いただき誠にありがとうございました。
ご入力いただいたご住所宛てに資料を送付いたしますので、到着までしばらくお待ちください。
以下の内容でお問い合わせをお受けいたしました。

EOM;




//【だいたい必須】 相手に届く自動返信メールの最後に付加される署名 -- EOMからEOM;までの間の文章を自由に変更してください。 --
$rm_thanks_body_signature = <<<EOM

この度は資料を請求頂き、重ねてお礼申し上げます。
ーーーーーーーー
一般財団法人日本モーターボート競走会 戸田支部(選手募集係)
TEL:048-441-6026
(ボートレース戸田本場開催中10：00～16：00電話受付)


EOM;







