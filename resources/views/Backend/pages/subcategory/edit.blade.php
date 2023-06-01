@extends('Backend.master')

@section('title','subcategory edit')

@section('body')

    <div class="row">
        <div class="d-flex justify-content-start my-4">
            <a href="{{ route('subcategory.index') }}" class="btn btn-info">Sub Categories</a>
        </div>
        <div class="col-8 m-auto my-3">
            <div class="card p-4">
                <form action="{{ route('subcategory.update',$subcategory->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <select class="form-select @error('category_id') is-invalid
                    @enderror" name="category_id">
                            <option>Open this select menu</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" @if ($category->id == $subcategory->category_id) selected @endif>
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

                    <div class="mb-3">
                        <label for="title" class="form-label">SubCategory title</label>
                        <input type="text" name="title"
                               value="{{ $subcategory->title }}" class="form-control @error('title')
                        is-invalid
                    @enderror" id="">
                        @error('title')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="subcategory_image" class="form-label">SubCategory Image</label>
                        <input type="file" class="form-control dropify" name="subcategory_image" data-default-file="{{ asset('Uploads/Category') }}">
                        <img src="{{ asset($subcategory->subcategory_image)  }}"
                             class="img-fluid rounded-circle" width="70"alt="" >
                        @error('subcategory_image')
                        <span class="invalid-feedback" role="alert">
                                    <strong>
                                        {{ $message }}
                                    </strong>
                                  </span>
                        @enderror
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" name="is_active" @if ($subcategory->is_active)
                            checked
                               @endif type="checkbox" id="isActive">
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

