<?php 
/**  
* The template for displaying video posts  
*  
*/ 
?>
<script type="text/javascript">
// When a YT iframe is ready, this function gets fired
function onYouTubeIframeAPIReady() {
  // Loop over iframes with class 'youtube'
  $('iframe.youtube').each(function(i) {
    var player = new YT.Player($(this).get()[0], {
    events: {
      'onReady': myYT.onPlayerReady,
      'onStateChange': myYT.onPlayerStateChange
    }
  });
  // Reference each iframe and store the object for retrieval
  $(this).data('index', i);
  myYT.players.push(player);
});
}
var myYT = {
  done: false,
  initFlag: true,
  init: function(){
    var tag, firstScriptTag;
    // Insert the iframe_api script on first run
    if (myYT.initFlag) {
      tag = document.createElement('script');
      tag.src = "https://www.youtube.com/iframe_api";
      firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
      myYT.initFlag = false;
    }
  },
  players: [],
  onPlayerStateChange: function(event) {
    if (event.data == YT.PlayerState.PLAYING && !myYT.done) {
      setTimeout(stopVideo, 6000);
      myYT.done = true;
    }
    function stopVideo(event) {
      myYT.stopVideo(event.target);
    }
  },
  stopVideo: function(player) {
    player.stopVideo();
  }
}
myYT.init();
</script>

<?php echo '<div style="background:#' . get_post_meta($post->ID, '_digitalsign_bgcolor', true) . '; height:900px; width:1920px; color:#' . get_post_meta($post->ID, '_digitalsign_pcolor', true) . ';">' ?>
				<div <?php post_class( '', $post_id ); ?>>
				<div style="height:900px; width:1800px; margin:-10px auto;"><iframe class="youtube" width="1800" height="900" type="text/html"  src="http://www.youtube.com/embed/<?php echo get_post_meta($post->ID, '_digitalsign_ytvid', true); ?>?rel=0&controls=0&autoplay=0&modestbranding=1&showinfo=0&iv_load_policy=3&enablejsapi=1&playerapiid=<?php echo the_ID() ?>" frameborder="0" allowfullscreen></iframe></div>
				</div>
			</div>