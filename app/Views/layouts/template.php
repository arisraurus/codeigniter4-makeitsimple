<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Navbar Stickied to the Top</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container mt-2">
        <div class="p-2 bg-info">
            <h1>Demo Header</h1>
        </div>
        <!-- Menu ada disini -->
        <?= $this->include('layouts/menu'); ?>
        <!-- Demo Content -->
        <?= $this->renderSection('content'); ?>


    </div>
</body>

</html>