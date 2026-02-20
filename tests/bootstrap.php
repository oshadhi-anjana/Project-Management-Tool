<?php
// Define environment for testing
define('ENVIRONMENT', 'testing');

// Define paths
$system_path = __DIR__ . '/../system';
$application_folder = __DIR__ . '/../application';

if (($real_system_path = realpath($system_path)) !== FALSE)
{
    $system_path = $real_system_path.DIRECTORY_SEPARATOR;
}

define('BASEPATH', $system_path);
define('APPPATH', realpath($application_folder).DIRECTORY_SEPARATOR);
define('VIEWPATH', APPPATH.'views'.DIRECTORY_SEPARATOR);

// Load only the necessary CodeIgniter core files for testing
require_once BASEPATH.'core/Common.php';

// Mock get_instance function if needed
if (!function_exists('get_instance')) {
    function get_instance() {
        // Return a mock CI object for testing
        static $CI;
        if (!isset($CI)) {
            // Create a minimal mock object
            $CI = new stdClass();
            $CI->load = new LoaderMock();
        }
        return $CI;
    }
}

// Simple loader mock for tests
class LoaderMock {
    public function model($model) {
        // Handle model loading for tests
    }
    
    public function library($library) {
        // Handle library loading for tests
    }
}