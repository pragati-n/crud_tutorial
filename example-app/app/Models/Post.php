<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File as FacadesFile;
use Illuminate\Support\Facades\Cache;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post extends Model
{
    use HasFactory;

    protected $table = "post";
    /* For data saved in html files 
    public $title;
    public $body;
    public $published_date;
    public $excerpt;

    */
    /* For data saved in html files 
    public function __construct($title='',$body='',$date='',$excerpt ='')
    {
       $this->title =  $title;
       $this->body =  $body;
       $this->published_date =  $date;
       $this->excerpt =  $excerpt;
   
    }
    */

    public static function find_all()
    {
      
       // return cache()->rememberForever("blogs.posts",function(){
            return  collect(FacadesFile::files(resource_path("posts/")))->map(function($file){
                $doc =  YamlFrontMatter::parse(file_get_contents(($file)));
            
                $doc_obj = [ 
                    'title' => $doc->title, 
                    'body' => $doc->body(),
                    'published_date' => $doc->published_date
                ];
               
                return  $doc_obj;
            })->sortByDesc('published_date');
        //});
    }

    /* public static function find($slug)
    {
       
        $file =  resource_path("posts/".$slug.".html");
        if(file_exists( $file))
        {
             return cache()->remember("blogs.{$slug}",5,function() use ($file) {
                 return file_get_contents( $file);
            });
        }
        else
        {
            throw new ModelNotFoundException();
        }
    } */

   
}
