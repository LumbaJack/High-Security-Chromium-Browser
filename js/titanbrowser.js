function Delete_Cookie(a,d,c){Get_Cookie(a)&&(document.cookie=a+"="+(d?";path="+d:"")+(c?";domain="+c:"")+";expires=Thu, 01-Jan-1970 00:00:01 GMT")}function Set_Cookie(a,d,c,e,f,b){var g=new Date;g.setTime(g.getTime());c&&(c*=864E5);g=new Date(g.getTime()+c);document.cookie=a+"="+escape(d)+(c?";expires="+g.toGMTString():"")+(e?";path="+e:"")+(f?";domain="+f:"")+(b?";secure":"")}
function Get_Cookie(a){var d=document.cookie.split(";"),c="",e="",f="";for(i=0;i<d.length;i++)if(c=d[i].split("="),e=c[0].replace(/^\s+|\s+$/g,""),e==a)return 1<c.length&&(f=unescape(c[1].replace(/^\s+|\s+$/g,""))),f;return null}function roll_over(a,d){document[a].src=d}function secureCheck(a,d){window.location="http://search.titanbrowser.com/check/?url="+a+"&q="+qstring+"&"+d;return!1}function fire_ads(a){post_search_display();fetch_ads("process_ads",a,"")}
function process_ads(a){if(200!=a.bossresponse.responsecode||null==a.bossresponse.ads.resultset.numResults||0==a.bossresponse.ads.resultset.numResults)return!1;show_ads(0,3,a,"ads",!0);"images"!=st?show_ads(3,"-",a,"right-ads",!1):$("#right-ads").empty()}function addfavico(a){return"//"+a.match(/:\/\/(.[^/]+)/)[1]+"/favicon.ico"}function imgError(a){a.onerror="";a.src="/images/null.gif";return!0}
function show_ads(a,d,c,e,f){if("-"==d||d>c.bossresponse.ads.resultset.numResults)d=c.bossresponse.ads.resultset.numResults;if(a>=c.bossresponse.ads.resultset.numResults)return!1;var b="<div class='sponsor'>";f&&(b+="<li class='sponsor'>");for(i=a;i<d;i++)a=c.bossresponse.ads.resultset.listing[i],title=a.title,description=a.description,siteHost=a.siteHost,clickurl=a.clickurl,b+="<div class='heading'><a href='"+clickurl+"'>"+title+"</a></div>",b+="<div class='abstract'>"+description+"</div>",b+="<div class='url'>"+
siteHost+"</div>",b+="<br>";b+="<div class='warn-msg'>Ads</div>";f&&(b+="</li>");b+="</div>";document.getElementById(e).innerHTML=b}
function sr(a,d){$.getJSON("/s.php",{q:a,type:d,start:sp}).done(function(a){if(200==a.bossresponse.responsecode){res="news"==d?a.bossresponse.news:"blogs"==d?a.bossresponse.blogs:"images"==d?a.bossresponse.images:a.bossresponse.web;$("#results").empty();$("#results-count").html("<span id='rStart'>"+res.start+"</span> - <span id='rEnd'>"+res.totalresults+"</span> of total results<br>");fire_ads(a.bossresponse.ads.dmtoken);$.each(res.results,function(a,b){url=""==b.clickurl?b.url:b.clickurl;if("images"!=
d){var c="<div class='heading'><a href="+url+" > "+b.title+"</a></div><div class='abstract'>"+b["abstract"]+"</div><br>";$("#results").css("width","560px")}else{var c=b.thumbnailwidth,e=b.thumbnailheight,h=getRatio(c,e),e=165,c=Math.round(c*h),c="<div class='image-result'><a rel='gallery' class='fancybox' href='"+b.clickurl+"' title='"+b.title+"' refurl='"+b.refererurl+"'><img src='"+b.thumbnailurl+
"' style='width:"+c+"px; height:"+e+"px;' /></a></div>";$("#results").css("width","100%")}$("#results").append(c)});$("#results").append("<div id='pager' class='pager-buttons'></div>");a="<ul>";a=0<sp?a+"<li id='pagerPrev' class='pagerLnk'><a href='#' onClick='pagerMinus();'>Prev</a></li></ul>":a+"<li id='pagerPrev' class='pagerLnk'>Prev</li></ul>";pages=11;for(i=0;i<pages;i++){var e=i+sp;a=e==sp?a+("<li id='pagerBtn"+i+"' class='pagerBtn active' >"+e+"</li>"):a+("<li id='pagerBtn"+i+"' class='pagerBtn' onClick='pagerChange("+
e+");'>"+e+"</li>")}a+="<li id='pagerNext' class='pagerLnk'><a href='#' onClick='pagerPlus();'>Next</a></li></ul>";$("#pager").html(a);"images"==d&&$(".fancybox").fancybox({afterLoad:function(){this.title=this.title+'<br><a href="'+this.href+'">Download</a>  <a href="'+$(this.element).attr("refurl")+'">Website</a>'},helpers:{title:{type:"inside"}}})}})}function lj(a){var d=document.getElementsByTagName("head")[0],c=document.createElement("script");c.src=a;d.appendChild(c)}
function cl(){$("#search-box").addClass("search-top-box").removeClass("search-middle-box");$("#inpwrap").addClass("search-input-wrapper-top").removeClass("search-input-wrapper");$("#logo-home").addClass("logo-top").removeClass("logo-home");$("#powerlogo").addClass("powered-by").removeClass("powered-by-home");$("#quickbar").remove();$("#wrap-footer").remove();$("#wrap-search-results").show();$("#imglogo").width(120);m=1;$("#imglogo").wrap($("<a>",{href:"/"}))}
function ct(a){st=a;sp=0;$("#search-button").click()}function pagerChange(a){sp=a;$("#search-button").click()}function pagerPlus(){sp+=10;$("#search-button").click()}function pagerMinus(){sp-=10;0>sp&&(sp=0);$("#search-button").click()}function getRatio(a,d){return a/d};
