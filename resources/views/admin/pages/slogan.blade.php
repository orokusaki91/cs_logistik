@extends('layouts.admin')
@section('title', 'Admin Slogan')

@section('content')
<div class="admin_panel_main">
    @include('partials.admin._sidebar')
    <div class="main">
        <form action="{{ url('admin/pages/update') }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
    
            <label>Image</label>
             @if($pageContents[0]['image'])
                <img src="{{ asset('storage/uploads/slogan/' . $pageContents[0]['image']) }}" class="ap_pi">
            @endif
            <input type="file" name="image_1">
            <label>Text</label>
            <textarea name="text_1">{{ $pageContents[0]['text'] }}</textarea>

            <input type="hidden" name="page_id" value="{{ $page->id }}">
            <input type="submit" value="Save">
        </form>
    </div>
</div>
@stop