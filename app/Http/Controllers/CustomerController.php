<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index()
    {
        $data = DB::table("customers")->get();
        return view('customer.index',['customers'=>$data]);
    } 

    public function delete($id) {
        $customer = customer::find($id);
        $customer->delete();

        return redirect('/')->with('success_del', 'Customer deleted successfully');
    }

    public function edit($id) {
        $data=Customer::findorFail($id);
        return view('customer.edit',['customer'=>$data]);
    }

    public function updateCustomer(Request $req) {
        $req->validate([
            "lastName"=>['required','min:4'],
            "firstName"=>['required','min:4'],
            "email"=>['required','email',
            Rule::unique('users','email'),],
            "contactNumber"=>['required','min:4'],
            "address"=>['required','min:4']
        ]);

        $data=Customer::find($req->id);
        $data->lastName=$req->lastName;
        $data->FirstName=$req->firstName;
        $data->email=$req->email;
        $data->address=$req->address;

        $data->save();
        return redirect("/")-with('success', 'Customer edited succesfully.');
    }
}
