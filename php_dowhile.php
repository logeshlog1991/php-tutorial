<?php
if(isset($_GET['name'])&&!empty($_GET['name'])){
	$a = $_GET['name'];
	$b = 0;
	do{
		echo "$b,hai this is do while<br>";
		$b++;		
	}while($b<=$a);
}else{
	echo "pls enter the field";
}
?>
<html>
<head>
<script type="text/javascript">
function xml(value){
	var xmlHttp = new XMLHttpRequest();
	xmlHttp.onreadystatechange = function(){		
		if(xmlHttp.readyState == 4 && xmlHttp.status == 200){
			document.getElementById("msg").innerHTML = xmlHttp.responseText;			
		}
	}
	xmlHttp.open("GET","php_dowhile.php?name="+value,true);
	xmlHttp.send();
}
</script>
</head>
<body>
<b>While Loop:</b></br></br>
<input type="text" name="name" id="txt" onkeyup="xml(this.value)">
<p id="msg"></p>
</body>
</html>