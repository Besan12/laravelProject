<!-- Blog Start -->
<div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Our Blog</h5>
                <h1>Latest From Our Blog</h1>
            </div>
            <div class="row pb-3">
                <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 mb-4">
                    <div class="blog-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="<?php echo e(asset($blog->img)); ?>" alt="">
                        <a class="blog-overlay text-decoration-none" href="">
                            <h5 class="text-white mb-3"><?php echo e($blog->description); ?></h5>
                            <p class="text-primary m-0"><?php echo e($blog->created_at); ?></p>
                        </a>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
    <!-- Blog End --><?php /**PATH C:\xampp\htdocs\LaravelProjects\assignment\resources\views/includes/includeBlog.blade.php ENDPATH**/ ?>