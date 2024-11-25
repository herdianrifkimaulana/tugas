<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Data extends Model
{
    protected $fillable = [
        'name', 'email', 'kategori_id', 'image'
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id', 'id');
    }

    public static function boot()
    {
        parent::boot();

        static::saving(function ($data) {
            // Pastikan image adalah instance dari UploadedFile
            if ($data->image && $data->image instanceof \Illuminate\Http\UploadedFile) {
                // Jika ada gambar lama yang perlu dihapus
                if ($data->isDirty('image') && $data->getOriginal('image')) {
                    Storage::delete($data->getOriginal('image'));
                }
                // Simpan gambar baru ke storage dan simpan path-nya
                $data->image = $data->image->store('images', 'public');
            }
        });
    }

    public function getImageUrlAttribute()
    {
        return $this->image ? Storage::url($this->image) : null;
    }
}
