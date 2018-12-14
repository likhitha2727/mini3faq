<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RegistrationTest extends DuskTestCase
{
    use RefreshDatabase;


    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testRegistration()
    {


        $this->browse(function (Browser $browser) {
            $browser->visit('http://localhost:8000/register')
                ->assertSee('Register')
                ->clickLink('Register')
                ->value('#email', 's51296789@njit.com')
                ->value('#password', 'likhitha')
                ->value('#password-confirm', 'likhitha')
                ->press('button[type="submit"]')
                ->assertSee('Questions');
        });

    }
}
