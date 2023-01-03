<?php if(session()->has('status')): ?>
  <?php if(session('status')): ?>
    <div style="color:#09AC60;" > Updated successfully </div>
  <?php else: ?>
    <div style="color:#D90B0B; " > Failed </div>
  <?php endif; ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\LaravelProjects\assignment\resources\views/includes/includeEditStatus.blade.php ENDPATH**/ ?>