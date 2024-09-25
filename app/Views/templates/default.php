<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS</title>
    <!-- STYLES  -->
    <link rel="stylesheet" href="<?= base_url() ?>css/output.css">
    <link rel="stylesheet" href="<?= base_url() ?>css/common.css">
    <!-- FONT  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>

<body>
    <div class="flex">
        <?= $this->include('templates/sidebar') ?>
        <main class="max-w-5xl pt-6 flex-1 md:ml-60 ml-28 pr-4 transition-spacing duration-150" id="side-content">
            <div class="">
                <?= $this->renderSection('content') ?>
            </div>
        </main>
    </div>
    <!-- base url for external js  -->
    <script>
        var BASE_URL = "<?= base_url(); ?>";
    </script>
    <script src="<?= base_url() ?>js/global.js"></script>
</body>

</html>