@extends('layouts.admin')
@section('title', 'Admin Home')

@section('content')
<div class="admin_panel_main">
    @include('partials.admin._sidebar')
    <div class="main">
        <form action="{{ url('admin/pages/update') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PUT') }}

            @php
                $homeHeader = $pageContents[0];
                $homeFooter1 = $pageContents[1];
                $homeFooter2 = $pageContents[2];
                $homeFooter3 = $pageContents[3];
            @endphp

            <h3>Titelseite</h3>
            <label>Bild</label>
            @if($homeHeader['image'])
                <img src="{{ asset('storage/uploads/home/' . $homeHeader['image']) }}" class="ap_pi">
            @endif
            <input type="file" id="image_1" name="image_1" class="custom-input-file"/>
            <label for="image_1"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Datei auswählen&hellip;</span></label>
           
            <textarea name="text_1">{{ $homeHeader['text'] }}</textarea>

            <h3>Untertitel 1</h3>
            <label>Überschrift</label>
            <input type="text" name="title_2" value="{{ $homeFooter1['title'] }}">
            <label>Text</label>
            <textarea name="text_2">{{ $homeFooter1['text'] }}</textarea>

            <h3>Untertitel 2</h3>
            <label>Überschrift</label>
            <input type="text" name="title_3" value="{{ $homeFooter2['title'] }}">
            <label>Text</label>
            <textarea name="text_3">{{ $homeFooter2['text'] }}</textarea>

            <h3>Untertitel 3</h3>
            <label>Überschrift</label>
            <input type="text" name="title_4" value="{{ $homeFooter3['title'] }}">
            <label>Text</label>
            <textarea name="text_4">{{ $homeFooter3['text'] }}</textarea>

            <input type="hidden" name="page_id" value="{{ $page->id }}">
            <input type="submit" value="Speichern">
        </form>
    </div>
</div>
@stop