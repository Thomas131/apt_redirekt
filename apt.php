<?php
if(isset($_GET["name"]) || $_GET["name"] == ""){
	header('Location: apt:'.$_GET["name"]); exit;
}
?>
<html>
<body>
Error: The URL should be like this: ?name=gedit
</body>
</html>
