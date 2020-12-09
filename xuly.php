<?php
include('./db/ketnoi.php');
?>
<?php
    if (isset($_POST['gui'])) {
        $message = $_POST['message'];
        $sql_insert = mysqli_query($con, "INSERT INTO DQyHCbSghF(tinnhan) value('$message')");
	}
		header('Location: index.php');
?>