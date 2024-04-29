<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home|Patkai Men's Hostel</title>
    <meta name="description" content="One of the largest men's hostel inside the Tezpur University campus having strength of 450+ boarders.">
    
    <?php include_once 'includes.php' ?>
    <script>
        window.onload = LoadNotifications();
    </script>
</head>
<body>
<!--    navigation bar-->
    <?php include_once 'navigation.html'?>

<!-- carousel and slides-->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="overlay"></div>
                <img src="./media/carousel/1.png" class="d-block w-100" alt="Slide_1">
                <div class="carousel-caption d-none d-md-block d-sm-block">
                    <h5>WELCOME TO<br>PATKAI MEN'S HOSTEL</h5>
                    <p>Inaugurated in July 2011 by Shri Srikant Kumar Jena, Hon'ble Union minister of state for Statistics and programme implementation</p>
                    <a class="banner" href="media/carousel/foundation.jpg" target="_blank"><p style="font-size: large; font-weight: bold; letter-spacing: 2px; text-transform: uppercase;">! In 2021, we are celebrating 10 years of PATKAI !</p></a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./media/carousel/pmh_up.jpeg" class="d-block w-100" alt="Slide_2">
            </div>
            <div class="carousel-item">
                <img src="./media/carousel/3.png" class="d-block w-100" alt="Slide_3">
            </div>
            <div class="carousel-item">
                <img src="./media/carousel/4.jpg" class="d-block w-100" alt="Slide_4">
            </div>
            <div class="carousel-item">
                <img src="./media/carousel/5.jpg" class="d-block w-100" alt="Slide_5">
            </div>
            <div class="carousel-item">
                <img src="./media/carousel/6.jpg" class="d-block w-100" alt="Slide_6">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

<!--about US-->
<div class="container">
    <div class="row zero_mar zero_pad info">
<!--        information section-->
        <div class="col-lg-8 col-md-12 col-sm-12 zero_mar statement">
            <h3 class="topic">About Us</h3>
            <p>The <strong>Patkai Men's Hostel</strong> was inaugurated in the auspicious day of <b>23rd July 2011 by Shri Srikant Kumar Jena,</b> Hon'ble Union minister of state for Statistics and programme implementation. The hostel with a magnificent building sprawling over a large area is a masterpiece in itself. Patkai Men's Hostel boasts of excellent infrastructure with a fully equipped Common Room, with Sports kits readily available to the boarders. Patkai Men's Hostel is presently one of the largest men's hostel of Tezpur University having the strength to accommodate 450+ boarders.</p>
        </div>
<!--        notifications section-->
        <div class="col-lg-4 col-md-12 col-sm-12 zero_pad in_b">
            <h3 class="topic">Notifications</h3>
            <div id="updates" class="col-sm-12 snippet">
<!--                update with java script-->
            </div>
        </div>
    </div>
<!--embed video-->
    <div class="col-lg-12 zero_pad zero_mar">
        <iframe id="intro" src="https://www.youtube.com/embed/BWVoTvy6bCc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>
<!-- Highlight-->
    <div class="row highlight">
        <div class="col-lg-3 col-md-6 col-sm-12">
            <i class="fas fa-users" aria-hidden="true"><br><h4><b>450+</b><br>Boarders</h4></i>

        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <i class="fas fa-sun" aria-hidden="true"><br><b><h4>Solar</b><br>Electricity</h4></i>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <i class="fas fa-building"><br><h4><b>Largest</b><br>Among Others</h4></i>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <i class="fas fa-wifi" aria-hidden="true"><br><h4><b>24 X 7</b><br>Internet WiFi</h4></i>
        </div>
    </div>

<!--footer-->
<?php include_once 'footer.php' ?>

</body>
</html>