<?php 
include "dbConfig.php";
include "admin/inc/functions.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
          integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
          crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
          integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
          crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>University</title>
</head>

<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
    <div class="container">
        <a href="index.php" class="navbar-brand">University</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="about.php" class="nav-link">About Us</a>
                </li>
                
                <li class="nav-item active">
                    <a href="universities.php" class="nav-link">Universities</a>
                </li>
               
            </ul>
        </div>
    </div>
</nav>

<!-- PAGE HEADER -->
<header id="page-header">
    <div class="container services">
        <div class="row">
            <div class="col-md-6 m-auto text-center">
                <h1 class="mt-5">Universities</h1>
            </div>
        </div>
    </div>
</header>

<!-- BLOG SECTION -->
<section id="blog" class="py-3">
    <div class="container">
        <div class="row">
            <div class="col">

                <h1 class="mt-5">ALL UNIVERSITY LIST</h1>
                <hr>

                <div class="card-columns mt-5">
                    <?php 
                        $universities = getUniversity();
                        if (count($universities) > 0) {
                            $length = count($universities);
                            for ($i = 0; $i < $length; $i++) {
        
                    ?>
                    <div class="card zoom">
                        <!-- details page link -->
                        <a href="details.php?id=<?php echo $universities[$i]['id']; ?>">
                            <img src="<?php echo $universities[$i]['logo']; ?>" alt="" class="img-fluid card-img-top">
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $universities[$i]['name']; ?></h4>
                                <!-- <small class="text-muted">Written by One on 05/20</small> -->
                                <hr>
                                <p class="card-text">
                                <?php echo $universities[$i]['description']; ?>
                                </p>
                            </div>
                        </a>
                    </div>
                    <?php 
                            }
                        }
                    ?>
                
                </div>
            </div>
        </div>
    </div>
</section>


<!-- FOOTER -->
<footer id="main-footer" class="text-center p-4">
    <div class="container">
        <div class="row">
            <div class="col">
                <p>Copyright &copy;
                    <span id="year"></span> University Agent</p>
            </div>
        </div>
    </div>
</footer>


<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>

<script>
    // Get the current year for the copyright
    $('#year').text(new Date().getFullYear());

</script>
</body>

</html>