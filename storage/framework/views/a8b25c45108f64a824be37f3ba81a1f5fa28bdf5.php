<?php $__env->startSection('title'); ?>
    Employee Job Info
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
                        <div class="card " style="width: 30rem;">
                            <div class="card-header text-center"> <h2><?php echo e(__('Employee Job Information')); ?></h2> </div>

                            <div class="card-body">

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
                                        <td>Action</td>
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
                                          <td>
                                            <a href="<?php echo e(route('e_job_updatepage',$e_job->id)); ?>" class="btn btn-primary">Edit</a>
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
                      </div>
                  </div>
          </div>
        </main>

<?php echo $__env->make('newtheme.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\NewProject-master-master\NewProject-master-master\resources\views/employee/job/index.blade.php ENDPATH**/ ?>