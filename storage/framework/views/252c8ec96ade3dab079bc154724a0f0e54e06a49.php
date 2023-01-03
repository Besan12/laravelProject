<?php $__env->startSection('content'); ?>

<?php echo $__env->make('includes.includeEditStatus', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('includes.includeErrors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Teacher</h4>
                  <form class="forms-sample" method="post" action="<?php echo e(URL::to('/updateTeacher')); ?>" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="hidden" name="id" value="<?php echo e($teacher->id); ?>">
                    <div class="form-group">
                      <label for="exampleInputName1">Name</label>
                      <input type="text" class="form-control" name="name"  value="<?php echo e($teacher->name); ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Job</label>
                      <input type="text" class="form-control" name="job" value="<?php echo e($teacher->job); ?>">
                    </div>
                    <div class="form-group">
                      <div><label>Teacher Image</label></div>
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
<?php echo $__env->make('layouts.dashboardMain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LaravelProjects\assignment\resources\views/dashboard/editTeacher.blade.php ENDPATH**/ ?>