<?php
if(isset($_GET["name"]) && $_GET["name"] != ""){
	header('Location: apt:'.$_GET["name"]);
	if(isset($_SERVER['HTTP_REFERER'])) { header("Location: " . $_SERVER['HTTP_REFERER']); exit; } ?>
	<script>
			if(history.length != 1){
			history.back();
			}
	</script>
<?php
}else{
?>
	<html>
	<body>
	Error: The URL should be like this: ?name=gedit
	</body>
	</html>
<?php } ?>
