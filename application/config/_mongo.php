<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Author: dung.huynh@southtelecom.vn
 *
 * Configuration file for private mongo
 *
 */

// Configuration for session storage mongo
$config['session_mongo_location'] = 'localhost';
$config['session_mongo_port'] = '27017';
$config['session_mongo_db'] = '_worldfone4xs';
$config['session_mongo_user'] = '';
$config['session_mongo_password'] = '';
$config['session_mongo_collection'] = 'Session';
$config['session_mongo_write_concerns'] = (int)1;
$config['session_mongo_write_journal'] = true;

// Configuration for private mongo
$config['_mongo_version'] = 3.419;
$config['_mongo_location'] = 'localhost';
$config['_mongo_port'] = '27017';
$config['_mongo_db'] = '_worldfone4xs';
$config['_mongo_user'] = '';
$config['_mongo_password'] = '';
$config['_mongo_write_concerns'] = (int)1;
$config['_mongo_write_journal'] = true;