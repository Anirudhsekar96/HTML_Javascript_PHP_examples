<!doctype html>
<html>
	<body>
		<form action=" " method="post">
			id:<input type="text" name="n">
			name:<input type="text" name="c1">
			quantity:<input type="text" name="c2">

			<input type="submit" name="s">

		</form>
	</body>
</html>

<?php
	//$total=array();
	if(isset($_POST['s']))
	{
		$a=$_POST['n'];
		$b=$_POST['c1'];
		$c=$_POST['c2'];
		$c=$c.PHP_EOL;
		//$e=$b+$c+$d;
		$fp=fopen("items.txt","a");
		fprintf($fp,"%s\t%s\t%s\t",$a,$b,$c);
		fclose($fp);
	}
?>
