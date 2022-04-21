<?php
/*
use App\Http\Controllers\LLBrandedPagesController;
// this is cleaner and easier to step in to the function in IDE
$router->get('/branded-pages', [LLBrandedPagesController::class, 'getEnabledLibraries']);
// can the model binding be used here?
$router->get('/branded-pages/{BrandedPage}', [LLBrandedPagesController::class, 'getBrandedPageForLibraryId']);
 */

$router->get('/branded-pages', [
    'uses' => 'LLBrandedPagesController@getEnabledLibraries'
]);

$router->get('/branded-pages/{id}', [
    'uses' => 'LLBrandedPagesController@getBrandedPageForLibraryId'
]);