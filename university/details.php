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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css" />
    <link rel="stylesheet" href="css/style.css">
    <title>University</title>
</head>

<body>
    <!-- START HERE -->
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
                    <li class="nav-item">
                        <a href="universities.php" class="nav-link">Universities</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- PAGE HEADER -->
    <header id="page-header" class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6 m-auto text-center">
                    <h1 class="mt-5">Details Page</h1>
                    <p></p>
                </div>
            </div>
        </div>
    </header>


    <!-- ABOUT SECTION -->
    <section id="about" class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <?php    

                        $uni_id = $_GET["id"] ?? 0;
                        $data = getSingleUniversity($uni_id);
                    ?>    
                
                    <h1><?php echo $data["name"]; ?></h1>                    
                    <p><?php echo $data["description"]; ?></p>
                    <?php 
                        // }
                    ?>
                </div>
                <div class="col-md-6">
                    <!-- <img src="https://source.unsplash.com/random/700x700/?technology" alt="" class="img-fluid rounded-circle d-none d-md-block about-img"> -->
                    <img src="<?php echo $data["logo"]; ?>" width="300" height="300" alt="" class="img-fluid rounded-circle d-none d-md-block about-img">
                </div>
            </div>

        <!-- OFFERED PROGRAM AND FEES  -->
        <!-- SERVICES SECTION -->
        <section id="services" class="py-5">
            <div class="container">
                <div>
                    <h3>OFFERED PROGRAM AND FEES</h3>
                </div>
                <div class="row">

                    <!-- UNDERGRADUATE -->
                    <div class="col-md-6">
                        <div class="card text-center">
                        <div class="card-header bg-dark text-white">
                            <h3>Undergraduate</h3>
                        </div>
                        <div class="card-body">
                        <p class="card-text">Undergraduate Brief</p>
                        <ul class="list-group">

                            <?php    
                                $sql = "SELECT courses.*
                                    FROM courses WHERE courses.uni_id = $uni_id and under_post=0;";


                                $result = mysqli_query($conn, $sql);   
                                if (mysqli_num_rows($result) > 0) {
                                    // output data of each row
                                    while($row = mysqli_fetch_assoc($result)) { 

                                        // Store data in variable for reusing.
                                        $id = $row["id"] ?? 0;
                                        $course_name = $row["p_name"] ?? '';
                                        $under_fees = $row["under_fees"] ?? '';
                                        $post_fees = $row["post_fees"] ?? '';
                                        $under_post = $row["under_post"] ?? 0;

                                        // when, this is undergraduate
                                        if($under_post == 0){

                            ?>

                                    <div id="accordion">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <a href="#collapse<?php echo $id; ?>" data-toggle="collapse" data-parent="#accordion">
                                                        <i class="fas fa-arrow-circle-down">
                                                        <?php echo $row["p_name"]; ?>
                                                        </i>
                                                    </a>
                                                </h5>
                                            </div>

                                            <div id="collapse<?php echo $id; ?>" class="collapse">
                                                <div class="card-body">
                                                    Undergraduate Fees:
                                                    <?php echo $under_fees; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            <?php
                                    }
                                }
                                    } else {
                                        echo "0 results";
                                    }
                            ?>

                         </ul>
                            </div>
                        </div>
                    </div>

                    <!-- POSTGRADUATE -->
                    <div class="col-md-6">
                        <div class="card text-center">
                        <div class="card-header bg-dark text-white">
                            <h3>Postgraduate</h3>
                        </div>
                        <div class="card-body">
                        <p class="card-text">Postgraduate Brief</p>
                        <ul class="list-group">

                            <?php       

                                $sql = "SELECT courses.*
                                    FROM courses WHERE courses.uni_id = $uni_id and under_post=1;";

                                $result = mysqli_query($conn, $sql);   
                                if (mysqli_num_rows($result) > 0) {
                                    // output data of each row
                                    while($row = mysqli_fetch_assoc($result)) { 

                                        // Store data in variable for reusing.
                                        $id = $row["id"] ?? 0;
                                        $course_name = $row["p_name"] ?? '';
                                        $under_fees = $row["under_fees"] ?? '';
                                        $post_fees = $row["post_fees"] ?? '';
                                        $under_post = $row["under_post"] ?? 0;

                                        // when, this is postgraduate
                                        if($under_post == 1){

                            ?>
                                <div id="accordion">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">
                                                <a href="#collapse<?php echo $id; ?>" data-toggle="collapse" data-parent="#accordion">
                                                    <i class="fas fa-arrow-circle-down">
                                                    <?php echo $course_name; ?>
                                                    </i>
                                                </a>
                                            </h5>
                                        </div>

                                        <div id="collapse<?php echo $id; ?>" class="collapse">
                                            <div class="card-body">
                                                Postgraduate Fees:
                                                <?php echo $post_fees; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                                }
                            }
                                } else {
                                    echo "0 results";
                                }
                            ?>

                         </ul>
                            </div>
                        </div>
                    </div>

                    <!-- post end -->
                </div>
            </div>
        </section>
        <!-- services -->



        </div>
    </section>

    <!-- ICON BOXES -->
    <section id="icon-boxes" class="p-5">
        <div class="container">

            <div class="row mb-4">
                <div class="col-md-3">
                    <a target="_blank" href="<?php echo $data["url"] ?>">
                    <div class="card bg-success text-white text-center">
                        <div class="card-body">
                            <i class="fas fa-coffee fa-2x">Take a tour!</i>
                            <!-- <h3>Linkedin</h3> -->
                        </div>
                    </div>
                    </a>
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
                        <span id="year"></span> University
                    </p>
                </div>
            </div>
        </div>
    </footer>


    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>

    <script>
        // Get the current year for the copyright
        $('#year').text(new Date().getFullYear());

        // $('.slider').slick({
        //     infinite: true,
        //     slideToShow: 1,
        //     slideToScroll: 1
        // });

        $(document).ready(function() {
            // executes when HTML-Document is loaded and DOM is ready
            console.log("document is ready");


            $(".card").hover(
                function() {
                    $(this).addClass('shadow-lg').css('cursor', 'pointer');
                },
                function() {
                    $(this).removeClass('shadow-lg');
                }
            );

            // document ready  
        });
    </script>
</body>

</html>