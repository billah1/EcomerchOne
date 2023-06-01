@extends('Backend.master')

@section('title','childcategory Create')

@section('body')
    <div class="row">
        <h1>ChildCategory Create Form</h1>
        <div class="col-12">
            <div class="d-flex justify-content-start">
                <a href="{{ route('childcategory.index') }}"
                   class="btn btn-primary" >
                    <i class="fas fa-backward"></i>
                    Back to ChildCategories
                </a>
            </div>
        </div>
        <div class="col-8 m-auto my-3">
            <div class="card p-4">
                <form action="{{ route('childcategory.store') }}" method="POST" enctype="multipart/form-data">
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
                        <select class="form-select @error('subcategory_id') is-invalid
                    @enderror" name="subcategory_id">
                            <option selected>Open this select menu</option>
                            @foreach ($subcategories as $subcategory)
                                <option value="{{ $subcategory->id }}">{{ $subcategory->title }}</option>
                            @endforeach
                        </select>
                        @error('$subcategory_id')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="title" class="form-label">Childcategory title</label>
                        <input type="text" name="title" class="form-control @error('title')
                        is-invalid
                    @enderror" id="">
                        @error('title')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="childcategory_image" class="form-label">ChildCategory Image</label>
                        <input type="file" name="childcategory_image" class="form-control dropify @error('childcategory_image')
                             is-invalid
                            @enderror"  id="childcategory_image" placeholder="childcategory image">
                        @error('childcategory_image')
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
