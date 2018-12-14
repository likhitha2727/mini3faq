<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class QuestionWorkTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */


    public function testExample()
    {

        /*$this->browse(function (Browser $browser) {
            $browser->visit('http://localhost:8000/home')->dump()
                ->value('#email', 's1234567@njit.com')
                ->value('#password', 'likhitha')
                ->press('button[type="submit"]')
                ->assertSee('Questions')
                ->clickLink('Createquestion')
                ->assertSee('Create Question')
                ->value('#body', 'what is dusk')
                ->press('#submit')
                ->assertSee('IT WORKS!')
                ->clickLink('View')
                ->assertSee('Question')
                ->clickLink('View')
                ->assertSee('Body')
                ->value('#body', 'what is dusk?')
                ->press('#submit')
                ->assertSee('Saved')
                ->press('#submit')
                ->assertSee('Deleted')
                ->press('#navbarDropdown')
                ->clickLink('Logout')
                ->assertSee('Laravel');
        });*/
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
                ->clickLink('Edit Question')
                ->assertSee('Body')
                ->value('#body', 'duskwhat')
                ->press('#submit')
                ->assertSee('Saved')
                ->press('#submit')
                ->assertSee('Deleted')
                ->press('#navbarDropdown')
                ->clickLink('Logout')
                ->assertSee('Laravel');
        });
    }


}
