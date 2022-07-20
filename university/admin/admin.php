<?php
session_start([
    'cookie_lifetime' => 30000,
]);

include_once 'inc/functions.php';

$_user_id = $_SESSION['id'] ?? 0;

//setting cookie
setcookie('userIdCookie', $_user_id, time() + 3000);

$_user_name = $_SESSION['name'] ?? '';
if (!$_user_id) {
    header("Location: index.php");
    die();
}
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
        <li><a href="#" class="menu-item">Profile <?php echo "(" . $_user_name . ")"; ?></a></li>
        <br>
        <li><a href="admin.php" class="menu-item" data-target="words">All University</a></li>
        <li><a href="add_product.php" class="menu-item">Add New University</a></li>
        <li><a href="admin_user.php" class="menu-item" data-target="users">All Users</a></li>
        <!-- <li><a href="#" class="menu-item">Order List</a></li> -->
        <br>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</div>

<div class="container" id="main">
    <h1 class="maintitle">
        <i class="fas fa-store"></i> <br> Admin Dashboard
    </h1>

    <div class="wordsc helement" id="words">
        <div class="row">
            <div class="column column-50">
                <div class="alpha">
                    <select id="alpha">
                        <option value="all">All Catagory</option>
                        <option value="e">Top</option>
                        <option value="g">Middle</option>
                        <option value="h">Low</option>
                    </select>

                </div>
            </div>

            <div class="column column-50">
                <form action="" method="POST">
                    <!--                    <button class="float-right" name="submit" value="submit">Search</button>-->
                    <input type="text" name="search" id="myInput" onkeyup="productSearch()" class="float-right"
                           style="width: 50%; margin-right:20px;"
                           placeholder="Search">
                </form>
            </div>
        </div>
    </div>
    <hr>

    <table class="words" id="myTable">
        <thead>
        <tr>
            <th>#Id</th>
            <th width="20%">Name</th>
            <th>Description</th>
            <!-- <th>Contact No.</th> -->
            <!-- <th>Contact Email</th> -->
            <th>Url</th>
            <th>Logo</th>
            <th>Department</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php

        // $words = getProducts();
        $words = getUniversity();
        // $dpt = getDepartments(); 

        // print_r($dpt);


            
        ?>
        <!-- <td><select name="" id="" class="form-control">
                        <option value="">Choose...</option>
                        <?php foreach($dpt as $row){ ?>
                        <option value=""><?php echo $row['name']; ?></option>
                        <?php } ?>
                    </select></td> -->
        <?php
            

        if (count($words) > 0) {
            $length = count($words);
            for ($i = 0; $i < $length; $i++) {
                ?>
                <tr>
                    <td><?php echo $words[$i]['id']; ?></td>
                    <td><?php echo $words[$i]['name']; ?></td>
                    <td><?php echo $words[$i]['description']; ?></td>
                    <td><?php echo $words[$i]['url']; ?></td>
                    <!-- <td><?php echo $words[$i]['contact_email']; ?></td> -->
                    <td><img src="../<?php echo $words[$i]['logo']; ?>" height="200" width="200"></td>



                    <!-- <td class="status"><?php echo $words[$i]['department']; ?></td> -->
                    <td><a class="button button-outline" href="add_department.php?id=<?php echo $words[$i]['id']; ?>">view</a></td>
                    <td><a class="button button-outline" href="edit.php?id=<?php echo $words[$i]['id']; ?>">Edit</a>
                    || <a class="button button-outline" href="tasks.php?id=<?php echo $words[$i]['id']; ?>&key=uni">Delete</a>
                    </td>
                </tr>
                <?php
            }
        }
        ?>
        </tbody>
    </table>


</div>
<script src="//code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="assets/js/script.js?1"></script>
</body>
</html>