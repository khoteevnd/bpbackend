<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

@include('sections.head')
<body>

@include('sections.preloader')

@include('sections.nav')
@include('sections.header')
@include('sections.history')
@include('sections.btn-to-top')
@yield('content')

@include('sections.scripts')
</body>
</html>