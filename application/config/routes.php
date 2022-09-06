<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/*
| -------------------------------------------------------------------------
| AUTHENTICATION ROUTES
| -------------------------------------------------------------------------
*/

$route['signin'] = 'auth/signin';
$route['forgot-password'] = 'auth/forgot_password';
$route['logout'] = 'auth/logout';

/*
| -------------------------------------------------------------------------
| HOME ROUTES
| -------------------------------------------------------------------------
*/

// Log In
$route['terms'] = 'home/terms';
$route['privacy'] = 'home/privacy';

// About
$route['about'] = 'home/about';
$route['about/vm'] = 'home/vm';
$route['about/history'] = 'home/history';
$route['about/logo-and-symbols'] = 'home/logo_symbols';
$route['about/hymn'] = 'home/hymn';
$route['about/annual-reports'] = 'home/annual_reports';
$route['about/contact-us'] = 'home/contact_us';
$route['about/maps'] = 'home/maps';
$route['about/code'] = 'home/code';
$route['about/memorandum-orders'] = 'home/memorandum_orders';
$route['about/executive-orders'] = 'home/executive_orders';
$route['about/codi-manual'] = 'home/codi_manual';
$route['about/citizens-charter'] = 'home/citizens_charter';

// Academic
$route['academic/programs'] = 'home/programs';
$route['academic/ous'] = 'home/ous';
$route['academic/library'] = 'home/library';
$route['academic/ovpaa'] = 'home/ovpaa';

// Students
$route['student/services'] = 'home/student_services';
$route['student/organizations'] = 'home/organizations';
$route['student/publications'] = 'home/student_publications';
$route['student/council'] = 'home/student_council';
$route['student/handbook'] = 'home/student_handbook';
$route['student/downloads'] = 'home/downloads';

// Research
$route['research/researches'] = 'home/researches';
$route['research/extensions'] = 'home/extensions';
$route['research/intellectual-property'] = 'home/intellectual_property';
$route['research/research-ethics'] = 'home/research_ethics';

// CTA
$route['applicants'] = 'home/applicants';
$route['events'] = 'home/events';
$route['docu-request'] = 'home/documents';
$route['scholarships'] = 'home/scholarships';
$route['calendar'] = 'home/calendar';

// PUP QC
$route['facilities'] = 'home/facilities';
$route['offices'] = 'home/offices';
$route['personnel'] = 'home/personnel';
$route['faculty'] = 'home/faculty';

// Footer
$route['admission'] = 'home/admission';

/*
| -------------------------------------------------------------------------
| STUDENT ROUTES
| -------------------------------------------------------------------------
*/

$route['student/dashboard'] = 'student';

/*
| --------------
|     ODRS
| --------------
*/

$route['student/odrs/new-request'] = 'student/new_request';
$route['student/odrs/requests'] = 'student/requests';
$route['student/odrs/transactions'] = 'student/transactions';


/*
| --------------
|     OMSSS
| --------------
*/

// Health Information
$route['student/omsss/medical-services/personal-info'] = 'student/personal_information';
$route['student/omsss/medical-services/health-history'] = 'student/health_history';
$route['student/omsss/medical-services/immunization'] = 'student/immunization';

// Appointment
$route['student/omsss/medical-services/medical-consultation'] = 'student/medical_consultation';
$route['student/omsss/dentist-services'] = 'student/dental_consultation';
$route['student/omsss/guidance-services'] = 'student/guidance_consultation';
$route['student/omsss/medical-prescription'] = 'student/medical_prescription';

// Logs and Contact OMSSS
$route['student/omsss/medical-logs'] = 'student/medical_logs';
$route['student/omsss/contact-omsss'] = 'student/contact_omsss';

/*
| --------------
|     EVRSERS
| --------------
*/

// If no organizer status

// Apply as Organizer

// Reservations
$route['student/evrsers/new-reservation'] = 'student/new_reservation';
$route['student/evrsers/view-reservations'] = 'student/view_reservations';
$route['student/evrsers/reservation-history'] = 'student/reservation_history';

/*
| -------------------------------------------------------------------------
| SUPER ADMIN ROUTES
| -------------------------------------------------------------------------
*/

$route['admin/dashboard'] = 'admin';

/*
| ----------------------
|     USER MANAGEMENT
| ----------------------
*/

$route['admin/user-management/students'] = 'admin/user_students';
$route['admin/user-management/pup-staffs'] = 'admin/user_pup_staffs';
$route['admin/user-management/super-admins'] = 'admin/user_super_admins';

/*
| --------------
|     OMSSS
| --------------
*/

$route['admin/omsss/medical-appointment'] = 'admin/medical_appointment';
$route['admin/omsss/dentist-appointment'] = 'admin/dentist_appointment';
$route['admin/omsss/guidance-appointment'] = 'admin/guidance_appointment';
$route['admin/omsss/medical-prescription'] = 'admin/medical_prescription';

/*
| -------------------------------------------------------------------------
| PUP STAFF ROUTES
| -------------------------------------------------------------------------
*/

$route['pup-staff/dashboard'] = 'pupstaff';
