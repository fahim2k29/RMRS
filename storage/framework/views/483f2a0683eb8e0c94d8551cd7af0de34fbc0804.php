<?php $__env->startSection('title'); ?>
    Employee Job Info
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
                            <div class="card-header text-center text-dark"> <h5><?php echo e(__('Employee Job Information')); ?></h5> </div>

                            <div class="card-body text-dark">

                                <table class="card-table table-responsive table-bordered">
                                  <thead>
                                      <tr >
                                        <td>ID</td>
                                        <td>Designation</td>
                                        <td>Salary</td>
                                        <td>Bonus</td>
                                        <td>Joindate</td>
                                        <td>Resigndate</td>
                                        <td>Status</td>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php $__currentLoopData = $e_job_infos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e_job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <tr>
                                          <td><?php echo e($e_job->id); ?></td>
                                          <td><?php echo e($e_job->designation); ?></td>
                                          <td><?php echo e($e_job->salary); ?></td>
                                          <td><?php echo e($e_job->bonus); ?></td>
                                          <td><?php echo e($e_job->joindate); ?></td>
                                          <td><?php echo e($e_job->resigndate); ?></td>
                                          <td><?php echo e($e_job->status); ?></td>
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

<?php echo $__env->make('employee.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Rimu360\Downloads\NewProject-master-master-20191231T163411Z-001\NewProject-master-master\resources\views/employee/job/index_for_employee.blade.php ENDPATH**/ ?>