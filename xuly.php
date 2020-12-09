<?php
include('./db/ketnoi.php');
?>
<?php
    if (isset($_POST['gui'])) {
        $message = $_POST['message'];
        $sql_insert = mysqli_query($con, "INSERT INTO sql9381070(tinnhan) value('$message')");
	}
		header('Location: index.php');
?>
