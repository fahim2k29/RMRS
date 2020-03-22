<?php $__env->startSection('title'); ?>
    Employee Info
<?php $__env->stopSection(); ?>

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
</style>

<!--Main container start -->
	<main class="m-wrapper">
		<div class="container">
		  	<div class="row">
			    <div class="col-sm">




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
                        <div class="card " style="width: 68rem;">
                            <div class="card-header"><?php echo e(__('Employee Table')); ?></div>


                            <div class="card-body">

                                <table id="_search" class="card-table table-responsive table-bordered">
                                  <thead>
                                      <tr >
                                        <td>ID</td>
                                        <td>Image</td>
                                        <td>First Name</td>
                                        <td>Last Name</td>
                                        <td>Phone No</td>
                                        <td>Alternate Phone No</td>
                                        <td>Email</td>
                                        <td>NID number</td>
                                        <td>Birth Date</td>
                                        <td>Age</td>
                                        <td>Present Address</td>
                                        <td>Permanent Address</td>
                                        <td>Marital Status</td>
                                        <td>Emergeny Name</td>
                                        <td>Emergeny Phone</td>
                                        <td>Relation</td>
                                        <td>Emergeny Address</td>
                                        <!-- <td >Action</td> -->
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php $__currentLoopData = $employee_infos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e_info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <tr>
                                          <td><?php echo e($e_info->id); ?></td>
                                          <td><img src="<?php echo e(asset('Image/Employee_Image')); ?>/<?php echo e($e_info->emp_image); ?>" class="rounded" alt="<?php echo e($e_info->emp_image); ?>" style="width:50px;height:50px";></td>
                                          <td><?php echo e($e_info->emp_fname); ?></td>
                                          <td><?php echo e($e_info->emp_lname); ?></td>
                                          <td><?php echo e($e_info->emp_phone1); ?></td>
                                          <td><?php echo e($e_info->emp_phone2); ?></td>
                                          <td><?php echo e($e_info->emp_email); ?></td>
                                          <td><?php echo e($e_info->employee_nid); ?></td>
                                          <td><?php echo e($e_info->emp_birth_date); ?></td>
                                          <td><?php echo e($e_info->emp_age); ?></td>
                                          <td><?php echo e($e_info->emp_preaddress); ?></td>
                                          <td><?php echo e($e_info->emp_peraddress); ?></td>
                                          <td><?php echo e($e_info->emp_marital_status); ?></td>
                                          <td><?php echo e($e_info->emrgncy_name); ?></td>
                                          <td><?php echo e($e_info->emrgncy_phone); ?></td>
                                          <td><?php echo e($e_info->emrgncy_relation); ?></td>
                                          <td><?php echo e($e_info->emrgncy_address); ?></td>

                                          <!-- <td>
                                            <form method="POST" action="<?php echo e(route('e_jobInfo',$e_info->id)); ?>" method="post">
                                              <?php echo csrf_field(); ?>

                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                                  Add Job info
                                                </button>
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


          <!-- Modal -->
          <!-- <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">

                <form id="food_type_create" action="<?php echo e(route('e_jobInfo_create')); ?>" method="post">
                  <?php echo csrf_field(); ?>

              <div class="form-group">
                  <label for="name" ><?php echo e(__('Employee Id')); ?></label>
                  <input id="name" type="number" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="e_id" required autocomplete="name" autofocus>
              </div>


              <div class="form-group row">
                  <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Designation')); ?></label>
                  <div class="col-md-6 ">
                      <input id="name" type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="designation" required autocomplete="name" autofocus>
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
                  <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Salary')); ?></label>
                  <div class="col-md-6 ">
                      <input id="name" type="number" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="salary"  required autocomplete="name" autofocus>
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
                  <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Bonus')); ?></label>
                  <div class="col-md-6 ">
                      <input id="name" type="number" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="bonus"  required autocomplete="name" autofocus>
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
                  <label for="date" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Joined Date')); ?></label>
                  <div class="col-md-6">
                      <input id="date" type="date"  class="form-control <?php $__errorArgs = ['date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="joindate"  required autocomplete="date" autofocus>
                      <?php $__errorArgs = ['date'];
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
                  <label for="date" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Resigned Date')); ?></label>
                  <div class="col-md-6">
                      <input id="date" type="date"  class="form-control <?php $__errorArgs = ['date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="resigndate"  >
                      <?php $__errorArgs = ['date'];
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
                  <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Status')); ?></label>
                  <div class="col-md-6 ">
                      <input id="name" type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="status"  required autocomplete="name" autofocus>
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


              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>

            </form>

                  </div>
                </div>
              </div>
            </div> -->


        </div>
      </div>
    </div>
  </main>

<?php echo $__env->make('newtheme.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Rimu360\Downloads\NewProject-master-master-20191231T163411Z-001\NewProject-master-master\resources\views/Admin/employee/index.blade.php ENDPATH**/ ?>