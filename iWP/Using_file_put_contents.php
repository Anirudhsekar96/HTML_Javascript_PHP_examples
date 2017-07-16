<!doctype html>
<html>
	<body>
		<form action=" " method="post">
			music club name:<input type="text" name="m">
			sports club name:<input type="text" name="s">
			<input type="submit" name="sub">
	
		</form>
	</body>
</html>

<?php

	$fp=fopen("music.txt","a");
	$fp2=fopen("sports.txt","a");

	if(isset($_POST['sub']))
	{
		$a=$_POST['m'].PHP_EOL;
		$b=$_POST['s'].PHP_EOL;
	
		file_put_contents("music.txt",$a,FILE_APPEND);
		file_put_contents("sports.txt",$b,FILE_APPEND);
	
	}

	fclose($fp);
	fclose($fp2);

?>
