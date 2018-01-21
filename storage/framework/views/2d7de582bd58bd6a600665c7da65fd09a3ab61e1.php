<!-- master.blade.php -->

<!doctype html>
<html lang="<?php echo e(config('app.locale')); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CRUD Operations</title>

        <!-- Fonts -->
        <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet" type="text/css">
    </head>
    <body>
        <br><br>
        <?php echo $__env->yieldContent('content'); ?>
    </body>
</html>
