<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

{{-- Include Header --}}
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
