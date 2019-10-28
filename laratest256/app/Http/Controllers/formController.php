<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class formController extends Controller
{
    public function storedata(Request $request)
    {
        $this->validate(request(),[
            'name' =>'required',
            'task' =>'required'

    ]);

if($request->hasfile('image')){
    $img = uniqid().'.jpg';
    $request->image->move('photos',$img);
    Task::create([
        'name'=>request ('name'),
        'task'=>request('task'),
        'img'=> $img
    ]);

}else{
    Task::create([
        'name'=>request ('name'),
        'task'=>request('task')
    ]);

    }
return redirect()->route('data.show');
    }
    public function show()
    {
        $alldata=Task::latest()->get();
        return view('welcome',compact('alldata'));
    }
public function edit($id)
      {
        $data =Task::find($id);
        return view('update',compact('data'));
      }
      public function update($id) {
          $this->validate(request(),[
              'name' =>'required',
              'task' =>'required'

          ]);
          Task::find($id)->update([
              'name'=>request ('name'),
              'task'=>request('task')
              ]);
          return redirect()->route('data.show')->with('updateSuccess','Updated Successfully');
      }
 public function delete($id){
         Task::find($id)->delete();
         return redirect()->route('data.show')->with('deleteSuccess','Deleted Successfully');
 }
}
