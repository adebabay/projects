<?php
require_once 'conn.php'; // Include the database connection 
$query = "SELECT * FROM `video`";
$result = mysqli_query($conn, $query);
?> 
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    <title>Circle by templatemo</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/templatemo_misc.css">
    <link rel="stylesheet" href="css/templatemo_style.css">
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body>
    <div class="bg-overlay"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="sidebar-menu">
                    <div class="logo-wrapper">
                        <h1 class="logo">
                            <a href="#"><img src="images/logo.png" alt="Circle Template">
                            <!-- <span>Feta Music Award</span></a> -->
                        </h1>
                    </div> <!-- /.logo-wrapper -->
                    
                    <div class="menu-wrapper">
                        <ul class="menu">
                         
                            <li><a class="homebutton" href="#home">Home</a></li>
                            <li><a class="show-1" href="#about-1">About</a></li>
                            <li><a class="show-2" href="#winners-2">Winners</a></li>
                            <li><a class="show-3" href="#artists-3">Artists profile</a></li>
                            <li><a class="show-4" href="#photos-4">Gallery</a></li>
                            <li><a class="show-5" href="#submit-5">Submit Your Work</a></li>
                            <li><a class="show-6" href="#contact-6">Contact</a></li>
                        </ul> <!-- /.menu -->
                        <a href="#" class="toggle-menu"><i class="fa fa-bars"></i></a>
                    </div> <!-- /.menu-wrapper -->
                </div> <!-- /.sidebar-menu -->
            </div> <!-- /.col-md-4 -->
            <div class="col-md-8 col-sm-12"> 
                <div id="menu-container">
                <div id="about-1" class="services content">
                        <div class="row">
                            <ul class="tabs">
                                <li class="col-md-4 col-sm-4">
                                    <a href="#tab4" class="icon-item">
                                        <i class="fa fa-cogs"></i>
                                    </a> <!-- /.icon-item -->
                                </li>
                                <li class="col-md-4 col-sm-4">
                                    <a href="#tab5" class="icon-item">
                                        <i class="fa fa-leaf"></i>
                                    </a> <!-- /.icon-item -->
                                </li>
                                <li class="col-md-4 col-sm-4">
                                    <a href="#tab6" class="icon-item">
                                        <i class="fa fa-users"></i>
                                    </a> <!-- /.icon-item -->
                                </li>
                            </ul> <!-- /.tabs -->
                            <div class="col-md-12 col-sm-12">
                                <div class="toggle-content text-center" id="tab4">
                                    <h3>Our History</h3>
                                    <p>The Feta Music Award is an Ethiopian music award event that recognizes and celebrates outstanding achievements in the Ethiopian music industry. It honors musicians, producers, songwriters, and other professionals who have made significant contributions to the development and popularity of Ethiopian music.
                                    The award categories typically cover a wide range of genres and aspects of music, such as traditional, contemporary, hip-hop, pop, and others. It serves as a platform to promote and uplift Ethiopian artists by showcasing their work to a broader audience. The Feta Music Award also plays a crucial role in highlighting the evolving trends and talents in the Ethiopian music scene.
It is organized as part of a broader effort to promote arts and culture in Ethiopia, gaining popularity since its inception.
</p>
                                </div>

                                <div class="toggle-content text-center" id="tab5">
                                    <h3>Our Support</h3>
                                    <p>The Feta Music Award is an Ethiopian music award event that recognizes and celebrates outstanding achievements in the Ethiopian music industry. It honors musicians, producers, songwriters, and other professionals who have made significant contributions to the development and popularity of Ethiopian music.
                                    The award categories typically cover a wide range of genres and aspects of music, such as traditional, contemporary, hip-hop, pop, and others. It serves as a platform to promote and uplift Ethiopian artists by showcasing their work to a broader audience. The Feta Music Award also plays a crucial role in highlighting the evolving trends and talents in the Ethiopian music scene.
It is organized as part of a broader effort to promote arts and culture in Ethiopia, gaining popularity since its inception.
</p>
                                </div>
                                <div class="toggle-content text-center" id="tab5">
                                    <h3>Our Team</h3>
                                    <p>The Feta Music Award is an Ethiopian music award event that recognizes and celebrates outstanding achievements in the Ethiopian music industry. It honors musicians, producers, songwriters, and other professionals who have made significant contributions to the development and popularity of Ethiopian music.
                                    The award categories typically cover a wide range of genres and aspects of music, such as traditional, contemporary, hip-hop, pop, and others. It serves as a platform to promote and uplift Ethiopian artists by showcasing their work to a broader audience. The Feta Music Award also plays a crucial role in highlighting the evolving trends and talents in the Ethiopian music scene.
It is organized as part of a broader effort to promote arts and culture in Ethiopia, gaining popularity since its inception.
</p>
                                    <div class="col-md-4 col-sm-4">
                                <div class="member-item">
                                    <div class="thumb">
                                        <img src="images/team/member-2.jpg" alt="Candy - Web Developer">
                                    </div>
                                    <h4>Candy</h4>
                                    <span>Web Developer</span>
                                </div> <!-- /.member-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-sm-4">
                                <div class="member-item">
                                    <div class="thumb">
                                        <img src="images/team/member-2.jpg" alt="Candy - Web Developer">
                                    </div>
                                    <h4>Candy</h4>
                                    <span>Web Developer</span>
                                </div> <!-- /.member-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-sm-4">
                                <div class="member-item">
                                    <div class="thumb">
                                        <img src="images/team/member-2.jpg" alt="Candy - Web Developer">
                                    </div>
                                    <h4>Candy</h4>
                                    <span>Web Developer</span>
                                </div> <!-- /.member-item -->
                            </div> <!-- /.col-md-4 -->
                                </div>
                                <div class="toggle-content text-center" id="tab6">
                                    <h3>Testimonials</h3>
                                    <p>The Feta Music Award is an Ethiopian music award event that recognizes and celebrates outstanding achievements in the Ethiopian music industry. It honors musicians, producers, songwriters, and other professionals who have made significant contributions to the development and popularity of Ethiopian music.
                                    The award categories typically cover a wide range of genres and aspects of music, such as traditional, contemporary, hip-hop, pop, and others. It serves as a platform to promote and uplift Ethiopian artists by showcasing their work to a broader audience. The Feta Music Award also plays a crucial role in highlighting the evolving trends and talents in the Ethiopian music scene.
It is organized as part of a broader effort to promote arts and culture in Ethiopia, gaining popularity since its inception.
</p>
                                </div>
                            </div> <!-- /.col-md-12 -->
                        </div> <!-- /.row -->
                    </div> <!-- /.services -->
                    <div id="winners-2" class="about content">
                        <div class="row">
                            <ul class="tabs">
                                <li class="col-md-4 col-sm-4">
                                    <a href="#tab1" class="icon-item">
                                        <i class="fa fa-umbrella"></i>
                                    </a> <!-- /.icon-item -->
                                </li>
                                <li class="col-md-4 col-sm-4">
                                    <a href="#tab2" class="icon-item">
                                        <i class="fa fa-camera"></i>
                                    </a> <!-- /.icon-item -->
                                </li>
                                <li class="col-md-4 col-sm-4">
                                    <a href="#tab3" class="icon-item">
                                        <i class="fa fa-coffee"></i>
                                    </a> <!-- /.icon-item -->
                                </li>
                            </ul> <!-- /.tabs -->
                            <div class="col-md-12 col-sm-12">
                                <div class="toggle-content text-center" id="tab1">
                                    <h3>All Feta Music Award Winners</h3>
                                    <p>The Feta Music Award is an Ethiopian music award event that recognizes and celebrates outstanding achievements in the Ethiopian music industry. It honors musicians, producers, songwriters, and other professionals who have made significant contributions to the development and popularity of Ethiopian music.
                                    The award categories typically cover a wide range of genres and aspects of music, such as traditional, contemporary, hip-hop, pop, and others. It serves as a platform to promote and uplift Ethiopian artists by showcasing their work to a broader audience. The Feta Music Award also plays a crucial role in highlighting the evolving trends and talents in the Ethiopian music scene.
It is organized as part of a broader effort to promote arts and culture in Ethiopia, gaining popularity since its inception.
</p>
                                </div>

                                <div class="toggle-content text-center" id="tab2">
                                    <h3>What We Do</h3>
                                    <p>The Feta Music Award is an Ethiopian music award event that recognizes and celebrates outstanding achievements in the Ethiopian music industry. It honors musicians, producers, songwriters, and other professionals who have made significant contributions to the development and popularity of Ethiopian music.
                                    The award categories typically cover a wide range of genres and aspects of music, such as traditional, contemporary, hip-hop, pop, and others. It serves as a platform to promote and uplift Ethiopian artists by showcasing their work to a broader audience. The Feta Music Award also plays a crucial role in highlighting the evolving trends and talents in the Ethiopian music scene.
It is organized as part of a broader effort to promote arts and culture in Ethiopia, gaining popularity since its inception.
</p>
                                </div>

                                <div class="toggle-content text-center" id="tab3">
                                    <h3>Our Team</h3>
                                    <p>The Feta Music Award is an Ethiopian music award event that recognizes and celebrates outstanding achievements in the Ethiopian music industry. It honors musicians, producers, songwriters, and other professionals who have made significant contributions to the development and popularity of Ethiopian music.
                                    The award categories typically cover a wide range of genres and aspects of music, such as traditional, contemporary, hip-hop, pop, and others. It serves as a platform to promote and uplift Ethiopian artists by showcasing their work to a broader audience. The Feta Music Award also plays a crucial role in highlighting the evolving trends and talents in the Ethiopian music scene.
It is organized as part of a broader effort to promote arts and culture in Ethiopia, gaining popularity since its inception.
</p>
                                </div>
                            </div> <!-- /.col-md-12 -->
                        </div> <!-- /.row -->

                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="member-item">
                                    <div class="thumb">
                                        <img src="images/team/member-1.jpg" alt="Tanya - Web Designer">
                                    </div>
                                    <h4>Tanya</h4>
                                    <span>Web Designer</span>
                                </div> <!-- /.member-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-sm-4">
                                <div class="member-item">
                                    <div class="thumb">
                                        <img src="images/team/member-2.jpg" alt="Candy - Web Developer">
                                    </div>
                                    <h4>Candy</h4>
                                    <span>Web Developer</span>
                                </div> <!-- /.member-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-sm-4">
                                <div class="member-item">
                                    <div class="thumb">
                                        <img src="images/team/member-3.jpg" alt="Julia - Creative Director">
                                    </div>
                                    <h4>Julia</h4>
                                    <span>Creative Director</span>
                                </div> <!-- /.member-item -->
                            </div> <!-- /.col-md-4 -->
                        </div> <!-- /.row -->
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="member-item">
                                    <div class="thumb">
                                        <img src="images/team/member-1.jpg" alt="Tanya - Web Designer">
                                    </div>
                                    <h4>Tanya</h4>
                                    <span>Web Designer</span>
                                </div> <!-- /.member-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-sm-4">
                                <div class="member-item">
                                    <div class="thumb">
                                        <img src="images/team/member-2.jpg" alt="Candy - Web Developer">
                                    </div>
                                    <h4>Candy</h4>
                                    <span>Web Developer</span>
                                </div> <!-- /.member-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-sm-4">
                                <div class="member-item">
                                    <div class="thumb">
                                        <img src="images/team/member-3.jpg" alt="Julia - Creative Director">
                                    </div>
                                    <h4>Julia</h4>
                                    <span>Creative Director</span>
                                </div> <!-- /.member-item -->
                            </div> <!-- /.col-md-4 -->
                        </div> <!-- /.row -->
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="member-item">
                                    <div class="thumb">
                                        <img src="images/team/member-1.jpg" alt="Tanya - Web Designer">
                                    </div>
                                    <h4>Tanya</h4>
                                    <span>Web Designer</span>
                                </div> <!-- /.member-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-sm-4">
                                <div class="member-item">
                                    <div class="thumb">
                                        <img src="images/team/member-2.jpg" alt="Candy - Web Developer">
                                    </div>
                                    <h4>Candy</h4>
                                    <span>Web Developer</span>
                                </div> <!-- /.member-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-sm-4">
                                <div class="member-item">
                                    <div class="thumb">
                                        <img src="images/team/member-3.jpg" alt="Julia - Creative Director">
                                    </div>
                                    <h4>Julia</h4>
                                    <span>Creative Director</span>
                                </div> <!-- /.member-item -->
                            </div> <!-- /.col-md-4 -->
                        </div> <!-- /.row -->
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="member-item">
                                    <div class="thumb">
                                        <img src="images/team/member-1.jpg" alt="Tanya - Web Designer">
                                    </div>
                                    <h4>Tanya</h4>
                                    <span>Web Designer</span>
                                </div> <!-- /.member-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-sm-4">
                                <div class="member-item">
                                    <div class="thumb">
                                        <img src="images/team/member-2.jpg" alt="Candy - Web Developer">
                                    </div>
                                    <h4>Candy</h4>
                                    <span>Web Developer</span>
                                </div> <!-- /.member-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-sm-4">
                                <div class="member-item">
                                    <div class="thumb">
                                        <img src="images/team/member-3.jpg" alt="Julia - Creative Director">
                                    </div>
                                    <h4>Julia</h4>
                                    <span>Creative Director</span>
                                </div> <!-- /.member-item -->
                            </div> <!-- /.col-md-4 -->
                        </div> <!-- /.row -->
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="member-item">
                                    <div class="thumb">
                                        <img src="images/team/member-1.jpg" alt="Tanya - Web Designer">
                                    </div>
                                    <h4>Tanya</h4>
                                    <span>Web Designer</span>
                                </div> <!-- /.member-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-sm-4">
                                <div class="member-item">
                                    <div class="thumb">
                                        <img src="images/team/member-2.jpg" alt="Candy - Web Developer">
                                    </div>
                                    <h4>Candy</h4>
                                    <span>Web Developer</span>
                                </div> <!-- /.member-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-sm-4">
                                <div class="member-item">
                                    <div class="thumb">
                                        <img src="images/team/member-3.jpg" alt="Julia - Creative Director">
                                    </div>
                                    <h4>Julia</h4>
                                    <span>Creative Director</span>
                                </div> <!-- /.member-item -->
                            </div> <!-- /.col-md-4 -->
                        </div> <!-- /.row -->
                    </div> <!-- /.about -->

                    
<div id="artists-3" class="services content">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="toggle-content text-center" id="tab4">
                <h3>Artist Profiles</h3>
                <?php
                // Fetch videos from the database
                $query = "SELECT * FROM `video`";
                $result = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_assoc($result)): ?>
                    <div class="artist-profile" style="margin-bottom: 20px;">
                        <div style="display: flex; align-items: flex-start;">
                            <img src="<?php echo htmlspecialchars($row['image_location']); ?>" alt="Artist Image" style="width: 100px; height: auto; margin-right: 20px;">
                            <div>
                                <p style="margin: 0;">Profile: <?php echo htmlspecialchars($row['description']); ?></p>
                                <video width="320" height="240" controls>
                                    <source src="<?php echo htmlspecialchars($row['location']); ?>" type="video/<?php echo pathinfo($row['location'], PATHINFO_EXTENSION); ?>">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div> <!-- /.col-md-12 -->
    </div> <!-- /.row -->
</div> <!-- /#menu-2 -->

                    <div id="photos-4" class="gallery content">
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="g-item">
                                    <img src="images/gallery/g9.jpg" alt="">
                                    <a data-rel="lightbox" class="overlay" href="images/gallery/g9.jpg">
                                        <span>+</span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-sm-6">
                                <div class="g-item">
                                    <img src="images/gallery/g2.jpg" alt="">
                                    <a data-rel="lightbox" class="overlay" href="images/gallery/g2.jpg">
                                        <span>+</span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-sm-6">
                                <div class="g-item">
                                    <img src="images/gallery/g3.jpg" alt="">
                                    <a data-rel="lightbox" class="overlay" href="images/gallery/g3.jpg">
                                        <span>+</span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-sm-6">
                                <div class="g-item">
                                    <img src="images/gallery/g4.jpg" alt="">
                                    <a data-rel="lightbox" class="overlay" href="images/gallery/g4.jpg">
                                        <span>+</span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-sm-6">
                                <div class="g-item">
                                    <img src="images/gallery/g5.jpg" alt="">
                                    <a data-rel="lightbox" class="overlay" href="images/gallery/g5.jpg">
                                        <span>+</span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-sm-6">
                                <div class="g-item">
                                    <img src="images/gallery/g3.jpg" alt="">
                                    <a data-rel="lightbox" class="overlay" href="images/gallery/g3.jpg">
                                        <span>+</span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-sm-6">
                                <div class="g-item">
                                    <img src="images/gallery/g2.jpg" alt="">
                                    <a data-rel="lightbox" class="overlay" href="images/gallery/g2.jpg">
                                        <span>+</span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-sm-6">
                                <div class="g-item">
                                    <img src="images/gallery/g6.jpg" alt="">
                                    <a data-rel="lightbox" class="overlay" href="images/gallery/g6.jpg">
                                        <span>+</span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->
                            
                            <div class="col-md-4 col-sm-6">
                                <div class="g-item">
                                    <img src="images/gallery/g3.jpg" alt="">
                                    <a data-rel="lightbox" class="overlay" href="images/gallery/g3.jpg">
                                        <span>+</span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-sm-6">
                                <div class="g-item">
                                    <img src="images/gallery/g9.jpg" alt="">
                                    <a data-rel="lightbox" class="overlay" href="images/gallery/g9.jpg">
                                        <span>+</span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->  
                        </div> <!-- /.row -->
                    </div> <!-- /.gallery -->
                    <div id="submit-5" class="contact content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="toggle-content text-center spacing">
                                    <h3>Submit Your work</h3>
                                </div>
                            </div> <!-- /.col-md-12 -->
                            </div> <!-- /.col-md-12 -->
                            <div class="col-md-12">
                                <div class="contact-form">
                                    <div class="row">
                                    <form action="save_video.php" method="post" enctype="multipart/form-data"> <!-- Added enctype -->
                                    	<!-- <form action="#" method="post"> -->
                                            <fieldset class="col-md-4">
                                                <input id="name" type="text" name="name" placeholder="Name">
                                            </fieldset>
                                            <fieldset class="col-md-4">
                                                <input type="email" name="email" id="email" placeholder="Email">
                                            </fieldset>
                                            <fieldset class="col-md-4">
                                                <input type="text" name="subject" id="subject" placeholder="Type of Work">
                                            </fieldset>
                                            <fieldset class="col-md-12">
                                                <textarea name="message" id="message" placeholder="About You"></textarea>
                                            </fieldset>
                                            <fieldset class="col-md-12">
                                            <h3 style="color: white; font-weight: bold;">Upload Your Photo</h3>
                                            <input type="file" name="image" id="image" accept="image/*" style="border: 1px solid #ccc; padding: 10px;" placeholder="Upload Photo"> <!-- Photo upload field -->
                                            </fieldset>
                                            <fieldset class="col-md-12">
                                            <h3 style="color: white; font-weight: bold;">Upload Your Video</h3>
                                           <input type="file" name="video" id="video" accept="video/*" placeholder="Upload Video"> <!-- Video upload field -->
                                           </fieldset>
                                            <fieldset class="col-md-12">
                                                <input type="submit" name="save" value="Submit Work" id="submit" class="button">
                                            </fieldset>
                                        </form>
                                    </div> <!-- /.row -->
                                </div> <!-- /.contact-form -->
                            </div> <!-- /.col-md-12 -->
                        </div> <!-- /.row -->
                    
                    <div id="contact-6" class="contact content">
                        <div class="row">
                        	
                            <div class="col-md-12">
                                <div class="toggle-content text-center spacing">
                                    <h3>Contact Us</h3>
                                    <p>The Feta Music Award is an Ethiopian music award event that recognizes and celebrates outstanding achievements in the Ethiopian music industry. It honors musicians, producers, songwriters, and other professionals who have made significant contributions to the development and popularity of Ethiopian music.
                                    The award categories typically cover a wide range of genres and aspects of music, such as traditional, contemporary, hip-hop, pop, and others. It serves as a platform to promote and uplift Ethiopian artists by showcasing their work to a broader audience. The Feta Music Award also plays a crucial role in highlighting the evolving trends and talents in the Ethiopian music scene.
It is organized as part of a broader effort to promote arts and culture in Ethiopia, gaining popularity since its inception.
</p>
                                    <p><br><br><strong>Address:</strong> 123 Thamine Street, Digital Estate, Yangon 10620, Myanmar
                                    <br><strong>Email:</strong> info@company.com | <strong>Tel:</strong> 010-020-0340</p>
                                </div>
                            </div> <!-- /.col-md-12 -->
                            <div class="col-md-12">
                                <div class="contact-form">
                                    <div class="row">
                                    	<form action="#" method="post">
                                            <fieldset class="col-md-4">
                                                <input id="name" type="text" name="name" placeholder="Name">
                                            </fieldset>
                                            <fieldset class="col-md-4">
                                                <input type="email" name="email" id="email" placeholder="Email">
                                            </fieldset>
                                            <fieldset class="col-md-4">
                                                <input type="text" name="subject" id="subject" placeholder="Subject">
                                            </fieldset>
                                            <fieldset class="col-md-12">
                                                <textarea name="message" id="message" placeholder="Message"></textarea>
                                            </fieldset>
                                            <fieldset class="col-md-12">
                                                <input type="submit" name="send" value="Send Message" id="submit" class="button">
                                            </fieldset>
                                        </form>
                                    </div> <!-- /.row -->
                                </div> <!-- /.contact-form -->
                            </div> <!-- /.col-md-12 -->
                        </div> <!-- /.row -->
                    </div> <!-- /.contact -->
                    

                </div> <!-- /#menu-container -->

            </div> <!-- /.col-md-8 -->

        </div> <!-- /.row -->
    <!-- </div> /.container-fluid -->
    
    <div class="container-fluid">   
        <div class="row">
            <div class="col-md-12 footer">
                <p id="footer-text">
                
                	Copyright &copy; 2024 <a href="#">Heminat Software Solutions</a>
                 
                 </p>
            </div><!-- /.footer --> 
        </div>
    </div> <!-- /.container-fluid -->

    <script src="js/vendor/jquery-1.10.1.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
    <script src="js/jquery.easing-1.3.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript">
            
			jQuery(function ($) {

                $.supersized({

                    // Functionality
                    slide_interval: 3000, // Length between transitions
                    transition: 1, // 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
                    transition_speed: 700, // Speed of transition

                    // Components                           
                    slide_links: 'blank', // Individual links for each slide (Options: false, 'num', 'name', 'blank')
                    slides: [ // Slideshow Images
                        {
                            image: 'images/templatemo-slide-1.jpg'
                        }, {
                            image: 'images/templatemo-slide-2.jpg'
                        }, {
                            image: 'images/templatemo-slide-3.jpg'
                        }, {
                            image: 'images/templatemo-slide-4.jpg'
                        }
                    ]

                });
            });
            
    </script>
    
    	<!-- Google Map -->
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="js/vendor/jquery.gmap3.min.js"></script>
        <!-- Google Map Init-->
        <script type="text/javascript">
           function templatemo_map() {
                $('.google-map').gmap3({
                    marker:{
                        address: '16.8496189,96.1288854' 
                    },
                        map:{
                        options:{
                        zoom: 15,
                        scrollwheel: false,
                        streetViewControl : true
                        }
                    }
                });
            }
        </script>
        <script>
  document.addEventListener("DOMContentLoaded", function() {
    let hash = window.location.hash;

    if (hash) {
      // Show the corresponding section based on the hash
      let targetSection = document.querySelector(hash);
      if (targetSection) {
        document.querySelectorAll('.content').forEach(content => {
          content.style.display = 'none'; // Hide all content sections
        });
        targetSection.style.display = 'block'; // Show the correct section
      }
    }

    // Add click event listeners to menu links
    document.querySelectorAll('.menu a').forEach(link => {
      link.addEventListener('click', function(e) {
        e.preventDefault(); // Prevent default anchor behavior
        let target = this.getAttribute('href');
        window.location.hash = target;
        document.querySelectorAll('.content').forEach(content => {
          content.style.display = 'none'; // Hide all content sections
        });
        document.querySelector(target).style.display = 'block'; // Show the clicked section
      });
    });
  });
</script>
</body>
</html>