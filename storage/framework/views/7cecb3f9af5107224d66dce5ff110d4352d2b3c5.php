<?php $__env->startSection('title'); ?>
  Order
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
                  <!-- Start content -->
                  <div class="content">
                      <div class="container-fluid">
                        <div class="page-title-box">
                            <div class="row align-items-center">

                            </div>
                        </div>
                          <!-- end row -->
                          <div class="row">
                              <div class="col-12">
                                  <div class="card">
                                      <div class="card-body">


                                        <div class="text-center">

                                          <h2 class="mt-0 header-title ">  <b>Reservation Information</b>   </h2>
                                        </div>
                                          <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                              <div class="row">
                                                  <div class="col-sm-10">
                                                      <table id="_search" class="table table-bordered dt-responsive nowrap dataTable no-footer dtr-inline collapsed" style="border-collapse: collapse; border-spacing: 0px; width: 100%;" role="grid" aria-describedby="datatable_info">

                                                          <thead>
                                                              <tr role="row">
                                                                  <th >Reserve ID</th>
                                                                  <th >Name</th>
                                                                  <th >Telephone</th>
                                                                  <th >Date</th>
                                                                  <th >Time</th>
                                                                  <th >Table No.</th>
                                                                  <th >Reservation Type</th>
                                                                  <th>Address</th>
                                                                
                                                                  <th >Created At</th>
                                                              </tr>
                                                          </thead>

                                                          <tbody>
                                                            <?php $__currentLoopData = $reservations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reservation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                          <tr >
                                                              <td ><?php echo e($reservation->id); ?></td>
                                                              <td ><?php echo e(Auth::user()->name); ?></td>
                                                              <td><?php echo e(Auth::user()->phone); ?></td>
                                                              <td><?php echo e($reservation->journeyDate); ?></td>
                                                              <td><?php echo e($reservation->time); ?></td>
                                                              <td><?php echo e($reservation->table_number); ?></td>
                                                              <td><?php echo e($reservation->reservation_type); ?></td>
                                                              <td><?php echo e($reservation->address); ?></td>


                                                              <!-- <td>
                                                                <form action="<?php echo e(route('reservation_delete', $reservation->id)); ?>" method="post">
                                                                  <?php echo csrf_field(); ?>
                                                                  <?php echo method_field('POST'); ?>
                                                                  <button class="btn btn-danger" type="submit"> Delete </button>
                                                                </form>
                                                              </td> -->
                                                             <td> <?php echo e($reservation->created_at->diffForHumans()); ?> </td>
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
                              <!-- end col -->
                          </div>

                          <!-- end row -->
                      </div>
                      <!-- container-fluid -->
                  </div>
                </div>
                  <!-- content -->
</div>
</div>
</div>
</main>

<?php echo $__env->make('newtheme.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Rimu360\Downloads\NewProject-master-master-20191231T163411Z-001\NewProject-master-master\resources\views/dashboardpages/reservationTable/index.blade.php ENDPATH**/ ?>