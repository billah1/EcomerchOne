@extends('Backend.master')

@section('title','category edit')

@section('body')
    <div class="row">
        <h1>Category Edit Form</h1>
        <div class="col-12">
            <div class="d-flex justify-content-start">
                <a href="{{ route('category.index') }}"
                   class="btn btn-primary" >
                    <i class="fas fa-backward"></i>
                </a>
            </div>
        </div>
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('category.update',$category->slug) }}"
                          method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="Category-title" class="form-label">Category Title</label>
                            <input type="text" name="title" value="{{ $category->title }}" class="form-control
                         @error('title')
                          is-invalid
                         @enderror" placeholder="enter Category Ttile" id="">
                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>
                                    {{ $message }}
                                </strong>
                              </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="category_image" class="form-label">Category Image</label>
                            <input type="file" class="form-control dropify" name="category_image" data-default-file="{{ asset('Uploads/Category') }}">
                            <img src="{{ asset($category->category_image)  }}"
                                 class="img-fluid rounded-circle" width="70"alt="" >
                            @error('category_image')
                            <span class="invalid-feedback" role="alert">
                                    <strong>
                                        {{ $message }}
                                    </strong>
                                  </span>
                            @enderror
                        </div>
                        <div class="mb-3 form-check form-switch">
                            <input class="form-check-input" name="is_active" type="checkbox"
                                   role="switch" id="activeStatus" @if ($category->is_active)
                                       checked
                                @endif>
                            <label class="form-check-label" for="activeStatus">Active or Inactive</label>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}
                                    </strong>
                              </span>
                            @enderror
                        </div>
                        <div class="mt-5">
                            <button type="submit" class="btn btn-warning">
                                Update
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
