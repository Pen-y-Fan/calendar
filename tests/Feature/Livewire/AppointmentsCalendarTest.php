<?php
declare(strict_types=1);

namespace Tests\Feature\Livewire;

use App\Models\Event;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AppointmentsCalendarTest extends TestCase
{
    use RefreshDatabase;

    public function testCalendarPageContainsLivewireComponent(): void
    {
        Event::factory(60)->create();

        $response = $this->get('/calendar')
            ->assertSeeLivewire('appointments-calendar');

        $response->assertOk();
    }

    public function testCalendarPageContainsEvent(): void
    {
        Event::create([
            'title' => "Today's event",
            'description' => "Today's description",
            'start' => now()->startOfDay(),
        ]);

        $this->get('/calendar')
            ->assertSee("Today's event")
            ->assertSee("Today's description");
    }
}
