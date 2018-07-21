<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Navigation;
use App\Models\NavigationItems;
use File;

class NavigationController extends Controller
{
   /* protected $controllerName;
    public function __construct(){
        $this->controllerName = "navigations";
    }*/
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($nav_category = null)
    {
        $navigations  = Navigation::where('nav_category',$nav_category)->where('parent_page_id',0)->get();
        return view('admin.navigation.navigation_list', compact('navigations','nav_category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($category)
    {
        $request_segment = \Request::segment(4);
        if(intval($request_segment) == 0){
            $request_segment = \Request::segment(3);
            $current_max_position = Navigation::where('nav_category',$request_segment)->max('position');
        }else{
            $current_max_position = Navigation::where('parent_page_id',$request_segment)->max('position');
            $category .= '/'.$request_segment;
        }

        $next_position = $current_max_position + 1;

        return view('admin.navigation.navigation_create',compact('category','next_position'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $nav_category)
    {
        $this->validate($request,[
            'nav_name' => 'required|min:3',
            'alias' => 'required|unique:navigations',
            'caption' => 'required',

        ]);

        $data = $request->all();
        $data['nav_category'] = $nav_category;
        $request_segment = \Request::segment(4);
        $parent_id = intval($request_segment);
        $data['parent_page_id'] = $parent_id;
        $parent_id = ($parent_id == '')?'':'/'.$parent_id;

        if($request->hasFile('img_file')){
            $img_file = $request->file('img_file');
            $data['icon_image'] = time().'_'.$img_file->getClientOriginalName();
            $destinationPath = public_path('uploads/icon_image');
            $img_file->move($destinationPath,$data['icon_image']);
        }

       /* $file = $request->file('img_file');
        if($request->hasFile('img_file'))
        {
            if ($request->file('img_file')->isValid()) {
                $width = '170'; $height = '120';
                $data['icon_image'] = image_upload($file, $this->controllerName, $width, $height);
            }
        }*/

        if($request->hasFile('banner_file')){
            $banner_file = $request->file('banner_file');
            $data['banner_image'] = time().'_'.$banner_file->getClientOriginalName();
            $destinationPath = public_path('uploads/banner_file');
            $banner_file->move($destinationPath,$data['banner_image']);
        }

        if($request->hasFile('attachment')){
            $attachment_file = $request->file('attachment');
            $data['attachment'] = time().'_'.$attachment_file->getClientOriginalName();
            $destinationPath = public_path('uploads/attachment_file');
            $attachment_file->move($destinationPath,$data['attachment']);
        }

        $navigation = Navigation::create($data);

        /*if($request->hasFile('pg_file')){
            $orders = $request->input('pg_sort');
            $captions = $request->input('pg_content');
            $names = $request->input('pg_name');
            $files = $request->file('pg_file');

            foreach($files as $index => $image){
              $filename = time().'_'.$image->getClientOriginalName();
              $image->move(public_path('uploads/photo gallery'),$filename);

              $photo = NavigationItems::create([ 
                'sort'=>$orders[$index],
                'name'=>$names[$index],
                'content'=>$captions[$index],
                'file'=>$filename,
                'nav_id'=>$navigation->id
                    ]);  
            }
        }*/


        return redirect('admin/navigation-list/'.$nav_category.$parent_id)->with('success','Data Added Succssfully!!');

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($nav_category, $id)
    {
        $navigation = Navigation::find($id);
        return view('admin.navigation.navigation_edit', compact('navigation','nav_category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nav_category, $id)
    {
        $this->validate($request,[
            'nav_name' => 'required|min:3',
            'caption' => 'required',
            'banner_image' => 'mimes:jpeg,jpg,bmp,png'
        ]);
        $request->offsetUnset('_token');
        $request->offsetUnset('_method');

        $data = $request->all();
        $parent_id = get_parent($id);
        $parent_id = (intval($parent_id->parent_page_id) == 0)?'':'/'.intval($parent_id->parent_page_id);
        $navigation = Navigation::find($id);

        if($request->hasFile('icon_image')){
            if(file_exists(public_path('uploads/icon_image').'/'.$navigation->icon_image)){
                File::delete('uploads/icon_image/'.$navigation->icon_image);
            }
            $icon_image = $request->file('icon_image');
            $data['icon_image'] = time().'_'.$icon_image->getClientOriginalName();
            $destinationPath = public_path('uploads/icon_image');
            $icon_image->move($destinationPath,$data['icon_image']);
        }

         if($request->hasFile('banner_image')){
            if(file_exists(public_path('uploads/banner_file').'/'.$navigation->banner_image)){
                File::delete('uploads/banner_file/'.$navigation->banner_image);
            }
            $banner_image = $request->file('banner_image');
            $data['banner_image'] = time().'_'.$banner_image->getClientOriginalName();
            $destinationPath = public_path('uploads/banner_file');
            $banner_image->move($destinationPath,$data['banner_image']);
        }

        Navigation::where('id',$id)->update($data);

        $navigationItems = NavigationItems::all();
        NavigationItems::where('nav_id',$id)->update(['nav_id'=>$id]);

        return redirect('/admin/navigation-list/'.$nav_category . $parent_id )->with('success','Data Updated Successfully!!');
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($nav_category,$id)
    {
        $navigation = Navigation::find($id);
        $parent_id = get_parent($id);
        $parent_id = (intval($parent_id->parent_page_id) == 0)?'':'/'.intval($parent_id->parent_page_id);



        if(file_exists(public_path('uploads/icon_image/'.$navigation->icon_image))){
            File::delete(public_path('uploads/icon_image/'.$navigation->icon_image));
        }

        if(file_exists(public_path('uploads/banner_file/'.$navigation->banner_image))){
            File::delete(public_path('uploads/banner_file/'.$navigation->banner_image));
        }
        
        if(file_exists(public_path('uploads/attachment/'.$navigation->attachment))){
            File::delete(public_path('uploads/attachment/'.$navigation->attachment));
        }


        $navigation->delete($id);
        return redirect('admin/navigation-list/'.$nav_category.$parent_id)->with('success','Data Deleted Succssfully!!');
    }

    public function childNavigation($nav_category,$parent_id){
        $navigations = Navigation::where('nav_category',$nav_category)->where('parent_page_id',$parent_id)->get();
        return view('admin.navigation.navigation_list', compact('navigations','nav_category'));

    }


    /*Photo gallery*/

    public function showMediaList($nav_category=null,$id){
        $medias = NavigationItems::where('nav_id',$id)->paginate(5);
        return view('admin.gallery.photo_gallery_list',compact('nav_category','medias'));
    }

    public function addMedia($category,$id){
        return view('admin.gallery.add_photo_gallery',compact('category','id'));      
    }

    public function storeAlbum(Request $request,$nav_category){
        $this->validate($request,[
            'pg_file'=>'required'
        ]);
       $data = $request->all();
       $data['nav_category'] = $nav_category;

       $request_segment = \Request::segment(4);
       $parent_id = intval($request_segment);
       $data['parent_page_id'] = $parent_id;
       $parent_id = ($parent_id == '')?'':'/'.$parent_id;

       if($request->hasFile('pg_file')){
        $orders = $request->input('pg_sort');
        $names = $request->input('pg_name');
        $contents = $request->input('pg_caption');
        $files = $request->file('pg_file');


        foreach($files as $index=>$image){
            $filename = time().'_'.$image->getClientOriginalName();
            $destinationPath = public_path('uploads/photo_gallery');
            $image->move($destinationPath, $filename);
            $media = NavigationItems::create([
                                            'nav_id'=>$request->id,
                                            'sort'=>$orders[$index],
                                            'file'=>$filename,
                                            'name'=>$names[$index],
                                            'content'=>$contents[$index]
                                        
        ]);       
         }
       }

       return redirect('admin/navigation-list/'.$data['nav_category']. $parent_id."/showList")->with('success','Media Added Successfully!!');

           
    }

    public function updateMedia(Request $request, $id){
       
       $request->offsetUnset('_token'); // Confirmed _token field is gone.
       $request->offsetUnset('_method'); // Confirmed _mothod field is gone.
         
      $data = $request->all();
       $media = NavigationItems::find($id);

       if($request->hasFile('file')){
        if(file_exists(public_path('uploads/photo_gallery').'/'.$media->file)){
            unlink('uploads/photo_gallery/'.$media->file);

        }
        
        $filename = $request->file('file');
        $data['file'] = time().'_'.$request->file('file')->getClientOriginalName();
        $destinationPath = public_path('uploads/photo_gallery');
        $filename->move($destinationPath,$data['file']);
       }
     
        NavigationItems::where('id',$id)->update($data);
       return redirect()->back()->with('success', 'Media Updated'); 
    }

    public function deleteMedia($id){
        $media = NavigationItems::find($id);
        if(null == $media){
            abort (404);
        }
        if(!$media->delete()){
            abort(500);
        }

        return redirect()->back()->with('success','Media Deleted Successfully!!');
    }


    public function update_status(Request $request, $id){

       $data['page_status'] = $request->page_status;
       Navigation::where('id', $id)->update($data);
     }


}
