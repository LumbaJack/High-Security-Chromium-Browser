<?php
require("OAuth.php");
 
$cc_key  = "dj0yJmk9N25QT3dSUkgxM0Q1JmQ9WVdrOWJFcFFZamxxTkdrbWNHbzlNVFUwT0RReU5qazJNZy0tJnM9Y29uc3VtZXJzZWNyZXQmeD1hZA--";
$cc_secret = "19cb648ae1d5550603c108279958da7b55d06159";
$url = "http://yboss.yahooapis.com/ysearch/spelling,ads";
$args = array();
$args["q"] = "yahoo";
$args["format"] = "json";
$args["ads.Partner"] = "domaindev_syn_boss108_ss_search";
$args["ads.Type"] = "ddc_titanbrowser_com";
$args["ads.count"] = "12";
$args["ads.test"] = "true";
$args["ads.url"] = "http://search.titanbrowser.com/search.php";


$consumer = new OAuthConsumer($cc_key, $cc_secret);
$request = OAuthRequest::from_consumer_and_token($consumer, NULL,"GET", $url, $args);
$request->sign_request(new OAuthSignatureMethod_HMAC_SHA1(), $consumer, NULL);
$url = sprintf("%s?%s", $url, OAuthUtil::build_http_query($args));
$ch = curl_init();
$headers = array($request->to_header());
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$rsp = curl_exec($ch);
$results = json_decode($rsp);
print_r($results);
?>
