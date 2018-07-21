<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\GlobalSetting;
use Image;

class GlobalSettingController extends Controller
{
   public function global_setting(){
    $global_setting = GlobalSetting::find(1);
        return view('admin.global_setting',compact('global_setting'));
    }

    /*public function create(Request $request){
        $data = $request->all();

        if ($request->hasFile('favicon')) {
          $favicon = $request->file('favicon');
          $data['favicon'] = time() . '_' . $request->file('favicon')->getClientOriginalName();

          $destinationPath = public_path('uploads/icons');
            $favicon->move($destinationPath,$data['favicon']);           
        } 


      if ($request->hasFile('site_logo')) {

          $site_logo = $request->file('site_logo');

          $data['site_logo'] = time() . '_' . $request->file('site_logo')->getClientOriginalName();
          $destinationPath = public_path('uploads/icons');
          $site_logo->move($destinationPath,$data['site_logo']);          
        } 

        GlobalSetting::create($data);
        return redirect()->back()->with('success','Data Added Successfully!!');
    }*/

    
    public function updateSettings(Request $request){
          $request->offsetUnset('_token'); // Confirmed _token field is gone.
          $data = $request->all(); 
           $setting = GlobalSetting::find(1);
          if ($request->hasFile('favicon')) {
            $fav_icon_path = public_path('uploads/icons').'/' . $setting->favicon;
            if( !empty($setting->favicon)){ 
                if(file_exists($fav_icon_path)){             
                    unlink('uploads/icons/' . $setting->favicon);
                }
            }

          $favicon = $request->file('favicon');
          $data['favicon'] = time() . '_' . $request->file('favicon')->getClientOriginalName();
          $destinationPath = public_path('/uploads/icons');
          $fav = Image::make($favicon->getRealPath());
          $fav->resize(120,32,function($constraint){
            $constraint->aspectRatio();
        })->save($destinationPath . '/' . $data['favicon'] );            
      } 

      if ($request->hasFile('site_logo')) {
        $fav_icon_path = public_path('uploads/icons').'/' . $setting->favicon;
            if( !empty($setting->site_logo)){  
                if(file_exists($fav_icon_path))    {
                  unlink('uploads/icons/' . $setting->site_logo);  
                }            
            }

        $site_logo = $request->file('site_logo');
        $data['site_logo'] = time() . '_' . $request->file('site_logo')->getClientOriginalName();

        $destinationPath = public_path('uploads/icons');
        $logo = Image::make($site_logo->getRealPath());
        $logo->resize(94,61,function($constraint){
            $constraint->aspectRatio();
        })->save($destinationPath . '/' . $data['site_logo'] );
    }       

    GlobalSetting::where('id', 1)->update($data);
    return redirect()->back()->with('success', 'Settings update has been successful!');
}

}
