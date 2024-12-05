<!DOCTYPE html>
<html lang="en">
<link rel="icon" href="{{ asset('assets/images/14-removebg-logo.png') }}" type="image/x-icon">

@include('layout.header')

<body>

@include('layout.nav')

<div class="main-wrapper">
    <div class="main-content">
        @yield('content')
    </div>
</div>

@include('layout.footer')

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-vtXRMe3mGCbOeY7l30aIg8H9p3GdeSe4IFlP6G8JMa7o7lXvnz3GFKzPxzJdPfGK" crossorigin="anonymous"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>
<script>


    $(document).ready(function() {
        // console.log("Hello, She Drives!");
        $(".dropbtn").hover(function(){
            console.log('dropbtn hover');
        });
    });
</script>

@yield('script')
</body>
</html>
