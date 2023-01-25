<?php $__env->startSection('title', 'Question'); ?>


<?php $__env->startSection('breadcrumbs'); ?>

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Add Question</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="home">Home</a></li>
                    <li class="active">Add question</i></li>
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
                    <a href="<?php echo e(url('newquestions/create')); ?>" class="btn btn-success btn-sm rounded"> Add New </a>
                    <a href="<?php echo e(url('exams')); ?>" class="btn btn-secondary btn-sm">
                        <i class="fa fa-undo"></i> Back
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Exam Name</th>
                            <th>Question</th>
                            <th>Answer</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($questions->firstItem() + $key); ?></td>
                                <td><?php echo e($item->exam->title); ?></td>
                                <td><?php echo e($item->questions); ?></td>
                                <td><?php echo e($item->answer); ?></td>
                                <td class="text-center">
                                    <a href="<?php echo e(url('newquestions/' .$item->id)); ?>" class="btn btn-warning btn-sm">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="<?php echo e(url('newquestions/'.$item->id.'/edit')); ?>" class="btn btn-primary btn-sm">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <form action="<?php echo e(url('newquestions/' .$item->id)); ?>" method="post" class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
                                        <?php echo method_field('delete'); ?>
                                        <?php echo csrf_field(); ?>
                                        <button class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
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

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ACER\QuizApps\resources\views/question/index.blade.php ENDPATH**/ ?>