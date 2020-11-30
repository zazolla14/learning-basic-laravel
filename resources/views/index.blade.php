@extends('layouts/main')

@section('title','AZA | HOME')

@section('container')
<main>
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-3">Hello, {{$nama}}!</h1>
            </div>
        </div>
    </div>
</main>
@endsection