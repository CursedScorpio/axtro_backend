@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Add Product Keys</h2>
    
    <form action="{{ route('admin.keys.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Select Product</label>
            <select name="product_id" class="form-control">
                @foreach($products as $product)
                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                @endforeach
            </select>
        </div>
        
        <div class="form-group">
            <label>Keys (One per line)</label>
            <textarea name="keys" class="form-control" rows="10"></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Add Keys</button>
    </form>
</div>
@endsection
