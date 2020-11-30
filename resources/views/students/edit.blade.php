@extends('layouts.main')

@section('title', 'AZA | EDIT STUDENT')

@section('container')

<main>
    <div class="container">
        <div class="row">
            <div class="col-10">
            <h2 class="mt-3">Edit Data Students</h2>
                <form action="/students/{{$student->id}}" method="post">
                    @method('patch')
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{old('nama') ? old('nama'): $student->nama}}">
                        @error('nama')
                        <div id="namaFeddback" class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" name="nim" value="{{old('nim') ? old('nim') : $student->nim}}">
                        @error('nim')
                        <div id="nimFeedback" class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" name="jurusan" value="{{old('jurusan') ? old('jurusan') : $student->jurusan}}">
                        @error('jurusan')
                        <div id="jurusanFeedback" class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</main>

@endsection()