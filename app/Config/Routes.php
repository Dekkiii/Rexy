<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('main/', 'Home::index');
$routes->get('/', 'Home::index');
$routes->get('slow', 'slowController::index');
$routes->get('projector', 'ProjectorController::index');
$routes->get('bsod', 'BsodController::index');
$routes->get('blank', 'BlankController::index');
$routes->get('printer_main', 'PrinterMainController::index');
$routes->get('printer_noShow', 'PrinterMainController::noShow');
$routes->get('printer_bnw', 'PrinterMainController::bnw');
$routes->get('printer_paperjam', 'PrinterMainController::paperjam');
$routes->get('printer_size', 'PrinterMainController::size');
$routes->get('printer_tray', 'PrinterMainController::tray');
$routes->get('printer_acc', 'PrinterMainController::acc');
$routes->get('wifi', 'WifiController::index');
$routes->get('laptop_main', 'LaptopMainController::index');
$routes->get('laptop_touchpad', 'LaptopMainController::touchpad');
$routes->get('laptop_audio', 'LaptopMainController::audio');
$routes->get('laptop_hinge', 'LaptopMainController::hinge');
$routes->get('laptop_bsod', 'LaptopMainController::bsod');
$routes->get('laptop_blank', 'LaptopMainController::blank');
$routes->get('internet_main', 'InternetMainController::index');
$routes->get('internet_nocon', 'InternetMainController::nocon');
$routes->get('email_main', 'EmailMainController::index');
$routes->get('Email_Ribbon', 'EmailMainController::ribbonView');
$routes->get('Email_Calendar', 'EmailMainController::calendarView');
$routes->get('Email_Signature', 'EmailMainController::signatureView');
$routes->get('Email_Plugins', 'EmailMainController::pluginsView');
$routes->get('Email_Reading', 'EmailMainController::readingView');


