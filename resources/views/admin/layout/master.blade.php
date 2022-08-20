<!doctype html>
<html class="no-js" lang="en">

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<!--<![endif]-->

{{-- Font awesome cdn --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

{{-- Css Manual --}}
<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

@yield('title')

@include('admin.layout.top')


<body>
    {{-- Include Nav Left --}}
    @include('admin.layout.nav-left')

    <!-- Right Panel as Content -->

    <div id="right-panel" class="right-panel">

        {{-- Include Header --}}
        @include('admin.layout.header')
        <!-- Header-->

        {{-- Include Content --}}
        @yield('content')
    </div><!-- /#right-panel -->

    <!-- Right Panel as Content -->

    {{-- Include Bottom or Requirements --}}
    @include('admin.layout.bottom')
</body>

</html>
