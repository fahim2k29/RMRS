<?php $__env->startSection('title'); ?>
    Category
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="content-page">
<div class="content">
    <div class="container-fluid text-light">
      <div class="uper">
        <?php if(session()->get('success')): ?>
          <div class="alert alert-success">
            <?php echo e(session()->get('success')); ?>

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <br />
        <?php endif; ?>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-lg">
                    <div class="card " style="width: 30rem;">
                        <div class="card-header text-center text-dark"><h4><b><?php echo e(__('Category')); ?></b></h4></div>

                        <div class="col-md-8 offset-md-0">
                            <a href="<?php echo e(route('category_form')); ?>"  class="btn btn-primary">
                                <?php echo e(__('Create New')); ?>

                            </a>
                        </div>

                        <div class="card-body text-dark">

                                <table id="_search" class="card-table table-responsive table-bordered">
                                  <thead>
                                      <tr >
                                        <td> ID </td>
                                        <td> Name </td>
                                        <td> Description </td>
                                        <td colspan="2">Action</td>
                                      </tr>
                                  </thead>

                                  <tbody>
                                      <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catgry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <tr>
                                          <td><?php echo e($catgry->id); ?></td>
                                          <td><?php echo e($catgry->name); ?></td>
                                          <td><?php echo e($catgry->description); ?></td>
                                          <td>
                                            <a href="<?php echo e(route('category_updatepage',$catgry->id)); ?>" class="btn btn-primary">Edit</a>
                                          </td>
                                          <td>
                                            <form action="<?php echo e(route('category_delete', $catgry->id)); ?>" method="post">
                                              <?php echo csrf_field(); ?>
                                              <?php echo method_field('POST'); ?>
                                              <button class="btn btn-danger" type="submit">Delete</button>
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
                  </div>
                </div>
              </div>
           </div>
        </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('product.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\RMRS\RMRS\resources\views/product/category/index.blade.php ENDPATH**/ ?>