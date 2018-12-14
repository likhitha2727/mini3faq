<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AnswerWorkTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testAnswer()
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
                ->clickLink('View')
                ->assertSee('Question')
                ->clickLink('Answer Question')
                ->value('#body', 'browsertesting')
                ->click('#submit')
                ->assertSee('Saved')
                ->clickLink('View')
                ->clickLink('Edit Answer')
                ->value('#body', 'testingwithbrowser')
                ->press('#submit')
                ->assertSee('Updated')
                ->press('#submit')
                ->assertSee('Delete')
                ->press('#navbarDropdown')
                ->clickLink('Logout')
                ->assertSee('Laravel');
        });
    }
}
