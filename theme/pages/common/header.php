<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Workshop Scheduler</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_bloginfo('template_directory'); ?>/style.css"
    />
    <script defer src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script defer src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

</head>

<body>
    <!--
<header>
    <img alt="Logo" src="<?php echo get_bloginfo('template_directory'); ?>/assets/logo.png">
    <nav>
        <a class="title" href="estudantes.html">Estudantes</a>
        <a class="title" href="docentes.html">Docentes</a>
        <a class="title" href="palestrantes.html">Palestrantes</a>
    </nav>
</header> -->

    <header>
        <nav class="navbar navbar-expand-md fixed-top navbar-light">
            <a class="navbar-brand" href="#">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/logo.png" class="d-inline-block align-top" alt="">
            </a>
            <button class="navbar-toggler w-100" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto w-100 justify-content-end">
                    <li class="title nav-item">
                        <a class="nav-link" href="#">Estudantes</a>
                    </li>
                    <li class="title nav-item">
                        <a class="nav-link" href="#">Docentes</a>
                    </li>
                    <li class="title nav-item">
                        <a class="nav-link" href="#">Palestrantes</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>