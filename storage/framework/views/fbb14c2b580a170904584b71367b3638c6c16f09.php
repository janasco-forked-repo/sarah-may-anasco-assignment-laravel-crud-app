
 
<?php $__env->startSection('content'); ?>
    <br>
    <div class="row">
    	<br>
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 9 CRUD Assignment - Sarah May Anasco</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="<?php echo e(route('iphones.create')); ?>"> Create New iPhone</a>
            </div>
        </div>
    </div>
    <hr>
    <br>
   
    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>
   <div class="row">
	    <table id="iPhoneTables" class="table table-bordered">
	        <thead>
		        <tr>
		            <th>No</th>
		            <th>Name</th>
		            <th>Details</th>
		            <th width="280px">Action</th>
		        </tr>
		    </thead>
	        <tbody>
		        <?php $__currentLoopData = $iphones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $iphone): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		        <tr>
		            <td><?php echo e(++$i); ?></td>
		            <td><?php echo e($iphone->name); ?></td>
		            <td><?php echo e($iphone->detail); ?></td>
		            <td>
		                <form action="<?php echo e(route('iphones.destroy',$iphone->id)); ?>" method="POST">
		   
		                    <a class="btn btn-info" href="<?php echo e(route('iphones.show',$iphone->id)); ?>">View</a>
		    
		                    <a class="btn btn-primary" href="<?php echo e(route('iphones.edit',$iphone->id)); ?>">Edit</a>
		   
		                    <?php echo csrf_field(); ?>
		                    <?php echo method_field('DELETE'); ?>
		      
		                    <button type="submit" class="btn btn-danger">Delete</button>
		                </form>
		            </td>
		        </tr>
		        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		    </tbody>
	        <tfoot>
		        <tr>
		            <th>No</th>
		            <th>Name</th>
		            <th>Details</th>
		            <th width="280px">Action</th>
		        </tr>
		    </tfoot>
	    </table>
  	</div>
    
      
<?php $__env->stopSection(); ?>
<?php echo $__env->make('iphones.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\THIS_PC\Downloads\sarahmay-crud-laravel9\resources\views/iphones/index.blade.php ENDPATH**/ ?>