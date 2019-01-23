<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    //buat fungsi bau untuk index
    function index() {
      //echo "asoy geboyu";

      $custommer = Customer::get([  'custommer_id','name','address']);
      //var_dump($custommer);
      return view('custommer.index', compact('custommer'));
    }

    function create(){
      //echo "telo";
      return view('custommer.create');
    }

    function store(Request $request) {
      //echo "cobak";
      $txtId = $request->input('txt_id');
      $txtName = $request->input('txt_name');
      $txtAddress = $request->input('txt_address');

      echo $txtId." <br />".
           $txtName." <br /> ".
           $txtAddress;

      Customer::create ([
          'custommer_id' => $txtId,
          'name' => $txtName,
          'address' => $txtAddress
      ]);


      return redirect('/Customer');
    }

    public function show($id) {
      // return view('custommer/show'; ['custommer' =>
      //   Customer::where('custommer_id')]);

      $custommer = Customer::where('custommer_id', $id)->get();
      return view('custommer/show', compact('custommer'));
}

    public function edit($id) {
        $custommer = Customer::where('custommer_id', $id)->get();
        return view('custommer/edit', compact('custommer'));
    }

    public function update(Request $request, $id)
    {

      $txtId = $request->input('txt_id');
      $txtName = $request->input('txt_name');
      $txtAddress = $request->input('txt_address');

      Customer::where('custommer_id', $id)->update([
        'name' => $txtName,
        'address' => $txtAddress
      ]);
      return redirect('/Customer');
    }

    public function destroy($id)
    {
      $custommer = Customer::where('custommer_id', $id)->first();
      $custommer->delete();
      return redirect('/Customer');
    }
}
