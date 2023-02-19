<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TeacherGuestLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('teacher.layouts.guest');
    }
}
