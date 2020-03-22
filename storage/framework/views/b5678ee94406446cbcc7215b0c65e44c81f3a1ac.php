<?php $__env->startSection('title'); ?>
  Cart | AwesomeCafe
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<style >
/*------------------
Cart page
---------------------*/




.cart-table {
	margin-bottom: 40px;
	overflow-y: auto;
}

.cart-table table {
	width: 80%;
}

.cart-table thead {
	background: #ebebeb;
	margin-bottom: 40px;
}

.cart-table thead th {
	padding: 5px 25px;
	text-align: center;
	font-weight: 400;
	font-size: 14px;
}

.cart-table tbody td {
	margin-top: 37px;
}

.cart-table .product-th {
	text-align: left;
}

.cart-table .product-col {
	display: table;
}

.cart-table .product-col img {
	display: table-cell;
	max-width: 187px;
}

.cart-table .product-col .pc-title {
	padding-left: 20px;
	display: table-cell;
	vertical-align: middle;
}

.cart-table .product-col .pc-title h4 {
	font-size: 12px;
	font-weight: 300;
}

.cart-table .product-col .pc-title a {
	font-size: 12px;
	color: #9e9e9e;
}

.cart-table .quy-input {
	width: 147px;
	height: 60px;
	background: #ebebeb;
	overflow: hidden;
	padding-top: 17px;
	padding-left: 25px;
	padding-right: 3px;
	margin: 0 auto;
}

.cart-table .quy-input span {
	font-size: 16px;
}

.cart-table .quy-input input {
	font-size: 16px;
	float: right;
	width: 60px;
	background-color: transparent;
	border: none;
}

.cart-table .price-col {
	text-align: center;
}

.cart-table .total-col {
	text-align: right;
	width: 5%;
}

.cart-table .total-th {
	text-align: right;
}

.cart-buttons {
	margin-bottom: 50px;
}

.cart-buttons .btn-continue {
	background: #b09d81;
	padding: 21px 30px;
	min-width: 260px;
	font-size: 16px;
}

.cart-buttons .btn-clear {
	min-width: 180px;
	padding: 21px 30px;
	background: #ebebeb;
	color: #414141;
	margin-right: 17px;
	font-size: 16px;
}

.cart-buttons .btn-update {
	min-width: 178px;
	padding: 19px 30px;
	font-size: 16px;
}

.card-warp {
	max-width: 1284px;
	margin: 0 auto;
	background: #ebebeb;
	padding: 65px 0;
}

.shipping-info h4 {
	font-weight: 400;
}

.shipping-info p {
	margin-bottom: 40px;
}

.shipping-chooes {
	margin-bottom: 85px;
}

.shipping-chooes .sc-item {
	margin-bottom: 31px;
}

.shipping-chooes label {
	display: block;
	font-size: 14px;
	color: #414141;
	margin-bottom: 0;
	padding-left: 35px;
	position: relative;
	cursor: pointer;
}

.shipping-chooes label span {
	float: right;
}

.shipping-chooes label:after {
	position: absolute;
	content: "";
	width: 11px;
	height: 11px;
	left: 0;
	top: 5px;
	background: #fff;
	border: 2px solid #9f9f9f;
	border-radius: 40px;
	-webkit-transition: all 0.2s ease 0s;
	-o-transition: all 0.2s ease 0s;
	transition: all 0.2s ease 0s;
}

.shipping-chooes input[type=radio] {
	visibility: hidden;
	position: absolute;
}

.shipping-chooes input[type=radio]:checked+label:after {
	background: #e95a5a;
	border: 2px solid #e95a5a;
}

.cupon-input {
	position: relative;
}

.cupon-input input {
	width: 60%;
	height: 52px;
	border: none;
	background: #fff;
	padding: 10px 20px;
	padding-right: 135px;
}

.cupon-input .site-btn {
	position: absolute;
	right: 0;
	top: 0;
	height: 70%;
	min-width: 122px;
	background: #b09d81;
}

.cart-total-details h4 {
	font-weight: 400;
}

.cart-total-details p {
	margin-bottom: 40px;
}

.cart-total-details .btn-full {
	width: 70%;
	font-size: 16px;
	background: #b09d81;
	padding: 20px 30px;
}

.cart-total-card {
	background: #fff;
	list-style: none;
	padding: 15px 7px 77px;
}

.cart-total-card li {
	display: block;
	font-size: 14px;
	color: #414141;
	padding: 15px 36px;
	margin-bottom: 15px;
}

.cart-total-card li span {
	float: right;
}

.cart-total-card li.total {
	background: #f7f7f7;
}

/*------------------
  Checkout page
---------------------*/

.checkout-form .checkout-title {
	font-weight: 400;
	margin-bottom: 50px;
}

.checkout-form input[type=text],
.checkout-form input[type=email],
.checkout-form input[type=password],
.checkout-form select {
	width: 70%;
	border: none;
	background: #ebebeb;
	font-size: 14px;
	height: 52px;
	margin-bottom: 25px;
	color: #414141;
	padding: 5px 20px;
}

.checkbox-items .ci-item:last-child label {
	margin-bottom: 0;
}

.checkbox-items .ci-item input[type=password] {
	opacity: 0;
	visibility: hidden;
	margin-bottom: 0;
	height: 0;
	padding: 0 20px;
	display: block;
	-webkit-transition: all 0.4s;
	-o-transition: all 0.4s;
	transition: all 0.4s;
}

.checkbox-items .ci-item label {
	display: block;
	font-size: 14px;
	color: #7e7e7e;
	margin-bottom: 5px;
	padding-left: 30px;
	position: relative;
	cursor: pointer;
}

.checkbox-items .ci-item label:after {
	position: absolute;
	content: "";
	width: 13px;
	height: 13px;
	left: 0;
	top: 3px;
	background-color: #f2f4f8;
	-webkit-transition: all 0.2s ease 0s;
	-o-transition: all 0.2s ease 0s;
	transition: all 0.2s ease 0s;
}

.checkbox-items .ci-item input[type=checkbox] {
	visibility: hidden;
	position: absolute;
}

.checkbox-items .ci-item input[type=checkbox]:checked+label:after {
	background-image: url("../img/icons/check.png");
}

.checkbox-items .ci-item input[type=checkbox]:checked+label+input[type=password] {
	height: 52px;
	opacity: 1;
	visibility: visible;
	padding: 5px 20px;
	margin-bottom: 15px;
}


</style>


<section>
    <div class="lgx-banner lgx-banner-inner">
        <div class="lgx-page-inner">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="lgx-heading-area lgx-heading-area-fixedlogo">
                            <div class="lgx-heading lgx-heading-white">
                                <h2 class="heading-title">My Cart foods</h2>
                            </div>
                            <ul class="breadcrumb">
                                <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i>Cart</a></li>
                                <li class="active">Details</li>
                            </ul>
                        </div>
                    </div>
                </div><!--//.ROW-->
            </div><!-- //.CONTAINER -->
        </div><!-- //.INNER -->
    </div>
</section>

<main>


	<!-- Page Info -->
	<div class="page-info-section page-info">
		<div class="container">
			<div class="site-breadcrumb">
				<a href="">Home</a> /
				<a href="">Sales</a> /
				<a href="">Bags</a> /
				<span>Cart</span>
			</div>
			<img src="img/page-info-art.png" alt="" class="page-info-art">
		</div>
	</div>
	<!-- Page Info end -->


	<!-- Page -->
	<div class="page-area cart-page spad">
		<div class="container">
			<div class="cart-table">
				<table>
					<thead>
						<tr>
							<th class="product-th">Product</th>
							<th>Price</th>
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
                <img src="<?php echo e(asset('image/product_photo')); ?>/<?php echo e(App\Product::find($cart_item->product_id)->product_image); ?>" alt="" width="80">
								<div class="pc-title">
									<h3><?php echo e(App\Product::find($cart_item->product_id)->name); ?></h3>
									<a href="<?php echo e(url('delete/from/cart')); ?>/<?php echo e($cart_item->id); ?>" ><b>Delete Product</b></a>
								</div>
							</td>

							<td class="price-col">৳<?php echo e(App\Product::find($cart_item->product_id)->price); ?></td>

							<td class="quy-col">
								<div class="quy-input">
									<span>Qty</span>
									<input type="number" value="<?php echo e($cart_item->product_quantity); ?>">
								</div>
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
			</div>


			<div class="row cart-buttons">

				<div class="col-lg-3">
					<a href="<?php echo e(route('homepage')); ?>"><div class="site-btn btn-continue">Continue shooping</div></a>
				</div>

				<div class="col-lg-2  text-lg-right text-left">
					<a href="<?php echo e(route('cart_clear')); ?>"><div class="site-btn btn-clear">Clear cart</div></a>
				</div>

        <div class="col-lg-2 ">
					<div class="site-btn btn-continue">Total = ৳ <?php echo e($sub_total); ?> </div>
				</div>

        <?php if(empty($c)): ?>
        <div class="col-lg-2 ">
					<a href="<?php echo e(route('checkout')); ?>"><div class="site-btn btn-clear"> Checkout </div></a>
				</div>
        <?php endif; ?>
			</div>


    </div>
    </div>

	</div>
	<!-- Page end -->

</main>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontpage.homepage.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\NewProject-master-master\NewProject-master-master\resources\views/cart/menucart/index.blade.php ENDPATH**/ ?>