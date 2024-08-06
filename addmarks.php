<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Marks</title>
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
        <h1 class="mt-5">Add Marks</h1>
        <?php if (session()->has("errors")):?>
            <ul>
                <?php foreach(session("errors") as $error):?>
                    <li><?= $error ?></li>
                <?php endforeach;?>
            </ul>
            <?php endif; ?>
        <form action="<?= base_url('/marksadding') ?>" method="post">
            <div class="form-group">
                <label for="student_id">Student ID</label>
                <input type="text" class="form-control" id="student_id" name="student_id" required>
            </div>
            <div class="form-group">
                <label for="subject_id">Subject ID</label>
                <input type="text" class="form-control" id="subject_id" name="subject_id" required>
            </div>
            <div class="form-group">
                <label for="marks">Marks</label>
                <input type="text" class="form-control" id="marks" name="marks" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
