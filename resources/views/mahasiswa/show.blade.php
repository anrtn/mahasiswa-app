@extends('layouts.app') 
 
@section('title', 'Detail Mahasiswa') 
 
@section('content') 
<div class="card"> 
    <div class="card-header d-flex justify-content-between align-items-center"> 
        <h4 class="mb-0">Detail Mahasiswa</h4> 
        <div> 
            <a href="{{ route('mahasiswa.edit', $mahasiswa->id) }}" class="btn btn-warning"> 
                <i class="fas fa-edit"></i> Edit 
                  </a> 
            <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary"> 
                <i class="fas fa-arrow-left"></i> Kembali 
            </a> 
        </div> 
    </div> 
    <div class="card-body"> 
        <table class="table table-bordered"> 
            <tr> 
                <th width="200">NIM</th> 
                <td>{{ $mahasiswa->nim }}</td> 
            </tr> 
            <tr> 
                <th>Nama Lengkap</th> 
                <td>{{ $mahasiswa->nama }}</td> 
            </tr> 
            <tr> 
                <th>Jurusan</th> 
                <td>{{ $mahasiswa->jurusan }}</td> 
            </tr> 
            <tr> 
                <th>Jenis Kelamin</th> 
                <td>{{ $mahasiswa->jenis_kelamin }}</td> 
            </tr> 
            <tr> 
                <th>Alamat</th> 
                <td>{{ $mahasiswa->alamat ?? '-' }}</td> 
            </tr> 
            <tr> 
                <th>Email</th> 
                <td>{{ $mahasiswa->email }}</td> 
            </tr> 
            <tr> 
                <th>Nomor HP</th> 
                <td>{{ $mahasiswa->no_hp ?? '-' }}</td> 
            </tr> 
            <tr> 
                <th>Tanggal Dibuat</th> 
                <td>{{ $mahasiswa->created_at->format('d M Y H:i') }}</td> 
            </tr> 
            <tr> 
                <th>Terakhir Diupdate</th> 
                <td>{{ $mahasiswa->updated_at->format('d M Y H:i') }}</td> 
            </tr> 
  </table> 
    </div> 
</div> 
@endsection