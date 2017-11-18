<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="<?php echo(isset($meta_title)? $meta_title : '');?>">
    <meta name="description" content="<?php echo(isset($meta_description)? $meta_description : '');?>">
    <meta name="author" content="<?php echo(isset($meta_author)? $meta_author : '');?>">
    <link rel="icon" href="<?php echo base_url(); ?>assets/images/favicon.ico">
    <title><?php echo(isset($meta_title)? $meta_title : '');?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/css/theme.css" rel="stylesheet">

    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body role="document">

<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse navbar-right">
            <ul class="nav navbar-nav">
                <?php if(isset($this->session->userdata(SESSION_COOKIE)['username'])){ ?>
                    <li><a href="<?php echo base_url()?>home"><?php echo(isset($menu_home)? $menu_home : '');?></a></li>
                <?php } ?>

                <?php if(isset($this->session->userdata(SESSION_COOKIE)['username'])){ ?>
                    <li><a href="<?php echo base_url()?>logout"><?php echo(isset($menu_logout)? $menu_logout : '');?></a></li>
                <?php }else{ ?>
                    <li><a href="<?php echo base_url()?>signup"><?php echo(isset($menu_signup)? $menu_signup : '');?></a></li>
                    <li><a href="<?php echo base_url()?>login"><?php echo(isset($menu_login)? $menu_login : '');?></a></li>
                <?php } ?>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

