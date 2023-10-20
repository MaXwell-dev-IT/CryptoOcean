<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\About;
use App\Models\Guide;
use App\Models\Image;
use App\Models\Learn;
use App\Models\Slider;
use App\Models\Mission;
use App\Models\Visitor;
use App\Models\Articles;
use Ramsey\Uuid\Guid\Guid;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\CryptoInformation;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Artisan;

class DashboardController extends Controller
{
    public function blockUser( $id)
    {
        $user = User::find($id);
         $user ->status = 1 ; 
        $user->update(); 
        return redirect()-> back() -> with('status', 'Blocked user DONE' );
    }
    public function unblockUser( $id)
    {
        $user = User::find($id); 
        $user ->status = 0 ; 
        $user->update();
        return redirect()-> back() -> with('status', 'Actived user DONE' );
    }
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()-> back() -> with('status', 'Deleted user DONE');
    }


    //slider

    public function showSlider()
    {

        $slider = Slider::all();
        return view('admin.slider.table-slider' , compact('slider'   ));
    }


    public function addSlider()
    {
    
        return view('admin.slider.add-slider' );
    }

    public function storeSlider(Request $request)
    {

        $request->validate([
          'image'=>'required|mimes:jpeg,jpg,png'
        ],[
         'image.required'=>'you must add image'
        ]);
        
      
        $slider = new Slider();
        $slider->title_en = $request->input('title_en');
        $slider->title_ar = $request->input('title_ar');
        $slider->slug =  Str::slug($request->title_en, '-') . '-' .rand(0,1000);
        

        if($request->hasfile('image'))
        {
            
          $file = $request->file('image');
          $extention = $file ->getClientOriginalExtension();
          $filename = time().'.'.$extention;
          $file->move('uploads/images/slider/' , $filename);
          $slider->image = $filename ;
        }
        
        $slider->save();
         
            return redirect()-> back()     ->with('success', 'Slider created successfully.');
        }




    public function editSlider($id)
    {

        $slider = Slider::findOrFail($id);
       
        return view('admin.slider.edit-slider' , compact('slider',  ));



    }
    public function updateSlider(Request $request, $id)
    {

     
        $slider = Slider::find($id);
        $slider->title_en = $request->input('title_en');
        $slider->title_ar = $request->input('title_ar');
        $slider->slug =  Str::slug($request->title_en, '-') . '-' .rand(0,1000);

        if($request->hasfile('image'))
        {
            $destination = 'uploads/images/slider/'.$slider->image;
            if(File::exists($destination))
            {
                File::delete($destination);

            }
          $file = $request->file('image');
          $extention = $file ->getClientOriginalExtension();
          $filename = time().'.'.$extention;
          $file->move('uploads/images/slider/' , $filename);
          $slider->image = $filename ;
        }
        $slider->update();
           
            return redirect()-> back() -> with('status', 'Updated DONE');
    }
    


    public function deleteSlider($id)
    {
        $slider = Slider::find($id);
        $destination = 'uploads/images/slider/'.$slider->image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $slider->delete();
        return redirect()-> back() -> with('status', 'Deleted DONE');
    }


    
    //about

    public function showAbout()
    {
    
        $about = About::all();
        return view('admin.about.table-about' , compact('about'));
    }


    public function addAbout()
    {

        return view('admin.about.add-about' );
    }

    public function storeAbout(Request $request)
    {
        $request->validate([
            'title_en' =>['required', 'string'],
            'title_ar' =>['required', 'string'],
            'image'=>'required|mimes:jpeg,jpg,png'
          ],[
           'image.required'=>'you must add image',
           'title_en.required'=>'you must add english description',
           'title_ar.required'=>'you must add arabic description'

          ]);
        $about = new About();
        $about->title_en = $request->input('title_en');
        $about->title_ar = $request->input('title_ar');
        $about->slug =  Str::slug($request->title_en, '-') . '-' .rand(0,1000);
        

        if($request->hasfile('image'))
        {
            
          $file = $request->file('image');
          $extention = $file ->getClientOriginalExtension();
          $filename = time().'.'.$extention;
          $file->move('uploads/images/about/' , $filename);
          $about->image = $filename ;
        }
        
        $about->save();
         
            return redirect()-> back()     ->with('success', 'About created successfully.');
        }




    public function editAbout($id)
    {

        $about = About::findOrFail($id);
       
        return view('admin.about.edit-about' , compact('about'  ));



    }
    public function updateAbout(Request $request, $id)
    {

     
        $about = About::find($id);
        $about->title_en = $request->input('title_en');
        $about->title_ar = $request->input('title_ar');
        $about->slug =  Str::slug($request->title_en, '-') . '-' .rand(0,1000);

        if($request->hasfile('image'))
        {
            $destination = 'uploads/images/about/'.$about->image;
            if(File::exists($destination))
            {
                File::delete($destination);

            }
          $file = $request->file('image');
          $extention = $file ->getClientOriginalExtension();
          $filename = time().'.'.$extention;
          $file->move('uploads/images/about/' , $filename);
          $about->image = $filename ;
        }
        $about->update();
           
            return redirect()-> back() -> with('status', 'Updated DONE');
    }
    


    public function deleteAbout($id)
    {
        $about = About::find($id);
        $destination = 'uploads/images/about/'.$about->image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $about->delete();
        return redirect()-> back() -> with('status', 'Deleted DONE');
    }

        //information

        public function showInfo()
        {

            $info = CryptoInformation::all();
            return view('admin.information.table-information' , compact('info' ));
        }


        public function addInfo()
        {
 
            return view('admin.information.add-information' );
        }

        public function storeInfo(Request $request)
        {
        
            $info = new CryptoInformation();
            $info->ar_about = $request->input('ar_about');
            $info->en_about = $request->input('en_about');

            $info->email1 = $request->input('email1');
            $info->email2 = $request->input('email2');
            $info->phone1 = $request->input('phone1');
            $info->phone2 = $request->input('phone2');
            $info->twitter1 = $request->input('twitter1');
            $info->twitter2 = $request->input('twitter2');
            $info->telegram1 = $request->input('telegram1');
            $info->telegram2 = $request->input('telegram2');
            $info->telegram3 = $request->input('telegram3');
            $info->youtube = $request->input('youtube');
            $info->en_name = $request->input('en_name');
            $info->ar_name = $request->input('ar_name');
            if($request->hasfile('logo'))
            {
                
            $file = $request->file('logo');
            $extention = $file ->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/images/information/' , $filename);
            $info->logo = $filename ;
            }
            
            $info->save();
            
                return redirect()-> back()     ->with('success', 'Information created successfully.');
            }




        public function editInfo($id)
        {

            $info = CryptoInformation::findOrFail($id);
            
            return view('admin.information.edit-information' , compact('info' ));



        }
        public function updateInfo(Request $request, $id)
        {

        
            $info = CryptoInformation::find($id); 
            $info->ar_about = $request->input('ar_about');
            $info->en_about = $request->input('en_about');
        
            $info->email1 = $request->input('email1');
            $info->email2 = $request->input('email2');
            $info->phone1 = $request->input('phone1');
            $info->phone2 = $request->input('phone2');
            $info->twitter1 = $request->input('twitter1');
            $info->twitter2 = $request->input('twitter2');
            $info->telegram1 = $request->input('telegram1');
            $info->telegram2 = $request->input('telegram2');
            $info->telegram3 = $request->input('telegram3');
            $info->youtube = $request->input('youtube');
            $info->en_name = $request->input('en_name');
            $info->ar_name = $request->input('ar_name');
            if($request->hasfile('logo'))
            {
                $destination = 'uploads/images/information/'.$info->logo;
                if(File::exists($destination))
                {
                    File::delete($destination);

                }
            $file = $request->file('logo');
            $extention = $file ->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/images/information/' , $filename);
            $info->logo = $filename ;
            }
            $info->update();
                
                return redirect()-> back() -> with('status', 'Updated DONE');
        }

                    
            //article

            public function showArticle()
            {

                $article = Articles::all();
                return view('admin.article.table-article' , compact('article' ));
            }


            public function addArticle()
            {

                return view('admin.article.add-article' );
            }

            public function storeArticle(Request $request)
            {
            
                $article = new Articles();
                $article->en_name = $request->input('en_name');
                $article->ar_name = $request->input('ar_name');
                $article->en_desciption = $request->input('en_desciption');
                $article->ar_desciption = $request->input('ar_desciption');
                $article->en_writer = $request->input('en_writer');
                $article->ar_writer = $request->input('ar_writer');
                $article->slug =  Str::slug($request->en_name, '-') . '-' .rand(0,1000);

    
                if($request->hasfile('image_major'))
                {
                    
                $file = $request->file('image_major');
                $extention = $file ->getClientOriginalExtension();
                $filename = time().'.'.$extention;
                $file->move('uploads/images/article/' , $filename);
                $article->image_major = $filename ;
                }

     
                
                $article->save();
                    
                if($request->hasFile("images")){
                    $files=$request->file("images");
                    foreach($files as $file){
                        $filename=time().'_'.$file->getClientOriginalName();
                    
                        $file->move('uploads/images/article/' , $filename);
                        Image::create( [
                            'article_id' => $article->id,
                            'image' => $filename 
                        ]) ;

                    }
                }
                    return redirect()-> back()     ->with('success', 'article created successfully.');
                }




            public function editArticle($id)
            {

                $article = Articles::findOrFail($id);
                
                return view('admin.article.edit-article' , compact('article' ));



            }
            public function updateArticle(Request $request, $id)
            {

            
                $article = Articles::find($id);  $article->en_name = $request->input('en_name');
                $article->ar_name = $request->input('ar_name');
                $article->en_desciption = $request->input('en_desciption');
                $article->ar_desciption = $request->input('ar_desciption');
                $article->en_writer = $request->input('en_writer');
                $article->ar_writer = $request->input('ar_writer');
                $article->slug =  Str::slug($request->en_name, '-') . '-' .rand(0,1000);

                if($request->hasfile('image_major'))
                {
                    
                $file = $request->file('image_major');
                $extention = $file ->getClientOriginalExtension();
                $filename = time().'.'.$extention;
                $file->move('uploads/images/article/' , $filename);
                $article->image_major = $filename ;
                }


                $article->update();
                
                if($request->hasFile("images")){
                    $files=$request->file("images");
                    foreach($files as $file){
                        $filename=time().'_'.$file->getClientOriginalName();
                    
                        $file->move('uploads/images/article/' , $filename);
                        Image::create( [
                            'article_id' => $article->id,
                            'image' => $filename 
                        ]) ;

                    }
                }
                    
                    return redirect()-> back() -> with('status', 'Updated DONE');
            }
            
        public function deleteimage($id){
            $images=Image::findOrFail($id);
            if (File::exists("uploads/images/article/".$images->image)) {
            File::delete("uploads/images/article/".$images->image);
        }

        image::find($id)->delete();
        return back();
    }


    public function deleteArticle($id)
    {
        $article = Articles::find($id);
        $destination = 'uploads/images/article/'.$article->image_major;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $article->delete();
        return redirect()-> back() -> with('status', 'Deleted DONE');
    }

    //mission
              

            public function showMission()
            {

                $mission = Mission::all();
                return view('admin.mission.table-mission' , compact('mission' ));
            }


            public function addMission()
            {

                return view('admin.mission.add-mission' );
            }

            public function storeMission(Request $request)
            {
            
                $mission = new Mission();
                $mission->en_name = $request->input('en_name');
                $mission->ar_name = $request->input('ar_name');
                $mission->en_glance = $request->input('en_glance');
                $mission->ar_glance = $request->input('ar_glance');
                $mission->en_registration_mechanism = $request->input('en_registration_mechanism');
                $mission->ar_registration_mechanism = $request->input('ar_registration_mechanism');
                $mission->en_win_mechanism = $request->input('en_win_mechanism');
                $mission->ar_win_mechanism = $request->input('ar_win_mechanism');
                $mission->tele1 = $request->input('tele1');
                $mission->tele2 = $request->input('tele2');
                $mission->tele3 = $request->input('tele3');
                $mission->tele4 = $request->input('tele4');
                $mission->twitter = $request->input('twitter');
                $mission->link = $request->input('link');
                $mission->discord = $request->input('discord');
                $mission->slug =  Str::slug($request->en_name, '-') . '-' .rand(0,1000);

    
                if($request->hasfile('image_major'))
                {
                    
                $file = $request->file('image_major');
                $extention = $file ->getClientOriginalExtension();
                $filename = time().'.'.$extention;
                $file->move('uploads/images/mission/' , $filename);
                $mission->image_major = $filename ;
                }

     
                
                $mission->save();
              
             
                    return redirect()-> back()     ->with('success', 'mission created successfully.');
                }




            public function editMission($id)
            {

                $mission = Mission::findOrFail($id);
                
                return view('admin.mission.edit-mission' , compact('mission' ));



            }
            public function updateMission(Request $request, $id)
            {

            
                $mission = Mission::find($id);
                $mission->en_name = $request->input('en_name');
                $mission->ar_name = $request->input('ar_name');
                $mission->en_glance = $request->input('en_glance');
                $mission->ar_glance = $request->input('ar_glance');
                $mission->en_registration_mechanism = $request->input('en_registration_mechanism');
                $mission->ar_registration_mechanism = $request->input('ar_registration_mechanism');
                $mission->en_win_mechanism = $request->input('en_win_mechanism');
                $mission->ar_win_mechanism = $request->input('ar_win_mechanism');
                $mission->tele1 = $request->input('tele1');
                $mission->tele2 = $request->input('tele2');
                $mission->tele3 = $request->input('tele3');
                $mission->tele4 = $request->input('tele4');
                $mission->twitter = $request->input('twitter');
                $mission->link = $request->input('link');
                $mission->discord = $request->input('discord');
                $mission->slug =  Str::slug($request->en_name, '-') . '-' .rand(0,1000);

    
                if($request->hasfile('image_major'))
                {
                    
                $file = $request->file('image_major');
                $extention = $file ->getClientOriginalExtension();
                $filename = time().'.'.$extention;
                $file->move('uploads/images/mission/' , $filename);
                $mission->image_major = $filename ;
                }

     
                $mission->update();
          
                    return redirect()-> back() -> with('status', 'Updated DONE');
            }
            



    public function deleteMission($id)
    {
        $mission = Mission::find($id);
        $destination = 'uploads/images/mission/'.$mission->image_major;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $mission->delete();
        return redirect()-> back() -> with('status', 'Deleted DONE');
    }

    
    //guide
              

    public function showGuide()
    {

        $guide = Guide::all();
        return view('admin.guide.table-guide' , compact('guide' ));
    }


    public function addGuide()
    {

        return view('admin.guide.add-guide' );
    }

    public function storeGuide(Request $request)
    {
    
        $guide = new Guide();
        $guide->en_name = $request->input('en_name');
        $guide->ar_name = $request->input('ar_name');
        $guide->en_glance = $request->input('en_glance');
        $guide->ar_glance = $request->input('ar_glance');
        $guide->en_registration_mechanism = $request->input('en_registration_mechanism');
        $guide->ar_registration_mechanism = $request->input('ar_registration_mechanism');
        $guide->en_play_mechanism = $request->input('en_play_mechanism');
        $guide->ar_play_mechanism = $request->input('ar_play_mechanism');
        $guide->tele1 = $request->input('tele1');
        $guide->tele2 = $request->input('tele2');
        $guide->tele3 = $request->input('tele3');
        $guide->tele4 = $request->input('tele4');
        $guide->twitter = $request->input('twitter');
        $guide->link = $request->input('link');
        $guide->discord = $request->input('discord');
        $guide->slug =  Str::slug($request->en_name, '-') . '-' .rand(0,1000);


        if($request->hasfile('image_major'))
        {
            
        $file = $request->file('image_major');
        $extention = $file ->getClientOriginalExtension();
        $filename = time().'.'.$extention;
        $file->move('uploads/images/guide/' , $filename);
        $guide->image_major = $filename ;
        }


        
        $guide->save();
      
     
            return redirect()-> back()     ->with('success', 'guide created successfully.');
        }




    public function editGuide($id)
    {

        $guide = Guide::findOrFail($id);
        
        return view('admin.guide.edit-guide' , compact('guide' ));



    }
    public function updateGuide(Request $request, $id)
    {

    
        $guide = Guide::find($id);
        $guide->en_name = $request->input('en_name');
        $guide->ar_name = $request->input('ar_name');
        $guide->en_glance = $request->input('en_glance');
        $guide->ar_glance = $request->input('ar_glance');
        $guide->en_registration_mechanism = $request->input('en_registration_mechanism');
        $guide->ar_registration_mechanism = $request->input('ar_registration_mechanism');
        $guide->en_play_mechanism = $request->input('en_play_mechanism');
        $guide->ar_play_mechanism = $request->input('ar_play_mechanism');
        $guide->tele1 = $request->input('tele1');
        $guide->tele2 = $request->input('tele2');
        $guide->tele3 = $request->input('tele3');
        $guide->tele4 = $request->input('tele4');
        $guide->twitter = $request->input('twitter');
        $guide->link = $request->input('link');
        $guide->discord = $request->input('discord');
        $guide->slug =  Str::slug($request->en_name, '-') . '-' .rand(0,1000);


        if($request->hasfile('image_major'))
        {
            
        $file = $request->file('image_major');
        $extention = $file ->getClientOriginalExtension();
        $filename = time().'.'.$extention;
        $file->move('uploads/images/guide/' , $filename);
        $guide->image_major = $filename ;
        }


        $guide->update();
  
            return redirect()-> back() -> with('status', 'Updated DONE');
     }
    



        public function deleteGuide($id)
        {
        $guide = Guide::find($id);
        $destination = 'uploads/images/guide/'.$guide->image_major;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $guide->delete();
        return redirect()-> back() -> with('status', 'Deleted DONE');
        }

         //learn
              
    public function showLearn()
    {

        $learn = Learn::all();
        return view('admin.learn.table-learn' , compact('learn' ));
    }


    public function addLearn()
    {

        return view('admin.learn.add-learn' );
    }

    public function storeLearn(Request $request)
    {
    
        $learn = new Learn();
        $learn->en_name = $request->input('en_name');
        $learn->ar_name = $request->input('ar_name');
        $learn->youtube = $request->input('youtube');

        
        $learn->slug =  Str::slug($request->en_name, '-') . '-' .rand(0,1000);
        if($request->hasfile('image_major'))
        {
            
        $file = $request->file('image_major');
        $extention = $file ->getClientOriginalExtension();
        $filename = time().'.'.$extention;
        $file->move('uploads/images/learn/' , $filename);
        $learn->image_major = $filename ;
        }

        $learn->save();
      
     
            return redirect()-> back()     ->with('success', 'learn created successfully.');
        }




    public function editLearn($id)
    {

        $learn = Learn::findOrFail($id);
        
        return view('admin.learn.edit-learn' , compact('learn' ));



    }
    public function updateLearn(Request $request, $id)
    {

    
        $learn = Learn::find($id);
        $learn->en_name = $request->input('en_name');
        $learn->ar_name = $request->input('ar_name');
        $learn->youtube = $request->input('youtube');

        $learn->slug =  Str::slug($request->en_name, '-') . '-' .rand(0,1000);
        if($request->hasfile('image_major'))
        {
            
        $file = $request->file('image_major');
        $extention = $file ->getClientOriginalExtension();
        $filename = time().'.'.$extention;
        $file->move('uploads/images/learn/' , $filename);
        $learn->image_major = $filename ;
        }

     
        
        $learn->update();
  
            return redirect()-> back() -> with('status', 'Updated DONE');
    }
    



        public function deleteLearn($id)
        {
        $learn = Learn::find($id);
        $destination = 'uploads/images/learn/'.$learn->image_major;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        
        $learn->delete();
        return redirect()-> back() -> with('status', 'Deleted DONE');
        }
}
