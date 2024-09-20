<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>พุฒิเกียรติ-610-28</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        table {font-family: Arial, sans-serif; border-collapse: collapse; width: 100%; max-width: 1200px;}
        td, th {border: 1px solid #000000; text-align: left; padding: 8px; }
        table.center1 {margin: 0 auto;}
        body {display: flex; justify-content: center; align-items: center; margin: 0; }
    </style>
</head>
<body class="p-4">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <?php
        $host = "localhost";
        $username = "root";
        $password = "";
        $DB = "student";
        $conn = mysqli_connect($host, $username, $password, $DB);
        $sql = "SELECT * FROM student ORDER BY Student_level ASC";
        $result = $conn->query($sql);
        $order = 1;
        if ($result->num_rows > 0) {  
            echo "<table border='1'>
                <tr>
                    <th>ลำดับ</th>
                    <th>เลขประจำตัว</th>
                    <th>ชื่อนามสกุล</th>
                    <th>ระดับชั้น</th>
                    <th>Email</th>
                    <th>Username</th>
                </tr>";
        }
    ?>
    <?php while($row = $result->fetch_assoc()) {?>
        <tr>
            <td><?php echo $order++?></td>
            <td><?php echo $row["Student_id"]?></td>
            <td><?php echo $row["First_name"]." ".$row["Last_name"]?></td>
            <td><?php echo "ม.".$row["Student_level"]."/".$row["Class_id"]?></td>
            <td><?php echo $row["Email"]?></td>
            <td><?php echo $row["User_name"]?></td>
        </tr>
    <?php }?>
</body>
</html>
