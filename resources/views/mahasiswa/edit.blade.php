@extends('layouts.app') 
 
@section('title', 'Edit Mahasiswa') 
 
@section('content') 
<div class="card"> 
    <div class="card-header"> 
        <h4>Edit Data Mahasiswa</h4> 
    </div> 
    <div class="card-body"> 
        <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST"> 
            @csrf 
            @method('PUT') 
             
            <div class="row mb-3"> 
                <div class="col-md-6"> 
                    <div class="mb-3"> 
                        <label for="nim" class="form-label">NIM</label> 
                        <input type="text" class="form-control @error('nim') is-invalid @enderror" 
id="nim" name="nim" value="{{ old('nim', $mahasiswa->nim) }}" required> 
                        @error('nim') 
                            <div class="invalid-feedback">{{ $message }}</div> 
                        @enderror 
                    </div> 
                     
                    <div class="mb-3"> 
                        <label for="nama" class="form-label">Nama Lengkap</label> 
                        <input type="text" class="form-control @error('nama') is-invalid 
@enderror" id="nama" name="nama" value="{{ old('nama', $mahasiswa->nama) }}" 
required> 
                        @error('nama') 
                            <div class="invalid-feedback">{{ $message }}</div> 
                        @enderror 
                    </div> 
                     <div class="mb-3"> 
                        <label for="jurusan" class="form-label">Jurusan</label> 
                        <input type="text" class="form-control @error('jurusan') is-invalid 
@enderror" id="jurusan" name="jurusan" value="{{ old('jurusan', $mahasiswa
>jurusan) }}" required> 
                        @error('jurusan') 
                            <div class="invalid-feedback">{{ $message }}</div> 
                        @enderror 
                    </div> 
                     
                    <div class="mb-3"> 
                        <label class="form-label">Jenis Kelamin</label> 
                        <div> 
                            <div class="form-check form-check-inline"> 
                                <input class="form-check-input" type="radio" name="jenis_kelamin" 
id="laki" value="Laki-laki" {{ (old('jenis_kelamin', $mahasiswa->jenis_kelamin) == 'Laki
laki') ? 'checked' : '' }} required> 
                                <label class="form-check-label" for="laki">Laki-laki</label> 
                            </div> 
                            <div class="form-check form-check-inline"> 
                                <input class="form-check-input" type="radio" name="jenis_kelamin" 
id="perempuan" value="Perempuan" {{ (old('jenis_kelamin', $mahasiswa->jenis_kelamin) 
== 'Perempuan') ? 'checked' : '' }}> 
                                <label class="form-check-label" 
for="perempuan">Perempuan</label> 
                            </div> 
                            @error('jenis_kelamin') 
                                <div class="text-danger small">{{ $message }}</div> 
                            @enderror 
                        </div> 
                    </div> 
                </div> 
                 
                <div class="col-md-6"> 
                    <div class="mb-3"> 
                        <label for="alamat" class="form-label">Alamat</label> 
                        <textarea class="form-control @error('alamat') is-invalid @enderror" 
id="alamat" name="alamat" rows="3">{{ old('alamat', $mahasiswa
>alamat) }}</textarea> 
                        @error('alamat') 
                            <div class="invalid-feedback">{{ $message }}</div> 
                        @enderror 
                    </div>
                         <div class="mb-3"> 
                        <label for="email" class="form-label">Email</label> 
                        <input type="email" class="form-control @error('email') is-invalid 
@enderror" id="email" name="email" value="{{ old('email', $mahasiswa->email) }}" 
required> 
                        @error('email') 
                            <div class="invalid-feedback">{{ $message }}</div> 
                        @enderror 
                    </div> 
                     
                    <div class="mb-3"> 
                        <label for="no_hp" class="form-label">Nomor HP</label> 
                        <input type="text" class="form-control @error('no_hp') is-invalid 
@enderror" id="no_hp" name="no_hp" value="{{ old('no_hp', $mahasiswa->no_hp) }}"> 
                        @error('no_hp') 
                            <div class="invalid-feedback">{{ $message }}</div> 
                        @enderror 
                    </div> 
                </div> 
            </div> 
             
            <div class="d-flex justify-content-between"> 
                <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary"> 
                    <i class="fas fa-arrow-left"></i> Kembali 
                </a> 
                <button type="submit" class="btn btn-warning"> 
                    <i class="fas fa-save"></i> Perbarui 
                </button> 
            </div> 
        </form> 
    </div> 
</div> 
@endsection