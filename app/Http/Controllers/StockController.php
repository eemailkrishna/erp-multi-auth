<?php

namespace App\Http\Controllers;

use App\Models\StockCategory;
use App\Models\StockItem;
use Illuminate\Http\Request;








class StockController extends Controller
{
    public function stock(){
        return view('stock.stock');
    }
    

    
    public function ListCategory(){

        $data = StockCategory::all();
        return view('stock.category_list',['data'=>$data]);
        
    }
    
    public function ItemList(){
        $data = StockItem::all();
        return view('stock.item_list',['data'=>$data]);
    }
    public function PurchaseList(){
        $data = StockItem::all();
        return view('stock.purchase_list',['data'=>$data]);
    }
    public function SaleList(){
        $data = StockItem::all();
        return view('stock.sale_list',['data'=>$data]);
    }
    public function Salesitem(){
        
        return view('stock.sales_item');
    }





//    add-item

public function AddItem(){
        $data = StockCategory::all();
    return view('stock.add_item',['data'=>$data]);
}

    public function Add_Item(Request $request)
    {
        $data = new StockItem;
        $data->name = $request->name;
        $data->category = $request->category;
        $data->brand = $request->brand;
        $data->rate = $request->rate;
        $data->description = $request->description;
        $data->quantity = $request->quantity;
        $data->code = $request->code;
        $data->save();
        return redirect('/item_list');
    }


// Get Edit
public function stockk_Edit($id){
    $var = Stockitem::find($id);
        $category = StockCategory::all();
    return view('stock.edit_item',['editst'=>$var,'category'=>$category]);
}
//update 
public function stockk_update(Request $request,$id){
        // return $request;
    $data = Stockitem::find($id);
    $data->name = $request->name;
    $data->category = $request->category;
    $data->brand = $request->brand;
    $data->rate = $request->rate;
    $data->description = $request->description;
    $data->quantity = $request->quantity;
    $data->code = $request->code;
    $data->update();
    return redirect('/item_list')->with('success', 'Data updated successfully');
    


}

  //del
    public function stockkDelete($id){
        $del=Stockitem::find($id);
        $del->delete();
        return response()->json(['status' => 'Stock delete successfully']);
       }














       
    
//  add-category...

public function CategoryAdd(){
        
    return view('stock.category_add');
}

    public function category_add(Request $req){
        $data = new StockCategory;
        $data->name= $req->name;
        $data->save();
        return redirect('category_list');
    }

// Get Edit
public function stock_Edit($id){
    $var = StockCategory::find($id);
    return view('stock.editaddcategory',['edits'=>$var]);
}
//update 
public function stock_update(Request $req,$id){
    $data = StockCategory::find($id);
    $data->name = $req->name;
    $data->update();
    return redirect('/category_list')->with('success', 'Data updated successfully');
    


}

  //del
    public function stockDelete($id)
    {
        $del = StockCategory::findOrFail($id);
        $del->delete();
        return response()->json(['status' => 'Stock delete successfully']);
            // return redirect('category_list');
       }
}
