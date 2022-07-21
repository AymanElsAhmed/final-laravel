<?php $__env->startSection('content'); ?>
<div class="container">
    <?php if($products->count() == 0): ?>
    <h3><?php echo e(__('No Products Yet')); ?></h3>
<?php else: ?>


<div class="row" dir="rtl">
<form action="<?php echo e(route('products.index')); ?>"  class="col-8 w-75" method="GET">
    <div class = "w-50 m-auto text-center" dir="rtl" >
        
        <input type="text" class="form-control me-2" id="search" aria-describedby="search"  name="search" placeholder="البحث">
        <div id="search" class="form-text text-primary" >ابحث من خلال العنوان </div>
      </div>
</form>

<button class="btn btn-primary col-2 h-25"> add product</button>
</div>
    

<div class="row mb-3 mt-3 g-5 "  dir="rtl">

    

    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    
    <div class="col-4"  >
    <div class="card"  >

    <img src="<?php echo e(asset('productpic'). '/'. $product->product_pic); ?>" class="card-img-top" alt="...">

    <div class="card-body">

    <h5 class="card-title text-center text-primary"><?php echo e($product->name); ?></h5>

   
    <p class="card-text text-center">السعر: <?php echo e($product->price); ?></p>

    <p class="card-text text-center">الكمية: <?php echo e($product->quantity); ?></p>

    <div class="text-center">

        
    <a href="<?php echo e(route("products.show", $product->id)); ?>" class="btn btn-primary">عرض </a>

    <a href="<?php echo e(route("products.edit", $product->id)); ?>" class="btn btn-warning">تعديل </a>
        
   <form action="<?php echo e(route("products.destroy", $product->id )); ?>" method="post" class="d-inline">
    <?php echo csrf_field(); ?>
    
    <?php echo method_field('DELETE'); ?>

          <button type="submit" class="btn btn-danger">  حذف  </button>
    
    </form>
    </div>
     </div>
     </div>

</div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php endif; ?>
</div>

    
                                



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Final Project\final-laravel-main\resources\views/products/index.blade.php ENDPATH**/ ?>