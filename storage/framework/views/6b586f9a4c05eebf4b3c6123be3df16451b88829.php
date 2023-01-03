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
                        <th>Profession</th>
                        <th>Message</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $feedbacks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feedback): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td><?php echo e($feedback->id); ?></td>
                        <td> <img src="<?php echo e(asset($feedback->img)); ?>" > </td>
                        <td><?php echo e($feedback->name); ?></td>
                        <td><?php echo e($feedback->profession); ?></td>
                        <td><?php echo e($feedback->message); ?></td>
                        <td>
                          <div class="d-flex align-items-center">
                            <?php if(empty($feedback->deleted_at)): ?>
                              <a href="<?php echo e(URL::to('/editFeedback/' . $feedback->id)); ?>">
                            <button type="button" class="btn btn-success btn-sm btn-icon-text mr-3">
                              Edit
                            </button>
                              </a>
                            <a href="<?php echo e(URL::to('/deleteFeedback/' . $feedback->id)); ?>">
                            <button type="button" class="btn btn-danger btn-sm btn-icon-text mr-3">
                              Delete
                            </button>
                            </a>
                            <?php else: ?>
                            <a href="<?php echo e(URL::to('/restoreFeedback/' . $feedback->id)); ?>">
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

<?php echo $__env->make('layouts.dashboardMain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LaravelProjects\assignment\resources\views/dashboard/tableFeedback.blade.php ENDPATH**/ ?>