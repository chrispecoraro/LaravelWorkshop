<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->radio('1', '1')
                ->radio('2', '5')
                ->radio('4', '10')
                ->radio('6', '13')
                ->type('@email','abc@xyz.com'.rand(1,1000))
                ->press("Submit")
                ->assertSee('Something else');
        });
    }
}
