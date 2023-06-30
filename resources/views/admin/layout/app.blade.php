@include('admin.layout.top')
@include('admin.layout.menu')

<div id="layoutSidenav_content">
<main>
<div>
    @yield('konten')
</main>
</div>
</div>
@include('admin.layout.bottom')