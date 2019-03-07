<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Navigation;
use App\Models\NavigationItems;
use App\Models\GlobalSetting;
use App\Models\NavigationVideoItems;
use App\Models\Destination;
use App\Models\Intake;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $home_main_banner = get_parent(43);
      $sliders = Navigation::find($home_main_banner->id)->navigationitems;
      $about = get_parent(2);

      $study_abroad = Navigation::where('nav_category','Main')->where('parent_page_id',4)->where('page_status',1)->orderBy('position','ASC')->get();

      $services = Navigation::where('nav_category','Main')->where('parent_page_id',3)->where('page_status',1)->limit(6)->get();

      $testpreparations = listChild(11);
      $abroad_study_procedures = listChild(48);

      $upcoming_events = listChild(5);
      $testimonials = listchild(50);
      return view('frontend.home',compact('sliders','about','study_abroad','services','testpreparations','abroad_study_procedures','upcoming_events','testimonials'));
    }

    public function readMore(){
      $read = Navigation::where('parent_page_id', 65)->where('page_status',1)->get();
      return view("frontend.readMore",compact('read'));

    }

    public function front_pages($alias){

        $view_page = "frontend.single";
        $page = Navigation::where('alias',$alias)->first();
        // $photos = Navigation::find($page->id)->navigationitems;  

           
        if(is_null($page)){
           return redirect('/');
       }


       if($page->parent_page_id === 0 && $page->page_type == 'Group'){            
        $parent = Navigation::where('alias',$alias)->first(); 
        $pages = Navigation::where('parent_page_id',$parent->id)->where('page_status',1)->get();
        $view_page = "frontend.group";    
                
      }
      elseif($page->parent_page_id !== 0 && $page->page_type == 'Group'){
          $parent = Navigation::where('alias',$alias)->first();         
          $pages = Navigation::where('parent_page_id',$parent->id)->where('page_status',1)->get();
          $view_page = "frontend.sub_group";           
      }


       // if($page->parent_page_id !== 0 && $page->alias == 'gallery'){

       //    $parent = Navigation::where('alias',$alias)->first();       
       //    $albums = Navigation::where('parent_page_id',$parent->id)->where('page_status',1)->get();

       //    $view_page = "frontend.gallery";
       //    return view($view_page,compact('parent','albums'));
       //  }

      

      if( $alias == 'gallery'){
           $gallery = get_parent(5);
           $photos = Navigation::find($gallery->id)->navigationitems;
          $view_page = "frontend.gallery";
          return view($view_page,compact('photos','gallery'));
        
        }

        if($alias == 'videos'){
          $videos = NavigationVideoItems::where('nav_id',79)->get(); 
          $view_page = "frontend.video";
          return view($view_page,compact('videos'));
        }

    switch($alias){
      case "about-us":
      $view_page = "frontend.about";
      break;
      
      case "contact-us":
      $view_page = "frontend.contact";
      break; 

      case "study-destination":
      $view_page = "frontend.study-destination";
      break;

      case "courses":
      $view_page = "frontend.courses";
      break;
      
      case "visa-application-guidelines-and-documentation":
          $view_page ="frontend.visa_app_guidelines";
          break;

     
      
    }

   return view($view_page, compact('page','pages','parent','videos','photos'));      
}

public function single($alias){

     $pages = Navigation::where('alias',$alias)->first(); 
     return view('frontend.readMore', compact('pages')); 
}

  public function search(Request $request){
  dd($request->all());
  }

public function sample_form(){    
  return view('frontend.sample_document');
}

public function find_intake(Request $request){
  $data = Intake::select('intake','id')->where('destination_id',$request->id)->get();

  return response()->json($data);
}

}

