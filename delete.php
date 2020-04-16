<?php include 'header.php';
	if (isset($_POST['deletebtn'])){
		include 'config.php';
		$stu_id = $_POST['sid'];

		$sql = "DELETE FROM student WHERE sid = {$stu_id}";
		$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

		header("location: http://localhost/crudphp/index.php");

		mysqli_close($conn);
	}
 ?>

<div id="main-content">
	<h2>Delete Record</h2>
	<form action="<?php echo $_SERVER['PHP_SELF'];?>" class="post-form" method="post">
		<div class="form-group">
			<label>Id</label>
			<input type="text" name="sid">
		</div>
		<input type="submit" class="submit" name="deletebtn" value="Delete">
	</form>
</div>
</div>
</body>
</html>