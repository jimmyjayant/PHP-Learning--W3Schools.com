<html>
<head>
    <style>
    table, th, td {
        border:0.1rem solid black;
        border-collapse:collapse;
    }

    th, td {
        padding:0.5rem;
    }
    </style>
</head>
<body>

    <table>
        <tr>
            <th>Filter Name</th>
            <th>Filter ID</th>
        </tr>
<?php
foreach(filter_list() as $id => $filter) {
    echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
}
?>
    </table>

</body>
</html>
