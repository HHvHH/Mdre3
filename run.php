<?php
$id = "$admin";
$tok = "5231247887:AAFZiohz3Ot0bxvi2J3lyVtG0BBMTt6mBds";
$te = "$tok";
$token = "$te";
ob_start();
define("API_KEY","$te");
echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
function bot($method,$datas=[]){
$url = "https://api.telegram.org/bot".API_KEY."/".$method;
$REK = curl_init();
curl_setopt($REK,CURLOPT_URL,$url);
curl_setopt($REK,CURLOPT_RETURNTRANSFER,true);
curl_setopt($REK,CURLOPT_POSTFIELDS,$datas);
$DEV = curl_exec($REK);
if(curl_error($REK)){
var_dump(curl_error($REK));
}else{
return json_decode($DEV);
}}
$update = json_decode(file_get_contents('php://input'));
if($update->message){
	$message = $update->message;
$message_id = $update->message->message_id;
$username = $message->from->username;
$chat_id = $message->chat->id;
$title = $message->chat->title;
$text = $message->text;
$user = $message->from->username;
$name = $message->from->first_name;
$from_id = $message->from->id;
}
if($update->callback_query){
$data = $update->callback_query->data;
$chat_id = $update->callback_query->message->chat->id;
$title = $update->callback_query->message->chat->title;
$message_id = $update->callback_query->message->message_id;
$name = $update->callback_query->message->chat->first_name;
$user = $update->callback_query->message->chat->username;
$from_id = $update->callback_query->from->id;
}
if($update->edited_message){
	$message = $update->edited_message;
	$message_id = $message->message_id;
$username = $message->from->username;
$chat_id = $message->chat->id;
$chat_id = $message->chat->id;
$text = $message->text;
$user = $message->from->username;
$name = $message->from->first_name;
$from_id = $message->from->id;
	}
	if($update->channel_post){
	$message = $update->channel_post;
	$message_id = $message->message_id;
$chat_id = $message->chat->id;
$text = $message->text;
$user = $message->chat->username;
$title = $message->chat->title;
$name = $message->author_signature;
$from_id = $message->chat->id;
	}
	if($update->edited_channel_post){
	$message = $update->edited_channel_post;
	$message_id = $message->message_id;
$chat_id = $message->chat->id;
$text = $message->text;
$user = $message->chat->username;
$name = $message->author_signature;
$from_id = $message->chat->id;
	}
	if($update->inline_query){
		$inline = $update->inline_query;
		$message = $inline;
		$user = $message->from->username;
$name = $message->from->first_name;
$from_id = $message->from->id;
$query = $message->query;
$text = $query;
		}
	if($update->chosen_inline_result){
		$message = $update->chosen_inline_result;
		$user = $message->from->username;
$name = $message->from->first_name;
$from_id = $message->from->id;
$inline_message_id = $message->inline_message_id;
$message_id = $inline_message_id;
$text = $message->query;
$query = $text;
		}
		$tc = $update->message->chat->type;
		$re = $update->message->reply_to_message;
		$re_id = $update->message->reply_to_message->from->id;
$re_user = $update->message->reply_to_message->from->username;
$re_name = $update->message->reply_to_message->from->first_name;
$re_messagid = $update->message->reply_to_message->message_id;
$re_chatid = $update->message->reply_to_message->chat->id;
$photo = $message->photo;
$video = $message->video;
$sticker = $message->sticker;
$file = $message->document;
$audio = $message->audio;
$voice = $message->voice;
$caption = $message->caption;
$photo_id = $message->photo[0]->file_id;
$video_id= $message->video->file_id;
$sticker_id = $message->sticker->file_id;
$file_id = $message->document->file_id;
$music_id = $message->audio->file_id;
$voice_id = $message->voice->file_id;
$forward = $message->forward_from_chat;
$forward_id = $message->forward_from_chat->id;
$title = $message->chat->title;
if($re){
	$forward_type = $re->forward_from->type;
$forward_name = $re->forward_from->first_name;
$forward_user = $re->forward_from->username;
	}else{
$forward_type = $message->forward_from->type;
$forward_name = $message->forward_from->first_name;
$forward_user = $message->forward_from->username;
$forward_id = $message->forward_from->id;
if($forward_name == null){
	$forward = $message->forward_from_chat;
$forward_id = $message->forward_from_chat->id;
$forward_title = $message->forward_from_chat->title;
	}
}
$rek = json_decode(file_get_contents("rek.json"),true);
$admin = array("1397042354","2022922805","","");
$m = count($rek['kt']) -1;
$ameer = rand("0",$m);
$o = count($rek['kt']);
$Jack = $message->chat->type;
$Jack= $update->message->chat->type;
$tc = $update->message->chat->type;
//من هنا تبدي اوامر الادمن
if($text == "عدد الاسئله" and in_array($from_id,$admin)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⌯ عدد الاسئله هي { *$o* } سوال
",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
}
$add_kt = str_replace("اضف سوال ","",$text);
if($text == "اضف سوال $add_kt" and in_array($from_id,$admin)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⌯ تم اضافة السوال بنجاح
⌯ السوال { *$add_kt* }
",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
$rek['kt'][] = $add_kt;
file_put_contents("rek.json",json_encode($rek));
}
$del_kt = str_replace("حذف سوال ","",$text);
if($text == "حذف سوال $del_kt" and in_array($from_id,$admin)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⌯ تم حذف السوال بنجاح
⌯ السوال { *$del_kt* }
",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
$key = array_search($del_kt,$rek["kt"]);
unset($rek["kt"][$key]);
$rek["kt"] = array_values($rek["kt"]); 
file_put_contents("rek.json",json_encode($rek));
}
//من هنا تبدي اوامر الادمن والعضو
$ok = $rek['kt'][$ameer];
if($text == "كت" or $text == "تويت" or $text == "كت تويت" or $text == "/kt" or $text == "ك" or $text == "،"){
if($o == "0"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⌯ *عذرا عزيزي لا يوجد اسئلة*
",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
exit();
}
}
if($text == "كت" or $text == "تويت" or $text == "كت تويت" or $text == "/kt" or $text == "ك" or $text == "،" or $text == "كتك"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
*$ok*
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
 'message_id'=>$message->message_id,
]);
}
if($text == "الاوامر"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*- Welcome to the list of orders . *
*- /kt *
*- كت *
*- تويت *
*- كت تويت *
*- ، *
*- ك *
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
 'message_id'=>$message->message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'- channel .','url'=>'t.me/XxXrXc']],
]
])
]);
}
$about = file_get_contents("data/about.txt");

#--------(rick)--------#
$update = json_decode(file_get_contents('php://input'));
if($update->message){
	$message = $update->message;
$message_id = $update->message->message_id;
$username = $message->from->username;
$chat_id = $message->chat->id;
$title = $message->chat->title;
$text = $message->text;
$user = $message->from->username;
$name = $message->from->first_name;
$name3 = $message->from->last_name;
$from_id = $message->from->id;
}
if($update->callback_query){
$data = $update->callback_query->data;
$chat_id = $update->callback_query->message->chat->id;
$title = $update->callback_query->message->chat->title;
$message_id = $update->callback_query->message->message_id;
$name = $update->callback_query->message->chat->first_name;
$user = $update->callback_query->message->chat->username;
$from_id = $update->callback_query->from->id;
}
if($update->edited_message){
	$message = $update->edited_message;
	$message_id = $message->message_id;
$username = $message->from->username;
$chat_id = $message->chat->id;
$chat_id = $message->chat->id;
$text = $message->text;
$user = $message->from->username;
$name = $message->from->first_name;
$from_id = $message->from->id;
	}
	if($update->channel_post){
	$message = $update->channel_post;
	$message_id = $message->message_id;
$chat_id = $message->chat->id;
$text = $message->text;
$user = $message->chat->username;
$title = $message->chat->title;
$name = $message->author_signature;
$from_id = $message->chat->id;
	}
	if($update->edited_channel_post){
	$message = $update->edited_channel_post;
	$message_id = $message->message_id;
$chat_id = $message->chat->id;
$text = $message->text;
$user = $message->chat->username;
$name = $message->author_signature;
$from_id = $message->chat->id;
	}
	if($update->inline_query){
		$inline = $update->inline_query;
		$message = $inline;
		$user = $message->from->username;
$name = $message->from->first_name;
$from_id = $message->from->id;
$query = $message->query;
$text = $query;
		}
	if($update->chosen_inline_result){
		$message = $update->chosen_inline_result;
		$user = $message->from->username;
$name = $message->from->first_name;
$from_id = $message->from->id;
$inline_message_id = $message->inline_message_id;
$message_id = $inline_message_id;
$text = $message->query;
$query = $text;
		}
		$tc = $update->message->chat->type;
		$re = $update->message->reply_to_message;
		$re_id = $update->message->reply_to_message->from->id;
$re_user = $update->message->reply_to_message->from->username;
$re_name = $update->message->reply_to_message->from->first_name;
$re_messagid = $update->message->reply_to_message->message_id;
$re_chatid = $update->message->reply_to_message->chat->id;
$photo = $message->photo;
$video = $message->video;
$sticker = $message->sticker;
$file = $message->document;
$audio = $message->audio;
$voice = $message->voice;
$caption = $message->caption;
$photo_id = $message->photo[back]->file_id;
$video_id= $message->video->file_id;
$sticker_id = $message->sticker->file_id;
$file_id = $message->document->file_id;
$music_id = $message->audio->file_id;
$forward = $message->forward_from_chat;
$forward_id = $message->forward_from_chat->id;
$title = $message->chat->title;
if($re){
	$forward_type = $re->forward_from->type;
$forward_name = $re->forward_from->first_name;
$forward_user = $re->forward_from->username;
	}else{
$forward_type = $message->forward_from->type;
$forward_name = $message->forward_from->first_name;
$forward_user = $message->forward_from->username;
$forward_id = $message->forward_from->id;
if($forward_name == null){
	$forward = $message->forward_from_chat;
$forward_id = $message->forward_from_chat->id;
$forward_title = $message->forward_from_chat->title;
	}
}
#--------(rick)--------#
mkdir("data");
$rick = json_decode(file_get_contents("data/bot.json"),true);
#--------(rick)--------#
$sudo = "2022922805";
$malke = $rick['malk'];
if(!$malke){$malkei = "$sudo";}
elseif($malke){$malkei = "$malke";}
$admin = $malke;
$Dev = array("$admin","$sudo","1397042354");
$Dev = array("$malkei","$sudo","1397042354");
$userDev = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$Dev[1]"))->result->username;
$nameDev = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$Dev[1]"))->result->first_name;
#--------(rick)--------#
$members = $rick['members'];
$md3 = count($rick['members']);
if($tc == 'private' and !in_array($from_id,$members)){
$rick['members'][] = $from_id;
file_put_contents("data/bot.json",json_encode($rick));
}
#--------(rick)--------#
$setch = $rick["chall"];
if($text == "/start" and $rick['joenall'] == "off"){
if(!in_array($from_id,$Dev)){
$join = file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=@$setch&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"💸︙عذرا عزيزي.
💸︙لا يمكنك استخدام البوت.
💸︙الا بعد الاشتراك بقناة.
💸︙القناة ← [@$setch]",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,
]);
exit();
}
}
}
#--------(rick)--------#
if ($message && in_array($from_id,$rick['ban'])){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"💸︙عزيزي - [$name](tg://user?id=$from_id)
💸︙تم انت محظور من قبل المطور",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
}
#--------(rick)--------#
$d8 = $rick['bots'];
if($message and $d8 == "❎" and $from_id != $admin2){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"💸︙اهلا بك عزيزي العضو
💸︙عذرا البوت متوقف لغرض الصيانة
",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
exit();
}
#--------(rick)--------#
if( $text=="/rick" &&  $tc == "private" or $text=="💸 رجوع" &&  $tc == "private" ){
if (in_array($from_id,$Dev)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"💸︙المطور ← [$name](tg://user?id=$from_id)
💸︙اليك قائمة المطورين 
💸︙يمكنك تحكم ب كل الاوامر الموجوده",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"💸 المشتركين"],['text'=>"💸 تصفير المشتركين"]],
[['text'=>"💸 تفعيل البوت"]],
[['text'=>"💸 اذاعة"],['text'=>"💸 توجية"]],
[['text'=>"💸 تعطيل البوت"]],
[['text'=>"💸 تعين الاستارت"],['text'=>"💸 حذف الاستارت"]],
[['text'=>"💸 قسم الاشتراك"]],
[['text'=>"💸 حذف مطور ثانوي"],['text'=>"💸 اضافة مطور ثانوي"]],
[['text'=>"💸 المحظورين"],['text'=>"💸 مسح المحظورين"]],
[['text'=>"💸 تفعيل التنبية"],['text'=>"💸 تعطيل التنبية"]],
[['text'=>"💸 تفعيل التوجيه"],['text'=>"💸 تعطيل التوجيه"]],
[['text'=>"💸 رجوع"]],
],
'resize_keyboard'=>true
])
]);
}
}
#--------(rick)--------#
if( $text=="💸 قسم الاشتراك" &&  $tc == "private"){
if (in_array($from_id,$Dev)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"💸︙المطور ← [$name](tg://user?id=$from_id)
💸︙اليك قائمة الاشتراك الاجباري
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"💸 حذف الاشتراك"],['text'=>"💸 وضع الاشتراك"]],
[['text'=>"💸 قناة الاشتراك"]],
[['text'=>"💸 تفعيل الاشتراك"],['text'=>"💸 تعطيل الاشتراك"]],
[['text'=>"💸 رجوع"]],
],
'resize_keyboard'=>true
])
]);
}
}
#--------(rick)--------#
if (in_array($from_id,$Dev)) {
if($text == "توجيه" or $text == "💸 توجيه"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"💸︙ارسل رسالتك ليتم توجيه 
💸︙المشتركين - $md3",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id, 
]);
$rick['data'] = "okoo";
file_put_contents("data/bot.json",json_encode($rick));
}
$mmdr = $rick['members'];
if($message and $text != "توجيه عام" and $text != "اذاعة كروبات" and $text != "توجيه" and $text != "اذاعة" and $text != "توجيه كروبات" and $text != "💸 اذاعة" and $text != "💸 توجيه" and $text != "💸 اذاعة كروبات" and $text != "💸 توجيه كروبات" and $text != "💸 اذاعة عام" and $text != "💸 توجيه عام" and $text != "💸 الغاء الامر" and $rick['data'] == "okoo" and in_array($from_id,$Dev)){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>'💸︙تم الاذاعة توجيه بنجاح',
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id, 
]);
for($i=0;$i<count($mmdr); $i++){
bot('forwardMessage', [
'chat_id'=>$mmdr[$i],
'from_chat_id'=>$from_id,
'message_id'=>$message->message_id
]);
$rick['data'] = "stop";
file_put_contents("data/bot.json",json_encode($rick));
}
}
}
#----------(rick)----------#
if (in_array($from_id,$Dev)) {
if($text == "اذاعة" or $text == "💸 اذاعة"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"💸︙ارسل رسالتك ليتم اذاعة 
💸︙المشتركين - $md3",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id, 
]);
$rick['data'] = "okkoo";
file_put_contents("data/bot.json",json_encode($rick));
}
$mmdrr = $rick['members'];
if($message and $text != "توجيه عام" and $text != "اذاعة كروبات" and $text != "توجيه" and $text != "اذاعة" and $text != "توجيه كروبات" and $text != "💸 اذاعة" and $text != "💸 توجيه" and $text != "💸 اذاعة كروبات" and $text != "💸 توجيه كروبات" and $text != "💸 اذاعة عام" and $text != "💸 توجيه عام" and $text != "💸 الغاء الامر" and $rick['data'] == "okkoo" and in_array($from_id,$Dev)){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>'💸︙تم الاذاعة بنجاح',
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id, 
]);
for($i=0;$i<count($mmdrr); $i++){
bot('sendMessage', [
'chat_id'=>$mmdrr[$i],
'text'=>"$text",
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
$rick['data'] = "stop";
file_put_contents("data/bot.json",json_encode($rick));
}
}
}
#----------(rick)----------#
if($text == "💸 تصفير المشتركين"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"💸︙تم تصفير جميع المشتركين",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id, 
]);
$rick['members'] = 0;
file_put_contents("data/bot.json",json_encode($rick));
}
#----------(rick)----------#
if($text == "وضع الاشتراك" or $text == "💸 وضع الاشتراك"){
if (in_array($from_id,$Dev)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*💸︙ارسل معرف القناة دون @ .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$rick["addch"] = "$from_id";
file_put_contents("data/bot.json",json_encode($rick));
}
}
elseif($text and $rick["addch"]=="$from_id"){
if(preg_match('/([a-z])/i',$text)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
💸︙تم حفظ قناة الاشتراك الاجباري .
*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$rick["addch"] = "done";
$rick["chall"] = "$text";
file_put_contents("data/bot.json",json_encode($rick));
}
}
if($text == "حذف الاشتراك" or $text == "💸 حذف الاشتراك"){
if (in_array($from_id,$Dev)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*💸︙تم حذف قناة الاشتراك الاجباري .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$rick["chall"] = "Done";
$rick['joenall'] = "on";
file_put_contents("data/bot.json",json_encode($rick));
}
}
$chall = $rick["chall"];
if($text == "قناة الاشتراك" or $text == "💸 قناة الاشتراك" and $rick["chall"] != "Done"){
if (in_array($from_id,$Dev)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*💸︙اليك قناة الاشتراك الاجباري : @$chall .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
}
}
if($text == "قناة الاشتراك" or $text == "💸 قناة الاشتراك" and $rick["chall"] == "Done"){
if (in_array($from_id,$Dev)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*💸︙اليك قناة الاشتراك الاجباري : لايوجد قناة .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
}
}
#----------(rick)----------#
if($text == "تفعيل الاشتراك" or $text == "💸 تفعيل الاشتراك"){
if (in_array($from_id,$Dev)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"💸︙*بواسطة* ← [$name](tg://user?id=$from_id)\n💸︙*تـم تفعيل الاشتراك الاجباري*",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$rick['joenall'] = "off";
file_put_contents("data/bot.json",json_encode($rick));
}
}
if($text == "تعطيل الاشتراك" or $text == "💸 تعطيل الاشتراك"){
if (in_array($from_id,$Dev)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"💸︙*بواسطة* ← [$name](tg://user?id=$from_id)\n💸︙*تـم تعطيل الاشتراك الاجباري*",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$rick['joenall'] = "on";
file_put_contents("data/bot.json",json_encode($rick));
}
}
#----------(rick)----------#
if($text == "💸 المشتركين"){
if (in_array($from_id,$Dev)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"💸︙اليك الاحصائيات خاصه في بوتك
💸︙المشتركين - $md3",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id, 
]);
}
}
#----------(rick)----------#
$start = $rick['start'];
$startt = $rick['startt'];
if($text=="تعين الاستارت" or $text=="💸 تعين الاستارت"){
if(in_array($from_id,$Dev)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
💸︙عزيزي ← [$name](tg://user?id=$from_id)
💸︙الان قم بأرسال كليشة الاستارت
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
]);
$rick['start'] = "ok_start";
$rick['startt'] = "$from_id";
file_put_contents("data/bot.json",json_encode($rick));
}
}
if($text and $start == "ok_start" and $startt == $from_id){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
💸︙بواسطة ← [$name](tg://user?id=$from_id)
💸︙تم تعين كليشة الاستارت بنجاح
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
]);
$rick['okstart'] = $text;
$rick['start'] = "on";
file_put_contents("data/bot.json",json_encode($rick));
}
if($text=="حذف الاستارت" or $text=="💸 حذف الاستارت"){
if(in_array($from_id,$Dev)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
💸︙عزيزي ← [$name](tg://user?id=$from_id)
💸︙تم حذف كليشة المطور
💸︙تم اعادة كليشة السورس
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
]);
$rick['okstart'] = null;
file_put_contents("data/bot.json",json_encode($rick));
}
}
#----------(rick)----------#
$okstart = $rick['okstart'];
if($text=="/start" and $rick['okstart'] != null){
if($tc == "private"){
if( !in_array($from_id,$Dev)){
$okstart = str_replace('#name',$name,$okstart);
$okstart = str_replace('#bot',$namebot,$okstart);
$okstart = str_replace('#id',$from_id,$okstart);
$okstart = str_replace('#user',$user,$okstart);
$okstart = str_replace('#dev',[$DevUser],$okstart);
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"$okstart",
'reply_to_message_id'=>$message_id,
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"مالك البوت", "url"=>"tg://user?id=$Dev[1]"]],
]])
]);
exit();
}
}
}
if($text == "/start" and $rick['okstart'] == null){
if($tc == "private"){
if( !in_array($from_id,$Dev)){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
*- اهلا بك* ← [$name](tg://user?id=$from_id)
*- في بوت كت . *
*- قم ب اضافه البوت الى قروبك و رفعه مشرف بدون صلاحيه *
*- و ارسل الاوامر *",
'reply_to_message_id'=>$message_id,
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"مالك البوت", "url"=>"tg://user?id=$Dev[1]"]],
]])
]);
}
}
}
#----------(rick)----------#
$malkbot = $rick['malkbot'];
$malkkbot = $rick['malkkbot'];
if($re and $text=="اضافه مطور ثانوي"){
if(in_array($from_id,$Dev)){
bot('sendmessage',[
            'chat_id'=>$re_id,
            'text'=>"
💸︙تم اضافتك مطور ثانوي بنجاح 
💸︙بواسطة ← [$name](tg://user?id=$from_id)
💸︙اضغط ← /rick 
💸︙للتحكم في البوت كماتحب
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
💸︙بواسطة ← [$name](tg://user?id=$from_id)
💸︙تم تعين المطور ثانوي بنجاح
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
]);
$rick['malk'] = "$re_id";
file_put_contents("data/bot.json",json_encode($rick));
exit();
}
}
if($text=="اضافه مطور ثانوي" or $text=="💸 اضافة مطور ثانوي"){
if(in_array($from_id,$Dev)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
💸︙عزيزي ← [$name](tg://user?id=$from_id)
💸︙الان قم بأرسال ايدي المطور
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
]);
$rick['malkbot'] = "ok_malk";
$rick['malkkbot'] = "$from_id";
file_put_contents("data/bot.json",json_encode($rick));
}
}
if($text and preg_match('/([0-9])/i',$text) and $malkbot == "ok_malk" and $malkkbot == $from_id){
bot('sendmessage',[
            'chat_id'=>$text,
            'text'=>"
💸︙تم اضافتك مطور ثانوي بنجاح 
💸︙بواسطة ← [$name](tg://user?id=$from_id)
💸︙اضغط ← /rick  
💸︙للتحكم في البوت كماتحب
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
💸︙بواسطة ← [$name](tg://user?id=$from_id)
💸︙تم تعين المطور ثانوي بنجاح
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
]);
$rick['malk'] = $text;
$rick['malkbot'] = "on";
file_put_contents("data/bot.json",json_encode($rick));
}
if($text=="حذف مطور الثاني" or $text=="💸 حذف مطور ثانوي"){
if(in_array($from_id,$Dev)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
💸︙عزيزي ← [$name](tg://user?id=$from_id)
💸︙تم حذف المطور ثانوي 
💸︙تم اعادة المطور الاساسي
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
]);
$rick['malk'] = null;
file_put_contents("data/bot.json",json_encode($rick));
}
}
#----------(rick)----------#
$ban_id = $message->reply_to_message->forward_from->id;
if($ban_id && $text == "حظر"){
$apiban = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$ban_id"));
$banuser =$apiban->result->username;
$banname =$apiban->result->first_name;
$banid =$apiban->result->id;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"💸︙العضو - [$banname](tg://user?id=$banid)
💸︙تم حـظـرهه بـنـجاح",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
$rick['ban'][] = "$ban_id";
file_put_contents("data/bot.json",json_encode($rick));
}
if ($ban_id && $text == "الغاء حظر"){
$apiban = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$ban_id"));
$banuser =$apiban->result->username;
$banname =$apiban->result->first_name;
$banid =$apiban->result->id;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
💸︙العضو - [$banname](tg://user?id=$banid)
💸︙تم الـغـاء حـظـرهه بـنـجاح
",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
$key = array_search($ban_id,$rick["ban"]);
unset($rick["ban"][$key]);
$rick["ban"] = array_values($rick["ban"]); 
$rick = json_encode($rick,true);
file_put_contents("data/bot.json",$rick);
}
#----------(rick)----------#
if($text=="💸 المحظورين" and $rick['ban'] != null){
$banlast = $rick['ban'];
for($z = 0;$z <= count($banlast)-1;$z++){
$apiban = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$banlast[$z]"));
$banuser =$apiban->result->username;
$banname =$apiban->result->first_name;
$banid =$apiban->result->id;
$result = $result."💸︙ $z ← [$banname](https://t.me/$banuser) - $banid"."\n";
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"💸︙اليك قائمة المحظورين : 
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
$result",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
 ]);
exit();
}
if($text=="💸 المحظورين" and $rick['ban'] == null){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
💸︙عزيزي ← [$name](tg://user?id=$from_id)
💸︙لايوجد محظور حاليأ
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
]);
}
if($text == "💸 مسح المحظورين" and $from_id == $admin2){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"💸︙بواسطة ⋙ [$name](tg://user?id=$from_id)
💸︙ تم مسح قائمة المحظورين
",'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'=>true,
]);
$rick['ban'] = null;
file_put_contents("data/bot.json",json_encode($rick));
}
#----------(rick)----------#
$d6 = $rick['sarat'];
if($text == "💸 تفعيل التنبية" and in_array($from_id,$Dev)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"💸︙*تم تفعيل التنبية بنجاح*",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"💸 تعطيل التنبية"]],
[['text'=>"💸 رجوع"]],
],
'resize_keyboard'=>true
])
]);
$rick['sarat'] = "✅";
file_put_contents("data/bot.json",json_encode($rick));
}
if($text == "💸 تعطيل التنبية" and in_array($from_id,$Dev)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"💸︙*تم تعطيل التنبية بنجاح*",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"💸 تفعيل التنبية"]],
[['text'=>"💸 رجوع"]],
],
'resize_keyboard'=>true
])
]);
$rick['sarat'] = "❎";
file_put_contents("data/bot.json",json_encode($rick));
}
#-----------(rick)-----------#
$d7 = $rick['tojahh'];
if($text == "💸 تفعيل التوجيه" and in_array($from_id,$Dev)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"💸︙*تم تفعيل التوجيه بنجاح*",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"💸 تعطيل التوجيه"]],
[['text'=>"💸 رجوع"]],
],
'resize_keyboard'=>true
])
]);
$rick['tojahh'] = "✅";
file_put_contents("data/bot.json",json_encode($rick));
}
if($text == "💸 تعطيل التوجيه" and in_array($from_id,$Dev)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"💸︙*تم تعطيل التوجيه بنجاح*",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"💸 تفعيل التوجيه"]],
[['text'=>"💸 رجوع"]],
],
'resize_keyboard'=>true
])
]);
$rick['tojahh'] = "❎";
file_put_contents("data/bot.json",json_encode($rick));
}
#-----------(rick)-----------#
if($message and $text != "/start" and $from_id != $Dev[1] and $d7 == "✅" and !$data){
bot('forwardMessage',[
'chat_id'=>$Dev[1],
'from_chat_id'=>$chat_id,
 'message_id'=>$update->message->message_id,
'text'=>$text,
]);
}
#-----------(rick)-----------#
if($user == null){
$user = "None";
}elseif($user != null){
$user = $user;
}
if($text =='/start' and $from_id !=$Dev[1] and $d6 =="✅"){ 
bot('sendmessage',[ 
'chat_id'=>$Dev[1],  
'text'=>"تم دخول عضو جديد الى البوت ℹ️ :
الاسم : [$name]
المعرف : [@$user]
الايدي : [$from_id](tg://user?id=$from_id)
⎯ ⎯ ⎯ ⎯
",  
'parse_mode'=>"MarkDown", 
'disable_web_page_preview'=>true, 
]);  
}
#-----------(rick)-----------#
if($text == "💸 تفعيل البوت" and in_array($from_id,$Dev)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"💸︙*تم تفعيل البوت بنجاح*",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"💸 تعطيل البوت"]],
[['text'=>"💸 رجوع"]],
],
'resize_keyboard'=>true
])
]);
$rick['bots'] = "✅";
file_put_contents("data/bot.json",json_encode($rick));
}
if($text == "💸 تعطيل البوت" and in_array($from_id,$Dev)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"💸︙*تم تعطيل البوت بنجاح*",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"💸 تفعيل البوت"]],
[['text'=>"💸 رجوع"]],
],
'resize_keyboard'=>true
])
]);
$rick['bots'] = "❎";
file_put_contents("data/rick.json",json_encode($rick));
}
if($text =="المطور"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"- اهلا بك في قائمة المطورين 
- يمكنك الدخول الى المطور عبر المعرف الاتي : @HvvHH
- او بالضغط على الزر الذي بالاسفل ( Haider . )",
'reply_to_message_id'=>$message->message_id,
 'message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"Haider",'url'=>"t.me/HvvHH"],['text'=>"شوق .",'url'=>"t.me/ss_sz"]],
]
])
]);
}

$update     = json_decode(file_get_contents('php://input'));
$message = $update->message;
$text           = $message->text;
$chat_id     = $message->chat->id;
$user          = $update->message->from->username;
$sudo         = 1397042354;
$from_id     = $message->from->id;
$from_user = $message->from->username;
$first_name = $update->message->from->first_name;
$get             = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$from_id);
$info            = json_decode($get, true);
$JJ117        = $info['result']['status'];
$mid = $message->message_id;
$iBadlz = $update->message->reply_to_message->from->id;
$TlllllT = $update->message->reply_to_message->from->username;
mkdir("miss");
mkdir("miss/$chat_id");

$reply = $message->reply_to_message->from->id;
$iBadlz = $update->message->reply_to_message->from->id;
$get_miss = file_get_contents("miss/$chat_id/miss.txt");
$miss = explode("\n",$get_miss);
if($text == "كتمه" and $reply and !in_array($iBadlz,$miss) and $from_id == $sudo || $JJ117 =="administrator" || $JJ117 == "creator"){
file_put_contents("miss/$chat_id/miss.txt",$iBadlz ."\n",FILE_APPEND);
bot("sendmessage",[
'chat_id'=>$chat_id,
'text'=>"
⚜¦ العضو » @$TlllllT
▪️¦ الايدي » ( $iBadlz )
🕎¦ تم كتمه من المجموعه ،!
",
'reply_to_message_id'=>$mid,
]);
}if($text == "كتمه" and $reply and in_array($iBadlz,$miss) and $from_id == $sudo || $JJ117 =="administrator" || $JJ117 == "creator"){
file_put_contents("miss/$chat_id/miss.txt",$iBadlz ."\n",FILE_APPEND);
bot("sendmessage",[
'chat_id'=>$chat_id,
'text'=>"*⚜¦ العضو الذي تحاول كتمه ،
❗️¦ تم كتمه بالفعل ،!*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$mid,
]);
}elseif($text == "كتمه" and $reply and $JJ117 == "member"){
bot("sendmessage",[
'chat_id'=>$chat_id,
'text'=>"*⚜¦ المعذرهہ ، ليس لديك صلاحيات الكتم ،!*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$mid,
]);
}

if($text and in_array($from_id, $miss)){
bot("deletemessage",[
'chat_id'=>$chat_id,
'message_id'=>$mid,
]);
}

if($text == "الغاء كتم" || $text == "الغاء الكتم" and $reply and in_array($iBadlz,$miss) and $from_id == $sudo || $JJ117 =="administrator" || $JJ117 == "creator"){
$str = str_replace($iBadlz," ","\n" . $get_miss);
file_put_contents("miss/$chat_id/miss.txt",$str);
bot("sendmessage",[
'chat_id'=>$chat_id,
'text'=>"
⚜¦ العضو » @$TlllllT
▪️¦ الايدي » ( $iBadlz )
🕎¦ تم الغاء كتمه من المجموعه ،!
",
'reply_to_message_id'=>$mid,
]);
}elseif($text == "الغاء كتم" || $text == "الغاء الكتم" and $reply and !in_array($iBadlz,$miss) and $from_id == $sudo || $JJ117 =="administrator" || $JJ117 == "creator"){
bot("sendmessage",[
'chat_id'=>$chat_id,
'text'=>"*⚜¦ العضو الذي تحاول الغاء كتمه ،
❗️¦ تم الغاء كتمه بالفعل ،!*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$mid,
]);
}elseif($text == "الغاء كتم" || $text == "الغاء االكتم" and $reply and $JJ117 == "member"){
bot("sendmessage",[
'chat_id'=>$chat_id,
'text'=>"*⚜¦ المعذرهہ ، ليس لديك صلاحيات الغاء الكتم ،!*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$mid,
]);
}





if($text == "مسح المكتومي" || $text == "مسح المكتومين" and $from_id == $sudo || $JJ117 =="administrator" || $JJ117 == "creator"){
$str = str_replace(" ", $get_miss);
file_put_contents("miss/$chat_id/miss.txt",$str);
bot("sendmessage",[
'chat_id'=>$chat_id,
'text'=>"*📆¦ تم مسح المكتومين بواسطةه »$first_name *
*📎¦ معرفه » *@$user ",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$mid,
]);
}elseif($text == "مس المكتومين" || $text == "مسح المكتومين" and $JJ117 == "member"){
bot("sendmessage",[
'chat_id'=>$chat_id,
'text'=>"*⚜¦ المعذرهہ ، ليس لديك صلاحيات مسح المكتومين ،!*",
'reply_to_message_id'=>$mid,
'parse_mode'=>"MARKDOWN",
]);
}
$re = $update->message->reply_to_message;
$me = $message->reply_to_message;  
$mem = $me->message_id; 
$hayddev = "1397042354";
$RELAX = str_replace("كله ","$RELAX",$text); 
if($re){
if($text == "كله $RELAX" and $from_id == $hayddev){ 
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>"$RELAX", 
'reply_to_message_id'=>$mem, 
]); 
} 
}
if($text == "rickoo7"){
bot('sendvideo',[
'chat_id'=>$chat_id,
'video'=>"https://telegra.ph/file/deff084383ebcee402dda.mp4",
'caption'=>"~ [Hayder ,](t.me/hvvhh)
~ @HvvHH
",'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message->message_id,
 'message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- Hayder",'url'=>"t.me/HvvHH"]],
]
])
]);
}
