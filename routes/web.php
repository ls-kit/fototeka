<?php

use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend as Frontend;
use App\Http\Controllers\Admin as Admin;


Route::get('/uploadCollections', function (\Illuminate\Http\Request $request) {
//    for($i = 320; $i<= 332; $i++){
//        $file = fopen(public_path('/uploads/reportage/11/TEKST/'.$i.'.txt'),'r');
//        $dataObject = [
//            'author_name'=>null,
//            'height'=>null,
//            'original_date'=>null,
//            'material'=>null,
//            'description'=>null,
//        ];
//        $lastLine = '';
//        while (($line = fgets($file)) != false){
//            if(str_contains($line,'Autori')){
//                $lineValues = explode('Autori',$line);
//                $dataObject['author_name'] = $lineValues[1];
//            }
//            if(str_contains($line,'Teknika')){
//                $lineValues = explode('Teknika',$line);
//                $dataObject['material'] = $lineValues[1];
//            }
//            if(str_contains($line,'Viti')){
//                $lineValues = explode('Viti',$line);
//                $dataObject['original_date'] = $lineValues[1];
//            }
//            if(str_contains($line,'Përmasa')){
//                $lineValues = explode('Përmasa',$line);
//                $dataObject['height'] = $lineValues[1];
//            }
//            $lastLine = $line;
//        }
//        $dataObject['description'] = $lastLine;
//        $reportage = new \App\Models\Reportage_gallery();
//        $reportage->image = $i.'.jpg';
//        $reportage->reportage_id = 11;
//        $reportage->meta_data = $dataObject;
//        $reportage->save();
//    }
});

Route::get('view', [LanguageController::class, 'view'])->name('view');
Route::get('language-change', [LanguageController::class, 'changeLanguage'])->name('changeLanguage');
Route::get('/changeLanguage/{language}', [LanguageController::class, 'selectLanguage']);

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => ['language']], function () {


    Auth::routes();

    Route::get('/home', [Frontend\FrontendController::class, 'index'])->name('home');

    Route::get('/article', [Frontend\FrontendController::class, 'article'])->name('article');

//Home Page
    Route::get('/', [Frontend\FrontendController::class, 'index'])->name('home');

//About Page
    Route::get('/about', [Frontend\FrontendController::class, 'about'])->name('about');

//Category Page tema
    Route::get('/category', [Frontend\FrontendController::class, 'category'])->name('category');
    Route::get('/singleCategory/{id}', [Frontend\FrontendController::class, 'article'])->name('category');

//Collection Page
    Route::get('/collection', [Frontend\FrontendController::class, 'collection'])->name('collection');
    Route::get('/collection_details/{id}', [Frontend\FrontendController::class, 'detailedCollection'])->name('collection');
    Route::get('/collection/{id}', [Frontend\FrontendController::class, 'singleCollection'])->name('collection');
    Route::get('/collection/{id}/gallery/{gallery_id}', [Frontend\FrontendController::class, 'singleCollectionGallery'])->name('collection');

//Authors Page
    Route::get('/authors-list', [Frontend\FrontendController::class, 'authorsList'])->name('authors-list');
    Route::get('/author/{id}', [Frontend\FrontendController::class, 'singleAuthor'])->name('authors-list');
    Route::get('/author/{id}/details', [Frontend\FrontendController::class, 'detailedAuthor'])->name('authors-list');
    Route::get('/author/{id}/gallery/{gallery_id?}', [Frontend\FrontendController::class, 'galleryAuthor'])->name('authors-list');

//Section Page
    Route::get('/section', [Frontend\FrontendController::class, 'section'])->name('section');
    Route::get('/section/{id}', [Frontend\FrontendController::class, 'singleSection'])->name('section');

//Reportage Page
    Route::get('/reportage', [Frontend\FrontendController::class, 'reportage'])->name('reportage');
    Route::get('/reportage/{id}', [Frontend\FrontendController::class, 'singleReportage'])->name('reportage');
    Route::get('/reportage/{id}/gallery/{gallery_id}', [Frontend\FrontendController::class, 'singleReportageGallery'])->name('reportage');

//Contact Page
    Route::get('/contact', [Frontend\FrontendController::class, 'contact'])->name('contact');

    Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
        Route::get('/', [Admin\DashboardController::class, 'index']);
        Route::get('/dashboard', [Admin\DashboardController::class, 'index']);

        Route::get('category', [Admin\CategoryController::class, 'index']);
        Route::get('add-category', [Admin\CategoryController::class, 'create']);
        Route::post('add-category', [Admin\CategoryController::class, 'store']);
        Route::get('edit-category/{category_id}', [Admin\CategoryController::class, 'edit']);
        Route::put('update-category/{category_id}', [Admin\CategoryController::class, 'update']);
        Route::get('delete-category/{category_id}', [Admin\CategoryController::class, 'destroy']);


        Route::get('reportage', [Admin\ReportageController::class, 'index']);

        Route::prefix('reportage/{reportage_id}')->group(function () {
            Route::get('gallery', [Admin\ReportageGalleryController::class, 'index']);
            Route::get('add-gallery', [Admin\ReportageGalleryController::class, 'create']);
            Route::post('add-gallery', [Admin\ReportageGalleryController::class, 'store']);
            Route::get('edit-gallery/{gallery_id}', [Admin\ReportageGalleryController::class, 'edit']);
            Route::put('update-gallery/{gallery_id}', [Admin\ReportageGalleryController::class, 'update']);
            Route::get('delete-gallery/{gallery_id}', [Admin\ReportageGalleryController::class, 'destroy']);
        });

        Route::get('add-reportage', [Admin\ReportageController::class, 'create']);
        Route::post('add-reportage', [Admin\ReportageController::class, 'store']);
        Route::get('edit-reportage/{reportage_id}', [Admin\ReportageController::class, 'edit']);
        Route::put('update-reportage/{reportage_id}', [Admin\ReportageController::class, 'update']);
        Route::get('delete-reportage/{reportage_id}', [Admin\ReportageController::class, 'destroy']);


        Route::get('posts', [Admin\PostController::class, 'index']);
        Route::prefix('post/{post_id}')->group(function () {
            Route::get('gallery', [Admin\PostGalleryController::class, 'index']);
            Route::get('add-gallery', [Admin\PostGalleryController::class, 'create']);
            Route::post('add-gallery', [Admin\PostGalleryController::class, 'store']);
            Route::get('edit-gallery/{gallery_id}', [Admin\PostGalleryController::class, 'edit']);
            Route::put('update-gallery/{gallery_id}', [Admin\PostGalleryController::class, 'update']);
            Route::get('delete-gallery/{gallery_id}', [Admin\PostGalleryController::class, 'destroy']);
            Route::get('/down', [Admin\PostController::class, 'orderIncrement']);
            Route::get('/up', [Admin\PostController::class, 'orderDecrement']);
        });
        Route::get('add-post', [Admin\PostController::class, 'create']);
        Route::post('add-post', [Admin\PostController::class, 'store']);
        Route::get('post/{post_id}', [Admin\PostController::class, 'edit']);
        Route::put('update-post/{post_id}', [Admin\PostController::class, 'update']);
        Route::get('delete-post/{post_id}', [Admin\PostController::class, 'destroy']);


        Route::get('authors', [Admin\AuthorController::class, 'index']);
        Route::prefix('author/{author_id}')->group(function () {
            Route::get('gallery', [Admin\AuthorGalleryController::class, 'index']);
            Route::get('add-gallery', [Admin\AuthorGalleryController::class, 'create']);
            Route::post('add-gallery', [Admin\AuthorGalleryController::class, 'store']);
            Route::get('edit-gallery/{gallery_id}', [Admin\AuthorGalleryController::class, 'edit']);
            Route::put('update-gallery/{gallery_id}', [Admin\AuthorGalleryController::class, 'update']);
            Route::get('delete-gallery/{gallery_id}', [Admin\AuthorGalleryController::class, 'destroy']);
            Route::get('/down', [Admin\AuthorController::class, 'orderIncrement']);
            Route::get('/up', [Admin\AuthorController::class, 'orderDecrement']);
        });
        Route::get('add-author', [Admin\AuthorController::class, 'create']);
        Route::post('add-author', [Admin\AuthorController::class, 'store']);
        Route::get('authors/{authors_id}', [Admin\AuthorController::class, 'edit']);
        Route::put('update-authors/{authors_id}', [Admin\AuthorController::class, 'update']);
        Route::get('delete-authors/{authors_id}', [Admin\AuthorController::class, 'destroy']);


        Route::get('slider', [Admin\SliderController::class, 'index']);
        Route::get('add-slider', [Admin\SliderController::class, 'create']);
        Route::post('add-slider', [Admin\SliderController::class, 'store']);
        Route::get('delete-slider/{slider_id}', [Admin\SliderController::class, 'destroy']);


        Route::get('about', [Admin\AboutController::class, 'index']);
        Route::get('add-about', [Admin\AboutController::class, 'create']);
        Route::post('add-about', [Admin\AboutController::class, 'store']);
        Route::get('about/{about_id}', [Admin\AboutController::class, 'edit']);
        Route::put('update-about/{about_id}', [Admin\AboutController::class, 'update']);
        Route::get('delete-about/{about_id}', [Admin\AboutController::class, 'destroy']);

        Route::get('settings', [Admin\SettingsController::class, 'index']);
        Route::put('update-settings/{settings_id}', [Admin\SettingsController::class, 'update']);

        Route::get('terms-and-conditions', [Admin\TermsAndConditionsController::class, 'index']);
        Route::put('update-terms', [Admin\TermsAndConditionsController::class, 'update']);
    });

    //Terms and Conditions Page
    Route::get('/terms-and-conditions', [Frontend\FrontendController::class, 'termsAndConditions'])->name('terms-and-conditions');
});
