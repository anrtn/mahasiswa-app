<?php 
 
namespace App\Models; 
 
use Illuminate\Database\Eloquent\Factories\HasFactory; 
use Illuminate\Database\Eloquent\Model; 
 
class Mahasiswa extends Model 
{ 
    use HasFactory; 
     
    protected $table = 'mahasiswas'; 
    protected $fillable = [ 
        'nim', 
        'nama', 
        'jurusan', 
        'jenis_kelamin', 
        'alamat', 
        'email', 
        'no_hp' 
    ]; 
} 