<?php $__env->startSection('title', 'Exam'); ?>


<?php $__env->startSection('breadcrumbs'); ?>

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Manage Exam</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="home">Home</a></li>
                    <li class="active">Manage Exams</i></li>
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
                    <strong>Title</strong>
                </div>
                <div class="pull-right">
                    <a href="<?php echo e(url('exams/create')); ?>" class="btn btn-success btn-sm">
                        <i class="fa fa-plus"></i> Add New
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-striped table-bordered table-hover datatable  ">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Title</th>
                            <th>Edulevel</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $exams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($exams->firstItem() + $key); ?></td>
                                <td><?php echo e($item->title); ?></td>
                                <td><?php echo e($item->edulevel->name); ?></td>
                                <td><?php echo e($item->category->name); ?></td>
                                <td class="text-center">
                                    <a href="<?php echo e(url('exams/'.$item->id.'/edit')); ?>" class="btn btn-info rounded">
                                        Edit
                                    </a>
                                    <form action="<?php echo e(url('exams/' .$item->id)); ?>" method="post" class="d-inline " onsubmit="return confirm('Yakin hapus data?')">
                                        <?php echo method_field('delete'); ?>
                                        <?php echo csrf_field(); ?>
                                        <button class="btn btn-danger rounded">
                                            Delete
                                        </button>
                                    </form>
                                    <a href="<?php echo e(url('newquestions')); ?>" class="btn btn-primary rounded">
                                        Add Question
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                
            </div>
        </div>

    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ACER\QuizApps\resources\views/manageexam/main.blade.php ENDPATH**/ ?>