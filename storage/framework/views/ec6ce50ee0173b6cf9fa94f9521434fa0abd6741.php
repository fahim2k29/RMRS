<?php $__env->startSection('title'); ?>
    Product Update
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="content-page">
  <div class="content">
      <div class="container-fluid">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-light"><?php echo e(__('Product Information')); ?></div>
                      <div class="tab">

                          <div class="card-body m-6 text-light ">
                              <form method="POST" action="<?php echo e(route('product_update', $pro->id)); ?>" enctype="multipart/form-data">
                                  <?php echo csrf_field(); ?>

                                  <div class="form-group row">
                                      <label for="name" class="col-md-4 col-form-label text-md-right text-dark"><?php echo e(__('Product Code')); ?></label>
                                      <div class="col-md-6 ">
                                          <input id="name" type="number" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="product_code" value="<?php echo e($pro->product_code); ?>"  required autocomplete="name" autofocus>
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
                                      <label for="image" class="col-md-4 col-form-label text-md-right text-dark"><?php echo e(__('Product Image')); ?></label>
                                      <div class="col-md-6 ">
                                          <input id="image" type="file" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="product_image"  autocomplete="name" autofocus>
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
                                          <label for="name" class="col-md-4 col-form-label text-md-right text-dark"><?php echo e(__('Name')); ?></label>
                                          <div class="col-md-6 ">
                                              <input id="name" type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" value="<?php echo e($pro->name); ?>"   required autocomplete="name" autofocus>
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
                                          <label for="name" class="col-md-4 col-form-label text-md-right text-dark"><?php echo e(__('Category Name')); ?></label>
                                            <div class="col-md-6">
                                                  <select class="form-control" name="cat_id" >
                                                    <?php $__currentLoopData = $cato; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prdct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($prdct->id); ?>" > <?php echo e($prdct->name); ?> </option>
                                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                      </div>

                                      <div class="form-group row">
                                          <label for="type_id" class="col-md-4 col-form-label text-md-right text-dark"><?php echo e(__('Food Type')); ?></label>
                                            <div class="col-md-6">
                                                  <select class="form-control" name="type_id" >
                                                    <?php $__currentLoopData = $type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($type->id); ?>" > <?php echo e($type->name); ?> </option>
                                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                      </div>


                                  <div class="form-group row">
                                      <label for="name" class="col-md-4 col-form-label text-md-right text-dark"><?php echo e(__('Description')); ?></label>
                                      <div class="col-md-6">
                                          <input id="name" type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="description" value="<?php echo e($pro->description); ?>"  required autocomplete="name" autofocus>
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
                                      <label for="name" class="col-md-4 col-form-label text-md-right text-dark"><?php echo e(__('Price')); ?></label>
                                      <div class="col-md-6">
                                          <input id="name" type="phoneInput" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="price" value="<?php echo e($pro->price); ?>"  required autocomplete="name" autofocus>
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
                                        <label for="stock_quantity" class="col-md-4 col-form-label text-md-right text-dark"><?php echo e(__('Quantity')); ?></label>
                                        <div class="col-md-6">
                                            <input id="stock_quantity" value="<?php echo e($pro->stock_quantity); ?>"  type="number min:1" class="form-control <?php $__errorArgs = ['stock_quantity'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="stock_quantity"  required autocomplete="stock_quantity" autofocus>
                                            <?php $__errorArgs = ['stock_quantity'];
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
                                          <label for="stock_quantity" class="col-md-4 col-form-label text-md-right text-dark"><?php echo e(__('Status')); ?></label>
                                          <div class="col-md-6">
                                          <select class="form-control" id="exampleFormControlSelect1" name="status">
                                            <option value="1">Available</option>
                                            <option value="0">Unavailable</option>
                                          </select>
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

<?php echo $__env->make('product.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Fahim_cafe_-Final\Fahim cafe -Final\NewProject-master-master\resources\views/product/product_list/p_updatepage.blade.php ENDPATH**/ ?>