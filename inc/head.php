
<?php 
    global $site_title;

    function get_title($title) {
        global $page_title;
        $SITE_NAME = "Active Youth Africa";
        // remove .php from the end of the title
        $title = str_replace('.php', '', $title);
        // if the title is index, use Home instead
        if (strtolower($title) == 'index') {
            error_log("index");
            $title = 'Home';
        }
        // join the title with the site name
        $page_title = $title . ' | ' . $SITE_NAME;
        
        return $page_title;
    }
    
    // page title comes from the page visited
    // eg: /about.php => About Us
    //     /contact.php => Contact Us
    //     /index.php => Home
    
    $page_visited = basename($_SERVER['PHP_SELF']);
    $page_title = ucwords(str_replace("-", " ", $page_visited));
    
    $site_title = get_title($page_title);
    error_log($page_visited);

?>


<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title><?php echo $site_title ?></title>

<!-- Fav Icon -->
<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;0,900;1,300;1,400;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="assets/css/font-awesome-all.css" rel="stylesheet">
<link href="assets/css/flaticon.css" rel="stylesheet">
<link href="assets/css/owl.css" rel="stylesheet">
<link href="assets/css/swiper.min.css" rel="stylesheet">
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/jquery.fancybox.min.css" rel="stylesheet">
<link href="assets/css/animate.css" rel="stylesheet">
<link href="assets/css/jquery.bootstrap-touchspin.css" rel="stylesheet">
<link href="assets/css/color.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/responsive.css" rel="stylesheet">

</head>