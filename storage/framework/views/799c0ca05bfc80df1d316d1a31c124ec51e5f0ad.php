
<?php if($message = Session::get('success')): ?>
<div id="alert" class="alert alert-success alert-block text-center">
	<button type="button" class="close" data-dismiss="alert">×</button>
        <strong><?php echo e($message); ?></strong>
</div>
<?php endif; ?>


<?php if($message = Session::get('error')): ?>
<div id="alert" class="alert alert-danger alert-block text-center">
	<button type="button" class="close" data-dismiss="alert">×</button>
        <strong><?php echo e($message); ?></strong>
</div>
<?php endif; ?>


<?php if($message = Session::get('warning')): ?>
<div id="alert" class="alert alert-warning alert-block text-center">
	<button type="button" class="close" data-dismiss="alert">×</button>
	<strong><?php echo e($message); ?></strong>
</div>
<?php endif; ?>


<?php if($message = Session::get('info')): ?>
<div id="alert" class="alert alert-info alert-block text-center">
	<button type="button" class="close" data-dismiss="alert">×</button>
	<strong><?php echo e($message); ?></strong>
</div>
<?php endif; ?>


<?php if($errors->any()): ?>
<div id="alert" class="alert alert-danger text-center">
	<button type="button" class="close" data-dismiss="alert">×</button>
	Please check the form below for errors
</div>
<?php endif; ?>
<?php /**PATH E:\Laravel Projects\Restaurant mamagement system\Fahim_cafe_-Final\Fahim cafe -Final\RMRS\resources\views/flash-message.blade.php ENDPATH**/ ?>