<?php

namespace App\Models;

class BrandedPage extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'meta_desc',
        'page_h1_title',
        'page_body',
        'sidebar_content',
        'branded_page_logo_path',
        'branded_page_cdn_logo_path',
        'library_id',
        'browser_title'
    ];

}
