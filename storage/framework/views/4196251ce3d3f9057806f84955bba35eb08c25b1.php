<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-white text-center"><b><?php echo e(__('Customer Dashboard')); ?></b></div>


                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Customer Name</th>
                      <th>Address</th>
                      <th>Total Amount</th>
                      <th>Payment Type</th>
                      <th>Payment Status</th>
                      <th>Delivery Status</th>
                      <th>Action</th>

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
                        <td><a href="<?php echo e(route('delivery_details_status',$order ->id)); ?>">Change</a> </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                  </tbody>
                </table>

</div>
</div>
</div>
</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontpage.homepage.delivery', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\RMRS\RMRS\resources\views/delivery/index.blade.php ENDPATH**/ ?>