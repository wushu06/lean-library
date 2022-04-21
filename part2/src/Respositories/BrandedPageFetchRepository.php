<?php

namespace App\Repositories;

use App\Models\BrandedPage;

class BrandedPageFetchRepository
{
    private BrandedPage $model;

    public function __construct(BrandedPage $model)
    {
        $this->model = $model;
    }

    public function getBrandedPageForLibraryId($id): ?BrandedPage
    {
        return $this->model->where('library_id', $id)->first();
    }

    public function getDefaultBrandedPage(): BrandedPage
    {
        // repetition
        // getBrandedPageForLibraryId($id = null)
        // return $this->getBrandedPageForLibraryId();
        return $this->model->where('library_id', null)->first();
    }
}
