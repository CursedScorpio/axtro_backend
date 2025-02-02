@extends('admin.master_layout')
@section('title')
<title>{{__('admin.Product Keys')}}</title>
@endsection
@section('admin-content')
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>{{__('admin.Product Keys')}}</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">{{__('admin.Dashboard')}}</a></div>
              <div class="breadcrumb-item">{{__('admin.Product Keys')}}</div>
            </div>
          </div>

          <div class="section-body">
            <div class="row mt-4">
                <div class="col">
                  <div class="card">
                    <div class="card-body">
                        <!-- Add Key Form -->
                        <div class="mb-4">
                            <form action="{{ route('admin.keys.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>{{__('admin.Select Product')}}</label>
                                            <select name="product_id" class="form-control" id="product_select" required>
                                                <option value="">{{__('admin.Select Product')}}</option>
                                                @foreach($products as $product)
                                                    <option value="{{ $product->id }}" {{ request('product_id') == $product->id ? 'selected' : '' }}>
                                                        {{ $product->productlangadmin->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>{{__('admin.Select Variant')}}</label>
                                            <select name="variant_id" class="form-control" id="variant_select">
                                                <option value="">{{ __('admin.Select Variant') }}</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>{{__('admin.Key')}}</label>
                                            <input type="text" name="key" class="form-control" required>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="d-block">&nbsp;</label>
                                            <button type="submit" class="btn btn-primary">{{__('admin.Add Key')}}</button>
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
                                        <th>{{__('admin.ID')}}</th>
                                        <th>{{__('admin.Product')}}</th>
                                        <th>{{__('admin.Variant')}}</th>
                                        <th>{{__('admin.Key')}}</th>
                                        <th>{{__('admin.Status')}}</th>
                                        <th>{{__('admin.Action')}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($keys as $key)
                                    <tr>
                                        <td>{{ $key->id }}</td>
                                        <td>{{ $key->product->productlangadmin->name }}</td>
                                        <td>{{ $key->variant ? $key->variant->variant_name : __('admin.No Variant') }}</td>
                                        <td>{{ $key->key }}</td>
                                        <td>
                                            @if($key->is_used)
                                                <span class="badge badge-danger">{{__('admin.Used')}}</span>
                                            @else
                                                <span class="badge badge-success">{{__('admin.Available')}}</span>
                                            @endif
                                        </td>
                                        <td>
                                            <form action="{{ route('admin.keys.destroy', $key->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('{{__('admin.Are you sure?')}}')">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
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

@push('scripts')
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
                    variantSelect.append('<option value="">{{ __("admin.Select Variant") }}</option>');

                    if (Array.isArray(data) && data.length > 0) {
                        $.each(data, function(index, variant) {
                            console.log("Adding variant:", variant.variant_name); // Debugging
                            variantSelect.append(`<option value="${variant.id}">${variant.variant_name}</option>`);
                        });
                    } else {
                        console.warn("No variants found for this product.");
                        variantSelect.append('<option value="">{{ __("admin.No Variants Found") }}</option>');
                    }
                },
                error: function(xhr, status, error) {
                    console.error("AJAX Error:", error);
                    console.error("XHR Response:", xhr.responseText);
                }
            });
        } else {
            $('#variant_select').html('<option value="">{{ __("admin.Select Variant") }}</option>');
        }
    });
});
</script>
@endpush


@endsection
