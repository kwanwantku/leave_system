@include('include.header')

<div class="sidebar">
    @yield('sidebar')
</div>
<div class="wrapper">
    @yield('content')
</div>

@include('include.footer')
