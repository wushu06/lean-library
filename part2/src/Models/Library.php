<?php

namespace App\Models;

class Library extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'sub',
        'name',
        'old_styling',
        'styling',
        'logo_path',
        'cdn_css_path',
        'cdn_logo_path',
        'journal_alert',
        'journal_alert_module',
        'assist_module',
        'max_follows',
        'free_mode',
        'onboarding',
        'subdomain',
        'access_module',
        'alternatives_module',
        'secondary_enabled',
        'language_id',
        'button_styling_enabled',
        'button_styling',
        'button_styling_cdn_path',
        'state',
        'start_at',
        'end_at',
        'branded_page',
        'branded_page_slug'
    ];

}
