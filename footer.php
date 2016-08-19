<?php

/**

 * The template for displaying the footer.

 *

 * Contains the closing of the #content div and all content after

 *

 * @package SKT Gravida

 */

?>

 <script type="text/javascript">
                        var state = "home";
                        var staticURLServ = 'http://s4.scoopwhoop.com/v4/';
                        var staticPath = "http://s4.scoopwhoop.com/v4/static/sw/";
                        var apiURLServ = 'http://www.scoopwhoop.com/swadmin';
                        var root = 'http://www.scoopwhoop.com/';
                        var count = '1.15';
                </script>
                
                <script src="assets/bundle.js"></script>
                
                <script>
                  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

                  ga('create', 'UA-43134096-1', 'scoopwhoop.com');
                  ga('send', 'pageview');
                </script> 

                <script>(function() {
                  var _fbq = window._fbq || (window._fbq = []);
                  if (!_fbq.loaded) {
                    var fbds = document.createElement('script');
                    fbds.async = true;
                    fbds.src = '//connect.facebook.net/en_US/fbds.js';
                    var s = document.getElementsByTagName('script')[0];
                    s.parentNode.insertBefore(fbds, s);
                    _fbq.loaded = true;
                  }
                })();
                window._fbq = window._fbq || [];
                window._fbq.push(['track', '6024582585068', {'value':'0.00','currency':'INR'}]);
                </script>
                <noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6024582585068&amp;cd[value]=0.00&amp;cd[currency]=INR&amp;noscript=1" /></noscript>

                <script type="text/javascript">

                        var tag = document.createElement('script');

            tag.src = "https://www.youtube.com/iframe_api";
            var firstScriptTag = document.getElementsByTagName('script')[0];
            firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

                        var player;
                        function onYouTubeIframeAPIReady() {
                                console.log("loaded");
                        player = new YT.Player('video', {
                            height: '400',
                            width: '100%',
                            videoId: '0Bmhjf0rKe8',
                            playerVars: {
                                'controls': 1,
                                "enablejsapi":1,
                            "origin":document.domain,
                            "rel":0
                            },
                            events: {
                                'onReady': onPlayerReady,
                                    'onStateChange': onPlayerStateChange
                            }
                        });

                    }
                    var playerReady = false;
                    function onPlayerReady(event) {
                        playerReady = true;
                        console.log("true");

                    }
                    function onPlayerStateChange(event) {
                        if (event.data == YT.PlayerState.ENDED) {
                            

                        }
                    }
                    

                    
                    function play(url){
                        console.log("playing:"+url);
                        player.loadVideoById(url, 0, "default");
                    }
                    


                        
                </script>

                <script type="text/javascript">

var _sf_async_config={};
/** CONFIGURATION START **/
_sf_async_config.uid = 59508;
_sf_async_config.domain = 'frontpage24x7.com';
_sf_async_config.useCanonical = true;
_sf_async_config.sections = "Home";
_sf_async_config.authors = "";
/** CONFIGURATION END **/
(function(){
function loadChartbeat() {
window._sf_endpt=(new Date()).getTime();
var e = document.createElement('script');
e.setAttribute('language', 'javascript');
e.setAttribute('type', 'text/javascript');
e.setAttribute('src', '//static.chartbeat.com/js/chartbeat.js');
document.body.appendChild(e);
}
var oldonload = window.onload;
window.onload = (typeof window.onload != 'function') ?
loadChartbeat : function() { oldonload(); loadChartbeat(); };
})();


</script>
        

        
        




        

        

<script src="assets/mc-validate.js" type="text/javascript"></script><script src="assets/chartbeat.js" type="text/javascript" language="javascript"></script> 

<?php wp_footer(); ?>



</body>

</html>