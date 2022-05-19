@extends('layouts.app')

@section('name', 'Tiêu đề trang child')

@section('content')
    <p>Nội dung trang con</p>
    @isset($post_title)
        <p>Tieu de: {{$post_title}}</p>
    @endisset

    @empty($users)
        <p>Khong co user nao</p>
    @endempty

@endsection

@section('sidebar')
@parent
<p>sidebar trang con</p>
@endsection