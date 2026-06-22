<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// WAJIB ADA INI AGAR WARNA MERAH HILANG:
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        // Gunakan Schema (tanpa backslash) karena sudah di-import di atas
        Schema::defaultStringLength(191);
        
        // Gunakan DB (tanpa backslash) karena sudah di-import di atas
        if (env('DB_CONNECTION') === 'mysql') {
            DB::statement('SET SESSION sql_require_primary_key = 0;');
        }
    }
}