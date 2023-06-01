@extends('Backend.master')


@section('title','subcategory')


@section('body')
    <div class="row">
        <div class="d-flex justify-content-end my-4">
            <a href="{{ route('subcategory.create') }}" class="btn btn-success">Create Sub Category</a>
        </div>
        <div class="col-8 m-auto">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Category title</th>
                    <th scope="col">SubCategory title</th>
                    <th scope="col">SubCategory Slug</th>
                    <th scope="col">Created</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($subcategories as $subcategory)
                    <tr>
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td><img src="{{ asset($subcategory->subcategory_image)  }}"
                                 class="img-fluid rounded-circle" width="70"alt="" ></td>
                        <td>{{ $subcategory->category->title }}</td>
                        <td>{{ $subcategory->title }}</td>
                        <td>{{ $subcategory->slug }}</td>
                        <td>{{ $subcategory->created_at->format('d M Y') ?? ''}}</td>


                        <td>
                            <div class="d-flex justify-content-center">
                                <a href="{{ route('subcategory.show',['subcategory' => $subcategory->id]) }}" class="btn btn-info">Show</a>
                                <a href="{{ route('subcategory.edit', $subcategory->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('subcategory.destroy', ['subcategory' => $subcategory->id]) }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Del</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection
