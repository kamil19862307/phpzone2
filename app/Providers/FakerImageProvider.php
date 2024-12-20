<?php

namespace App\Providers;

use Faker\Provider\Base;
use Illuminate\Support\Facades\Storage;

class FakerImageProvider extends Base
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    public function fixturesImage(string $fixturesDir, string $storageDir): string
    {
        if (!Storage::exists($storageDir)){
            Storage::makeDirectory($storageDir);
        }

        $file = $this->generator->file(
            base_path("tests/Fixtures/images/$fixturesDir"),
            Storage::path($storageDir),
            false
        );

        return '/storage/' . trim($storageDir, '/') . '/' . $file;
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
