<?php $__env->startSection('title'); ?>
    Contact
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


<section>
    <div class="lgx-banner lgx-banner-inner">
        <div class="lgx-page-inner">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="lgx-heading-area lgx-heading-area-fixedlogo">
                            <div class="lgx-heading lgx-heading-white">
                                <h2 class="heading-title">Contact Us</h2>
                            </div>
                            <ul class="breadcrumb">
                                <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
                                <li class="active">Contact</li>
                            </ul>
                        </div>
                    </div>
                </div><!--//.ROW-->
            </div><!-- //.CONTAINER -->
        </div><!-- //.INNER -->
    </div>
</section>

<main>

  <div class="lgx-page-wrapper">
      <div class="container">
          <div class="row">
              <div class="col-xs-12 col-md-offset-1 col-md-10">

                    <div class="col-md-6">

                          <p><b>To contact us by phone, please <h3>Call: 02-55336692 </h3></b></p>

                          <br>

                            <p><b><h4>Mailing Address: </h4>Awesome Cafe <br>
                                1 & 3 Rd No. 21, <br>
                                Nikunja, Khilkhet, Dhaka-1229<br></b></p>
                                
                                <br>

                            <p> <b><h4> E-mail:</h4> <h5>info@asmcafe.com</h5></b> </p>
                    </div>

                    <div class="col-md-4">
                          <form id="contactpage" action="<?php echo e(route('contact_create')); ?>" method="post">
                            <?php echo csrf_field(); ?>

                          <div class="card">
                              <div class="card-header"><b><h3><?php echo e(__('Send Your Query')); ?></h3></b></div>
                          </div>


                          <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right"><?php echo e(__('Name')); ?></label>
                            <div class="col-md-10">
                              <input id="name" type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name"  required >
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
                            <label for="email" class="col-md-2 col-form-label text-md-right"><?php echo e(__('Email')); ?></label>
                            <div class="col-md-10">
                              <input id="email" type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email"  required >
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
                            <label for="phone" class="col-md-2 col-form-label text-md-right"><?php echo e(__('Phone')); ?></label>
                            <div class="col-md-10">
                              <input id="phone" type="text" class="form-control <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"  placeholder="017XXXXXXXX" name="phone" required>
                              <?php $__errorArgs = ['phone'];
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
                            <label for="feedback" class="col-md-3 col-form-label text-md-right"><?php echo e(__('Feedback')); ?></label>
                            <div class="col-md-10">
                              <textarea name="feedback" rows="6" cols="50"></textarea>
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

                          <div  class="col-md-11">
                            <button class="btn lgx-btn primary" type="submit" ><span>Send</span></button>
                          </div>
                      </div>
                    </form>
                  </div>
                </div>
            </div>
        </div>
    </div>

</main>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontpage.homepage.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Laravel Projects\Restaurant mamagement system\Fahim_cafe_-Final\Fahim cafe -Final\RMRS\resources\views/frontpage/contactpage/index.blade.php ENDPATH**/ ?>