<?php
$md5 = "Not computed";
if ( isset($_GET['encode']) ) {
    $md5 = hash('md5', $_GET['encode']);
}
?>
<!DOCTYPE html>
<head><title>Jack Marshall MD5</title></head>
<body style="font-family: sans-serif">
<h1>MD5 Maker</h1>
<p>This application takes any value and computes a MD5 hash</p>
<p>MD5: <?= htmlentities($md5); ?></p>
<form>
<input type="text" name="encode" size="40" />
<input type="submit" value="Compute MD5"/>
</form>
<p><a href="md5.php">Reset</a></p>
<p><a href="index.php">Back to Cracking</a></p>
</body>
</html>