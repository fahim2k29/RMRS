<?php $__env->startSection('title'); ?>
    Category Updatepage
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="content-page">
  <div class="content">
      <div class="container-fluid">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-light"><?php echo e(__(' Add Category')); ?></div>
                      <div class="tab">

                          <div class="card-body m-6 text-light ">
                              <form method="POST" action="<?php echo e(route('category_update', $categories->id)); ?>" enctype="multipart/form-data">
                                  <?php echo csrf_field(); ?>

                                  <div class="form-group row">
                                      <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Name')); ?></label>
                                      <div class="col-md-6 ">
                                          <input id="name" type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" value="<?php echo e($categories->name); ?>"  required autocomplete="name" autofocus>
                                          <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                              <span class="invalid-feedback" role="alert">
                                                  <strong><?php echo e($message); ?></strong>
                                              </span>
                                          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                       </div>
                                    </div>

                                  <div class="form-group row">
                                      <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Description')); ?></label>
                                      <div class="col-md-6">
                                          <input id="name" type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="description" value="<?php echo e($categories->description); ?>"   required autocomplete="name" autofocus>
                                          <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                              <span class="invalid-feedback" role="alert">
                                                  <strong><?php echo e($message); ?></strong>
                                              </span>
                                          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                       </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                <?php echo e(__('Submit')); ?>

                                            </button>
                                        </div>
                                    </div>

                                </form>
                              </div>
                            </div>
                         </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('product.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Rimu360\Downloads\NewProject-master-master-20191231T163411Z-001\NewProject-master-master\resources\views/product/category/cat_updatepage.blade.php ENDPATH**/ ?>