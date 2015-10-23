<?php
if(isset($_POST['submit'])){
    $to = "scott@goodbay.co"; // this is the InternD Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first-name'];
    $last_name = $_POST['last-name'];
    $subject = "Form submission";
    $message = $first_name . " " . $last_name . " submitted the following:" . "\n\n" . $_POST['age'] . "\n\n" . $_POST['address'] . "\n\n" .
        $_POST['city'] . "\n\n" . $_POST['state'] . "\n\n" . $_POST['phone'] . "\n\n" . $_POST['email'] . "\n\n" . $_POST['transportation'] .
        "\n\n" . $_POST['gender'] . "\n\n" . $_POST['height'] . "\n\n" . $_POST['weight'] . "\n\n" . $_POST['waist'] . "\n\n" . $_POST['eye'] .
        "\n\n" . $_POST['portfolio'] . "\n\n" . $_POST['photo']; //forms the email with all the form information
    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers); //send email to InternD
    $subject2 = "Thank you for submitting to Internd";
    //$message2 = "Thank you " . $first_name . " for submitting your application to Internd.\nWe will be in touch after reviewing your application.\n";
    $headers2 = "From:" . $to;
    mail($from,$subject2,$message2,$headers2); // sends a receipt message to the sender
    echo "Application submitted. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>InternD - Apply for Escort Internship</title>
    <link rel="icon" type="image/png" href="../img/favicon.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="../css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/creative.css" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top affix">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand page-scroll" href="/dev/og">InternD</a>
            </div>
        </div>
    </nav>



    <section class="bg-primary" id="about">
        <div class="container form-box">
            <h2 class="section-heading text-center">Apply Now.</h2>
            <hr class="secondary">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="text-faded" for="first-name">First Name:</label>
                  <input type="text" class="form-control" id="first-name" name="first-name">
                </div>
                <div class="form-group">
                  <label class="text-faded" for="last-name">Last Name:</label>
                  <input type="text" class="form-control" id="last-name" name="last-name">
                </div>
                <div class="form-group">
                  <label class="text-faded" for="age">Age:</label>
                  <input type="text" class="form-control" id="age" name="age">
                </div>
                <div class="form-group">
                  <label class="text-faded" for="address">Street Address:</label>
                  <input type="text" class="form-control" id="address" name="address">
                </div>
                <div class="form-group">
                  <label class="text-faded" for="city">City:</label>
                  <input type="text" class="form-control" id="city" name="city">
                </div>
                <div class="form-group">
                  <label class="text-faded" for="address">State:</label>
                  <input type="text" class="form-control" id="state" name="state">
                </div>
                <div class="form-group">
                    <label class="text-faded" for="phone">Phone:</label>
                    <input type="text" class="form-control" data-format="+1 (ddd) ddd-dddd" id="phone" name="phone">
                </div>
                <div class="form-group">
                  <label class="text-faded" for="address">Email:</label>
                  <input type="email" class="form-control" id="email" name="email">
                </div>
                <p class="text-faded">Can you provide your own transportation?</p>
                <div class="radio">
                  <label>
                    <input type="radio" name="transportation" id="transportation" value="yes" checked>
                    Yes
                  </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="transportation" id="transportation" value="no">
                    No
                  </label>
                </div>
                <p class="text-faded">Are you male or female?</p>
                <div class="radio">
                  <label>
                    <input type="radio" name="gender" id="gender" value="male" checked>
                    Female
                  </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="gender" id="gender" value="female">
                    Male
                  </label>
                </div>
                <div class="form-group">
                    <label class="text-faded" for="height">
                        Height:
                    </label>
                    <select class="form-control" id="height" name="height">
                      <option>Select...</option>
                      <option>4' 0"</option>
                      <option>4' 1"</option>
                      <option>4' 2"</option>
                      <option>4' 3"</option>
                      <option>4' 4"</option>
                      <option>4' 5"</option>
                      <option>4' 6"</option>
                      <option>4' 7"</option>
                      <option>4' 8"</option>
                      <option>4' 9"</option>
                      <option>4' 10"</option>
                      <option>4' 11"</option>
                      <option>5' 0"</option>
                      <option>5' 1"</option>
                      <option>5' 2"</option>
                      <option>5' 3"</option>
                      <option>5' 4"</option>
                      <option>5' 5"</option>
                      <option>5' 6"</option>
                      <option>5' 7"</option>
                      <option>5' 8"</option>
                      <option>5' 9"</option>
                      <option>5' 10"</option>
                      <option>5' 11"</option>
                      <option>6' 0"</option>
                      <option>6' 1"</option>
                      <option>6' 2"</option>
                      <option>6' 3"</option>
                      <option>6' 4"</option>
                      <option>6' 5"</option>
                      <option>6' 6"</option>
                      <option>6' 7"</option>
                      <option>6' 8"</option>
                      <option>6' 9"</option>
                      <option>6' 10"</option>
                      <option>6' 11"</option>
                      <option>7' 0"</option>
                    </select>
                </div>
                <div class="form-group">
                  <label class="text-faded" for="weight">Weight:</label>
                  <input type="text" class="form-control" id="weight" name="weight">
                </div>
                <div class="form-group">
                  <label class="text-faded" for="waist">Waist Size:</label>
                  <input type="text" class="form-control" id="waist" name="waist">
                </div>
                <div class="form-group">
                    <label class="text-faded" for="eye">
                        Eye color:
                    </label>
                    <select class="form-control" id="eye" name="eye">
                      <option>Select...</option>
                      <option>Amber</option>
                      <option>Blue</option>
                      <option>Brown</option>
                      <option>Gray</option>
                      <option>Green</option>
                      <option>Hazel</option>
                    </select>
                </div>
                <div class="form-group">
                  <label class="text-faded" for="portfolio">Link to your portfolio:</label>
                  <input type="text" class="form-control" id="portfolio" name="portfolio">
                </div>
                <div class="form-group">
                  <label class="text-faded" for="photo">Photo Upload</label>
                  <input type="file" id="photo" name="photo">
                  <p class="help-block">Please upload a recent photo.</p>
                </div>
                <div class="text-center">
                    <input class="btn btn-default btn-xl wow tada" type="submit" name="submit" value="Submit">
                </div>
            </form>
        </div>

    </section>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x wow bounceIn"></i>
                    <p><a href="mailto:contact@internd.com">Contact@internd.com</a></p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                    <p><a href="mailto:feedback@internd.com">feedback@internd.com</a></p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center address">
                    <p>InternD</p>
                    <p>317 S 6th St</p>
                    <p>Las Vegas, NV 89101</p>
                </div>
            </div>
        </div>
    </section>


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>

</body>
</html>
