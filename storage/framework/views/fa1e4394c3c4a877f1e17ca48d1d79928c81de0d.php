<?php $__env->startSection('content'); ?>
<div style="margin: auto;
width: 50%;
box-shadow: 1px 2px 3px 4px rgba(104, 145, 184, 0.4);
padding: 10px;">
<h1 class="h1 text-center text-primary"> تعديل</h1>

<div class="container">
<form class="row g-3" dir="rtl" method="POST" action="<?php echo e(route('clients.update', [$clients->id])); ?>" enctype="multipart/form-data" >
  <?php echo csrf_field(); ?>  
  <?php echo method_field('PUT'); ?>

  <div class="col-12">
      <label for="name" class="form-label text-primary">الاسم</label>
      <input type="text" class="form-control" id="name" name="name" value="<?php echo e($clients->name); ?>">
      <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <div class="alert alert-danger"><?php echo e($message); ?></div>
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <div class="col-12">
      <label for="adress" class="form-label text-primary">العنوان</label>
      <input type="text" class="form-control" id="adress" name="adress" value="<?php echo e($clients->adress); ?>">
      <?php $__errorArgs = ['adress'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <div class="alert alert-danger"><?php echo e($message); ?></div>
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
  </div>

   
    <div class="col-12">
      <label for="phone_number" class="form-label text-primary">الموبايل</label>
      <input type="number" class="form-control" id="phone_number" name="phone_number" value="<?php echo e($clients->phone_number); ?>">
      <?php $__errorArgs = ['phone_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <div class="alert alert-danger"><?php echo e($message); ?></div>
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
  </div>

           
            <button type="submit" class="btn btn-info">حفظ</button>
        </form>

    </div> 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Final Project\final-laravel-main\resources\views/clients/edit.blade.php ENDPATH**/ ?>