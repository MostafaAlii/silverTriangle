<?php

namespace App\Http\Controllers\Dashboard;
use App\Models\Slider;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
class SliderController extends Controller {
    public function index() {
        return view('dashboard.sliders.index', ['title' => 'Sliders','sliders' => Slider::all()]);
    }

    /*public function store(Request $request) {
        dd($request->all());
        $request_data = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'note' => 'required',
            'status' => 'required|in:0,1',
        ]);
        $request_data = $request->except(['image']);
        if ($request->image) {
            Image::make($request->image)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('dashboard/uploads/slider_images/' . $request->image->hashName()));
            $request_data['image'] = $request->image->hashName();
        }
        Slider::create($request_data);
        session()->flash('add');
        return redirect()->route('sliders.index');
        
    }*/

    /*public function store(Request $request) {
        $request_data = $request->except(['image']);
        if ($request->image) {
            Image::make($request->image)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('dashboard/uploads/slider_images/' . $request->image->hashName()));
            $request_data['image'] = $request->image->hashName();
        }
        Slider::create($request_data);
        session()->flash('add');
        return redirect()->route('sliders.index');
    }*/

    public function store(Request $request) {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|in:0,1',
        ]);
        //dd($request->all());
        $request_data = $request->except(['image', 'translations']);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->hashName();
            Image::make($image)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('dashboard/uploads/slider_images/' . $imageName));
    
            $request_data['image'] = $imageName;
        }
        $slider = Slider::create($request_data);
        $translations = $request->input('translations');
        dd($translations);
        if ($translations && is_array($translations)) {
            $slider->updateTranslations($translations);
        }
    
        session()->flash('add');
        return redirect()->route('sliders.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
