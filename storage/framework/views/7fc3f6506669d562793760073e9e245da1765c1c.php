<?php $__env->startSection('title'); ?>
  Menu
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!--MENU ITEMS-->
<section>
 <div id="lgx-menu" class="lgx-menu"> <!--lgx-menu-white-->
     <div class="lgx-inner">
     <div class="container">
         <div class="row">
             <div class="col-xs-12">
                 <div class="lgx-heading lgx-heading-white">
                     <h2 class="heading-title">Offerd Menu</h2>
                     <h4 class="heading-subtitle">Some Trendy And Popular Courses Offerd</h4>
                 </div>
             </div>
         </div>
         <!--//.ROW-->
     </div>
         <div class="container-fluids section-gap">
             <div class="lgx-tab lgx-tab-another"> <!--lgx-tab-another lgx-tab-another2-->
                 <div class="lgx-filter-area">
                     <ul id="lgx-filter" class="lgx-filter list-inline">
                         <li ><a class="lgx-filter-item" href="javascript:void(0)" data-filter="*">All Items<span>Fresh & Delicious</span></a></li>
                         <li><a <?php $id = 1; ?>  href="<?php echo e(route('menu_sort', $id )); ?>" > Break-fast <span>Fresh & Delicious</span></a></li>
                         <li><a <?php $id = 2; ?>  href="<?php echo e(route('menu_sort', $id )); ?>" > Lunch <span>Fresh & Delicious</span></a></li>
                         <li><a <?php $id = 3; ?>  href="<?php echo e(route('menu_sort', $id )); ?>" > Dinner <span>Fresh & Delicious</span></a></li>
                     </ul>
                 </div>

                 <div class="lgx-menu-container" id="_search">

                     <div id="lgx-grid-wrapper" class="lgx-grid-wrapper lgx-grid-wrapper-gap" > <!--lgx-grid-wrapper-gap-->

                       <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <div class="lgx-grid-item breakfast"> <!-- lgx-grid-item-col1 lgx-grid-item-col2 lgx-grid-item-col3 lgx-grid-item-col4-->
                             <div class="lgx-single-menu-another">
                               <?php if($product ->status==1): ?>
                                 <a href="<?php echo e(url('/menucart/')); ?>/<?php echo e($product->id); ?>">
                                             <figure>
                                             <img src="<?php echo e(asset('Image/product_photo')); ?>/<?php echo e($product->product_image); ?>" class="rounded" alt="<?php echo e($product->product_image); ?>" >
                                                 <figcaption>
                                                 </figcaption>
                                             </figure>
                                             <div class="menu-info">
                                                 <div class="info-left" >
                                                     <h3 class="title"> <?php echo e($product->name); ?> </h3>
                                                     <p class="text" >   <?php echo e($product->description); ?> </p>
                                                 </div>
                                                 <div class="menu-price">
                                                     <span>৳</span><?php echo e($product->price); ?>

                                                 </div>

                                                 <!-- <button type="button" name="button">AddToCart</button> -->
                                             </div>
                                 </a>
                                 <?php endif; ?>
                             </div>
                         </div><!--//ITEM-->



                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




                     </div>

                 </div>

             </div>
         </div>
     </div>
 </div>
</section>
 <!--//.MENU ITEMS END-->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontpage.homepage.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Fahim_cafe_-Final\Fahim cafe -Final\NewProject-master-master\resources\views/frontpage/menupage/index.blade.php ENDPATH**/ ?>