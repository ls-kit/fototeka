<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
        $pages = Settings::all();
        return view('admin.settings.index', compact('pages'));
    }

    public function update(Request $request, $settings_id )
    {
        $settings = Settings::find($settings_id);

        $data = request('settings');
        if($settings->page == 'main'){
            $settings->settings = $this->updateMainPage($data,$settings);
        }
        if($settings->page == 'about'){
            $settings->settings = $this->updateAboutPage($data,$settings);
        }
        if($settings->page == 'footer'){
            $settings->settings = $this->updateFooter($data,$settings);
        }
        $settings->update();

        return redirect('admin/settings')->with('message','Settings Updated successfully');
    }
    public function updateAboutPage($data,$settings){
        $uploadImg = [];
        if (request()->has('settings.images') && \request('settings.images') != null){

            foreach(\request('settings.images') as $key => $image){
                $file = $image;
                $filename = time() . '_'.$key.'.' . $file->getClientOriginalExtension();
                $file->move('uploads/settings/', $filename);
                $uploadImg[] = $filename;
                $data['images'][] = $filename;
            }
        }

        $oldSettings = $settings->settings;

        foreach($settings->settings as $key => $setting){
            if(isset($data[$key]) && $data[$key] != null) {
                if($key == 'images' && $uploadImg != false){
                    $oldSettings[$key] = $uploadImg;
                }else{
                    $oldSettings[$key] = $data[$key];
                }
            } else {
                if($key != 'images')
                    $oldSettings[$key] = null;
            }
        }

        return $oldSettings;
    }

    public function updateMainPage($data,$settings){
        $uploadImgWhite = false;
        $uploadImgBlack = false;
        if (isset($data['logoWhite']) && $data['logoWhite'] != null){
            $file = request()->file('settings.logoWhite');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/settings/', $filename);
            $uploadImgWhite = $filename;
            $data['logoWhite'] = $filename;
        }
        if (isset($data['logoBlack']) && $data['logoBlack'] != null){
            $file = request()->file('settings.logoBlack');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/settings/', $filename);
            $uploadImgBlack = $filename;
            $data['logoBlack'] = $filename;
        }
        $oldSettings = $settings->settings;

        foreach($settings->settings as $key => $setting){
            if(isset($data[$key]) && $data[$key] != null) {
                if($key == 'logoWhite' && $uploadImgWhite != false){
                    $oldSettings[$key] = $uploadImgWhite;
                }elseif($key == 'logoBlack' && $uploadImgBlack != false){
                    $oldSettings[$key] = $uploadImgBlack;
                }else{
                    $oldSettings[$key] = $data[$key];
                }
            } else {
                if($key != 'logoWhite' && $key != 'logoBlack')
                    $oldSettings[$key] = null;
            }
        }
        return $oldSettings;
    }

    public function updateFooter($data,$settings){
        $uploadImgWhite = false;
        $uploadImgBlack = false;
        if (isset($data['logoWhite']) && $data['logoWhite'] != null){
            $file = request()->file('settings.logoWhite');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/settings/', $filename);
            $uploadImgWhite = $filename;
            $data['logoWhite'] = $filename;
        }
        if (isset($data['logoBlack']) && $data['logoBlack'] != null){
            $file = request()->file('settings.logoBlack');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/settings/', $filename);
            $uploadImgBlack = $filename;
            $data['logoBlack'] = $filename;
        }
        $oldSettings = $settings->settings;

        foreach($settings->settings as $key => $setting){
            if(isset($data[$key]) && $data[$key] != null) {
                if($key == 'logoWhite' && $uploadImgWhite != false){
                    $oldSettings[$key] = $uploadImgWhite;
                }elseif($key == 'logoBlack' && $uploadImgBlack != false){
                    $oldSettings[$key] = $uploadImgBlack;
                }else{
                    $oldSettings[$key] = $data[$key];
                }
            } else {
                if($key != 'logoWhite' && $key != 'logoBlack')
                    $oldSettings[$key] = null;
            }
        }
        return $oldSettings;
    }
}
