<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-white text-center"><b><?php echo e(__('Customer Dashboard')); ?></b></div>


                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Total Amount</th>
                      <th>Payment Type</th>
                      <th>Payment Status</th>

                    </tr>
                  </thead>
                  <tbody>

                    <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($order-> total_price); ?></td>
                        <td><?php echo e(($order->pm == 1) ? "Cash On Delivery" : "Credit Card"); ?></td>
                        <td><?php echo e(($order->payment_status == 1) ? "Pending" : "Complete"); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                  </tbody>
                </table>

</div>
</div>
</div>
</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('customer.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\NewProject-master-master\NewProject-master-master\resources\views/customer/profile.blade.php ENDPATH**/ ?>