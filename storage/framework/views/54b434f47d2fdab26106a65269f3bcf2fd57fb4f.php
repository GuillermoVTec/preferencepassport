



<?php $__env->startSection('content'); ?>
<section >
 <div>
<h1>Usuario #<?php echo e($user->id); ?></h1>

<table class="table table-dark">
<thead>
<tr>
<th scope="col"><?php echo e($user->id); ?></th>
<th scope="col"><?php echo e($user->name); ?></th>
<th scope="col"><?php echo e($user->email); ?></th>
</tr>
</thead>
 </div>
  </div>
   </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\vacationcardsgitbk\resources\views/livewire/perfil.blade.php ENDPATH**/ ?>