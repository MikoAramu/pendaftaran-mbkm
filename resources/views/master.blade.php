<!DOCTYPE html>
<html lang="en">
@php 
    $authenticateUser = App\User::where('id', Auth::id())->first();
@endphp
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