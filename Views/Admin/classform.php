<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <nav class="navbar navbar-expand-lg bg-info navbar-dark">
    <a class="navbar-brand" href="<?= base_url('/Admin')?>">Dashboard</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
</nav>
        <h1 class="mt-5">Add Class</h1>
        <?php if (session()->has("errors")):?>
            <ul>
                <?php foreach(session("errors") as $error):?>
                    <li><?= $error ?></li>
                <?php endforeach;?>
            </ul>
            <?php endif; ?>
            </div>
        <form action="<?= base_url('/classdata') ?>" method="post">
            <div class="form-group">
                <label for="class_name">class_name</label>
                <input type="text" class="form-control" id="class_name" name="class_name" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>