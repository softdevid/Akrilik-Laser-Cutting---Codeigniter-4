<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
</head>
<?= $this->include('layouts/navbar'); ?>
<?= $this->renderSection('content'); ?>

<body>
    <h1>Hello, world!</h1>
    <script src="/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>