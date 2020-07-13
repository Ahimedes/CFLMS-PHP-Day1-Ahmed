<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Challenge</title>
</head>
<body>
<?php
$cars = array (
    "mercedes" => array
    (
        "model" => "GLC",
        "year" => "2019",
        "avaliable" => true,
        "img" => "<img src='img/mercedes.jpg' height=200 width=300>"
    ),
    "mazda" => array
    (
        "model" => "6 Limousine",
        "year" => "2020",
        "avaliable" => true,
        "img" => "<img src='img/mazda.jpg' height=200 width=300>"
    ),
    "bmw" => array
    (
        "model" => "5 Limousine",
        "year" => "2018",
        "avaliable" => true,
        "img" => "<img src='img/bmw.jpg' height=200 width=300>"
    ),
    "tesla" => array
    (
        "model" => "X",
        "year" => "2017",
        "avaliable" => true,
        "img" => "<img src='img/tesla.jpg' height=200 width=300>"
    )
);

foreach($cars as $offer)
{
echo $offer['model']."<br/>";
echo $offer['year']."<br/>";
echo $offer['img']."<br/>";
}

//Acilios solution
foreach( $cars as $name => $atribute){
    echo "The car name is {$name}<br>";
    foreach($atribute as $key=>$value){
        echo "{$key} {$value}<br>";
    }
}

?>
</body>
</html>