c<html>
<head>
<title>INDIAN CRICKET PLAYERS</title>
<style>
table{
width:50%;
border-collapse:collapse;
margin:20px auto;
}
th,td{
padding:10px;
text-align:center;
border:1px solid black;
}
th{
backgroud-color:lightgrey;
}
</style>
</head>
<body>
<h2 style="text-aling:center;"><center>LIST OF INDIAN CRICKET PLAYERS</center></h2>
<?php
$players=array(
"VIRAT KOHLI",
"ROHIT SHARMA",
"SACHIN TENDULKAR",
"MS DHONI"
);
echo"<table>";
echo"<tr><th>S.NO</th><th>players name</th></tr>";
foreach($players as $x=>$player){
echo"<tr><td>".($x+1)."</td><td>".$player."</td></tr>";
}
echo"</table>";
?>
</body>
</html>




