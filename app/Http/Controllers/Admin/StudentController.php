<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Models\student;
use App\Models\User;
use App\Models\Admission_form;
use App\Models\classes;
use Validator;
class StudentController extends Controller
{
    public function student()
    {
        return 'ddd';
        return view('student.students');
    }
    public function registration()
    {
        $classes=Classes::get();
        return view('student.student_registration',['classes'=>$classes]);
    }
    public function registration_insert(Request $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|unique',
        //     'gender' => 'required',
        //     'dob' => 'required',
        //     'phone_number' => 'required|max:12',
        // ]);
        if ($request->hasfile('student_photo')) {
            $file = $request->file('student_photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/student', $filename);
            $user_id = User::insertGetId([
                'name' => $request->student_name,
                'email' => $request->student_email,
                'gender' => $request->student_gender,
                'dob' => $request->student_date_of_birth,
                'phone_number' => $request->student_father_contact_number2,
                'password' => $request->student_father_contact_number2,
                'profile_pic' => $filename,
            ]);
            $student = new student;
            $student->roll_no = $request->student_registration_number;
            $student->stu_new_old = $request->student_old_or_new;
            $student->class_name = $request->student_class;
            $student->father_name = $request->student_father_name;
            $student->mother_name = $request->student_mother_name;
            $student->father_contact = $request->student_father_contact_number;
            $student->father_contact1 = $request->student_father_contact_number2;
            $student->doa = $request->student_date_of_admission;
            $student->admission_type = $request->student_admission_type;
            $student->admission_scheme = $request->student_admission_scheme;
            $student->fee_category = $request->student_fee_category;
            $student->bus = $request->student_bus;
            $student->hostel = $request->student_hostel;
            $student->library = $request->student_library;
            $student->registration_fee = $request->student_registration_fee;
            $student->sms_contact = $request->student_sms_contact_number;
            $student->stu_add = $request->student_adress;
            $student->village_city = $request->student_city;
            $student->block = $request->student_block;
            $student->district = $request->student_district;
            $student->state = $request->student_state;
            $student->pincode = $request->student_pincode;
            $student->stream = $request->stream;
            $student->landmark = $request->student_landmark;
            $student->remark = $request->student_remark_1;
            $student->user_id = $user_id;
            if ($request->hasfile('father_photo')) {
                $file = $request->file('father_photo');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('uploads/father', $filename);
                $student->father_photo = $filename;
            }
            if ($request->hasfile('mother_photo')) {
                $file1 = $request->file('mother_photo');
                $extension1 = $file1->getClientOriginalExtension();
                $filename1 = time() . '.' . $extension1;
                $file1->move('uploads/mother', $filename1);
                $student->mother_photo = $filename1;
            }
            $student->save();
            return  redirect('/student/student_registration_list')->with('student', "Data insert Successfully");
        }
    }
    public function registration_list()
    {
        $data = User::with('student')->get();
        return view('student.student_registration_list', ['studentts' => $data]);
    }
    public function register_delete($id)
    {
        $students = student::where('user_id', $id)->delete();
        if ($students) {
            $students = user::where('id', $id)->delete();
        }
        // return redirect('student/student_registration_list')->back()->with('lavi', 'successful');
        // return redirect()->back()->with('lavi', 'successful');
        return redirect('student/student_registration_list');
    }
    public function registration_list_fetch()
    {
        return redirect('student.student_admission_list');
    }
    public function admission()
    {
        return view('student.admission');
    }
    public function admission_edit($id)
    {
        $students = User::with('student')->find($id);
        // return $students->student->father_name;
        return view('student.admission_update',['students'=>$students]);
        // return view('student.admission', ['student'=>$student]);
    }
    public function admission_edit1($id)
    {
        $students = User::with('student','admission')->find($id);
        // return $students->admission->father_qualification;
        // return $students;
        return view('student.admission_update1',['students'=>$students]);
        // return view('student.admission', ['student'=>$student]);
    }
    public function admission_update(Request $request){
        $admission = new admission_form;
        // return $admission;
        $admission->father_qualification = $request->student_father_Qualification;
        $admission->mother_qualification = $request->student_Mother_Qualification;
        // return $request->student_mother_Qualification;
        $admission->handicapped = $request->Handicapped;
        $admission->child_wiht_spe_need = $request->Child_With_Special_Need;
        $admission->regligion = $request->student_religion;
        $admission->category = $request->student_category;
        $admission->add_rf_id_no = $request->student_Add_RF_Id_Number;
        $admission->stu_cast = $request->student_cast;
        $admission->dob_in_word = $request->student_Date_Of_Birth_word;
        $admission->house_name = $request->student_House_Name;
        $admission->blood_group = $request->student_Blood_Group;
        $admission->adhaar_card_no_stu = $request->student_Aadhar_Card_Student;
        $admission->father_adhr_no = $request->student_Aadhar_Card_Father;
        $admission->sssm_idno = $request->SSSM_Id_No;
        // return $request->SSSM_Id_No;
        $admission->family_id = $request->Family_Id;
        $admission->child_id = $request->Child_Id;
        $admission->enrollment_no = $request->Enrollment_No;
        $admission->bank_name_father = $request->Bank_Name_Father;
        $admission->acc_no_father = $request->Account_Number_Father;
        $admission->bank_ifsc_code_father = $request->Bank_IFSC_Code_Father;
        $admission->bank_name_student = $request->Bank_Name_Student;
        $admission->bank_ifsc_code_student = $request->Bank_IFSC_Code_Student;
        $admission->admission_no = $request->student_Admission_No;
        $admission->annual_income = $request->Annual_Income;
        $admission->cast_cer_no = $request->Cast_certificate_No;
        $admission->acc_no_student=$request->Account_Number_Student;
        $admission->stu_admission_class = $request->Student_Admission_Class;
        $admission->scholar_no = $request->student_Scholar_No;
        $admission->previous_class = $request->Student_Previous_Class;
        $admission->previ_sch_name = $request->student_Previous_School_Name;
        $admission->previ_sch_tc_no = $request->previ_sch_tc_no;
        // return $request;
        $admission->previ_sch_tc_date = $request->student_Previous_School_Tc_Date;
        $admission->section = $request->student_section;
        $admission->admission_remark = $request->student_Admission_Remark;
        $admission->bus_fee_category = $request->student_Bus_Fee_Category;
        $admission->bus_route = $request->student_Bus_Route;
        $admission->stu_bus_fee = $request->Student_Bus_Fees;
        $admission->boarding = $request->student_Boarding;
        $admission->fath_email_id = $request->student_Father_Email_Id;
        $admission->mother_cont_no = $request->student_Mother_Contact_No;
        $admission->fath_occupation = $request->student_Father_Occupation;
        $admission->moth_email_id = $request->student_Mother_Email_Id;
        $admission->moth_occupation = $request->student_Mother_Occupation;
        $admission->stu_add_permanant = $request->student_address_permanent;
        $admission->village_city_permanant = $request->student_city_permanent;
        $admission->block_permanant = $request->student_block_permanent;
        $admission->district_permanant = $request->student_district_permanent;
        $admission->state_permanant = $request->student_state_permanent;
        $admission->pincode_permanant = $request->student_pincode_permanent;
        $admission->landmark_permanant = $request->student_landmark_permanent;
        $admission->guardian_name = $request->student_Guardian_Name;
        $admission->guardian_name2 = $request->student_Guardian_Name2;
        $admission->guardian_con_no = $request->student_Guardian_Contact_Number;
        $admission->guardian_email = $request->student_Guardian_Email_Id;
        $admission->guardian_occupation = $request->student_Guardian_Occupation;
        $admission->stu_con_no = $request->Student_Contact_Number;
        $admission->sms_facility = $request->SMS_Facility;
        $admission->stu_convenynce = $request->Student_Conveyance;
        $admission->stu_email = $request->Student_Email_Id;
        $admission->user_id = $request->user_id;
        if ($request->hasfile('student_guardian_image')) {
            $file4 = $request->file('student_guardian_image');
            $extension = $file4->getClientOriginalExtension();
            $guardian = time() . '.' . $extension;
            $file4->move('uploads/guardian', $guardian);
            $admission->Guardian_photo = $guardian;
        }
        if ($request->hasfile('student_last_marksheet_image')) {
            $file5 = $request->file('student_last_marksheet_image');
            $extension1 = $file5->getClientOriginalExtension();
            $student_last_marksheet_image = time() . '.' . $extension1;
            $file5->move('uploads/lastmarksheet', $student_last_marksheet_image);
            $admission->Last_Passed_Marksheet = $student_last_marksheet_image;
        }
        if ($request->hasfile('student_tc_image')) {
            $file6 = $request->file('student_tc_image');
            $extension2 = $file6->getClientOriginalExtension();
            $student_tc_image = time() . '.' . $extension2;
            $file6->move('uploads/tc', $student_tc_image);
            $admission->Transfer_Certificate = $student_tc_image;
        }
        if ($request->hasfile('student_income_certificate_image')) {
            $file7 = $request->file('student_income_certificate_image');
            $extension3 = $file7->getClientOriginalExtension();
            $Income_Certificate = time() . '.' . $extension3;
            $file7->move('uploads/income', $Income_Certificate);
            $admission->Income_Certificate = $Income_Certificate;
        }
        if ($request->hasfile('student_cast_certificate_image')) {
            $file8 = $request->file('student_cast_certificate_image');
            $extension4 = $file8->getClientOriginalExtension();
            $Caste_of_Certificate = time() . '.' . $extension4;
            $file8->move('uploads/cast', $Caste_of_Certificate);
            $admission->Caste_of_Certificate = $Caste_of_Certificate;
        }
        if ($request->hasfile('student_dob_image')) {
            $file9 = $request->file('student_dob_image');
            $extension5 = $file9->getClientOriginalExtension();
            $DOB_Certificate = time() . '.' . $extension5;
            $file9->move('uploads/dob', $DOB_Certificate);
            $admission->DOB_Certificate = $DOB_Certificate;
        }
        if ($request->hasfile('student_adhar_card_image')) {
            $file10 = $request->file('student_adhar_card_image');
            $extension6 = $file10->getClientOriginalExtension();
            $Adhar_Card = time() . '.' . $extension6;
            $file10->move('uploads/adhaar', $Adhar_Card);
            $admission->adhaar_card_no_stu = $Adhar_Card;
        }
        if ($request->hasfile('student_sssmid_image')) {
            $file11 = $request->file('student_sssmid_image');
            $extension7 = $file11->getClientOriginalExtension();
            $SSSMID_certificate = time() . '.' . $extension7;
            $file11->move('uploads/sssmid', $SSSMID_certificate);
            $admission->SSSMID_certificate = $SSSMID_certificate;
        }
        $admission->save();
        return  redirect('/student/student_registration_list')->with('student', "Data insert Successfully");
    }
    public function admission_update1(Request $request){
        $admission =  admission_form::where('user_id',$request->user_id)->first();
     $admission->father_qualification = $request->student_father_Qualification;
        $admission->mother_qualification = $request->student_Mother_Qualification;
        $admission->handicapped = $request->Handicapped;
        $admission->child_wiht_spe_need = $request->Child_With_Special_Need;
        $admission->regligion = $request->student_religion;
        $admission->category = $request->student_category;
        $admission->add_rf_id_no = $request->student_Add_RF_Id_Number;
        $admission->stu_cast = $request->student_cast;
        $admission->dob_in_word = $request->student_Date_Of_Birth_word;
        $admission->house_name = $request->student_House_Name;
        $admission->blood_group = $request->student_Blood_Group;
        $admission->adhaar_card_no_stu = $request->student_Aadhar_Card_Student;
        $admission->father_adhr_no = $request->student_Aadhar_Card_Father;
        $admission->sssm_idno = $request->SSSM_Id_No;
        $admission->family_id = $request->Family_Id;
        $admission->child_id = $request->Child_Id;
        $admission->enrollment_no = $request->Enrollment_No;
        $admission->bank_name_father = $request->Bank_Name_Father;
        $admission->acc_no_father = $request->Account_Number_Father;
        $admission->bank_ifsc_code_father = $request->Bank_IFSC_Code_Father;
        $admission->bank_name_student = $request->Bank_Name_Student;
        $admission->bank_ifsc_code_student = $request->Bank_IFSC_Code_Student;
        $admission->admission_no = $request->student_Admission_No;
        $admission->annual_income = $request->Annual_Income;
        $admission->cast_cer_no = $request->Cast_certificate_No;
        $admission->acc_no_student=$request->Account_Number_Student;
        $admission->stu_admission_class = $request->Student_Admission_Class;
        $admission->scholar_no = $request->student_Scholar_No;
        $admission->previous_class = $request->Student_Previous_Class;
        $admission->previ_sch_name = $request->student_Previous_School_Name;
        $admission->previ_sch_tc_no = $request->previ_sch_tc_no;
        $admission->previ_sch_tc_date = $request->student_Previous_School_Tc_Date;
        $admission->section = $request->student_section;
        $admission->admission_remark = $request->student_Admission_Remark;
        $admission->bus_fee_category = $request->student_Bus_Fee_Category;
        $admission->bus_route = $request->student_Bus_Route;
        $admission->stu_bus_fee = $request->Student_Bus_Fees;
        $admission->boarding = $request->student_Boarding;
        $admission->fath_email_id = $request->student_Father_Email_Id;
        $admission->mother_cont_no = $request->student_Mother_Contact_No;
        $admission->fath_occupation = $request->student_Father_Occupation;
        $admission->moth_email_id = $request->student_Mother_Email_Id;
        $admission->moth_occupation = $request->student_Mother_Occupation;
        $admission->stu_add_permanant = $request->student_address_permanent;
        $admission->village_city_permanant = $request->student_city_permanent;
        $admission->block_permanant = $request->student_block_permanent;
        $admission->district_permanant = $request->student_district_permanent;
        $admission->state_permanant = $request->student_state_permanent;
        $admission->pincode_permanant = $request->student_pincode_permanent;
        $admission->landmark_permanant = $request->student_landmark_permanent;
        $admission->guardian_name = $request->student_Guardian_Name;
        $admission->guardian_name2 = $request->student_Guardian_Name2;
        $admission->guardian_con_no = $request->student_Guardian_Contact_Number;
        $admission->guardian_email = $request->student_Guardian_Email_Id;
        $admission->guardian_occupation = $request->student_Guardian_Occupation;
        $admission->stu_con_no = $request->Student_Contact_Number;
        $admission->sms_facility = $request->SMS_Facility;
        $admission->stu_convenynce = $request->Student_Conveyance;
        $admission->stu_email = $request->Student_Email_Id;
        $admission->user_id = $request->user_id;
        $student =student::where('user_id',$request->user_id)->first();
        $request->student_registration_number;
        $student->stu_new_old = $request->student_old_or_new;
        $student->class_id = $request->student_class;
        $student->father_name = $request->student_father_name;
        $student->mother_name = $request->student_mother_name;
        $student->father_contact = $request->student_father_contact_number;
        $student->father_contact1 = $request->student_father_contact_number2;
        $student->doa = $request->student_date_of_admission;
        $student->admission_type = $request->student_admission_type;
        $student->admission_scheme = $request->student_admission_scheme;
        $student->fee_category = $request->student_fee_category;
        $student->bus = $request->student_bus;
        $student->hostel = $request->student_hostel;
        $student->library = $request->student_library;
        $student->registration_fee = $request->student_registration_fee;
        $student->sms_contact = $request->student_sms_contact_number;
        $student->stu_add = $request->student_adress;
        $student->village_city = $request->student_city;
        $student->block = $request->student_block;
        $student->district = $request->student_district;
        $student->state = $request->student_state;
        $student->pincode = $request->student_pincode;
        $student->stream = $request->stream;
        $student->landmark = $request->student_landmark;
        $student->remark = $request->student_remark_1;
        if ($request->hasfile('student_photo')) {
            $file = $request->file('student_photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/student', $filename);
            return $request;
            $user_id = User::where('id',$request->user_id)->update([
                'name' => $request->student_name,
                'email' => $request->student_email,
                'gender' => $request->student_gender,
                'dob' => $request->student_date_of_birth,
                'phone_number' => $request->student_father_contact_number2,
                'password' => $request->student_father_contact_number2,
                'profile_pic' => $filename,
            ]);
        }
        if ($request->hasfile('Guardian_photo')) {
            $file4 = $request->file('Guardian_photo');
            $extension = $file4->getClientOriginalExtension();
            $guardian = time() . '.' . $extension;
            $file4->move('uploads/guardian', $guardian);
            $admission->Guardian_photo = $guardian;
        }
        if ($request->hasfile('student_last_marksheet_image')) {
            $file5 = $request->file('student_last_marksheet_image');
            $extension1 = $file5->getClientOriginalExtension();
            $student_last_marksheet_image = time() . '.' . $extension1;
            $file5->move('uploads/lastmarksheet', $student_last_marksheet_image);
            $admission->Last_Passed_Marksheet = $student_last_marksheet_image;
        }
        if ($request->hasfile('student_tc_image')) {
            $file6 = $request->file('student_tc_image');
            $extension2 = $file6->getClientOriginalExtension();
            $student_tc_image = time() . '.' . $extension2;
            $file6->move('uploads/tc', $student_tc_image);
            $admission->Transfer_Certificate = $student_tc_image;
        }
        if ($request->hasfile('student_income_certificate_image')) {
            $file7 = $request->file('student_income_certificate_image');
            $extension3 = $file7->getClientOriginalExtension();
            $Income_Certificate = time() . '.' . $extension3;
            $file7->move('uploads/income', $Income_Certificate);
            $admission->Income_Certificate = $Income_Certificate;
        }
        if ($request->hasfile('student_cast_certificate_image')) {
            $file8 = $request->file('student_cast_certificate_image');
            $extension4 = $file8->getClientOriginalExtension();
            $Caste_of_Certificate = time() . '.' . $extension4;
            $file8->move('uploads/cast', $Caste_of_Certificate);
            $admission->Caste_of_Certificate = $Caste_of_Certificate;
        }
        if ($request->hasfile('student_dob_image')) {
            $file9 = $request->file('student_dob_image');
            $extension5 = $file9->getClientOriginalExtension();
            $DOB_Certificate = time() . '.' . $extension5;
            $file9->move('uploads/dob', $DOB_Certificate);
            $admission->DOB_Certificate = $DOB_Certificate;
        }
        if ($request->hasfile('student_adhar_card_image')) {
            $file10 = $request->file('student_adhar_card_image');
            $extension6 = $file10->getClientOriginalExtension();
            $Adhar_Card = time() . '.' . $extension6;
            $file10->move('uploads/adhaar', $Adhar_Card);
            $admission->adhaar_card_no_stu = $Adhar_Card;
        }
        if ($request->hasfile('student_sssmid_image')) {
            $file11 = $request->file('student_sssmid_image');
            $extension7 = $file11->getClientOriginalExtension();
            $SSSMID_certificate = time() . '.' . $extension7;
            $file11->move('uploads/sssmid', $SSSMID_certificate);
            $admission->SSSMID_certificate = $SSSMID_certificate;
        }
        $admission->save();
        // $student->save();
        return $student;
        return  redirect('/student/student_registration_list')->with('student', "Data insert Successfully");
    }
     public function admission_list()
    {
        $data = User::with('student','admission')->get();
        // return $data;
        return view('student.student_admission_list', ['studentts' => $data]);
        // return view('student.student_admission_list');
    }
    public function admission_delete($id)
    {
        $students = student::where('user_id', $id)->delete();
                if ($students) {
                    $student = Admission_form::where('user_id', $id)->delete();
                    if($student){
                        $students = user::where('id', $id)->delete();
                    }
                }
        return redirect('student/student_registration_list')->back()->with('lavi', 'successful');
        // return redirect()->back()->with('lavi', 'successful');
        return redirect('student/student_admission_list');
    }
    public function student_profile()
    {
        return view('student.student_profile_update');
    }
    public function student_mapping()
    {
        return view('student.student_mapping_data_update');
    }
    public function student_photo()
    {
        return view('student.student_photo_update');
    }
    public function student_sms()
    {
        return view('student.student_sms_contact_update');
    }
    public function student_sms_notification()
    {
        return view('student.student_sms_notification_update');
    }
    public function student_rfd()
    {
        return view('student.rfid_card_generate');
    }
    public function student_roll_no()
    {
        return view('student.student_roll_no');
    }
    public function student_id_card()
    {
        return view('student.student_id_card');
    }
    public function guardian_student_id_card()
    {
        return view('student.guardian_student_id_card');
    }
    public function father_student_id_card()
    {
        return view('student.father_student_id_card');
    }
    public function mother_student_id_card()
    {
        return view('student.mother_student_id_card');
    }
    public function health_zone()
    {
        return view('student.health_zone');
    }
    public function physical_fitness()
    {
        return view('student.physical_fitness');
    }
    public function student_strength()
    {
        return view('student.report_student_strength_castewise');
    }
    public function student_strength_religion()
    {
        return view('student.report_student_strength_religionwise');
    }
    public function student_registration_rep()
    {
        return view('student.student_registration_report');
    }
}
