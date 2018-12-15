<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use App\User;
//use Laravel\Dusk\Browser\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ProfileWorkTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
        public function testExample()
    {

            $this->browse(function (Browser $browser) {
            $browser->visit('http://localhost:8000/user/73/profile')
                    ->assertSee('My Profile');



        });

    }

}
