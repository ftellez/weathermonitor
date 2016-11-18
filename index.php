<?php
$conn = mysqli_connect('localhost', 'u278220770_sens', 'D33qsoG96z', 'u278220770_proy'); //The Blank string is the password

$query = "SELECT data FROM Prueba"; //You don't need a ; like you do in SQL
$result= mysqli_query($conn,$query);

echo "<table>"; // start a table tag in the HTML

while($row = mysqli_fetch_assoc($result)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['data'] . "</td></tr>" ;  //$row['index'] the index here is a field name
}

echo "</table>"; //Close the table in HTML


echo "this index is not real";
?>