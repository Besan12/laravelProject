<?php $__env->startSection('content'); ?>

    <!-- Header Start -->
    <div class="container-fluid page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">Courses</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="<?php echo e(URL::to('/')); ?>">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Courses</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


<?php echo $__env->make('includes.includeCategory' , ['categories', $categories], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="paginate">
        <?php echo e($categories->links()); ?>

    </div>

<?php echo $__env->make('includes.includeCourse' , ['courses', $courses], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="paginate">
        <?php echo e($courses->links()); ?>

    </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LaravelProjects\assignment\resources\views/course.blade.php ENDPATH**/ ?>