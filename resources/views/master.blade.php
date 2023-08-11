<!DOCTYPE html>
<html lang="en">

@include('partials.head')

<body>
    <div class="adminx-container">

    @include('partials.navbar')
    @include('partials.sidebar')

    @yield('content')

    @include('partials.script')
    @yield('scripts')

    </div>

</body>

</html>