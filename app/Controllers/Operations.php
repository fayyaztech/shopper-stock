<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Store;
use CodeIgniter\HTTP\ResponseInterface;

class Operations extends BaseController
{
    public function createStore()
    {
        $rules = [
            'name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'The Name field is required.'
                ]
            ],
            'contact' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'The Contact field is required.'
                ]
            ],
            'address' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'The Address field is required.'
                ]
            ],
            'store_user_name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'The Store Username is required.'
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email|is_unique[stores.email]',
                'errors' => [
                    'required' => 'The Email field is required.',
                    'valid_email' => 'Please enter a valid email address.',
                    'is_unique' => 'This email is already registered. Please use another one.'
                ]
            ],
            'google_map_link' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'The Google Map Link is required.'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[6]',
                'errors' => [
                    'required' => 'The Password field is required.',
                    'min_length' => 'The Password must be at least 6 characters long.'
                ]
            ]
        ];

        if (!$this->validate($rules)) {
            return redirect()->to('/signup')->withInput()->with('errors', $this->validator->getErrors());
        }


        $data = [
            'name' => $this->request->getPost('name'),
            'contact' => $this->request->getPost('contact'),
            'address' => $this->request->getPost('address'),
            'store_user_name' => $this->request->getPost('store_user_name'),
            'email' => $this->request->getPost('email'),
            'google_map_link' => $this->request->getPost('google_map_link'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT), // Hash password
        ];

        $model = new Store();
        if ($model->insert($data)) {
            return redirect()->to('/login')->with('success', 'Account created successfully');
        } else {
            return redirect()->to('/signup')->withInput()->with('errors', ['Failed to create account. Please try again.']);
        }
    }
}
