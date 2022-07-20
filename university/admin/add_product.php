<?php
session_start([
    'cookie_lifetime' => 3000,
]);

$_user_id = $_SESSION['id'] ?? 0;
$_user_name = $_SESSION['name'] ?? '';
if (!$_user_id) {
    header("Location: index.php");
    die();
}

include_once "inc/functions.php";
include_once 'inc/validation.php';

//Storing Image in File, $_Files['photo']
photoChecking('photo');



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
</head>
<body class="panel">
<div class="sidebar">
    <h4>Menu</h4>
    <ul class="menu">
        <li><a href="#" class="menu-item">Profile <?php echo "(".$_user_name.")"; ?></a></li>
        <br>
        <li><a href="admin.php" class="menu-item">All University</a></li>
        <li><a href="add_product.php" class="menu-item">Add New University</a></li>
        <li><a href="admin_user.php" class="menu-item">All Users</a></li>
        <!-- <li><a href="#" class="menu-item">Order List</a></li> -->
        <br>
        <li><a href="index.php">Logout</a></li>
    </ul>
</div>
<div class="container" id="main">

    <h1 class="maintitle">
        <i class="fas fa-store"></i> <br> Admin Dashboard
    </h1>

    <div class="wordsc helement" id="words">
        <div class="formc">
            <form name="myForm" onsubmit="return validateForm()" id="form01" method="post" action="tasks.php" enctype="multipart/form-data">
                <h3>Add University</h3>
                <fieldset>
                    <label for="name" >Name <span style="color: red;" id="valname">*</span></label>
                    <input type="text" placeholder="Full Name" id="valname" name="name" value="<?php echo $name; ?>">
                    <label for="definition">Description <span style="color: red;" id="valdefinition">*</span></label>
                    <input type="text" placeholder="Definition" id="definition" name="definition">
                    <label for="url">Url <span style="color: red;" id="valurl">*</span></label>
                    <input type="text" placeholder="url" id="url" name="url">
                   
                    <label style="color: red;" id="valisavailable"></label>


                    <label for="photo"></label>
                    <input type="file" name="photo" id="photo"> <br>
                    <input class="button-primary" type="submit" value="Submit">
                    <input type="hidden" name="action" id="action" value="addproduct">
                </fieldset>
            </form>
        </div>

    </div>
    <hr>
</div>


<script src="//code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="assets/js/script.js?1"></script>
</body>
</html>