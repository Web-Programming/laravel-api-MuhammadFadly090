<?php

namespace Database\Seeders;

use App\Models\Donation;
use App\Models\Funding;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        /*
        // Membuat 10 user dengan factory
        User::factory(10)->create();
        
        // Membuat satu funding dengan nilai untuk duration dan collected
        Funding::create([
            'title' => 'Bantuan Kemanusiaan',
            'desc' => 'Bantuan untuk korban bencana alam',
            'image' => 'bantuan-kemanusian.jpg',
            'progres' => 0,
            'duration' => '30 days',
            'collected' => 0, // Tambahkan nilai untuk kolom collected
            'target' => 1000000,
            'user_id' => 1,
        ]);

        // Membuat satu donation
        Donation::create([
            'amount' => 1000000,
            'funding_id' => 1, // Perbaikan dari 'fonding_id' menjadi 'funding_id'
            'user_id' => 2,
        ]);
        
        // Group routes with 'auth:sanctum' middleware*/
        Route::group(['middleware' => 'auth:sanctum'], function () {
            // Definisikan rute untuk Funding
            Route::get('/funding', [FundingController::class, 'index']);
            Route::post('/funding', [FundingController::class, 'store']);
            Route::get('/funding/{id}', [FundingController::class, 'show']);
            Route::put('/funding/{id}', [FundingController::class, 'update']);
            Route::delete('/funding/{id}', [FundingController::class, 'destroy']);
        
            // Definisikan rute API resource untuk Donation
            Route::apiResource('donations', DonationController::class);
        });
        
        // Routes outside of the middleware group
        Route::post('/login', [AuthController::class, 'login']);
        Route::post('/register', [AuthController::class, 'register']);
        Route::post('/logout', [AuthController::class, 'logout']);
    }
}

