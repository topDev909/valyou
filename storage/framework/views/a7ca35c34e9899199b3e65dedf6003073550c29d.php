<?php $__env->startSection('title'); ?> Upload <?php echo e($title); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <!-- Dropify css -->
    <link rel="stylesheet" href="<?php echo e(URL::asset('assets/libs/dropify/css/dropify.min.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- end row -->
    <div class="row">
        
    </div> <!-- end row -->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(URL::asset('assets/libs/parsleyjs/parsleyjs.min.js')); ?>"></script>
    <!-- Plugins js -->
    <script src="<?php echo e(URL::asset('assets/js/pages/form-validation.init.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/libs/dropify/js/dropify.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script-bottom'); ?>
    <script>
        $(function () {
            $('.dropify').dropify();
        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/testvps/public_html/resources/views/admin/media/upload-video.blade.php ENDPATH**/ ?>