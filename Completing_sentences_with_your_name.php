<!DOCTYPE html>

<html>
	<body>
		<form id="f" name="f" method="post" action="">
			ENTER NAME<input type="text" name="t" id="t" onkeyup="loadDoc(this.value)">
			<input type="submit" name="sub" id="sub" value="SUBMIT">
		</form>
		
		
		<div id='1'>
		</div>

	</body>

</html>


<script>
function loadDoc(s)
{
	if(s.length==0){
		document.getElementById('1').innerHTML = "";
		}
	else{
	//s = document.getElementById('t').value;
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function(){
		
				if(this.readyState==4 && this.status==200){
					document.getElementById('1').innerHTML = 	this.responseText;
				}
			};
		
		xhttp.open("GET","name_suggestions.php?t="+s,true);
		xhttp.send();
	}
}
	



</script>
