<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        return view('employee');
    }
    public function create(Request $request){
        //echo "Data Inserted";
        $name = request('emp_name');
        $age = request('emp_age');
        $salary = request('emp_salary');

        $query = DB::insert('insert into employee (emp_name,emp_age,emp_salary) values (?,?,?)', [$name,$age,$salary]);

        if($query){
            echo "Data Inserted Successfully";
        }
        else{
            echo "Process Failed";
        }
    }
    public function display(){
        $data = DB::select('select * from employee');
        return view('display',compact('data'));
    }
    public function update($emp_id){
        $id = $emp_id;
        $data = DB::select('select * from employee where id = ?',[$id]);
        return view('update',compact('data'));
    }
    public function updateData(Request $request){
        $emp_id = request('id');
        $name = request('emp_name');
        $age = request('emp_age');
        $salary = request('emp_salary');
        $query = DB::update('update employee set emp_name = ? , emp_age = ? , emp_salary = ? where id = ?',[$name,$age,$salary,$emp_id]);
        if($query){
            return redirect('display')->with('status','Data Updated Successfully');
        }
        else{
            return redirect('display')->with('warning','Similar Data Could Not be Inserted');
        }
       
    }
    public function delete($del_id){
        $id = $del_id;
        $query = DB::delete('delete from employee where id = ?',[$id]);
        if($query){
            return redirect('display')->with('status','Data Deleted Successfully');
        }
        else{
            echo "Data Could Not be Deleted";
        }
    }
}
