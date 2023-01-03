<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin</title>
  <!-- base:css -->
  <link rel="stylesheet" href="<?php echo e(asset('css/typicons.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/vendor.bundle.base.css')); ?>">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo e(asset('css/style2.css')); ?>">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo e(asset('img/favicon.png')); ?>" />
</head>

<body>
    <div>   
        <div class="container-fluid page-body-wrapper" >
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(URL::to('/dashboard')); ?>">
                    <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(URL::to('/indexBlog')); ?>">
                    <span class="menu-title">Blogs Table</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(URL::to('/indexTeacher')); ?>">
                    <span class="menu-title">Teachers Table</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(URL::to('/indexCategory')); ?>">
                    <span class="menu-title">Categories Table</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(URL::to('/indexFeedback')); ?>">
                    <span class="menu-title">Feedback Table</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(URL::to('/indexContact')); ?>">
                    <span class="menu-title">Contacts Table</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(URL::to('/createCourse')); ?>">
                    <span class="menu-title">Create Course</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(URL::to('/createBlog')); ?>">
                    <span class="menu-title">Create Blog</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(URL::to('/createTeacher')); ?>">
                    <span class="menu-title">Create Teacher</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(URL::to('/createCategory')); ?>">
                    <span class="menu-title">Create Category</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(URL::to('/createFeedback')); ?>">
                    <span class="menu-title">Create Feedback</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(URL::to('/home')); ?>">
                    <span class="menu-title">Log out</span>
                    </a>
                </li>
                </ul>
            </nav>

<?php echo $__env->yieldContent('content'); ?>

</div>
<div>

</body>

  <!-- base:js -->
  <script src="<?php echo e(asset('js/vendor.bundle.base.js')); ?>"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="<?php echo e(asset('js//Chart.min.js')); ?>"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?php echo e(asset('js/off-canvas.js')); ?>"></script>
  <script src="<?php echo e(asset('js/hoverable-collapse.js')); ?>"></script>
  <script src="<?php echo e(asset('js/template.js')); ?>"></script>
  <script src="<?php echo e(asset('js/settings.js')); ?>"></script>
  <script src="<?php echo e(asset('js/todolist.js')); ?>"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?php echo e(asset('js/dashboard.js')); ?>"></script>
  <!-- End custom js for this page-->

</html>

<?php /**PATH C:\xampp\htdocs\LaravelProjects\assignment\resources\views/layouts/dashboardMain.blade.php ENDPATH**/ ?>