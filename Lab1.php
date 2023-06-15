<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        th{
            font-weight: bold;
            text-align: center;
            background-color: darkgray;
        }
        td{
            background-color: lightgray;
        }
    </style>
</head>
<body>
    <div>Cars:</div>
    <?
    $cars =[
        'BMW'=>[
            'model'=>'M5',
            'price'=>30000,
            'year'=>2022
        ],
        'Toyota'=>[
            'model'=>'Camry',
            'price'=>15000,
            'year'=>2019
        ],
        'Skoda'=>[
            'model'=>'Octavia',
            'price'=>7000,
            'year'=>2015
        ]
        ];
    $num=0;
    foreach($cars as $key=>$car){
        echo "<div>Car #".(++$num).":</div>";
        echo "<div>model - ".$car["model"].", price - ".$car["price"]."$, year - ".$car["year"]."</div>";
    }
    ?>
    <hr>
    <div>Example 2</div>
    <?
    $cols = [1,2,3,4,5,6,7,8,9,10];
    $rows = [1,2,3,4,5,6,7,8,9,10];
    echo "<table><thead><th>".$rows[0].
    "</th><th>".$rows[1].
    "</th><th>".$rows[2].
    "</th><th>".$rows[3].
    "</th><th>".$rows[4].
    "</th><th>".$rows[5].
    "</th><th>".$rows[6].
    "</th><th>".$rows[7].
    "</th><th>".$rows[8].
    "</th><th>".$rows[9].
    "</th></thead>";
    // $num = 1;
    echo "<tbody>";
    for($i=1; $i<10;$i++){
        echo "<tr><th>".$cols[$i]."</th>".
        "<td>".($cols[$i]*$rows[1]).
        "</td>"."<td>".($cols[$i]*$rows[2]).
        "</td>"."<td>".($cols[$i]*$rows[3]).
        "</td>"."<td>".($cols[$i]*$rows[4]).
        "</td>"."<td>".($cols[$i]*$rows[5]).
        "</td>"."<td>".($cols[$i]*$rows[6]).
        "</td>"."<td>".($cols[$i]*$rows[7]).
        "</td>"."<td>".($cols[$i]*$rows[8]).
        "</td>"."<td>".($cols[$i]*$rows[9]).
        "</td></tr>";
    }
    ?>
</body>
</html>