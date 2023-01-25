<?php $__env->startSection('title', 'Program'); ?>


<?php $__env->startSection('breadcrumbs'); ?>

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Program</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="<?php echo e(url('programs')); ?>">Program</a></li>
                    <li class="active">Trash</i></li>
                </ol>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="content mt-3">
    <div class="animated fadeIn">

        <?php if(session('status')): ?>
        <div class="alert alert-success">
            <?php echo e(session('status')); ?>

        </div>
        <?php endif; ?>

        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <strong>Data Program Terhapus</strong>
                </div>
                <div class="pull-right">
                    <a href="<?php echo e(url('programs/delete')); ?>" class="btn btn-danger btn-sm">
                        <i class="fa fa-trash"></i> Delete All
                    </a>
                    <a href="<?php echo e(url('programs/restore')); ?>" class="btn btn-info btn-sm">
                        <i class="fa fa-undo"></i> Restore All
                    </a>
                    <a href="<?php echo e(url('programs')); ?>" class="btn btn-secondary btn-sm">
                        <i class="fa fa-chevron-left"></i> Back
                    </a>
                </div>
            </div>
            <div clasas="card-body table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Program</th>
                            <th>Jenjang</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if($programs->count() > 0): ?>
                            <?php $__currentLoopData = $programs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($loop->iteration); ?></td>
                                    <td><?php echo e($item->name); ?></td>
                                    <td><?php echo e($item->edulevel->name); ?></td>
                                    <td class="text-center">
                                        <a href="<?php echo e(url('programs/restore/' .$item->id)); ?>" class="btn btn-info btn-sm">
                                            Restore
                                        </a>
                                        <a href="<?php echo e(url('programs/delete/' .$item->id)); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yaking hapus permanen?')">
                                            Delete Permanently
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                                <tr>
                                    <td colspan="4" class="text-center">Data Kosong</td>
                                </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ACER\QuizApps\resources\views/program/trash.blade.php ENDPATH**/ ?>