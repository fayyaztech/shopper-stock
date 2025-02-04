<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\Http\RequestInterface;
use CodeIgniter\Http\ResponseInterface;

class LoginFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Check if user is logged in
        if (!session()->get('isLoggedIn')) {
            // If not logged in, redirect to login page
            return redirect()->to('/login')->with('error', 'Please login to access this page.');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // You can apply additional actions here after the controller is executed
    }
}
