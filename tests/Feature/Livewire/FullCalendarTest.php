<?php
declare(strict_types=1);

namespace Tests\Feature\Livewire;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FullCalendarTest extends TestCase
{
    use RefreshDatabase;

    public function testFullCalendarPageContainsLivewireComponent(): void
    {
        $response = $this->get('/fullcalendar')
            ->assertSeeLivewire('fullcalendar');

        $response->assertOk();
    }
}
