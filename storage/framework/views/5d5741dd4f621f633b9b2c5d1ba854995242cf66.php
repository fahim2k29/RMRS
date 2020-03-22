<?php $__env->startSection('content'); ?>


                <div class="container">
                    <div class="card">
                        <div class="card-header">
                            Invoice
                            <strong>Todays</strong>
                            <span class="float-right"> <strong>Status:</strong> Complete</span>

                        </div>
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-sm-6">
                                    <h6 class="mb-3">From:</h6>
                                    <strong>Awesome Cafe <br>
                                        1 & 3 Rd No. 21, <br>
                                        Nikunja, Khilkhet, Dhaka-1229<br></b></p></strong>
                                </div>

                                <div class="col-sm-6">
                                    <h6 class="mb-3">To:</h6>
                                    <div>

                                    </div>

                                </div>

                            </div>

                            <div class="table-responsive-sm">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th> # </th>
                                            <th> Item</th>
                                            <th> Quantity</th>
                                            <th> Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                          <?php $__currentLoopData = $order_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order_product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <tr>
                                              <td><?php echo e($order_product->order_id); ?></td>
                                              <td><?php echo e($order_product->products->name); ?></td>
                                              <td><?php echo e($order_product->quantity); ?></td>
                                              <td><?php echo e($order_product->orders->total_price); ?></td>
                                        </tr>




                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-sm-5">

                                </div>

                                <div class="col-lg-4 col-sm-5 ml-auto">
                                    <table class="table table-clear">
                                        <tbody>
                                            <tr>
                                                <td class="left">
                                                    <strong>Total Amount</strong>
                                                </td>
                                                <td class="right">
                                                    <strong>৳ </strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="left">
                                                    <strong>Total Paid</strong>
                                                </td>
                                                <td class="right">
                                                    <strong>৳ </strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="left">
                                                    <strong>Due</strong>
                                                </td>
                                                <td class="right">
                                                    <strong>৳ 0 </strong>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('customer.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\NewProject-master-master\NewProject-master-master\resources\views/report/invoice.blade.php ENDPATH**/ ?>