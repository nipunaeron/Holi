<table border="1">
<style>
th,td
{
    border-style: dashed;
}
</style>
<thead>
<tr>
    <th>enrollment</th>
    <th>name</th>
    <th>age</th>
    <th>course</th>
    <th>branch</th>
    <th>contact</th>
    <th>email</th>
    <th>Edit</th>
    <th>Delete</th>
</tr>    
</thead>
<tbody>

<?php
include('connection.php');
?>

<?php
$sql = "SELECT * FROM `student`";
$result = mysqli_query($conn, $sql);
?>

<?php
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
?>
    <tr>
        <td><?php echo $row['enrollment']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['age']; ?></td>
        <td><?php echo $row['course']; ?></td>
        <td><?php echo $row['branch']; ?></td>
        <td><?php echo $row['contact']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><a href="edit.php?id=<?php echo $row['enrollment']; ?>">Edit</a></td>
        <td><a href="delete.php">Delete</a></td>
    </tr>  
<?php    }
}
?>
</tbody>
</table>