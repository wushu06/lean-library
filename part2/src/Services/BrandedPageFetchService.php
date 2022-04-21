<?php

namespace App\Services;

use App\Models\Library;
use App\Repositories\BrandedPageFetchRepository;
use App\Repositories\LibraryRepository;
use Illuminate\Database\Eloquent\Model;

class BrandedPageFetchService
{
    /**
     * @var LibraryRepository
     */
    private $libraryRepo;

    /**
     * @var BrandedPageFetchRepository
     */
    private $brandedPageRepo;

    /**
     * @param LibraryRepository $libraryRepo
     * @param BrandedPageFetchRepository $brandedPageRepo
     */
    public function __construct(LibraryRepository $libraryRepo, BrandedPageFetchRepository $brandedPageRepo)
    {
        $this->libraryRepo = $libraryRepo;
        $this->brandedPageRepo = $brandedPageRepo;
    }

    public function getLibrariesWithEnabledBrandedPage()
    {
        $libraries = $this->libraryRepo->getLibrariesWithEnabledBrandedPage();
        $response = [];
        foreach ($libraries as $library) {
            $response[] = [
                'id' => $library->id,
                'slug' => $library->branded_page_slug
            ];
        }
        return $response;
    }

    public function getBrandedPageForLibrary(Library $library)
    {
        $brandedPage = $this->brandedPageRepo->getBrandedPageForLibraryId($library->id);
        $logoPath = $brandedPage->branded_page_cdn_logo_path ?: $library->cdn_logo_path;
        return [
            'institution_id' => $library->id,
            'slug' => $library->branded_page_slug,
            'uni_name' => $library->name,
            'logo_url' => $logoPath ?: '',
            'meta_description' => $brandedPage->meta_desc,
            'hero_text' => $brandedPage->page_h1_title,
            'browser_title' => $brandedPage->browser_title,
            'body_content' => $brandedPage->page_body,
            'sidebar_tweet' => $brandedPage->sidebar_content,
        ];
    }
}
