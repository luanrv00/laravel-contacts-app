<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class WelcomeTest extends DuskTestCase
{
    public function test_welcome_page_has_a_link_to_add_a_contact()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink('Adicionar um contato')
                    ->assertRouteIs('contacts.create');
        });
    }

    public function test_welcome_page_has_a_link_to_contacts_list()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink('Ver lista de contatos')
                    ->assertRouteIs('contacts.index');
        });
    }
}
