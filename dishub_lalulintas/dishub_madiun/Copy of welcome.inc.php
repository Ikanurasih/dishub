<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
		    <link rel="stylesheet" href="css/page.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/slider.css" type="text/css" media="screen" />
    
    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.2.js"></script>
	  <script src="js/jquery.anythingslider.js" type="text/javascript" charset="utf-8"></script>

    <script type="text/javascript">
    
        function formatText(index, panel) {
    		  return index + "";
    	  };
    
        $(function () {
        
            $('.anythingSlider').anythingSlider({
                easing: "easeInOutExpo",        // Anything other than "linear" or "swing" requires the easing plugin
                autoPlay: true,                 // This turns off the entire FUNCTIONALY, not just if it starts running or not.
                delay: 3000,                    // How long between slide transitions in AutoPlay mode
                startStopped: false,            // If autoPlay is on, this can force it to start stopped
                animationTime: 600,             // How long the slide transition takes
                hashTags: true,                 // Should links change the hashtag in the URL?
                buildNavigation: true,          // If true, builds and list of anchor links to link to each slide
            		pauseOnHover: true,             // If true, and autoPlay is enabled, the show will pause on hover
            		startText: "Go",                // Start text
    		        stopText: "Stop",               // Stop text
    		        navigationFormatter: formatText // Details at the top of the file on this use (advanced use)
            });
            
            $("#slide-jump").click(function(){
                $('.anythingSlider').anythingSlider(6);
            });
            
        });
    </script>
</head>

<body>
<center>
<br />
<!--<p><strong><font color="#000000" size="4" face="Arial, Helvetica, sans-serif">
Selamat Datang di Sistem Informasi <br />
Dinas Perhubungan Komunikasi & Informatika Kota Madiun</font></strong>
</p>-->
</center>
    <div id="page-wrap">    
        <div class="anythingSlider">
        
          <div class="wrapper">
            <ul>
               <li>
                    <img src="images/slide-civil-1.jpg" alt="" />
               </li>
              <li>
                 
                 <div id="textSlide">
                 
                    <img src="images/251356.jpg" alt="tomato sandwich" style="float: right; margin: 0 0 2px 10px;" />
                    
                    <h3>Queenie's Killer Tomato Bagel Sandwich</h3>
                    
                    <h4>Ingredients</h4>

                    <ul>
                        <li>1 bagel, split and toasted</li>
                        <li>2 tablespoons cream cheese</li>
                        <li>1 roma (plum) tomatoes, thinly sliced</li>
                        <li>salt and pepper to taste</li>
                        <li>4 leaves fresh basil</li>
                    </ul>

                 </div>
                 
              </li>
              <li>
                 <img src="images/slide-env-1.jpg" alt="" />
              </li>
              <li>
                 <img src="images/slide-civil-2.jpg" alt=""  />
              </li>
              <li>
                 <div id="quoteSlide">
                 
                    <blockquote>Life is conversational. Web design should be the same way. On the web, you&#8217;re talking to someone you&#8217;ve probably never met � so it&#8217;s important to be clear and precise. Thus, well structured navigation and content organization goes hand in hand with having a good conversation.</blockquote>
                    <p> - <a id='perma' href='#'>Chikezie Ejiasi</a></p>
                 
                 </div>
              </li>
              <li>
                 <img src="images/slide-env-2.jpg" alt="" />
              </li>
            </ul>        
          </div>
          
        </div>
</div>

</body>
</html>
