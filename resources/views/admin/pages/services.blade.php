@extends('layouts.admin')
@section('title', 'Admin Services')

@section('content')
<div class="admin_panel_main">
    @include('partials.admin._sidebar')
    <div class="main">
        <a href="{{ url('admin/pages/services/create') }}">Erstellen</a>
        <table>
            <thead>
                <tr>
                    <th>Service Image</th>
                    <th>Service Name</th>
                    <th>Manage Service</th>
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
                            <td><a href="{{ url('admin/pages/services/' . $pageContents[$key]['id'] . '/edit') }}">Bearbeiten</a></td>
                        </tr>
                    @endforeach
                @else
                    <h2>You don't have any services. Click <a href="{{ url('admin/pages/services/create') }}">HERE</a> to add one.</h2>
                @endif
            </tbody>
        </table>
    </div>
</div>
@stop

@section('scripts')
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
@stop