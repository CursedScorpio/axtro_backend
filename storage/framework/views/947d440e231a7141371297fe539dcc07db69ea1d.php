<?php $__env->startSection('title'); ?>
<title><?php echo e(__('admin.Product Keys')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('admin-content'); ?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?php echo e(__('admin.Product Keys')); ?></h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('admin.Dashboard')); ?></a></div>
              <div class="breadcrumb-item"><?php echo e(__('admin.Product Keys')); ?></div>
            </div>
          </div>

          <div class="section-body">
            <div class="row mt-4">
                <div class="col">
                  <div class="card">
                    <div class="card-body">
                        <!-- Add Key Form -->
                        <div class="mb-4">
                            <form action="<?php echo e(route('admin.keys.store')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label><?php echo e(__('admin.Select Product')); ?></label>
                                            <select name="product_id" class="form-control" id="product_select" required>
                                                <option value=""><?php echo e(__('admin.Select Product')); ?></option>
                                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($product->id); ?>" <?php echo e(request('product_id') == $product->id ? 'selected' : ''); ?>>
                                                        <?php echo e($product->productlangadmin->name); ?>

                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label><?php echo e(__('admin.Select Variant')); ?></label>
                                            <select name="variant_id" class="form-control" id="variant_select">
                                                <option value=""><?php echo e(__('admin.Select Variant')); ?></option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label><?php echo e(__('admin.Key')); ?></label>
                                            <input type="text" name="key" class="form-control" required>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="d-block">&nbsp;</label>
                                            <button type="submit" class="btn btn-primary"><?php echo e(__('admin.Add Key')); ?></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!-- Keys List -->
                        <div class="table-responsive">
                            <table class="table table-striped" id="dataTable">
                                <thead>
                                    <tr>
                                        <th><?php echo e(__('admin.ID')); ?></th>
                                        <th><?php echo e(__('admin.Product')); ?></th>
                                        <th><?php echo e(__('admin.Variant')); ?></th>
                                        <th><?php echo e(__('admin.Key')); ?></th>
                                        <th><?php echo e(__('admin.Status')); ?></th>
                                        <th><?php echo e(__('admin.Action')); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $keys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($key->id); ?></td>
                                        <td><?php echo e($key->product->productlangadmin->name); ?></td>
                                        <td><?php echo e($key->variant ? $key->variant->variant_name : __('admin.No Variant')); ?></td>
                                        <td><?php echo e($key->key); ?></td>
                                        <td>
                                            <?php if($key->is_used): ?>
                                                <span class="badge badge-danger"><?php echo e(__('admin.Used')); ?></span>
                                            <?php else: ?>
                                                <span class="badge badge-success"><?php echo e(__('admin.Available')); ?></span>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <form action="<?php echo e(route('admin.keys.destroy', $key->id)); ?>" method="POST" class="d-inline">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('<?php echo e(__('admin.Are you sure?')); ?>')">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
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

<?php $__env->startPush('scripts'); ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('#product_select').change(function() {
        var productId = $(this).val();
        console.log("Selected Product ID:", productId); // Debugging

        if (productId) {
            $.ajax({
                url: "/admin/keys/get-variants/" + productId,
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    console.log("Received variants:", data); // Debugging

                    var variantSelect = $('#variant_select');
                    variantSelect.empty();
                    variantSelect.append('<option value=""><?php echo e(__("admin.Select Variant")); ?></option>');

                    if (Array.isArray(data) && data.length > 0) {
                        $.each(data, function(index, variant) {
                            console.log("Adding variant:", variant.variant_name); // Debugging
                            variantSelect.append(`<option value="${variant.id}">${variant.variant_name}</option>`);
                        });
                    } else {
                        console.warn("No variants found for this product.");
                        variantSelect.append('<option value=""><?php echo e(__("admin.No Variants Found")); ?></option>');
                    }
                },
                error: function(xhr, status, error) {
                    console.error("AJAX Error:", error);
                    console.error("XHR Response:", xhr.responseText);
                }
            });
        } else {
            $('#variant_select').html('<option value=""><?php echo e(__("admin.Select Variant")); ?></option>');
        }
    });
});
</script>
<?php $__env->stopPush(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/axtro/backend/resources/views/admin/keys/index.blade.php ENDPATH**/ ?>