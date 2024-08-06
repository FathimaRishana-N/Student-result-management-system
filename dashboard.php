<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Dashboard</title>
    <link href="<?= base_url('bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1 class="text-muted">Teacher Dashboard</h1>
    <?php
    if(session()->getFlashdata('message')){
        echo "<h4>".session()->getFlashdata('message')."</h4>";
    }
    ?>
    <?php if(session()->has('success')): ?>
            <div class="alert alert-success" role="alert">
                <?= session('success') ?>
            </div>
        <?php endif; ?>
    <nav class="navbar navbar-expand-lg bg-info navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="studentDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Student
                </a>
                <div class="dropdown-menu" aria-labelledby="studentDropdown">
                    <a class="dropdown-item" href="<?= base_url('/studentform')?>">Add</a>
                    <a class="dropdown-item" href="<?= base_url('/viewstudents')?>">View students</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="classDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Class
                </a>
                <div class="dropdown-menu" aria-labelledby="classDropdown">
                    <a class="dropdown-item" href="<?= base_url('/classform')?>">Add</a>
                    <a class="dropdown-item" href="<?= base_url('/viewclass')?>">View class</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="subjectDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Subject
                </a>
                <div class="dropdown-menu" aria-labelledby="subjectDropdown">
                    <a class="dropdown-item" href="<?= base_url('/subjectadd')?>">Add</a>
                    <a class="dropdown-item" href="<?= base_url('/viewsubject')?>">View Subjects</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="marksDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Marks
                </a>
                <div class="dropdown-menu" aria-labelledby="marksDropdown">
                    <a class="dropdown-item" href="<?= base_url('/addmarks')?>">Add</a>
                    <a class="dropdown-item" href="<?= base_url('/viewmarks')?>">View Marks</a>
                </div>
            </li>
            <li class="nav-item">
            <a href="<?= base_url('/')?>" class="btn btn-info" role="button">Logout</a>
            </li>
        </ul>
    </nav>
    <div class="row fill-screen">
        <div class="col-md-6">
            <img class="img-fluid" src="photo.jpg" alt="image">
        </div>
        <div class="col-md-6 d-flex align-items-center">
            <p class="fs-6 text-primary font-weight-bolder text-justify">Welcome to the Student Result Management System. This provides access to various tools and features for managing student results, classes, subjects, and more.</p>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>