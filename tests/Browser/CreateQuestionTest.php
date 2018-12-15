<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class CreateQuestionTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://localhost:8000/home')
                ->value('#email', 's1234567@njit.com')
                ->value('#password', 'likhitha')
                ->press('button[type="submit"]')
                ->assertSee('Questions')
                ->clickLink('Create question')
                ->assertSee('Create Question')
                ->value('#body', 'whatdusk')
                ->press('#submit')
                ->assertSee('IT WORKS!')
                ->click('#navbarDropdown')
                ->clickLink('Logout')
                ->assertSee('Laravel');
        });
    }
}
