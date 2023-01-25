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
                    <li><a href="#">Program</a></li>
                    <li><a href="#">Data</a></li>
                    <li class="active">Detail</i></li>
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
                    <strong>Detail Program</strong>
                </div>
                <div class="pull-right">
                    <a href="<?php echo e(url('programs')); ?>" class="btn btn-secondary btn-sm">
                        <i class="fa fa-plus"></i> Back
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive">

                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th style="width:30%">Edulevel</th>
                                    <td><?php echo e($program->edulevel->name); ?></td>
                                </tr>
                                <tr>
                                    <th>Program</th>
                                    <td><?php echo e($program->name); ?></td>
                                </tr>
                                <tr>
                                    <th>Student Price</th>
                                    <td><?php echo e($program->student_price); ?></td>
                                </tr>
                                <tr>
                                    <th>Student Max</th>
                                    <td><?php echo e($program->student_max); ?></td>
                                </tr>
                                <tr>
                                    <th>Info</th>
                                    <td><?php echo e($program->info); ?></td>
                                </tr>
                                <tr>
                                    <th>Created at</th>
                                    <td><?php echo e($program->created_at); ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ACER\QuizApps\resources\views/program/show.blade.php ENDPATH**/ ?>