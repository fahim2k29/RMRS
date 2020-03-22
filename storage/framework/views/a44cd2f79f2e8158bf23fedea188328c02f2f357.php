<?php $__env->startSection('title'); ?>
    Empployee Emergency Contact
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

                        <div class="card" >
                            <div class="card-header text-center text-dark"> <h5><?php echo e(__('Emergency Contact Information')); ?></h5> </div>


                            <div class="card-body text-dark">

                              <table  class="card-table table-responsive table-bordered">
                                <thead>
                                    <tr >
                                      <td>ID</td>

                                      <td>First Name</td>
                                      <td>Last Name</td>

                                      <td>Emergeny Name</td>
                                      <td>Emergeny Phone</td>
                                      <td>Relation</td>
                                      <td>Emergeny Address</td>
                                      <td>Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $employee_infos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e_info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($e_info->id); ?></td>
                                        <td><?php echo e($e_info->emp_fname); ?></td>
                                        <td><?php echo e($e_info->emp_lname); ?></td>

                                        <td><?php echo e($e_info->emrgncy_name); ?></td>
                                        <td><?php echo e($e_info->emrgncy_phone); ?></td>
                                        <td><?php echo e($e_info->emrgncy_relation); ?></td>
                                        <td><?php echo e($e_info->emrgncy_address); ?></td>

                                        <td>
                                          <a href="<?php echo e(route('employeeupdatepage',$e_info->id)); ?>" class="btn btn-primary">Edit</a>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('employee.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\NewProject-master-master\NewProject-master-master\resources\views/employee/emergency_info.blade.php ENDPATH**/ ?>