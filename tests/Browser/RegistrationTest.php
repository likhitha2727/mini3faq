<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;


class RegistrationTest extends DuskTestCase
{



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
                ->value('#email', 'sn8791898928983963218786887879869639898108788998996187788@njit.com')
                ->value('#password', 'likhitha')
                ->value('#password-confirm', 'likhitha')
                ->press('button[type="submit"]')
                ->assertSee('Questions');
        });

    }
}
