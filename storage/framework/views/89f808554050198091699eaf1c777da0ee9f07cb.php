<?php $__env->startSection('template_title'); ?>
    Detalles De Pago
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <?php echo e(__('Detalles De Pago')); ?>

                            </span>

                             <div class="float-right">
                                <a href="<?php echo e(route('createddp')); ?>" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  <?php echo e(__('Create New')); ?>

                                </a>
                              </div>
                        </div>
                    </div>
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
                                        
										<th>Costo Total</th>
										<th>Pakeo Agente</th>
										<th>Activacion</th>
										<th>Reporte Fee</th>
										<th>Pago Inicial</th>
										<th>Pendiente De Pago</th>
										<th>Fecha Limite</th>
										<th>Fecha De Pago</th>
										<th>Cantidad</th>
										<th>Concepto</th>
										<th>Status De Pago</th>
										<th>Pago Asignado</th>
										<th>Num Aprovacion</th>
										<th>Nota</th>
										<th>Comprovante</th>
										<th>Forma De Pago</th>
										<th>Worksheet Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $detallesDePagos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detallesDePago): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e(++$i); ?></td>
                                            
											<td><?php echo e($detallesDePago->costo_total); ?></td>
											<td><?php echo e($detallesDePago->pakeo_agente); ?></td>
											<td><?php echo e($detallesDePago->activacion); ?></td>
											<td><?php echo e($detallesDePago->reporte_fee); ?></td>
											<td><?php echo e($detallesDePago->pago_inicial); ?></td>
											<td><?php echo e($detallesDePago->pendiente_de_pago); ?></td>
											<td><?php echo e($detallesDePago->fecha_limite); ?></td>
											<td><?php echo e($detallesDePago->fecha_de_pago); ?></td>
											<td><?php echo e($detallesDePago->cantidad); ?></td>
											<td><?php echo e($detallesDePago->concepto); ?></td>
											<td><?php echo e($detallesDePago->status_de_pago); ?></td>
											<td><?php echo e($detallesDePago->pago_asignado); ?></td>
											<td><?php echo e($detallesDePago->num_aprovacion); ?></td>
											<td><?php echo e($detallesDePago->nota); ?></td>
											<td><?php echo e($detallesDePago->comprovante); ?></td>
											<td><?php echo e($detallesDePago->forma_de_pago); ?></td>
											<td><?php echo e($detallesDePago->worksheet_id); ?></td>

                                            <td>
                                                
                                                    
                                                    <a class="btn btn-sm btn-success" href="<?php echo e(route('detallesDePago/{id}',$detallesDePago->id)); ?>"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                 
                                                    
                                                
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <?php echo $detallesDePagos->links(); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\vacationcardsgitbk\resources\views/detalles-de-pago/index.blade.php ENDPATH**/ ?>