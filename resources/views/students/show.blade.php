@extends('layouts.main')

@section('title', 'AZA | SHOW STUDENT')

@section('container')

<main>
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h2 class="mt-3">Show Student</h2>
                
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{$student->nama}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{$student->nim}}</h6>
                        <p class="card-text">{{$student->jurusan}}</p>
                        <a href="/students" class="badge badge-secondary">Back</a>
                        <a href="{{$student->id}}/edit" class="badge badge-warning" >Edit</a>
                        <form action="/students/{{$student->id}}" method="post" class="d-inline" onclick="return confirm('Are you sure deleting {{$student->nama}} data?')">
                        @method('delete')
                        @csrf
                            <button class="badge badge-danger "type="submit">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection()