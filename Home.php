<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Basic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fira+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Gothic+A1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/line-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Article-Clean.css">
    <link rel="stylesheet" href="assets/css/Features-Boxed.css">
    <link rel="stylesheet" href="assets/css/Highlight-Phone.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Testimonials.css">
</head>

<body style="background-image: url(&quot;assets/img/baaa.jpg&quot;);background-repeat: round;background-size: cover;"><img class="align-items-center" style="width: auto;height: 250px;background-image: url(&quot;assets/img/blaa.jpg&quot;);margin: 20px;" src="assets/img/i2it.png"><strong style="font-size: 20px;margin: 30px;color: rgb(249,249,249);margin-left: 5px;">International Institute Of Information Technology</strong>
    <?php 
        // Start the session
        session_start();

        // Check is session exists
        if (isset($_SESSION['uid']))
        {
            $uid = $_SESSION['uid'];
            echo "<h3 class=\"text-right\" style=\"color:white\">You are logged in as $uid</h3>";
        }
    ?>
    <ul class="nav nav-tabs" style="background-color: #560e78;height: 50px;">
        <li class="nav-item"><a class="nav-link active nav--link" href="Home.php" style="color: rgb(229,236,244);height: 50px;font-size: 20px;margin-right: 20px;margin-left: 20px;background-color: rgb(93,19,119);">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="PlacedStudent.php" style="color: rgb(247,250,254);height: 50px;filter: hue-rotate(0deg) invert(0%);font-family: 'Fira Sans', sans-serif;font-size: 20px;margin-right: 20px;margin-left: 20px;">Placed Student</a></li>
        <li class="nav-item"><a class="nav-link" href="Apti.php" style="color: rgb(228,236,244);height: 50px;font-size: 20px;margin-right: 20px;margin-left: 20px;">Aptitude</a></li>
        <li class="nav-item"><a class="nav-link" href="GdTopics.php" style="color: rgb(247,250,254);height: 50px;filter: hue-rotate(0deg) invert(0%);font-family: 'Fira Sans', sans-serif;font-size: 20px;margin-right: 20px;margin-left: 20px;">G D Topics</a></li>
		<li class="nav-item"><a class="nav-link" href="contact.php" style="color: rgb(228,236,244);height: 50px;font-size: 20px;margin-right: 20px;margin-left: 20px;">Feedback</a></li>
		<?php if (isset($_SESSION['uid'])) {?>
                <li class="nav-item"><a class="nav-link" href="Logout.php" style="margin-right: 20px;margin-left: 20px;color: rgb(251,251,252);font-size: 20px;">Logout</a></li>
            <?php } else { ?>
                <li class="nav-item"><a class="nav-link" href="Index.php" style="margin-right: 20px;margin-left: 20px;color: rgb(251,251,252);font-size: 20px;">Login</a></li>
            <?php } ?>
            </ul>
            <div class="card" style="margin: 50px;background-color: #ffffff;">
                <div class="card-body" style="margin: 10px;">
                    <h4 class="card-title" style="font-family: Bitter, serif;font-size: 40px;color: rgb(102,27,137);">Description</h4>
                    <h6 class="text-muted card-subtitle mb-2" style="font-size: 20px;color: rgb(235,161,119);">We Design Future&nbsp;</h6>
                    <p class="card-text" style="color: rgb(1,4,8);">The International Institute of Information Technology (I²IT), Pune [pronounced as I Square IT] was established by Late Shri. P. P. Chhabria, I²IT has always propagated ‘Innovation and Leadership’ as their mantra to bring ground-breaking ideas and provide a rock solid foundation for learning. </p><a class="card-link" href="https://www.isquareit.edu.in" style="color: rgb(80,132,13);font-family: Bitter, serif;font-size: 25px;">Visit our website</a></div>
            </div>
            <div class="text-monospace text-center features-boxed" style="margin: 50px;background-color: #ffffff;">
                <div class="container" style="background-image: url(&quot;none&quot;);background-repeat: no-repeat;background-position: 50% 50%;margin: 30px;width: auto;">
                    <div class="intro">
                        <h2 class="text-center" style="color: rgb(200,37,225);font-family: Bitter, serif;font-size: 40px;">Our Recruiters</h2>
                        <p class="text-center" style="color: rgb(5,5,27);">At I²IT, placement is not an event; it is an on-going process. The logistics are a reflection of technical & skill based talent honed by students during their academic years..</p>
                    </div>
                    <div class="row justify-content-center features">
                        <div class="col-sm-6 col-md-5 col-lg-4 item">
                            <div class="box"><img src="assets/img/aws.png">
                                <p class="description"> Provides on-demand cloud computing platforms to individuals, companies, and governments, on a metered pay-as-you-go basis. .</p><a class="learn-more" href="https://aws.amazon.com">Learn more »</a></div>
                        </div>
                        <div class="col-sm-6 col-md-5 col-lg-4 item">
                            <div class="box"><img class="d-flex align-items-center" src="assets/img/info.png" style="width: 195px;height: 195px;">
                                <p class="description">A global leader in technology services & consulting, helps clients in more than 50 countries to create & execute digital transformation strategies.</p><a class="learn-more" href="https://www.infosys.com">Learn more »</a></div>
                        </div>
                        <div class="col-sm-6 col-md-5 col-lg-4 item">
                            <div class="box"><img src="assets/img/blazeclan.jpg" style="width: 195px;height: 195px;">
                                <p class="description">Our cloud experts sketch, build and manage cloud services to guarantee ideal performance for your cloud round-the-cloud..</p><a class="learn-more" href="https://www.blazeclan.com">Learn more »</a></div>
                        </div>
                        <div class="col-sm-6 col-md-5 col-lg-4 item">
                            <div class="box"><img src="assets/img/lti.png" style="width: 195px;height: 195px;">
                                <p class="description">The preferred equipment lease and loan management software among the most prominent businesses within the equipment finance industry.</p><a class="learn-more" href="https://www.lntinfotech.com">Learn more »</a></div>
                        </div>
                        <div class="col-sm-6 col-md-5 col-lg-4 item">
                            <div class="box"><img src="assets/img/miniorange.png" style="width: 195px;height: 195px;">
                                <p class="description">Provides secure access to any cloud,web and legacy app with our strong authentication methods and single sign on to any enterprise application</p><a class="learn-more" href="https://www.miniorange.com">Learn more »</a></div>
                        </div>
                        <div class="col-sm-6 col-md-5 col-lg-4 item">
                            <div class="box"><img src="assets/img/nice.png"style="width: 195px;height: 195px;">
                                <p class="description">Software solutions enabling organizations to improve customer experience, ensure compliance, fight financial crime</p><a class="learn-more" href="https://www.nice.com">Learn more »</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>