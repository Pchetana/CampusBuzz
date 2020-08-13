<?php
	require_once('select.php');
	$sql = "SELECT * FROM gd_topics WHERE 1";
	$result = $conn->query("$sql");

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login</title>
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

<body style="background-image: url(&quot;assets/img/baaa.jpg&quot;);background-repeat: round;background-size: cover;color: rgb(244,246,248);margin: 30px;font-size: 40px;"><img style="width: auto;height: 250px;background-image: url(&quot;assets/img/bms.png&quot;);" src="assets/img/i2it.png"><strong style="margin: 30px;margin-left: 7px;font-size: 20px;">International Institute Of Information Technology</strong>
    <ul class="nav nav-tabs"
        style="background-color: #560e78;height: 50px;">
        <li class="nav-item"><a class="nav-link active nav--link" href="Home.php" style="color: rgb(229,236,244);height: 50px;font-size: 20px;margin-right: 20px;margin-left: 20px;background-color: rgb(93,19,119);">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="PlacedStudent.html" style="color: rgb(247,250,254);height: 50px;filter: hue-rotate(0deg) invert(0%);font-family: 'Fira Sans', sans-serif;font-size: 20px;margin-right: 20px;margin-left: 20px;">Placed Student</a></li>
        <li
            class="nav-item"><a class="nav-link" href="Apti.html" style="color: rgb(228,236,244);height: 50px;font-size: 20px;margin-right: 20px;margin-left: 20px;">Aptitude</a></li>
            <li class="nav-item"><a class="nav-link" href="GdTopics.html" style="color: rgb(247,250,254);height: 50px;filter: hue-rotate(0deg) invert(0%);font-family: 'Fira Sans', sans-serif;font-size: 20px;margin-right: 20px;margin-left: 20px;">G D Topics</a></li>
            <li class="nav-item"><a class="nav-link" href="Login.html" style="margin-right: 20px;margin-left: 20px;color: rgb(251,251,252);font-size: 20px;">Login</a></li>
    </ul>
    <div class="text-monospace text-center features-boxed" style="margin: 20px;background-color: rgba(238,244,247,0);"></div>
    <h1 style="margin: 30px;">Amazon Web Services</h1>
    <div class="table-responsive" style="margin: 30px;margin-right: 50px;width: 900px;font-size: 20px;background-color: rgba(255,255,255,0.99);">
        <table class="table">
       
                <t>
                    <th style="color: rgb(2,5,11);">Topic</th>
                    <th style="color: rgb(11,16,21);">Year</th>    
                </t>
				
				<?php
				
				 while($rows = mysql_fetch_assoc($result)) {
				 
				 ?>
				 
                <tr>
				
                    <td style="color: rgb(11,30,40);"><?php echo $rows['Topics']; ?></td>
                    <td style="color: rgb(1,7,20);"><?php echo $rows['year']; ?></td>
                    
                </tr>
				
			<?php
				}
			?>
			
        </table>
    </div>
    <h1 style="margin: 30px;">Book My Show</h1>
    <div class="table-responsive" style="margin: 30px;margin-right: 50px;width: 900px;font-size: 20px;background-color: rgba(255,255,255,0.99);">
        <table class="table">
            <thead>
                <tr>
                    <th style="color: rgb(2,5,11);">2018</th>
                    <th style="color: rgb(11,16,21);">2017</th>
                    <th style="color: rgb(15,20,25);">2016</th>
                    <th style="color: rgb(11,21,41);">2015</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="color: rgb(11,30,40);">Topic 1</td>
                    <td style="color: rgb(1,7,20);">Topic 1</td>
                    <td style="color: rgb(2,18,25);">Topic1</td>
                    <td style="color: rgb(4,16,27);">Topic1</td>
                </tr>
                <tr>
                    <td style="color: rgb(4,14,23);">Topic 2</td>
                    <td style="color: rgb(1,6,17);">topic2</td>
                    <td style="color: rgb(5,5,30);">topic2</td>
                    <td style="color: rgb(5,5,7);">Topic 2</td>
                </tr>
            </tbody>
        </table>
    </div>
    <h1 style="margin: 30px;">L &amp; T Infotech</h1>
    <div class="table-responsive" style="margin: 30px;margin-right: 50px;width: 900px;font-size: 20px;background-color: rgba(255,255,255,0.99);">
        <table class="table">
            <thead>
                <tr>
                    <th style="color: rgb(2,5,11);">2018</th>
                    <th style="color: rgb(11,16,21);">2017</th>
                    <th style="color: rgb(15,20,25);">2016</th>
                    <th style="color: rgb(11,21,41);">2015</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="color: rgb(11,30,40);">Topic 1</td>
                    <td style="color: rgb(1,7,20);">Topic 1</td>
                    <td style="color: rgb(2,18,25);">Topic1</td>
                    <td style="color: rgb(4,16,27);">Topic1</td>
                </tr>
                <tr>
                    <td style="color: rgb(4,14,23);">Topic 2</td>
                    <td style="color: rgb(1,6,17);">topic2</td>
                    <td style="color: rgb(5,5,30);">topic2</td>
                    <td style="color: rgb(5,5,7);">Topic 2</td>
                </tr>
            </tbody>
        </table>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>