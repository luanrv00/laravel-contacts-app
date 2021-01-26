<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ContactDeletingTest extends DuskTestCase
{
    use DatabaseMigrations;

    public function setUp(): void
    {
        parent::setUp();
        $this->artisan('db:seed', ['--class' => 'ContactSeeder']);
    }

    public function test_delete_a_contact()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(route('contacts.index'))
                    ->assertSeeAnythingIn('table')
                    ->click('.remove')
                    ->waitForDialog()
                    ->acceptDialog()
                    ->assertRouteIs('contacts.index')
                    ->assertDontSee('table');
        });
    }
}
