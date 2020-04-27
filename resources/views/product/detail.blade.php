@extends('admin.layout')
@section('title', 'Danh sách sản phẩm')
@section('content')
    <!-- Begin Page Content -->
    <div class="container">
        <h2 class="text-center">{{ $show_product->name }}</h2>
        <p>{!! $show_product->describe_product !!}</p>
    </div>
@endsection
