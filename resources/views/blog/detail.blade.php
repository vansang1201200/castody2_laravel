@extends('admin.layout')

@section('title', 'Chi tiết tin tức')

@section('content')
    <!-- Begin Page Content -->
    <div class="container">
        <h2 class="text-center">{{ $show_blog->name_blog }}</h2>
        <p>{!! $show_blog->description_blog !!}</p>
    </div>
@endsection
