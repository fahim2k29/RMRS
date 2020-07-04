<?php $__env->startSection('title'); ?>
    Order Products
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
                            <div class="card-header text-center"> <h2><?php echo e(__('Order Information')); ?></h2> </div>

                            <div class="card-body">

                                <table class="card-table table-responsive table-bordered">
                                  <thead>
                                    <tr>
                                      <th>Customer Name</th>
                                      <th>Address</th>
                                      <th>Total Amount</th>
                                      <th>Payment Type</th>
                                      <th>Payment Status</th>
                                      <th>Delivery Status</th>

                                    </tr>
                                  </thead>
                                  <tbody>

                                    <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>

                                        <td><?php echo e($order->customer->name); ?></td>
                                        <td><?php echo e($order->address); ?></td>
                                        <td><?php echo e($order->total_price); ?></td>
                                        <td><?php echo e(($order->pm == 1) ? "Cash On Delivery" : "Credit Card"); ?></td>
                                        <td><?php echo e(($order->payment_status == 1) ? "Pending" : "Complete"); ?></td>
                                        <?php if($order->d_status==1): ?>
                                        <td class="text-success"><b>Delivered</b></td>
                                        <?php else: ?>
                                        <td class="text-warning"><b>Picked</b></td>
                                        <?php endif; ?>
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

<?php echo $__env->make('newtheme.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Laravel Projects\Restaurant mamagement system\Fahim_cafe_-Final\Fahim cafe -Final\RMRS\resources\views/Admin/Order/index.blade.php ENDPATH**/ ?>