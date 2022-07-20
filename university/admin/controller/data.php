<?php
if (isset($_POST["id"])) {
    $connect = mysqli_connect("localhost", "root", "", "universities");
    $query = "SELECT * FROM users WHERE id = '" . $_POST["id"] . "'";
    $result = mysqli_query($connect, $query);
    while ($row = mysqli_fetch_array($result)) {
        $data["name"] = $row["name"];
        $data["address"] = $row["address"];
        $data["email"] = $row["email"];
        $data["phone"] = $row["phone"];
    }

    echo json_encode($data);
}
