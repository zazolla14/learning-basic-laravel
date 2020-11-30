<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();

        // return view('students.index', ['students'=>$students]);
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $student = new Student;

        // $student->nama = $request->nama;
        // $student->nim = $request->nim;
        // $student->jurusan = $request->jurusan;
        // $student->save();

        // Student::create([
        //     'nama' => $request->nama,
        //     'nim' => $request->nim,
        //     'jurusan' => $request->jurusan,
        // ]);

        $request->validate([
            'nama' => 'required',
            'nim' => 'required|unique:students|size:9',
            'jurusan' => 'required',
        ],
        [
            'nama.required' => 'Nama harus diisi',
            'nim.required' => 'Nim harus diisi',
            'nim.unique' => 'Nim sudah digunakan',
            'nim.size' => 'Nim harus 9 karakter',
            'jurusan.required' => 'Jurusan harus diisi',
        ]
        );

        Student::create($request->all());
        return redirect('/students')->with('status', 'Created Data Successfull!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::where('id', $id)->first();
        
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::where('id', $id)->first();
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'nim' => 'required|unique:students|size:9',
            'jurusan' => 'required',
        ],
        [
            'nama.required' => 'Nama harus diisi',
            'nim.required' => 'Nim harus diisi',
            'nim.unique' => 'Nim sudah digunakan',
            'nim.size' => 'Nim harus 9 karakter',
            'jurusan.required' => 'Jurusan harus diisi',
        ]
        );
        
        Student::where('id', $id)
                ->update([
                    'nama' => $request->nama,
                    'nim' => $request->nim,
                    'jurusan' => $request->jurusan
                ]);

        return redirect('students')->with('status', 'Data successfull updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $student = Student::findOrFail($id);
        // $student->delete();
        Student::destroy($id);

        if ($id) {
            return redirect('/students')->with('status', 'Deleting data successfull!');
        } else {
            return redirect('/students')->with('status', 'Deleting data unsuccessfull!');
        }
    }
}
