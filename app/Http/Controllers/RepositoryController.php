<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Repository;

class RepositoryController extends Controller
{
	
	    // Dashboard
    public function dashboard_1()
    {
      
     
        $page_title = 'Dashboard';
        $page_description = 'Some description for the page';
        $logo = "images/logo.png";
        $logoText = "images/logo-text.png";
        $active="active";
        $event_class="schedule-event";
        $button_class="btn-primary";
        $action = __FUNCTION__;
		
        return view('dashboard.index', compact('page_title', 'page_description','action','logo','logoText','active','event_class','button_class'));
    }
    
     // Ajax Featured Menu List
    public function featured_menu_list()
    {
        return view('dashboard.featured_menu_list');
    }
    
    // Workout Statistic
    public function workout_statistic()
    {
        
        $page_title = 'Workout Statistic';
        $page_description = 'Some description for the page';
        $logo = "images/logo.png";
        $logoText = "images/logo-text.png";
		
        $action = __FUNCTION__;

        return view('dashboard.workout_statistic', compact('page_title', 'page_description','action','logo','logoText'));
    }
	
    public function repository_view()
    {
        
        $page_title = 'Workout Statistic';
        $page_description = 'Some description for the page';
        $logo = "images/logo.png";
        $logoText = "images/logo-text.png";
		
        $action = __FUNCTION__;

        return view('mahasiswa.tambah_data', compact('page_title', 'page_description','action','logo','logoText'));
    }
    
    public function repository_daftar()
    {
        
        $page_title = 'Daftar Repository';
        $page_description = 'Some description for the page';
        $logo = "images/logo.png";
        $logoText = "images/logo-text.png";
        $posts = Repository::with('relationToUser')->latest()->get();
        //dd($posts);
        
		
        $action = __FUNCTION__;

        return view('mahasiswa.daftar_data', compact('page_title', 'page_description','action','logo','posts','logoText'));
    }

    public function repository_hapus($id)
    {
        $post = Repository::find($id);
    
        if ($post) {
            $post->delete();
    
            return redirect('repository-daftar')
                ->with('success', 'Data berhasil dihapus.');
        } else {
            return redirect('repository-daftar')
                ->with('error', 'Data tidak ditemukan atau telah dihapus sebelumnya.');
        }
    }

    public function repository_edit($id)
    {
        
        $page_title = 'Edit Data';
        $page_description = 'Some description for the page';
        $logo = "images/logo.png";
        $logoText = "images/logo-text.png";
		$post   = Repository::whereId($id)->with('relationToUser')->first();
        $users = User::where('role', 'Dosen')->get();
        $action = __FUNCTION__;

        return view('mahasiswa.edit_data', compact('page_title', 'page_description','action','logo','post', 'users','logoText'));
    }

    public function repository_update(Request $request, $id)
    {
        $repository = Repository::findOrFail($id); // ambil data repository berdasarkan id, jika tidak ada maka akan menghasilkan error 404
    
        // validasi data yang diinputkan oleh user
        $validatedData = $request->validate([
            'judul_skripsi' => 'required',
            'abstrak' => 'required',
            'pa1' => 'required',
            'pa2' => 'required',
            'sk' => 'nullable|file|max:10240', // tambahkan validasi untuk file
        ]);
    
        // update data repository dengan data yang sudah divalidasi
        $repository->update($validatedData);
    
        // cek apakah ada file yang diupload
        if ($request->hasFile('sk')) {
            $file = $request->file('sk');
            $filename = $file->getClientOriginalName(); // get original file name
            $path = $file->storeAs('public', $filename);
            $repository->sk = $filename; // set the file name to the sk attribute
            $repository->save(); // simpan perubahan pada model repository
        }
    
        return redirect('repository-daftar')->with('success', 'Data berhasil diperbarui.'); // redirect ke halaman yang dituju dengan pesan sukses
    }
    




    public function daftar_bimbingan()
{
    $page_title = 'Mahasiswa Bimbingan 1';
    $page_description = 'Some description for the page';
    $logo = "images/logo.png";
    $logoText = "images/logo-text.png";
    
    // mendapatkan nama user yang login
    $user = auth()->user()->name;
    
    // mendapatkan data dari model Repository yang memiliki pa1 sesuai dengan nama user yang login
    $posts = Repository::with('relationToUser')->where('pa1', $user)->latest()->get();

    $action = __FUNCTION__;

    return view('dosen.daftar_bimbingan', compact('page_title', 'page_description', 'action', 'logo', 'posts', 'logoText'));
}

public function daftar_bimbingan2()
{
    $page_title = 'Mahasiswa Bimbingan 2';
    $page_description = 'Some description for the page';
    $logo = "images/logo.png";
    $logoText = "images/logo-text.png";
    
    // mendapatkan nama user yang login
    $user = auth()->user()->name;
    
    // mendapatkan data dari model Repository yang memiliki pa1 sesuai dengan nama user yang login
    $posts = Repository::with('relationToUser')->where('pa2', $user)->latest()->get();

    $action = __FUNCTION__;

    return view('dosen.daftar_bimbingan2', compact('page_title', 'page_description', 'action', 'logo', 'posts', 'logoText'));
}

public function detail_data1($id)
    {
        
        $page_title = 'Edit Data';
        $page_description = 'Some description for the page';
        $logo = "images/logo.png";
        $logoText = "images/logo-text.png";
		$post   = Repository::whereId($id)->with('relationToUser')->first();
        $users = User::where('role', 'Dosen')->get();
        $action = __FUNCTION__;

        return view('mahasiswa.edit_data', compact('page_title', 'page_description','action','logo','post', 'users','logoText'));
    }

    public function detail_data2($id)
    {
        
        $page_title = 'Edit Data';
        $page_description = 'Some description for the page';
        $logo = "images/logo.png";
        $logoText = "images/logo-text.png";
		$post   = Repository::whereId($id)->with('relationToUser')->first();
        $users = User::where('role', 'Dosen')->get();
        $action = __FUNCTION__;

        return view('mahasiswa.edit_data', compact('page_title', 'page_description','action','logo','post', 'users','logoText'));
    }

public function daftar_mahasiswa()
{
    $page_title = 'Data Mahasiswa';
    $page_description = 'Some description for the page';
    $logo = "images/logo.png";
    $logoText = "images/logo-text.png";
    
    // mendapatkan nama user yang login
    $user = auth()->user()->name;
    
    // mendapatkan data dari model Repository yang memiliki pa1 sesuai dengan nama user yang login
    $posts = User::where('role', 'mahasiswa')->latest()->get();

    $action = __FUNCTION__;

    return view('admin.daftar_data_mahasiswa', compact('page_title', 'page_description', 'action', 'logo', 'posts', 'logoText'));
}

public function detail_mahasiswa($id)
    {
        
        $page_title = 'Edit Data';
        $page_description = 'Some description for the page';
        $logo = "images/logo.png";
        $logoText = "images/logo-text.png";
		$post   = User::whereId($id)->first();
        $users = User::where('role', 'Dosen')->get();
        $action = __FUNCTION__;

        return view('admin.detail_datamahasiswa', compact('page_title', 'page_description','action','logo','post', 'users','logoText'));
    }


    public function detail_dosen($id)
    {
        
        $page_title = 'Edit Data';
        $page_description = 'Some description for the page';
        $logo = "images/logo.png";
        $logoText = "images/logo-text.png";
		$post   = User::whereId($id)->first();
        $users = User::where('role', 'Dosen')->get();
        $action = __FUNCTION__;

        return view('admin.detail_datadosen', compact('page_title', 'page_description','action','logo','post', 'users','logoText'));
    }

public function daftar_dosen()
{
    $page_title = 'Data Dosen';
    $page_description = 'Some description for the page';
    $logo = "images/logo.png";
    $logoText = "images/logo-text.png";
    
    // mendapatkan nama user yang login
    $user = auth()->user()->name;
    
    // mendapatkan data dari model Repository yang memiliki pa1 sesuai dengan nama user yang login
    $posts = User::where('role', 'dosen')->latest()->get();

    $action = __FUNCTION__;

    return view('admin.daftar_data_dosen', compact('page_title', 'page_description', 'action', 'logo', 'posts', 'logoText'));
}
	
}
