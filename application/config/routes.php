<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "home";
$route['trang-chu'] = "home/home/index";
$route['nganh-nghe/(:any)-(:any)'] = "chitietnghe/tuyendungnhanh/tuyendungnhanh_post/$1";
$route['thanh-pho/(:any)-(:any)'] = "chitietnghe/tuyendungnhanh/tuyendungnhanh_thanhpho/$1";
$route['nganh-nghe/(:any)-(:any)/(:any)'] = "chitietnghe/tuyendungnhanh/tuyendungnhanh_post/$1";
$route['nganh-ngheuv/(:any)-(:any)'] = "chitietnghe/tuyendungnhanh/timviecnhanh_post/$1";
$route['cv'] = "cv/cv/index/$1";
$route['hsda-dang'] = "dadang/hsdadang/index/$1";
$route['tdda-dang'] = "tddadang/tddadang/index/$1";
$route['daluu'] = "daluu/tddaluu/index/$1";
$route['dangkyuv'] = "dangky/dangkyuv/dangky_uv";
$route['dangkytd'] = "dangky/dangkytd/dangky_td";
$route['dangky'] = "dangky/index";
$route['dangnhap'] = "dangnhap/login_uv";
$route['dangnhap/index'] = "dangnhap/index";
$route['hoso-ungvien/(:any)-(:any)'] = "hosouv/hosouv/hosouv_post/$1";
$route['hoso-ungvien-cho-duyet/(:any)-(:any)'] = "hosouv/hosouv/hs_uv_pending/$1";
$route['tin-tuyen-dung/(:any)-(:any)'] = "infotintd/infotintd/view_job_post/$1";
$route['tin-tuyendung-cho-duyet/(:any)-(:any)'] = "infotintd/infotintd/view_tintd_pending/$1";
$route['info-hoso-ungvien/(:any)-(:any)'] = "infohsuv/infohsuv/view_employers_post/$1";
$route['quanly-hoso-ungvien'] = "qlhsuv/qlhsuv/index";
$route['quanly-timviec'] = "qltimviec/qltimviec/index/$1";
$route['quanly-tuyendung'] = "qltuyendung/qltuyendung/index";
$route['timviec-city/(:any)'] = "searchadress/searchadress/searchadress_post/$1";
$route['tao-hsungvien'] = "taohsuv/taohsuv/index/$1";
$route['tao-tintuyendung'] = "taotintd/tintd/index/$1";
$route['tintd-dadang'] = "tddadang/tddadang/index";
$route['thongtin-canhan'] = "thongtincanhan/thongtincanhan/index/$1";
$route['thongtin-ntd'] = "thongtinntd/infontd/index/$1";
$route['timvieclam'] = "timvieclam/timvieclam";
$route['tuyendungnhanh'] = "tuyendungnhanh/tuyendungnhanh";
$route['da-ung-tuyen'] = "ungtuyen/daungtuyen/index/$1";
$route['search-time/(:any)'] = "searchtime/searchtime/index/$1";
$route['tim-kiem'] = "formsearch/search";
$route['ung-tuyen-check/(:any)-(:any)'] = "infotintd/infotintd/redirect_nopdon/$1";
$route['ung-tuyen/(:any)-(:any)'] = "infotintd/infotintd/nopdon/$1";
$route['xoa-ho-so/(:any)/(:any)'] = "dadang/hsdadang/delete/$1";
$route['report-tin/(:any)-(:any)'] = "infotintd/infotintd/report/$1";
/* End of file routes.php */
/* Location: ./application/config/routes.php */