<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?> | Mekar Laser Cutting Digital</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <?= $this->include('layouts/navbar'); ?>
        <?= $this->renderSection('content'); ?>
        <h1><?= $title?></h1>
    </div>
    <script src="/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>