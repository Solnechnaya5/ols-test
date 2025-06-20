<?php

	



// require composer autoload
require '../mpdf/mpdf.php';
require_once 'config.php';
session_start();
$mpdf = new \mPDF();

$url = urldecode($_REQUEST['url']);
print_r($url);

// To prevent anyone else using your script to create their PDF files



//captcha
session_start();
if(!empty($_POST) && $_POST['sid'] == session_id()) {
    $token_v2 = $_POST['captcha_token_v2'];
    $token_v3 = $_POST['captcha_token_v3'];
    $result = checkCaptcha($token_v2, $token_v3);
    die(json_encode($result, true));
}

function checkCaptcha($token_v2 = false, $token_v3 = false)
{
    // если не передано ни одного токена - возвращаем ошибку
    if (!$token_v3 && !$token_v2) {
        return ['error' => 'fall_captcha'];
    }
    // если дело дошло до капчи
    elseif ($token_v2) {
        // проверяем информацию по второй версии, если google ответил, что провека успешная - возвращаем успех
        $result = checkCaptchaCurl($token_v2, KEY_SECRET_V2);
        if (!$result['success']) {
            // если проверка провалилась - тоже ошибка
            return ['error' => 'fall_captcha_v2'];
        }
    }
    // если токен второй версии еще не получен, но есть 3, значит проверяем невидимую капчу
    else {
        $result = checkCaptchaCurl($token_v3, KEY_SECRET_V3);
        // проверяем количество очков от 0 до 1. Чем ближе к 1, тем больше вероятности, что это человек
        if ($result['score'] < 1) {
            return ['error' => 'fall_captcha_v3'];
        }
    }
    // возвращаем успех, если проверки пройдены
    $text = 'Your message "' . $_POST['text'] . '" was send to email "' . $_POST['email'] . '" successfully';
    return ['success' => true, 'text' => $text];
}

/**
 * Метод для отправки запроса в google через CURL
 * @param $response
 * @param $secret
 * @return mixed
 */
function checkCaptchaCurl($response, $secret)
{
    $url_data = 'https://www.google.com/recaptcha/api/siteverify' . '?secret=' . $secret . '&response=' . $response . '&remoteip=' . $_SERVER['REMOTE_ADDR'];
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url_data);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $captcha_res = curl_exec($curl);
    curl_close($curl);
    $captcha_res = json_decode($captcha_res, true);
    return $captcha_res;
}





// For $_POST i.e. forms with fields
if (count($_POST) > 0) {

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1 );

    foreach($_POST as $name => $post) {
      $formvars = array($name => $post . " \n");
    }
	
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($formvars));
    $html = curl_exec($ch);
	
    curl_close($ch);

} elseif (ini_get('allow_url_fopen')) {
   
} else {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt ( $ch , CURLOPT_RETURNTRANSFER , 1 );
    $html = curl_exec($ch);
    curl_close($ch);
}

$mpdf = new \mPDF();
//Calendar and Locations
if(!empty($_POST['calendar-1'])){
	$Post_calendar1='<div style="float:left;width:33%;text-align:center;"><img src="img/png/28icon.jpg" height="176px" width="176px" style="margin-bottom:5px;"><p>' .$_POST['calendar-1'].'</p></div>' ;
};
if(!empty($_POST['calendar-2'])){
	$Post_calendar2='<div style="float:left;width:33%;text-align:center;"><img src="img/png/27icon.jpg" height="176px" width="176px" style="margin-bottom:5px;"><p>' .$_POST['calendar-2'].'</p></div>' ;
};
if(!empty($_POST['calendar-3'])){
	$Post_calendar3='<div style="float:left;width:33%;text-align:center;"><img src="img/png/26icon.jpg" height="176px" width="176px" style="margin-bottom:5px;"><p>' .$_POST['calendar-3'].'</p></div>' ;
};
if(!empty($_POST['calendar-4'])){
	$Post_calendar4='<div style="float:left;width:33%;text-align:center;"><img src="img/png/25icon.jpg" height="176px" width="176px" style="margin-bottom:5px;"><p>' .$_POST['calendar-4'].'</p></div>' ;
};

//Social networks Engagement
if(!empty($_POST['social-networks-1'])){
	$Post_networks1='<div style="float:left;width:33%;text-align:center;"><img src="img/png/24icon.jpg" height="176px" width="176px" style="margin-bottom:5px;"><p>' .$_POST['social-networks-1'].'</p></div>' ;
};
if(!empty($_POST['social-networks-2'])){
	$Post_networks2='<div style="float:left;width:33%;text-align:center;"><img src="img/png/24icon.jpg" height="176px" width="176px" style="margin-bottom:5px;"><p>' .$_POST['social-networks-2'].'</p></div>' ;
};
if(!empty($_POST['social-networks-3'])){
	$Post_networks3='<div style="float:left;width:33%;text-align:center;"><img src="img/png/22icon.jpg" height="176px" width="176px" style="margin-bottom:5px;"><p>' .$_POST['social-networks-3'].'</p></div>' ;
};
//billing-eshopping
if(!empty($_POST['billing-eshopping-1'])){
	$Post_billing1='<div style="float:left;width:33%;text-align:center;"><img src="img/png/21icon.jpg" height="176px" width="176px" style="margin-bottom:5px;"><p>' .$_POST['billing-eshopping-1'].'</p></div>' ;
};
if(!empty($_POST['billing-eshopping-2'])){
	$Post_billing2='<div style="float:left;width:33%;text-align:center;"><img src="img/png/20icon.jpg" height="176px" width="176px" style="margin-bottom:5px;"><p>' .$_POST['billing-eshopping-2'].'</p></div>' ;
};
if(!empty($_POST['billing-eshopping-3'])){
	$Post_billing3='<div style="float:left;width:33%;text-align:center;"><img src="img/png/19icon.jpg" height="176px" width="176px" style="margin-bottom:5px;"><p>' .$_POST['billing-eshopping-3'].'</p></div>' ;
};
if(!empty($_POST['billing-eshopping-4'])){
	$Post_billing4='<div style="float:left;width:33%;text-align:center;"><img src="img/png/18icon.jpg" height="176px" width="176px" style="margin-bottom:5px;"><p>' .$_POST['billing-eshopping-4'].'</p></div>' ;
};
if(!empty($_POST['billing-eshopping-5'])){
	$Post_billing5='<div style="float:left;width:33%;text-align:center;"><img src="img/png/10icon.jpg" height="176px" width="176px" style="margin-bottom:5px;"><p>' .$_POST['billing-eshopping-5'].'</p></div>' ;
};
//admin-reviews
if(!empty($_POST['admin-reviews-1'])){
	$Post_admin1='<div style="float:left;width:33%;text-align:center;"><img src="img/png/11icon.jpg" height="176px" width="176px" style="margin-bottom:5px;"><p>' .$_POST['admin-reviews-1'].'</p></div>' ;
};
if(!empty($_POST['admin-reviews-2'])){
	$Post_admin2='<div style="float:left;width:33%;text-align:center;"><img src="img/png/9icon.jpg" height="176px" width="176px" style="margin-bottom:5px;"><p>' .$_POST['admin-reviews-2'].'</p></div>' ;
};
if(!empty($_POST['admin-reviews-3'])){
	$Post_admin3='<div style="float:left;width:33%;text-align:center;"><img src="img/png/12icon.jpg" height="176px" width="176px" style="margin-bottom:5px;"><p>' .$_POST['admin-reviews-3'].'</p></div>' ;
};
if(!empty($_POST['admin-reviews-4'])){
	$Post_admin4='<div style="float:left;width:33%;text-align:center;"><img src="img/png/13icon.jpg" height="176px" width="176px" style="margin-bottom:5px;"><p>' .$_POST['admin-reviews-4'].'</p></div>' ;
};
if(!empty($_POST['admin-reviews-5'])){
	$Post_admin5='<div style="float:left;width:33%;text-align:center;"><img src="img/png/14icon.jpg" height="176px" width="176px" style="margin-bottom:5px;"><p>' .$_POST['admin-reviews-5'].'</p></div>' ;
};
if(!empty($_POST['admin-reviews-6'])){
	$Post_admin6='<div style="float:left;width:33%;text-align:center;"><img src="img/png/15icon.jpg" height="176px" width="176px" style="margin-bottom:5px;"><p>' .$_POST['admin-reviews-6'].'</p></div>' ;
};
if(!empty($_POST['admin-reviews-7'])){
	$Post_admin7='<div style="float:left;width:33%;text-align:center;"><img src="img/png/16icon.jpg" height="176px" width="176px" style="margin-bottom:5px;"><p>' .$_POST['admin-reviews-7'].'</p></div>' ;
};
if(!empty($_POST['admin-reviews-8'])){
	$Post_admin8='<div style="float:left;width:33%;text-align:center;"><img src="img/png/17icon.jpg" height="176px" width="176px" style="margin-bottom:5px;"><p>' .$_POST['admin-reviews-8'].'</p></div>' ;
};
//External Integrations and APIs
if(!empty($_POST['external-api-1'])){
	$Post_external1='<div style="float:left;width:33%;text-align:center;"><img src="img/png/6icon.jpg" height="176px" width="176px" style="margin-bottom:5px;"><p>' .$_POST['external-api-1'].'</p></div>' ;
};
if(!empty($_POST['external-api-2'])){
	$Post_external2='<div style="float:left;width:33%;text-align:center;"><img src="img/png/8icon.jpg" height="176px" width="176px" style="margin-bottom:5px;"><p>' .$_POST['external-api-2'].'</p></div>' ;
};
if(!empty($_POST['external-api-3'])){
	$Post_external3='<div style="float:left;width:33%;text-align:center;"><img src="img/png/7icon.jpg" height="176px" width="176px" style="margin-bottom:5px;"><p>' .$_POST['external-api-3'].'</p></div>' ;
};
//mobile-apps
if(!empty($_POST['mobile-apps-1'])){
	$Post_mobile1='<div style="float:left;width:33%;text-align:center;"><img src="img/png/5icon.jpg" height="176px" width="176px" style="margin-bottom:5px;"><p>' .$_POST['mobile-apps-1'].'</p></div>' ;
};
if(!empty($_POST['mobile-apps-2'])){
	$Post_mobile2='<div style="float:left;width:33%;text-align:center;"><img src="img/png/4icon.jpg" height="176px" width="176px" style="margin-bottom:5px;"><p>' .$_POST['mobile-apps-2'].'</p></div>' ;
};
if(!empty($_POST['mobile-apps-3'])){
	$Post_mobile3='<div style="float:left;width:33%;text-align:center;"><img src="img/png/3icon.jpg" height="176px" width="176px" style="margin-bottom:5px;"><p>' .$_POST['mobile-apps-3'].'</p></div>' ;
};
if(!empty($_POST['mobile-apps-4'])){
	$Post_mobile4='<div style="float:left;width:33%;text-align:center;"><img src="img/png/2icon.jpg" height="176px" width="176px" style="margin-bottom:5px;"><p>' .$_POST['mobile-apps-4'].'</p></div>' ;
};
if(!empty($_POST['mobile-apps-5'])){
	$Post_mobile5='<div style="float:left;width:33%;text-align:center;"><img src="img/png/1icon.jpg" height="176px" width="176px" style="margin-bottom:5px;"><p>' .$_POST['mobile-apps-5'].'</p></div>' ;
};
//registration
if(!empty($_POST['registration-1'])){
	$Post_reg1='<div style="float:left;width:33%;text-align:center;"><img src="img/png/45icon.jpg" height="176px" width="176px" style="margin-bottom:5px;"><p>' .$_POST['registration-1'].'</p></div>' ;
};
if(!empty($_POST['registration-2'])){
	$Post_reg2='<div style="float:left;width:33%;text-align:center;"><img src="img/png/44icon.jpg" height="176px" width="176px" style="margin-bottom:5px;"><p>' .$_POST['registration-2'].'</p></div>' ;
};
if(!empty($_POST['registration-3'])){
	$Post_reg3='<div style="float:left;width:33%;text-align:center;"><img src="img/png/43icon.jpg" height="176px" width="176px" style="margin-bottom:5px;"><p>' .$_POST['registration-3'].'</p></div>' ;
};
if(!empty($_POST['registration-4'])){
	$Post_reg4='<div style="float:left;width:33%;text-align:center;"><img src="img/png/42icon.jpg" height="176px" width="176px" style="margin-bottom:5px;"><p>' .$_POST['registration-4'].'</p></div>' ;
};
if(!empty($_POST['registration-5'])){
	$Post_reg5='<div style="float:left;width:33%;text-align:center;"><img src="img/png/41icon.jpg" height="176px" width="176px" style="margin-bottom:5px;"><p>' .$_POST['registration-5'].'</p></div>' ;
};
if(!empty($_POST['registration-6'])){
	$Post_reg6='<div style="float:left;width:33%;text-align:center;"><img src="img/png/40icon.jpg" height="176px" width="176px" style="margin-bottom:5px;"><p>' .$_POST['registration-6'].'</p></div>' ;
};
//Content
if(!empty($_POST['content-1'])){
	$Post_content1='<div style="float:left;width:33%;text-align:center;"><img src="img/png/38icon.jpg" height="176px" width="176px" style="margin-bottom:5px;"><p>' .$_POST['content-1'].'</p></div>' ;
};
if(!empty($_POST['content-2'])){
	$Post_content2='<div style="float:left;width:33%;text-align:center;"><img src="img/png/37icon.jpg" height="176px" width="176px" style="margin-bottom:5px;"><p>' .$_POST['content-2'].'</p></div>' ;
};
if(!empty($_POST['content-3'])){
	$Post_content3='<div style="float:left;width:33%;text-align:center;"><img src="img/png/36icon.jpg" height="176px" width="176px" style="margin-bottom:5px;"><p>' .$_POST['content-3'].'</p></div>' ;
};
if(!empty($_POST['content-4'])){
	$Post_content4='<div style="float:left;width:33%;text-align:center;"><img src="img/png/35icon.jpg" height="176px" width="176px" style="margin-bottom:5px;"><p>' .$_POST['content-4'].'</p></div>' ;
};
if(!empty($_POST['content-5'])){
	$Post_content5='<div style="float:left;width:33%;text-align:center;"><img src="img/png/32icon.jpg" height="176px" width="176px" style="margin-bottom:5px;"><p>' .$_POST['content-5'].'</p></div>' ;
};
if(!empty($_POST['content-6'])){
	$Post_content6='<div style="float:left;width:33%;text-align:center;"><img src="img/png/34icon.jpg" height="176px" width="176px" style="margin-bottom:5px;"><p>' .$_POST['content-6'].'</p></div>' ;
};
if(!empty($_POST['content-7'])){
	$Post_content7='<div style="float:left;width:33%;text-align:center;"><img src="img/png/33icon.jpg" height="176px" width="176px" style="margin-bottom:5px;"><p>' .$_POST['content-7'].'</p></div>' ;
};
if(!empty($_POST['content-8'])){
	$Post_content8='<div style="float:left;width:33%;text-align:center;"><img src="img/png/31icon.jpg" height="176px" width="176px" style="margin-bottom:5px;"><p>' .$_POST['content-8'].'</p></div>' ;
};
if(!empty($_POST['content-9'])){
	$Post_content9='<div style="float:left;width:33%;text-align:center;"><img src="img/png/30icon.jpg" height="176px" width="176px" style="margin-bottom:5px;"><p>' .$_POST['content-9'].'</p></div>' ;
};
if(!empty($_POST['content-10'])){
	$Post_content10='<div style="float:left;width:33%;text-align:center;"><img src="img/png/29icon.jpg" height="176px" width="176px" style="margin-bottom:5px;"><p>' .$_POST['content-10'].'</p></div>' ;
};
if(!empty($_POST['content-11'])){
	$Post_content11='<div style="float:left;width:33%;text-align:center;"><img src="img/png/50icon.jpg" height="176px" width="176px" style="margin-bottom:5px;"><p>' .$_POST['content-11'].'</p></div>' ;
};
if(!empty($_POST['content-12'])){
	$Post_content12='<div style="float:left;width:33%;text-align:center;"><img src="img/png/49icon.jpg" height="176px" width="176px" style="margin-bottom:5px;"><p>' .$_POST['content-12'].'</p></div>' ;
};
//objectives
if(!empty($_POST['objectives-website-traffic'])){
	$Post_obj1='<div style="text-align:left;line-height: 1.75;"><img src="img/png/set.jpg" height="20px" width="20px" style="margin-right:15px;vertical-align: middle;">' .$_POST['objectives-website-traffic'].'</div>' ;
}else{
	$Post_obj1='<div style="text-align:left;line-height: 1.75;"><img src="img/png/unset.jpg" height="20px" width="20px" style="margin-right:15px;vertical-align: middle;">growth of website traffic, project evolution</div>' ;
};
if(!empty($_POST['objectives-promotion'])){
	$Post_obj2='<div style="text-align:left;line-height: 1.75;"><img src="img/png/set.jpg" height="20px" width="20px" style="margin-right:15px;vertical-align: middle;">' .$_POST['objectives-promotion'].'</div>' ;
}else{
	$Post_obj2='<div style="text-align:left;line-height: 1.75;"><img src="img/png/unset.jpg" height="20px" width="20px" style="margin-right:15px;vertical-align: middle;">promotion of certain products and service;</div>' ;
};
if(!empty($_POST['objectives-image-improvement'])){
	$Post_obj3='<div style="text-align:left;line-height: 1.75;"><img src="img/png/set.jpg" height="20px" width="20px" style="margin-right:15px;vertical-align: middle;">' .$_POST['objectives-image-improvement'].'</div>' ;
}else{
	$Post_obj3='<div style="text-align:left;line-height: 1.75;"><img src="img/png/unset.jpg" height="20px" width="20px" style="margin-right:15px;vertical-align: middle;">image improvement;</div>' ;
};
if(!empty($_POST['objectives-clients-partners'])){
	$Post_obj4='<div style="text-align:left;line-height: 1.75;"><img src="img/png/set.jpg" height="20px" width="20px" style="margin-right:15px;vertical-align: middle;">' .$_POST['objectives-clients-partners'].'</div>' ;
}else{
	$Post_obj4='<div style="text-align:left;line-height: 1.75;"><img src="img/png/unset.jpg" height="20px" width="20px" style="margin-right:15px;vertical-align: middle;">services for clients and/or partners;</div>' ;
};
if(!empty($_POST['objectives-services-for'])){
	$Post_obj5='<div style="text-align:left;line-height: 1.75;"><img src="img/png/set.jpg" height="20px" width="20px" style="margin-right:15px;vertical-align: middle;">' .$_POST['objectives-services-for'].'</div>' ;
}else{
	$Post_obj5='<div style="text-align:left;line-height: 1.75;"><img src="img/png/unset.jpg" height="20px" width="20px" style="margin-right:15px;vertical-align: middle;">services for corporate employees;</div>' ;
};
if(!empty($_POST['objectives-online-sales'])){
	$Post_obj6='<div style="text-align:left;line-height: 1.75;"><img src="img/png/set.jpg" height="20px" width="20px" style="margin-right:15px;vertical-align: middle;">' .$_POST['objectives-online-sales'].'</div>' ;
}else{
	$Post_obj6='<div style="text-align:left;line-height: 1.75;"><img src="img/png/unset.jpg" height="20px" width="20px" style="margin-right:15px;vertical-align: middle;">online sales, accepting online payments;</div>' ;
};
if(!empty($_POST['objectives-other'])){
	$Post_obj7='<div style="text-align:left;line-height: 1.75;"><img src="img/png/set.jpg" height="20px" width="20px" style="margin-right:15px;vertical-align: middle;">' .$_POST['objectives-other-text'].'</div>' ;
}else{
	$Post_obj7='<div style="text-align:left;line-height: 1.75;"><img src="img/png/unset.jpg" height="20px" width="20px" style="margin-right:15px;vertical-align: middle;">other;</div>' ;
};
//platforms
if(!empty($_POST['platforms-desktop'])){
	$Post_platforms1='<div style="text-align:left;line-height: 1.75;"><img src="img/png/set.jpg" height="20px" width="20px" style="margin-right:15px;vertical-align: middle;">' .$_POST['platforms-desktop'].'</div>' ;
}else{
	$Post_platforms1='<div style="text-align:left;line-height: 1.75;"><img src="img/png/unset.jpg" height="20px" width="20px" style="margin-right:15px;vertical-align: middle;">web desktop;</div>' ;
};
if(!empty($_POST['platforms-mobile'])){
	$Post_platforms2='<div style="text-align:left;line-height: 1.75;"><img src="img/png/set.jpg" height="20px" width="20px" style="margin-right:15px;vertical-align: middle;">' .$_POST['platforms-mobile'].'</div>' ;
}else{
	$Post_platforms2='<div style="text-align:left;line-height: 1.75;"><img src="img/png/unset.jpg" height="20px" width="20px" style="margin-right:15px;vertical-align: middle;">web mobile;</div>' ;
};
if(!empty($_POST['platforms-ios'])){
	$Post_platforms3='<div style="text-align:left;line-height: 1.75;"><img src="img/png/set.jpg" height="20px" width="20px" style="margin-right:15px;vertical-align: middle;">' .$_POST['platforms-ios'].'</div>' ;
}else{
	$Post_platforms3='<div style="text-align:left;line-height: 1.75;"><img src="img/png/unset.jpg" height="20px" width="20px" style="margin-right:15px;vertical-align: middle;">IOS;</div>' ;
};
if(!empty($_POST['platforms-android'])){
	$Post_platforms4='<div style="text-align:left;line-height: 1.75;"><img src="img/png/set.jpg" height="20px" width="20px" style="margin-right:15px;vertical-align: middle;">' .$_POST['platforms-android'].'</div>' ;
}else{
	$Post_platforms4='<div style="text-align:left;line-height: 1.75;"><img src="img/png/unset.jpg" height="20px" width="20px" style="margin-right:15px;vertical-align: middle;">Android;</div>' ;
};
if(!empty($_POST['platforms-hybrid'])){
	$Post_platforms5='<div style="text-align:left;line-height: 1.75;"><img src="img/png/set.jpg" height="20px" width="20px" style="margin-right:15px;vertical-align: middle;">' .$_POST['platforms-hybrid'].'</div>' ;
}else{
	$Post_platforms5='<div style="text-align:left;line-height: 1.75;"><img src="img/png/unset.jpg" height="20px" width="20px" style="margin-right:15px;vertical-align: middle;">hybrid;</div>' ;
};
//project category
if($_POST['project-category']=='new'){
	$Post_proje1='<div style="text-align:left;line-height: 1.75;"><img src="img/png/set.jpg" height="20px" width="20px" style="margin-right:15px;vertical-align: middle;">' .$_POST['project-category'].';</div>' ;
}else{
	$Post_proje1='<div style="text-align:left;line-height: 1.75;"><img src="img/png/unset.jpg" height="20px" width="20px" style="margin-right:15px;vertical-align: middle;">new;</div>' ;
};
if($_POST['project-category']=='changes in existing;'){
	$Post_proje2='<div style="text-align:left;line-height: 1.75;"><img src="img/png/set.jpg" height="20px" width="20px" style="margin-right:15px;vertical-align: middle;">' .$_POST['project-category'].'</div>' ;
}else{
	$Post_proje2='<div style="text-align:left;line-height: 1.75;"><img src="img/png/unset.jpg" height="20px" width="20px" style="margin-right:15px;vertical-align: middle;">changes in existing;</div>' ;
};
if($_POST['project-category']=='support'){
	$Post_proje3='<div style="text-align:left;line-height: 1.75;"><img src="img/png/set.jpg" height="20px" width="20px" style="margin-right:15px;vertical-align: middle;">' .$_POST['project-category'].';</div>' ;
}else{
	$Post_proje3='<div style="text-align:left;line-height: 1.75;"><img src="img/png/unset.jpg" height="20px" width="20px" style="margin-right:15px;vertical-align: middle;">support;</div>' ;
};
//design 
if($_POST['mvp']=='MVP'){
	$Post_mvp1='<div style="float:left;width:33%;text-align:center;"><p>' .$_POST['mvp'].'</p><img src="img/png/48icon.jpg" height="176px" width="176px" style="margin-bottom:5px;"></div>
	<div style="float:left;width:33%;text-align:center;"><p>Typical</p><img src="img/png/471icon.jpg" height="176px" width="176px" style="margin-bottom:5px;"></div>
	<div style="float:left;width:33%;text-align:center;"><p>Custom</p><img src="img/png/461icon.jpg" height="176px" width="176px" style="margin-bottom:5px;"></div>' ;
};
if($_POST['mvp']=='Typical'){
	$Post_mvp2='<div style="float:left;width:33%;text-align:center;"><p>MVP</p><img src="img/png/481icon.jpg" height="176px" width="176px" style="margin-bottom:5px;"></div>
	<div style="float:left;width:33%;text-align:center;"><p>' .$_POST['mvp'].'</p><img src="img/png/47icon.jpg" height="176px" width="176px" style="margin-bottom:5px;"></div>
	<div style="float:left;width:33%;text-align:center;"><p>Custom</p><img src="img/png/461icon.jpg" height="176px" width="176px" style="margin-bottom:5px;"></div>' ;
};
if($_POST['mvp']=='Custom'){
	$Post_mvp3='<div style="float:left;width:33%;text-align:center;"><p>MVP</p><img src="img/png/481icon.jpg" height="176px" width="176px" style="margin-bottom:5px;"></div>
	<div style="float:left;width:33%;text-align:center;"><p>Typical</p><img src="img/png/471icon.jpg" height="176px" width="176px" style="margin-bottom:5px;"></div>
	<div style="float:left;width:33%;text-align:center;"><p>' .$_POST['mvp'].'</p><img src="img/png/46icon.jpg" height="176px" width="176px" style="margin-bottom:5px;"></div>' ;
};
//Type of the design
if($_POST['design-type']=='Image (main focus is on graphics)'){
	$Post_design1='<div style="text-align:left;line-height: 1.75;"><img src="img/png/set.jpg" height="20px" width="20px" style="margin-right:15px;vertical-align: middle;">' .$_POST['design-type'].';</div>' ;
}else{
	$Post_design1='<div style="text-align:left;line-height: 1.75;"><img src="img/png/unset.jpg" height="20px" width="20px" style="margin-right:15px;vertical-align: middle;">Image (main focus is on graphics);</div>' ;
};
if($_POST['design-type']=='Informational (minimum graphics, maximum texts and charts)'){
	$Post_design2='<div style="text-align:left;line-height: 1.75;"><img src="img/png/set.jpg" height="20px" width="20px" style="margin-right:15px;vertical-align: middle;">' .$_POST['design-type'].';</div>' ;
}else{
	$Post_design2='<div style="text-align:left;line-height: 1.75;"><img src="img/png/unset.jpg" height="20px" width="20px" style="margin-right:15px;vertical-align: middle;">Informational (minimum graphics, maximum texts and charts);</div>' ;
};
if($_POST['design-type']=='other'){
	$Post_design3='<div style="text-align:left;line-height: 1.75;"><img src="img/png/set.jpg" height="20px" width="20px" style="margin-right:15px;vertical-align: middle;">' .$_POST['design-type-other-text'].';</div>' ;
}else{
	$Post_design3='<div style="text-align:left;line-height: 1.75;"><img src="img/png/unset.jpg" height="20px" width="20px" style="margin-right:15px;vertical-align: middle;">other;</div>' ;
};
//Type of the design
if($_POST['mood-for']=='Strict corporate/business style'){
	$Post_mood1='<div style="text-align:left;line-height: 1.75;"><img src="img/png/set.jpg" height="20px" width="20px" style="margin-right:15px;vertical-align: middle;">' .$_POST['mood-for'].';</div>' ;
}else{
	$Post_mood1='<div style="text-align:left;line-height: 1.75;"><img src="img/png/unset.jpg" height="20px" width="20px" style="margin-right:15px;vertical-align: middle;">Strict corporate/business style;</div>' ;
};
;if($_POST['mood-for']=='Design with bright colors'){
	$Post_mood2='<div style="text-align:left;line-height: 1.75;"><img src="img/png/set.jpg" height="20px" width="20px" style="margin-right:15px;vertical-align: middle;">' .$_POST['mood-for'].';</div>' ;
}else{
	$Post_mood2='<div style="text-align:left;line-height: 1.75;"><img src="img/png/unset.jpg" height="20px" width="20px" style="margin-right:15px;vertical-align: middle;">Design with bright colors;</div>' ;
};
if($_POST['mood-for']=='Solid color design with a bright emphasis'){
	$Post_mood3='<div style="text-align:left;line-height: 1.75;"><img src="img/png/set.jpg" height="20px" width="20px" style="margin-right:15px;vertical-align: middle;">' .$_POST['mood-for'].';</div>' ;
}else{
	$Post_mood3='<div style="text-align:left;line-height: 1.75;"><img src="img/png/unset.jpg" height="20px" width="20px" style="margin-right:15px;vertical-align: middle;">Solid color design with a bright emphasis;</div>' ;
};
if($_POST['mood-for']=='Positive funny design'){
	$Post_mood4='<div style="text-align:left;line-height: 1.75;"><img src="img/png/set.jpg" height="20px" width="20px" style="margin-right:15px;vertical-align: middle;">' .$_POST['mood-for'].';</div>' ;
}else{
	$Post_mood4='<div style="text-align:left;line-height: 1.75;"><img src="img/png/unset.jpg" height="20px" width="20px" style="margin-right:15px;vertical-align: middle;">Positive funny design;</div>' ;
};
if($_POST['mood-for']=='Minimalist style with an emphasis on functionality'){
	$Post_mood5='<div style="text-align:left;line-height: 1.75;"><img src="img/png/set.jpg" height="20px" width="20px" style="margin-right:15px;vertical-align: middle;">' .$_POST['mood-for'].';</div>' ;
}else{
	$Post_mood5='<div style="text-align:left;line-height: 1.75;"><img src="img/png/unset.jpg" height="20px" width="20px" style="margin-right:15px;vertical-align: middle;">Minimalist style with an emphasis on functionality;</div>' ;
}
if($_POST['mood-for']=='Your option'){
	$Post_mood6='<div style="text-align:left;line-height: 1.75;"><img src="img/png/set.jpg" height="20px" width="20px" style="margin-right:15px;vertical-align: middle;">' .$_POST['mood-for-option-text'].';</div>' ;
}else{
	$Post_mood6='<div style="text-align:left;line-height: 1.75;"><img src="img/png/unset.jpg" height="20px" width="20px" style="margin-right:15px;vertical-align: middle;">Your option;</div>' ;
}
// Information and technical support
if($_POST['info-support-info']=='Information support and content filling site'){
	$Post_Information1='<div style="text-align:left;line-height: 1.75;"><img src="img/png/set.jpg" height="20px" width="20px" style="margin-right:15px;vertical-align: middle;">' .$_POST['info-support-info'].';</div>' ;
}else{
	$Post_Information1='<div style="text-align:left;line-height: 1.75;"><img src="img/png/unset.jpg" height="20px" width="20px" style="margin-right:15px;vertical-align: middle;">Information support and content filling site;</div>' ;
};
if($_POST['info-support-technical']=='Technical support'){
	$Post_Information2='<div style="text-align:left;line-height: 1.75;"><img src="img/png/set.jpg" height="20px" width="20px" style="margin-right:15px;vertical-align: middle;">' .$_POST['info-support-technical'].';</div>' ;
}else{
	$Post_Information2='<div style="text-align:left;line-height: 1.75;"><img src="img/png/unset.jpg" height="20px" width="20px" style="margin-right:15px;vertical-align: middle;">Technical support:;</div>' ;
};
if($_POST['info-support-golive']=='GoLive phase and publishing'){
	$Post_Information3='<div style="text-align:left;line-height: 1.75;"><img src="img/png/set.jpg" height="20px" width="20px" style="margin-right:15px;vertical-align: middle;">' .$_POST['info-support-golive'].';</div>' ;
}else{
	$Post_Information3='<div style="text-align:left;line-height: 1.75;"><img src="img/png/unset.jpg" height="20px" width="20px" style="margin-right:15px;vertical-align: middle;">GoLive phase and publishing;</div>' ;
};

$htmlTable='<main >
      
		<div >
			<div style="background:white;">
			<div style="background:#93c704;text-align:center;">
				<h2 class="h2 h2--white" style="color: white;">Project specification</h2>
				<h4 class="h4 feature-item__title h2--white"  style="color: white;">Professional software engineering services</h3>
			</div>
				<div style="background:#93c704;text-align:center;"><img src="img/pr_head.png"></div>
			</div>
		</div>
        <div class="container" style="background:white;color: #656565;text-align:left;">
          <div class="centered-block centered-block--welcome" style="color: #656565;text-align:left;">
            
			<div class="col-12" style="background:white;">
		
            <form class="form row contact__form" action="php/sendpdf.php?url="  id="project-specification" method="post" novalidate="novalidate">
			<h3 style="font-size:26px;" class="h2 feature-item__title h2--underlined">Business Information</h3>
              <div class="form-group col-12">
                <label for="brand-name">1. The name of the brand / company (which is the object of the project): <b style="color:black";>'.$_POST['brand-name'].'</b></label>
              </div>     
			<div class="form-group col-12 person-block">
                <label  for="contact-person">2. Person of contact Information</label>
				<div class="person col-lg-3">Name:  <b style="color:black";>'.$_POST['name'].'</b></div>
				<div class="person col-lg-3">E-mail: <b style="color:black";> '.$_POST['email'].'</b></div>
                <div class="person col-lg-3">Tel:  <b style="color:black";>'.$_POST['tel'].'</b></div>
                <div class="person col-lg-3">Skype: <b style="color:black";>'.$_POST['skype'].'</b></div>
              </div>
              <div class="form-group col-12">
                <label  for="project-description">3. What is the project description?<p><b style="color:black";>'.$_POST['project-description'].'</b></p> </label>
                
              </div>
			  <div class="form-group col-12">
                <label  for="categorize-your-application">4. How would you categorize your application? corporate website;  online services; promo website; content website; business tool; etc 
				<p> <b style="color:black";>'.$_POST['categorize-your-application'].'</b></p></label>
              </div>  
			 <div class="form-group col-12">
                <label  for="objectives">5. What are your objectives? <b class="b-grey">What specific goals should the application meet? Please mark all the tasks that are significant for you.</b></label>
                <div><label for="objectives-website-traffic" class="form-label">'.$Post_obj1.'</label></div>
                <div><label for="objectives-promotion" class="form-label">'.$Post_obj2.'</label></div>
                <div><label for="objectives-image-improvement" class="form-label">'.$Post_obj3.'</label></div>
                <div><label for="objectives-clients-partners" class="form-label">'.$Post_obj4.'</label></div>
                <div><label for="objectives-services-for" class="form-label">'.$Post_obj5.'</label></div>
                <div><label for="objectives-online-sales" class="form-label">'.$Post_obj6.'</label></div>
                <div><label for="objectives-other" class="form-label">'.$Post_obj7.'</label></div>
              </div>
			  <div class="form-group col-12">
                <label  for="audience">6. Describe an audience? <br>
				<b style="color:#909090;font-weight:normal;font-size:12px;">Please tell us about the audience your software is intended to attract. Will your website be aimed at private or corporate customers? What are their primary geographical, age-related, social, and behavioral characteristics?</b>
				<p> <b style="color:black";>'.$_POST['audience'].'</b></p></label>             
              </div>
			  <div class="form-group col-12">
                <label  for="diff-competitors">7. What makes you different from your competitors?<p> <b style="color:black";>'.$_POST['diff-competitors'].'</b></p></label>
               
              </div>
			  <div class="form-group col-12">
                <label  for="competitors">8. What are your competitors? (best to point out their sites)<p> <b style="color:black";>'.$_POST['competitors'].'</b></p></label>
              </div>
			 
			  <div class="form-group col-12">
                <label  for="product-solve">9. What task should the product solve for the consumer? <p><b style="color:black";>'.$_POST['product-solve'].'</b></p></label>
                
              </div>
			  <div class="form-group col-12">
                <h4 class="underlined-section"></h4>
              </div>
			  <h3 style="font-size:26px;" class="h2 feature-item__title h2--underlined">Project information</h3>
		      <div class="form-group col-12">
                <label  for="project-title">1. Project Title:<p> <b style="color:black";>'.$_POST['project-title'].'</b></p></label>
                
              </div>

			  <div class="form-group col-12">
                <label  for="platforms">2. Platforms:</label>
                <div><label for="platforms-desktop" class="form-label">'.$Post_platforms1.'</label></div>
                <div><label for="platforms-mobile" class="form-label">'.$Post_platforms2.'</label></div>
                <div><label for="platforms-ios" class="form-label">'.$Post_platforms3.'</label></div>
                <div><label for="platforms-android" class="form-label">'.$Post_platforms4.'</label></div>
                <div><label for="platforms-hybrid" class="form-label">'.$Post_platforms5.'</label></div>
              </div>

			  <div class="form-group col-12">
                <label  for="project-category">3. Please choose the project category: </label>
                <div><label for="platforms-desktop" class="form-label">'.$Post_proje1.'</label></div>
                <div><label for="platforms-mobile" class="form-label">'.$Post_proje2.'</label></div>
                <div><label for="platforms-ios" class="form-label">'.$Post_proje3.'</label></div>
              </div> 
			  <div class="form-group col-12">
                <label  for=" project-data">4. What project data do you already have?<b class="b-grey"> If you have data that you think we might need on this stage already, you can send it to us on <b class="blue-mail">info@onelogicsoft.com</b></b><p><b style="color:black;">'.$_POST['project-data'].'</b></p></label>
              </div>
			   
              <div class="form-group col-12">
                <label  for="describe-project">5. Describe the project. A few words of what it would be <p><b style="color:black";>'.$_POST['describe-project'].'</b></p></label>
              </div>

		<div class="form-group col-12">
                <h4 class="underlined-section"></h4>
              	</div>
			  <h3 style="font-size:26px;" class="h2 feature-item__title h2--underlined">Design and interfaces development</h3>
			   <div class="form-group col-12">
			   <div class="input-div">
                <label  for="mvp">1. What design would you like? </label>    
				<label  for="mvp"><b style="color:black;"> '.$Post_mvp1.'</b></label>  
				<label  for="mvp"><b style="color:black;"> '.$Post_mvp2.'</b></label>  
				<label  for="mvp"><b style="color:black;"> '.$Post_mvp3.'</b></label>  
              </div>
              </div>
			  <div class="form-group col-12">
                <label  for="design-type">2. Type of  the design: </label> 
				<div><label for="platforms" class="form-label">'.$Post_design1.'</label></div>
                <div><label for="platforms" class="form-label">'.$Post_design2.'</label></div>
                <div><label for="platforms" class="form-label">'.$Post_design3.'</label></div>
              </div>
			  <div class="form-group col-12">
                <label  for="mood-for">3. Describe the mood of the future application. Mark + the solution closest to you or describe your version in the form below: </label>
				<div><label for="platforms" class="form-label">'.$Post_mood1.'</label></div>
                <div><label for="platforms" class="form-label">'.$Post_mood2.'</label></div>
                <div><label for="platforms" class="form-label">'.$Post_mood3.'</label></div>
                <div><label for="platforms" class="form-label">'.$Post_mood4.'</label></div>
                <div><label for="platforms" class="form-label">'.$Post_mood5.'</label></div>
                <div><label for="platforms" class="form-label">'.$Post_mood6.'</label></div>
			  </div>
			  <div class="form-group col-12">
                <label  for="mood-for">4. How would you define the style and tone of the project?<b style="color:#909090;font-weight:normal;"> It is important for us to understand the values and concepts that will underpin the project. It concerns both the visual aspect and the general feeling. Please slide the cursor on each scale representing polar qualities to give us a better understanding of your expectations for the project.</b></label>
                <div style="line-height:2;" ><b  >Informal </b><b ><img src="img/png/range'.$_POST['informal-official'].'.jpg" height="40px" width="360px" style="margin-left:100px;margin-right:75px;vertical-align: middle;"></b><b  > Official</b></div>
                <div style="line-height:2;"><b  >Classic </b><b><img src="img/png/range'.$_POST['classic-modern'].'.jpg" height="40px" width="360px" style="margin-left:110px;margin-right:80px;vertical-align: middle;"></b><b > Modern</b></div>
                <div style="line-height:2;"><b>Discreet </b><b ><img src="img/png/range'.$_POST['discreet-catchy'].'.jpg" height="40px" width="360px" style="margin-left:102px;margin-right:85;vertical-align: middle;"></b><b> Catchy</b></div>
		<div style="line-height:2;"><b>Conservative </b><b ><img src="img/png/range'.$_POST['conservative-luxurious'].'.jpg" height="40px" width="360px" style="margin-left:68px;margin-right:66px;vertical-align: middle;"></b><b > Luxurious</b></div>
		<div style="line-height:2;"><b>Simple </b><b ><img src="img/png/range'.$_POST['simple-complex'].'.jpg" height="40px" width="360px" style="margin-left:110px;margin-right:80px;vertical-align: middle;"></b><b >Complex </b></div>
			  </div>  

			  <div class="form-group col-12">
                <label  for="brand-book">5. The company is corporate identity, whether it is necessary to take into account in the design of the site, brand book, if you have any specific company colors that need to be used: 
				<p> <b style="color:black;"> '.$_POST['brand-book'].'</b></p></label>
                
              </div>
			  <div class="form-group col-12">
                <label  for="general-palette">6. General color palette<b class="b-grey"> of the interface (select the colors closest to you at https://www.materialpalette.com)</b>:
				<p> <b style="color:black;"> '.$_POST['general-palette'].'</b></p></label>
              </div>
			  <div class="form-group col-12">
                <label  for="unacceptable-elements">7. Unacceptable elements:
				<p> <b style="color:black;"> '.$_POST['unacceptable-elements'].'</b></p></label>
                
              </div>
			  <div class="form-group col-12">
                <label  for="mandatory-elements">8. Mandatory elements:
				<p> <b style="color:black;"> '.$_POST['mandatory-elements'].'</b></p></label>
              </div>
			  <div class="form-group col-12">
                <label  for="site-like">9. Sites/apps of any subject that you like(for any reason) and comments:
				<p> <b style="color:black;"> '.$_POST['site-like'].'</b></p></label>
              </div>
			  <div class="form-group col-12">
                <label  for="site-not-like">10. Sites/apps of any subject that you <b class="red-not">do not like</b> (for any reason) and comments:
				<p> <b style="color:black;"> '.$_POST['site-not-like'].'</b></p></label>
                
              </div>

			   <div class="form-group col-12">
                <h4 class="underlined-section"></h4>
              </div>
			  <h3 style="font-size:26px;" class="h2 feature-item__title h2--underlined">Features</h3>

			  <div class="form-group col-12">
                <label  for="users-registration">1. Users and registration</label>
				<div class="input-div">
                <label for="registration-1"><b style="color:black;">'.$Post_reg1.'</b></label>
                <label for="registration-2"><b style="color:black;">'.$Post_reg2.'</b></label>
                <label for="registration-3"><b style="color:black;">'.$Post_reg3.'</b></label>
				<label for="registration-4"> <b style="color:black;">'.$Post_reg4.'</b></label>
                <label for="registration-5"> <b style="color:black;">'.$Post_reg5.'</b></label>
                <label for="registration-6"> <b style="color:black;">'.$Post_reg6.'</b></label>
              </div>
              </div>
			  <div class="form-group col-12">
                <label  for="design-type">2. Content</label>
				<div class="input-div">
				<label for="content-1"><b style="color:black;">'.$Post_content1.'</b></label>
				<label for="content-2"><b style="color:black;">'.$Post_content2.'</b></label>
				<label for="content-3"><b style="color:black;">'.$Post_content3.'</b></label>
                <label for="content-4"><b style="color:black;">'.$Post_content4.'</b></label>
                <label for="content-5"><b style="color:black;">'.$Post_content5.'</b></label>
				<label for="content-6"><b style="color:black;">'.$Post_content6.'</b></label>
				<label for="content-7"><b style="color:black;">'.$Post_content7.'</b></label>
				<label for="content-8"><b style="color:black;">'.$Post_content8.'</b></label>            
                <label for="content-9"><b style="color:black;">'.$Post_content9.'</b></label>
				<label for="content-10"><b style="color:black;">'.$Post_content10.'</b></label>
                <label for="content-11"><b style="color:black;">'.$Post_content11.'</b></label>
                <label for="content-12"><b style="color:black;">'.$Post_content12.'</b></label>
              </div>
              </div>
			  <div class="form-group col-12">
                <label  for="calendar-locations">3. Calendar and Locations</label>
				<div class="input-div">
                <label for="content-1"><b style="color:black;">'.$Post_calendar1.'</b></label>
				<label for="content-2"><b style="color:black;">'.$Post_calendar2.'</b></label>
				<label for="content-3"><b style="color:black;">'.$Post_calendar3.'</b></label>
                <label for="content-4"><b style="color:black;">'.$Post_calendar4.'</b></label>
                </div>
              </div>
			  <div class="form-group col-12">
                <label  for="social-networks">4. Social networks Engagement</label>
				<div class="input-div">
                <label for="content-5"><b style="color:black;">'.$Post_networks1.'</b></label>
				<label for="content-6"><b style="color:black;">'.$Post_networks2.'</b></label>
				<label for="content-7"><b style="color:black;">'.$Post_networks3.'</b></label>
              </div>
              </div>
			  <div class="form-group col-12">
                <label  for="billing-eshopping">5. Billing and eShopping</label>
				<div class="input-div">
                <label for="content"><b style="color:black;">'.$Post_billing1.'</b></label>
				<label for="content"><b style="color:black;">'.$Post_billing2.'</b></label>
				<label for="content"><b style="color:black;">'.$Post_billing3.'</b></label>
				<label for="content"><b style="color:black;">'.$Post_billing4.'</b></label>
				<label for="content"><b style="color:black;">'.$Post_billing5.'</b></label>
              </div>
              </div>
			  <div class="form-group col-12">
                <label  for="admin-reviews">6. Admin, reviews, Analytics</label>
				<div class="input-div">
                <label for="content"><b style="color:black;">'.$Post_admin1.'</b></label>
				<label for="content"><b style="color:black;">'.$Post_admin2.'</b></label>
				<label for="content"><b style="color:black;">'.$Post_admin3.'</b></label>
				<label for="content"><b style="color:black;">'.$Post_admin4.'</b></label>
				<label for="content"><b style="color:black;">'.$Post_admin5.'</b></label>
				<label for="content"><b style="color:black;">'.$Post_admin6.'</b></label>
				<label for="content"><b style="color:black;">'.$Post_admin7.'</b></label>
				<label for="content"><b style="color:black;">'.$Post_admin8.'</b></label>
              </div>
              </div>
			  <div class="form-group col-12">
                <label for="external-api">7. External Integrations and APIs</label>
				<div class="input-div">
                <label for="content"><b style="color:black;">'.$Post_external1.'</b></label>
				<label for="content"><b style="color:black;">'.$Post_external2.'</b></label>
				<label for="content"><b style="color:black;">'.$Post_external3.'</b></label>
              </div>
              </div>
			  <div class="form-group col-12">
                <label for="mobile-apps">8. Mobile apps features</label>
				<div class="input-div">
                <label for="content"><b style="color:black;">'.$Post_mobile1.'</b></label>
				<label for="content"><b style="color:black;">'.$Post_mobile2.'</b></label>
				<label for="content"><b style="color:black;">'.$Post_mobile3.'</b></label>
				<label for="content"><b style="color:black;">'.$Post_mobile4.'</b></label>
				<label for="content"><b style="color:black;">'.$Post_mobile5.'</b></label>
              </div>
              </div>
			  <div class="form-group col-12">
                <label  for="info-support">9. Information and technical support</label>
				<div><label for="platforms" class="form-label">'.$Post_Information1.'</label></div>
                <div><label for="platforms" class="form-label">'.$Post_Information2.'</label></div>
                <div><label for="platforms" class="form-label">'.$Post_Information3.'</label></div>
				</div>
			  <div class="form-group col-12">
                <label  for="app-structure">10. Describe the application structure: 
				<p> <b style="color:black;"> '.$_POST['app-structure'].'</b></p></label>
              </div>

			   <div class="form-group col-12">
                <h4 class="underlined-section"></h4>
              </div>
			  <h3 style="font-size:26px;" class="h2 feature-item__title h2--underlined">Additional questions</h3> 
			  <div class="form-group col-12">
                <label  for="additional-1">1. Do you have any other materials that the site needs to match with in some way (brochures, press materials, etc.)?</label>
                <p> <b style="color:black;">'.$_POST['additional-1'].' </b></p>
              </div>
			  <div class="form-group col-12">
                <label  for="additional-2">2. Indicate everything that, from your point of view, can clarify the task of developing interfaces:</label>
                <p> <b style="color:black;">'.$_POST['additional-2'].' </b></p>
              </div>
			  <div class="form-group col-12">
                <label  for="additional-3">3. Do you have any requirements to the terms:</label>
                <p> <b style="color:black;">'.$_POST['additional-3'].' </b></p>
              </div>
			  <div class="form-group col-12">
                <label  for="additional-4">4. Please specify technologies that you prefer to use if you know:</label>
                <p> <b style="color:black;">'.$_POST['additional-4'].' </b></p>
              </div>
			  <div class="form-group col-12">
                <label  for="additional-5">5. Project Timeline and budget. Do not forget to mention if this project has to be completed within a fixed timeframe. Also, if it is possible, please state the project budget.</label>
                <p> <b style="color:black;">'.$_POST['additional-5'].' </b></p>
              </div>	  
            </form>
          </div>
	</div>
	</div>
    </main>
	
		<style>
		
	.email-specific{
		width: 50%;;
		display: inline-block;
		text-align: left;
		margin-left: auto;
		margin-right: -5px;
		padding: 20px 20px;
		box-shadow: none;
		border: 1px solid #D2D2D2;
		border-radius: 5px 0px 0px 5px;
		margin-bottom: 3rem;
	}
	.form-checkbox{
		display: none;
	}
	
	.form-label{
		display:inline-block;
		padding: 10px 0;
		font-size: 16px;
		font-family: Source Sans Pro,sans-serif;
	}
	.form-checkbox +.form-label:before{
		background: #FFFFFF;
		border: 1px solid #D2D2D2;
		box-sizing: border-box;
		border-radius: 5px;
		content: "";
		display: inline-block;
		font-family: "Font Awesome 5 Free";
		margin-right: 15px;
		position: relative;
		text-align: center;
		text-indent: 0px;
		width: 20px;
		height: 20px;
		vertical-align: middle;
	}
	.form-checkbox:checked +.form-label:before{
		font-family: "Font Awesome 5 Free";
		font-weight: 700; 
		font-size: 13px;
		line-height: 20px;
		content: "\f00c";
		background:#93C704;
		color:white;
	}
	
	#project-specification .form-group>label:first-child{
		display:block;
		font-weight: bold;
		margin-bottom: 15px;
		margin-top: 15px;
	}
	
	#project-specification .form-group>label p{
	    color: #656565;
		font-size: 14px;
		line-height: 1.3;
		font-weight: normal;
	}
	#project-specification .form-group>label .b-grey{
	    color: #656565;
		font-weight:normal;
	}
	#project-specification .form-group>label .blue-mail{
	    color: #656565;
		font-weight:normal;
	}
	
	.form-image img{
		border-radius: 50%;
		width:100%;
	}
	.form-image-svg img{
		width: 166px;
		margin-left: auto;
		margin-right: auto;
		max-height: 166px;
	}
	.form-image-svg.img-svg img{
		
		max-height: 198px;
	}
	.form-image-svg.img-svg img{
		width:208px;
		margin-left: auto;
		margin-right: auto;
		height:198px;
	}
	.form-image, .form-image-svg{
		float:left;
		text-align: center;
		background: white;
		padding: 15px;
	}
	.form-image-svg{
	    padding-bottom: 6rem;
	}
	.form-image-svg.img-svg{
	    padding-bottom: 2rem;
	}
	.form-image input, .form-image-svg input{
		display:none;
	}
	.form-image input + label img{
		border:none;
		box-shadow:none;
	}
	.form-image-svg.img-svg input + label{
		border: 6px solid #E5E5E5;
		box-sizing: border-box;
		border-radius: 1000px;
		height: 210px;
		display: block;
		width: 220px;
		margin-left: auto;
		margin-right: auto;
	}
	.form-image-svg.img-svg input + label img{
		box-shadow: none;
		margin-bottom: 15px;
		padding: 2rem;
		height: 198px;
	}
	.form-image-svg input + label{
		border: 6px solid #E5E5E5;
		box-sizing: border-box;
		border-radius: 1000px;
		height: 176px;
		display: block;
		width: 176px;
		margin-left: auto;
		margin-right: auto;
		font-weight:bold;
	}
	.form-image-svg input + label img{
		box-shadow: none;
		margin-bottom: 15px;
		padding: 3rem;
		height:166px;
	}
	.form-image-svg.img-svg input + label{
		height: 210px;
		display: block;
	}
	.form-image-svg.img-svg b{
		display: block;
		margin-bottom: 15px;
	}
	.form-image input:checked + label{
		background: #A2C719;
		border: 6px solid #A2C719;
		box-sizing: border-box;
		border-radius: 1000px;
	}
	.form-image input:checked + label img{ 
		filter: brightness(0) invert(1);
	}
	.form-image-svg input:checked + label img{ 
		filter: brightness(0) invert(1);
	}
	.form-image-svg input:checked + label {
		background: #A2C719;
		border: 6px solid #A2C719;
		box-sizing: border-box;
		border-radius: 1000px;
	} 
	 
	.form-range{
		text-align:center;
		position:relative;
		background: white;
		padding: 10px 10px;
		margin-left: auto;
		margin-right: auto;
	}
	.form-range input{
		margin:0px 10px;
		width:40%;
		outline: none;
	}
	.form-range label:first-child{
		position:absolute;
		left:5%;
	}
	.form-range label:last-child{
		position:absolute;
		right:5%;
	}
	.bg-green{
	    background: white;
		color: #656565;
	}
	.h2--white{
		
		margin-bottom:1rem;
	}
	#project-specification{
		color:blue;
	}
	#project-specification .form-group{
		padding-left:0px;
	}
	#project-specification .h2--underlined:after{
		width: 40px;
	}
	#project-specification .feature-item__title{
		margin-bottom:2rem;
		color: #656565;
		font-size: 32px;
	}
	.input-div{
		background:white;
		display: flow-root;
		padding-top:15px;
	}
	.underlined-section{
		content: "";
		display: block;
		width: 100%;
		height: 1px;
		margin-top: 3rem;
		margin-bottom: 3rem;
		background: #d2d2d2;
	}
	.person-block .person-first{
		display:inline-block;
		padding-left:0px;
		padding-right:0px;
	}
	.person-block .person{
		display: inline-block;
		padding-left: 15px;
		padding-right: 0px;
		margin-right: -5px;
	}
	
	.person-block{
		padding-left: 0px;
	}
	.bg-green-title{
		float: left;
		padding: 7rem 0;
	}
	.bg-green-image{
		display: inline-block;
	}
	.bg-green-image img{
		width:100%;
	}
	.red-not{
		text-decoration: underline;
		color: red;
	}
	
	.form-range input::-webkit-slider-runnable-track {height: 8px;background:  #E5E5E5;animate: 0.2s;transition:.1s;}
	.form-range input::-moz-range-track {height: 8px;background:  #E5E5E5;animate: 0.2s;transition:.1s;}
	.form-range input::-ms-track {height: 8px;
		background: #E5E5E5;
		animate: 0.2s;
		transition:.1s;
	}
	.form-range input:focus::-webkit-slider-runnable-track, .form-range input:hover::-webkit-slider-runnable-track {height: 8px;background:  #A2C719;animate: 0.2s;}
	.form-range input:focus::-moz-range-track {height: 8px;background:  #A2C719;}
	.form-range input:focus::-ms-track {height: 8px;
		background: #A2C719;
	}
	.form-range input::-webkit-slider-thumb {
		-webkit-appearance: none;
		height: 22px; 
		width: 22px;
		transition:.1s;
		border: 1px solid #FFFFFF;
		background:#A2C719;
		border-radius:18px;
		cursor:pointer;
		margin-top:-8px;
		transition:.1s;
		-webkit-box-shadow: 0px 0px 5px 5px rgba(162,199,25,0.5);
		-moz-box-shadow: 0px 0px 5px 5px rgba(162,199,25,0.5);
		box-shadow: 0px 0px 5px 5px rgba(162,199,25,0.5);
	}
	.form-range input::-moz-range-thumb {
		-webkit-appearance: none;
		height: 22px; 
		width: 22px;
		border: 1px solid #FFFFFF;
		background:#A2C719;
		border-radius:18px;
		cursor:pointer;
		margin-top:-8px;
		-webkit-box-shadow: 0px 0px 5px 5px rgba(162,199,25,0.5);
		-moz-box-shadow: 0px 0px 5px 5px rgba(162,199,25,0.5);
		box-shadow: 0px 0px 5px 5px rgba(162,199,25,0.5);
	}
	.form-range input::-ms-thumb {
		-webkit-appearance: none;
		height: 18px; 
		width: 18px;
		border: 1px solid #FFFFFF;
		background:#A2C719;
		border-radius:18px;
		cursor:pointer;
		margin-top:0px;
		transition:.1s;
		-webkit-box-shadow: 0px 0px 5px 5px rgba(162,199,25,0.5);
		-moz-box-shadow: 0px 0px 5px 5px rgba(162,199,25,0.5);
		box-shadow: 0px 0px 5px 5px rgba(162,199,25,0.5);
	}
	.form-range input {
		-webkit-appearance: none;
		border-radius: 18px;
		height:30px;
		overflow:visible;
	}   
	
	.send-label{
		text-align: center;
		font-size: 30px;
		margin-bottom: 3rem;
		display:block;
		line-height: 1.3;
	}
	.send-btn{
		display: inline-block;
		padding: 20px 5%;
		line-height: 20px;
		border-radius: 0px 5px 5px 0px;
		font-size: 16px;
		border: 1px solid #93c704;
		
	}
	.send-form{
		 text-align: center;
		margin-top: 30px;
	}
	.send-form>div{
		background: #FAFAFA;
		padding: 3rem;
	}
	.send-form .form-text{
		font-size: 16px;
		line-height: 1.3;
		align-items: center;
		text-align: center;
		color: #656565;
	}
	.bg-green-top{
		padding-top:2.5rem;
	}

	</style>
';

print_r($htmlTable);
$mpdf->useSubstitutions = true; // optional - just as an example

$mpdf->CSSselectMedia='mpdf'; // assuming you used this in the document header  
$mpdf->setBasePath($url);
$mpdf->SetHTMLHeader('<div style="text-align: right;"><img src="img/png/OLS_logo.png" height="20px" /></div>');
$mpdf->WriteHTML($htmlTable);
//$mpdf->Output('filename3.pdf');  
$content = $mpdf->Output('', 'S');

$name        = $_POST['name'];
$email       = "info@onelogicsoft.com";
$client_email    =$_POST['email-specific'] ;
$to          =  $email;
$to_client          = "$name <$client_email>";
$from        = "sender@onelogicsoft.com"; 
$subject     = "Your Project Spesification Document (PDF)";
$mainMessage = "Hello,\n
You will find your Project specification in a PDF attached to this email. \n
Thank you for using our builder!
We hope it will help you with your idea! 
Out specalists also will take a look at the brief and provide you with our view and thoughts. We hope we would help you to achieve success!\n
Let me know if you have questions.\n\n
With best regards,
Iryna Belinska
Client relationship manager at OneLogicSoft 
https://onelogicsoft.com
skype: irina_dl5
Viber\WhatsApp: +48 579636027";
$fileatttype = "application/pdf"; 
$fileattname = "project_specification.pdf"; 
$headers = "From: $from";

// This attaches the file
$semi_rand     = md5(time());
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
$headers      .= "\nMIME-Version: 1.0\n" .
"Content-Type: multipart/mixed;\n" .
" boundary=\"{$mime_boundary}\"";

$message = "This is a multi-part message in MIME format.\n\n" .
  "--{$mime_boundary}\n" .
  "Content-Type: text/plain; charset=\"iso-8859-1\n" .
  "Content-Transfer-Encoding: 7bit\n\n" .
  $mainMessage  . "\n\n";


 $content = chunk_split(base64_encode($content)); 
$message .= "--{$mime_boundary}\n" .
"Content-Type: {$fileatttype};\n" .
" name=\"{$fileattname}\"\n" .
"Content-Disposition: attachment;\n" .
" filename=\"{$fileattname}\"\n" .
"Content-Transfer-Encoding: base64\n\n" . 
$content . "\n\n" .
"--{$mime_boundary}-\n"; 


// Send the email
if(mail($to, $subject, $message, $headers)) {

    print_r("The email was sent.");

}
else {

    print_r("There was an error sending the mail.");

}
if(mail($to_client, $subject, $message, $headers)) {

    print_r("The email was sent.");

}
else {

    print_r("There was an error sending the mail.");

}





?>