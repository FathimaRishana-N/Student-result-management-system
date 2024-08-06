<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subjects</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <nav class="navbar navbar-expand-lg bg-info navbar-dark">
    <a class="navbar-brand" href="<?= base_url('/Admin')?>">Dashboard</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
</nav>
<?php
    if(session()->getFlashdata('status')){
        echo "<h4>".session()->getFlashdata('status')."</h4>";
    }
    ?>
        <h1>Subjects</h1>
        <table class="table table-bordered table-hover">
            <thead>
                <tr class="text-primary">
                    <th>ID</th>
                    <th>Subject Name</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($subject as $row): ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['subject_name'] ?></td>
                        <td>
                            <a href="<?= base_url('/deletesubject/'.$row['id'])?>" class="btn btn-secondary">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
