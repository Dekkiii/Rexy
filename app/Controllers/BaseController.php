<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * Instance of session service.
     *
     * @var \CodeIgniter\Session\Session
     */
    protected $session;

    
    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = [];

    /**
     * @return void
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.
        $this->session = \Config\Services::session();

        // Check for session timeout
        $this->checkSessionTimeout();
    }

    /**
     * Check session timeout and destroy the session if inactive.
     *
     * @return void
     */

     
    protected function checkSessionTimeout()
    {
        // Get the last activity timestamp from the session
        $lastActivity = $this->session->get('last_activity');

        // Check if last activity is set and exceeds the timeout period (e.g., 30 minutes)
        if ($lastActivity && (time() - $lastActivity > 1800)) {
            // Session has expired, destroy it
            $this->session->destroy();
            return redirect()->to(base_url('login'));
        } else {
            // Update last activity timestamp in the session
            $this->session->set('last_activity', time());
        }
    }
}
