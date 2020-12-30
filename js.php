<script language="javascript">
function _y(){
	var width_picture=document.getElementById('imgg').width;
	if (width_picture<800){
		document.getElementById('imgg').width = 1000;
	}
	else{
		document.getElementById('imgg').width = 350;
	}
}
</script>
	<img name="imgg" id='imgg' src="./img/example.jpg" onClick="javascript:_y"><br><br><br><br><br><br><br>
	<img name="zoom" id='zoom' src="./img/zoom.jpg" onClick='javascript:_y()' style="cursor:pointer">
	<form action='p3.php' method="post">
		<input name='fio' type='text' value='Имя' onClick="clear()" style="width:14%"><br>
		<input name='pwd' type='password' style="width:7%">
		<input type='submit' value='Отправить' style="cursor:pointer"><br>
	</form><br>
	<p><?php 
	if ($p){
		echo 'Привет, $n';
	}	
	?></p>