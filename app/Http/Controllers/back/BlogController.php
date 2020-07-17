<?php

namespace App\Http\Controllers\back;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Blog;
use Exception;
use Image;
use Illuminate\Support\Facades\File;
use Storage;
class BlogController extends Controller
{
    public $imagesPath = '';
    public $thumbnailPath = '';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view("back.blog.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("back.blog.add");
    }
    /**
     * @function CreateDirectory
     * create required directory if not exist and set permissions
     */
    public function createDirecrotory()
    {
        $paths = [
            'image_path' => public_path('blog/'),
            'thumbnail_path' => public_path('blog/thumbs/')
        ];
        foreach ($paths as $key => $path) {
            if(!File::isDirectory($path)){
                File::makeDirectory($path, 0777, true, true);
            }
        }
        $this->imagesPath = $paths['image_path'];
        $this->thumbnailPath = $paths['thumbnail_path'];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        // $arrJson = $request->post();
        // $obj = (object) $arrJson;
        // $url = $obj->cat_url;
        // // $catUrls = $this->getUrls($url);
        // $title = $obj->contentfull;
        // $title = $obj->title;
        // $content = $obj->content;
        // $featured_image = $obj->featured_image;
        // Blog::create(['title' => $title, 'content' => $content, 'featured_image' => $featured_image, 'user_id' => $userId, 'cat_url' => $url, 'contentfull' => $contentfull]);

        // return redirect()->route('blog.index')
        //     ->with('success', 'Blog created successfully');
        try {

            $arrJson = $request->post();
            $obj = (object) $arrJson;

            // $catUrls = $this->getUrls($url);
            $title = $obj->title;
            $metaTitle = $obj->meta_title;
            $metaKeyword = $obj->meta_keyword;
            $description = $obj->description;

            if($request->hasFile('image_url')) {

                $this->createDirecrotory();
                foreach ($request->image_url as $file) {
                    $image = Image::make($file);
                    // you can also use the original name
                    $imageName = time().'-'.$file->getClientOriginalName();
                    // save original image
                    $image->save($this->imagesPath.$imageName);
                    // resize and save thumbnail
                    $image->resize(150,150);
                    $image->save($this->thumbnailPath.$imageName);
                    $urlImage = $this->imagesPath.$imageName;
                    // $upload = new Image();
                    // $upload->file = $imageName;
                    // $upload->save();

                }
            }
            $blog = new Blog();
            $blog->title = $title;
            $blog->meta_title = $metaTitle;
            $blog->meta_keyword = $metaKeyword;
            $blog->description = $description;
            $blog->image_url = $urlImage;
            $blog->save();
           // dd(Storage::disk('public')->publicUrl($urlImage));
           //dd( $urlImage);
          // dd(['title' => $title, 'meta_title' => $metaTitle, 'meta_keyword' => $metaKeyword, 'description' => $description, 'image_url' =>  $urlImage]);
            // Blog::create(['title' => $title, 'meta_title' => $metaTitle, 'meta_keyword' => $metaKeyword, 'description' => $description, 'image_url' =>  $urlImage]);
            dd(3);
            return redirect()->route('blog.index')
                ->with('success', 'Blog created successfully');
        } catch (Exception $e) {
        }
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
