<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <nav class="navbar navbar-expand-lg bg-info navbar-dark">
    <a class="navbar-brand" href="<?= base_url('/viewstudents')?>">View students</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
</nav>
        <h1 class="mt-5">Update Student</h1>
        <?php if(session()->has('errors')): ?>
            <div class="alert alert-danger" role="alert">
                <?php foreach(session('errors') as $error): ?>
                    <?= esc($error) ?><br>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        <form action="<?=base_url('/studentupdate/'.$student['id'])?>" method="post">
            <div class="form-group">
                <label for="roll_number">Roll Number</label>
                <input type="text" class="form-control" id="rollNo" name="rollNo" value="<?= $student['rollNo']?>" required>
            </div>
            <div class="form-group">
                <label for="name"> Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?= $student['name']?>" required>
            </div>
            <div class="form-group">
                <label for="class">Class</label>
                <input type="text" class="form-control" id="class" name="class" value="<?= $student['class']?>"required>
            </div>
            <button type="submit" class="btn btn-primary">Update student</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>