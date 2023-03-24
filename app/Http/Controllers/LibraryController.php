<?php

namespace App\Http\Controllers;
use App\Models\librarybook;
use App\Models\libraryissuebook;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
        public function library(){
            return view('library.library');
        }
        public function LibraryBook(){

            
            return view('library.library_add_book');
        }
        public function ViewBook(){
            $data = librarybook::all();
            return view('library.view_book_library',['data'=>$data]);
        }
        public function IssueBook(Request $request ){
       
            return view('library.issue_book');
        }

        public function issue_book(Request $request)
        {
        // return $request;
            $tabel = new libraryissuebook;
            $tabel->student_name= $request->student_name;
            $tabel->student_section = $request->student_section;
            $tabel->id_card= $request->id_card;
            $tabel->book_title= $request->book_title;
            $tabel->author_name= $request->author_name;
            $tabel->issue_date= $request->issue_date;
            $tabel->due_date= $request->due_date;
            $tabel->save();
            return redirect('/view_return_book_list');


            

        }

        public function returnbook_delete($id){
            $del=libraryissuebook::find($id);
            $del->delete();
    return response()->json(['status' => 'return delete successfully']);
                
           }
           
        public function ReturnBook(){
            $data = libraryissuebook::all();
            return view('library.view_return_book_list',['data'=>$data]);
        }
        public function Elibrary(){

            return view('library.e_library');
        }
        public function ExamStaffadd(){

            return view('library.exam_stuff_add');
        }
        
        public function library_add_book(Request $request)
        {
        
            $tabel = new librarybook;
            $tabel->book_no = $request->book_no;
            $tabel->book_code_no = $request->book_code_no;
            $tabel->division= $request->division;
            $tabel->languase= $request->languase;
            $tabel->book_type = $request->book_type;
            $tabel->book_title = $request->book_title;
            $tabel->author = $request->author;
            $tabel->main_class = $request->main_class;
            $tabel->subject = $request->subject;
            $tabel->publisher_name = $request->publisher_name;
            $tabel->publisher_date = $request->publisher_date;
            $tabel->no_of_copy = $request->no_of_copy;
            $tabel->Vendor = $request->Vendor;
            $tabel->cost_of_book = $request->cost_of_book;
            $tabel->entery_date = $request->entery_date;
            $tabel->other_information = $request->other_information;
            $tabel->save();
            return redirect('/view_book_library');
        }
        
   // Get Edit
   public function viewbook_Edit($id){
    $var = librarybook::find($id);
    return view('library.editlibrary',['editl'=>$var]);
}
//update
public function viewbook_update(Request $request,$id)
{
            $tabel = librarybook::find($id);
            $tabel->book_no = $request->book_no;
            $tabel->book_code_no = $request->book_code_no;
            $tabel->division= $request->division;
            $tabel->languase= $request->languase;
            $tabel->book_type = $request->book_type;
            $tabel->book_title = $request->book_title;
            $tabel->author = $request->author;
            $tabel->main_class = $request->main_class;
            $tabel->subject = $request->subject;
            $tabel->publisher_name = $request->publisher_name;
            $tabel->publisher_date = $request->publisher_date;
            $tabel->no_of_copy = $request->no_of_copy;
            $tabel->Vendor = $request->Vendor;
            $tabel->cost_of_book = $request->cost_of_book;
            $tabel->entery_date = $request->entery_date;
            $tabel->other_information = $request->other_information;
            
            $tabel->update();
            return redirect('/view_book_library')->with('success', 'Data updated successfully');


}
 //del
public function viewbook_delete($id){
$del=librarybook::find($id);
$del->delete();
return response()->json(['status' => 'penalty delete successfully']);
    
}

    

}
