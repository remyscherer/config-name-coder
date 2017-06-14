<h1>CONFIG NAME/BRAND GENERATOR</h1>
<head>
<link href="https://fonts.googleapis.com/css?family=Droid+Sans+Mono" rel="stylesheet"/>
<style>body{
    font-family: 'Droid Sans Mono', monospace;
}</style>
</head>
<?php

@include("fonts/default.php");

$string = "baba";
$string = str_split($string);

echo "/*<br /><br />";
for($i=0;$i<$font["spalten"];$i++){
    foreach($string as $letter){
        echo $font[$letter][$i]."&nbsp;";
    }
    echo "<br />"; 
}
echo "<br /><br />*/";

    



?>