<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Marks:</h1>
        <a href="<?= base_url('/')?>" class="btn btn-info" role="button">Logout</a>
        <p><strong>Name:</strong> <?= $student['name'] ?></p>
        <table class="table table-bordered table-hover">
            <thead>
                <tr class="text-primary">
                    <th>Subject_name</th>
                    <th>Mark</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($marks as $row): ?>
                    <tr>
                        <td><?= $row['subject_name'] ?></td>
                        <td><?= $row['marks'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
