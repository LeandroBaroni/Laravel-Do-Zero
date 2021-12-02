<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ContactFormTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @test
     */
    public function visitContactPage()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/contato')
                    ->assertSee('Nome completo');
        });
    }

    public function testIfInputsExists(){
        $this->browse(function (Browser $browser) {
            $browser->visit('/contato')
                ->assertSee('Nome completo')
                ->assertSee('Email')
                ->assertSee('Mensagem')
                ->inputValue('name');
        });
    }

//    public function testContactFormIsWorking(){
//        $this->browse(function (Browser $browser) {
//            $browser->visit('/contato')
//                ->type('name', 'LEandroTestes')
//                ->type('email', 'leandromail@gmail.com')
//                ->type('message', 'Ola mundo')
//                ->press('Enviar Mensagem')
//                ->waitFor('.toast-message', 2)
//                ->assertPathIs('/contato');
//        });
//    }
}
