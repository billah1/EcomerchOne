@extends('Backend.master')

@section('title','childcategory show')

@section('body')
    <div class="row">
        <div class="col-8 m-auto">
            <h1>{{ $childcategory->title ?? ''}}</h1>
            <h3>{{ $childcategory->category->title }}</h3>
            <h3>{{ $childcategory->subcategory->title }}</h3>
            <p>{{ $childcategory->created_at->format('d-m-Y H:i A') }}</p>
        </div>
    </div>

@endsection
