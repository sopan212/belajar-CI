<?php
/*$x = 1;

while($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
} 

$x=1;
do {
	echo "The number is: $x <br>";
	$x++;
} while ($x <= 5);

echo "<select>";
for ($x= 1986; $x <= 2019; $x++){
	echo '<option value="'.$x.'">'.$x.'</option>';

}
echo "</select>";*/
$colors = array("red","green","blue","yellow");
echo "<select>";
foreach ($colors as $key => $value){
	echo '<option value="' .$value.'">'.$value.'-'.$key.
	'</option>';
}
echo "</select>";
?>
