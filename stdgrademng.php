<?php

$std = [
    ["id" => 1, "name" => "John", "grades" => [85,70,90]],
    ["id" => 2, "name" => "Emily", "grades" => [55,75,95]],
    ["id" => 3, "name" => "Alexa", "grades" => [80,76,89]],
];


function calculateAvg($grades){
    return array_sum($grades)/ count($grades);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Grade Manager</title>
</head>

<style>
        h2{
            text-align: center;
        }
        .tbl{
            display: flex;
            justify-content: center;
            align-items: center;

        }

        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px 0;
            
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
<body>
<h2>Student Grade Manager</h2>


<div class="tbl">
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Grades</th>
        <th>Average</th>
    </tr>

    <?php foreach ($std as $student): ?>
        <tr>
            <td><?php echo $student["id"]; ?></td>
            <td><?php echo $student["name"]; ?></td>
            <td><?php echo implode(", ", $student["grades"]); ?></td>
            <td><?php echo (calculateAvg($student["grades"],2)); ?></td>
        </tr>
    <?php endforeach; ?>

</table>
</div>

</body>
</html>

