<?php // Ini adalah tag pembuka PHP

namespace App\Models; // Mendefinisikan namespace untuk model ini, yaitu App\Models

// Import class-class yang dibutuhkan
use Illuminate\Database\Eloquent\Factories\HasFactory; // Import trait HasFactory untuk membuat factory model
use Illuminate\Database\Eloquent\Model; // Import class Model sebagai parent class

class KategoriProject extends Model // Mendefinisikan class KategoriProject yang mewarisi class Model
{
    /** @use HasFactory<\Database\Factories\KategoriProjectFactory> */ // Komentar PHPDoc yang menjelaskan factory yang digunakan
    use HasFactory; // Menggunakan trait HasFactory untuk memungkinkan pembuatan data dummy/factory

    protected $guarded = [ // Mendefinisikan kolom yang tidak boleh diisi secara massal (mass assignment)
        'id', // Kolom 'id' tidak boleh diisi secara massal, biasanya karena auto-increment
    ];

    public function MentorProject() // Mendefinisikan relasi dengan model MentorProject
    {
        return $this->hasMany(MentorProject::class, 'kategoriId'); // Relasi one-to-many: satu KategoriProject memiliki banyak MentorProject
                                                                   // 'kategoriId' adalah foreign key di tabel mentor_projects
    }

    public function MemberMaster() // Mendefinisikan relasi dengan model MemberMaster
    {
        return $this->hasMany(MemberMaster::class, 'kategoriId'); // Relasi one-to-many: satu KategoriProject memiliki banyak MemberMaster
                                                                  // 'kategoriId' adalah foreign key di tabel member_masters
    }

    public function Project() // Mendefinisikan relasi dengan model Project
    {
        return $this->hasMany(Project::class, 'kategoriId'); // Relasi one-to-many: satu KategoriProject memiliki banyak Project
                                                             // 'kategoriId' adalah foreign key di tabel projects
    }
}
