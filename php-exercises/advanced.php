<html>
<head>
<meta charset="utf-8">
<title>Advanced Exercise</title>
</head>
<body>
 <?php  

 function convert()
 {
    $f = 50;
    $c = ($f - 32) * (5/9);
    echo "The temperature is $c C°. <br>";
    if ($c <= 5)
    echo "It's very cold <br> <img src='img/coldaf.png' height=80 width=80>";
    elseif ($c > 5 and $c <= 10)
    echo "It's cold <br> <img src='img/cold.png' height=80 width=80>";
    elseif ($c > 10 and $c <= 15)
    echo "It's pleasant <br> <img src='img/pleasant.png' height=80 width=80>";
    elseif ($c > 15 and $c <= 20)
    echo "It's warm <br> <img src='img/warm.png' height=80 width=80>";
    elseif ($c > 20)
    echo "It's hot <br> <img src='img/hot.png' height=80 width=80>";
    else
    echo "Enter a valid temperature in Fahrenheit";
}
convert();

 ?>
</body>
</html>