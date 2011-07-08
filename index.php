<!DOCTYPE html>
<!--
               _      
  ___ ___   __| | ___ 
 / __/ _ \ / _` |/ _ \
| (_| (_) | (_| |  __/
 \___\___/ \__,_|\___|


1st quarter 2012, Auckland, NZ.
A conference all about code.
By developers for developers. 
Watch this space...

-->
<html>
<head>
<link href="/style.css" rel="stylesheet" type="text/css" />
<title>{code}</title>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-258894-6']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>
<h1>{code:2012}</h1>
<section class="home" id="blurb">
<p>Why come to <span class="code">{code}</span>?</p>
<ol>
		<li><span class="code">{code}</span> is a conference about designing and developing software.</li>
		<li><span class="code">{code}</span> is focused on two things: mind-bending content and buzzing corridor conversations, and will have a schedule that accommodates both.</li>
		<li>Every <span class="code">{code}</span> session will be technology focused, and all technologies are welcome.</li>
		<li><span class="code">{code}</span> is a community event - it aims to be accessible and affordable for all.</li>
		<li><span class="code">{code}</span> will be held in Auckland, New Zealand, sometime in Q1 2012.</li>
		<li><span class="code">{code}</span> is the brainchild of a couple of code monkeys with an insatiable passion to learn more. We think there's nothing worse than developers using code they don't understand.</li>
</ol>
</section>
<section class="home" id="signup">
<p><strong>Subscribe to get updates and information via email:</strong></p>
<form id="signup" action="<?=$_SERVER['PHP_SELF']; ?>" method="get">
	<ol>
		<li><label for="email" id="address-label">Email Address</label>
			<input type="text" name="email" id="email" />
			<input type="submit" name="submit" value="Submit" class="btn" alt="Join" /></li>
		<li><span id="response"><? require_once('inc/store-address.php'); if($_GET['submit']){ echo storeAddress(); } ?>
		  </span></li>
		<li><span id="no-spam">Entering your address will add you to our MailChimp email list. We promise not to spam you and will not sell your information to Rupert Murdoch.</span></li>
	</ol>
</form>      
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/mailing-list.js"></script>
</section>

<section class="home">
//TODO: logo, rounded corners</br>
//What can we say? We're developers not designers.
</section>

</body>
</html>
