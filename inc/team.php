<?php

// create an array for the team members 
$arr = [
    "name" => "John Doe",
    "position" => "CEO",
    "description" => " Lorem ipsum dolor sit quod, voluptatem, voluptate,",
    "image" => "assets/images/ndn/mag/kevin.jpg",
    "social" => [
        "facebook" => "https://facebook.com",
        "twitter" => "https://twitter.com",
        "instagram" => "https://instagram.com",
        "linkedin" => "https://linkedin.com"
    ],
    "name" => "John Doe",
    "position" => "CEO",
    "description" => " Lorem ipsum dolor sit quod, voluptatem, voluptate,",
    "image" => "./assets/images/ndn/mag/mag2.jpg",
    "social" => [
        "facebook" => "https://facebook.com",
        "twitter" => "https://twitter.com",
        "instagram" => "https://instagram.com",
        "linkedin" => "https://linkedin.com"
    ],

];

?>

<div class="five-item-carousel owl-carousel owl-theme owl-nav-none">
    <php foreach($team as $team): ?>
        <div class="team-block-one">
            <div class="inner-box">
                <figure class="image-box"><img src="assets/images/team/<? echo $team['image'] ?>" alt=""></figure>
                <div class="content-box">
                    <div class="info">
                        <span class="designation"><? echo $team['designation'] ?></span>
                        <h3><?= $team['name'] ?></h3>
                    </div>
                    <figure class="thumb-box"><img src="assets/images/team/<?php $team['image'] ?>" alt=""></figure>
                    <div class="text">
                        <p><? echo $team['description'] ?></p>
                    </div>
                </div>
                <ul class="social-links clearfix">
                    <li><a href="index.php"><i class="fab fa-facebook-f"><? echo $team['social']['facebook'] ?> </i></a></li>
                    <li><a href="index.php"><i class="fab fa-twitter"><? echo $team['social']['twitter'] ?></i></a></li>
                    <li><a href="index.php"><i class="fab fa-linkedin-in"><? echo $team['social']['linkedin'] ?></i></a></li>
                </ul>
            </div>
        </div>
</div>