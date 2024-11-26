<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Database\QueryException; 
use App\Models\Student;
use Illuminate\View\View;
class StudentController extends Controller
{
    public function index(){
        return view('web.index');
    }
    public function daftar(){
        return view('web.daftar');
    }
    public function login(){
        return view('web.login');
    }
    public function admin(){
        $students = Student::all();
        return view('web.admin', ['students' => $students]);
    }
    public function store(Request $request)
    {
        try {
            $data = $request->validate([
                'nisn' => 'required|numeric',
                'nama_lengkap' => 'required',
                'nik' => 'required|numeric',
                'jurusan' => 'required',
                'jk' => 'required',
                'tempat_lahir' => 'required',
                'tgl_lahir' => 'required',
                'agama' => 'required',
                'kelas' => 'required',
                'anak_ke' => 'required|numeric',
                'alamat_siswa' => 'required',
                'nama_ayah' => 'required',
                'nik_ayah' => 'required|numeric',
                'pekerjaan_ayah' => 'required',
                'penghasilan_ayah' => 'required',
                'nama_ibu' => 'required',
                'nik_ibu' => 'required|numeric',
                'pekerjaan_ibu' => 'required',
                'penghasilan_ibu' => 'required',
            ]);

            $newStudent = Student::create($data);

            return redirect(route('public.home'))->with('success', 'Student data has been successfully added.');
        } catch (QueryException $e) {
            // Log the database error or handle it appropriately
            return redirect(route('public.home'))->with('error', 'A database error occurred while saving student data.');
        } catch (\Exception $e) {
            // Log other general errors or handle them appropriately
            return redirect(route('public.home'))->with('error', 'An error occurred while processing the request.');
        }
    }

    public function edit(Student $student){
        return view('web.edit', ['student' => $student]);
    }
    public function update(Student $student, Request $request){
        $data = $request->validate([
            'nisn' => 'required|numeric',
            'nama_lengkap' => 'required',
            'nik' => 'required|numeric',
            'jurusan' => 'required',
            'jk' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'agama' => 'required',
            'kelas' => 'required',
            'anak_ke' => 'required|numeric',
            'alamat_siswa' => 'required',
            'nama_ayah' => 'required',
            'nik_ayah' => 'required|numeric',
            'pekerjaan_ayah' => 'required',
            'penghasilan_ayah' => 'required',
            'nama_ibu' => 'required',
            'nik_ibu' => 'required|numeric',
            'pekerjaan_ibu' => 'required',
            'penghasilan_ibu' => 'required',
        ]);

        $student->update($data);
        return redirect(route('public.home'))->with('success', 'Product Update Succesfully');
    }
    public function destroy(Student $student){
        $student->delete();
        return redirect(route('public.home'))->with('success', 'Product Update Succesfully');
    }

    public function profileSiswa(){
        $nama = '{{Auth::user()->name}}'  ;
    }
}
