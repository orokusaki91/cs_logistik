@extends('layouts.admin')
@section('title', 'Admin Service')

@section('content')
<div class="admin_panel_main">
    @include('partials.admin._sidebar')
    <div class="main">
        <form action="{{ url('admin/pages/services/store') }}" method="post" enctype="multipart/form-data">
            @csrf
    
            <label>Image</label>
            <input type="file" name="image_1">
            <label>Title</label>
            <input type="text" name="title_1" value="{{ old('title_1') }}">
            <label>Text</label>
            <textarea name="text_1">{{ old('text_1') }}</textarea>

            <input type="submit" value="Save">
        </form>
    </div>
</div>
@stop