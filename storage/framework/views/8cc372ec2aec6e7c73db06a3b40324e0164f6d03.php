<?php $__env->startSection('title'); ?>
  Add Food Type
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

            <div class="content-page">
                  <!-- Start content -->
                  <div class="content">
                      <div class="container-fluid">
                          <div class="page-title-box">
                              <div class="row align-items-center">
                                  <div class="col-sm-6">
                                      <h4 class="page-title"></h4>
                                      <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                  Add Food Time
                                </button>
                                  </div>
                              </div>
                          </div>
                          <!-- end row -->
                          <div class="row">
                              <div class="col-14">
                                  <div class="card">
                                      <div class="card-body">

                                        <form method="POST" action="<?php echo e(route('food_type_create')); ?> " method="post">
                                          <?php echo csrf_field(); ?>

                                        <h4 class="mt-0 header-title text-white text-center text-dark">Food Time</h4>
                                          <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                              <div class="row">
                                                  <div class="col-sm-12">
                                                      <table id="_search" class="table table-bordered dt-responsive nowrap dataTable no-footer dtr-inline collapsed" style="border-collapse: collapse; border-spacing: 0px; width: 100%;" role="grid" aria-describedby="datatable_info">

                                                          <thead>
                                                              <tr role="row">
                                                                  <th >Food Time</th>
                                                                  <th >Description</th>
                                                                  </tr>
                                                          </thead>
                                                          <tbody>
                                                            <?php $__currentLoopData = $foodtypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $foodtype): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <tr >
                                                              <td ><?php echo e($foodtype -> name); ?></td>
                                                              <td><?php echo e($foodtype -> description); ?></td>
                                                            </tr>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                          </tbody>
                                                      </table>
                                                  </div>
                                              </div>

                                          </div>
                                          </form>
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




            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header text-white">
                    <h5 class="modal-title text-dark" id="exampleModalLongTitle">Food Time</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">

                  <form id="food_type_create" action="<?php echo e(route('food_type_create')); ?>" method="post">
                    <?php echo csrf_field(); ?>

                  <div class="form-group ">
                    <label for="name">Time [Breakfast, Lunch, Dinner]</label>
                    <input type="text" class="form-control" id="Breakfast" name="name">
                  </div>

                  <div class="form-group ">
                    <label for="description">Description</label>
                    <input type="text" class="form-control"  name="description">
                  </div>


                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
                </div>
              </div>
            </div>
            </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('product.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\RMRS\RMRS\resources\views/dashboardpages/foodtype/index.blade.php ENDPATH**/ ?>