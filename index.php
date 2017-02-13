<!--
<div
  class="fb-like"
  data-share="true"
  data-width="450"
  data-show-faces="true">
</div>
-->
<!DOCTYPE html>
<html>
<head>
	<title>Survey</title>

	<style>
		html{font-family: Verdana, Tahoma, Arial; font-size: 14px; line-height: 1.6;}
		.Quiz{margin-bottom: 15px; border-bottom: 1px Black solid;}
		.Quiz > .Question{margin-bottom: 15px; font-weight: bold;}
		.Quiz > .Choice{margin-left: 15px;}
		.Quiz > .Choice > .Answer{margin-bottom: 5px;}
		.Quiz > .Choice > .Answer > label{cursor: pointer;}

		.QuizResultMessage{margin: auto; margin-top: 15px; width: 250px; border: 1px Blue solid; padding: 15px; text-align: center;}
		.QuizResultMessage > .Title{margin-bottom: 15px; border-bottom: 1px Blue solid; padding-bottom: 15px; color: Blue; font-weight: bold;}
	</style>
</head>

<body>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1761709717490255',
      xfbml      : true,
      version    : 'v2.8'
    });

    // ADD ADDITIONAL FACEBOOK CODE HERE
	function onLogin(response) {
	  if (response.status == 'connected') {
		FB.api('/me?fields=first_name', function(data) {
		  var welcomeBlock = document.getElementById('fb-welcome');
		  welcomeBlock.innerHTML = 'Hello, ' + data.first_name + '!';
		});
	  }
	}

	FB.getLoginStatus(function(response) {
	  // Check login status on load, and if the user is
	  // already logged in, go directly to the welcome message.
	  if (response.status == 'connected') {
		onLogin(response);
	  } else {
		// Otherwise, show Login dialog first.
		FB.login(function(response) {
		  onLogin(response);
		}, {scope: 'user_friends, email'});
	  }
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
<h1 id="fb-welcome"></h1>

	<form action="./" method="POST"><div class="Quiz">
			<div class="Question">Q.1: What is your preferred activity for hangout?</div>
			<div class="Choice"><div class="Answer"><label><input type="radio" name="Answer[0]" value="0" checked>Walk together</label></div><div class="Answer"><label><input type="radio" name="Answer[0]" value="1">Watch a movie together</label></div><div class="Answer"><label><input type="radio" name="Answer[0]" value="2">Go for a long drive</label></div></div>
		</div><div class="Quiz">
			<div class="Question">Q.2: What would be your favorite dish to share with your beloved one?</div>
			<div class="Choice"><div class="Answer"><label><input type="radio" name="Answer[1]" value="0" checked>Baked Salmon</label></div><div class="Answer"><label><input type="radio" name="Answer[1]" value="1">Cashew nut Salad</label></div><div class="Answer"><label><input type="radio" name="Answer[1]" value="2">Cheesy Pasta/Pizza</label></div></div>
		</div><div class="Quiz">
			<div class="Question">Q.3: What  is your favorite vacation plan with your valentine?</div>
			<div class="Choice"><div class="Answer"><label><input type="radio" name="Answer[2]" value="0" checked>Relaxing on beach</label></div><div class="Answer"><label><input type="radio" name="Answer[2]" value="1">Shopping items from your wish list</label></div><div class="Answer"><label><input type="radio" name="Answer[2]" value="2">Trekking hills and mountains</label></div></div>
		</div><div class="Quiz">
			<div class="Question">Q.4: What drink would you like to enjoy with your partner?</div>
			<div class="Choice"><div class="Answer"><label><input type="radio" name="Answer[3]" value="0" checked>Lemonade</label></div><div class="Answer"><label><input type="radio" name="Answer[3]" value="1">Milkshake</label></div><div class="Answer"><label><input type="radio" name="Answer[3]" value="2">Soft Drink</label></div></div>
		</div><div class="Quiz">
			<div class="Question">Q.5: What type of articles do you prefer reading with your partner?</div>
			<div class="Choice"><div class="Answer"><label><input type="radio" name="Answer[4]" value="0" checked>Fashion</label></div><div class="Answer"><label><input type="radio" name="Answer[4]" value="1">Technology</label></div><div class="Answer"><label><input type="radio" name="Answer[4]" value="2">Health & Lifestyle</label></div></div>
		</div><button name="btnSubmit" value="1">Submit</button></button>
	</form>

	<div
		class="fb-like"
		data-share="true"
		data-width="450"
		data-show-faces="true">
	</div>

</body>
</html>
