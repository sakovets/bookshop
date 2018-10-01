<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">GENRE</div>

                    <div class="panel-body">
                        <?php echo e(link_to_route('genre.create', 'Create', null, ['class' => 'btn btn-info btn-xs'])); ?>

                        <table class="table table-bordered table-responsive table-striped">
                            <tr>
                                <th width="15%">id</th>
                                <th width="25%">Name</th>




                            </tr>
                            <tr>
                                <td colspan="3" class="light-green-background no-padding" title="Create new template">
                                    <div class="row centered-child">
                                        <div class="col-md-12">

                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php $__currentLoopData = $genres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($genre->id); ?></td>
                                    <td><?php echo e($genre->name); ?></td>


                                    <td>
                                        <?php echo e(Form::open(['class' => 'confirm-delete', 'route' => ['genre.destroy', $genre->id], 'method' => 'DELETE'])); ?>

                                        <?php echo e(link_to_route('genre.show', 'info', [$genre->id], ['class' => 'btn btn-info btn-xs'])); ?> |
                                        <?php echo e(link_to_route('genre.edit', 'edit', [$genre->id], ['class' => 'btn btn-success btn-xs'])); ?>

                                        <?php echo e(Form::button('Delete', ['class' => 'btn btn-danger btn-xs', 'type' => 'submit'])); ?>

                                        <?php echo e(Form::close()); ?>

                                    </td>

                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>