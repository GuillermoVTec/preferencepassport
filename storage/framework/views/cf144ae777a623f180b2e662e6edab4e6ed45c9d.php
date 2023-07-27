

<?php $__env->startSection('template_title'); ?>
    Worksheet
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div >
        <div class="row">
            <div class="col-sm-12">
                <div class="card">

                    <?php if($message = Session::get('success')): ?>
                        <div class="alert alert-success">
                            <p><?php echo e($message); ?></p>
                        </div>
                    <?php endif; ?>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Calificacion</th>
										<th>Booking</th>
										<th>Ocupaciont</th>
										<th>Nombrec</th>
										<th>Edadc</th>
										<th>Ocupácionc</th>
										<th>Estadocivilc</th>
										<th>Ingresos</th>
										<th>Tarjetas</th>
										<th>Ciudad</th>
										<th>Cp</th>
										<th>Plataforma</th>
										<th>Localizador</th>
										<th>Moneda</th>
										<th>Leads Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $worksheets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $worksheet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e(++$i); ?></td>
                                            
											<td><?php echo e($worksheet->calificacion); ?></td>
											<td><?php echo e($worksheet->booking); ?></td>
											<td><?php echo e($worksheet->ocupaciont); ?></td>
											<td><?php echo e($worksheet->nombrec); ?></td>
											<td><?php echo e($worksheet->edadc); ?></td>
											<td><?php echo e($worksheet->ocupácionc); ?></td>
											<td><?php echo e($worksheet->estadocivilc); ?></td>
											<td><?php echo e($worksheet->ingresos); ?></td>
											<td><?php echo e($worksheet->tarjetas); ?></td>
											<td><?php echo e($worksheet->ciudad); ?></td>
											<td><?php echo e($worksheet->cp); ?></td>
											<td><?php echo e($worksheet->plataforma); ?></td>
											<td><?php echo e($worksheet->localizador); ?></td>
											<td><?php echo e($worksheet->moneda); ?></td>
											<td><?php echo e($worksheet->leads_id); ?></td>

                                            <td>
                                                <form action="<?php echo e(route('worksheet.destroy',$worksheet->id)); ?>" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="<?php echo e(route('worksheet.show',$worksheet->id)); ?>"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="<?php echo e(route('worksheet.edit',$worksheet->id)); ?>"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <?php echo $worksheets->links(); ?>

            </div>
        </div>
  </div>
   </div>
  
          
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\vacationcardsgitbk\resources\views/worksheet/index.blade.php ENDPATH**/ ?>