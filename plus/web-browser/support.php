<?
if ($_POST["email"] != "" && $_POST["email"] != ""){
	$msg ="Name:".$_POST["name"].",\n";
	$msg.="Phone:".$_POST["phone"].",\n";
	$msg.="Email:".$_POST["email"].",\n";
	$msg.="Message:".$_POST["message"].",\n";

	mail("lestat.ega@gmail.com","Titan Browser Support",$msg);
	mail("jackgarcia77@gmail.com","Titan Browser Support",$msg);
	header('Location: http://titanbrowser.com');
}
?>


<html class="js consumer win8" lang="en" id="win8"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<style>
.container {
width: 960px;
}
.info {
float: left;
width: 524px;
}
* {
margin: 0px;
padding: 0px;
}
user agent stylesheetdiv {
display: block;
}
.form .field {
margin: 0 0 10px 0;
}
* {
margin: 0px;
padding: 0px;
}
.form .field label {
float: left;
width: 108px;
color: #515151;
font-size: 13px;
margin: 10px 0 0 0;
}
* {
margin: 0px;
padding: 0px;
}
 .form .field input[type=text] {
background: #f7f7f7;
width: 284px;
height: 36px;
padding: 0 5px;
border: none;
color: #898989;
border: solid 1px #d8d8d8;
border-radius: 5px;
-moz-border-radius: 5px;
-webkit-border-radius: 5px;
}
.form .field textarea {
background: #f7f7f7;
width: 284px;
padding: 5px 5px;
color: #898989;
height: 182px;
border: none;
border: solid 1px #d8d8d8;
border-radius: 5px;
-moz-border-radius: 5px;
-webkit-border-radius: 5px;
}
.form {
float: right;
width: 405px;
}
* {
margin: 0px;
padding: 0px;
}
</style>
    <meta charset="utf-8">
    <meta content="initial-scale=1, minimum-scale=1, width=device-width" name="viewport">
    <meta content="Titan Browser is a browser that combines a minimal design with sophisticated technology to make the web faster, safer, and easier." name="description">
    <title>
      Titan Web Browser
    </title>
    <link href="http://www.titanbrowser.com/images/icons/product/chrome-32.png" rel="icon" type="image/ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&subset=latin" rel="stylesheet">
    <link href="./titan_files/titan.min.css" rel="stylesheet">
</script>
  </head>
  <body class="" id="grid">
    <div class="compact" id="header">
      <div class="g-section g-tpl-160 g-split">
        <div class="g-unit g-first" id="header-logo">
          <a href="http://www.titanbrowser.com/"><img alt="Browser" data-g-event="nav-logo" data-g-label="consumer-home" id="logo" width="90%" src="./titan_files/logo.png"></a>
        </div>
        <ul class="g-unit g-section g-tpl-nest" id="nav" role="menubar">
	  <li class="g-unit">
            <a aria-haspopup="true" href="/plus/web-browser/" id="device-menu" role="menuitem"><span data-g-event="nav-dropdown" data-g-label="devices-home">Product</span></a>
            <ul aria-labelledby="devices-menu" role="menu" style="display: block; left: 0px; top: -134px;">
            </ul>
          </li>

          <li class="g-unit current active">
            <a aria-haspopup="true" href="#" id="browser-menu" role="menuitem"><span data-g-event="nav-dropdown" data-g-label="browser-home">Support</span></a>
            <ul aria-labelledby="browser-menu" role="menu" style="display: block; left: 0px; top: -101px;">
            </ul>
          </li>
          <li class="g-unit">
            <a aria-haspopup="true" href="/plus/about" id="device-menu" role="menuitem"><span data-g-event="nav-dropdown" data-g-label="devices-home">About</span></a>
            <ul aria-labelledby="devices-menu" role="menu" style="display: block; left: 0px; top: -134px;">
            </ul>
          </li>
        </ul>
      </div>
    </div>
    <div class="browser-landing" id="main">
      <div class="compact marquee-stacked" id="marquee">
        <div class="marquee-copy">
          <h1><br>
		Titan Browser Plus Support
          </h1>
       </div>

	<div class="container">
        	
            <div class="info">
            	<h3>Contact Information</h3>
		<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps?t=m&amp;q=500+N+RAINBOW+BLVD+LAS+VEGAS+NV+89107&amp;ie=UTF8&amp;hq=&amp;hnear=500+N+Rainbow+Blvd,+Las+Vegas,+Nevada+89107&amp;z=14&amp;ll=36.178071,-115.241635&amp;output=embed"></iframe><br /><small><a href="https://www.google.com/maps?t=m&amp;q=500+N+RAINBOW+BLVD+LAS+VEGAS+NV+89107&amp;ie=UTF8&amp;hq=&amp;hnear=500+N+Rainbow+Blvd,+Las+Vegas,+Nevada+89107&amp;z=14&amp;ll=36.178071,-115.241635&amp;source=embed" style="color:#0000FF;text-align:left">View Larger Map</a></small>
            </div>
            
            <div class="form">
            	<h2>Contact Form</h2>
                <div id="div_success"></div>
                              <div id="error" class="warning" style="display:none;"></div>
					<form name="form" id="form" method="post" action="" onsubmit="return false;">    
                 <div class="field">
             	<label>First Name:</label>
                        <input name="name" id="name" type="text">
                    </div>
                     <div class="field">
                    	<label>Phone No:</label>
                        <input name="phone" id="phone" type="text">
                    </div>
                    <div class="field">
                    	<label>Email :</label>
                        <input name="email" id="email" type="text">
                    </div>
                    <div class="field">
                    	<label>Message:</label>
                        <textarea name="message" id="message" cols="" rows=""></textarea>
                    </div>
               		<a class="button eula-download-button" data-g-event="cta" data-g-label="download-chrome" href="javascript:document.form.submit();">Send</a> 
               </form> 
                
            </div>
            
            <div class="clear"></div>
        </div>


      <div class="g-section g-tpl-50-50 g-split" id="sub-footer">
        <div class="g-unit g-first">
          <ul id="chrome-footer-global">
            <li>
              <a href="http://www.titanbrowser.com/">TitanBrowser.com</a>
            </li>
            <li>
              <a data-g-event="nav-subfooter" data-g-label="about" href="http://www.titanbrowser.com/plus/about">About Titan</a>
            </li>
            <li>
              <a data-g-event="nav-subfooter" data-g-label="privacy" href="http://www.titanbrowser.com/plus/web-browser/privacy.html"> Privacy</a>
            </li>
          </ul>
        </div>
        <div class="g-unit">
          <div id="locale-switcher">
      
          </div>
<!--          <div id="g-plus-badge">
            <a data-g-event="nav-subfooter" data-g-label="plus" href="https://plus.titanbrowser.com/100585555255542998765?prsrc=3" target="_blank">Add us on
            <img alt="" data-g-event="nav-subfooter" data-g-label="plus" src="./titan_files/gplus-16.png"></a>
          </div>-->
          <div id="___plusone_0" style="text-indent: 0px; margin: 0px; padding: 0px; background-color: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; width: 70px; height: 15px; background-position: initial initial; background-repeat: initial initial;"><iframe frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 70px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 15px;" tabindex="0" vspace="0" width="100%" id="I0_1371704220050" name="I0_1371704220050" src="#" allowtransparency="true" data-gapiattached="true" title="+1"></iframe></div>
        </div>
      </div>
    </div>
    <iframe frameborder="0" src="javascript:""" class="modal-dialog-bg" style="border: 0px; vertical-align: bottom; opacity: 0; width: 1899px; height: 1218px; display: none;"></iframe><div class="modal-dialog-bg" style="opacity: 0.5; width: 1899px; height: 1218px; display: none;"></div><div class="modal-dialog win" id="eula-dialog" aria-labelledby=":0" role="dialog" style="left: 568.5px; top: 115.73333333333333px; display: none;">
      <div class="modal-dialog-title modal-dialog-title-draggable" id=":0"><span class="modal-dialog-title-text"></span><span class="modal-dialog-title-close" style=""></span></div><div class="modal-dialog-content">
        <div class="g-section g-tpl-75-25 g-split">
          <h2>
		Support
          </h2><a data-g-event="eula" data-g-label="eula-close" href="javascript:void(0)" id="eula-close"><span>×</span></a>
        </div>
        <div class="linux-content" id="linux-distros">
          <h3>
            Please select your download package:
          </h3><label><input checked="checked" class="linux-distro-options" name="linux-distro-options" type="radio" value="linux_ubuntu_i386"> 32 bit .deb (For
          Debian/Ubuntu)</label> <label><input class="linux-distro-options" name="linux-distro-options" type="radio" value="linux_ubuntu_x86_64"> 64 bit .deb (For
          Debian/Ubuntu)</label> <label><input class="linux-distro-options" name="linux-distro-options" type="radio" value="linux_fedora_i386"> 32 bit .rpm (For
          Fedora/openSUSE)</label> <label><input class="linux-distro-options" name="linux-distro-options" type="radio" value="linux_fedora_x86_64"> 64 bit .rpm (For
          Fedora/openSUSE)</label>
          <p>
            Not Debian/Ubuntu or Fedora/openSUSE? There may be a community-supported version for
            your distribution <a href="http://code.titanbrowser.com/p/chromium/wiki/LinuxChromiumPackages">here</a>.
          </p>
        </div>
        <p class="eula-pf">
          <a href="./titan_files/eula_text.htm" target="_blank">Printer-friendly
          version</a>
        </p>
        <div class="linux-content disclaimer">
          <p>
            <strong>Note:</strong> Installing Titan Browser will <strong>add the Titan
            repository</strong> so your system will automatically keep Titan Browser up to date. If
            you don’t want Titan's repository, do “sudo touch /etc/default/google-chrome” before
            installing the package.
          </p>
        </div>
        <div class="win-content" id="win-opts">
          <p class="default-browser-opt">
            <label><input checked="" id="default-cb" type="checkbox" value="set"> Set Titan Browser as
            my default browser</label>
          </p>
          <p>
           <label><input id="stats-cb" type="checkbox"> Help make Titan Browser better by automatically sending usage statistics and crash reports to Titan. 
          </p>
        </div>
      </div>
      <div class="modal-dialog-buttons">
        <button class="button goog-buttonset-default" data-g-event="eula" data-g-label="eula-acceptinstall" id="eula-accept" name="accept">Accept and Install</button> <span id="throbber"><img alt="" src="./titan_files/chrome_throbber_fast_16.gif"></span>
      </div>
    </div><span tabindex="0" style="position: absolute; left: 568.5px; top: 115.73333333333333px; display: none;"></span>
<script>
window.scrollTo(0,0);
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42184865-1', 'titanbrowser.com');
  ga('send', 'pageview');

</script>

</body></html>
