<?php

namespace App\Http\Controllers;

use App\Student;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index()
    {

        $students = Student::all();


        return view('students.index', compact('students'));
    }

    public function create() /*We now have a new method or action called create & that can load a view called projects.create. It sounds like we need that view.    */

    {

        return view('students.create');


    }

    
    public function show()
    {
        
    }

    public function edit($id)
    {

        $student = Student::find($id);    
        return view('students.edit', compact('student'));
    }
   
    public function update($id)
    {
        $student = Student::find($id);    

        $student->firstname = request('firstname');
        $student->middlename = request('middlename');
        $student->lastname = request('lastname');
        $student->email = request('email');
        $student->trn = request('trn');
        $student->school = request('school');
        $student->faculty = request('faculty');
        $student->programmeofstudy = request('programmeofstudy');
        $student->yearofstudy = request('yearofstudy');
        $student->enrollmentstatus = request('enrollmentstatus');
        $student->phone = request('phone');
        $student->address = request('address');
        $student->emergencycontactname = request('emergencycontactname');
        $student->emergencyscontactrelationtoapplicant = request('emergencyscontactrelationtoapplicant');
        $student->emergencycontactsphonenumberhome = request('emergencycontactsphonenumberhome');
        $student->emergencycontactsaddress = request('emergencycontactsaddress');
        $student->howdidyouhearaboutus = request('howdidyouhearaboutus');
        $student->gender = request('gender');
        $student->maritalstatus = request('maritalstatus');
        $student->placementoption = request('placementoption');
        $student->dateofbirth = request('dateofbirth');      
        $student->description = request('description');
            
        $student->save();
      
        return redirect('/students');

    }
    
    public function destroy()
    {
        
    }


    public function store()

    {

        $student = new Student();

        
        $student->firstname = request('firstname');

        $student->middlename = request('middlename');
        $student->lastname = request('lastname');
        $student->email = request('email');
        $student->trn = request('trn');
        $student->school = request('school');
        $student->faculty = request('faculty');
        $student->programmeofstudy = request('programmeofstudy');
        $student->yearofstudy = request('yearofstudy');
        $student->enrollmentstatus = request('enrollmentstatus');
        $student->phone = request('phone');
        $student->address = request('address');
        $student->emergencycontactname = request('emergencycontactname');
        $student->emergencyscontactrelationtoapplicant = request('emergencyscontactrelationtoapplicant');
        $student->emergencycontactsphonenumberhome = request('emergencycontactsphonenumberhome');
        $student->emergencycontactsaddress = request('emergencycontactsaddress');
        $student->howdidyouhearaboutus = request('howdidyouhearaboutus');
        $student->gender = request('gender');
        $student->maritalstatus = request('maritalstatus');
        $student->placementoption = request('placementoption');
        $student->dateofbirth = request('dateofbirth');      

        $student->description = request('description');

        $student->save();

        return redirect('/students');

    }

}
