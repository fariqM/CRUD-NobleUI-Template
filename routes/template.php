<?php

Route::group(['prefix' => 'email'], function () {
    Route::get('inbox', function () {
        
        return view('pages.templates.email.inbox');
    });
    Route::get('read', function () {
        return view('pages.templates.email.read');
    });
    Route::get('compose', function () {
        return view('pages.templates.email.compose');
    });
});

Route::group(['prefix' => 'apps'], function () {
    Route::get('chat', function () {
        return view('pages.templates.apps.chat');
    });
    Route::get('calendar', function () {
        return view('pages.templates.apps.calendar');
    });
});

Route::group(['prefix' => 'ui-components'], function () {
    Route::get('accordion', function () {
        return view('pages.templates.ui-components.accordion');
    });
    Route::get('alerts', function () {
        return view('pages.templates.ui-components.alerts');
    });
    Route::get('badges', function () {
        return view('pages.templates.ui-components.badges');
    });
    Route::get('breadcrumbs', function () {
        return view('pages.templates.ui-components.breadcrumbs');
    });
    Route::get('buttons', function () {
        return view('pages.templates.ui-components.buttons');
    });
    Route::get('button-group', function () {
        return view('pages.templates.ui-components.button-group');
    });
    Route::get('cards', function () {
        return view('pages.templates.ui-components.cards');
    });
    Route::get('carousel', function () {
        return view('pages.templates.ui-components.carousel');
    });
    Route::get('collapse', function () {
        return view('pages.templates.ui-components.collapse');
    });
    Route::get('dropdowns', function () {
        return view('pages.templates.ui-components.dropdowns');
    });
    Route::get('list-group', function () {
        return view('pages.templates.ui-components.list-group');
    });
    Route::get('media-object', function () {
        return view('pages.templates.ui-components.media-object');
    });
    Route::get('modal', function () {
        return view('pages.templates.ui-components.modal');
    });
    Route::get('navs', function () {
        return view('pages.templates.ui-components.navs');
    });
    Route::get('navbar', function () {
        return view('pages.templates.ui-components.navbar');
    });
    Route::get('pagination', function () {
        return view('pages.templates.ui-components.pagination');
    });
    Route::get('popovers', function () {
        return view('pages.templates.ui-components.popovers');
    });
    Route::get('progress', function () {
        return view('pages.templates.ui-components.progress');
    });
    Route::get('scrollbar', function () {
        return view('pages.templates.ui-components.scrollbar');
    });
    Route::get('scrollspy', function () {
        return view('pages.templates.ui-components.scrollspy');
    });
    Route::get('spinners', function () {
        return view('pages.templates.ui-components.spinners');
    });
    Route::get('tabs', function () {
        return view('pages.templates.ui-components.tabs');
    });
    Route::get('tooltips', function () {
        return view('pages.templates.ui-components.tooltips');
    });
});

Route::group(['prefix' => 'advanced-ui'], function () {
    Route::get('cropper', function () {
        return view('pages.templates.advanced-ui.cropper');
    });
    Route::get('owl-carousel', function () {
        return view('pages.templates.advanced-ui.owl-carousel');
    });
    Route::get('sortablejs', function () {
        return view('pages.templates.advanced-ui.sortablejs');
    });
    Route::get('sweet-alert', function () {
        return view('pages.templates.advanced-ui.sweet-alert');
    });
});

Route::group(['prefix' => 'forms'], function () {
    Route::get('basic-elements', function () {
        return view('pages.templates.forms.basic-elements');
    });
    Route::get('advanced-elements', function () {
        return view('pages.templates.forms.advanced-elements');
    });
    Route::get('editors', function () {
        return view('pages.templates.forms.editors');
    });
    Route::get('wizard', function () {
        return view('pages.templates.forms.wizard');
    });
});

Route::group(['prefix' => 'charts'], function () {
    Route::get('apex', function () {
        return view('pages.templates.charts.apex');
    });
    Route::get('chartjs', function () {
        return view('pages.templates.charts.chartjs');
    });
    Route::get('flot', function () {
        return view('pages.templates.charts.flot');
    });
    Route::get('peity', function () {
        return view('pages.templates.charts.peity');
    });
    Route::get('sparkline', function () {
        return view('pages.templates.charts.sparkline');
    });
});

Route::group(['prefix' => 'tables'], function () {
    Route::get('basic-tables', function () {
        return view('pages.templates.tables.basic-tables');
    });
    Route::get('data-table', function () {
        return view('pages.templates.tables.data-table');
    });
});

Route::group(['prefix' => 'icons'], function () {
    Route::get('feather-icons', function () {
        return view('pages.templates.icons.feather-icons');
    });
    Route::get('mdi-icons', function () {
        return view('pages.templates.icons.mdi-icons');
    });
});

Route::group(['prefix' => 'general'], function () {
    Route::get('blank-page', function () {
        return view('pages.templates.general.blank-page');
    });
    Route::get('faq', function () {
        return view('pages.templates.general.faq');
    });
    Route::get('invoice', function () {
        return view('pages.templates.general.invoice');
    });
    Route::get('profile', function () {
        return view('pages.templates.general.profile');
    });
    Route::get('pricing', function () {
        return view('pages.templates.general.pricing');
    });
    Route::get('timeline', function () {
        return view('pages.templates.general.timeline');
    });
});

Route::group(['prefix' => 'auth'], function () {
    Route::get('login', function () {
        return view('pages.templates.auth.login');
    });
    Route::get('register', function () {
        return view('pages.templates.auth.register');
    });
});

Route::group(['prefix' => 'error'], function () {
    Route::get('404', function () {
        return view('pages.templates.error.404');
    });
    Route::get('500', function () {
        return view('pages.templates.error.500');
    });
});

Route::get('/clear-cache', function () {
    // Artisan::call('cache:clear');
    return "Cache is cleared";
});

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');