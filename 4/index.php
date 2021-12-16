<?php
include_once 'db.php';
if(isset($_POST['save']))
{	 
	 $id = $_POST['id'];
	 $name = $_POST['name'];
	 $age = $_POST['age'];
	 $username = $_POST['username'];
     $password = $_POST['password'];

	 $sql = "INSERT INTO users (univer_id,name,age,username,password)
	 VALUES ('$id','$name','$age','$username','$password')";

	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
        
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }

	 mysqli_close($conn);
}
        $a=1;
        $stmt = $conn2->prepare(
            "SELECT * FROM users");
        $stmt->execute();
        $users = $stmt->fetchAll();

        
        
?>

<!DOCTYPE html>
<html>
  <body>
	<form method="post" action="index.php">
		Name:<br>
		<input type="text" name="name">
		<br>
		ID:<br>
		<input type="text" name="id">
		<br>
		Age:<br>
		<input type="text" name="age">
		<br>
		User Name:<br>
		<input type="text" name="username">
        <br>
		Password:<br>
		<input type="password" name="password">
		<br><br>
		<input type="submit" name="save" value="submit">
	</form>


<table style="border: 1px solid black;">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>age</th>
        <th>User Name</th>
        <th>Password</th>
    </tr>
    <?php foreach ($users as $val) { ?>
        <tr>
                <td><?php echo $val['univer_id']; ?></td>
                <td><?php echo $val['name']; ?></td>
                <td><?php echo $val['age']; ?></td>
                <td><?php echo $val['username']; ?></td>
                <td><?php echo $val['password']; ?></td>
                <td><button><a href="delete.php?i=<?php echo $val['id']; ?>" >Delete</a></button></td>
        </tr>
    <?php } ?>
    
</table>
</body>
</html>