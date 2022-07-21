<?php $__env->startSection('content'); ?>

<div style="margin: auto;
width: 50%;
box-shadow: 1px 2px 3px 4px rgba(104, 145, 184, 0.4);
padding: 10px;">
<p class="h1 text-center text-primary"> إضافة منتج</p> 

<div class="container" style="margin-bottom: 30px;">
<form class="row g-3" dir="rtl" method="POST" action="<?php echo e(route('products.store')); ?>" enctype="multipart/form-data" >
  <?php echo csrf_field(); ?>  
  <div class="col-12">
      <label for="name" class="form-label text-primary">الاسم</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="col-12">
      <label for="price" class="form-label text-primary">السعر</label>
      <input type="number" class="form-control" id="price" name="price">
    </div>
    <div class="col-12">
      <label for="weight" class="form-label text-primary">الوزن</label>
      <input type="number" class="form-control" id="weight" placeholder="الوزن اختياري" name="weight">
    </div>
    <div class="col-12">
      <label for="quantity" class="form-label text-primary">الكمية</label>
      <input type="number" class="form-control" id="quantity" placeholder="الكمية الإفتراضيه ب 1" name="quantity">
    </div>

    <div class="col-12">
      <label for="category" class="form-label text-primary">أضف تصنيف</label>
      <select id="category" class="form-select" name="category_id">
        <?php $__currentLoopData = $cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
        <option value="<?php echo e($cat->id); ?>" name="category_id"><?php echo e($cat->name); ?></option>
        
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
    </div>

    <div class="col-12">
        <label for="productPic" class="form-label text-primary">أضف صور المنتج</label>
        <input class="form-control" type="file" id="productPic" multiple name="product_pic">
      </div>
    <div class="col-12 text-center">
      <button type="submit" class="btn btn-primary">أضف منتج</button>
    </div>
  </form>
</div>

    
 </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Final Project\final-laravel-main\resources\views/products/create.blade.php ENDPATH**/ ?>