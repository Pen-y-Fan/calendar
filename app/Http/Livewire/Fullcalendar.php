<?php
declare(strict_types=1);

namespace App\Http\Livewire;

use App\Models\Event;
use Carbon\Carbon;
use Livewire\Component;

class Fullcalendar extends Component
{
    public $events = '';

    public function getevent()
    {
        $events = Event::select('id','title','start')->get();

        return json_encode($events);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function addevent($event)
    {
        $input['title'] = $event['title'];
        $input['description'] = $event['title'];
        $input['start'] = Carbon::parse($event['start']);
        Event::create($input);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function eventDrop($event, $oldEvent)
    {
        $eventdata = Event::find($event['id']);
        $eventdata->start = Carbon::parse($event['start']);
        $eventdata->save();
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function render()
    {
        $events = Event::select('id','title','start')->get();

        $this->events = json_encode($events);

        return view('livewire.fullcalendar');
    }
}
