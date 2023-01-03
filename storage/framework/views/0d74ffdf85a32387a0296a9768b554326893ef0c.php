<?php if(session()->has('status')): ?>
  <?php if(session('status')): ?>
    <div style="color:#09AC60; padding:18px; background-color:#DCDCDC;" >Sent successfully</div>
  <?php else: ?>
    <div style="color:#D90B0B; padding:18px; background-color:#DCDCDC;" >Sent Failed</div>
  <?php endif; ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\LaravelProjects\assignment\resources\views/includes/includeSendStatus.blade.php ENDPATH**/ ?>