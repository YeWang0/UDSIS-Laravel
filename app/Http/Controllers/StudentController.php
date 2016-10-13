<?php
/**
 * Created by PhpStorm.
 * User: yvan
 * Date: 9/18/16
 * Time: 5:51 PM
 */

namespace App\Http\Controllers;


use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $students=Student::paginate(6);
        return view('student.index',
            [
                'students'=>$students
            ]);
    }
    public function create(Request $request){
        if($request->getMethod()=='POST'){
//            $this->validate(
//
//            );

            $student=$request->input('Student');
            $result=Student::create(
                [
                    'name'=>$student['name'],
                    'age'=>$student['age'],
                    'sex'=>$student['sex']
                ]
            );
            if($result){
                return redirect(url('student/index'))->with(['success'=>' Created a new student information!']);
            }else{
                return redirect()->back();
            }
        }
        else {
            $student=new Student();
            $student->name='';
            $student->age='';
            $student->sex='';
            return view('student.create',['student'=>$student]);
        }
    }

    public function update(Request $request,$id){
//        $student=$request->input('Student');
//        dd($student);
        if($request->getMethod()=='POST'){
            $data=$request->input('Student');
//            dd($data);
            $student=Student::find($id);
            $student->name=$data['name'];
            $student->age=$data['age'];
            $student->sex=$data['sex'];
            $student->save();
            return redirect(url('student/index'))->with(['success'=>'Updated a student information!']);
        }
        $student=Student::find($id);
        return view('student.update',['student'=>$student]);
    }

    public function delete($id){
        $result=Student::destroy($id);
        if($result){
            return redirect()->back()->with(['success'=>'Deleted a student information!']);
        }else{
            return redirect()->back()->with(['error'=>'Can not delete the student information!']);
        }
    }
//    public function save(Request $request){
//        $student=$request->input('Student');
//        $result=Student::create(
//            [
//                'name'=>$student['name'],
//                'age'=>$student['age'],
//                'sex'=>$student['sex']
//            ]
//        );
////         var_dump($result);
//        if($result){
//            return redirect(url('student/index'));
//        }else{
//            return redirect()->back();
//        }
//    }
}