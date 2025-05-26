@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="col-md-10 mx-auto">
        <div class="card shadow-sm border-0">
            <div class="card-header d-flex justify-content-between align-items-center text-white" style="background-color: #6366f1;">
                <h5 class="mb-0">Product Information</h5>
                <a href="{{ route('products.index') }}" class="btn btn-light btn-sm">
                    &larr; Back
                </a>
            </div>
            <div class="card-body">
                <div class="row">
                    {{-- Left: Product Details --}}
                    <div class="col-md-8">
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label fw-bold text-md-end">Code:</label>
                            <div class="col-md-8 pt-2">{{ $product->code }}</div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label fw-bold text-md-end">Name:</label>
                            <div class="col-md-8 pt-2">{{ $product->name }}</div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label fw-bold text-md-end">Quantity:</label>
                            <div class="col-md-8 pt-2">{{ $product->quantity }}</div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label fw-bold text-md-end">Price:</label>
                            <div class="col-md-8 pt-2">₱{{ number_format($product->price, 2) }}</div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label fw-bold text-md-end">Description:</label>
                            <div class="col-md-8 pt-2">{{ $product->description }}</div>
                        </div>
                    </div>

                    {{-- Right: Product Image --}}
                    <div class="col-md-4 text-center">
                        @if ($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="img-fluid rounded shadow-sm" style="max-height: 400px;">
                        @else
                            <img src="{{ asset('images/no-image.png') }}" alt="No Image" class="img-fluid rounded shadow-sm" style="max-height: 400px;">
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
