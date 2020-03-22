<!-- <?php $__env->startSection('title'); ?>
Update Role
<?php $__env->stopSection(); ?> -->


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
      <!-- Start content -->
      <div class="content">
          <div class="container-fluid">
              <div class="page-title-box">
                  <div class="row align-items-center">
                      <div class="col-sm-6">
                      Assign Roles to <?php echo e($user->name); ?>

                    </div>
                    <div class="card-body">
                      <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                          <ul>
                              <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </ul>
                        </div><br />
                      <?php endif; ?>
                      <form method="POST" action="<?php echo e(route('user_update', $user)); ?>">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PATCH'); ?>
                            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class='form-check' text-dark>
                              <input type="checkbox" name="roles[]" value="<?php echo e($role->id); ?>">
                              <leble><?php echo e($role->name); ?></label>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                  </div>
                    </div>
                  </div>
                    </div>
                  </div>
                  </div>
                    </div>
                  </div>
                </main>

<?php echo $__env->make('newtheme.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\NewProject-master-master\NewProject-master-master\resources\views/dashboardpages/Role/update.blade.php ENDPATH**/ ?>