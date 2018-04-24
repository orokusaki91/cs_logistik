<div class="sidenav">
    <button class="dropdown-btn">Pages<i class="fa fa-caret-down"></i></button>
    <div class="dropdown-container">
        @foreach($pages as $page)
            <a href="{{ url('admin/pages/' . $page->slug) }}">{{ $page->name }}</a>
        @endforeach
    </div>
</div>