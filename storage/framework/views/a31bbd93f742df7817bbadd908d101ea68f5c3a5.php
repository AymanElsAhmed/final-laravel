<?php $__env->startSection('content'); ?>
    






    <div class="position-relative "  style="margin: 30px">

    <div class="position-absolute top-50 start-0 translate-middle-y"> <a href="<?php echo e(route('posts.create')); ?>" class="btn btn-primary">انشاء منشور </a>
    </div>
  <div class="position-absolute top-50 start-50 translate-middle w-50">
     <form class="d-flex" role="search" type="get" action="<?php echo e(route('posts.index')); ?>">
    <button class="btn btn-primary" type="submit">بحث</button>
        <input class="form-control me-2" name="search" type="search" aria-label="Search">

      </form>  </div>
    </div>

    
       

<div class="container-fluid pb-3" style="margin-top: 60px">
    <div class="d-grid gap-3" >
        
        <div class="bg-light border rounded-3">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" dir="rtl">
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col" >
                    <div class="card shadow-sm">
                      <img src="<?php echo e(asset('productpic'). '/'. $post->product->product_pic); ?>" class="card-img-top img-fluid"  alt="...">
                        
                       <div class="card-body  " style="text-align: center " >
                        <h1 style="color: #007EA7"> <?php echo e($post["title"]); ?> </h1>
                        <p class="card-text"><span class="text-muted" >الوصف:</span> &nbsp; <?php echo e($post["description"]); ?>  </p>
                        <p class="card-text"> <span  class="text-muted">التوصيل من :</span> &nbsp;<?php echo e($post["from"]); ?>  </p>
                        <p class="card-text"> <span class="text-muted">الى:</span>  &nbsp;<?php echo e($post["to"]); ?>  </p>
                        


                         
                        <br>
                            <div class="btn-group text-center ">
                                <!-- <button type="button" class="btn btn-sm btn-outline-secondary">View</button> -->
                               
                                <a class="btn btn-primary" href="<?php echo e(route('posts.show' , [$post->id])); ?>">عرض المنشور</a>
                            </div>
                        </div>
                        <p class="text-muted text-center"><?php echo e($post->created_at); ?></p>

                        <div class="text-center" style="margin-bottom: 10px">

                            <a  href="#"  style="text-decoration:none ">
                              <img src="<?php echo e(asset('profilepic'). '/'. $post->user->profile_pic); ?>" class="card-img-top  rounded-circle" alt="..." style="width:70px; height:70px;  ">

                              </a>
                              <p> <a href="#"  style="text-decoration:none" ><small  style="color: #007EA7"><?php echo e($post->user->name); ?></small></a></p>
                            </div>
                    </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               
               
                </div>
             </div>
            
        </div>
    </div>


    <?php $__env->stopSection(); ?>




















<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Final Project\final-laravel-main\resources\views/posts/index.blade.php ENDPATH**/ ?>