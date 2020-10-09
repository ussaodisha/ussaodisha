<?php 
namespace App\Controllers;
use App\Models\Users;
use CodeIgniter\Controller;

class Admin extends BaseController
{
	public function index(){
		
	}

	public function register(){
		
		$data=[];
		$model = new Users();
		
		if($this->request->getMethod() == 'post'){
			
			$firstname = $this->request->getpost('firstname');
			$lastname =$this->request->getpost('lastname');
			$email = $this->request->getpost('email');
			$password = $this->request->getpost('password');
			$confirmpassword = $this->request->getpost('confirmpassword');

			$rules = [
				'firstname' 		=> 'required|min_length[2]|max_length[50]',
				'lastname' 			=> 'required|min_length[2]|max_length[50]',
				'email' 			=> 'required|valid_email|max_length[80]',
				'password'  		=> 'required|min_length[8]|max_length[20]',
				'confirmpassword'	=> 'required|min_length[8]|max_length[20]|matches[password]',
			];

			if(!$this->validate($rules)){
				$data['validation'] = $this->validator;
			}else{
				$user = $model->where('Email',$email)->first();
				if(!$user){
					$newData = [
						'Name'=>$firstname,
						'Surname'=>$lastname,
						'Email'=>$email,
						'Password'=>password_hash($password,PASSWORD_DEFAULT),
					];

					$model->save($newData);
					$session = session();
					$session->setFlashdata('success','Successful Registrations');
					return redirect()->to('/admin');
					
				}else{
					$data = [
						'User_Exist' => "Email Already Exist Try Again",
					];
				}
			}
		}
		return view('admin/register2',$data);
	}

	public function login(){
		$data=[];
		$model = new Users();
		
		// helper(['form']);
		if($this->request->getMethod() == 'post'){
			
			$email = $this->request->getpost('email');
			$password = $this->request->getpost('pass');

			$rules = [
				'email'     => 'required|valid_email',
				'pass'        => 'required',
			];

			if(! $this->validate($rules)){
				$data['validation'] = $this->validator;
			}else{

				$user = $model->where('Email',$email)->first();
				if($user){
					if(password_verify($password, $user['Password'])){
					
						$userdata = array(
	
							'user_id' =>$user['user_id'],
							'name'=>$user['Name'],
							'surname'=>$user['Surname'],
							'role'=>$user['Role'],
							'islogged_in'=>true
							
						);
	
						session()->set($userdata);
						return redirect()->to('Dashboard');
	
					}else{
						$data =[
							'unsuccess' => "Username and Password not matched try again",
						];
					}
				}else{
					$data =[
						'unsuccess' => "Username and Password not matched try again",
					];
				}
			}
		}
		return view('admin/login2',$data);
	}

	public function Dashboard(){
		$data = [
			'title' => 'Dashboard',
		];
		return view('admin/dashboard',$data);
	}

	public function logout()
	{
		if(session()->get('islogged_in')){
			
			session()->destroy();
			return redirect()->to('/Admin');
			
        }else{
			return redirect()->to('Admin/Dashboard');
		}
	}

	public function data(){
		
	}

	public function forget2(){

		if($this->request->getMethod() == 'post'){
			
			$maildata = $this->request->getVar('email');
			die();
		
		}

		return view('admin/forget2');
		
	}

	//--------------------------------------------------------------------

}
