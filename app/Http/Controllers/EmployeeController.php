<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmployeeController extends Controller
{
    public function addEmployee(Request $request)
    {

        $request->validate([
            'first_name'=> 'required|string',
            'first_name'=> 'required|string',
            'email' => 'required|email',
            'country_code' => 'required',
            'address' => 'required',
            'gender' => 'required',
            'hobby' => 'required|array',
            'photo' => 'image|mimes:jpg,jpeg,gif,png'
        ]);

        if($request->hasFile('photo'))
        {
            $file = $request->file('photo');

            $photoName = $file->getClientOriginalName();

            $path = $file->storeAs('photo', $photoName, 'public');



        }
            // dd($request);
         $employee = Employee::create(['first_name' => $request->first_name,
                                        'last_name' => $request->last_name,
                                        'email' => $request->email,
                                        'country_code' => $request->country_code,
                                        'mobile' => $request->mobile,
                                        'address' => $request->address,
                                        'gender' => $request->gender,
                                        'hobbies' => json_encode($request->hobby),
                                        'photo' => basename($path)

        ]);

        if($employee)
        {
            return redirect('/display/employee');
        }
        else
        {
            return redirect('/add/employee')->with('message','Fill Form Correctly');
        }

    }
    public function display()
    {

        $employee = Employee::all();
        return view('displayemployee',compact('employee'));
    }
    public function editEmployee($id)
    {
        $editEmployee = Employee::findOrFail($id);
        $hobbies = json_decode($editEmployee->hobbies);

        return view('editEmployee',compact('editEmployee','hobbies'));
    }

    public function updateEmployee(Request $request , $id)
    {

        $request->validate([
            'first_name'=> 'required|string',
            'first_name'=> 'required|string',
            'email' => 'required|email',
            'country_code' => 'required',
            'address' => 'required',
            'gender' => 'required',
            'hobby' => 'required|array',
            'photo' => 'image|mimes:jpg,jpeg,gif,png'
        ]);
        // dd($request);
        $employee = Employee::findOrFail($id);
        //    dd($employee->hobbies);

            $employee->first_name = $request->input('first_name');
            $employee->last_name = $request->input('last_name');
            $employee->email = $request->input('email');
            $employee->country_code = $request->input('country_code');
            $employee->mobile = $request->input('mobile');
            $employee->address = $request->input('address');
            $employee->gender = $request->input('gender');
            $employee->hobbies = json_encode($request->input('hobby'));



            if ($request->hasFile('photo')) {
                $file = $request->file('photo');

            $photoName = $file->getClientOriginalName();

            $path = $file->storeAs('photo', $photoName, 'public');

                $employee->photo = $photoName;
                }
                $employee->save();

            return redirect('display/employee');

    }

    public function deleteEmployee($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();
        return redirect()->back();
    }


}
