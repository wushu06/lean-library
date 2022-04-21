<?php
/*
 * we can use interfaces instead of dependency injection here, then we can remove constructor
 * adding to AppServiceProvider
 * public $bindings = [
		BrandedPageFetchServiceInterface::class    => BrandedPageFetchService::class,
		LibraryRepositoryInterface::class => LibraryRepository::class,
	];

    public function getEnabledLibraries(BrandedPageFetchServiceInterface $brandedPageFetchService)

    public function getBrandedPageForLibraryId(BrandedPage $brandedPage, BrandedPageFetchServiceInterface $brandedPageFetchService)
    {
        return response()
        ->json($brandedPageFetchService->getBrandedPageForLibrary($library));
    }
 */
namespace App\Http\Controllers;

use App\Repositories\LibraryRepository;
use App\Services\BrandedPageFetchService;

class LLBrandedPagesController extends Controller
{
    private $brandedPageFetchService;
    private $libraryRepo;

    public function __construct(
        BrandedPageFetchService $brandedPageFetchService,
        LibraryRepository $libraryPageRepo
        )
    {
        $this->brandedPageFetchService = $brandedPageFetchService;
        $this->libraryRepo = $libraryPageRepo;
    }

    public function getEnabledLibraries()
    {
        return response()
        ->json($this->brandedPageFetchService->getLibrariesWithEnabledBrandedPage());
    }

    public function getBrandedPageForLibraryId(int $id)
    {
        $library = $this->libraryRepo->getLibraryById($id);
        if (! $library->branded_page) {
            return response()->json(['error' => 'Branded page disabled!'], 404);
        }
        return response()
        ->json($this->brandedPageFetchService->getBrandedPageForLibrary($library));
    }
}
