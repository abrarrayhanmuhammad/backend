<?php

use App\Models\About;
use App\Models\Ourteam;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/wishlist', function () {
        return view('wishlist');
    });

    Route::get('/account', function () {
        $admin = User::where('role', 'admin')->first();
        return view('account', compact('admin'));
    })->name('account');

    Route::get('/compare', function () {
        return view('compare');
    });

    Route::get('/checkout', function () {
        return view('checkout');
    });

    Route::get('/cart', function () {
        return view('cart');
    });

    Route::middleware(['admin'])->group(function () {
        Route::get('/admin', function () {
            return view('admin.index');
        })->name('admin.index');

        Route::get('/admin/analytics', function () {
            return view('admin.analytics');
        })->name('analytics');
    
        Route::get('/admin/statistics', function () {
            return view('admin.widget.w_statistics');
        })->name('statistics');
    
        Route::get('/admin/data', function () {
            return view('admin.widget.w_data');
        })->name('data');
    
        Route::get('/admin/chart', function () {
            return view('admin.widget.w_chart');
        })->name('chart');
    
        Route::get('/admin/bcalert', function () {
            return view('admin.ui_components.bc_alert');
        })->name('bcalert');
    
        Route::get('/admin/bcbutton', function () {
            return view('admin.ui_components.bc_button');
        })->name('bcbutton');
    
        Route::get('/admin/bcbadges', function () {
            return view('admin.ui_components.bc_badges');
        })->name('bcbadges');
    
        Route::get('/admin/bcbreadcrumb', function () {
            return view('admin.ui_components.bc_breadcrumb');
        })->name('bcbreadcrumb');
    
        Route::get('/admin/bccard', function () {
            return view('admin.ui_components.bc_card');
        })->name('bccard');
    
        Route::get('/admin/bccolor', function () {
            return view('admin.ui_components.bc_color');
        })->name('bccolor');
    
        Route::get('/admin/bccollapse', function () {
            return view('admin.ui_components.bc_collapse');
        })->name('bccollapse');
    
        Route::get('/admin/bccarousel', function () {
            return view('admin.ui_components.bc_carousel');
        })->name('bccarousel');
    
        Route::get('/admin/bcdropdown', function () {
            return view('admin.ui_components.bc_dropdowns');
        })->name('bcdropdown');
    
        Route::get('/admin/bcoffcanvas', function () {
            return view('admin.ui_components.bc_offcanvas');
        })->name('bcoffcanvas');
    
        Route::get('/admin/bcpagination', function () {
            return view('admin.ui_components.bc_pagination');
        })->name('bcpagination');
    
        Route::get('/admin/bcprogress', function () {
            return view('admin.ui_components.bc_progress');
        })->name('bcprogress');
    
        Route::get('/admin/bclistgroup', function () {
            return view('admin.ui_components.bc_list-group');
        })->name('bclistgroup');
    
        Route::get('/admin/bcmodal', function () {
            return view('admin.ui_components.bc_modal');
        })->name('bcmodal');
    
        Route::get('/admin/bcspinner', function () {
            return view('admin.ui_components.bc_spinner');
        })->name('bcspinner');
    
        Route::get('/admin/bctabs', function () {
            return view('admin.ui_components.bc_tabs');
        })->name('bctabs');
    
        Route::get('/admin/bctooltippopover', function () {
            return view('admin.ui_components.bc_tooltip-popover');
        })->name('bctooltippopover');
    
        Route::get('/admin/bctoast', function () {
            return view('admin.ui_components.bc_toasts');
        })->name('bctoast');
    
        Route::get('/admin/bctypography', function () {
            return view('admin.ui_components.bc_typography');
        })->name('bctypography');
    
        Route::get('/admin/bcextra', function () {
            return view('admin.ui_components.bc_extra');
        })->name('bcextra');
    
        Route::get('/admin/acalert', function () {
            return view('admin.ui_components.ac_alert');
        })->name('acalert');
    
        Route::get('/admin/acdatepicker', function () {
            return view('admin.ui_components.ac_datepicker-component');
        })->name('acdatepicker');
    
        Route::get('/admin/aclightbox', function () {
            return view('admin.ui_components.ac_lightbox');
        })->name('aclightbox');
    
        Route::get('/admin/acmodal', function () {
            return view('admin.ui_components.ac_modal');
        })->name('acmodal');
    
        Route::get('/admin/acnotification', function () {
            return view('admin.ui_components.ac_notification');
        })->name('acnotification');
    
        Route::get('/admin/acrangeslider', function () {
            return view('admin.ui_components.ac_rangeslider');
        })->name('acrangeslider');
    
        Route::get('/admin/acslider', function () {
            return view('admin.ui_components.ac_slider');
        })->name('acslider');
    
        Route::get('/admin/acsyntax', function () {
            return view('admin.ui_components.ac_syntax_highlighter');
        })->name('acsyntax');
    
        Route::get('/admin/actour', function () {
            return view('admin.ui_components.ac_tour');
        })->name('actour');
    
        Route::get('/admin/actreeview', function () {
            return view('admin.ui_components.ac_treeview');
        })->name('actreeview');
    
        Route::get('/admin/iconfeather', function () {
            return view('admin.ui_components.icon-feather');
        })->name('iconfeather');
    
        Route::get('/admin/iconfontawesome', function () {
            return view('admin.ui_components.icon-fontawesome');
        })->name('iconfontawesome');
    
        Route::get('/admin/iconmaterial', function () {
            return view('admin.ui_components.icon-material');
        })->name('iconmaterial');
    
        Route::get('/admin/icontabler', function () {
            return view('admin.ui_components.icon-tabler');
        })->name('icontabler');
    
        Route::get('/admin/iconcustom', function () {
            return view('admin.ui_components.icon-custom');
        })->name('iconcustom');
    
        Route::get('/admin/formelements', function () {
            return view('admin.forms.form_elements');
        })->name('formelements');
    
        Route::get('/admin/formfoalting', function () {
            return view('admin.forms.form_floating');
        })->name('formfloating');
    
        Route::get('/admin/form2basic', function () {
            return view('admin.forms.form2_basic');
        })->name('form2basic');
    
        Route::get('/admin/form2inputgroup', function () {
            return view('admin.forms.form2_input_group');
        })->name('form2inputgroup');
    
        Route::get('/admin/form2checkbox', function () {
            return view('admin.forms.form2_checkbox');
        })->name('form2checkbox');
    
        Route::get('/admin/form2radio', function () {
            return view('admin.forms.form2_radio');
        })->name('form2radio');
    
        Route::get('/admin/form2switch', function () {
            return view('admin.forms.form2_switch');
        })->name('form2switch');
    
        Route::get('/admin/form2megaoption', function () {
            return view('admin.forms.form2_megaoption');
        })->name('form2megaoption');
    
        Route::get('/admin/form2datepicker', function () {
            return view('admin.forms.form2_datepicker');
        })->name('form2datepicker');
    
        Route::get('/admin/form2daterangepicker', function () {
            return view('admin.forms.form2_daterangepicker');
        })->name('form2daterangepicker');
    
        Route::get('/admin/form2timepicker', function () {
            return view('admin.forms.form2_timepicker');
        })->name('form2timepicker');
    
        Route::get('/admin/form2choices', function () {
            return view('admin.forms.form2_choices');
        })->name('form2choices');
    
        Route::get('/admin/form2recaptcha', function () {
            return view('admin.forms.form2_recaptcha');
        })->name('form2recaptcha');
    
        Route::get('/admin/form2inputmask', function () {
            return view('admin.forms.form2_inputmask');
        })->name('form2inputmask');
    
        Route::get('/admin/form2clipboard', function () {
            return view('admin.forms.form2_clipboard');
        })->name('form2clipboard');
    
        Route::get('/admin/form2nouislider', function () {
            return view('admin.forms.form2_nouislider');
        })->name('form2nouislider');
    
        Route::get('/admin/form2switchjs', function () {
            return view('admin.forms.form2_switchjs');
        })->name('form2switchjs');
    
        Route::get('/admin/form2typeahead', function () {
            return view('admin.forms.form2_typeahead');
        })->name('form2typeahead');
    
        Route::get('/admin/form2tinymce', function () {
            return view('admin.forms.form2_tinymce');
        })->name('form2tinymce');
    
        Route::get('/admin/form2quill', function () {
            return view('admin.forms.form2_quill');
        })->name('form2quill');
    
        Route::get('/admin/form2editorclassic', function () {
            return view('admin.forms.form2_editor-classic');
        })->name('form2editorclassic');
    
        Route::get('/admin/form2editordocument', function () {
            return view('admin.forms.form2_editor-document');
        })->name('form2editordocument');
    
        Route::get('/admin/form2editorinline', function () {
            return view('admin.forms.form2_editor-inline');
        })->name('form2editorinline');
    
        Route::get('/admin/form2editorballoon', function () {
            return view('admin.forms.form2_editor-balloon');
        })->name('form2editorballoon');
    
        Route::get('/admin/form2markdown', function () {
            return view('admin.forms.form2_markdown');
        })->name('form2markdown');
    
        Route::get('/admin/form2laydefault', function () {
            return view('admin.forms.form2_lay-default');
        })->name('form2lay-default');
    
        Route::get('/admin/form2laymulticolumn', function () {
            return view('admin.forms.form2_lay-multicolumn');
        })->name('form2laymulticolumn');
    
        Route::get('/admin/form2layactionbars', function () {
            return view('admin.forms.form2_lay-actionbars');
        })->name('form2layactionbars');
    
        Route::get('/admin/form2laystickyactionbars', function () {
            return view('admin.forms.form2_lay-stickyactionbars');
        })->name('form2laystickyactionbars');
    
        Route::get('/admin/fileupload', function () {
            return view('admin.forms.file-upload');
        })->name('fileupload');
    
        Route::get('/admin/form2fluuppy', function () {
            return view('admin.forms.form2_flu-uppy');
        })->name('form2fluuppy');
    
        Route::get('/admin/formvalidation', function () {
            return view('admin.forms.form-validation');
        })->name('formvalidation');
    
        Route::get('/admin/imagecrop', function () {
            return view('admin.forms.image_crop');
        })->name('imagecrop');
    
        Route::get('/admin/tblbootstrap', function () {
            return view('admin.table.tbl_bootstrap');
        })->name('tblbootstrap');
    
        Route::get('/admin/tblsizing', function () {
            return view('admin.table.tbl_sizing');
        })->name('tblsizing');
    
        Route::get('/admin/tblborder', function () {
            return view('admin.table.tbl_border');
        })->name('tblborder');
    
        Route::get('/admin/tblstyling', function () {
            return view('admin.table.tbl_styling');
        })->name('tblstyling');
    
        Route::get('/admin/dtadvance', function () {
            return view('admin.table.dt_advance');
        })->name('dtadvance');
    
        Route::get('/admin/dtstyling', function () {
            return view('admin.table.dt_styling');
        })->name('dtstyling');
    
        Route::get('/admin/dtapi', function () {
            return view('admin.table.dt_api');
        })->name('dtapi');
    
        Route::get('/admin/dtplugin', function () {
            return view('admin.table.dt_plugin');
        })->name('dtplugin');
    
        Route::get('/admin/dtsources', function () {
            return view('admin.table.dt_sources');
        })->name('dtsources');
    
        Route::get('/admin/chat', function () {
            return view('admin.application.chat');
        })->name('chat');
    
        Route::get('/admin/custcustomerlist', function () {
            return view('admin.application.cust_customer_list');
        })->name('custcustomerlist');
    
        Route::get('/admin/ecomproduct', function () {
            return view('admin.application.ecom_product');
        })->name('ecomproduct');
    
        Route::get('/admin/ecomproductdetails', function () {
            return view('admin.application.ecom_product-details');
        })->name('ecomproductdetails');
    
        Route::get('/admin/ecomproductlist', function () {
            return view('admin.application.ecom_product-list');
        })->name('ecomproductlist');
    
        Route::get('/admin/ecomproductadd', function () {
            return view('admin.application.ecom_product-add');
        })->name('ecomproductadd');
    
        Route::get('/admin/ecomcheckout', function () {
            return view('admin.application.ecom_checkout');
        })->name('ecomcheckout');
    
        Route::get('/admin/mail', function () {
            return view('admin.application.mail');
        })->name('mail');
    
        Route::get('/admin/accountprofile', function () {
            return view('admin.application.account-profile');
        })->name('accountprofile');
    
        Route::get('/admin/socialmedia', function () {
            return view('admin.application.social-media');
        })->name('socialmedia');
    
        Route::get('/admin/filemanager', function () {
            return view('admin.application.file-manager');
        })->name('filemanager');
    
        // Route::get('/admin/login', function () {
        //     return view('admin.pages.login-v1');
        // })->name('login');
    
        // Route::get('/admin/register', function () {
        //     return view('admin.pages.register-v1');
        // })->name('register');
    
        Route::get('/admin/forgotpassword', function () {
            return view('admin.pages.forgot-password-v1');
        })->name('forgotpassword');
    
        Route::get('/admin/checkmail', function () {
            return view('admin.pages.check-mail-v1');
        })->name('checkmail');
    
        Route::get('/admin/resetpassword', function () {
            return view('admin.pages.reset-password-v1');
        })->name('resetpassword');
    
        Route::get('/admin/codeverification', function () {
            return view('admin.pages.code-verification-v1');
        })->name('codeverification');
    
        Route::get('/admin/error404', function () {
            return view('admin.pages.error-404');
        })->name('error404');
    
        Route::get('/admin/error500', function () {
            return view('admin.pages.error-500');
        })->name('error500');
    
        Route::get('/admin/underconstruction', function () {
            return view('admin.pages.under-construction-v1');
        })->name('underconstruction');
    
        Route::get('/admin/comingsoon', function () {
            return view('admin.pages.coming-soon-v1');
        })->name('comingsoon');
    
        Route::get('/admin/price', function () {
            return view('admin.pages.price-v1');
        })->name('price');
    
        Route::get('/admin/contactus', function () {
            return view('admin.pages.contact-us');
        })->name('contactus');
    
        Route::get('/admin/landing', function () {
            return view('admin.pages.landing');
        })->name('landing');
    
        Route::get('/admin/transaction', function () {
            return view('admin.application.transaction');
        })->name('transaction');
    });

    // Route::get('/admin', function () {
    //     return view('admin.index');
    // })->name('admin.index'); 
});

Route::get('/forgot-password', function () {
    return view('forgot-password');
});

Route::get('/home-2', function () {
    return view('home-2');
});
Route::get('/shop', function () {
    return view('shop');
});

Route::get('/product-details', function () {
    return view('product-details');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    $about = About::first();
    $team = Ourteam::get();
    return view('about', compact('about', 'team'));
});

Route::get('/blog-details', function () {
    return view('blog-details');
});

Route::get('check-route', function () {
    return route('login');
});

Route::get('check-user', function (Request $request) {
    dd(Auth::user());
});



// indesx$