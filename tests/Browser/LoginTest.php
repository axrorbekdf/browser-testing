<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Laravel');
        });
    }


    public function testLogin()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->type('#email', 'axrorbekdf@gmail.com')
                    ->type('#password', '12345678')
                    ->press('.login-button')
                    // ->visit('dashboard')
                    ->waitForLocation('/dashboard')
                    ->assertSee('Ahrorbek Davronov');
        });
    }

}
