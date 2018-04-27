@extends('layouts.admin')
@section('title', 'Admin Seite')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.19.0/sweetalert2.min.css">
@stop

@section('content')
<div class="admin_panel_main">
    @include('partials.admin._sidebar')
    <div class="main">
        <a href="{{ url('admin/pages/services/create') }}">Neue Dienstleistung hinzufügen</a>
        <table>
            <thead>
                <tr>
                    <th>Bild Dienstleistung</th>
                    <th>Dienstleistung</th>
                    <th>verwalten</th>
                </tr>
            </thead>
            <tbody>
                @php $services = $pageContents; @endphp
                @if(!empty($services))
                    @foreach($services as $key => $service)
                        <tr>
                            <td>
                                <div class="image-tooltip">
                                    <img src='{{ asset('storage/uploads/services/' . $service['image']) }}' height="50" />
                                    <span>
                                        <img src='{{ asset('storage/uploads/services/' . $service['image']) }}' height="150" />
                                    </span>
                                </div>
                                
                            </td>
                            <td>{{ $service['title'] }}</td>
                            <td>
                                <a href="{{ url('admin/pages/services/' . $pageContents[$key]['id'] . '/edit') }}">Bearbeiten</a>
                                <form action="{{ url('admin/pages/services/' . $pageContents[$key]['id'] . '/delete') }}" method="post">
                                    @csrf
                                    <button type="submit" onclick="return confirm('Sind Sie sicher?')">Löschen</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <h2>Sie haben momentan keine Dienstleistungen vorhanden.</h2>
                @endif
            </tbody>
        </table>
    </div>
</div>
@stop

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.19.0/sweetalert2.all.min.js"></script>
    <script>
        var tooltips = document.querySelectorAll('.image-tooltip span');
        window.onmousemove = function (e) {
            var x = (e.clientX + 20) + 'px',
            y = (e.clientY + 20) + 'px';
            for (var i = 0; i < tooltips.length; i++) {
                tooltips[i].style.top = y;
                tooltips[i].style.left = x;
            }
        };
    </script>
    @if(Session::has('error'))
        <script>
            swal(
            'Fehler!',
            '{{ Session::get('error') }}',
            'error'
            );
        </script>
    @endif
@stop