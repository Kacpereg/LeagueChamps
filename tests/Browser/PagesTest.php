<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class PagesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000');
            sleep(1);
            $browser->assertSee('Become a legend.');
            sleep(1);
            $browser->visit('http://127.0.0.1:8000/brackets');
            sleep(1);
            $browser->assertSee('MATCH');
            sleep(1);
            $browser->visit('http://127.0.0.1:8000/forum');
            sleep(1);
            $browser->assertSee('DISCUSSIONS');
            sleep(1);
            $browser->visit('http://127.0.0.1:8000/highscores');
            sleep(1);
            $browser->assertSee('HIGHSCORES');
            sleep(1);
            $browser->visit('http://127.0.0.1:8000/contact');
            sleep(1);
            $browser->assertSee('CONTACT');
            sleep(1);

        });
    }
}
