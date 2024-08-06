<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <style>
        body {
            background-color: #007bff;
            color: white;
        }

        .container {
            padding-top: 50px;
        }

        .welcome-heading {
            text-align: center;
            margin-bottom: 50px;
        }

        .teacher-login {
            background-color: #ffffff;
            color: #000000;
            padding: 20px;
            border-radius: 10px;
        }

        .student-login {
            background-color: rgba(255, 255, 255, 0.3);
            color: #ffffff;
            padding: 20px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="welcome-heading">Welcome to Student Result Management</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="teacher-login">
                <?php
                    if(session()->getFlashdata('message')){
                    echo "<h4>".session()->getFlashdata('message')."</h4>";
                    }
                    ?>
                    <h2>Teacher Login</h2>
                    <form action="<?= base_url('/adminlogin') ?>" method="post">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                        <p>Create an account <a href="<?= base_url('/register')?>">Register</a> </P>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="student-login">
                    <h2>Student Login</h2>
                    <form action="<?= base_url('/studentlogin') ?>" method="post">
                        <div class="form-group">
                            <label for="roll_no">Roll Number</label>
                            <input type="text" class="form-control" id="roll_no" name="roll_no" required>
                        </div>
                        <div class="form-group">
                            <label for="class_name">Class Name</label>
                            <input type="text" class="form-control" id="class_name" name="class_name" required>
                        </div>
                        <button type="submit" class="btn btn-light">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
