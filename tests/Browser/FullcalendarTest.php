<?php
declare(strict_types=1);

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class FullcalendarTest extends DuskTestCase
{
    public function testTheFullcalendarCanBeViewedViaTheHomePage(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Calendars')
                    ->assertSee('Full calendar')
                    ->assertSee('View the full calendar')
                    ->assertSeeLink('Full calendar')
                    ->clickLink('Full calendar')
                    ->assertDontSee('Calendars')
                    ->assertSee('Livewire full calendar')
                    ->assertSee(date('F Y'));
        });
    }
}
