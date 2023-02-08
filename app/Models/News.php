<?php

namespace App\Models;

use App\Casts\DateNameCast;
use App\Events\NewsSavingEvent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Request;

class News extends Model
{
    use HasFactory;

    protected $dispatchesEvents = [
        'created' => NewsSavingEvent::class,
    ];

    protected $fillable = [
        'title',
        'content',
        'img_name',
    ];

    protected $casts = [
        'created_at' => DateNameCast::class,
    ];

    protected $hidden = ["img_name"];

    protected $appends = ["img_url", "url"];

    public function getUrlAttribute(): string
    {
        return route("article", ['article' => $this->id]);
    }

    public function getImgUrlAttribute(): string
    {
        if (is_null($this->img_name))
            return Request::root() . "/img/no_photo.jpg";
        return Request::root() . $this->getImgSrc();
    }

    public function getImgSrc(): string
    {
        return Storage::disk("news")->url($this->img_name);
    }

    /**
     * Sets the new image src.
     *
     * @param UploadedFile|string|null $img
     */
    public function setImgNameIfNotEmpty(UploadedFile|string|null $img)
    {
        if (!is_null($img) and ((is_string($img) and $img != "") or !is_string($img))) {
            $this->img_name = News::saveImg($img);
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
        return Storage::disk("news")->putFile("/", $img);
    }
}
