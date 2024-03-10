<?php

namespace App\View\Components;

use App\Models\Category;
use App\Models\Image;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class navbar extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $profile = Image::where('imageable_id', auth()->user()->id)->where('imageable_type', 'App\Model\User\Profile')->get();
        $categories = Category::all();
        return view('components.navbar',['categories'=>$categories , 'profile' => $profile]);
    }
}
