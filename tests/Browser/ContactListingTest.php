<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ContactListingTest extends DuskTestCase
{
    use DatabaseMigrations;

    public function test_an_info_message_is_shown_when_no_contacts_found()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(route('contacts.index'))
                    ->assertSee('Nenhum contato foi adicionado ainda.');
        });
    }

    public function test_a_contacts_list_is_shown()
    {
        $this->artisan('db:seed', ['--class' => 'ContactSeeder']);

        $this->browse(function (Browser $browser) {
            $browser->visit(route('contacts.index'))
                    ->assertSeeAnythingIn('table');
        });
    }
}
