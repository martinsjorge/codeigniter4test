<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class User extends BaseController
{
    private $userModel;

    public function __construct() 
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        return view('users', [
            'users' => $this->userModel->paginate(3, 'group1'),
            'pager' => $this->userModel->pager                        
        ]);
    }

    public function add(){
        return view('new_user');
    }

    public function edit($user_id){
        return view('edit_user', [
            'user' => $this->userModel->find($user_id)
        ]);
    }

    public function create()
    {
        if($this->userModel->save($this->request->getPost())){
            return redirect()->to(base_url('user?message=3'));	
        }else {
            return redirect()->to(base_url('user?message=2'));	
        } 
    }

    public function update()
    {        
        if(!empty($this->request->getVar('password'))){
            $data = array(
                'id'          => $this->request->getVar('id'),
                'firstname'   => $this->request->getVar('firstname'),
                'lastname'    => $this->request->getVar('lastname'),
                'age'         => $this->request->getVar('age'),
                'email'       => $this->request->getVar('email'),
                'mobile'      => $this->request->getVar('mobile'),
                'hobbie'      => $this->request->getVar('hobbie'),
                'username'    => $this->request->getVar('username'),					
                'password'    => $this->request->getVar('password')
            ); 
        }else {
            $data = array(
                'id'          => $this->request->getVar('id'),
                'firstname'   => $this->request->getVar('firstname'),
                'lastname'    => $this->request->getVar('lastname'),
                'age'         => $this->request->getVar('age'),
                'email'       => $this->request->getVar('email'),
                'mobile'      => $this->request->getVar('mobile'),
                'hobbie'      => $this->request->getVar('hobbie'),
                'username'    => $this->request->getVar('username')
            );
        }   
        
        if($this->userModel->save($data)){
            return redirect()->to(base_url('user?message=4'));	
        }else {
            return redirect()->to(base_url('user?message=2'));	
        }
    }

    public function delete($user_id)
    {
        if($this->userModel->delete($user_id)){
            return redirect()->to(base_url('user?message=1'));	
        }else {
            return redirect()->to(base_url('user?message=2'));	
        }
    }   

}
