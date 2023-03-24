<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use App\Models\User;
use App\Models\classes;
use App\Models\section;
use App\Models\Admission_form;
use App\Models\Health;
use Dflydev\DotAccessData\Data;
use PharIo\Manifest\Url;
use Validator;
use Session;



class StudentController extends Controller
{
    public function student()
    {
        return view('student.students');
    }

    public function registration()
    {
        $data = student::with('user','class','section')->get();
        // return $data;
        $class = Classes::all();
        return view('student.student_registration',['data'=>$data,'class'=>$class]);
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
            
            $student->class_id= $request->student_class;
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
            $student->child_wiht_spe_need = $request->Child_With_Special_Need;
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
            return  redirect()->back()->with('student', "Data insert Successfully");
        }
    }

    public function registration_list()
    {
        // $data = User::with('student')->get();
        $data = student::with('user','class')->get();
        // return $data;
        return view('student.student_registration_list', ['data' => $data]);
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
           
        $students = student::with('user')->find($id);
        // return $students;
        // return $students->student->father_name;       
        return view('student.admission_update',['students'=>$students]);
        // return view('student.admission', ['student'=>$student]);
    }

    
    public function admission_edit1($id)
    {
        
           
        $students = User::with('student','admission','section')->find($id);
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
        $admission->Student_Admission_Class = $request->Student_Admission_Class;
        $admission->scholar_no = $request->student_Scholar_No;
        $admission->previous_class = $request->Student_Previous_Class;


        $admission->previ_sch_name = $request->student_Previous_School_Name;
        $admission->previ_sch_tc_no = $request->previ_sch_tc_no;
        // return $request;
        $admission->previ_sch_tc_date = $request->student_Previous_School_Tc_Date;
        $admission->section_id = $request->student_section;
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
        $admission->section_id = $request->student_section;

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
        $admission->section_id = $request->student_section;
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
        
        $student->class = $request->student_class;
        $student->child_wiht_spe_need = $request->Child_With_Special_Need;
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
        $student->child_wiht_spe_need= $request->Child_With_Special_Need;
        $student->stu_cwsn_des= $request->Child_With_Special_Need_des;
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
      
        return  redirect('/student/student_admission_list')->with('student', "Data insert Successfully");
                   
    }

     public function admission_list()
    {
       
        $data = student::with('user','class','section','admission')->get();
        return view('student.student_admission_list', ['data'=>$data]);
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
        // $data = student::with('user','class','section','admission')->get();
        // return $data;
        $class = Classes::all();
        // $class = student::with('user','class','section','admission')->get();



        return view('student.student_profile_update', ['todoss' => student::orderBy('id', 'DESC')->get(), 'class' => $class]);
    }
    public function get_section_profile($id)
    {
        $section = section::where('class_id', $id)->get();
        return $section;
    }
    public function getTable_profile($id)
    {
        $data = student::with('user','class','section','admission')->get();
        $output = '<thead>';
        $output .= '<tr>';
        // $output .= '<th><center>' . 'S.no.' . '</center></th>';
    
        $output .= '<th><center>' . 'Admission No.' . '</center></th>';
        $output .= '<th><center>' . 'Name' . '</center></th>';
        $output .= '<th><center>' . 'Admission Class' . '</center></th>';
        $output .= '<th><center>' . 'Section' . '</center></th>';
        $output .= '<th><center>' . 'Father Name' . '</center></th>';
        $output .= '<th><center>' . 'Mother Name' . '</center></th>';
        $output .= '<th><center>' . 'Adm. Date' . '</center></th>';
        $output .= '<th><center>' . 'D.O.B' . '</center></th>';
        $output .= '<th><center>' . 'Std Address' . '</center></th>';
        $output .= '<th><center>' . 'Admission Scheme' . '</center></th>';
        $output .= '<th><center>' . 'Father Contact' . '</center></th>';
        $output .= '<th><center>' . 'Fee Category' . '</center></th>';
        $output .= '<th><center>' . 'Bus' . '</center></th>';
        $output .= '<th><center>' . 'Bus Route' . '</center></th>';
        $output .= '<th><center>' . 'Bus Category/Stop' . '</center></th>';
        // $output .= '<th><center>' . 'Adm. No.' . '</center></th>';
        $output .= '<th><center>' . 'Roll No.' . '</center></th>';
        $output .= '<th><center>' . 'Scholar no.' . '</center></th>';
        $output .= '<th><center>' . 'Gender' . '</center></th>';
        $output .= '<th><center>' . 'Adhar Card No' . '</center></th>';
        $output .= '<th><center>' . 'Annual Income' . '</center></th>';
        $output .= '<th><center>' . 'Blood Group' . '</center></th>';
        $output .= '<th><center>' . 'Action' . '</center></th>';
        $output .= '</tr>';
        $output .= '</thead>';

        $output .= '<tbody>';

        foreach ($data as $item) {
            // $output .= '<form action='.url('/hello/'.$item->id).' method="POST">';
            $output .= '<form action="" method="post">';
            $output .= '<tr>';
            // $output .= '<td><input type="text value=' . $item->id . '></td>';
            $output .= '<td style="display:none;"><input type="text" name="id" value=' . $item->user->id . '></td>';
            $output .= '<td><input type="text" name="student_Admission_No" value=' . $item->admission->admission_no . '></td>';
            $output .= '<td><input type="text" name="student_name"  value=' . $item->user->name . '></td>';
            $output .= '<td><input type="text" name="Student_Admission_Class"  value=' . $item->admission->stu_admission_class . '></td>';
            $output .= '<td><input type="text" name="student_section"  value=' . $item->section->section . '></td>';

            $output .= '<td><input type="text" name="student_father_name"  value=' . $item->father_name . '></td>';
            $output .= '<td><input type="text" name="student_mother_name"  value=' . $item->mother_name    . '></td>';
            $output .= '<td><input type="text" name="student_date_of_admission"  value=' . $item->doa . '></td>';
            $output .= '<td><input type="text" name="student_date_of_birth"  value=' . $item->user->dob . '></td>';

            $output .= '<td><input type="text" name="student_city"  value=' . $item->village_city . '></td>';
            $output .= '<td><input type="text" name="student_admission_scheme"  value=' . $item->admission_scheme . '></td>';
            $output .= '<td><input type="text" name="student_father_contact_number"  value=' . $item->father_contact . '></td>';
            $output .= '<td><input type="text" name="student_fee_category"  value=' . $item->fee_category . '></td>';
            $output .= '<td><input type="text" name="student_bus"  value=' . $item->bus . '></td>';
            $output .= '<td><input type="text" name="student_Bus_Route"  value=' . $item->admission->bus_route . '></td>';
            $output .= '<td><input type="text" name="student_Bus_Fee_Category"  value=' . $item->admission->bus_fee_category    . '></td>';
            // $output .= '<td><input type="text" name="student_Admission_No"  value=' . $item->admission->admission_no . '></td>';
            $output .= '<td><input type="text" name="student_registration_number"  value=' . $item->roll_no . '></td>';
            $output .= '<td><input type="text" name="student_Scholar_No"  value=' . $item->admission->scholar_no . '></td>';
            $output .= '<td><input type="text" name="student_gender"  value=' . $item->user->gender . '></td>';
            $output .= '<td><input type="text" name="student_Aadhar_Card_Student"  value=' . $item->admission->adhaar_card_no_stu . '></td>';
            $output .= '<td><input type="text" name="Annual_Income"  value=' . $item->admission->annual_income . '></td>';
            $output .= '<td><input type="text" name="student_Blood_Group"  value=' . $item->admission->blood_group . '></td>';
            $output .= '<td><input type="Submit" class="btn"></td>';
            // $output .= '<td><a href="" class="btn btn-success">Submit</a>';

            $output .= '</tr>';
        }

        $output .= '</tbody>';

        $section = Section::where('class_id', $id)->get();

        if ($section) {
            // $data .= '<option>'.'select'.'</option>';
            foreach ($section as $item) {
                $data .= '<option value="' . $item->id . '">' . $item->name . '</option>';
            }
        }


        $result = ['output' => $output, 'section' => $data];

        return $result;
    }
    public function student_profile_edit_profile($id)
    {           
        $students = student::with('user','class','section','admission')->find($id); 
        return view('student.student_profile_update',['students'=>$students]);
    }
    public function student_profile_update_profile(Request $request){
    //  return request();
        $user = User::find($request->id);
        $user = User::where('id',$request->id)->first();
        
        $user->name = $request->student_name;
        $user->gender = $request->input('student_gender');
        $user->dob = $request->input('student_date_of_birth');
        $user->update();

        $profile = student::find($request->id);
        $profile = student::where('user_id',$request->id)->first();
        
        $profile->roll_no = $request->input('student_registration_number');
        $profile->father_name = $request->input('student_father_name');
        $profile->mother_name = $request->input('student_mother_name');
        $profile->doa = $request->input('student_date_of_admission');
        $profile->village_city = $request->input('student_city');
        $profile->admission_scheme = $request->input('student_admission_scheme');
        $profile->father_contact = $request->input('student_father_contact_number');
        $profile->fee_category = $request->input('student_fee_category');
        $profile->admission_scheme = $request->input('student_admission_scheme');
        $profile->section_id=$request->input('student_class_section');

        $profile->bus = $request->input('student_bus');
         $profile->update();
         $profile = Admission_form::find($request->id);
         $profile = Admission_form::where('user_id',$request->id)->first();
         $profile->admission_no = $request->input('student_Admission_No');
         $profile->stu_admission_class = $request->input('Student_Admission_Class');
         $profile->scholar_No = $request->input('student_Scholar_No');
         $profile->adhaar_card_no_stu = $request->input('student_Aadhar_Card_Student');
         $profile->annual_income = $request->input('Annual_Income');
         $profile->blood_group = $request->input('blood_group');
         $profile->bus_Route = $request->input('student_Bus_Route');
          $profile->update();
          return redirect('student/student_profile_update');

        // return redirect()->route('profile', $user->id)->with('success', 'Your info are updated');
    }

    public function student_photo_update(){
        $class = Classes::all();
        return view('student/student_photo_update', ['class'=>$class,'todoss' => student::orderBy('id', 'DESC')->get()]);
        }
    
    public function get_section_photo($id)
    {
        $section = section::where('class_id', $id)->get();
        return $section;
    }

    public function getTablephoto($id)
    {
        $data = student::with('user','admission')->get();
        $output = '<thead>';
        $output .= '<tr>';
        // $output .= '<th><center>' . 'S.no.' . '</center></th>';
    
        $output .= '<th><center>' . 'Admission No.' . '</center></th>';
        $output .= '<th><center>' . 'student Name' . '</center></th>';
        $output .= '<th><center>' . 'Father Name' . '</center></th>';
        $output .= '<th><center>' . 'Choose Stud Photo' . '</center></th>';
        $output .= '<th><center>' . 'Student Photo' . '</center></th>';
        $output .= '<th><center>' . 'Choose Father Photo' . '</center></th>';
        $output .= '<th><center>' . 'Father Photo' . '</center></th>';
        $output .= '<th><center>' . 'Choose Mother Photo' . '</center></th>';
        $output .= '<th><center>' . 'Mother Photo' . '</center></th>';
        $output .= '<th><center>' . 'Action' . '</center></th>';
        $output .= '</tr>';
        $output .= '</thead>';
        $output .= '<tbody>';

        foreach ($data as $item) {
        
            $output .= '<form  method="post" >';
            $output .= '<tr>';
           

            // $output .= '<td><input type="text value=' . $item->id . '></td>';           
            

            $output .= '<td style="display:none;"><input type="text" name="id" value=' . $item->user->id . '></td>';
            $output .= '<td><input type="text" name="student_Admission_No" value=' . $item->admission->admission_no . '></td>';
            $output .= '<td><input type="text" name="student_name"  value=' . $item->user->name . '></td>';      
            $output .= '<td><input type="text" name="student_father_name"  value=' . $item->father_name . '></td>';
            $output .= '<td><input type="file" name="student_photo" width="10px"></td>';
            $output .= '<td><img src="'.url('uploads/student/'.$item->user->profile_pic).'"  width="60px" height="60px"></td>';
            $output .= '<td><input type="file" name="father_photo" width="10px" ></td>';
            $output .= '<td><img src="'.url('uploads/father/'.$item->father_photo).'"  width="60px" height="60px"></td>';
            $output .= '<td><input type="file" name="mother_photo" width="10px"  ></td>';
            $output .= '<td><img src="'.url('uploads/mother/'.$item->mother_photo).'"  width="60px" height="60px"></td>';
            $output .= '<td><button type="submit" class="btn btn-success">Submit</button>';

            $output .= '</tr>';
        }

        $output .= '</tbody>';

        $section = Section::where('class_id', $id)->get();

        if ($section) {
            // $data .= '<option>'.'select'.'</option>';
            foreach ($section as $item) {
                $data .= '<option value="' . $item->id . '">' . $item->name . '</option>';
            }
        }


        $result = ['output' => $output, 'section' => $data];

        return $result;
    }

     public function student_photo_edit_profile($id)
    {           
        $students = student::with('user','admission')->find($id); 
        return view('student/student_profile_update',['students'=>$students]);
    }
    public function student_photo_update_profile(Request $request){


        $user = User::find($request->id); 
        $user = User::where('id',$request->id)->first();
        
        $user->name = $request->student_name;

        if ($request->hasfile('student_photo')) {
            $file = $request->file('student_photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/student', $filename);
            $user->profile_pic = $filename;
        }
        
        $user->update();

        // $profile = student::find($request->id);
        $profile = student::where('user_id',$request->id)->first();        
        $profile->father_name = $request->input('student_father_name');
        if ($request->hasfile('father_photo')) {
            $file = $request->file('father_photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/father', $filename);
            $profile->father_photo = $filename;
        }
        if ($request->hasfile('mother_photo')) {
            $file1 = $request->file('mother_photo');
            $extension1 = $file1->getClientOriginalExtension();
            $filename1 = time() . '.' . $extension1;
            $file1->move('uploads/mother', $filename1);
            $profile->mother_photo = $filename1;
        }    
         $profile->update();

         $profile = Admission_form::find($request->id);
         $profile = Admission_form::where('user_id',$request->id)->first();
         $profile->admission_no = $request->input('student_Admission_No');
          $profile->update();
          return redirect()->back();
        // return redir

        // return redirect()->route('profile', $user->id)->with('success', 'Your info are updated');
    }


 public function student_mapping(){
    return view('/student/student_mapping_data_update');
 }
 public function student_rfd(){
        $class = Classes::all();
        return view('student/rfid_card_generate', ['todoss' => student::orderBy('id', 'DESC')->get(), 'class' => $class]);
    
    // return view('/student/rfid_card_generate');
 }
 public function get_section_rfid_card($id)
 {
     $section = section::where('class_id', $id)->get();
     return $section;
 }
 public function getTablerfid_card($id)
    {
        $data = student::with('user','class','section','admission')->get();
        $output = '<thead>';
        $output .= '<tr>';
        // $output .= '<th><center>' . 'S.no.' . '</center></th>';
    
        $output .= '<th><center>' . 'Admission No.' . '</center></th>';
        $output .= '<th><center>' . 'student Name' . '</center></th>';
        $output .= '<th><center>' . 'Father Name' . '</center></th>';
        $output .= '<th><center>' . 'Roll.No.' . '</center></th>';
        $output .= '<th><center>' . 'Class' . '</center></th>';
        $output .= '<th><center>' . 'Section' . '</center></th>';
        $output .= '<th><center>' . 'Rfid No.' . '</center></th>';
        $output .= '<th><center>' . 'Action' . '</center></th>';
        $output .= '<th><center>' . 'Remove' . '</center></th>';
        $output .= '</tr>';
        $output .= '</thead>';
        $output .= '<tbody>';

        foreach ($data as $item) {
        
            $output .= '<form action="" method="post">';
            $output .= '<tr>';
            // $output .= '<td><input type="text value=' . $item->id . '></td>';
            $output .= '<td style="display:none;"><input type="text" name="id" value=' . $item->user->id . '></td>';
            $output .= '<td>'. $item->admission->admission_no . '</td>';
            $output .= '<td>' . $item->user->name . '</td>';      
            $output .= '<td>' . $item->father_name . '</td>';
            $output .= '<td>' . $item->roll_no .'</td>';
            $output .= '<td>' . $item->class->class .'</td>';

            $output .= '<td>' . $item->section->section . '</td>';
            $output .= '<td>' . $item->admission->add_rf_id_no .'</td>';
            // $output .= '<td><button type="button" value="Add_RF_Id" onclick="test1()" class="btn btn-success">Add_RF_Id </button></td>';
            $output .= '<td><button type="button"  onclick="edit_todo('. $item->id .')"   
                class="edit_todo btn btn-sm btn-success ml-1">Allot RFID No.</button></td>';
            $output .= '<td><button type="button" value="Remove" onclick="delete_functionn('. $item->id .')" class="btn btn-danger">Remove</button></td>';
            // $output .= '<td><a href="" class="btn btn-success">Submit</a>';

            $output .= '</tr>';
        }

        $output .= '</tbody>';

        $section = Section::where('class_id', $id)->get();

        if ($section) {
            // $data .= '<option>'.'select'.'</option>';
            foreach ($section as $item) {
                $data .= '<option value="' . $item->id . '">' . $item->name . '</option>';
            }
        }


        $result = ['output' => $output, 'section' => $data];

        return $result;
    }
    public function rfid_card_edit_profile($id)
    {

        return user::with('admission')->find($id);

    }


    public function rfid_card_update_profile(Request $request)
    { 
            
        // $user = User::find($request->id); 
        // $user = User::where('id',$request->id)->first();
        // $user->name = $request->student_name;      
        // $user->update();

        
        //  $profile = Admission_form::find($request->id);
         $profile = Admission_form::where('user_id',$request->id)->first();
        
         $profile->add_rf_id_no = $request->student_Add_RF_Id_Number;         
          $profile->save();
          return redirect()->back();
    }
    public function ref_id_destroy($id)
    {
        $profile = Admission_form::where('user_id', $id)->first();
        $profile->add_rf_id_no = '';                
        $profile->save();
        return redirect()->back();
    }
    public function guardian_student_id_card()
    {
        $class = Classes::all();
        return view('student.guardian_student_id_card', ['todoss' => student::orderBy('id', 'DESC')->get(), 'class' => $class]);
    
    }
    public function get_section_guardian($id)
    {
        $section = section::where('class_id', $id)->get();
        return $section;
    }

    public function getTableguar($id)
    {
        $data = student::with('admission','user','class','section')->where('class_id', $id)->get();
        $output = '<thead>';
        $output .= '<tr>';
        $output .= '<th>' . 'S.no' . '</th>';
        $output .= '<th>' . 'Admission No.' . '</th>';
        $output .= '<th>' . 'Student Roll No' . '</th>';
        $output .= '<th>' . 'student Name' . '</th>';
        $output .= '<th>' . 'Class' . '</th>';
        $output .= '<th>' . 'Select Student' . '</th>';
        $output .= '<th>' . 'Update By' . '</th>';
        $output .= '<th>' . 'Action' . '</th>';

     
        $output .= '</thead>';

        $output .= '<tbody>';

        foreach ($data as $item) {
           
            $output .= '<form action="#" method="post">';

            $output .= '<tr>';
            $output .= '<td>' . $item->id . '</td>';
            $output .= '<td style="display:none;"><input type="text" name="id" value=' . $item->id . '></td>';
            $output .= '<td>';
            if($item->admission)
            {
                $output .=  $item->admission->admission_no;
            }
            $output .= '</td>';
            $output .= '<td>' . $item->roll_no . '</td>';
            $output .= '<td>';
            if($item->user)
            {
                $output .=  $item->user->name;
            }
            $output .= '</td>';

            $output .= '<td>';
            if($item->class)
            {
                $output .=  $item->class->class;
            }
            $output .= '</td>';
            $output .= '<td><input type="checkbox" class="btn btn-success"></td>';
            $output .= '<td>';
            if($item->user)
            {
                $output .=  $item->user->email;
            }
            $output .= '</td>';       
            $output .= '<td><input type="Submit" class="btn btn-success"></td>';
            $output .= '</tr>';
        }

        $output .= '</tbody>';

        $section = Section::where('class_id', $id)->get();

        if ($section) {
            // $data .= '<option>'.'select'.'</option>';
            foreach ($section as $item) {
                $data .= '<option value="' . $item->id . '">' . $item->name . '</option>';
            }
        }


        $result = ['output' => $output, 'section' => $data];

        return $result;
    }

    public function father_student_id_card()
    {       
        $class = Classes::all();
        return view('student.father_student_id_card', ['todoss' => student::orderBy('id', 'DESC')->get(), 'class' => $class]);
    }

    public function get_section_father($id)
    {
        $section = section::where('class_id', $id)->get();
        return $section;
    }

    public function getTablefather($id)
    {
        $data = student::with('admission','user','class','section')->where('class_id', $id)->get();
        $output = '<thead>';
        $output .= '<tr>';
        $output .= '<th>' . 'S.no' . '</th>';
        $output .= '<th>' . 'Admission No.' . '</th>';
        $output .= '<th>' . 'Student Roll No' . '</th>';
        $output .= '<th>' . 'student Name' . '</th>';
        $output .= '<th>' . 'Class' . '</th>';
        $output .= '<th>' . 'Select Student' . '</th>';
        $output .= '<th>' . 'Update By' . '</th>';
        $output .= '<th>' . 'Action' . '</th>';

     
        $output .= '</thead>';

        $output .= '<tbody>';

        foreach ($data as $item) {
           
            $output .= '<form action="#" method="post">';

            $output .= '<tr>';
            $output .= '<td>' . $item->id . '</td>';
            $output .= '<td style="display:none;"><input type="text" name="id" value=' . $item->id . '></td>';
            $output .= '<td>';
            if($item->admission)
            {
                $output .=  $item->admission->admission_no;
            }
            $output .= '</td>';
            $output .= '<td>' . $item->roll_no . '</td>';
            $output .= '<td>';
            if($item->user)
            {
                $output .=  $item->user->name;
            }
            $output .= '</td>';

            $output .= '<td>';
            if($item->class)
            {
                $output .=  $item->class->class;
            }
            $output .= '</td>';
            $output .= '<td><input type="checkbox" class="btn btn-success"></td>';
            $output .= '<td>';
            if($item->user)
            {
                $output .=  $item->user->email;
            }
            $output .= '</td>';       
            $output .= '<td><input type="Submit" class="btn btn-success"></td>';
            $output .= '</tr>';
        }

        $output .= '</tbody>';

        $section = Section::where('class_id', $id)->get();

        if ($section) {
            // $data .= '<option>'.'select'.'</option>';
            foreach ($section as $item) {
                $data .= '<option value="' . $item->id . '">' . $item->name . '</option>';
            }
        }


        $result = ['output' => $output, 'section' => $data];

        return $result;
    }
    public function mother_student_id_card()
    {
        $class = Classes::all();
        return view('student.mother_student_id_card', ['todoss' => student::orderBy('id', 'DESC')->get(), 'class' => $class]);
    }
    public function get_section_mother($id)
    {
        $section = section::where('class_id', $id)->get();
        return $section;
    }
    public function getTableguarmother($id)
    {
        $data = student::with('admission','user','class','section')->where('class_id', $id)->get();
        $output = '<thead>';
        $output .= '<tr>';
        $output .= '<th>' . 'S.no' . '</th>';
        $output .= '<th>' . 'Admission No.' . '</th>';
        $output .= '<th>' . 'Student Roll No' . '</th>';
        $output .= '<th>' . 'student Name' . '</th>';
        $output .= '<th>' . 'Class' . '</th>';
        $output .= '<th>' . 'Select Student' . '</th>';
        $output .= '<th>' . 'Update By' . '</th>';
        $output .= '<th>' . 'Action' . '</th>';

     
        $output .= '</thead>';

        $output .= '<tbody>';

        foreach ($data as $item) {
           
            $output .= '<form action="#" method="post">';

            $output .= '<tr>';
            $output .= '<td>' . $item->id . '</td>';
            $output .= '<td style="display:none;"><input type="text" name="id" value=' . $item->id . '></td>';
            $output .= '<td>';
            if($item->admission)
            {
                $output .=  $item->admission->admission_no;
            }
            $output .= '</td>';
            $output .= '<td>' . $item->roll_no . '</td>';
            $output .= '<td>';
            if($item->user)
            {
                $output .=  $item->user->name;
            }
            $output .= '</td>';

            $output .= '<td>';
            if($item->class)
            {
                $output .=  $item->class->class;
            }
            $output .= '</td>';
            $output .= '<td><input type="checkbox" class="btn btn-success"></td>';
            $output .= '<td>';
            if($item->user)
            {
                $output .=  $item->user->email;
            }
            $output .= '</td>';       
            $output .= '<td><input type="Submit" class="btn btn-success"></td>';
            $output .= '</tr>';
        }

        $output .= '</tbody>';

        $section = Section::where('class_id', $id)->get();

        if ($section) {
            // $data .= '<option>'.'select'.'</option>';
            foreach ($section as $item) {
                $data .= '<option value="' . $item->id . '">' . $item->name . '</option>';
            }
        }


        $result = ['output' => $output, 'section' => $data];

        return $result;
    }
    public function health_zone()
    {
        $student = user::all();
        return view('student.health_zone',['student'=>$student]);
    }
    public function actionstudentInfo($id){
        $data = user::with('student')->where('id',$id)->first();
        return $data;
        }
        public function healthInsert(Request $request){
            $form =Health::insert([
                'medical_history'=>$request->student_medical_history,
                'student_height'=>$request->student_height,
                'student_weight'=>$request->student_weight,
                'checkup_date'=>$request->checkup_date,
                'hospital_name'=>$request->checkup_hospital_name,
                'doctor_name'=>$request->checkup_doctor_name,
                'checkup_report'=>$request->checkup_report1,
                'blood_group'=>$request->blood_group,
                'checkup_bp'=>$request->checkup_bp,
                'checkup_hb'=>$request->checkup_hb,
                'checkup_suger'=>$request->checkup_suger,
                'checkup_hiv'=>$request->checkup_hiv,
                'checkup_tb'=>$request->checkup_tb,
                'eye_problem'=>$request->eye_problem,
                'specs'=>$request->specs,
                'checkup_discription'=>$request->checkup_discription,
                'checkup_marks'=>$request->checkup_marks,
            ]);
            return redirect('student/health_zone'); 
        }

   
    public function physical_fitness()
    {
        
        $student = user::all();
        return view('student.physical_fitness',['student'=>$student]);  
    }

    public function actionstudentInfor($id){
        // return $id;

        $data = user::with('student')->where('id',$id)->first();
        return $data;
        }
        public function physicalInsert(Request $request){
            $form =Health::insert([
                'fitness_test_date'=>$request->fitness_test_date,
                'body_Composition_weight_row_score'=>$request->body_weight_rawscore,
                'body_Composition_height_row_score'=>$request->body_height_rawscore,
                'cardio_resiratory_endurance_pacer'=>$request->pacer_raw_score,
                'flexibility_trunk_lift'=>$request->trunk_lift_raw_score,
                'flexibility_sit_and_reach(L)'=>$request->sit_reach_l_raw_score,
                'flexibility_sit_and_reach(R)'=>$request->sit_reach_r_raw_score,
                'muscular_endurance_curl-ups'=>$request->curl_raw_score,
                'muscular_strength_standing_long_jump'=>$request->standing_raw_score,
               
            ]);
            return redirect('student/physical_fitness'); 
        }
  
}
