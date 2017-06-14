<h1>CONFIG NAME/BRAND GENERATOR</h1>
<head>
<link href="https://fonts.googleapis.com/css?family=Droid+Sans+Mono" rel="stylesheet"/>
<style>body{
    font-family: 'Droid Sans Mono', monospace;
}</style>
</head>
<?php
$default = array(
    "spalten" => 5,
    "a" => array(
        "&nbsp;&nbsp;&nbsp;&nbsp;AA&nbsp;&nbsp;&nbsp;&nbsp;",
        "&nbsp;&nbsp;&nbsp;A&nbsp;&nbsp;A&nbsp;&nbsp;&nbsp;",
        "&nbsp;&nbsp;AAAAAA&nbsp;&nbsp;",
        "&nbsp;A&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A&nbsp;",
        "A&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A"),
    "b" => array(
        "BBBBBBBB&nbsp;&nbsp;",
        "B&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BB&nbsp;",
        "BBBBBBBB&nbsp;&nbsp;",
        "B&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BB&nbsp;",
        "BBBBBBBB&nbsp;&nbsp;")
    );
/*
1234567890
BBBBBBBB
B      BB
BBBBBBBB
B      BB
BBBBBBBB
*/
$string = "baba";
$string = str_split($string);

echo "/*<br /><br />";
for($i=0;$i<$default["spalten"];$i++){
    foreach($string as $letter){
        echo $default[$letter][$i]."&nbsp;";
    }
    echo "<br />"; 
}
echo "<br /><br />*/";

    



?>