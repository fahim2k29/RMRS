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
    <form class="form-inline" action="<?php echo e(route('dateinput')); ?>" method="POST">
      <?php echo csrf_field(); ?>
      <div class="" style="width:200px">
        Enter a Date: <input type="date" name="date"  class=" form-control">
        <button type="submit">Submit</button>
      </div>
    </form>

      <div class="row justify-content-center">
          <div class="col-md-12">
              <div class="card" >
                  <div class="card-header"><?php echo e(__('Daily Report')); ?></div>

                  <table>

                    <td style="width:810px"></td>

                        <td>
                          <a onclick="myApp.printTable()" class="btn btn-default" bgcolor="gray"><i class="fa fa-print">Print Page</i>

                        </a>
                      </td>
                    </tr>

                  </table>

                  <div id="toPrint"  class="card-body" >
                    <h3><center>RMRS</center></h3>
                    <h4>Daily Sales Report</h4>
                    <?php if(isset($dailyreport)): ?>
                    <h2><strong>Daily Total Sales: <?php echo e($sum); ?> ৳</strong></h2>
                      <table class="table table-responsive-xl table-striped table-hover" >
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
                        </tbody>
                      </table>
                      <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
        </div>
</div>

<script >

  var myApp = new function () {
         this.printTable = function () {
             var tab = document.getElementById('toPrint');
             var win = window.open('', '', 'height=700,width=700');
             win.document.write(tab.outerHTML);
             win.document.close();
             win.print();
         }
     }


</script>

<?php echo $__env->make('newtheme.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Fahim_cafe_-Final\Fahim cafe -Final\NewProject-master-master\resources\views/Admin/DailyReports/index.blade.php ENDPATH**/ ?>