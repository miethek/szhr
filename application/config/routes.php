<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "add";

$route['dodane'] = 'add/dodane/';

$route['zgloszenia'] = 'zgloszenia/wszystkie/';
$route['zgloszenia/(:any)'] = 'zgloszenia/wszystkie/$1';
$route['losowanie'] = 'zgloszenia/losowanie/';
$route['weryfikacja'] = 'zgloszenia/weryfikacja/';
$route['zwyciezcy'] = 'zgloszenia/zwyciezcy/';
$route['zwyciezcy/(:any)'] = 'zgloszenia/zwyciezcy/$1';
$route['zglos_wygrana'] = 'zgloszenia/zglos_wygrana/';

$route['uzytkownicy'] = 'uzytkownicy/wszyscy/';
$route['uzytkownicy/(:any)'] = 'uzytkownicy/wszyscy/$1';
$route['dodaj_uzytkownika'] = 'uzytkownicy/dodaj/';
$route['edytuj_uzytkownika/(:any)'] = 'uzytkownicy/edytuj/$1';
$route['zmien_haslo_uzytkownika/(:any)'] = 'uzytkownicy/zmien_haslo/$1';

$route['logi'] = 'logi/wszystkie/';
$route['logi/(:any)'] = 'logi/wszystkie/$1';

$route['logi_okres'] = 'logi/okres/';



$route['reset'] = 'login/reset/';
$route['password_reset'] = 'login/password_reset/';
$route['logout'] = 'login/logout';
$route['access_denied'] = 'login/access/';

$route['ticket/show/(:any)'] = 'ticket/show/$1';
$route['ticket/edit/(:any)'] = 'ticket/edit/$1';

$route['404_override'] = '';