    <?php

    use App\Http\Controllers\AboutUsController;
    use Illuminate\Support\Facades\Route;

    Route::get('/about-us', function() {
        return view('about-us');

    });

    Route::get("/test/", [AboutUsController::class, 'index']);
