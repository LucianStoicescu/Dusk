<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class BasicTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testMainPage()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('The Grommet')
                    ->click('body > header > div.p-b-m.p-t-s-phone.p-b-s-phone > div > nav > ul > li:nth-child(8) > a')
                    ->assertPathIs('*products*');
        });

    }
}
?>
