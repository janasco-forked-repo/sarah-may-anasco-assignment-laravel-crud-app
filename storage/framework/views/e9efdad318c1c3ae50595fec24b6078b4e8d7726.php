
  
<?php $__env->startSection('content'); ?>
<br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> iPhone Details</h2>
            </div>
   			<br>
            <div class="pull-right">
                <a class="btn btn-primary" href="<?php echo e(route('iphones.index')); ?>"> Back</a>
            </div>
        </div>
    </div>
   	<br>
   	<br>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <?php echo e($iphone->name); ?>

            </div>
        </div>
   		<br>
   		<br>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong>
                <?php echo e($iphone->detail); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('iphones.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\THIS_PC\Downloads\sarahmay-crud-laravel9\resources\views/iphones/show.blade.php ENDPATH**/ ?>