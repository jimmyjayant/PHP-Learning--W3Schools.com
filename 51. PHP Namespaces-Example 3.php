<?php
namespace Html;
include "51. PHP Namespaces-Html.php";

$table = new Table();
$table->title = "My Table";
$table->numRows = 5;

$row = new Row();
$row->numCells = 3;
?>

<html>
<body>
<?php
$table->message();
?>

<?php
$row->message();
?>
</body>
</html>