<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Banner;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class BannerController extends Controller
{
  public function index()
  {

    $banners = Banner::where('status', 'active')->orderBy('id', 'desc')->limit(6)->get();

    // dd($banners);

    return view("admin.banner-sliders.index", compact('banners'));
  }

  public function add()
  {
    return view("admin.banner-sliders.create");
  }

  public function show($id)
  {
    $banner = Banner::find($id);

    return view("admin.banner-sliders.show", compact('banner'));
  }

  public function edite(Request $request, $id)
  {

    $banner = Banner::where('id', $id)->update([
      "title" => $request->input("titre"),
      "photo" => $request->input("photo")
    ]);

    return view("admin.banner-sliders.index");
  }

  public function saveBanner(Request $request)
  {
    // return $request->all();
    $this->validate($request, [
      'title' => 'string|required|max:50',
      'description' => 'string|nullable',
      'photo' => 'required',
      'status' => 'required|in:active,inactive',
    ]);
    $data = $request->all();
    $slug = Str::slug($request->title);
    $count = Banner::where('slug', $slug)->count();
    $data['photo'] = $request->file('photo');

    $filename = time() . '.' . $data['photo']->getClientOriginalExtension();
    $location = 'storage/banner';
    $data['photo']->move($location, $filename);
    $data['photo'] = $filename;
    if ($count > 0) {
      $slug = $slug . '-' . date('ymdis') . '-' . rand(0, 999);
    }
    $data['slug'] = $slug;
    // return $slug;
    $status = Banner::create($data);
    if ($status) {
      request()->session()->flash('success', 'Banner successfully added');
    } else {
      request()->session()->flash('error', 'Error occurred while adding banner');
    }
    return back();
  }

  public function update(Request $request, Banner $banner)
  {
    $this->validate($request, [
      'title' => 'string|required|max:50',
      'description' => 'string|nullable',
      'photo' => 'required',
      'status' => 'required|in:active,inactive',
    ]);

    $data = $request->all();
    $slug = Str::slug($request->title);
    $count = Banner::where('slug', $slug)->count();
    $data['photo'] = $request->file('photo');

    // Il faudrait éventullement gérer la suppression de la précédente bannière s'il y'a eu mise à jour
    // de l'image de celle-ci
    $filename = time() . '.' . $data['photo']->getClientOriginalExtension();
    $location = 'storage/banner';
    $data['photo']->move($location, $filename);
    $data['photo'] = $filename;

    if ($count > 0) {
      $slug = $slug . '-' . date('ymdis') . '-' . rand(0, 999);
    }
    $data['slug'] = $slug;

    $status = $banner->update($data);

    if ($status) {
      request()->session()->flash('success', 'Banner successfully updated');
    } else {
      request()->session()->flash('error', 'Error occurred while updating banner');
    }
    return back();
  }

  public function destroy(Banner $banner)
  {
    $banner_title = $banner->title;
    $banner->delete();
    return redirect()->route('banner')->with("info", "La bannière $banner_title a été supprimée avec succès.");

  }
}
