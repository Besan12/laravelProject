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
  <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo e(asset('img/favicon.png')); ?>" />
</head>

<body>
    
  <div>
    <!-- partial:partials/_navbar.html -->
    <nav>
     <div>
      <ul>
        <li>Log out</li>
      </ul>
     </div>
    </nav>

    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(URL::to('/')); ?>">
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(URL::to('/form')); ?>">
              <span class="menu-title">Form</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="<?php echo e(URL::to('/table')); ?>">
              <span class="menu-title">Table</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="table-responsive pt-3">
                  <table class="table table-striped project-orders-table">
                    <thead>
                      <tr>
                        <th class="ml-5">ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Image</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td><?php echo e($course->id); ?></td>
                        <td><?php echo e($course->name); ?></td>
                        <td><?php echo e($course->description); ?></td>
                        <td> <img src="<?php echo e(asset($course->img)); ?>" > </td>
                        <td>
                          <div class="d-flex align-items-center">
                            <?php if(empty($course->deleted_at)): ?>
                              <a href="<?php echo e(URL::to('/editCourse/' . $course->id)); ?>">
                            <button type="button" class="btn btn-success btn-sm btn-icon-text mr-3">
                              Edit
                            </button>
                              </a>
                            <a href="<?php echo e(URL::to('/deleteCourse/' . $course->id)); ?>">
                            <button type="button" class="btn btn-danger btn-sm btn-icon-text mr-3">
                              Delete
                            </button>
                            </a>
                            <?php else: ?>
                            <a href="<?php echo e(URL::to('/restoreCourse/' . $course->id)); ?>">
                            <button type="button" class="btn btn-danger btn-sm btn-icon-text">
                              Restore
                            </button>
                            </a>
                            <?php endif; ?>
                          </div>
                        </td>
                      </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

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
</body>

</html>

<?php /**PATH C:\xampp\htdocs\Laravel\assignment\resources\views/dashboard/index.blade.php ENDPATH**/ ?>