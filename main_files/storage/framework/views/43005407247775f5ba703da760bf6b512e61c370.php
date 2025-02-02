<?php $__env->startSection('title'); ?>
    <title><?php echo e(__('admin.Pricing Plan')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('admin-content'); ?>
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1><?php echo e(__('admin.Pricing Plan')); ?></h1>
            </div>

            <div class="section-body">
                <a href="<?php echo e(route('admin.pricing-plan.create')); ?>" class="btn btn-primary"><i class="fas fa-plus"></i> <?php echo e(__('admin.Add New')); ?></a>
                <div class="row mt-4">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive table-invoice">
                                    <table class="table table-striped" id="dataTable">
                                        <thead>
                                        <tr>
                                            <th ><?php echo e(__('admin.SN')); ?></th>
                                            <th ><?php echo e(__('admin.Plan Name')); ?></th>
                                            <th ><?php echo e(__('admin.Price')); ?></th>
                                            <th ><?php echo e(__('admin.Expire Date')); ?></th>
                                            <th ><?php echo e(__('admin.Status')); ?></th>
                                            <th ><?php echo e(__('admin.Action')); ?></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($plan->serial); ?></td>
                                                <td><?php echo e($plan->plan_name); ?></td>
                                                <td><?php echo e($currency); ?>

                                                    <?php echo e($plan->plan_price ?? '0'); ?>

                                                </td>
                                                <td><?php echo e($plan->expired_time); ?></td>
                                                <td>
                                                    <?php if($plan->status == App\Constants\Status::ACTIVE): ?>
                                                        <a href="javascript:;" onclick="changeProductCategoryStatus(<?php echo e($plan->id); ?>)">
                                                            <input id="status_toggle" type="checkbox" checked data-toggle="toggle" data-on="<?php echo e(__('admin.Active')); ?>" data-off="<?php echo e(__('admin.Inactive')); ?>" data-onstyle="success" data-offstyle="danger">
                                                        </a>

                                                    <?php else: ?>
                                                        <a href="javascript:;" onclick="changeProductCategoryStatus(<?php echo e($plan->id); ?>)">
                                                            <input id="status_toggle" type="checkbox" data-toggle="toggle" data-on="<?php echo e(__('admin.Active')); ?>" data-off="<?php echo e(__('admin.Inactive')); ?>" data-onstyle="success" data-offstyle="danger">
                                                        </a>

                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <a href="<?php echo e(route('admin.pricing-plan.edit',$plan->id)); ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i></a>

                                                    <a href="javascript:;" data-toggle="modal" data-target="#deleteModal" class="btn btn-danger btn-sm" onclick="deleteData(<?php echo e($plan->id); ?>)"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script>
        function deleteData(id){
            $("#deleteForm").attr("action",'<?php echo e(url("admin/pricing-plan/")); ?>'+"/"+id)
        }
        function changeProductCategoryStatus(id){
            var isDemo = "<?php echo e(env('APP_MODE')); ?>"
            if(isDemo == 'DEMO'){
                toastr.error('This Is Demo Version. You Can Not Change Anything');
                return;
            }
            $.ajax({
                type:"put",
                data: { _token : '<?php echo e(csrf_token()); ?>' },
                url:"<?php echo e(url('/admin/pricing-plan/status/')); ?>"+"/"+id,
                success:function(response){
                    toastr.success(response)
                },
                error:function(err){


                }
            })
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\axtro\axtro_cc\admin_panel\main_files\resources\views/admin/pricing_plan/index.blade.php ENDPATH**/ ?>