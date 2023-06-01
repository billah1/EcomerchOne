@extends('Backend.master')

@section('title','childcategory edit')

@section('body')

    <div class="row">
        <div class="d-flex justify-content-start my-4">
            <a href="{{ route('childcategory.index') }}" class="btn btn-info">Child Categories</a>
        </div>
        <div class="col-8 m-auto my-3">
            <div class="card p-4">
                <form action="{{ route('childcategory.update',$childcategory->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <select class="form-select @error('category_id') is-invalid
                    @enderror" name="category_id">
                            <option>Open this select menu</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" @if ($category->id == $childcategory->category_title) selected @endif>
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
                        <select class="form-select @error('subcategory_id') is-invalid
                    @enderror" name="subcategory_id">
                            <option>Open this select menu</option>
                            @foreach ($subcategories as $subcategory)
                                <option value="{{ $subcategory->id }}" @if ($subcategory->id == $childcategory->subcategory_title) selected @endif>
                                    {{ $subcategory->id }}
                                </option>
                            @endforeach
                        </select>
                        @error('subcategory_id')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="title" class="form-label">ChildCategory title</label>
                        <input type="text" name="title"
                               value="{{ $childcategory->title }}" class="form-control @error('title')
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
                        <input type="file" class="form-control dropify" name="childcategory_image" data-default-file="{{ asset('Uploads/childcategory') }}">
                        <img src="{{ asset($childcategory->childcategory_image)  }}"
                             class="img-fluid rounded-circle" width="70"alt="" >
                        @error('childcategory_image')
                        <span class="invalid-feedback" role="alert">
                                    <strong>
                                        {{ $message }}
                                    </strong>
                                  </span>
                        @enderror
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" name="is_active" @if ($childcategory->is_active)
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

