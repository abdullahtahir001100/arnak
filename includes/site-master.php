<?php
$page = substr(basename($_SERVER['PHP_SELF']), 0, -4);
if ($_SERVER['HTTP_HOST'] != 'localhost') {
    $baseurl = "http://herosolutions.com.pk/urooj/arnak/";
} else {
    $baseurl = "http://localhost/arnak/";
}
?>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?=$baseurl?>css/bootstrap.min.css">
<link rel="stylesheet" href="<?=$baseurl?>css/font-awesome.min.css">
<link rel="stylesheet" href="<?=$baseurl?>css/owl.theme.default.min.css">
<link rel="stylesheet" href="<?=$baseurl?>css/owl.carousel.min.css">
<link rel="stylesheet" href="<?=$baseurl?>css/commonCss.css">
<link rel="stylesheet" href="<?=$baseurl?>css\responsive.css?v=1">
<link rel="stylesheet" href="<?=$baseurl?>css/style.css?v=2">
<!-- <link rel="stylesheet" href="<?=$baseurl?>css/percircle.css"> -->