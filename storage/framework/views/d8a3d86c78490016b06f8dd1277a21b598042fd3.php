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
                                      <tr >
                                        <td>No.</td>
                                        <td>Food Name</td>
                                        <td>Quantity</td>
                                        <td>Total Price</td>
                                        <td>Payment Status</td>
                                        <td>Address</td>

                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php $__currentLoopData = $order_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order_product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <tr>
                                          <td><?php echo e($order_product->order_id); ?></td>
                                          <td><?php echo e($order_product->products->name); ?></td>
                                          <td><?php echo e($order_product->quantity); ?></td>
                                          <td><?php echo e($order_product->orders->total_price); ?></td>
                                          <td><?php echo e(($order_product->orders->payment_status == 1) ? "Pending" : "Complete"); ?></td>
                                          <td><?php echo e($order_product->orders->address); ?></td>


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

<?php echo $__env->make('newtheme.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\NewProject-master-master\NewProject-master-master\resources\views/Admin/Order/index.blade.php ENDPATH**/ ?>