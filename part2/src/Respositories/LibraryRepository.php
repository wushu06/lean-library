<?php

namespace App\Repositories;

use App\Models\Library;
use Illuminate\Support\Collection;

class LibraryRepository
{
    private Library $model;

    public function __construct(Library $model)
    {
        $this->model = $model;
    }

    public function getLibrariesWithEnabledBrandedPage(): Collection
    {
        return $this->model->where('branded_page', true)->get();
    }
    // redundant if we use model binding, can be removed
    public function getLibraryById($id): Library
    {
        return $this->model->where('id', $id)->first();
    }

}
