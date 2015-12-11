<?php
require("OAuth.php");
 
$cc_key  = "dj0yJmk9N1RzN3JpVzZwWlFDJmQ9WVdrOVpGUnJabGhITldVbWNHbzlNVEEyTnpBME16STJNZy0tJnM9Y29uc3VtZXJzZWNyZXQmeD03Yg--";
$cc_secret = "fbce53c4c5357410c6be19d583274054d3832375";
$url = "http://yboss.yahooapis.com/ysearch/ads,web";
$args = array();
$args["q"] = "iphone";
$args["format"] = "json";
$args["ads.Partner"] = "domaindev_syn_boss46_ss_search";
$args["ads.Type"] = "ddc_nitrofinder_com";
$args["ads.count"] = "12";
//$args["ads.test"] = "true";
//$args["ads.url"] = "http://titanbrowser.com/search.php";


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
