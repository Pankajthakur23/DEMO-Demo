<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;


class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Employee::all();
        return view('index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
//        echo "i am create";
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required','age'=>'required','gender'=>'required','designation'=>'required'
        ]);
        $emp= new Employee();
        $emp->name = $request->input('name');
        $emp->gender = $request->input('gender');
        $emp->age = $request->input('age');
        $emp->designation = $request->input('designation');
        $emp->save();

        return redirect('employee')->with ('Insert_Message', 'Data has been inserted successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $emp= Employee::find($id);
        return view('edit')->with('emp',$emp);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $emp= Employee::find($id);
//        return $emp;
        $emp->name = $request->input('name');
        $emp->gender = $request->input('gender');
        $emp->age = $request->input('age');
        $emp->designation = $request->input('designation');

        $request->validate([
            'name'=>'required','age'=>'required','gender'=>'required','designation'=>'required'
            ]);
        $emp->save();

        return redirect('employee')->with ('Update_Message', 'Data has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employee = Employee::find($id);
        $employee->delete();
        return redirect('employee')->with ('Delete_Message', 'Data has been deleted  successfully.');
    }
}
