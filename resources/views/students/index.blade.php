@extends('layouts.main')

@section('title', 'AZA | MAHASISWA')

@section('container')

<main>
    <div class="container">
        <div class="row">
            <div class="col-10">
            @if(session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{session('status')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
                <h2 class="mt-3">Daftar Mahasiswa</h2>
                <a href="/students/create" class="btn btn-success btn-sm my-1">Create Data</a>
                @foreach($students as $student)
                <ul class="list-group my-1">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{$student->nama}}
                        <a href="/students/{{$student->id}}" class="badge badge-primary">Detail</a>
                    </li>
                </ul>
                @endforeach
            </div>
        </div>
    </div>
</main>

@endsection()

<!-- Tabel  -->
<!-- <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Jurusan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$student->nama}}</td>
                            <td>{{$student->nim}}</td>
                            <td>{{$student->jurusan}}</td>
                            <td>
                                <a href="mahasiswa/edit"><span class="badge badge-warning">Edit</span></a>
                                <a href="mahasiswa/delete"><span class="badge badge-danger">Delete</span></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table> -->