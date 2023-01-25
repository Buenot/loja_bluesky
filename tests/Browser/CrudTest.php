<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;


class CrudTest extends DuskTestCase
{
    
    public function testRegistroUsuario()
    {
        $this->browse(function (Browser $browser) {
            $browser
            ->visit('/cadastro')
            ->maximize()
            ->assertSee('Cadastro')
            ->pause(5000)
            //Preenchendo o form
            ->type('name', 'Taina Marins Bueno')
            ->typeSlowly('email', 'buenotaina981@gmail.com')
            ->type('password', '1234567@')
            ->assertSee('Cadastro')
            ->press('@inito')
            ->pause(1000)
            ->releaseMouse()
            ->pause(5000);
        });
    }
    
   
    
    public function testLogarUsuario(){
        $this->browse(function (Browser $browser) {
            $browser
            ->visit('/')
            ->assertSee('Login')
            ->click('@init')
            ->pause(5000)
            //Preenchendo o form
            ->typeSlowly('email', 'buenotaina981@gmail.com')
            ->type('email_verified_at', 'buenotaina981@gmail.com')
            ->type('password', 'buenot01')
            ->assertSee('Login')
            ->press('@inii')
            ->pause(5000)
            ->visit('/')
            ->pause(5000);
        });
    }


}