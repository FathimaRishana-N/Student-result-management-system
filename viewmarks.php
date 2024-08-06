<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>marks Table</title>
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
        <h1>Marks</h1>
        <table class="table table-bordered table-hover">
            <thead>
                <tr class="text-primary">
                    <th>Student_ID</th>
                    <th>Subject_ID</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($marks as $row): ?>
                    <tr>
                        <td><?= $row['student_id'] ?></td>
                        <td><?= $row['subject_id'] ?></td>
                        <td><?= $row['marks'] ?></td>
                        <td>
                            <a href="" class="btn btn-secondary">Edit</a>
                            <a href="" class="btn btn-secondary">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
