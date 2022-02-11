<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ProfileEditTest extends DuskTestCase
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
            $browser->visit('http://127.0.0.1:8000/login');
            sleep(1);
            $browser->assertSee('LOGIN');
            sleep(1);
            $browser->type('email', 'majd@wp.pl');
            sleep(1);
            $browser->type('password', 'password');
            sleep(1);
            $browser->press('Sign in');
            sleep(1);
            $browser->assertSee('Successfully signed in');
            sleep(1);
            $browser->press('OK');
            sleep(1);
            $browser->visit('http://127.0.0.1:8000/profile/edit');
            sleep(1);
            $browser->type('ign', 'majd3');
            $browser->type('mainchamp', 'Draven');
            sleep(1);
            $browser->driver->executeScript('window.scrollTo(0, 1000);');
            sleep(1);
            $browser->press('Update information');
            sleep(1);
            $browser->assertSee('You have successfully updated Your profile');
            sleep(1);
            $browser->press('OK');

        });
    }
}
