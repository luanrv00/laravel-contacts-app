<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\Storage;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ContactUpdatingTest extends DuskTestCase
{
    use DatabaseMigrations;

    public function setUp(): void
    {
        parent::setUp();
        $this->artisan('db:seed', ['--class' => 'ContactSeeder']);
    }

    public function test_update_a_contact_basic_info()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(route('contacts.index'))
                    ->click('.edit')
                    ->type('email', 'softmakers@rocks')
                    ->press('Atualizar')
                    ->assertSee('softmakers@rocks');
        });
    }

    public function test_update_a_contact_photo()
    {
        $this->browse(function (Browser $browser) {
            $photo = Storage::disk('public')->path('avatar.jpg');

            $browser->visit(route('contacts.index'))
                    ->click('.edit')
                    ->attach('photo', $photo)
                    ->press('Atualizar')
                    ->assertVisible('img');
        });
    }
}
