<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SmartClassController extends Controller
{
    public function SmartClass(){
        return view('smartclass.smartclass');
    }

    

    public function VideoLecture(){
        return view('smartclass.video_lecture');
    }
    public function VideoLectureAdd(){
        return view('smartclass.video_lecture_add');
    }
    
    public function VideoLectureList(){
        return view('smartclass.video_lecture_list');
    }




    public function Notification(){
        return view('smartclass.notification');
    }
    public function NotificationAdd(){
        return view('smartclass.notification_add');
    }
    public function NotificationList(){
        return view('smartclass.notification_list');
    }
    

    public function StudyMaterial(){
        return view('smartclass.study_material');
    }

    public function StudyMaterialAdd(){
        return view('smartclass.study_material_add');
    }
    
    public function StudyMaterialList(){
        return view('smartclass.study_material_list');
    }



    public function OnlineExam(){
        return view('smartclass.online_exam');
    }
    public function OnlineExamPaperAdd(){
        return view('smartclass.online_exam_paper_add');
    }
    public function OnlineExamPaperList(){
        return view('smartclass.online_exam_paper_list');
    }
    public function OnlineExamPaperResult(){
        return view('smartclass.online_exam_paper_result');
    }
    public function OnlineExamQuestionAdd(){
        return view('smartclass.online_exam_question_add');
    }
    public function OnlineExamQuestionView(){
        return view('smartclass.online_exam_question_view');
    }



    public function SmartclassAppRights(){
        return view('smartclass.smartclass_app_rights');
    }
    public function StudentUserPasswordChange(){
        return view('smartclass.student_user_password_change');
    }
    public function StudentLoginDetails(){
        return view('smartclass.student_login_details');
    }

    public function ResultShow(){
        return view('smartclass.result_show');
    }

    public function ActiveUserList(){
        return view('smartclass.active_user_list');
    }

    
    public function LiveClass(){
        return view('smartclass.liveclass');
    }
    public function LiveclassAddClass(){
        return view('smartclass.liveclass_add_class');
    }
    public function LiveclassClassList(){
        return view('smartclass.liveclass_class_list');
    }


    
    
    
    
}