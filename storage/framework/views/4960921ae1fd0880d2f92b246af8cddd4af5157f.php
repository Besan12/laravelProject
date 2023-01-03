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
                        <th>Name</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th>Created</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td><?php echo e($contact->id); ?></td>
                        <td><?php echo e($contact->name); ?></td>
                        <td><?php echo e($contact->subject); ?></td>
                        <td><?php echo e($contact->message); ?></td>
                        <th><?php echo e($contact->created_at); ?></th>
                        <td>
                          <div class="d-flex align-items-center">
                            <?php if(empty($contact->deleted_at)): ?>
                            <a href="<?php echo e(URL::to('/deleteContact/' . $contact->id)); ?>">
                            <button type="button" class="btn btn-danger btn-sm btn-icon-text mr-3">
                              Delete
                            </button>
                            </a>
                            <?php else: ?>
                            <a href="<?php echo e(URL::to('/restoreContact/' . $contact->id)); ?>">
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

<?php echo $__env->make('layouts.dashboardMain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LaravelProjects\assignment\resources\views/dashboard/tableContact.blade.php ENDPATH**/ ?>