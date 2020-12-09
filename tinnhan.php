<?php
include('./db/ketnoi.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tin Nhắn</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="col-md-12">
                <h4>Liệt kê tin nhắn</h4>
                <?php
                    $sql_select = mysqli_query($con,"SELECT * FROM tbl_totinh ORDER BY id DESC");
                ?>
                <table class="table table-bordered">
                    <tr>
                        <th>YES</th>
                        <th>Nội dung tin nhắn</th>
                    </tr>
                    <?php
                     $i = 0;
                      while($row_category = mysqli_fetch_array($sql_select)){  
                        $i++;
                    ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $row_category['tinnhan'] ?></td>
                        </tr>
              
                <?php
                    }
                    ?>
        </table>
            </div>
        </div>
</body>
</html>