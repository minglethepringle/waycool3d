<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>WayCool3D | Home</title>

    <!-- Custom CSS -->
    <?php include './includes/common.php';?>
    <link href="css/index.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <?php include './includes/nav.php';?>

    <!-- Page Content -->
    <div class="container">

        <!-- Heading Row -->
        <div class="row">
            <div class="col-md-8">
                <!-- <img class="img-responsive img-rounded" src="http://placehold.it/900x350" alt=""> -->
                <div class="banner">
                    <div class="video-container">
                        <video autoplay loop poster="https://placehold.it/900x350/000000/000000">
                            <source src="video/video.mp4" type="video/mp4">
                            <source src="video/video.webm" type="video/webm">
                            <source src="video/video.ogv" type="video/ogg">
                        </video>
                        <!-- <div class="video-mask"></div> -->
                    </div>
                </div>
            </div>
            <!-- /.col-md-8 -->
            <div class="col-md-4">
                <h1>WayCool3D</h1>
                <p>We print stuff. Not like inkjet or laser printing, but 3D printing. Another whole new dimension, and it's possible to print basically anything you want! Since this breakthrough technology gives printers a whole new dimension, your own 3D printed objects are just a click ahead.</p>
                <a class="btn btn-primary btn-lg" href="./shop.php">Check out our products!</a>
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Well -->
        <div class="row">
            <div class="col-lg-12">
                <div class="well text-center">
                    This is a well that is a great spot for a business tagline or phone number for easy access!
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <div class="col-md-4">
                <h2>Who are we?</h2>
                <p>We're just two ordinary middle-school entrepreneurs. With some extraordinary technology powers in our hands.</p>
                <a class="btn btn-default" href="./about.php">More About Us</a>
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4">
                <h2>What do we do?</h2>
                <p>We use our 3D printer to print objects, from keychains to phone cases. We can also ship (with a charge, of course)!</p>
                <a class="btn btn-default" href="#">More About Our 3D Printer</a>
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4">
                <h2>Where do we do it?</h2>
                <p>The webpage itself is stored on our web server. And the 3D printer is just sitting in Walker's basement, ready for orders.</p>
                <a class="btn btn-default" href="#">More About How We Started</a>
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->

        <!-- Footer -->
        <?php include("./includes/footer.php"); ?> 

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
