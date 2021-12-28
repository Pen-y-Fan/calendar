<?php
declare(strict_types=1);

namespace App\Http\Livewire;

use App\Models\Event;
use Asantibanez\LivewireCalendar\LivewireCalendar;
use Carbon\Carbon;
use Illuminate\Support\Collection;

class AppointmentsCalendar extends LivewireCalendar
{
    public function events(): Collection
    {
        return Event::query()
            ->whereDate('start', '>=', $this->gridStartsAt)
            ->whereDate('start', '<=', $this->gridEndsAt)
            ->get()
            ->map(function (Event $model) {
                return [
                    'id' => $model->id,
                    'title' => $model->title,
                    'description' => $model->description,
                    'date' => $model->start,
                ];
            });
    }

    /**
     * This event will fire when an event is dragged and dropped into another calendar day
     * You will get the event id, year, month and day where it was dragged to
     *
     * @param int $eventId
     * @param int $year
     * @param int $month
     * @param int $day
     * @return void
     */
    public function onEventDropped($eventId, $year, $month, $day): void
    {
        $event = Event::findOrFail($eventId);
        $event->start = Carbon::create($year, $month, $day);
        $event->save();
    }
}
