

```php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('accueil');
});
Route::get('/accueil', function () {
    return view('accueil');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/travaux', function () {
    return view('travaux');
});
Route::get('/processus', function () {
    return view('processus');
});
Route::get('/a_propos', function () {
    return view('a_propos');
});
Route::get('/carrieres', function () {
    return view('carrieres');
});
Route::get('/contact', function () {
    return view('contact');
});
