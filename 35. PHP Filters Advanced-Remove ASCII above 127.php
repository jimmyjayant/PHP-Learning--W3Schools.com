<!DOCTYPE html>
<html>
<body>

<?php
// Variable to check
$str = "<h1>Hello WorldÆØÅ</h1>";
echo $str;
// Remove HTML tags and all characters with ASCII value > 127
$newstr = filter_var($str,FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
echo "After sanitizing string and removing characters above ASCII value 127 we get = ";
echo $newstr;
?>

</body>
</html>