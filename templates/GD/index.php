<?php
require "_app/config.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edg>"
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>GoldIdeia - Aqui suas ideias valem Ouro!</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?= HOME; ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?= HOME; ?>/css/agency.css" rel="stylesheet">

    <!-- custom CSS  -->
    <link href="<?= HOME; ?>/css/style.css" rel="stylesheet">
    
    <!-- util CSS  -->
    <link href="<?= HOME; ?>/css/util.css" rel="stylesheet">
    
    <!-- main CSS  -->
    <link href="<?= HOME; ?>/css/main.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?= HOME; ?>/_cdn/font-awesome-5.4.1/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">
    <?php
    
    $urlget = filter_input(INPUT_GET,'url',FILTER_DEFAULT);
    $url = explode('/',$urlget);

    $url[0] = ($url[0] == null) ? 'home' : $url[0];

    if(file_exists(REQUIRE_PATH . '/'. $url[0].'.php') && !is_dir(REQUIRE_PATH . '/' . $url[0] . '.php')) :
        switch ($url[0]) {
            case 'cadastro':
            case 'login':
                require REQUIRE_PATH . "/{$url[0]}.php";
                break;    
            default:
                if(isset($_SESSION['Login']['email'])):
                    require REQUIRE_PATH . "inc/headerlogado.inc.php";
                    if($url[0] == 'home'):
                        $url[0] = 'homeuser';
                    endif;  
                    require REQUIRE_PATH . "/{$url[0]}.php";
                else:
                    $page_avl = ['login', 'cadastro', 'home'];
                    require REQUIRE_PATH . "inc/header.inc.php";
                    if(!in_array($url[0],$page_avl)):
                        header('LOCATION: '.HOME.'/home');
                        die;
                    endif;
                    require REQUIRE_PATH . "/{$url[0]}.php";
                endif;
                break;
        }       
    elseif (isset($url[1]) && file_exists(REQUIRE_PATH . '/' . $url[0] . '/'. $url[1] . '.php') && !is_dir(REQUIRE_PATH . '/' . $url[0] . '.php')) :
        require REQUIRE_PATH . "inc/header.inc.php";
        require REQUIRE_PATH . "/{$url[0]}/{$url [1]}.php";
    else:
        require "404.php";
    endif;

    require REQUIRE_PATH . "inc/modal.inc.php";
    require REQUIRE_PATH . "inc/footer.inc.php";
    ?>

    <!-- jQuery Version 1.11.0 -->
    <script src="<?= HOME; ?>/js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?= HOME; ?>/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="<?= HOME; ?>/js/classie.js"></script>
    <script src="<?= HOME; ?>/js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?= HOME; ?>/js/jqBootstrapValidation.js"></script>
    
    <!-- Custom Theme JavaScript -->
    <script src="<?= HOME; ?>/js/main.js"></script>
    
    <!-- Custom Theme JavaScript -->
    <script src="<?= HOME; ?>/js/agency.js"></script>

</body>

</html>
