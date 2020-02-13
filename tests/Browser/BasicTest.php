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
                    //->click('div.wide-screen-rails.p-b-l.m-b-l > div:nth-child(3) > div.flex-8-12.flex-5-8-tablet > div.bg-beige.m-b-xl.m-b-0-phone.full-bleed-phone > div > div > div > a:nth-child(2)')
                    //driver->findElement( WebDriverBy::xpath("//table[@class='x-grid3-row-table']/tbody/tr/td/div/a[contains(text(),'$value')]"))->click();
                    ->clickAtXpath('//div[@class="tile-container-3 tile-container-2-mobile"]/a[1]')
                    ->assertPathIs('*our-makers*')
                    ->clickAtXpath('//div[@class="tile-container-3 tile-spacing-4 tile-container-2-tablet tile-spacing-2-mobile "]/a[2]')
                    //->pause(3000)
                    ->waitFor('#product_form > data-subscribe > div > div > div.quantity-selection.m-b-0 > data-connect > select')
                    ->clickAtXpath('//select/option[text()="3"]')
                    ->clickAtXpath('//button[@formaction="cart.add"]')
                    ->pause(3000)
                  //  ->assertSeeIn('#sveltep1Q4Ieoy > div > div > div.flex-col.flex-grow-tablet-plus.bg-white > div:nth-child(3) > div > div > div > div','2 items in your cart');
                    ->assertSee('3 items in your cart');
        });

    }
}
?>
