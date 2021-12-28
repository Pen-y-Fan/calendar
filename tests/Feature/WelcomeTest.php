<?php
declare(strict_types=1);

namespace Tests\Feature;

use Tests\TestCase;

class WelcomeTest extends TestCase
{
    public function testWelcomePage(): void
    {
        $response = $this->get(route('welcome'))
            ->assertSeeInOrder([
                'Livewire calendar',
                'Full calendar'
            ]);

        $response->assertOk();
    }
}
