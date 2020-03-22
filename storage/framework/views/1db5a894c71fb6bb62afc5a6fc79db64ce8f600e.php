<?php $__env->startSection('title'); ?>
    Food Details
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
                    <div class="card " style="width: 50rem;">
                        <div class="card-header text-dark"><?php echo e(__('Food Details')); ?></div>

                        <div class="col-md-8 offset-md-0">
                            <a href="<?php echo e(route('product_form')); ?>"  class="btn btn-primary">
                                <?php echo e(__('Create New')); ?>

                            </a>
                        </div>

                        <div class="card-body text-dark">
                                <table id="_search" class="card-table table-responsive table-bordered">
                                  <thead>
                                      <tr>
                                        <td> No </td>
                                        <td> Food Code </td>
                                        <td> Image </td>
                                        <td> Name </td>
                                        <td> Category Name </td>
                                        <td> Description </td>
                                        <td> Quantity </td>
                                        <td> Price </td>
                                        <td> Status </td>
                                        <td colspan="2">Action</td>
                                      </tr>
                                  </thead>

                                  <tbody>
                                      <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prdct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <tr>
                                          <td><?php echo e($prdct->id); ?></td>
                                          <td><?php echo e($prdct->product_code); ?></td>
                                          <td><img src="<?php echo e(asset('Image/product_photo')); ?>/<?php echo e($prdct->product_image); ?>" class="rounded" alt="<?php echo e($prdct->product_image); ?>" style="width:50px;height:50px";></td>
                                          <td><?php echo e($prdct->name); ?></td>
                                          <td><?php echo e($prdct->category_info-> name); ?></td>
                                          <td><?php echo e($prdct->description); ?></td>
                                          <td><?php echo e($prdct->stock_quantity); ?></td>
                                          <td><?php echo e($prdct->price); ?></td>
                                          <?php if($prdct->status==1): ?>
                                          <td class="text-success">Available</td>
                                          <?php else: ?>
                                          <td class="text-danger">Unavailable</td>
                                          <?php endif; ?>

                                          <td>
                                            <a href="<?php echo e(route('product_updatepage',$prdct->id)); ?>" class="btn btn-primary">Edit</a>
                                          </td>
                                          <!-- <td>
                                            <form action="<?php echo e(route('product_delete', $prdct->id)); ?>" method="post">
                                              <?php echo csrf_field(); ?>
                                              <?php echo method_field('POST'); ?>
                                              <button class="btn btn-danger" type="submit">Delete</button>
                                            </form>
                                          </td> -->

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

<?php echo $__env->make('product.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Fahim_cafe_-Final\Fahim cafe -Final\NewProject-master-master\resources\views/product/product_list/index.blade.php ENDPATH**/ ?>