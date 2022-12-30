<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'img_src',
        'album_id',
    ];

 protected $hidden = ["img_name"];

    protected $appends = ["img_url"];

    public function getImgUrlAttribute(): string
    {
        return Request::root() . $this->getImgSrc();
    }

    public function getImgSrc(): string
    {
        return Storage::disk("image")->url($this->img_name);
    }

    /**
     * Sets the new image src.
     *
     * @param UploadedFile|string|null $img
     */
    public function setImgNameIfNotEmpty(UploadedFile|string|null $img)
    {
        if (!is_null($img) and ((is_string($img) and $img != "") or !is_string($img))) {
            $this->img_name = Image::saveImg($img);
        }
    }

    /**
     * The photo is saved on the disk. Return src.
     *
     * @param UploadedFile|string $img
     * @return string
     */
    public static function saveImg(UploadedFile|string $img): string
    {
        return Storage::disk("image")->putFile("/", $img);
    }
}
