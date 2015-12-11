<?
function file_get_contents_curl($url)
{
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

    $data = curl_exec($ch);
    curl_close($ch);

    return $data;
}
$url = $_GET["q"];
$html = file_get_contents_curl($url);

//parsing begins here:
$doc = new DOMDocument();
$doc->loadHTML($html);
$nodes = $doc->getElementsByTagName('title');

//get and display what you need:
$title = $nodes->item(0)->nodeValue;

$metas = $doc->getElementsByTagName('meta');

for ($i = 0; $i < $metas->length; $i++)
{
    $meta = $metas->item($i);
    if($meta->getAttribute('name') == 'description')
        $description = $meta->getAttribute('content');
    if($meta->getAttribute('name') == 'keywords')
        $keywords = $meta->getAttribute('content');

}
$imgs = $doc->getElementsByTagName('img');
$srcimg="";
$count=0;
for ($i = 0; $i < $imgs->length; $i++)
{
    $img = $imgs->item($i);
    $aux = $img->getAttribute('src');
    if (preg_match("#^https?://(.*).[png|jpg]$#", $aux) ){
	$srcimg.= "&p[images][$i]=".urlencode($aux);
	$count++;
	}
    if ($count == 4) break;
}
/*print $srcimg;
exit;*/
/*echo "Title: $title". '<br/><br/>';
echo "Description: $description". '<br/><br/>';
echo "Keywords: $keywords";
*/
//$description = "<a href='http://search.titanbrowser.com/'>Im browsing safe with TitanBrowser</a> $description";
$title="$title - I'm browsing Safely with TitanBrowser";
$url2="http://titanbrowser.com/page.php?url=$url";
$newURL="http://www.facebook.com/sharer/sharer.php?s=100&p[url]=".urlencode($url2).$srcimg."&p[title]=".urlencode($title)."&p[summary]=".urlencode($description);
//print $newURL;
header('Location: '.$newURL);
?>
