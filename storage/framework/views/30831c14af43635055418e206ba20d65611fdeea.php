<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <div>
        <a href="<?php echo e(route('home')); ?>">Home</a>
        <a href="<?php echo e(route('register')); ?>">Register</a>
        <a href="<?php echo e(route('login')); ?>">Login</a>
        <br>
        </div>
        <?php echo $__env->yieldContent('content'); ?>
    </body>
</html><?php /**PATH D:\Books\Advance web\Projects\UserManage\resources\views/layouts/main.blade.php ENDPATH**/ ?>