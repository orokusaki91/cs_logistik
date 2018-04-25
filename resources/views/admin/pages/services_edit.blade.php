@extends('layouts.admin')
@section('title', 'Admin Service Edit')

@section('content')
<div class="admin_panel_main">
    @include('partials.admin._sidebar')
    <div class="main">
        <form action="{{ url('admin/pages/services/' . $serviceContent->id . '/update') }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
    
            <label>Image</label>
            <input type="file" name="image_1">
            <label>Title</label>
            <input type="text" name="title_1" value="{{ $serviceContent->title }}">
            <label>Text</label>
            <textarea name="text_1">{{ $serviceContent->text }}</textarea>

            <input type="hidden" name="page_id" value="{{ $page->id }}">
            <input type="submit" value="Save">
        </form>
    </div>
</div>
@stop