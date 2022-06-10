
<?php $__env->startSection('content'); ?>
<br>
<h1>Admin dashbord</h1>
<table border="1">
    <tr>
        <th>Name</th>
        <th>Email</th>
    </tr>
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><a href="<?php echo e(route('details',['id'=>$user->id])); ?>"><?php echo e($user->name); ?></a></td>
            <td><?php echo e($user->email); ?></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Books\Advance web\Projects\UserManage\resources\views/adminDashbord.blade.php ENDPATH**/ ?>