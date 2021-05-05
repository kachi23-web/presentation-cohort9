<?php $__env->startSection('body'); ?>
    <div class="row mb-5">
        <div class="col-12 mb-3">
            <div class="card bg-white">
                <div class="card-body">
                    <h3 class="card-title">Welcome to the Library</h3>
                    <div class="row">
                        <p class="col-6 card-text d-none d-lg-block">This is the course catalog you will build, from scratch, in Treehouse's Laravel Basics course. Learn how to get started, connect a database, serve your app, migrate and seed a datatbase, create routes, controllers and models. See you there and as always, happy coding. ✨</p>
                        <div class="col-6 mx-auto d-block">
                            <img src="<?php echo e(asset('images/welcome-truck.png')); ?>" alt="welcome truck">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-4 mb-3">
            <div class="card m-0 bg-white" style="max-height: 300px; height:300px;">
                <div class="card-header" style="background-color:<?php echo e($course->language === 'JavaScript' ? '#3659a2' : ($course->language === 'Python' ? '#008297' : ($course->language === 'iOS' ? '#30826C' : ($course->language === 'C#' ? '#008297' : ($course->language === 'PHP' ? '#008297' : '#9F4B84'))))); ?>">
                    <p class="float-right text-white" ><b><?php echo e($course->duration >= 120 ? round($course->duration / 60) . ' hours' : $course->duration . ' min'); ?></b></p>
                </div>

                <div class="card-body" style="max-height:175px; height:175px">
                    <h6 class="m-0">Course</h6>
                    <h5 class="m-0"><?php echo e($course->title); ?></h5>
                    <p style="overflow:hidden; text-overflow:ellipsis; height:75px; max-height:75px" ><?php echo e($course->summary); ?></p>
                </div>
                <div class="card-footer bg-white">
                    <button class="btn rounded bg-white border-dark" style="border-radius:2em !important; color:<?php echo e($course->language === 'JavaScript' ? '#3659a2' : ($course->language === 'Python' ? '#008297' : ($course->language === 'iOS' ? '#30826C' : '#9F4B84'))); ?>" ><b><?php echo e($course->language); ?></b></button> <button class="btn rounded bg-white border-dark" style="border-radius:2em !important;"><b><?php echo e($course->difficulty); ?></b></button></h5>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('treehouse', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\treehouse\resources\views/library.blade.php ENDPATH**/ ?>