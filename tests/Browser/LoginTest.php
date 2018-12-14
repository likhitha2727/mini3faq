<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testLogin()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://localhost:8000')
                ->clickLink('Login')
                ->value('#email', 's1234567@njit.com')
                ->value('#password', 'likhitha')
                ->press('button[type="submit"]')
                ->assertSee('Questions')
                ->press('#navbarDropdown')
                ->clickLink('Logout')
                ->assertSee('Laravel');
        });

    }
}
