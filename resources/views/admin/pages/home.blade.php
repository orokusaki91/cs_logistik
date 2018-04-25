@extends('layouts.admin')
@section('title', 'Admin Home')

@section('content')
<div class="admin_panel_main">
    @include('partials.admin._sidebar')
    <div class="main">
        <form action="{{ url('admin/pages/update') }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf

            @php
                $homeHeader = $pageContents[0];
                $homeFooter1 = $pageContents[1];
                $homeFooter2 = $pageContents[2];
                $homeFooter3 = $pageContents[3];
            @endphp

            <h3>Header</h3>
            <label>Image</label>
            <input type="file" name="image_1">
            <textarea name="text_1">{{ $homeHeader['text'] }}</textarea>

            <h3>Footer 1</h3>
            <label>Title</label>
            <input type="text" name="title_2" value="{{ $homeFooter1['title'] }}">
            <label>Text</label>
            <textarea name="text_2">{{ $homeFooter1['text'] }}</textarea>

            <h3>Footer 2</h3>
            <label>Title</label>
            <input type="text" name="title_3" value="{{ $homeFooter2['title'] }}">
            <label>Text</label>
            <textarea name="text_3">{{ $homeFooter2['text'] }}</textarea>

            <h3>Footer 3</h3>
            <label>Title</label>
            <input type="text" name="title_4" value="{{ $homeFooter3['title'] }}">
            <label>Text</label>
            <textarea name="text_4">{{ $homeFooter3['text'] }}</textarea>

            <input type="hidden" name="page_id" value="{{ $page->id }}">
            <input type="submit" value="Save">
        </form>
    </div>
</div>
@stop