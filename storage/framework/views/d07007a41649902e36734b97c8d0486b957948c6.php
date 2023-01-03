<?php $__env->startSection('content'); ?>

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
                        <th>Image</th>
                        <th>Name</th>
                        <th>price</th>
                        <th>Rate</th>
                        <th>No. Students</th>
                        <th>Description</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                      <td><?php echo e($course->id); ?></td>
                      <td> <img src="<?php echo e(asset($course->img)); ?>" > </td>
                        <td><?php echo e($course->name); ?></td>
                        <td><?php echo e($course->price); ?></td>
                        <td><?php echo e($course->rate); ?></td>
                        <td><?php echo e($course->students); ?></td>
                        <td><?php echo e($course->description); ?></td>
                        
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

 <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboardMain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LaravelProjects\assignment\resources\views/dashboard/tableCourse.blade.php ENDPATH**/ ?>