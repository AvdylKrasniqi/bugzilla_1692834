<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
header("Content-Type: image/png");
$im = @imagecreate(110, 20)
    or die("Cannot Initialize new GD image stream");
$background_color = imagecolorallocate($im, 0, 0, 0);
$text_color = imagecolorallocate($im, 233, 14, 91);
imagestring($im, 1, 5, 5,  "Try saving me", $text_color);
imagepng($im);
imagedestroy($im);
}
?>
<html>
<head>
<title>Bugzilla</title>
</head>
<body>
<form method="POST">
<p>Mozilla Firefox cannot download files if they are returned on POST request!</p>
<p>Try clickin the button, then try Saving the image</p><br/>
<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=1692834">See the bug here</a><br/>
<input type="submit" value="Click me">
</form>
</body>
</html>
