function roll_over(img_name, img_src)
{
	document[img_name].src = img_src;
}

function secureCheck(url,urlType){
	window.location='http://search.titanbrowser.com/check/?url=' + url+'&q=' + qstring + '&' +urlType;
	return false;
}

function fire_ads(token) {
    post_search_display();
    var callback_function = "process_ads";
    fetch_ads(callback_function, token, "");
}

function process_ads(result_json) {
    if (result_json.bossresponse.responsecode != 200) {
        return false;
    }
    if (result_json.bossresponse.ads.resultset.numResults == null || result_json.bossresponse.ads.resultset.numResults == 0) {
        return false;
    }

    show_ads(0,3,result_json,'ads',true);
    if (st != "images")
        show_ads(3,'-',result_json,'right-ads',false);
    else
        $("#right-ads").empty();
}

function addfavico(url) {
   var r = /:\/\/(.[^/]+)/;
   var f = "//" + url.match(r)[1] + "/favicon.ico";
   return f;
}

function imgError(image) {
    image.onerror = "";
    image.src = "/images/null.gif";
    return true;
}

function show_ads(start,end,data,div,li) {
    if (end == "-" || end > data.bossresponse.ads.resultset.numResults)
          end = data.bossresponse.ads.resultset.numResults;

    if (start >= data.bossresponse.ads.resultset.numResults)
          return false;
    var innerHTML = "<div class='sponsor'>";
    if (li) 
        innerHTML += "<li class='sponsor'>";
    for(i=start;i< end;i++) {
        var item = data.bossresponse.ads.resultset.listing[i];
        title = item.title;
        description = item.description;
        siteHost = item.siteHost;
        clickurl = item.clickurl;
        innerHTML += "<div class='heading'><a href='"+clickurl+"'>"+title+"</a></div>";
        innerHTML += "<div class='abstract'>"+description+"</div>";
        innerHTML += "<div class='url'>"+siteHost+"</div>";
        innerHTML += "<br>";
    }
    innerHTML += "<div class='warn-msg'>Ads</div>";
    if (li) 
        innerHTML += "</li>";
    innerHTML += "</div>";
    var adsSection = document.getElementById(div);
    adsSection.innerHTML = innerHTML;
}

function sr(q, t){
    $.getJSON('/s.php', { q: q, type: t, start: sp })
      .done(function( data ) {
      if (data.bossresponse.responsecode == 200) {
        if (t == "news")
           res = data.bossresponse.news;
        else if (t == "blogs")
           res = data.bossresponse.blogs;
        else if (t == "images")
           res = data.bossresponse.images;
        else
           res = data.bossresponse.web;
        $("#results").empty();
        $("#results-count").html("<span id='rStart'>" + res.start + "</span> - <span id='rEnd'>" + res.totalresults + "</span> of total results<br>");

        //$("#ads").empty();
        //$("#right-ads").empty();
        var itemsperpage = 10;
        fire_ads(data.bossresponse.ads.dmtoken);
        $.each( res.results, function( i, item ) {
           if (item.clickurl == "")
              url = item.url;
           else
              url = item.clickurl;
           if (t != "images") {
              var text = "<div class='heading'><a href=" + url + " > " + item.title + "</a></div><div class='abstract'>" + item.abstract + "</div><div class='url'>"+(item.dispurl==undefined ? item.sourceurl : item.dispurl)+"</div><br>";
              $("#results").css('width', '560px');
           }
           else {
              itemsperpage = 50;
              var thumbwidth = item.thumbnailwidth; 
              var thumbheight = item.thumbnailheight;
              var ratio = getRatio( thumbwidth, thumbheight );
              thumbheight = 165;
              thumbwidth = Math.round(thumbwidth * ratio); 
              var text = "<div class='image-result'><a rel='gallery' class='fancybox' href='" + item.clickurl + "' title='" + item.title +"' refurl='" + item.refererurl + "'><img src='" + item.thumbnailurl + "' style='width:" + thumbwidth + "px; height:" + thumbheight + "px;' /></a></div>";
              $("#results").css('width', '100%');
           }
           $("#results").append(text);
        });

        $("#results").append("<div id='pager' class='pager-buttons'></div>");
        var text = "<ul>";
        if ( sp > 1 ) {
            text += "<li id='pagerPrev' class='pagerLnk'><a href='#' onClick='pagerMinus();'>Prev</a></li></ul>";
        }
        else {
            text += "<li id='pagerPrev' class='pagerLnk'>Prev</li></ul>";
        }
        if (sp < 6) si = 1;
        else si = sp - 5;
        for ( i = 0; i < 11; i++ ) {
           if(i == (sp -si ))
                text += "<li id='pagerBtn" + i + "' class='pagerBtn active' ><b>"  + (i+si) + "</b></li>";
           else
                text += "<li id='pagerBtn" + i + "' class='pagerBtn' onClick='pagerChange(" + (i+si) + ");'>" + (i+si) + "</li>";
        }
        text += "<li id='pagerNext' class='pagerLnk'><a href='#' onClick='pagerPlus();'>Next</a></li></ul><br><br>";
        $("#pager").html(text);
        if (t == "images") {
           $(".fancybox").fancybox({
              afterLoad: function() {
              this.title =  this.title + '<br><a href="' + this.href + '">Download</a>  <a href="' + $(this.element).attr("refurl") + '">Website</a>' },
              helpers : { title: { type: 'inside' } }
           });
        }
      };
     });
}

function lj(u){var head=document.getElementsByTagName("head")[0];var p=document.createElement('script');p.src=u;head.appendChild(p);};
function cl(){ $('#search-box').addClass('search-top-box').removeClass('search-middle-box'); $('#inpwrap').addClass('search-input-wrapper-top').removeClass('search-input-wrapper'); $('#logo-home').addClass('logo-top').removeClass('logo-home'); $('#powerlogo').addClass('powered-by').removeClass('powered-by-home'); $('#quickbar').remove(); $('#wrap-footer').remove(); $('#wrap-search-results').show(); $('#imglogo').width(120); m=1;$("#imglogo").wrap($('<a>',{href:'/'}));};
function ct(t){st=t;sp=1;$("#search-button").click();}
function pagerChange(p) { sp = p; $("#search-button").click(); }
function pagerPlus() { sp = sp + 1; $("#search-button").click(); }
function pagerMinus() { sp = sp - 1; if ( sp < 1 ) { sp = 1; } $("#search-button").click(); }
//function getRatio(width, height) { var ratio = 0; var maxHeight = 165; } // should match whats in css ratio = maxHeight / height;
function getRatio(width, height) { return ( width / height ); } // should match whats in css ratio = maxHeight / height;
function getURLParameter(name) { return decodeURIComponent((new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)').exec(location.search)||[,""])[1].replace(/\+/g, '%20'))||null; }
$(document).ready(function() {
      /* var filename = getURLParameter("q");
       if (filename != ""){
       filename=filename.replace("%20","_");
       filename=filename.replace(" ","_");
       filename=filename +".txt";
       $.ajax({
           url : "http://titanbrowser.com/pages/" +filename,
           dataType: "text",
           success : function (data) {
               $("#wiki").text(data);
	       $("#wiki").show();
           }
       });
      }
     */
}); 
