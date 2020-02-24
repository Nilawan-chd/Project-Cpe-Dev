<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'front_end/Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/*
| -------------------------------------------------------------------------
| SET ROUTE FRONT END
| -------------------------------------------------------------------------
*/

$route['home'] = 'front_end/Home';
$route['about'] = 'front_end/About';
$route['course'] = 'front_end/Course';
$route['room'] = 'front_end/Room';
$route['faculty'] = 'front_end/Faculty';
$route['course'] = 'front_end/Course';
$route['labs'] = 'front_end/Labs';
$route['project'] = 'front_end/Project';
$route['download'] = 'front_end/Download';






$route['product/(:any)/(:any)/(:any)'] = "front_end/Product/show/$1/$2/$3";
$route['technology'] = 'front_end/Technology';
$route['technology/(:any)/(:any)/(:any)'] = "front_end/Technology/show/$1/$2/$3";
$route['technology/(:any)/(:any)'] = "front_end/Technology/show_faq/$1/$2";
$route['project-references'] = 'front_end/Project_references';
$route['contact'] = 'front_end/Contact';
$route['contact/send']['post'] = 'front_end/Contact/send';

    /*
    | -------------------------------------------------------------------------
    | AJAX
    | -------------------------------------------------------------------------
    */

	$route['ajax/get/product/(:any)'] = 'front_end/Product/ajax_get_product_by_id/$1';
	$route['ajax/get/project-references/(:any)/(:any)'] = 'front_end/Project_references/ajax_get_project_by_id/$1/$2';


/*
| -------------------------------------------------------------------------
| SET ROUTE BACK END
| -------------------------------------------------------------------------
*/

    /*
    | -------------------------------------------------------------------------
    | Authentication
    | -------------------------------------------------------------------------
    */

    $route['backoffice'] = 'back_end/auth/Authentication';
    $route['backoffice/login'] = 'back_end/auth/Authentication';
    $route['backoffice/login_process'] = 'back_end/auth/Authentication/login_process';
    $route['backoffice/logout'] = 'back_end/auth/Authentication/logout';

    /*
    | -------------------------------------------------------------------------
    | Dashboard
    | -------------------------------------------------------------------------
    */

    $route['backoffice/dashboard'] = 'back_end/Dashboard';

    /*
    | -------------------------------------------------------------------------
    | Page
    | -------------------------------------------------------------------------
    */



        /*
        | -------------------------------------------------------------------------
        | Home
        | -------------------------------------------------------------------------
        */
        // Banner

        $route['backoffice/page/home/banner'] = 'back_end/Banner';
        $route['backoffice/page/home/banner/create'] = 'back_end/Banner/banner_create';
        $route['backoffice/page/home/banner/store'] = 'back_end/Banner/banner_store';
        $route['backoffice/page/home/banner/edit/(:any)'] = 'back_end/Banner/banner_edit/$1';
        $route['backoffice/page/home/banner/update/(:any)'] = 'back_end/Banner/banner_update/$1';
        $route['backoffice/page/home/banner/destroy/(:any)'] = "back_end/Banner/banner_destroy/$1";
        $route['backoffice/page/home/banner/ajax/get/banner/sort/show'] = 'back_end/Banner/ajax_get_banner_and_sort_show';
        $route['backoffice/page/home/banner/ajax/get/banner/sort/update'] = 'back_end/Banner/ajax_get_banner_and_sort_update';

        // News
        $route['backoffice/page/home/news'] = 'back_end/Category_news';
        $route['backoffice/page/home/news/create'] = 'back_end/Category_news/create';
        $route['backoffice/page/home/news/store'] = 'back_end/Category_news/store';
        $route['backoffice/page/home/news/edit/(:any)'] = 'back_end/Category_news/edit/$1';
        $route['backoffice/page/home/news/update/(:any)'] = 'back_end/Category_news/update/$1';
        $route['backoffice/page/home/news/destroy/(:any)'] = "back_end/Category_news/destroy/$1";

        // News
        $route['backoffice/page/home/news/list/show/(:any)'] = 'back_end/News/show/$1';
        $route['backoffice/page/home/news/list/create/(:any)'] = 'back_end/News/create/$1';
        $route['backoffice/page/home/news/list/store'] = 'back_end/News/store';
        $route['backoffice/page/home/news/list/edit/(:any)'] = 'back_end/News/edit/$1';
        $route['backoffice/page/home/news/list/update/(:any)'] = 'back_end/News/update/$1';
        $route['backoffice/page/home/news/list/destroy/(:any)'] = "back_end/News/destroy/$1";


        /*
        | -------------------------------------------------------------------------
        | About
        | -------------------------------------------------------------------------
        */

        // history
        $route['backoffice/page/about/history/edit/(:any)'] = "back_end/About/about_edit/$1";
        $route['backoffice/page/about/history/update/(:any)'] = "back_end/About/about_update/$1";

        // Faculty
        $route['backoffice/page/about/faculty'] = "back_end/Faculty";
        $route['backoffice/page/about/faculty/edit/(:any)'] = "back_end/Faculty/edit/$1";
        $route['backoffice/page/about/faculty/update/(:any)'] = "back_end/Faculty/update/$1";


        /*
        | -------------------------------------------------------------------------
        | Course
        | -------------------------------------------------------------------------
        */

        // Course
        $route['backoffice/page/course/course/edit/(:any)'] = "back_end/Course/course_edit/$1";
        $route['backoffice/page/course/course/update/(:any)'] = "back_end/Course/course_update/$1";


		/*
		| -------------------------------------------------------------------------
		| Labs
		| -------------------------------------------------------------------------
		*/


        // labs
        $route['backoffice/page/lab/lab'] = 'back_end/Lab';
        $route['backoffice/page/lab/lab/create'] = 'back_end/Lab/create';
		$route['backoffice/page/lab/lab/store'] = 'back_end/Lab/store';
        $route['backoffice/page/lab/lab/edit/(:any)'] = "back_end/Lab/edit/$1";
        $route['backoffice/page/lab/lab/update/(:any)'] = "back_end/Lab/update/$1";
        $route['backoffice/page/lab/lab/destroy/(:any)'] = "back_end/Lab/destroy/$1";

        /*
        | -------------------------------------------------------------------------
        | Project
        | -------------------------------------------------------------------------
        */

        // Project
        $route['backoffice/page/project/project/edit/(:any)'] = "back_end/Project/project_edit/$1";
        $route['backoffice/page/project/project/update/(:any)'] = "back_end/Project/project_update/$1";




		/*
		| -------------------------------------------------------------------------
		| Contact
		| -------------------------------------------------------------------------
		*/

    	// Content
        $route['backoffice/page/contact/content/(:any)'] = 'back_end/Contact_page/edit_content/$1';
		$route['backoffice/page/contact/content/update/(:any)'] = 'back_end/Contact_page/update_content/$1';

        // Info
        $route['backoffice/page/contact/info/(:any)'] = 'back_end/Contact_page/edit_info/$1';
		$route['backoffice/page/contact/info/update/(:any)'] = 'back_end/Contact_page/update_info/$1';

    /*
    | -------------------------------------------------------------------------
    | SETTING
    | -------------------------------------------------------------------------
    */

    $route['backoffice/setting'] = 'back_end/setting';

    // Users
	$route['backoffice/setting/users'] = 'back_end/User';
	$route['backoffice/setting/users/create'] = 'back_end/User/create';
	$route['backoffice/setting/users/store'] = 'back_end/User/store';
	$route['backoffice/setting/users/edit/(:any)'] = "back_end/User/edit/$1";
	$route['backoffice/setting/users/update/(:any)'] = "back_end/User/update/$1";
	$route['backoffice/setting/users/destroy/(:any)'] = "back_end/User/destroy/$1";

	/*
	| -------------------------------------------------------------------------
	| Home
	| -------------------------------------------------------------------------
	*/

	$route['backoffice/setting/profile'] = 'back_end/Profile';
	$route['backoffice/setting/profile/edit/(:any)'] = 'back_end/Profile/edit/$1';
	$route['backoffice/setting/profile/update/(:any)'] = "back_end/Profile/update/$1";
