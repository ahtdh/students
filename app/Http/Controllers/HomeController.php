<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Models\Group;
use App\Models\Prof;
use App\Models\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function storeStudent(Request $request)
    {
        $student = [
            'name' => $request->name,
            'birth_date' => $request->birth_date,
            'student_code' => $request->student_code,
            'supervisor_id' => $request->supervisor_id,
        ];
        $st = Student::query()->create($student);
        return redirect()->route('getStudents');
    }

    public function storeCourse(Request $request)
    {
        $course = [
            'name' => $request->name,
        ];
        $c = course::query()->create($course);
        return redirect()->route('getCourses');
    }

    public function storeProf(Request $request)
    {
        $prof = [
            'name' => $request->name,
            'group_id' => $request->group_id,
            'prof_code' => $request->prof_code,
            'type' => $request->type ?? null,
        ];
        $p = Prof::query()->create($prof);
        return redirect()->route('getProfs');

    }

    public function storeGroup(Request $request)
    {
        $group = [
            'name' => $request->name,
            'location' => $request->location,
        ];
        $g = Group::query()->create($group);
        return redirect()->route('getGroups');
    }

    public function storeTerm(Request $request)
    {
        $term = [
            'description' => $request->description,
            'end_date' => $request->end_date,
            'start_date' => $request->start_date,
        ];
        $t = course::query()->create($term);
    }

    public function getStudents()
    {
        $data = [
            'students' => Student::all()
        ];
        return view('students', $data);
    }

    public function getProfs()
    {
        $data = [
            'profs' => Prof::all()
        ];
        return view('profs', $data);
    }

    public function createProf()
    {
        $data = [
            'groups' => Group::all()
        ];
        return view('create_prof',$data);
    }
    public function createCourse()
    {
        return view('create_course',);
    }

    public function createGroup()
    {
        return view('create_group');
    }

    public function getGroups()
    {
        $data = [
            'groups' => Group::all()
        ];
        return view('groups', $data);
    }
    public function getCourses()
    {
        $data = [
            'courses' => course::all()
        ];
        return view('courses', $data);
    }

    public function searchStudents()
    {
        return view('search_student');
    }

    public function searchNameStudents(Request $request)
    {
        $students = Student::query()->where('name' , 'like','%' . $request->name . '%')->get();
        return view('students' , compact('students'));
    }


    public function creatStudent()
    {
        return view('create_student');
    }
    public function links()
    {
        return view('links');
    }

    public function StudentCode(Request $request)
    {
     return view('search_code_student');
    }
    public function getStudentCode(Request $request)
    {
        $students = Student::query()->where('student_code' , 'like','%' . $request->name . '%')->get();
        return view('students' , compact('students'));
    }

    public function profCodeCode(Request $request)
    {
     return view('search_code_sprof');
    }
    public function getProfCodeCode(Request $request)
    {
        $profs = Prof::query()->where('prof_code' , 'like','%' . $request->prof_code . '%')->get();
        return view('profs' , compact('profs'));
    }

    public function nameProfCode(Request $request)
    {
     return view('search_code_sprof');
    }
    public function getNameProfCode(Request $request)
    {
        $profs = Prof::query()->where('prof_code' , 'like','%' . $request->prof_code . '%')->get();
        return view('profs' , compact('profs'));
    }
}
