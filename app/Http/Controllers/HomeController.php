<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Navigation;
use App\Models\NavigationItems;
use App\Models\GlobalSetting;
use App\Models\NavigationVideoItems;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $mainslider = Navigation::where('alias','main-slider')->where('page_status',1)->findOrfail(38);
        $sliders = NavigationItems::where('nav_id',$mainslider->id)->get();
        $blogs = Navigation::where('nav_category','Others')->where('parent_page_id',65)->where('page_status',1)->get();
        $abouts = Navigation::Where('nav_category','Main')->where('parent_page_id',10)->where('page_status',1)->get();

        $programmes = Navigation::where('nav_category','Main')->where('parent_page_id',11)->where('page_status',1)->get();
        $events = Navigation::where('nav_category','Others')->where('parent_page_id',71)->where('page_status',1)->get();
        //$gallery = Navigation::Where('alias','photo-gallery')->where('page_status',1)->find(75);
        $galleries = NavigationItems::where('nav_id',76)->get();
        $videos = NavigationVideoItems::where('nav_id',79)->get();  
        $our_partners = Navigation::where('nav_category','Next')->where('page_status',1)->find(77);
        $partners = NavigationItems::where('nav_id',$our_partners->id)->get();

        

        return view('frontend.home',compact('sliders','blogs','programmes','events','galleries','partners','abouts','videos'));
    }

    public function readMore(){
      $read = Navigation::where('parent_page_id', 65)->where('page_status',1)->get();
      return view("frontend.readMore",compact('read'));

    }

    public function front_pages($alias){
        $view_page = "frontend.single";
        $page = Navigation::where('alias',$alias)->first();   
           
        if(is_null($page)){
           return redirect('/');
       }

       if($page->parent_page_id === 0 && $page->page_type == 'Group'){            
        $parent = Navigation::where('alias',$alias)->first(); 
        $pages = Navigation::where('parent_page_id',$parent->id)->where('page_status',1)->get();
        $view_page = "frontend.group";    
                
    }elseif($page->parent_page_id !== 0 && $page->page_type == 'Group'){
        $parent = Navigation::where('alias',$alias)->first();         
        $pages = Navigation::where('parent_page_id',$parent->id)->where('page_status',1)->get();
        $view_page = "frontend.sub_group";           
    }

     if( $alias == 'gallery'){
       $galleries = Navigation::where('parent_page_id',29)->where('page_status',1)->get(); 
       $view_page = "frontend.gallery";  
       return view($view_page,compact('galleries'));
   }

    switch($alias){
      case "about-us":
      $view_page = "frontend.about";
      break;

      case "newsmedia":
      $view_page = "frontend.news_media";
      break;
    }

   
   return view($view_page, compact('page','pages','parent'));      
}

public function single($alias){
     $pages = Navigation::where('alias',$alias)->first(); 
     return view('frontend.readMore', compact('pages')); 
}

public function focus_period(){
  
}

  public function search(Request $request){
  dd($request->all());
  }

}
