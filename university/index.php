
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css"/>
    <link rel="stylesheet" href="css/style.css">
    <title>University Agent</title>
</head>

<body>
<!-- START HERE -->
<nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
    <div class="container">
        <a href="index.php" class="navbar-brand">University Agent</a>
        
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a href="index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="about.php" class="nav-link">About Us</a>
                </li>
                <li class="nav-item">
                    <a href="universities.php" class="nav-link">Universities</a>
                </li>
                <li class="nav-item">
                    <div class="search-box">
                        <input type="text" autocomplete="off" placeholder="Search University..." />
                        <div class="result"></div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- SHOWCASE SLIDER -->
<section id="showcase">
    <div class="carousel slide" id="myCarousel" data-ride="carousel">
        
        <div class="carousel-inner">
            <div class="carousel-item carousel-image-1 active">
                <div class="container">
                    <div class="carousel-caption d-none d-sm-block text-right mb-1">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- HOME HEADING SECTION -->
<section id="home-heading" class="p-5">
    <div class="dark-overlay">
        <div class="row">
            <div class="col">
                <div class="container pt-5">
                    <h1>Welcome to "University Agent"</h1>
                    <p class="d-none d-md-block">
                        Let's find out which university is best for your career!
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ABOUT / WHY SECTION -->
<section id="about" class="py-5 text-center bg-light">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="info-header mb-5">
                    <h1 class="text-primary pb-3">
                        Why Us?
                    </h1>
                    <p class="lead pb-3">
                        To Find you the best of the best universities in Bangladesh. Here you can find your desire 
                        university, you wish to get information.
                    </p>
                </div>

                <!-- ACCORDION -->
                <div id="accordion">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">
                                <a href="#collapse1" data-toggle="collapse" data-parent="#accordion">
                                    <i class="fas fa-arrow-circle-down"></i> Get Inspired
                                </a>
                            </h5>
                        </div>

                        <div id="collapse1" class="collapse show">
                            <div class="card-body">
                                University education exposes students to new research and technology. University education 
                                promotes original and independent ideas. Students are given the chance to travel and
                                experience life overseas through study abroad programs. University life exposes 
                                students to other cultures and backgrounds.
                                
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">
                                <a href="#collapse2" data-toggle="collapse" data-parent="#accordion">
                                    <i class="fas fa-arrow-circle-down"></i> Gain The Knowledge
                                </a>
                            </h5>
                        </div>

                        <div id="collapse2" class="collapse">
                            <div class="card-body">
                                So many private universities are in Bangladesh. University to be open to anybody irrespective of 
                                caste, religion. Private universities shall be open to men and women of any caste, religion, race
                                and class. In most cases, it takes 4 years to complete a Bachelor Degree. Each year has two semesters.
                                Obtaining a Bachelor degree offers numerous professional, personal and academic benefits. 
                                Postgraduates (Master's) generally takes 1-2 years for completing a Master's degree in Bangladesh.
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">
                                <a href="#collapse3" data-toggle="collapse" data-parent="#accordion">
                                    <i class="fas fa-arrow-circle-down"></i> Open Your Mind
                                </a>
                            </h5>
                        </div>

                        <div id="collapse3" class="collapse">
                            <div class="card-body">
                                 Do research on each private university and find out which university is best for your
                                 higher education and find out the information for taking admission in that university.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- PHOTO GALLERY -->
<section id="gallery" class="py-5">
    <div class="container">
        <h1 class="text-center">Photo Gallery</h1>
        <p class="text-center">Check out Universities Gallery</p>
        <div class="row mb-4">
            <div class="col-md-4">
                <a href="./img/nsu.jpg" data-toggle="lightbox" data-gallery="img-gallery"
                   data-height="560"
                   data-width="560">
                    <img src="./img/nsu.jpg" alt="" class="img-fluid">
                </a>
            </div> 

            <div class="col-md-4">
                <a href="./img/eastwest.png" data-toggle="lightbox" data-gallery="img-gallery"
                   data-height="561"
                   data-width="561">
                    <img src="./img/eastwest.png" alt="" class="img-fluid">
                </a>
            </div>

            <div class="col-md-4">
                <a href="./img/brac2.jpg" data-toggle="lightbox" data-gallery="img-gallery"
                   data-height="562"
                   data-width="562">
                    <img src="./img/brac2.jpg" alt="" class="img-fluid">
                </a>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md-4">
                <a href="./img/diu.jpg" data-toggle="lightbox" data-gallery="img-gallery"
                   data-height="563"
                   data-width="563">
                    <img src="./img/diu.jpg" alt="" class="img-fluid">
                </a>
            </div>

            <div class="col-md-4">
                <a href="./img/aiub.jpg" data-toggle="lightbox" data-gallery="img-gallery"
                   data-height="564"
                   data-width="564">
                    <img src="./img/aiub.jpg" alt="" class="img-fluid">
                </a>
            </div>

            <div class="col-md-4">
                <a href="./img/iub.jpg" data-toggle="lightbox" data-gallery="img-gallery"
                   data-height="565"
                   data-width="565">
                    <img src="./img/iub.jpg" alt="" class="img-fluid">
                </a>
            </div>
        </div>
    </div>
</section>


<!-- FOOTER -->
<section id="main-footer" class="text-center p-4">
    <div class="container">
        <div class="row">
            <div class="col">
                <p>copyright&copy; <span id="year"></span> University Agent</p>
            </div>
        </div>
    </div>
</section>



<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"
        integrity="sha256-Y1rRlwTzT5K5hhCBfAFWABD4cU13QGuRN6P5apfWzVs=" crossorigin="anonymous"></script>

<script>
    // Get the current year for the copyright
    $('#year').text(new Date().getFullYear());


    // Lightbox Init
    $(document).on('click', '[data-toggle="lightbox"]', function (event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });

    // SearchForm JavaScript
    $(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-search.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>

</body>

</html>