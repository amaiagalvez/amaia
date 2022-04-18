<?php

namespace Tests\Feature\Stubs;

use Tests\TestCase;

class MakeViewTest extends TestCase
{
    /** @test */

    public function make_view_ok()
    {
        $this->artisan('make:view name')->assertExitCode(0);

        //INFO: garbitu sotutako fitxategiak
        unlink(base_path('resources/views/Name/index.blade.php'));
        unlink(base_path('resources/views/Name/form.blade.php'));
        rmdir(base_path('resources/views/Name'));
    }
}
