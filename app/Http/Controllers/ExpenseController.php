<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function expenselist(){
        $expense=Expense::all();

        return view('Backend.pages.expenses.expenselist', compact('expense'));
    }
    public function expenseform(){
        return view('Backend.pages.expenses.expenseform');
    }
    public function expensestore(Request $request){

        $request->validate([

            'date'=>'required',
        ]);
        Expense::create([
         'date'=>$request->date,
         'remarks'=>$request->remarks,
         'remarks'=>$request->remarks,
         'details'=>$request->details,
         'category'=>$request->category,
         'overall_balance'=>$request->overall_balance,
        ]);
        return redirect()->route('expenselist'); 
    }

    public function deleteexpense($expense_id)
{
    Expense::findOrFail($expense_id)->delete();
         return redirect()->back()->with('message','expense deleted successfully.');
}



public function viewexpense($expense_id)
    {
      $expense=Expense::find($expense_id);
      return view('Backend.pages.expenses.view',compact('expense'));
    }

    public function editexpense($expense_id)
    {
        $expense=Expense::find($expense_id);
        //$categories=Category::all();
        return view('Backend.pages.expenses.edit',compact('expense'));
    }


    public function update(Request $request,$expense_id){

        $expense=Expense::find($expense_id);
         
//dd($request->all());
        $expense->update([
            'date'=>$request->date,
            'remarks'=>$request->remarks,
            'remarks'=>$request->remarks,
            'details'=>$request->details,
            'category'=>$request->category,
            'overall_balance'=>$request->overall_balance,

        ]);

        return redirect()->route('expenselist')->with('message','Update success.');

    }


}
