<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Exercise6</title>
</head>
<body>
<?php
$chars = array (
    "gandalf" => array
    (
        "occupation" => "mage",
        "species" => "ainur",
        "home" => "valinor"
    ),
    "aragorn" => array
    (
        "occupation" => "ranger, king of the reunited kingdom",
        "species" => "dúnedain",
        "home" => "minas tirith"
    ),
    "sauron" => array
    (
        "occupation" => "lord of the rings",
        "species" => "maia",
        "home" => "mordor"
    ),
    "frodo" => array
    (
        "occupation" => "bearer of the one ring",
        "species" => "hobbit",
        "home" => "shire"
    )
);
echo "Gandalf's occupation : ";
echo $chars['gandalf']['occupation'] . "<br/>" ;
echo "Aragorns's occupation : ";
echo $chars['aragorn']['occupation'] . "<br/>" ;
echo "Frodo's occupation : ";
echo $chars['frodo']['occupation'] . "<br/>" ;

?>
</body>
</html>