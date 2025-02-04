<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopper Stock | <?= esc($this->renderSection('title') ?? "Home") ?></title>

    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>

<body>
    <?= $this->renderSection('body') ?>

    <script src="/js/script.js"></script>

    <script>
        window.addEventListener('DOMContentLoaded', function() {
            <?php if (session()->has('success')): ?>
                alert('<?= esc(session('success')) ?>');
            <?php endif; ?>
            <?php if (session()->has('error')): ?>
                alert('<?= esc(session('error')) ?>');
            <?php endif; ?>
        });
    </script>

</body>

</html>