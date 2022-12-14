<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\University;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class Universities extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->get('keyword');
        $universities = University::when($keyword, function($query) use ($keyword) {
            $query->where('university_name', 'like', '%'.$keyword.'%')->
                orWhere('website', 'like', '%'.$keyword.'%')->
                orWhere('univ_email', 'like', '%'.$keyword.'%')->
                orWhere('country', 'like', '%'.$keyword.'%')->
                orWhere('phone', 'like', '%'.$keyword.'%')->
                orWhere('address', 'like', '%'.$keyword.'%');
        })->orderBy('university_name', 'asc')->paginate(10);

        if ($keyword)
            $universities->appends(['keyword' => $keyword]);

        return view('user.admin.settings.setting-universities', ['universities' => $universities]);
    }

    public function detail($id){
        return view('user.admin.settings.setting-detail-universities', ['university' => University::find($id)]);
    }

    public function store(Request $request)
    {
        $rules = [
            'university_name' => 'required|max:255|unique:tbl_universities,university_name',
            'email' => 'nullable|email',
            'website' => 'nullable|url',
            'phone' => 'nullable',
            'country' => 'required',
            'address' => 'nullable',
            'uploaded_file' => 'required|mimes:jpeg,jpg,png,bmp,webp|max:2048'
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {

            $university_name = $request->university_name;

            $university = new University;
            $university->university_name = $university_name;
            $university->website = $request->website;
            $university->univ_email = $request->email;
            $university->phone = $request->phone;
            $university->address = $request->address;
            $university->country = $request->country;
            $university->status = 1;

            if ($request->hasFile('uploaded_file')) {
                $file_name = str_replace(' ', '-', strtolower($university_name));
                $file_format = $request->file('uploaded_file')->getClientOriginalExtension();
                $med_file_path = $request->file('uploaded_file')->storeAs('univ', $file_name.'.'.$file_format, ['disk' => 'public_assets']);

                $university->photo = $file_name.'.'.$file_format;
            }

            $university->save();
            DB::commit();

        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors(['msg' => 'Something went wrong when processing the data.']);
        }

        return redirect('admin/setting/universities/add')->with('input-successful', 'New university has been added');
    }

    public function update($id_univ, Request $request)
    {
        if (!$university = University::find($id_univ)) {
            return Redirect::back()->withErrors(['msg' => 'Couldn\'t find the university']);
        }
        $university_name = $request->university_name;
        
        $university->university_name = $university_name;
        $university->website = $request->website;
        $university->univ_email = $request->email;
        $university->phone = $request->phone;
        $university->address = $request->address;
        $university->country = $request->country;

        if ($request->hasFile('uploaded_file')) {
            if ($old_image_path = $university->photo) {
                $file_path = public_path('uploaded_files/univ/'.$old_image_path);
                if (File::exists($file_path)) {
                    File::delete($file_path);
                }
            }
            $file_name = str_replace(' ', '-', strtolower($university_name));
            $file_format = $request->file('uploaded_file')->getClientOriginalExtension();
            $med_file_path = $request->file('uploaded_file')->storeAs('univ', $file_name.'.'.$file_format, ['disk' => 'public_assets']);

            $university->photo = $file_name.'.'.$file_format;
        }
        $university->save();

        return redirect('admin/setting/universities/detail/'.$id_univ)->with('update-successful', 'The university has been updated');
    }

    public function delete($id_univ, Request $request)
    {
        if (!$university = University::find($id_univ)) {
            return Redirect::back()->withErrors(['success' => false, 'message' => 'Couldn\'t find the university']);
        }

        //! tambahin hapus file sebelum delete data
        if ($old_image_path = $university->photo) {
            $file_path = public_path('uploaded_files/univ/'.$old_image_path);
            if (File::exists($file_path)) {
                File::delete($file_path);
            }
        }

        $university->delete();
        return redirect(route('list-university'))->with('delete-successful', 'The university has been deleted');
    }
}
