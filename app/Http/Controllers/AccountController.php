<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
// use Illuminate\Notifications\Notificable;
use App\Models\Account;
use App\Models\User;
use App\Models\Address;
use App\Models\Classes;
use App\Models\Employee;
use App\Models\AccountInfo;
use App\Models\Student;
use App\Models\Fee;
use App\Models\Salary;
use Validator;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;

class AccountController extends Controller
{
    public function Account(){
        return view('account.account');
    }

    public function AccountFee(){
        return view('fees_monthly.student_fee_list_particular_details');
    }

    public function AddAccount()
    {
        
        $employees = User::where('user_type','employee')->get();
            $data['employees'] = $employees;
        $students = User::where('user_type','student')->get();
            $data['students'] = $students;
        $classes =Classes::get();
       
        return view('account.add_account', $data,['classes'=>$classes]);
    }

    public function fetchStudentDropdown($class_id = null) {
        $students = Student::with('user')->where('class_id',$class_id)->get();
        return response()->json([
            'status' => 1,
            'students' => $students
        ]);
    }

    public function AddBankAccount(Request $req){
        $req->validate([
            // 'cust_name' => 'required',
            'bank_account_holder_name' => 'required',
            'bank_account_no' => 'required | max:16',
            'bank_name' => 'required',
            'bank_branch_name' => 'required | alpha',
            'bank_ifsc_code' => 'required | alpha_num',
        ]);
        
        if($req->teacherDropdown==''){
            $cust_name = $req->studentDropdown;
        }
        else{
            $cust_name = $req->teacherDropdown;
        }

        $data = new Account;
        $data->user_id = $cust_name;
        $data->emp_bank_account_name = $req->bank_account_holder_name;
        $data->emp_branch_name = $req->bank_branch_name;
        $data->emp_bank_name = $req->bank_name;
        $data->emp_account_no = $req->bank_account_no;
        $data->emp_ifsc_code = $req->bank_ifsc_code;
        $data->user_type = $req->userDropdown;        
        $data->staff_type = $req->staffDropdown;
        $data->save();

        return redirect(route('account-list'))->with('success', 'Account added successfully');
    }
    
    public function AccountList(){
        $accounts = Account::all();
        return view('account.account_list', ['accounts'=>$accounts]);
    }
    
    public function EditBankAccount($id){
        $account = Account::find($id);
        return view('account.edit_bank_account', ['account'=>$account]);
    }
    
    public function Update(Request $req){
        $req->validate([
            'bank_account_holder_name' => 'required',
            'bank_account_no' => 'required | max:16',
            'bank_name' => 'required',
            'bank_branch_name' => 'required | alpha',
            'bank_ifsc_code' => 'required | alpha_num',
        ]);
    $data = Account::where('id',$req->id)->update([
            'user_id' => $req->user_id,
            'emp_bank_account_name' => $req->bank_account_holder_name,
            'emp_branch_name' => $req->bank_branch_name,
            'emp_bank_name' => $req->bank_name,
            'emp_account_no' =>$req->bank_account_no,
            'emp_ifsc_code' =>$req->bank_ifsc_code
            
        ]);
        return redirect(route('account-list'))->with('success','Account Update Successfully ');
    }
  
    public function Destroy($id)
    {
        $acc_data = Account::findOrFail($id);
        $acc_data->delete();
        return response()->json(['status'=>'Account Deleted']);
    }
    
    public function AjaxChangeAccount($id){   
        $staffs=User::with('address', 'student')->where('id',$id)->first();
           return $staffs;
    }
    public function AjaxChangeAccountStaff($id){   
        $employees=User::with('address', 'employee')->where('id',$id)->first();
           return $employees;
    }

    public function AddIncomeOrExpenceInfo(){
            $classes =Classes::get();
            $users = User::get();
            $employees = User::where('user_type','employee')->get();
            // $students = User::where('user_type','student')->get();
        return view('account.add_income_or_expence_info',  ['classes'=>$classes,'users'=>$users, 'employees'=>$employees]);
    }

    public function fetchStudentDropdownExpense($class_id = null) {
        $students = Student::with('user')->where('class_id',$class_id)->get();
        return response()->json([
            'status' => 1,
            'students' => $students
        ]);
        return dd($students);
    }

    public function AddIncomeOrExpenceInfoData(Request $req){
        $req->validate([
            'account_customer_name' => 'required',
            'account_customer_address' => 'required',
            'account_customer_contact_no' => 'required',
            'bill_quotation_date' => 'required',
            'bill_quotation_no' => 'required',
            'account_customer_remark' => 'required',
            'bill_image' => 'required',
        ]);

        if($req->user_id==''){
            $cust_name = $req->account_customer_name;
            $address = $req->account_customer_address;
        }
        else{
            $cust_name = $req->user_id;
            $address = $req->address_id;
        }
        
        $data = new AccountInfo;
        $data->amount_type = $req->account_amount_type;
        $data->office_account = $req->office_account_info;
        $data->party_type = $req->account_party_type;
        // $data->other_advance = $req->other_or_advance;
        // $data->advance_amount = $req->advance_amount;
        // $data->advance_installment = $req->advance_installment;
        $data->cust_name = $cust_name;        
        $data->address = $address;
        $data->contact_no = $req->account_customer_contact_no;
        $data->designation = $req->account_customer_designation;
        $data->debit_amount = $req->account_customer_total_amount;
        $data->credit_amount = $req->account_customer_credit_amount;
        $data->date = $req->account_customer_date;
        $data->bill_no = $req->bill_quotation_no;
        $data->bill_date = $req->bill_quotation_date;
        $data->payment_mode = $req->account_payment_mode;
        $data->bank_name = $req->account_cheque_bank_name;
        $data->cheque_no = $req->account_cheque_no;
        $data->cheque_date = $req->account_cheque_date;
        $data->account_no = $req->account_neft_bank_account_no;
        $data->remark = $req->account_customer_remark;
        if ($req->hasfile('bill_image')) 
        {
          $file = $req->file('bill_image');
          $extension = $file->getClientOriginalName();
          $file->move('images/account', $extension);
          $data->bill_image =$extension;
        }
        $data->save();
        return redirect(route('income-or-expence-list'))->with('success','Income added successfully');
    }
    
    public function IncomeOrExpenceList(){
            $accountInfo = AccountInfo::all();
            $addresses= Address::get();
            $users= User::get();
        return view('account.income_or_expence_list', ['accountInfo'=>$accountInfo, 'addresses'=>$addresses, 'users'=>$users]);
    }
    
    public function IncomeOrExpenceEdit($id){
        $AccountInfo = AccountInfo::find($id);
        $userId = $AccountInfo->cust_name;
        $userz = User::find($userId);
        if($userz)
        {
            $userAccountName = $userz->name;
        }
        else
        {
            $userAccountName = $userId;
        }
        $userAdd = $AccountInfo->address;

        $userAddress = Address::find($userAdd);
        if($userAddress)
        {
            $userAddressName = $userAddress->street_address;
        }
        else{
            $userAddressName = $userAdd;
        }

        $classes =Classes::get();
        $users = User::get();
        $addresses = Address::get();
        $employees = User::where('user_type','employee')->get();
        $students = User::where('user_type','student')->get();
        return view('account.income_or_expence_edit', ['userAccountName'=>$userAccountName,'classes'=>$classes,'AccountInfo'=>$AccountInfo,'users'=>$users,'addresses'=>$userAddressName,'employees'=>$employees,'students'=>$students]);
    }

    public function IncomeOrExpenceUpdate(Request $req){
        $req->validate([
            'account_customer_name' => 'required',
            'account_customer_address' => 'required',
            'account_customer_contact_no' => 'required',
            'bill_quotation_date' => 'required',
            'bill_quotation_no' => 'required',
            'account_customer_remark' => 'required',
            // 'bill_image' => 'required',
        ]);

        if($req->user_id==''){
            $cust_name = $req->account_customer_name;
            $address = $req->account_customer_address;
        }
        else{
            $cust_name = $req->user_id;
            $address = $req->address_id;
        }

        $data = AccountInfo::find($req->id);
        $data->amount_type = $req->account_amount_type;
        $data->office_account = $req->office_account_info;
        $data->party_type = $req->account_party_type;
        // $data->other_advance = $req->other_or_advance;
        // $data->advance_amount = $req->advance_amount;
        // $data->advance_installment = $req->advance_installment;
        $data->cust_name = $cust_name;        
        $data->address = $address;
        $data->contact_no = $req->account_customer_contact_no;
        $data->designation = $req->account_customer_designation;
        $data->debit_amount = $req->account_customer_total_amount;
        $data->credit_amount = $req->account_customer_credit_amount;
        $data->date = $req->account_customer_date;
        $data->bill_no = $req->bill_quotation_no;
        $data->bill_date = $req->bill_quotation_date;
        $data->payment_mode = $req->account_payment_mode;
        $data->bank_name = $req->account_cheque_bank_name;
        $data->cheque_no = $req->account_cheque_no;
        $data->cheque_date = $req->account_cheque_date;
        $data->account_no = $req->account_neft_bank_account_no;
        $data->remark = $req->account_customer_remark;
        if ($req->hasfile('bill_image')) 
        {
            $destination = 'images/account/'.$data->bill_image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
          $file = $req->file('bill_image');
          $extension = $file->getClientOriginalName();
          $file->move('images/account/', $extension);
          $data->bill_image =$extension;
        }       
        $data->update();
        return redirect(route('income-or-expence-list'))->with('success','Updated successfully');
    }


    public function DestroyIncomeOrExpence($id)
    {
        $acc_data = AccountInfo::find($id);
        $acc_data->delete();
        return response()->json(['status'=>'Account Deleted']);
    }

    public function Ledger(){
        return view('account.ledger');
    }

    public function SearchDateWise(Request $request){

        $date =  \Carbon\Carbon::create($request->from_date , 'Asia/Kolkata');
        $from_date = \Carbon\Carbon::createFromDate($date->year, $date->month,$date->day)->format('Y-m-d');

        $date =  \Carbon\Carbon::create($request->to_date , 'Asia/Kolkata');
        $to_date = \Carbon\Carbon::createFromDate($date->year, $date->month,$date->day)->format('Y-m-d');

        {
            if($request->ajax())
            {
             if($request->from_date != '' && $request->to_date != '')
             {
              $data = Fee::whereBetween('submission_date', array($from_date, $to_date))
                ->get();
             }
            }
             if($request->ajax())
            {
             if($request->from_date != '' && $request->to_date != '')
             {
              $dataa = Salary::whereBetween('date', array($from_date, $to_date))
                ->get();
             }

             if($data)
             $sumIncome = $data->sum('grand_total');
        {
            $output = '<table class="table table-bordered table-striped text-center">';
            $output = '<thead>';
            $output .= '<tr>';                       
            $output .= '<th>' . 'S No.' . '</th>';
            $output .= '<th>' . 'Customer Name' . '</th>';
            $output .= '<th>' . 'Amount Type' . '</th>';
            $output .= '<th>' . 'Income From' . '</th>';
            $output .= '<th>' . 'Date' . '</th>';
            $output .= '<th>' . 'Total Amount' . '</th>';
            // $output .= '<th>' . 'Details' . '</th>';
            $output .= '</tr>';
            $output .= '</thead>';
            $output .= '<tbody>';
            if(count($data)>0){
                $l=1;
                foreach($data as $item)
                {
                    $output .= '<tr>';
                    $output .= '<td>'.$l++.'</td>'; 
                    $output .= '<td>'.$item->user->name.'</td>';
                    $output .= '<td>'.$item->amount_type.'</td>';
                    $output .= '<td>'.$item->fee_info.'</td>';;
                    $output .= '<td>'.$item->submission_date.'</td>';
                    $output .= '<td>'.$item->grand_total.'</td>';
                    // $output .= '<td>'."<button type='button' class='btn btn-info btn-sm' onclick='details_function('$item->id')' >Details</button>"."<td>";
                    $output .= '</tr>';
                }
                $output .= '</tbody>';
                $output .= '</table>';               
            }
            else{
            $output .='<td>No Data Found</td>';
            }
        }
            
             if($dataa)
             $sumExpence = $dataa->sum('total_amount');

        {
            $out = '<table class="table table-bordered table-striped text-center">';
            $out = '<thead>';
            $out .= '<tr>';                       
            $out .= '<th>' . 'S No.' . '</th>';
            $out .= '<th>' . 'Customer Name' . '</th>';
            $out .= '<th>' . 'Amount Type' . '</th>';
            $out .= '<th>' . 'Expence For' . '</th>';
            $out .= '<th>' . 'Date' . '</th>';
            $out .= '<th>' . 'Total Amount' . '</th>';
            // $out .= '<th>' . 'Details' . '</th>';
            $out .= '</tr>';
            $out .= '</thead>';
            $out .= '<tbody>';
            if(count($dataa)>0){
                $l=1;
                foreach($dataa as $item)
                {
                    $out .= '<tr>';
                    $out .= '<td>'.$l++.'</td>'; 
                    $out .= '<td>'.$item->user->name.'</td>';
                    $out .= '<td>'.$item->amount_type.'</td>';
                    $out .= '<td>'.$item->expence_for.'</td>';;
                    $out .= '<td>'.$item->date.'</td>';
                    $out .= '<td>'.$item->total_amount.'</td>';
                    $out .= '</tr>';
                }
                $out .= '</tbody>';
                $out .= '</table>';
            }
            else{
            $out .='<td>No Data Found</td>';
            }
        }
                $grand_total=$sumIncome-$sumExpence;
            $detail =([
                    'data'=>$output,
                    'dataa'=>$out,
                    'feeIncome'=>$sumIncome,
                    'feeExpence'=>$sumExpence,
                    'grand_total'=>$grand_total
                    ]);
            return $detail;
           }
        }
    }
    //        {
    //          if($request->ajax())
    //         {
    //             if($request->from_date != '' && $request->to_date != '')
    //             {
    //              $dataa = Salary::whereBetween('date', array($from_date, $to_date))
    //                ->get();
    //             }
          
    //        $detail =([
    //         'data'=>$data,
    //         'dataa'=>$dataa
    //        ]);
    //        return $detail;

    //    }
    // public function IncomeOrExpenceList(){
    //     $accountInfo = AccountInfo::all();
    //     $addresses= Address::get();
    //     $users= User::get();
    // return view('account.income_or_expence_list', ['accountInfo'=>$accountInfo, 'addresses'=>$addresses, 'users'=>$users]);
// }


    public function LedgerReport(){
        $accountInfo = AccountInfo::all();
        $addresses= Address::get();
        $users= User::get();
        return view('account.ledger_report', ['accountInfo'=>$accountInfo, 'addresses'=>$addresses, 'users'=>$users]);
    }

    public function LedgerReportMonthly(){
        return view('account.ledger_report_monthly');
    }
    
    public function IncomeExpenseReport(){
        return view('account.income_expense_report');
    }

    public function SearchIncomeDateWise(Request $request){

        $date =  \Carbon\Carbon::create($request->from_date , 'Asia/Kolkata');
        $from_date = \Carbon\Carbon::createFromDate($date->year, $date->month,$date->day)->format('Y-m-d');

        $date =  \Carbon\Carbon::create($request->to_date , 'Asia/Kolkata');
        $to_date = \Carbon\Carbon::createFromDate($date->year, $date->month,$date->day)->format('Y-m-d');

        {
            if($request->ajax())
            {
             if($request->from_date != '' && $request->to_date != '')
             {
              $data = AccountInfo::whereBetween('date', array($from_date, $to_date))
                ->get();
             }
            }
           
             if($data)
             $sumIncome = $data->sum('credit_amount');
             $sumExpense = $data->sum('debit_amount');

        {
            $output = '<table class="table table-bordered table-striped text-center">';
            $output = '<thead>';
            $output .= '<tr>';                       
            $output .= '<th>' . 'S No.' . '</th>';
            $output .= '<th>' . 'Date' . '</th>';
            $output .= '<th>' . 'Customer Name' . '</th>';
            $output .= '<th>' . 'Income Amount' . '</th>';
            $output .= '<th>' . 'Expence Amount' . '</th>';
            $output .= '<th>' . 'Payment Mode' . '</th>';
            $output .= '</tr>';
            $output .= '</thead>';
            $output .= '<tbody>';
            if(count($data)>0){
                $l=1;
                foreach($data as $item)
                {
                    $output .= '<tr>';
                    $output .= '<td>'.$l++.'</td>'; 
                    $output .= '<td>'.$item->date.'</td>';
                    if($item->user){
                    $output .= '<td>'.$item->user->name.'-'.$item->user->phone_number.'</td>';
                    }
                    else{
                        $output .= '<td>'.$item->cust_name.'-'.$item->contact_no.'</td>';
                    }    
                    $output .= '<td>'.$item->credit_amount.'</td>';
                    $output .= '<td>'.$item->debit_amount.'</td>';;
                    $output .= '<td>'.$item->payment_mode.'</td>';
                    $output .= '</tr>';
                }
                $output .= '</tbody>';
                $output .= '<th>' . '' . '</th>';
                $output .= '<th>' . '' . '</th>';
                $output .= '<th>' . 'Grand Total =' . '</th>';
                $output .= '<th>' . $sumIncome . '</th>';
                $output .= '<th>' . $sumExpense . '</th>';
                $output .= '<th>' . '' . '</th>';
                $output .= '</table>';               
            }
            else{
            $output .='<td>No Data Found</td>';
            }
        
            $detail =([
                    'data'=>$output,
                    ]);
            return $detail;
           }
        }
    }


    public function RefundReport(){
        return view('account.refund_report');
    }

    public function LedgerAdvanceSalaryReport(){
        return view('account.ledger_advance_salary_report');
    }

    public function print($id)
{
    $AccountInfo = AccountInfo::find($id);
        $userId = $AccountInfo->cust_name;
        $userz = User::find($userId);
        if($userz)
        {
            $userAccountName = $userz->name;
        }
        else
        {
            $userAccountName = $userId;
        }
        $userAdd = $AccountInfo->address;

        $userAddress = Address::find($userAdd);
        if($userAddress)
        {
            $userAddressName = $userAddress->street_address;
        }
        else{
            $userAddressName = $userAdd;
        }

        $classes =Classes::get();
        $users = User::get();
        $addresses = Address::get();
        $employees = User::where('user_type','employee')->get();
        $students = User::where('user_type','student')->get();
        return view('account.print', ['userAccountName'=>$userAccountName,'classes'=>$classes,'AccountInfo'=>$AccountInfo,'users'=>$users,'addresses'=>$userAddressName,'employees'=>$employees,'students'=>$students]);
    }
    // $data = AccountInfo::find($id);
    // return view('account.print', compact('data'));
// }

}