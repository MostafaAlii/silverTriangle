<?php

namespace App\Http\Controllers\Dashboard;
use App\Models\Slider;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;
class SliderController extends Controller {
    public function index() {
        return view('dashboard.sliders.index', ['title' => 'Sliders','sliders' => Slider::all()]);
    }

    public function store(Request $request) {
        try {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'status' => 'required|in:0,1',
                'en.name' => 'required',
                'en.description' => 'required',
                'en.note' => 'required',
                'ar.name' => 'required',
                'ar.description' => 'required',
                'ar.note' => 'required',
            ]);
            DB::beginTransaction();
            $request_data = $request->except(['image']);
            if ($request->hasFile('image')) {
                Image::make($request->image)
                    ->resize(300, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })
                    ->save(public_path('dashboard/uploads/slider_images/' . $request->image->hashName()));
                $request_data['image'] = $request->image->hashName();
            }
            Slider::create($request_data);
            DB::commit();
            session()->flash('success', 'تمت العملية بنجاح.');
            return redirect()->route('sliders.index');
        } catch (\Exception $e) {
            DB::rollBack();
            session()->flash('error', 'حدث خطأ أثناء العملية.');
            return back()->withInput();
        }
    }

    public function update(Request $request, string $id) {
        //
    }

    public function destroy(string $id) {
        //
    }
}