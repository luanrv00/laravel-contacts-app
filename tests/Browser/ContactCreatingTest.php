<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ContactCreatingTest extends DuskTestCase
{
    use DatabaseMigrations;

    public function test_add_a_new_contact()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(route('contacts.create'))
                    ->type('first_name', 'Soft')
                    ->type('last_name', 'Makers')
                    ->type('email', 'softmakers@mail')
                    ->press('Adicionar')
                    ->assertRouteIs('contacts.index')
                    ->assertSee('Soft Makers');
        });
    }

    public function test_require_contact_info()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(route('contacts.create'))
                    ->press('Adicionar')
                    ->assertSee('Por favor, preencha os campos obrigatórios.');
        });
    }
}
