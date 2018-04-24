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

@section('scripts')
<script src="{{ asset('js/tinymce/tinymce.min.js') }}"></script>
<script>
    $(function(){
        tinymce.init({
            selector: 'textarea',
            language: 'de',
            /* theme of the editor */
            theme: "modern",
            skin: "lightgray",


            /* width and height of the editor */
            width: "100%",
            height: 300,

            /* display statusbar */
            statubar: true,

            /* plugin */
            plugins: [
            "advlist autolink link image lists charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
            "save table contextmenu directionality emoticons template paste textcolor"
            ],

            /* toolbar */
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons",

            /* style */
            style_formats: [
            {title: "Headers", items: [
            {title: "Header 1", format: "h1"},
            {title: "Header 2", format: "h2"},
            {title: "Header 3", format: "h3"},
            {title: "Header 4", format: "h4"},
            {title: "Header 5", format: "h5"},
            {title: "Header 6", format: "h6"}
            ]},
            {title: "Inline", items: [
            {title: "Bold", icon: "bold", format: "bold"},
            {title: "Italic", icon: "italic", format: "italic"},
            {title: "Underline", icon: "underline", format: "underline"},
            {title: "Strikethrough", icon: "strikethrough", format: "strikethrough"},
            {title: "Superscript", icon: "superscript", format: "superscript"},
            {title: "Subscript", icon: "subscript", format: "subscript"},
            {title: "Code", icon: "code", format: "code"}
            ]},
            {title: "Blocks", items: [
            {title: "Paragraph", format: "p"},
            {title: "Blockquote", format: "blockquote"},
            {title: "Div", format: "div"},
            {title: "Pre", format: "pre"}
            ]},
            {title: "Alignment", items: [
            {title: "Left", icon: "alignleft", format: "alignleft"},
            {title: "Center", icon: "aligncenter", format: "aligncenter"},
            {title: "Right", icon: "alignright", format: "alignright"},
            {title: "Justify", icon: "alignjustify", format: "alignjustify"}
            ]}
            ]
        });
    });

</script>﻿
@stop