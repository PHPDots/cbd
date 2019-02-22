<?php
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
Route::get('/', 'PagesController@index')->name("home");

Route::get('clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('view:clear');
    $exitCode = Artisan::call('route:clear');
    $exitCode = Artisan::call('config:clear');
    return ["status" => 1, "msg" => "Cache cleared successfully!"];
});



Route::get('index.html', 'PagesController@index');
Route::get('contact.html', 'PagesController@contact');
Route::post('submit-contact', 'PagesController@submitContact')->name("submit-contact");
Route::get('composite-dental-fillings.html', 'PagesController@compositeDental');
Route::get('cosmetic-dentistry.html', 'PagesController@cosmeticDentistry');
Route::get('dental-bridges.html', 'PagesController@dentalBridges');
Route::get('dental-crowns-caps.html', 'PagesController@dentalCrownsCaps');
Route::get('dental-exams-cleanings.html', 'PagesController@dentalExamsCleanings');
Route::get('dental-hygiene.html', 'PagesController@dentalHygiene');
Route::get('dental-implants.html', 'PagesController@dentalImplants');
Route::get('dental-x-rays.html', 'PagesController@dentalxRays');
Route::get('dentures-partial-dentures.html', 'PagesController@denturesPartialDentures');
Route::get('doctor-detail.html', 'PagesController@doctorDetail');
Route::get('faq.html', 'PagesController@faq');
Route::get('general-family-dentistry.html', 'PagesController@generalFamilyDentistry');
Route::get('invisalign.html', 'PagesController@invisalign');
Route::get('office-tour.html', 'PagesController@officeTour');
Route::get('our-team.html', 'PagesController@ourTeam');
Route::get('periodontal-treatment.html', 'PagesController@periodontalTreatment');
Route::get('porcelain-dental-veneers.html', 'PagesController@porcelainDentalVeneers');
Route::get('preventive-care.html', 'PagesController@preventiveCare');
Route::get('restorative-dentistry.html', 'PagesController@restorativeDentistry');
Route::get('root-canal-therapy.html', 'PagesController@rootCanalTherapy');
Route::get('teeth-whitening.html', 'PagesController@teethWhitening');
Route::get('tooth-extractions.html', 'PagesController@toothExtractions');