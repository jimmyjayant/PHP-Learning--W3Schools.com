<?php
$cookie_name1 = "user";
$cookie_value1 = "Jimmy Jayant";
setcookie($cookie_name1, $cookie_value1, time() + (86400 * 30), "/");
?>

<?php
// set the expiration date to one hour ago 
setcookie($cookie_name1, "", time() - 3600);
?>

<html>
<body>

<?php
echo "Cookie 'user' is deleted.";
?>
</body>
</html>