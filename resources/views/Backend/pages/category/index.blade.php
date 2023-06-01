@extends('Backend.master')

@section('title','category index')

@section('body')
    <div class="row">
        <h1>Category List Table</h1>
        <div class="col-12">
            <div class="d-flex justify-content-end">
                <a href="{{ route('category.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus-circle"></i>
                    Add New Category
                </a>
            </div>
        </div>
        <div class="col-12">
            <div class="table-responsive my-2">
                <table id="dataTable" class="table table-boardered table-striped" style="width:100%">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Last Modified</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">Category Slug</th>
                        <th scope="col">Options</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($categories as $category )
                        <tr>
                            <td scope="row">{{ $loop->iteration }}</td>
                            <td><img src="{{ asset($category->category_image)  }}"
                                     class="img-fluid rounded-circle" width="70"alt="" ></td>
                            <td>{{ $category->created_at->format('d M Y') ?? ''}}</td>
                            <td>{{ $category->title }}</td>
                            <td>{{ $category->slug }}</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Setting</button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{ route('category.edit',$category->slug) }}"><i class="fas fa-edit"></i>Edit</a></li>
                                        <li>
                                            <form action="{{ route('category.destroy',$category->slug) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="dropdown-item show_confirm" type="submit" ><i class="fas fa-trash"></i>Delete</button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
