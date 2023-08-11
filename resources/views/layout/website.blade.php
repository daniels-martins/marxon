@include('partials.head')

@include('partials.main_header')

@include('partials.page_banner')

<main>
    @yield('content')
</main>

@include('partials.footer')

@include('partials.bottom_js')
