<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;//give the path of teacher model
use Session;
class TeacherController extends Controller
{
    public function showdata()
    {
        //$showdata=teacher::all();//teacher is table name
        $showdata=teacher::paginate(3);
        //return $showdata->all();
        return view('tcrud',compact('showdata'));//$showdata=showdata
    }
    public function adddata()
    {
        return view('adddata');
    }
    public function storedata(Request $request)
    {
        $request->validate([
            'name'=>'required|max:20',
            'email'=>'email',
            'gender'=>'required',
            'mobile'=>'required|max:10',
            'joindate'=>'required',
            'password'=>'required'
        ]);
        $tcrud=new Teacher(); //Teacher is model name,create a instance/object
        $tcrud->tname=$request->name;
        $tcrud->mail=$request->email;
        $tcrud->t_gender=$request->gender;
        $tcrud->t_mobile=$request->mobile;
        $tcrud->tpassword=md5($request->password);
        $tcrud->join_date=$request->joindate;
        
        $tcrud->save();
        Session::flash('msg','Data Successfully Added');
        return redirect()->back();
        // return $request->all();
    }
    // public function loginrecords(Request $request)
    // {
    //     $request->validate([
    //         'email'=>'email',
    //         'password'=>'required'
    //     ]);
    //     $tcrud=new Teacher();
    //     return view('loginrecordsview');
    // }
    public function editdata($id)
    {
        $editdata=Teacher::find($id);
        return view('editdataview',compact('editdata'));
    }
    public function updatedata(Request $request,$id)
    {
        $request->validate([
            'name'=>'required|max:20',
            'email'=>'email',
            'gender'=>'required',
            'mobile'=>'required|max:10',
            'joindate'=>'required',
            'password'=>'required',
            'uploadimage'=>'required'
        ]);
        $tcrud=Teacher::find($id); 
        $tcrud->tname=$request->name;
        $tcrud->mail=$request->email;
        $tcrud->t_gender=$request->gender;
        $tcrud->t_mobile=$request->mobile;
        $tcrud->tpassword=md5($request->password);
        $tcrud->join_date=$request->joindate;
        if($request->hashfile('uploadimage'))
        {
          $file=$request->file('uploadimage');
          $extension=$file->getClientOriginalExtension();
          $filename=time().".".$extension;
          $file->move('images'.$filename);
          $tcrud->imgupload=$filename;
        }
        $tcrud->save();
        Session::flash('msg','Data updated Successfully');
        return redirect('/');
        // return $request->all();
    }
    public function deletedata($id)
    {
        $deletedata=Teacher::find($id); 
        $deletedata->delete();
        Session::flash('msg','Data deleted Successfully');
        return redirect('/');
    }
    // public function logindata()
    // {
    //     return view('logindata');
    // }
    
}
?>
