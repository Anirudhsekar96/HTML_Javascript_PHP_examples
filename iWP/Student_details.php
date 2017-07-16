<!doctype html>
<html>
	<body>
		<form action=" " method="post">
			name:<input type="text" name="n">
			cat1:<input type="text" name="c1">
			cat2:<input type="text" name="c2">
			pbl:<input type="text" name="pbl">
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
		$d=$_POST['pbl'];
		$d=$d.PHP_EOL;
		//$e=$b+$c+$d;
		$fp=fopen("marks.txt","a");
		fprintf($fp,"%s\t%s\t%s\t%s\t",$a,$b,$c,$d);
		fclose($fp);

	}


	$total=array();
	$i=0;
	$index=array();
	$fp=fopen("marks.txt","r");

	while(!feof($fp))
	{
		$k=fscanf($fp,"%s\t%s\t%s\t%s\t");
		list($u,$v,$w,$x)=$k;
		$t=$v+$w+$x;
		$total[$i]=$t;
		$index[$i]=$i;
	}

	for($i=0;$i<sizeof($total)-1;$i++)
	{
		$k=$i;
		$min=$total[$k];

		for($j=$i+1;$j<sizeof($total);$j++)
		{
			if($total[$j]<$min)
			{
				$min=$total[$j];
				$k=$j;
		
		
			}
	
		}
		
		$temp=$total[$i];
		$total[$i]=$total[$k];
		$total[$k]=$temp;
		$temp=$index[$i];
		$index[$i]=$index[$k];
		$index[$k]=$temp;
	}

	fclose($fp);
	$fp=fopen("marks.txt","r");
	$f=file("marks.txt");
	$f2=fopen("topper.txt","a");
	
	for($q=0;$q<5;$q++)
	{
	
		file_put_contents("topper.txt",$f[$q],FILE_APPEND);
	}


?>
