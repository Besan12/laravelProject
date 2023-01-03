<?php $__env->startSection('content'); ?>

<?php echo $__env->make('includes.includeCreateStatus', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('includes.includeErrors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Create Category</h4>
                  <form class="forms-sample" method="post" action="<?php echo e(URL::to('/storeCategory')); ?>" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <div class="form-group">
                      <label for="exampleInputName1">Name</label>
                      <input type="text" class="form-control" name="name"  placeholder="Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Number of Courses</label>
                      <input type="text" class="form-control" name="courses" placeholder="Courses">
                    </div>
                    <div class="form-group">
                      <div><label>Category Image</label></div>
                      <input type="file" name="img" >
                    </div>
                    <hr>
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
      <!-- partial -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboardMain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LaravelProjects\assignment\resources\views/dashboard/createCategory.blade.php ENDPATH**/ ?>