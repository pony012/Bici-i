	<script src="bower_components/jquery/dist/jquery.min.js"></script>
	<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="bower_components/bootstrap-material-design/dist/js/ripples.min.js"></script>
	<script src="bower_components/bootstrap-material-design/dist/js/material.min.js"></script>
	<script>
	  window.fbAsyncInit = function() {
	    FB.init({
	      appId      : '934893883198675',
	      xfbml      : true,
	      version    : 'v2.3'
	    });
	  };

	  (function(d, s, id){
	     var js, fjs = d.getElementsByTagName(s)[0];
	     if (d.getElementById(id)) {return;}
	     js = d.createElement(s); js.id = id;
	     js.src = "//connect.facebook.net/en_US/sdk.js";
	     fjs.parentNode.insertBefore(js, fjs);
	   }(document, 'script', 'facebook-jssdk'));
	</script>
	<script>
	$(document).ready(function() {
		// This command is used to initialize some elements and make them work properly
		$.material.init();
	});
	</script>
</body>
</html>
