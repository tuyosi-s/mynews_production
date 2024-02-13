<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;

use Carbon\Carbon;
use App\Models\Person;

class ProfileController extends Controller
{
    //
    public function add()
    {
       return  view('admin/profile/create'); 
    }
    public function create(Request $request)
    {
        //ベーシックタームNo24課題にて以下を追記。
        //Validationを行う。
        $this->validate($request,Profile::$rules); 
        
        $profile = new profile;
        $form = $request->all();
        
    //フォームから送信されてきたtokenを削除
        unset($form['_token']);    
    
    //データベースに保存
        $profile->fill($form);
        $profile->save();
        
        return redirect('admin/profile');
    }    
    
    public function index(Request $request)
    {
        $cond_name = $request->cond_name;
        if ($cond_name != '') {
            // 検索されたら検索結果を取得する
            $posts = Profile::where('name', $cond_name)->get();
        } else {
            // それ以外はすべてのプロフィールを取得する
            $posts = Profile::all();
        }
        return view('admin.profile.index', ['posts' => $posts, 'cond_name' => $cond_name]);
    }
    
    
    public function edit(Request $request)
    {
        //dd('editが実行された');
        $profile = Profile::find($request->id);
        if(empty($profile)){
            abort(404);
        }
        return view('admin/profile/edit',['profile_form' => $profile]);
    }

    public function update(Request $request)
    {
        //Varidationをかける
        $this->validate($request,Profile::$rules);
        //Profile Modelからデータを取得する
        $profile = Profile::find($request->id);
        //送信されてきたフォームデータを格納する
        $profile_form =$request->all();
        
        unset($profile_form['_token']);
        
        //該当するデータを上書きして保存
        $profile->fill($profile_form)->save();
        
        $person = new Person();
        $person->profile_id = $profile->id;
        $person->edited_at = Carbon::now();
        $person->save();
        
        return redirect('admin/profile');
        //※return redirect('admin/profile/edit?id=' . $profile->id);
        
    }
    
    public function delete(Request $request)
    {
       //
       $profiles = Profile::find($request->id); 
       
       $profiles->delete();
       
       return redirect('admin/profile/');
        
        
    }
}
