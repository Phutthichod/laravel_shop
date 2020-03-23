<?php
function showTable(array $header, array $data){
    echo "<table class='table' width=\"60%\" style=\"text-align: center;  margin:auto\">";
    echo "<thead class='thead-light'>";
    echo "<tr>";
    foreach ($header as $h){
        echo "<th>$h</th>";
    }
    echo "</tr>";
    echo "</thead>";
    echo " <tbody>";
    foreach ($data as $row) {
        echo "<tr>";
        foreach ($row as $col){
           echo "<td >$col</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
}
?>
