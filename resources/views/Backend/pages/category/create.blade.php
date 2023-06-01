@extends('Backend.master')

@section('title','category create')

@section('body')
    <div class="row">
        <h1>Category Create Form</h1>
        <div class="col-12">
            <div class="d-flex justify-content-start">
                <a href="{{ route('category.index') }}"
                   class="btn btn-primary" >
                    <i class="fas fa-backward"></i>
                    Back to Categories
                </a>
            </div>
        </div>
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('category.store') }}"
                          method="POST"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="Category-title" class="form-label">Category Title</label>
                            <input type="text" name="title" class="form-control
                         @error('title')
                          is-invalid
                         @enderror" placeholder="enter Category Ttile" id="Category-title">
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
                            <input type="file" name="category_image" class="form-control dropify @error('category_image')
                             is-invalid
                            @enderror"  id="category_image" placeholder="category image">
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
                                   role="switch" id="activeStatus" checked>
                            <label class="form-check-label" for="activeStatus">Active or Inactive</label>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}
                                    </strong>
                              </span>
                            @enderror
                        </div>
                        <div class="mt-5">
                            <button type="submit" class="btn btn-success">
                                Store
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
