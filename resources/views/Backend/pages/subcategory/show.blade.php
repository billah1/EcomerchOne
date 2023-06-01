@extends('Backend.master')

@section('title','subcategory show')

@section('body')
    <div class="row">
        <div class="col-8 m-auto">
            <h1>{{ $subcategory->title ?? ''}}</h1>
            <h3>{{ $subcategory->category->title }}</h3>
            <p>{{ $subcategory->created_at->format('d-m-Y H:i A') }}</p>
        </div>
    </div>

@endsection
