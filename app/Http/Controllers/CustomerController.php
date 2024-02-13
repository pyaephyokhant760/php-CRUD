<?php

namespace App\Http\Controllers;

use App\Models\customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
     // contact
     public function contact() {
        $data = customer::get();
        return view('contact',compact('data'));
    }

    // view
    public function view(Request $request) {
        $data = $this->addData($request);
        customer::create($data);
        return redirect()->route('contact#page');
    }

    // delete
    public function delete($id) {
        customer::where('id',$id)->delete();
        return back();
    }

    // read
    public function read($id) {
        $data = customer::where('id',$id)->first();
        return view('view',compact('data'));
    }

    // edit
    public function edit($id) {
        $data = customer::where('id',$id)->first();
        return view('edit',compact('data'));
    }

    // postedit
    public function postedit(Request $request,$id) {
        $data = $this->addData($request);
        customer::where('id',$id)->update($data);
        return redirect()->route('contact#page');
    }

    // addData
    private function addData($request) {
        return [
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'description' => $request->description
        ];
    }
}
