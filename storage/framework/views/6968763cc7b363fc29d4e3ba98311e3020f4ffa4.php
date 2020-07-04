<?php $__env->startSection('title'); ?>
  Cart | AwesomeCafe
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<style>

.order-card {
  background: #ebebeb;
  padding: 34px 40px;
  border: 2px solid #f4f2f8;
}

.order-card .btn-full {
  width: 100%;
  font-size: 16px;
  background: #b09d81;
  padding: 20px 30px;
  margin-top: 32px;
}

.order-details {
  padding: 38px 19px 24px;
  background: #fff;
}

.od-warp {
  padding: 0 26px;
}

</style>

<div class="container">
    <div class="row justify-content-center text-dark">

                <form id="contactpage" action="<?php echo e(route('order_create')); ?>" method="post">
                  <?php echo csrf_field(); ?>

                  <div class="col-md-6">
                <div class="card">
                    <div class="card-header"><b><h4><?php echo e(__('Delivery Time: 1 hour')); ?></h4></b></div>

                    <div class="form-group row">
                        <label for="name" class="col-md-3 col-form-label text-md-right"><?php echo e(__('Name :')); ?></label>
                        <div class="col-md-6">
                            <p > <b><?php echo e(Auth::user()->name); ?> </b></p>

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-3 col-form-label text-md-right"><?php echo e(__('Phone Number :')); ?></label>
                        <div class="col-md-6">
                            <p > <b> 0<?php echo e(Auth::user()->phone); ?> </b></p>
                        </div>
                    </div>

                    <input type="hidden" name="user_id" value="<?php echo e(Auth::user()->id); ?>">

                    <div class="card-header"><b><h3><?php echo e(__('Delivery Address')); ?></h3></b></div>

                    <div class="form-group row">
                        <label for="area" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Your Area')); ?></label>
                      <div class="col-md-6">
                            <select class="form-control" name="area" id="foodiebooking_time"  aria-required="true">
                                <option value="Khilkhet">Khilkhet</option>
                                <option value="Uttara">Uttara</option>
                                <option value="Mohakhali">Mohakhali</option>
                                <option value="Banani">Banani</option>
                                <option value="Baridara">Baridara</option>
                                <option value="Gulshan">Gulshan</option>
                            </select>
                            <?php $__errorArgs = ['area'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="location" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Location')); ?></label>
                        <div class="col-md-6">
                          <textarea name="location" rows="5" cols="40" placeholder="House, Road .."></textarea>
                            <?php $__errorArgs = ['location'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
            </div>
        </div>



					<div class="col-lg-6">
						<div class="order-card">
							<div class="order-details">
								<div class="od-warp">
									<h4 class="checkout-title">Your order</h4>
									<table class="order-table">

            					<thead>
            						<tr>
            							<th class="product-th">Product</th>
                          <th>Quantity</th>
            							<th class="total-th">Amount</th>
            						</tr>
            					</thead>
            					<tbody>
                        <?php

                        $sub_total = 0;

                        ?>

                        <?php $__empty_1 = true; $__currentLoopData = $cart_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                        <tr>
            							<td >
            								<div class="pc-title">
            									<h5><?php echo e(App\Product::find($cart_item->product_id)->name); ?></h5>
            								</div>
            							</td>
                          <td class="total-col">
                          <?php echo e($cart_item->product_quantity); ?>

                          </td>
            							<td class="total-col">
                            ৳<?php echo e((App\Product::find($cart_item->product_id)->price) * ($cart_item->product_quantity)); ?>


                            <?php

                            $sub_total +=  ((App\Product::find($cart_item->product_id)->price) * ($cart_item->product_quantity));

                            ?>
                          </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                          <tr>
                            <td>
                              No Product to show
                            </td>
                          </tr>
                        <?php endif; ?>
            					</tbody>
            				</table>

                  <p> <b> Sub Total: <?php echo e($sub_total); ?></b> </p>

                    <input type="hidden" name="total_price" value="<?php echo e($sub_total); ?>">

								</div>


								<div class="payment-method">
									<div class="pm-item">
										<input type="radio" name="pm" id="one" value="1">
										<label for="one">Cash on delievery</label>
									</div>


									<div class="pm-item">
										<input type="radio" name="pm" id="two" value="2">
										<label for="two">Credit Card</label>
									</div>
								</div>

							</div >

							<button class="btn lgx-btn primary" type="submit" ><span>Confirm Order</span></button>
						</div>
					</div>
        </form>

					</div>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontpage.homepage.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Laravel Projects\Restaurant mamagement system\Fahim_cafe_-Final\Fahim cafe -Final\RMRS\resources\views/cart/menucart/placeOrder.blade.php ENDPATH**/ ?>