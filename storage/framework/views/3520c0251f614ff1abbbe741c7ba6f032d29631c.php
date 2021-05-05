<!doctype html>
<html lang="en">
<?php echo $__env->make('head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- START body -->
<body style="background-color: #edeff0 !important">

    <?php echo $__env->make('nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- START library.blade.php -->
    <main role="main" class="container">
    
    <!--not meant to be reusable -->
         <?php echo $__env->yieldContent('body'); ?> 
    </main>
    <!-- END library.blade.php -->

   

    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   
</body> <!-- END Body -->
</html>
<?php /**PATH C:\xampp\htdocs\tree house\treehouse\resources\views/treehouse.blade.php ENDPATH**/ ?>