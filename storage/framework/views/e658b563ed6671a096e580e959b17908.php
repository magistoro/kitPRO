

<?php $__env->startSection('content'); ?>
 <!-- Content Header (Page header) -->
 <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Продукт</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Главная</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

   <!-- Main content -->
   <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-12">
            <div class="card">
            <div class="card-header d-flex p-3" >
              <div class="mr-3">
                <a href="<?php echo e(route('admin.products.edit', $product->id)); ?>" class="btn btn-primary">Редактировать</a>
              </div>
                <form action="<?php echo e(route('admin.products.destroy', $product->id)); ?>" method="post">
                  <?php echo csrf_field(); ?>
                  <?php echo method_field('delete'); ?>
                  <input type="submit" class="btn btn-danger" value="Удалить">
                </form>
            </div>
            
            <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">

            <tbody>
            <tr>
                <td>ID</td>
                <td><?php echo e($product->id); ?></td>
            </tr>
            <tr>
              <td>Наименование</td>
              <td><?php echo e($product->name); ?></td>
            </tr>

            <tr>
              <td>Описание</td>
              <td class="text-wrap"><?php echo e($product->description); ?></td>
            </tr>

            <tr>
              <td>Цена</td>
              <td><?php echo e($product->price); ?></td>
            </tr>

            <tr>
              <td>Остаток на складе</td>
              <td><?php echo e($product->items_in_stock); ?></td>
            </tr>

            <tr>
              <td>Категория</td>
              <td><?php echo e($product->category->name); ?></td>
            </tr>

            <tr>
              <td>Тип</td>
              <td><?php echo e($product->type->name); ?></td>
            </tr>

            <tr>
              <td>Транскрипция</td>
              <td><?php echo e($product->slug); ?></td>
            </tr>

            <tr>
              <td>Фото</td>
              <td>
                
                <img src="/Content/product/thumbnails/<?php echo e($product->thumbnail); ?>" alt="<?php echo e($product->thumbnail); ?>" style="max-width: 30%">
              </td>
            </tr>

           
            </tbody>
            </table>
            </div>
            
            </div>
            
            </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->

  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.statusPopUp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\maksi\Desktop\Мои_сайты\kitprotv\resources\views/admin/product/show.blade.php ENDPATH**/ ?>