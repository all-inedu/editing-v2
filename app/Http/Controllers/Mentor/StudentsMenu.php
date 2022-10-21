<?php

namespace App\Http\Controllers\Mentor;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\CRM\Client as CRMClient;
use App\Models\Tags;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Exception;

class StudentsMenu extends Controller
{
    public function index(Request $request)
    {
        $mentor = Auth::guard('web-mentor')->user();
        $keyword = $request->get('keyword');
        $clients = Client::where('id_mentor', '=', $mentor->id_mentors)->with('mentors')->when($keyword, function($query) use ($keyword) {
            $query->where(DB::raw("CONCAT(`first_name`, ' ',`last_name`)"), 'like', '%'.$keyword.'%')->orWhereHas('mentors', function ($querym) use ($keyword) {
                $querym->where(DB::raw("CONCAT(`first_name`, ' ',`last_name`)"), 'like', '%'.$keyword.'%');
            })->orWhere('email', 'like', '%'.$keyword.'%');
        })->orderBy('first_name', 'asc')->paginate(10);

        if ($keyword) 
            $clients->appends(['keyword' => $keyword]);

        return view('user.mentor.user-student', ['clients' => $clients]);
    }

    public function detail($id)
    {
        $client = Client::with('mentors')->find($id);
        // dd($client->resume);

        
        return view('user.mentor.user-student-detail',compact('client'));
    }

    public function update($id, Request $request)
    {
        $rules = [
            // 'id_essay_clients' => 'required|exists:tbl_essay_clients,id_essay_clients',
            'personal_brand' => 'required',
            'interests' => 'required',
            'personalities' => 'required'
        ];

        $validator = Validator::make($request->all() + ['id_essay_clients' => $id], $rules);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator->messages());
        }
        // $student_name =  $request->id_clients;
        $user = Client::where('id_clients', '=', $id)->first();
        // dd($file_student->email);
        // $user = $id;
        // dd($user->resume);
        // if ($request->hasFile('resume')) {
            
        // };

        if ($request->hasFile('resume')) {
            if ($old_file_path_resume = $user->resume) {
                $file_path_resume = public_path('uploaded_files/user/students/'.$user->first_name.'/resume'.'/'.$old_file_path_resume);
                // dd($user->resume);
                if (File::exists($file_path_resume)) {
                    File::delete($file_path_resume);
                }
            }
            $resumeFile = $request->resume->getClientOriginalName();
            $filePathresume = 'user/students/'.$user->first_name.'/resume'.'/'.$resumeFile;
            Storage::disk('public_assets')->put($filePathresume, file_get_contents($request->resume));
        }else{
            $resumeFile = $request->resume;
        };
            

        if ($request->hasFile('questionnaire')) {
            if ($old_file_path_questionnaire = $user->questionnaire) {
                $file_path_questionnaire = public_path('uploaded_files/user/students/'.$user->first_name.'/questionnaire'.'/'.$old_file_path_questionnaire);
                // dd($user->resume);
                if (File::exists($file_path_questionnaire)) {
                    File::delete($file_path_questionnaire);
                }
            } 
            $questionnaireFile = $request->questionnaire->getClientOriginalName();
            $filePathquestionnaire = 'user/students/'.$user->first_name.'/questionnaire'.'/'.$questionnaireFile;
            Storage::disk('public_assets')->put($filePathquestionnaire, file_get_contents($request->questionnaire));
        }else{
            $questionnaireFile = $request->questionnaire;
        }
        ;
            

        if ($request->hasFile('others')) {
            if ($old_file_path_others = $user->others) {
                $file_path_others = public_path('uploaded_files/user/students/'.$user->first_name.'/others'.'/'.$old_file_path_others);
                // dd($user->resume);
                if (File::exists($file_path_others)) {
                    File::delete($file_path_others);
                }
            } 
            $othersFile = $request->others->getClientOriginalName();
            $filePathothers = 'user/students/'.$user->first_name.'/others'.'/'.$othersFile;
            Storage::disk('public_assets')->put($filePathothers, file_get_contents($request->others));
        }else{
            $othersFile = $request->others;
        };
            
        // dd($questionnaireFile);

        DB::beginTransaction();
        try {

            $student = Client::find($id);
            $student->personal_brand    = $request->personal_brand;
            $student->interests         = $request->interests;
            $student->personalities     = $request->personalities;
            if ($request->hasFile('resume')) {
                $student->resume            = $resumeFile;
            }elseif ($request->hasFile('questionnaire')){
                $student->questionnaire     = $questionnaireFile;
            }elseif ($request->hasFile('others')){
                $student->others            = $othersFile;
            };
            
            // dd($student);
            $student->save();
            DB::commit();

        } catch (Exception $e) {

            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());

        }

        return redirect('/mentor/user/student')->with('update-data-successful', 'Data Student has been updated');

        // $client = Client::with('mentors')->find($id);
        // return view('user.mentor.user-student-detail',compact('client'));
    }
}