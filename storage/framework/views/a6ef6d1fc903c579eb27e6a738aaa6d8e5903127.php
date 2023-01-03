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
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit course form</h4>
                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputName1">Name</label>
                      <input type="text" class="form-control" name="name"  value="<?php echo e($course->name); ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Description</label>
                      <input type="text" class="form-control" name="description" value="<?php echo e($course->description); ?>">
                    </div>
                    
                    <div class="form-group">
                      <label>Image
                      <input type="image" name="img" class="file-upload-default">
                      </label>
                    </div>
                    
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        
      </div>
    </div>
    <!-- page-body-wrapper ends -->
  </div>

  <!-- base:js -->
  <script src="<?php echo e(asset('js/vendor.bundle.base.js')); ?>"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="<?php echo e(asset('js/off-canvas.js')); ?>"></script>
  <script src="<?php echo e(asset('js/hoverable-collapse.js')); ?>"></script>
  <script src="<?php echo e(asset('js/template.js')); ?>"></script>
  <script src="<?php echo e(asset('js/settings.js')); ?>"></script>
  <script src="<?php echo e(asset('js/todolist.js')); ?>"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="<?php echo e(asset('js/typeahead.bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('js/select2.min.js')); ?>"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="<?php echo e(asset('js/file-upload.js')); ?>"></script>
  <script src="<?php echo e(asset('js/typeahead.js')); ?>"></script>
  <script src="<?php echo e(asset('js/select2.js')); ?>"></script>
  <!-- End custom js for this page-->
</body>

</html>
<?php /**PATH C:\xampp\htdocs\Laravel\assignment\resources\views/dashboard/editCourse.blade.php ENDPATH**/ ?>