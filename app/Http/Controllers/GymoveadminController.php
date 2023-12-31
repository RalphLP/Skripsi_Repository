<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Repository;
use Auth;

class GymoveadminController extends Controller
{
	// ADMIN
    public function repository_view()
{
    $page_title = 'Repository Skripsi';
    $page_description = 'Some description for the page';
    $logo = "images/logo.png";
    $logoText = "images/logo-text.png";
    $users = User::where('role', 'Dosen')->get();
    $action = __FUNCTION__;

    return view('mahasiswa.tambah_data', compact('page_title', 'page_description', 'action', 'logo', 'logoText', 'users'));
}

public function user_update($id, $status)
{
    User::whereId($id)->update(['status'=>$status]);
    return redirect('daftar-dosen')->with('success', 'Data berhasil diverifikasi');
}



public function repository_store(Request $request)
{
    $validatedData = $request->validate([
        'judul_skripsi' => 'required',
        'id_user' => 'required',
        'abstrak' => 'required',
        'pa1' => 'required',
        'pa2' => 'required',
        'sk' => 'required',
    ]);

    $repository = Repository::updateOrCreate(
        ['id_user' => $validatedData['id_user']],
        $validatedData
    );

    if ($request->hasFile('sk')) {
        $file = $request->file('sk');
        $filename = $file->getClientOriginalName(); // get original file name
        $path = $file->storeAs('public', $filename);
        $repository->sk = $filename; // set the file name to the sk attribute
    }

    $repository->save(); // save the repository object to database

    return redirect('/repository-daftar')->with('success', 'Data berhasil ditambahkan!');
}


public function repository_download($id)
{
    $repository = Repository::findOrFail($id);
    $file_path = storage_path('app/public/' . $repository->sk); // add app/ to the file path

    return response()->download($file_path);
}





public function dashboard_2()
    {
      
     
        $page_title = 'Dashboard';
        $page_description = 'Some description for the page';
        $logo = "images/logo.png";
        $logoText = "images/logo-text.png";
        $active="active";
        $event_class="schedule-event";
        $button_class="btn-primary";
        $action = __FUNCTION__;
        $totalMahasiswa = User::where('role', 'mahasiswa')->count();
        $totalDosen = User::where('role', 'dosen')->count();
        $totalSkripsi = Repository::count();
		
        return view('dashboard.dashboard', 
        compact('page_title', 'page_description',
        'action','logo','logoText','active',
        'event_class','button_class', 'totalMahasiswa', 
        'totalDosen', 'totalSkripsi'));
    }





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
	
	     // Workoutplan
    public function workoutplan()
    {
        $page_title = 'Workout Plan';
        $page_description = 'Some description for the page';
        $logo = "images/logo.png";
        $logoText = "images/logo-text.png";
		
        $action = __FUNCTION__;

        return view('dashboard.workoutplan', compact('page_title', 'page_description','action','logo','logoText'));
    }
	    // Distance Map
    public function distance_map()
    {
        $page_title = 'Distance Map';
        $page_description = 'Some description for the page';
        $logo = "images/logo.png";
        $logoText = "images/logo-text.png";
		
        $action = __FUNCTION__;

        return view('dashboard.distance_map', compact('page_title', 'page_description','action','logo','logoText'));
    }
    
     // Ajax Recent Activities
    public function recent_activities()
    {
        return view('dashboard.recent_activities');
    }
	    // Food Menu
    public function food_menu()
    {
        $page_title = 'Statistics';
        $page_description = 'Some description for the page';
        $logo = "images/logo.png";
        $logoText = "images/logo-text.png";
		
        $action = __FUNCTION__;

        return view('dashboard.food_menu', compact('page_title', 'page_description','action','logo','logoText'));
    }
    
     // Ajax Food Menu List
    public function food_menu_list()
    {
        return view('dashboard.food_menu_list');
    }
    
     // Ajax Trending Ingridients
    public function trending_ingridients()
    {
        return view('dashboard.trending_ingridients');
    }
	    // Personal Record
    public function personal_record()
    {
        $page_title = 'Companies';
        $page_description = 'Some description for the page';
        $logo = "images/logo.png";
        $logoText = "images/logo-text.png";
		
        $action = __FUNCTION__;

        return view('dashboard.personal_record', compact('page_title', 'page_description','action','logo','logoText'));
    }
	    // Calender
    public function app_calender()
    {
        $page_title = 'Calender';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('app.calender', compact('page_title', 'page_description','action'));
    }
    
	    // Profile
    public function app_profile()
    {
        $page_title = 'Profile';
        $page_description = 'Some description for the page';
		
        $action = __FUNCTION__;

        return view('app.profile', compact('page_title', 'page_description','action'));
    }
	    // Post Details
    public function post_details()
    {
        $page_title = 'Post Details';
        $page_description = 'Some description for the page';
		
        $action = __FUNCTION__;

        return view('app.post_details', compact('page_title', 'page_description','action'));
    }
	
	    // Chart Chartist
    public function chart_chartist()
    {
        $page_title = 'Chart Chartist';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;

        return view('chart.chartist', compact('page_title', 'page_description','action'));
    }
	
	    // Chart Chartjs
    public function chart_chartjs()
    {
        $page_title = 'Chart Chartjs';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('chart.chartjs', compact('page_title', 'page_description','action'));
    }
	
	    // Chart Flot
    public function chart_flot()
    {
        $page_title = 'Chart Flot';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('chart.flot', compact('page_title', 'page_description','action'));
    }
	
	    // Chart Morris
    public function chart_morris()
    {
        $page_title = 'Chart Morris';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('chart.morris', compact('page_title', 'page_description','action'));
    }
	
	    // Chart Peity
    public function chart_peity()
    {
        $page_title = 'Chart Peity';
        $page_description = 'Some description for the page';
		
        $action = __FUNCTION__;

        return view('chart.peity', compact('page_title', 'page_description','action'));
    }
	
	    // Chart Sparkline
    public function chart_sparkline()
    {
        $page_title = 'Chart Sparkline';
        $page_description = 'Some description for the page';
		
        $action = __FUNCTION__;

        return view('chart.sparkline', compact('page_title', 'page_description','action'));
    }
	
	    // Ecommerce Checkout
    public function ecom_checkout()
    {
        $page_title = 'Checkout';
        $page_description = 'Some description for the page';
		
        $action = __FUNCTION__;

        return view('ecom.checkout', compact('page_title', 'page_description','action'));
    }
	
	    // Ecommerce Customers
    public function ecom_customers()
    {
        $page_title = 'Ecom Customers';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('ecom.customers', compact('page_title', 'page_description','action'));
    }
	
	    // Ecommerce Invoice
    public function ecom_invoice()
    {
        $page_title = 'Invoice';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('ecom.invoice', compact('page_title', 'page_description','action'));
    }
	
	    // Ecommerce Product Detail
    public function ecom_product_detail()
    {
        $page_title = 'Product Detail';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('ecom.productdetail', compact('page_title', 'page_description','action'));
    }
	
	    // Ecommerce Product Grid
    public function ecom_product_grid()
    {
        $page_title = 'Product Grid';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('ecom.productgrid', compact('page_title', 'page_description','action'));
    }
	
	    // Ecommerce Product List
    public function ecom_product_list()
    {
        $page_title = 'Product List';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('ecom.productlist', compact('page_title', 'page_description','action'));
    }
	
	    // Ecommerce Product Order
    public function ecom_product_order()
    {
        $page_title = 'Product Order';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('ecom.productorder', compact('page_title', 'page_description','action'));
    }
	
	    // Email Compose
    public function email_compose()
    {
        $page_title = 'Compose';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('message.compose', compact('page_title', 'page_description','action'));
    }
	
	    // Email Inbox
    public function email_inbox()
    {
        $page_title = 'Inbox';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('message.inbox', compact('page_title', 'page_description','action'));
    }
	
	    // Email Read
    public function email_read()
    {
        $page_title = 'Read';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('message.read', compact('page_title', 'page_description','action'));
    }
	
	    // Form Editor Summernote
    public function form_editor_summernote()
    {
        $page_title = 'Summernote Editor';
        $page_description = 'Some description for the page';
		
        $action = __FUNCTION__;

        return view('form.editorsummernote', compact('page_title', 'page_description','action'));
	}
	
	    // Form Element
    public function form_element()
    {
        $page_title = 'Form Element';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('form.element', compact('page_title', 'page_description','action'));
    }
	
	    // Form Pickers
    public function form_pickers()
    {
        $page_title = 'Form Pickers';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('form.pickers', compact('page_title', 'page_description','action'));
    }
	
	    // Form Validation Jquery
    public function form_validation_jquery()
    {
        $page_title = 'Form Validation';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('form.validationjquery', compact('page_title', 'page_description','action'));
    }
	
	    // Form Wizard
    public function form_wizard()
    {
        $page_title = 'Form Wizard';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('form.wizard', compact('page_title', 'page_description','action'));
    }
    
    	
	    // Map Jqvmap
    public function map_jqvmap()
    {
        $page_title = 'Map Jqvmap';
        $page_description = 'Some description for the page';
		
        $action = __FUNCTION__;

        return view('map.jqvmap', compact('page_title', 'page_description','action'));
    }
	
	    // Page Error 400
    public function page_error_400()
    {
        $page_title = 'Page Error 400';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('page.error400', compact('page_title', 'page_description','action'));
    }
	
	    // Page Error 403
    public function page_error_403()
    {
        $page_title = 'Page Error 403';
        $page_description = 'Some description for the page';
		
        $action = __FUNCTION__;

        return view('page.error403', compact('page_title', 'page_description','action'));
    }
	
	    // Page Error 404
    public function page_error_404()
    {
        $page_title = 'Page Error 404';
        $page_description = 'Some description for the page';
		
        $action = __FUNCTION__;

        return view('page.error404', compact('page_title', 'page_description','action'));
    }
	
	    // Page Error 500
    public function page_error_500()
    {
        $page_title = 'Page Error 500';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('page.error500', compact('page_title', 'page_description','action'));
    }
	
	    // Page Error 503
    public function page_error_503()
    {
        $page_title = 'Page Error 503';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('page.error503', compact('page_title', 'page_description','action'));
    }
	
	    // Page Forgot Password
    public function page_forgot_password()
    {
        $page_title = 'Page Forgot Password';
        $page_description = 'Some description for the page';
        
        $action = __FUNCTION__;

        return view('page.forgot_password', compact('page_title', 'page_description','action'));
    }
	
	    // Page Lock Screen
    public function page_lock_screen()
    {
        $page_title = 'Page Lock Screen';
        $page_description = 'Some description for the page';
		
        $action = __FUNCTION__;

        return view('page.lockscreen', compact('page_title', 'page_description','action'));
    }
	
	    // Page Login
    public function page_login()
    {
        $page_title = 'Page Login';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('page.login', compact('page_title', 'page_description','action'));
    }
	
	    // Page Register
    public function page_register()
    {
        $page_title = 'Page Register';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('page.register', compact('page_title', 'page_description','action'));
    }
	
	    // Table Bootstrap Basic
    public function table_bootstrap_basic()
    {
        $page_title = 'Table Basic';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('table.bootstrapbasic', compact('page_title', 'page_description','action'));
    }
	
	    // Table Datatable Basic
    public function table_datatable_basic()
    {
        $page_title = 'Table Datatable';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('table.datatablebasic', compact('page_title', 'page_description','action'));
    }
	    // UC Nestable.
    public function uc_nestable()
    {
        $page_title = 'Nestable';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('uc.nestable', compact('page_title', 'page_description','action'));
    }
	    // UC Lightgallery.
    public function uc_lightgallery()
    {
        $page_title = 'Lightgallery';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('uc.lightgallery', compact('page_title', 'page_description','action'));
    }
	
	    // UC NoUi Slider
    public function uc_noui_slider()
    {
        $page_title = 'Noui Slider';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('uc.nouislider', compact('page_title', 'page_description','action'));
    }
	
	    // UC Select2
    public function uc_select2()
    {
        $page_title = 'Select2';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('uc.select2', compact('page_title', 'page_description','action'));
    }
	
	    // UC Sweetalert
    public function uc_sweetalert()
    {
        $page_title = 'Sweetalert';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('uc.sweetalert', compact('page_title', 'page_description','action'));
    }
	
	    // UC Toastr
    public function uc_toastr()
    {
        $page_title = 'Toastr';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('uc.toastr', compact('page_title', 'page_description','action'));
    }
	
	    // Ui Accordion
    public function ui_accordion()
    {
        $page_title = 'Accordion';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('ui.accordion', compact('page_title', 'page_description','action'));
    }
	
	    // Ui Alert
    public function ui_alert()
    {
        $page_title = 'Alert';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('ui.alert', compact('page_title', 'page_description','action'));
    }
	
	    // Ui Badge
    public function ui_badge()
    {
        $page_title = 'Badge';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('ui.badge', compact('page_title', 'page_description','action'));
    }
	
	    // Ui Button
    public function ui_button()
    {
        $page_title = 'Button';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('ui.button', compact('page_title', 'page_description','action'));
    }
	
	    // Ui Button Group
    public function ui_button_group()
    {
        $page_title = 'Button Group';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('ui.buttongroup', compact('page_title', 'page_description','action'));
    }
	
	    // Ui Card
    public function ui_card()
    {
        $page_title = 'Card';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('ui.card', compact('page_title', 'page_description','action'));
    }
	
	    // Ui Carousel
    public function ui_carousel()
    {
        $page_title = 'Carousel';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('ui.carousel', compact('page_title', 'page_description','action'));
    }
	
	    // Ui Dropdown
    public function ui_dropdown()
    {
        $page_title = 'Dropdown';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('ui.dropdown', compact('page_title', 'page_description','action'));
    }
	
	    // Ui Grid
    public function ui_grid()
    {
        $page_title = 'Grid';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('ui.grid', compact('page_title', 'page_description','action'));
    }
	
	    // Ui List Group
    public function ui_list_group()
    {
        $page_title = 'List Group';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('ui.listgroup', compact('page_title', 'page_description','action'));
    }
	
	    // Ui Media Object
    public function ui_media_object()
    {
        $page_title = 'Media Object';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('ui.mediaobject', compact('page_title', 'page_description','action'));
    }
	
	    // Ui Modal
    public function ui_modal()
    {
        $page_title = 'Modal';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('ui.modal', compact('page_title', 'page_description','action'));
    }
	
	    // Ui Pagination
    public function ui_pagination()
    {
        $page_title = 'Pagination';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('ui.pagination', compact('page_title', 'page_description','action'));
    }
	
	    // Ui Popover
    public function ui_popover()
    {
        $page_title = 'Popover';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('ui.popover', compact('page_title', 'page_description','action'));
    }
	
	    // Ui Progressbar
    public function ui_progressbar()
    {
        $page_title = 'Progressbar';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('ui.progressbar', compact('page_title', 'page_description','action'));
    }
	
	    // Ui Tab
    public function ui_tab()
    {
        $page_title = 'Tab';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('ui.tab', compact('page_title', 'page_description','action'));
    }
	

	    // Ui Typography
    public function ui_typography()
    {
        $page_title = 'Typography';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('ui.typography', compact('page_title', 'page_description','action'));
    }
	
	    // Widget Basic
    public function widget_basic()
    {
        $page_title = 'Widget';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('widget.widget_basic', compact('page_title', 'page_description','action'));
    }
}
