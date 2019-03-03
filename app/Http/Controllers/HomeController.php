<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth ;
use App\Employee;
use App\Day;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $employees= Employee::all();
        return view('employee', compact('employees'));
    }

    public function add(Request $request) {

    return view('add'); 
   } 

   public function store(Request $request) {

    if ($request->isMethod('post')){
       $em= new Employee();
       $this->validate(request(), [
          'name' => 'required',
          'email' => 'required' ,
          'mobile_number' => 'required' ,
          'hire_date' => 'required'
        ]);

       $em->name=$request->input('name');
       $em->email=$request->input('email');
       $em->mobile_number=$request->input('mobile_number');
       $em->hire_date=$request->input('hire_date');
       $em->user_id=Auth::user()->id;
       $em->save();
       return redirect('home');
    }
   }

    public function update(Request $request, $id) {
    
    if ($request->isMethod('put')){
        $em = Employee::find($id);
        $this->validate(request(), [
          'name' => 'required',
          'email' => 'required' ,
          'mobile_number' => 'required' ,
          'hire_date' => 'required'
        ]); 
       $em->name=$request->input('name');
       $em->email=$request->input('email');
       $em->mobile_number=$request->input('mobile_number');
       $em->hire_date=$request->input('hire_date');
       $em->user_id=Auth::user()->id;
       $em->save();
       return redirect('home');
     }
    }

   public function delete($id) {
    $employee= Employee::find($id);
    $employee->delete();

   return redirect('home');
   }

   public function edit($id){

    $employee= Employee::find($id);
    
    return view('edit', compact('employee')); 
   }

   public function attendance(Request $request) {
    
    $days= Day::all();
    return view('attendance.employee', compact('days')); 
   } 

   public function attendanceAdd(Request $request) {

    return view('attendance.add'); 
   } 


}
