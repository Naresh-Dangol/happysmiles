<?php
use App\Models\Navigation;
use App\Models\NavigationItems;


/*function image_upload($file, $name, $width, $height)
{
    $thumb_path = "uploads/".$name."/";

    // this is upload path relative to file system
    $uploadPath = $thumb_path;
    $extension = $file->getClientOriginalExtension();
    $filename = time() . Illuminate\Support\Str::random(20) . "." . $extension;

    // dd(is_dir($uploadPath));
    if (false == is_dir($uploadPath)) {
        mkdir($uploadPath, 0777, true);
    }

    $filename  = time() . '.' . $file->getClientOriginalExtension();
    Image::make($file->getRealPath())->resize($width, $height)->save($uploadPath . "/" . "thumbnail-" . $filename);
    Image::make($file)->save($uploadPath . $filename);
    $path_name = $uploadPath. $filename;
    return $path_name;
}*/

function get_parent($id){
	$parent = Navigation::where('id',$id)->first();
	return $parent;
}

function checkChild($param){
	$childCounter = Navigation::where('parent_page_id',$param)->count();
	return $childCounter;
}

function listChild($param){
	if($param == 0){
		return null;
	}
	$childnav = Navigation::where('parent_page_id',$param)->orderBy('position','asc')->where('page_status',1)->get();
	return $childnav;
}


function child($id){
	$child = Navigation::where('parent_page_id',$id)->where('page_status',1)->get();
	return $child;
}

// Show parent title
function parent_title($param){
	$title = Navigation::where('id',$param)->first();
	return $title->nav_name;
}

// Show parent alias
function parent_alias($param){
	$title = Navigation::where('id',$param)->first();
	return $title->alias;
}

// Show parent caption
function parent_caption($param){
	$title = Navigation::where('id',$param)->first();
	return $title->caption;
}

function parent_short_content($param){
	$short_content = Navigation::where('id',$param)->first();
	return $short_content->short_content;
}

function parent_long_content($param){
	$content = Navigation::where('id',$param)->first();
	return $content->long_content;
}

function parent_icon_image($param){
	$icon_image = Navigation::where('id',$param)->first();
	return $icon_image->icon_image;
}


//active menu class
function setActive($alias)
{
    return Request::is($alias) ? 'active' :  '';
}

function format_text($string) { 
$string = str_replace(array("\r\n", "\r", "\n"), "<br />", $string); 
return $string; 
} 



?>