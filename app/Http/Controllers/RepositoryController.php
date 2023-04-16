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
    $posts = Repository::where('pa2', $user)->latest()->get();

    $action = __FUNCTION__;

    return view('dosen.daftar_bimbingan', compact('page_title', 'page_description', 'action', 'logo', 'posts', 'logoText'));
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
