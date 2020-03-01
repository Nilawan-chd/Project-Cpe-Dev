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
$route['lab'] = 'front_end/Lab';
$route['faculty'] = 'front_end/Faculty';
$route['download'] = 'front_end/Download';
$route['contact'] = 'front_end/Contact';
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
        $route['backoffice/page/about/faculty/create'] = "back_end/Faculty/create";
        $route['backoffice/page/about/faculty/store'] = "back_end/Faculty/store";
        $route['backoffice/page/about/faculty/created'] = "back_end/Faculty/created";
        $route['backoffice/page/about/faculty/edit/(:any)'] = "back_end/Faculty/edit/$1";
        $route['backoffice/page/about/faculty/update/(:any)'] = "back_end/Faculty/update/$1";
        $route['backoffice/page/about/faculty/destroy/(:any)'] = "back_end/Faculty/destroy/$1";
        $route['backoffice/page/about/faculty/ajax/get/faculty/sort/show'] = 'back_end/Faculty/ajax_get_faculty_and_sort_show';
        $route['backoffice/page/about/faculty/ajax/get/faculty/sort/update'] = 'back_end/Faculty/ajax_get_faculty_and_sort_update';






/*
| -------------------------------------------------------------------------
| Course
| -------------------------------------------------------------------------
*/


        // Category
        $route['backoffice/page/course/category'] = "back_end/Category_course";
        $route['backoffice/page/course/category/create'] = "back_end/Category_course/create/$1";
        $route['backoffice/page/course/category/store'] = "back_end/Category_course/store";
        $route['backoffice/page/course/category/edit/(:any)'] = "back_end/Category_course/edit/$1";
        $route['backoffice/page/course/category/update/(:any)'] = "back_end/Category_course/update/$1";
        $route['backoffice/page/course/category/destroy/(:any)'] = "back_end/Category_course/destroy/$1";


        // Course
        $route['backoffice/page/course/course/show/(:any)'] = "back_end/Course/show/$1";
        $route['backoffice/page/course/course/create/(:any)'] = "back_end/Course/create/$1";
        $route['backoffice/page/course/course/store'] = "back_end/Course/store";
        $route['backoffice/page/course/course/edit/(:any)'] = "back_end/Course/edit/$1";
        $route['backoffice/page/course/course/update/(:any)'] = "back_end/Course/update/$1";
        $route['backoffice/page/course/course/destroy/(:any)'] = "back_end/Course/destroy/$1";


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
       | Download
       | -------------------------------------------------------------------------
       */
        // Category
        $route['backoffice/page/download/category'] = "back_end/Category_download";
        $route['backoffice/page/download/category/create'] = "back_end/Category_download/create/$1";
        $route['backoffice/page/download/category/store'] = "back_end/Category_download/store";
        $route['backoffice/page/download/category/edit/(:any)'] = "back_end/Category_download/edit/$1";
        $route['backoffice/page/download/category/update/(:any)'] = "back_end/Category_download/update/$1";
        $route['backoffice/page/download/category/destroy/(:any)'] = "back_end/Category_download/destroy/$1";


        // Course
        $route['backoffice/page/download/download/show/(:any)'] = "back_end/Download/show/$1";
        $route['backoffice/page/download/download/create/(:any)'] = "back_end/Download/create/$1";
        $route['backoffice/page/download/download/store'] = "back_end/Download/store";
        $route['backoffice/page/download/download/edit/(:any)'] = "back_end/Download/edit/$1";
        $route['backoffice/page/download/download/update/(:any)'] = "back_end/Download/update/$1";
        $route['backoffice/page/download/download/destroy/(:any)'] = "back_end/Download/destroy/$1";


		/*
		| -------------------------------------------------------------------------
		| Contact
		| -------------------------------------------------------------------------
		*/

    	// Contact
        $route['backoffice/page/contact/info/edit/(:any)'] = 'back_end/Contacts/edit/$1';
		$route['backoffice/page/contact/info/update/(:any)'] = 'back_end/Contacts/update/$1';



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
