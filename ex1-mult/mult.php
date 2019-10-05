<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

echo '<style>table, td, th{border-collapse:collapse; border:thin solid black; font-family: sans-serif;} td {text-align:center; vertical-align:middle;}</style>';
echo '<table>';
echo "<caption>Multiplication Tables</caption>";

echo '<tr><td></td>';
for($col = 1; $col <= 100; $col++) {
    echo '<th scope="col">', $col, '</th>';
}
echo '</tr>';

for($row = 1; $row <= 100; $row++)
{
    echo '<tr><th scope="row">', $row, '</th>';
    for($col = 1; $col <=100; $col++)
    {
        echo '<td>', ($col * $row), '</td>';
    }
    echo '</tr>';
}

echo '</table>';
?>
