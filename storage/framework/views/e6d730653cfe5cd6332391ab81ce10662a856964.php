<?php $__env->startSection('title'); ?>
Reservation
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
<!--Banner Inner-->
<section>
    <div class="lgx-banner lgx-banner-inner">
        <div class="lgx-page-inner">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="lgx-heading-area lgx-heading-area-fixedlogo">
                            <div class="lgx-heading lgx-heading-white">
                                <h2 class="heading-title">Book A Restaurant Table</h2>
                            </div>
                            <ul class="breadcrumb">
                                <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
                                <li class="active">Reservation</li>
                            </ul>
                        </div>
                    </div>
                </div><!--//.ROW-->
            </div><!-- //.CONTAINER -->
        </div><!-- //.INNER -->
    </div>
</section> <!--//.Banner Inner-->

<main>



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
                                                    <option value="Breakfast">Breakfast</option>
                                                    <option value="Lunch">Lunch</option>
                                                    <option value="Dinner">Dinner</option>
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
    <script>
$('#datetimepicker1').datetimepicker({
  minDate: moment("07/07/2020"),
  maxDate: moment("12/08/2020"),
  format:'DD/MM/YYYY HH:mm'
}).on('dp.show', function(){
  $('#datetimepicker1').datetimepicker({maxDateNow: true, format:'DD/MM/YYYY HH:mm'});
});
</script>
  </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontpage.homepage.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\RMRS\RMRS\resources\views/frontpage/reservationpage/index.blade.php ENDPATH**/ ?>