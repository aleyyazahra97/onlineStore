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
     // Tambahkan blok ini untuk mencegah akses database saat proses build
    if ($this->app->runningInConsole()) {
        return;
    }
    }
}