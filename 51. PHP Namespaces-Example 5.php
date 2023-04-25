<?php
include "51. PHP Namespaces-Html.php";
use Html\Table as T;
$table = new T();
$table->title = "My Table";
$table->numRows = 5;
?>

<html>
<body>
<?php
$table->message(); 
?>
</body>
</html>