<!doctype html>
<html>
	<body>
		<form action=" " method="post">
			user input id:<input type="text" name="uid">
			<input type="submit" name="s">

		</form>
	</body>
</html>

<?php
	$fp=fopen("items.txt","r");
	
	if(isset($_POST['s']))
	{
		$t=0;
		$d=$_POST['uid'];
		$x=file("items.txt");

		while(!feof($fp))
		{
			$k=fscanf($fp,"%s\t%s\t%s\t");
			list($u,$v,$w)=$k;
			
			if($u==$d)
			{
				print_r($x[$t]);
			}
			
			$t++;


		}
	}

	fclose($fp);

?>
