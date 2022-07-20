<?php
session_start([
    'cookie_lifetime' => 300,
]);

include_once 'inc/functions.php';

$_user_id = $_SESSION['id'] ?? 0;
$_user_name = $_SESSION['name'] ?? '';
if (!$_user_id) {
    header("Location: index.php");
    die();
}

$connect = mysqli_connect("localhost", "root", "", "university");
$query = "SELECT * FROM users ORDER BY name ASC";
$result = mysqli_query($connect, $query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
    <link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

</head>
<body class="panel">
<div class="sidebar">
    <h4>Menu</h4>
    <ul class="menu">
        <li><a href="#" class="menu-item">Profile <?php echo "(" . $_user_name . ")"; ?></a></li>
        <br>
        <li><a href="admin.php" class="menu-item">All University</a></li>
        <li><a href="add_product.php" class="menu-item">Add New University</a></li>
        <li><a href="admin_user.php" class="menu-item">All Users</a></li>
        <br>
        <li><a href="index.php">Logout</a></li>
    </ul>
</div>
<div class="container" id="main">

    <h1 class="maintitle">
        <i class="fas fa-store"></i> <br> Admin Dashboard
    </h1>
    <div class="wordsc helement" id="users">
        <div class="row">
            <div class="column column-50">
                <div class="alpha">
                    <select name="users_list" id="users_list">
                        <option value="">Select User</option>
                        <?php
                        while ($row = mysqli_fetch_array($result)) {
                            echo '<option value="' . $row["id"] . '">' . $row["name"] . '</option>';
                        }
                        ?>
                    </select>

                </div>
            </div>

            <div class="column column-30">
                <button class="float-right" name="search" id="search" value="search">Search</button>
            </div>

        </div>
    </div>

    <hr>

    <table class="words" id="users_details" style="display:none">
        <thead>
        <tr>
            <th width="20%">Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
        </tr>
        </thead>

        <tbody>

        <tr>
            <td><span id="users_name"></span></td>
            <td><span id="users_email"></span></td>
            <td><span id="users_phone"></span></td>
            <td><span id="users_address"></span></td>
            <td><a class="button button-outline" href="#">view</a></td>
        </tr>

        </tbody>
    </table>
</div>


<script>
    $(document).ready(function () {
        $('#search').click(function () {
            var id = $('#users_list').val();


            if (id != '') {
                $.ajax({
                    url: "controller/data.php",
                    method: "POST",
                    data: {id: id},
                    dataType: "JSON",
                    success: function (data) {
                        $('#users_details').css("display", "block");
                        $('#users_name').text(data.name);
                        $('#users_address').text(data.address);
                        $('#users_phone  ').text(data.phone);
                        $('#users_email').text(data.email);
                    }
                })
            } else {
                alert("Please Select Users");
                $('#users_details').css("display", "none");
            }
        });
    });
</script>
</body>
</html>