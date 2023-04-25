<?php
include "51. PHP Namespaces-Html.php";

use Html as H;
$table = new H\Table();
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