<?php 
 
namespace App\Http\Controllers; 
 
use App\Models\Mahasiswa; 
use Illuminate\Http\Request; 
use Illuminate\Validation\Rule; 
 
class MahasiswaController extends Controller 
{ 
    /** 
     * Display a listing of the resource. 
     */ 
    public function index() 
    { 
        $mahasiswas = Mahasiswa::latest()->paginate(10); 
        return view('mahasiswa.index', compact('mahasiswas')); 
    } 
 
    /** 
     * Show the form for creating a new resource. 
     */ 
    public function create() 
    { 
        return view('mahasiswa.create'); 
    } 
 
    /** 
     * Store a newly created resource in storage. 
     */ 
    public function store(Request $request) 
    { 
        // Validasi input 
        $request->validate([ 
            'nim' => 'required|string|max:15|unique:mahasiswas', 
            'nama' => 'required|string|max:100', 
            'jurusan' => 'required|string|max:50', 
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan', 
            'alamat' => 'nullable|string', 
            'email' => 'required|email|max:100|unique:mahasiswas', 
            'no_hp' => 'nullable|string|max:15', 
        ]); 
 
        // Simpan data mahasiswa
          Mahasiswa::create($request->all()); 
 
        return redirect()->route('mahasiswa.index') 
            ->with('success', 'Data mahasiswa berhasil ditambahkan.'); 
    } 
 
    /** 
     * Display the specified resource. 
     */ 
    public function show(Mahasiswa $mahasiswa) 
    { 
        return view('mahasiswa.show', compact('mahasiswa')); 
    } 
 
    /** 
     * Show the form for editing the specified resource. 
     */ 
    public function edit(Mahasiswa $mahasiswa) 
    { 
        return view('mahasiswa.edit', compact('mahasiswa')); 
    } 
 
    /** 
     * Update the specified resource in storage. 
     */ 
    public function update(Request $request, Mahasiswa $mahasiswa) 
    { 
        // Validasi input 
        $request->validate([ 
            'nim' => [ 
                'required', 
                'string', 
                'max:15', 
                Rule::unique('mahasiswas')->ignore($mahasiswa->id), 
            ], 
            'nama' => 'required|string|max:100', 
            'jurusan' => 'required|string|max:50', 
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan', 
            'alamat' => 'nullable|string', 
            'email' => [ 
                'required', 
                'email', 
                'max:100', 
                Rule::unique('mahasiswas')->ignore($mahasiswa->id),
                     ], 
            'no_hp' => 'nullable|string|max:15', 
        ]); 
 
        // Update data mahasiswa 
        $mahasiswa->update($request->all()); 
 
        return redirect()->route('mahasiswa.index') 
            ->with('success', 'Data mahasiswa berhasil diperbarui.'); 
    } 
 
    /** 
     * Remove the specified resource from storage. 
     */ 
    public function destroy(Mahasiswa $mahasiswa) 
    { 
        // Hapus data mahasiswa 
        $mahasiswa->delete(); 
 
        return redirect()->route('mahasiswa.index') 
            ->with('success', 'Data mahasiswa berhasil dihapus.'); 
    } 
} 
