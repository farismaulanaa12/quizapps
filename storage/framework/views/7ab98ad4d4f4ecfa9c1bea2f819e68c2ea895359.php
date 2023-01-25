<?php $__env->startSection('title', 'Category'); ?>


<?php $__env->startSection('breadcrumbs'); ?>

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Category</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="home">Home</a></li>
                    <li class="active">Category</i></li>
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
                    <a href="<?php echo e(url('categories/trash')); ?>" class="btn btn-danger btn-sm">
                        <i class="fa fa-trash"></i> Trash
                    </a>
                    <a href="<?php echo e(url('categories/create')); ?>" class="btn btn-success btn-sm">
                        <i class="fa fa-plus"></i> Add New
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($categories->firstItem() + $key); ?></td>
                                <td><?php echo e($item->name); ?></td>
                                <td class="text-center">
                                    <a href="<?php echo e(url('categories/'.$item->id.'/edit')); ?>" class="btn btn-primary btn-sm">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <form action="<?php echo e(url('categories/' .$item->id)); ?>" method="post" class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
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
                <div class="pull-left">
                    <?php echo e($categories->links()); ?>

                </div>
            </div>
        </div>

    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ACER\QuizApps\resources\views/category/index.blade.php ENDPATH**/ ?>