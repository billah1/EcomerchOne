@extends('Backend.master')


@section('title','childcategory')


@section('body')
    <div class="row">
        <div class="d-flex justify-content-end my-4">
            <a href="{{ route('childcategory.create') }}" class="btn btn-success">Create child Category</a>
        </div>
        <div class="col-8 m-auto">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Category title</th>
                    <th scope="col">SubCategory title</th>
                    <th scope="col">childCategory title</th>
                    <th scope="col">childCategory Slug</th>
                    <th scope="col">Created</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($childcategories as $childcategory)
                    <tr>
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td><img src="{{ asset($childcategory->childcategory_image)  }}"
                                 class="img-fluid rounded-circle" width="70"alt="" ></td>
                        <td>{{ $childcategory->category->title }}</td>
                        <td>{{ $childcategory->subcategory->title }}</td>
                        <td>{{ $childcategory->title }}</td>
                        <td>{{ $childcategory->slug }}</td>
                        <td>{{ $childcategory->created_at->format('d M Y') ?? ''}}</td>


                        <td>
                            <div class="d-flex justify-content-center">
                                <a href="{{ route('childcategory.show',['childcategory' => $childcategory->id]) }}" class="btn btn-info">Show</a>
                                <a href="{{ route('childcategory.edit', $childcategory->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('childcategory.destroy', ['childcategory' => $childcategory->id]) }}" method="post">
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
