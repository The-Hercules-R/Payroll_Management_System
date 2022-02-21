<?php
include 'connecttion.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $sql = "SELECT * FROM  `add_employee` WHERE `id` = $id ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        $arr = [];
        while ($row = $result->fetch_assoc()) {
            array_push($arr, $row);
        }
        print(json_encode($arr));
    } else {
        echo "0 results";
    }
}
