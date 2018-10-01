<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">BOOKS</div>

                    <div class="panel-body">
                        <?php echo e(link_to_route('book.create', 'Create', null, ['class' => 'btn btn-info btn-xs'])); ?>

                        <table class="table table-bordered table-responsive table-striped">
                            <tr>
                                <th width="5%">id</th>
                                <th width="25%">Title</th>
                                <th width="15%">Author</th>
                                <th width="10%">Price</th>
                                <th width="10%">Pages</th>
                                <th width="15%">Publisher</th>
                                <th width="10%">Year</th>
                                <th width="10%">Hardcover</th>


                            </tr>
                            <tr>
                                <td colspan="3" class="light-green-background no-padding" title="Create new template">
                                    <div class="row centered-child">
                                        <div class="col-md-12">

                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($book->id); ?></td>
                                    <td><?php echo e($book->title); ?></td>
                                    <td><?php echo e($book->author); ?></td>
                                    <td><?php echo e($book->price); ?></td>
                                    <td><?php echo e($book->pages); ?></td>
                                    <td><?php echo e($book->publisher); ?></td>
                                    <td><?php echo e($book->year); ?></td>
                                    <td><?php echo e($book->hardcover); ?></td>
                                    <td>
                                        <?php echo e(Form::open(['class' => 'confirm-delete', 'route' => ['book.destroy', $book->id], 'method' => 'DELETE'])); ?>

                                        <?php echo e(link_to_route('book.show', 'info', [$book->id], ['class' => 'btn btn-info btn-xs'])); ?> |
                                        <?php echo e(link_to_route('book.edit', 'edit', [$book->id], ['class' => 'btn btn-success btn-xs'])); ?>

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