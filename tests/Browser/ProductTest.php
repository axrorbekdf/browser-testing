<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ProductTest extends DuskTestCase
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


    public function testIndex()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->type('#email', 'axrorbekdf@gmail.com')
                    ->type('#password', '12345678')
                    ->press('.login-button')
                    ->waitForLocation('/dashboard')
                    ->visit('/products')
                    ->assertSee('List all product');
        });
    }

    public function testCreate()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/products/create')
                    ->type('#name', 'Test name')
                    ->type('#price', 45000)
                    ->press('#submitButton')
                    ->waitForLocation('/products')
                    ->assertSee('List all product');
        });
    }

    public function testEdit()
    {
        $this->browse(function (Browser $browser) {
            
            $product = \App\Models\Product::first();

            $browser->visit('/products/'.$product->id.'/edit')
                    ->type('#name', $product->name." update")
                    ->type('#price', $product->price)
                    ->press('#editButton')
                    ->waitForLocation('/products')
                    ->assertSee('List all product');
        });
    }
}
