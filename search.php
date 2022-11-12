<?php
error_reporting(0);
$conn = mysqli_connect("localhost", "root", "", "form");
if (count($_POST) > 0) {
    $roll_no = $_POST['roll_no'];
    $result = mysqli_query($conn, "SELECT * FROM random where name='$roll_no' ");
}
?>
<!DOCTYPE html>
<html>

<head>
    <title> Retrive data</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">email</th>
            <th scope="col">gender</th>
            <th scope="col">Date Added</th>

        </tr>
        <?php
        $i = 0;
        while ($row = mysqli_fetch_array($result)) {
        ?>
            <tr>
                
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['email'] . "@gmail.com"; ?></td>
                <td><?php echo $row['gender']; ?></td>
                <td><?php echo $row['date']; ?></td>
            </tr>
        <?php
            $i++;
        }
        ?>
    </table>
</body>

</html>