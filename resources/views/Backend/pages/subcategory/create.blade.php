@extends('Backend.master')

@section('title','subcategory Create')

@section('body')
    <div class="row">
        <h1>SubCategory Create Form</h1>
        <div class="col-12">
            <div class="d-flex justify-content-start">
                <a href="{{ route('subcategory.index') }}"
                   class="btn btn-primary" >
                    <i class="fas fa-backward"></i>
                    Back to SubCategories
                </a>
            </div>
        </div>
    <div class="col-8 m-auto my-3">
        <div class="card p-4">
            <form action="{{ route('subcategory.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <select class="form-select @error('category_id') is-invalid
                    @enderror" name="category_id">
                        <option selected>Open this select menu</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="subcategory-title" class="form-label">SubCategory title</label>
                    <input type="text" name="subcategory_title" class="form-control @error('subcategory_title')
                        is-invalid
                    @enderror" id="">
                    @error('subcategory_title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="subcategory_image" class="form-label">SubCategory Image</label>
                    <input type="file" name="subcategory_image" class="form-control dropify @error('subcategory_image')
                             is-invalid
                            @enderror"  id="subcategory_image" placeholder="subcategory image">
                    @error('subcategory_image')
                    <span class="invalid-feedback" role="alert">
                                    <strong>
                                        {{ $message }}
                                    </strong>
                                  </span>
                    @enderror
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" name="is_active" type="checkbox" id="isActive">
                    <label class="form-check-label" for="isActive">
                        Active/InActive
                    </label>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-danger">Submit</button>
                </div>
            </form>
        </div>
    </div>
    </div>

@endsection
