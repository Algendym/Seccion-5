<?php 
include("db-config.php");


$res = mysqli_query($conn,"SELECT * FROM users");

?>

<center>
<form method="post">

<table>
    <tr>
        <th>name</th>
        <th>phone</th>
        <th>email</th>

    </tr>

<?php


while ($row = mysqli_fetch_array($res)) {
    

    echo "<tr>";
    echo "<td>" . $row['username'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['phone_number'] . "</td>";
    echo "<td><a class='btn btn-danger btn-sm' href='delete.php ? id =$row[id]'> Delete </a>
    <a class='btn btn-danger btn-sm' href='update.php ? id =$row[id]'> Update </a>
          </td>";
    echo "</tr>";



}


?>




</table>


</form>
</center>