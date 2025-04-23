@extends('layouts.app') 
 
@section('title', 'Daftar Mahasiswa') 
 
@section('content') 
<div class="card"> 
    <div class="card-header d-flex justify-content-between align-items-center"> 
        <h4 class="mb-0">Daftar Mahasiswa</h4> 
        <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary"> 
            <i class="fas fa-plus"></i> Tambah Mahasiswa 
        </a> 
    </div> 
    <div class="card-body"> 
        @if($mahasiswas->count() > 0) 
            <div class="table-responsive"> 
                <table class="table table-striped table-hover"> 
                    <thead> 
                        <tr> 
                            <th>No</th> 
                            <th>NIM</th> 
                            <th>Nama</th> 
                            <th>Jurusan</th> 
                            <th>Jenis Kelamin</th> 
                            <th>Email</th> 
                            <th>Aksi</th> 
                        </tr> 
                    </thead> 
                    <tbody> 
                        @foreach($mahasiswas as $index => $mahasiswa) 
                            <tr> 
                                <td>{{ $mahasiswas->firstItem() + $index }}</td> 
                                <td>{{ $mahasiswa->nim }}</td> 
                                <td>{{ $mahasiswa->nama }}</td> 
                                <td>{{ $mahasiswa->jurusan }}</td> 
                                <td>{{ $mahasiswa->jenis_kelamin }}</td> 
                                    <td>{{ $mahasiswa->email }}</td> 
                                <td> 
                                    <div class="d-flex gap-1"> 
                                        <a href="{{ route('mahasiswa.show', $mahasiswa->id) }}" class="btn btn-info btn-sm"> 
                                            <i class="fas fa-eye"></i> 
                                        </a> 
                                        <a href="{{ route('mahasiswa.edit', $mahasiswa->id) }}" class="btn btn-warning btn-sm"> 
                                            <i class="fas fa-edit"></i> 
                                        </a> 
                                        <form action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}" method="POST" class="d-inline"> 
                                            @csrf 
                                            @method('DELETE') 
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"> 
                                                <i class="fas fa-trash"></i> 
                                            </button> 
                                        </form> 
                                    </div> 
                                </td> 
                            </tr> 
                        @endforeach 
                    </tbody> 
                </table> 
            </div> 
             
            <div class="d-flex justify-content-center mt-4"> 
                {{ $mahasiswas->links() }} 
            </div> 
        @else 
            <p class="text-center">Tidak ada data mahasiswa.</p> 
        @endif 
    </div> 
</div> 
@endsection