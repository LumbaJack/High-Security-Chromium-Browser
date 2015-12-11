<?php  
  $q = $_GET["q"];
  $t = $_GET["type"];
  $s = $_GET["start"];
  if($t != "news" && $t != "blogs" && $t != "web" && $t != "images")
	$t = "web";
  if(!is_numeric($s)) 
        $s = 0;
  
  $url = "http://yboss.yahooapis.com/ysearch/ads,$t";
  $params = array();  
  $params["format"] = "json";  
  $params["market"] = "en-us";  
  $params["ads.affilData"] = urlencode("ip=". $_SERVER['REMOTE_ADDR']."&ua=".$_SERVER['HTTP_USER_AGENT']."&uref=".$_SERVER['HTTP_REFERER']."&uid=".$_SERVER['REMOTE_ADDR']);
  $params["ads.Partner"] = "domaindev_syn_boss108_ss_search";
  $params["ads.Type"] = "ddc_titanbrowser_com";
  $params["ads.count"] = "12";
  $params["ads.url"] = "http://search.titanbrowser.com/search.php";
  if($t == "news" && $q == "") {
    $params["age"] = "1d";
    $params["sort"] = "date";
    $params["q"] = "%";
  }
  $params["start"] = ($s-1) * 10;
  $params["count"] = 10;
  if ( $t == "images" ) {
      $params["count"] = 50;
  }
  $params["q"] = $q;
  $cc_secret  = "19cb648ae1d5550603c108279958da7b55d06159";
  $cc_key = "dj0yJmk9N25QT3dSUkgxM0Q1JmQ9WVdrOWJFcFFZamxxTkdrbWNHbzlNVFUwT0RReU5qazJNZy0tJnM9Y29uc3VtZXJzZWNyZXQmeD1hZA--";
  $oauth = new OAuth($cc_key,$cc_secret,OAUTH_SIG_METHOD_HMACSHA1);
  $oauth->fetch($url, $params, 'GET' );
  $rsp =  $oauth->getLastResponse();
  header('Content-type: application/json');
  print $rsp;
?>
