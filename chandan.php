<?php
    $b = array(
        array("Lalit","28","lucknow"),
        array("Sachin","25","lakhimpur"),
        array("Shrey","20","ghazibad"),
        array("kashish","22","Noida")
    );

    echo "<table border=1>";
    
    for ($i = 0; $i < count($b); $i++) {
        echo "<tr>";
        
        for ($j = 0; $j < count($b[$i]); $j++) {
            echo "<td>";
            echo $b[$i][$j] . "&nbsp;";
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
?>