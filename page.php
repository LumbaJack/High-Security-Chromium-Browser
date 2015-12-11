<?

    if (!preg_match("#^http#", $_GET["url"]) )
	$url="http://".$_GET["url"];
    else
	$url=$_GET["url"];
	
?>
<html>
<style>
a:hover, a:focus {
color: #005580;
text-decoration: underline;
}
a {
color: #0088cc;
text-decoration: none;
}
body {
font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
font-size: 16px;
line-height: 20px;
color: #333333;
}
</style>
<div style=" background-color: #ececf0; font-weight: bold;text-align: right; width: 100%; height: 26px; margin-right: 30px;font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; font-size: 14px;
line-height: 20px"> 
<div id="countdown" style=" padding-right: 80px;"></div><div id="skip" style="margin-right: 30px; margin-top: -19px; display: none;"><a href="<?print $url?>">[Skip]</a></div>
</div>
  <script>
  var i = 0;
  var countdown = document.getElementById("countdown");
  setInterval(function() {
  if (i > 3)
     document.getElementById("skip").style.display = 'block';
  countdown.innerText ="The Web page will show in " + eval(5-i) + " seconds";
  if (i++ == 5) {
        window.location = "<?print $url;?>";
  } }, 1500);
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42184865-1', 'titanbrowser.com');
  ga('send', 'pageview');

</script>

<br>
<br>
<div style="text-align:center;"><a href="http://titanbrowser.com/web-browser/"><img src="/images/Banner_800x416.png" border=0></a></div>
</html>
