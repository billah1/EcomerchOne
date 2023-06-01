@extends('Backend.master')

@section('title','product index')

@section('body')
    <div class="row">
        <h1>Product List Table</h1>
        <div class="col-12">
            <div class="d-flex justify-content-end">
                <a href="{{ route('products.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus-circle"></i>
                    Add New Product
                </a>
            </div>
        </div>
        <div class="col-12">
            <div class="table-responsive my-2">
                <table class="table table-bordered table-striped" id="dataTable">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Last Modified</th>
                        <th scope="col">Category title</th>
                        <th scope="col">subCategory title</th>
                        <th scope="col">childCategory Name</th>
                        <th scope="col">title</th>
                        <th scope="col">Price</th>
                        <th scope="col">Stock/Alert</th>
                        <th scope="col">Rating</th>
                        <th scope="col">Options</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td scope="row">{{ $loop->iteration }}</td>
                            <td><img src="{{ asset($product->product_image)  }}"
                                     class="img-fluid rounded-circle" width="70"alt="" ></td>
                            <td>{{ $product->category->title }}</td>
                            <td>{{ $product->subcategory->title }}</td>
                            <td>{{ $product->childcategory->title }}</td>
                            <td>{{ $product->title }}</td>
                            <td>{{ $product->product_price }}</td>
                            <td>{{ $product->updated_at->format('d M Y') }}</td>
                            <td>
                                <span class="badge bg-success">{{ $product->product_stock }}</span>/
                                <span class="badge bg-danger">{{ $product->alert_quantity }}</span></td>
                            <td>{{ $product->product_rating }}</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        setting
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{ route('products.edit', $product->id) }}">
                                                <i class="fas fa-edit"></i> Edit</a></li>
                                        <li>
                                            <form action="{{ route('products.destroy', $product->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="dropdown-item show_confirm" type="submit"><i class="fas fa-trash"></i> Delete</button>
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
