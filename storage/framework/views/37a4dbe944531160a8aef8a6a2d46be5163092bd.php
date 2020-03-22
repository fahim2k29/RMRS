<?php $__env->startSection('title'); ?>
  Awesome Cafe Dashboard
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



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->

            <!-- Start content -->


            <div class="content-page">
            <div class="content">
                <div class="container-fluid">
                    <div class="page-title-box">
                        <div class="row align-items-center">
                            <div class="col-sm-8">
                                <h4 class="page-title">Welcome to AwesomeCafe Dashboard</h4>

                            </div>

                        </div>
                    </div>

<!-- Usertable -->

        <!-- end row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-4 header-title mb-4 text-light">User Datatable </h4>
                        <div class="table-responsive">
                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                        <table class="table table-editable dataTable no-footer" id="_search" role="grid" aria-describedby="DataTables_Table_0_info" style="position: relative;">
                                            <thead>
                                                <tr role="row">
                                                    <th >Id</th>
                                                    <th >Name</th>
                                                    <th >Role</th>
                                                    <th >Phone</th>
                                                    <th >Email</th>
                                                    <th >Email_verified_at</th>
                                                    <th>Action</th>
                                            </thead>
                                            <tbody>
                                              <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                              <tr>
                                                  <td><?php echo e($user->id); ?></td>
                                                  <td><?php echo e($user->name); ?></td>
                                                  <td><?php echo e(implode(',',$user->relationroles()->get()->pluck('name')->toArray())); ?></td>
                                                  <td><?php echo e($user->phone); ?></td>
                                                  <td><?php echo e($user->email); ?></td>
                                                  <td><?php echo e($user->email_verified_at); ?></td>
                                                  <td class="bg-blue">
                                                    <a href="<?php echo e(route('assignrole',$user)); ?>" class="btn btn-primary">Asign_Role</a>
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
            <!-- end col -->
        </div>
        <!-- end row -->

  <!-- End_usertable -->
                    <!-- end row -->
                </div>
                <!-- container-fluid -->
            </div>

            			    </div>
            		</div>
            	</main>

<?php echo $__env->make('newtheme.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\NewProject-master-master\NewProject-master-master\resources\views/dashboardpages/dashboardhome/index.blade.php ENDPATH**/ ?>