@extends('Backend.master')

@section('title','product edit')

@section('body')
    <div class="row">
        <h1>Product Edit Form</h1>
        <div class="col-12">
            <div class="d-flex justify-content-start">
                <a href="{{ route('products.index') }}" class="btn btn-primary">
                    <i class="fas fa-backward"></i>
                    Back to Products
                </a>
            </div>
        </div>

        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('products.update', $product->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <!-- Category Section -->
                            <div class="col-12 mb-3">
                                <select class="form-select @error('category_id') is-invalid
                    @enderror" name="category_id">
                                    <option>Open this select menu</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                                @if ($category->id == $product->category_id) selected @endif>
                                            {{ $category->id }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                                @enderror
                            </div>

                            <!-- Category Section -->
                            <div class="col-12 mb-3">
                                <label for="subcategory-name" class="form-label">Select SubCategory</label>
                                <select name="subcategory_id" class="form-select">
                                    @foreach ($subcategories as $subcategory)
                                        <option value="{{ $subcategory->id }}"
                                                @if ($product->subcategory_id == $subcategory->id )
                                                    selected
                                            @endif
                                        >{{ $subcategory->title }}</option>
                                    @endforeach
                                </select>
                                @error('subcategory_id')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12 mb-3">
                                <label for="childcategory-name" class="form-label">Select ChildCategory</label>
                                <select name="childcategory_id" class="form-select">
                                    @foreach ($childcategories as $childcategory)
                                        <option value="{{ $childcategory->id }}"
                                                @if ($product->childcategory_id == $childcategory->id )
                                                    selected
                                            @endif
                                        >{{ $childcategory->title }}</option>
                                    @endforeach
                                </select>
                                @error('childcategory_id')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Product Name Section -->
                            <div class="col-12 mb-3">
                                <label for="product-title" class="form-label">Product Title</label>
                                <input type="text" name="title" value="{{ $product->title }}"
                                       class="form-control @error('title') is-invalid @enderror"
                                       placeholder="enter product title">
                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Product Name Section -->


                            <!-- Product Price and Code Section -->
                            <div class="col-6 mb-3">
                                <label for="product-price" class="form-label">Product Price</label>
                                <input type="number" name="product_price" min="0" value="{{ $product->product_price }}"
                                       class="form-control @error('product_price') is-invalid @enderror" id="product_price">
                                @error('product_price')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-6 mb-3">
                                <label for="product_code" class="form-label">Product Code</label>
                                <input type="text" name="product_code" value="{{ $product->product_code }}"
                                       class="form-control @error('product_code') is-invalid @enderror"
                                       placeholder="enter a unique product code">
                                @error('product_code')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Product Price and Code Section -->

                            <!-- Product Stock and Alert Quantity Section -->
                            <div class="col-6 mb-3">
                                <label for="product-stock" class="form-label">Initial Stock</label>
                                <input type="number" name="product_stock" min="0" value="{{ $product->product_stock }}"
                                       class="form-control @error('product_stock') is-invalid @enderror" id="product_stock">
                                @error('product_stock')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-6 mb-3">
                                <label for="alert_quantity" class="form-label">Alert Quantity</label>
                                <input type="number" name="alert_quantity" min="1"
                                       value="{{ $product->alert_quantity }}"
                                       class="form-control @error('alert_quantity') is-invalid @enderror" id="alert_quantity">
                                @error('alert_quantity')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Product Stock and Alert Quantity Section -->

                            <!-- Product Short Description -->
                            <div class="col-12 mb-3">
                                <label for="short_description" class="form-label">Short Description</label>
                                <textarea name="short_description" class="form-control @error('short_description') is-invalid @enderror" id="short_description" id="" cols="30" rows="5">{{ $product->short_description }}</textarea>
                                @error('short_description')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Product Short Description -->
                            <!-- Product long Description -->
                            <div class="col-12 mb-3">
                                <label for="long_description" class="form-label">Long Description</label>
                                <textarea name="long_description" class="form-control @error('long_description') is-invalid @enderror" id="long_description" id="" cols="30" rows="5">{{ $product->long_description }}</textarea>
                                @error('long_description')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Product long Description -->
                            <!-- Product Additional Info Description -->
                            <div class="col-12 mb-3">
                                <label for="additional_info" class="form-label">Additional Info</label>
                                <textarea name="additional_info" class="form-control @error('additional_info') is-invalid @enderror" id="additional_info" id="" cols="30" rows="5">{{  $product->additional_info }}</textarea>
                                @error('additional_info')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Product Additional info Description -->



                            <!-- Product Image Section -->
                            <div class="col-12 mb-3">
                                <label for="product-image" class="form-label">Product Image</label>
                                <input type="file" class="form-control dropify" name="product_image" data-default-file="{{ asset('uploads/product_photos') }}/{{ $product->product_image }}">
                                @error('product_image')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Product Image Section -->

                            <!-- Product Multiple Image Section -->
{{--                            <div class="col-12 mb-3">--}}
{{--                                <label for="product-image" class="form-label">Product Multiple Image</label>--}}
{{--                                <input type="file" class="form-control" multiple name="product_multiple_image[]">--}}
{{--                                @error('product_multiple_image')--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
                            <!-- Product Multiple Image Section -->

                            <div class="col-6 mb-3 form-check form-switch">
                                <input class="form-check-input" name="is_active" type="checkbox" role="switch"
                                       id="activeStatus"
                                       @if ($product->is_active)
                                           checked
                                    @endif>
                                <label class="form-check-label" for="activeStatus">Active or Inactive</label>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mt-5">
                                <button type="submit" class="btn btn-warning">Update</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
