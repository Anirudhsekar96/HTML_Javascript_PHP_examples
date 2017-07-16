<?php
	echo "common students are"."<br>";
	$fp=fopen("music.txt","r");
	$fp2=fopen("sports.txt","r");

	$q=file("music.txt");
	$r=file("sports.txt");
	for($i=0;$i<sizeof($q);$i++)
	{
		for($j=0;$j<sizeof($r);$j++)
		{
			if($q[$i]==$r[$j])
			{
				print_r($r[$j]);
			}
		
		}
	}

	fclose($fp);
	fclose($fp2);

?>
