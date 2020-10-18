<?php header('X-XSS-Protection: 0'); ?>
<!DOCTYPE html>
<html>


	<head>
		<title>Create trackable Urls!</title>
		<style> textarea { width: 300px; height: 15px; }</style>
	</head>
	<body>
		<div>
			<form>
			    <p>Your Url:</p>
				<textarea name="url"><?=htmlspecialchars($_GET['url'], ENT_QUOTES,'UTF-8')?></textarea>
				<br />
				<p>Your E-Mail:</p>
				<textarea name="who"><?=htmlspecialchars($_GET['who'], ENT_QUOTES,'UTF-8')?></textarea>
				<br /><input type="submit" value="Create"></input>
				<br />
				<p>Your url: </p>
				<?php 
				if($_GET['url'] != '' && $_GET['who'] != ''){
				echo "<p><a href='[YOUR SITE AND TRACKER.PHP LOCATION]?url=".$_GET['url'],"&who=".$_GET['who']."'>[YOUR SITE AND TRACKER.PHP LOCATION]?url=".$_GET['url'],"&who=".$_GET['who']."</a>";
				echo "Consider using a url shortner (like <a href='[YOUR SITE AND TRACKER.PHP LOCATION]?url=http://bit.ly&who=createpage@local'>bit.ly</a> or <a href='[YOUR SITE AND TRACKER.PHP LOCATION]?url=http://cutt.ly&who=createpage@local'>cutt.ly</a>) to shorten this.</p>";
				}
				?>
			</form>
		</div>
	</body>
</html>
