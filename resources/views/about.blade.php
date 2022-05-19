@extends('layouts.main')
@section('container')
{{-- <h1> Halaman About</h1>
<h3>{{ $name }}</h3>
<p>{{ $email }}</p>
<img src="img/{{ $image }}" alt="{{ $name }}" width="100px"> --}}
<header style="text-align: center;">
    <img src="img/{{ $image }}" width="200" height="200" style="border-radius: 50%;"/>
    <h1>{{ $name }}</h1>
    <p>{{ $email }}</p>
</header>

<hr />

<article style="text-align: center;">
    <p>
        <marquee behavior="scroll" width="300" height="">BELUM TAU MAU DI ISI APAA!!!!!</marquee><br>
    </p>
</article>

<hr>
<footer style="text-align: center;" style="position: absolute">
    <p>Copyright &copy; {{ date('Y'); }} {{ $name }}</p>
</footer>
@endsection
