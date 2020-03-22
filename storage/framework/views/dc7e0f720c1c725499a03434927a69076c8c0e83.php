<?php $__env->startSection('title'); ?>
  Awesome Cafe
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
<!--BANNER-->
<section>
    <div id="lgx-parallax-banner" class="lgx-banner"> <!--lgx-about-bottom-->
        <div class="lgx-section">
            <div id="layer-wrapper" class="lgx-item-parallax-banner">

                <div id="object1" class="bglayer1 hidden-sm hidden-xs">
                    <img src="<?php echo e(asset('frontend/assets/img/parallax/3.png')); ?>" alt="">
                </div>
                <div id="object5" class="rightlayer1 hidden-sm hidden-xs">
                    <img src="<?php echo e(asset('frontend/assets/img/parallax/4.png')); ?>" alt="">
                </div>
                <div id="object2" class="bglayer2 hidden-sm hidden-xs">
                    <img src="<?php echo e(asset('frontend/assets/img/parallax/5.png')); ?>" alt="">
                </div>
                <div id="object6" class="rightlayer2shade hidden-sm hidden-xs">
                    <img src="<?php echo e(asset('frontend/assets/img/parallax/7.png')); ?>" alt="">
                </div>
                <div id="object7" class="rightlayer2 hidden-sm hidden-xs">
                    <img src="<?php echo e(asset('frontend/assets/img/parallax/6.png')); ?>" alt="">
                </div>

                <div class="banner-content">
                    <div class="lgx-hover-link">
                        <div class="lgx-vertical">
                            <div class="lgx-banner-info lgx-banner-info-black lgx-banner-info-center"> <!--lgx-banner-info-black lgx-banner-info-big lgx-banner-info-bg-->
                                <h3 class="subtitle">Laugh Dream Clap </h3>
                                <h2 class="title ">Share Forgive Celebrate Love</h2>
                                <p class="text">
                                    Experience a taste of Italy while visiting Dhaka. We serve pastas, wood-fired pizzas,
                                    traditional antipasti and more.
                                <div class="btn-area">
                                    <a class="lgx-scroll btn lgx-btn" href="<?php echo e(route('reservationpage')); ?>"><span>Reservation</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- //.INNER -->
    </div>
</section>
<!--BANNER END-->

<!--<section id="lgx-parallax-banner">
    <div class=" ">

    </div>
</section>-->


<!--ABOUT-->

<!--ABOUT END-->



<!--ABOUT TOP-->
<section>
    <div id="lgx-about-top" class="lgx-about-top">
        <div class="lgx-inner">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="about-top-single">
                            <a href="#"><img src="<?php echo e(asset('frontend/assets/img/about-icon2.png')); ?>" alt="about-icon"></a>
                            <h3 class="title"><a href="#">Delicious food</a></h3>
                            <p>Beetroot water spinach okra water chestnut ricebean pea.</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="about-top-single">
                            <a href="#"><img src="<?php echo e(asset('frontend/assets/img/about-icon4.png')); ?>" alt="about-icon"></a>
                            <h3 class="title"><a href="#">Professional Service</a></h3>
                            <p>Beetroot water spinach okra water chestnut ricebean pea.</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="about-top-single">
                            <a href="#"><img src="<?php echo e(asset('frontend/assets/img/about-icon6.png')); ?>" alt="about-icon"></a>
                            <h3 class="title"><a href="#">Excelient Menu</a></h3>
                            <p>Beetroot water spinach okra water chestnut ricebean pea.</p>
                        </div>
                    </div>
                </div>
            </div><!-- //.CONTAINER -->
        </div><!-- //.INNER -->
    </div>
</section>
<!--ABOUT TOP END-->


<!--OFFER-->

<!--OFFER END-->


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
                            <li class="active"><a class="lgx-filter-item" href="javascript:void(0)" data-filter="*">All Items<span>Fresh & Delicious</span></a></li>
                            <li><a class="lgx-filter-item" href="javascript:void(0)" data-filter=".breakfast"> Break-fast <span>Fresh & Delicious</span></a></li>
                            <li><a class="lgx-filter-item" href="javascript:void(0)" data-filter=".lunch"> Lunch <span>Fresh & Delicious</span></a></li>
                            <li><a class="lgx-filter-item" href="javascript:void(0)" data-filter=".dinner"> Dinner <span>Fresh & Delicious</span></a></li>
                            <li><a class="lgx-filter-item" href="javascript:void(0)" data-filter=".drinks"> Others <span>Fresh & Delicious</span></a></li>
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



<!--RESERVATION-->
<section>
    <div id="lgx-reservation" class="lgx-reservation">
        <div class="lgx-inner">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="lgx-heading">
                            <h2 class="heading-title">Book A Table</h2>
                            <h4 class="heading-subtitle">Some Trendy And Popular Courses Offerd</h4>
                        </div>
                    </div>
                </div>

                <main>
                    <div class="lgx-page-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-md-offset-1 col-md-10">
                                    <div class="lgx-reservation-area lgx-reservation-area-another"> <!--lgx-reservation-area-another-->
                                        <div class="open-close-time">
                                            <p>Sunday- Thursday: <span>08am - 12pm</span></p>
                                            <p>Friday - Saturday: <span>10am - 11pm</span></p>
                                        </div>

                                        <form id="reservationbooking" action="<?php echo e(route('reservation_create')); ?>" method="post">
                                         <?php echo csrf_field(); ?>

                                            <div class="form-group  lgx-form-left">
                                                <input class="form-control" name="name" id="foodiebooking_name" placeholder="Enter Your Name" aria-required="true" type="text">
                                            </div>

                                            <div class="form-group lgx-form-right">
                                                <input class="form-control" name="email" id="foodiebooking_email" placeholder="Email Address" aria-required="true" type="text">
                                            </div>

                                            <div class="form-group lgx-form-left">
                                              <input id="phoneInput" name="telephone_number"  class="form-control mt-1 block w-full" placeholder="Format: 01......" maxlength="11" value="">
                                              <!-- <input id="phoneInput" name='telephone_number'  type="number" class="form-control mt-3 block w-full" placeholder="Format: 01......" maxlength="11" value=""> -->
                                                <!-- <input class="form-control" name="telephone_number" id="foodiebooking_phone" placeholder="Telephone Number" type="number"> -->
                                                <!-- <small class="text-red-500">Phone number should be 11 digit number</small> -->
                                            </div>



                                            <div class="form-group lgx-form-full lgx-form-left">
                                                <div class="input-group date" id="datetimepicker1">


                                                    <input name="journeyDate" id="shootdate" class="form-control" placeholder="Date format ( mm-dd-yyyy )." aria-required="true" type="text" min="<?php echo date('Y-m-d'); ?>">

                                                        <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-calendar"></span>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="form-group lgx-form-right">
                                                <select class="form-control" name="time" id="foodiebooking_time" aria-required="true">
                                                    <option value="">Time</option>
                                                    <option value="10AM - 12PM">10AM - 12PM</option>
                                                    <option value="02PM - 06PM">02PM - 06PM</option>
                                                    <option value="07PM - 11PM">07PM - 11PM</option>
                                                </select>
                                            </div>

                                            <div class="form-group lgx-form-right">
                                                <select class="form-control" name="choose_food" id="foodiebooking_time" aria-required="true">
                                                    <option value="">Choose Food</option>
                                                    <option value="Breakfast">Breakfast</option>
                                                    <option value="Lunch">Lunch</option>
                                                    <option value="Dinner">Dinner</option>
                                                </select>
                                            </div>

                                            <div class="form-group lgx-form-right">
                                          <select class="form-control" name="choose_item" id="foodiebooking_time" aria-required="true">
                                                    <option value="">Choose Item</option>
                                                    <option value="Burger">Burger</option>
                                                    <option value="Roll">Roll</option>
                                                    <option value="Pizza">Pizza</option>
                                                </select>
                                            </div>



                                            <div class="form-group lgx-form-right">
                                                <select class="form-control" name="table_number" id="foodiebooking_time" aria-required="true">
                                                    <option value="">Table Number</option>
                                                    <option value="One">One</option>
                                                    <option value="Two">Two</option>
                                                    <option value="Three">Three</option>
                                                </select>
                                            </div>



                                            <div class="form-group lgx-form-right">
                                                <select class="form-control" name="reservation_type" id="foodiebooking_time" aria-required="true">
                                                    <option value="">Reservation Type</option>
                                                    <option value="Birthday">Birthday</option>
                                                    <option value="Annivarsary">Annivarsary</option>
                                                    <option value="Hangout">Hangout</option>
                                                </select>
                                            </div>

                                            <div class="form-group  lgx-form-left ">
                                                <input class="form-control" name="address" id="foodiebooking_name" placeholder="Write your address..." aria-required="true" type="text">
                                            </div>

                                            <div class="lgx-form-group">
                                                <!--<input  class="lgx-btn lgx-submit" value="Booking Submit" type="submit">-->
                                                <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                                              <button class="btn lgx-btn primary" type="submit" ><span>Submit</span></button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--//.ROW-->
                        </div>
                        <!-- //.CONTAINER -->
                    </div>
                  </main>
                <!--//.ROW-->
            </div>
            <!-- //.CONTAINER -->
        </div>
        <!-- //.INNER -->
    </div>
</section>
<!--RESERVATION END-->





<!--VIDEO-->
<section>
    <div id="lgx-video" class="lgx-video">
        <div class="lgx-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="lgx-video-title"><span>Watch Our Promo video!</span>How to make an online order</h2>
                        <div class="lgx-video-area">
                            <figure>
                                <figcaption>
                                    <div class="video-icon">
                                        <div class="lgx-vertical">
                                            <a id="myModalLabel" class="icon" href="#" data-toggle="modal" data-target="#lgx-modal">
                                                <i class="fa fa-play " aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                            <!-- Modal-->
                            <div id="lgx-modal" class="modal fade lgx-modal">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <div class="modal-body">
                                            <iframe id="modalvideo" src="https://www.youtube.com/embed/gApAi3B0iUY" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- //.Modal-->
                        </div>
                    </div>
                </div>
            </div><!-- //.CONTAINER -->
        </div><!-- //.INNER -->
    </div>
</section>
<!--//.VIDEO END-->
<script>
$('#datetimepicker1').datetimepicker({
minDate: moment("12/13/2019"),
maxDate: moment("12/17/2019"),
format:'DD/MM/YYYY HH:mm'
}).on('dp.show', function(){
$('#datetimepicker1').datetimepicker({maxDateNow: true, format:'DD/MM/YYYY HH:mm'});
});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontpage.homepage.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\NewProject-master-master\NewProject-master-master\resources\views/frontpage/homepage/index.blade.php ENDPATH**/ ?>