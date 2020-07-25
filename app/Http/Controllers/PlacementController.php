<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use Validator;
use Illuminate\Support\Facades\Storage;

class PlacementController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function company() 
    {
        $arCompany = Company::all();
        return view('admin.manage-company', compact('arCompany'));
    }

    public function storeCompany(Request $request)
    {
    	$validation = Validator::make($request->all(), [
            'logo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'name' => 'required'
        ]);

        if ($validation->passes()) {
            $image = $request->logo;
            $name = $request->name;
            $extension = $image->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $image->move('storage/images/company', $filename);
            $company = new Company();
            $company->name = $name;
            $company->logo = $filename;
            $company->save(); 
            return response()->json([
                'message' => 'Company Details Added Successfully',
                'logo' => '<img src = "/storage/images/company/'.$filename.'">',
                'name' => $name,
                'class_name' => 'alert-success',
                'id' => $company->id
            ]);
        } else {
            return response()->json([
                'message' => $validation->errors()->all(),
                'uploaded_image' => '',
                'class_name' => 'alert-danger'
            ]);
        }
    }

    public function destroyCompany($id)
    {

        $company = Company::find($id);
        if (!$company) {
             return response()->json([
                'message' => 'Company Details Not Found In Database',
                'class_name' => 'alert-danger',
            ]);
        } else {
            Storage::delete('/public/images/company/' . $company->logo);
            $company->delete();
            return response()->json([
                'message' => 'Company Details Removed Successfully',
                'class_name' => 'alert-success',
            ]);
        }
        
    }
}
