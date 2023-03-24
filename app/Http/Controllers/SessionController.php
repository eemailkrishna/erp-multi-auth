<?php

namespace App\Http\Controllers;
use App\Models\Session;
use Illuminate\Support\Facades\DB;
use Validator;
use Illuminate\Http\Request;
class SessionController extends Controller
{
    public function session(){
        return view('session.session');
    }

    public function AddSessionPage(){   
        $sessions = Session::all();
        return view('session.add_session', ['sessions'=>$sessions]);
    }

    public function AddSession(Request $req){
        $validator = Validator::make($req->all(), [ 
            'add_session' => 'required|string', 
        ]);
        $data = Session::insert([
            'session' => $req->add_session,
            'last_session' => $req->last_session,
            'session_creation_date' => $req->creation_date,
        ]);
        return redirect()->back()->with('success', 'Session added successfully');
    }

    public function DestroySession($id)
    {
        $ses_data = Session::findOrFail($id);
        $ses_data->delete();
        return response()->json(['status'=>'Session Deleted successfully']);
    }
}


// @foreach($students as $stu)
// <tr>
//     <th>{{$loop->iteration}}</th>
//     <td>{{$stu->mother_name}}</td>
//     <td>{{$stu->father_name}}</td>
//     <td> <input type="checkbox" checked value="" class="all_check" name="move_student_from[]">
//     </td>
// </tr>
// @endforeach