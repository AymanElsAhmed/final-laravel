<?php $__env->startSection('content'); ?>

<div style="margin: auto;
width: 50%;
box-shadow: 1px 2px 3px 4px rgba(104, 145, 184, 0.4);
padding: 10px;">
<p class="h1 text-center text-primary"> إضافة عميل</p> 

<div class="container" style="margin-bottom: 30px;">
<form class="row g-3" dir="rtl" method="POST" action="<?php echo e(route('clients.store')); ?>" enctype="multipart/form-data" >
  <?php echo csrf_field(); ?>  
  <div class="col-12">
      <label for="name" class="form-label text-primary">الاسم</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="برجاء ادخال الاسم">
    </div>
    <div class="col-12">
      <label for="adress" class="form-label text-primary">العنوان</label>
      <input type="text" class="form-control" id="adress" name="adress" placeholder="برجاء ادخال العنوان">
    </div>
    <div class="col-12">
      <label for="phone_number" class="form-label text-primary">الموبايل</label>
      <input type="number" class="form-control" id="phone_number"  name="phone_number" placeholder="برجاء ادخال رقم الموبايل" >
    </div>
  
 
    <div class="col-12 text-center">
      <button type="submit" class="btn btn-primary"> حفظ</button>
    </div>
  </form>
</div>

 </div>
<?php $__env->stopSection(); ?>



























<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Final Project\final-laravel-main\resources\views/clients/create.blade.php ENDPATH**/ ?>