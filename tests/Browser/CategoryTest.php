<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CategoryTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }

    use DatabaseMigrations;

    public function test_a_visitor_can_create_categories()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/categories/create')
                ->type('name', 'Science') // input mező name attribútum értéke
                ->click('input[type="submit"]')
                ->assertSee('Science');
        });
    }
}
