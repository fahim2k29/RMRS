<?php $__env->startSection('title'); ?>
    Review Page
<?php $__env->stopSection(); ?>

    <?php $__env->startSection('content'); ?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header"><?php echo e(__('Create Your Review')); ?></div>
                    <form id="reviewcreate" action="<?php echo e(route('review_create')); ?>" method="post">
                      <?php echo csrf_field(); ?>
                    <div>
                      <label for="name"><b>Name</b></label>
                      <input type="text" placeholder="Enter Name" name="name" required>
                    </div>
                    <div>
                      <label for="email"><b>Email</b></label>
                      <input type="text" placeholder="Enter Email" name="email" required>
                    </div>
                    <div>
                      <label for="rating"><b>Rating</b></label>
                      <input type="number"  name="rating" required>
                    </div>

                    <div>
                      <textarea name="feedback" rows="4" cols="60" placeholder="Your Opinion.." ></textarea>
                    </div>
                    <div  class="row justify-content-center">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>





<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\NewProject-master-master\NewProject-master-master\resources\views/frontpage/reviewpage/index.blade.php ENDPATH**/ ?>