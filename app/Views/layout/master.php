<!doctype html>
<html>
<head>
    <title>Assignment</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>">


</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container">
        <a class="navbar-brand" href="<?= url_to('Home::Brand') ?>"><span style="color:red;">AssignMent </span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link text-white" href="<?= url_to('Home::Brand') ?>">Brand <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="<?= url_to('Home::Models') ?>">Models</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="<?= url_to('Home::item') ?>">items</a>
        </li>
        </ul>
    </div>
        </div>
</nav>

    <?= $this->renderSection('content') ?>

    <footer>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <div class="container text-center">
        <a class="navbar-brand " href="#">Footer</a>
    </div>
    </nav>
    </footer>

    <!-- javascript link -->
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('assets/js/index.js'); ?>" ></script>
</body>
</html>