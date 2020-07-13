<html>
<head>
<meta charset="utf-8">
<title>Exercise3</title>
</head>
<body>
 <?php  
 $d = date("D");
 if ($d == "Mon")
 echo "Today is Monday!";
 elseif ($d == "Tue")
 echo "Today is Tuesday!";
 elseif ($d == "Wed")
 echo "Today is Wednesday!";
 elseif ($d == "Thu")
 echo "Today is Thursday!";
 elseif ($d == "Fr")
 echo "Today is Friday!";
 elseif ($d == "Sat")
 echo "Today is Saturday";
 elseif ($d == "Sun")
 echo "Today is Sunday!";
 else 
 echo "Please enter a valid date!"
 ?>
</body>
</html>