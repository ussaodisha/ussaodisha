<?php 
namespace App\Controllers;
use App\Models\Users;
use App\Models\Posts;
use App\Models\Gallery;
use App\Models\Subscribers;

use CodeIgniter\Controller;

class Admin extends BaseController
{
	public function index(){
		// return view('admin/login2');
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
	
		if($this->request->getMethod() == 'post'){
			
			$email = $this->request->getpost('email');
			$password = $this->request->getpost('pass');

			$rules = $this->validate([
				'email' => 'required|valid_email',
				'pass' => 'required',
			]);

			if(!$rules){

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
							'profile-img'=>$user['profile_image'],
							'islogged_in'=>true
							
						);
	
						session()->set($userdata);
						return redirect()->to('Dashboard');
	
					}else{
						$data =[
							'unmatch_password' => "Wrong Password ! try again",
						];
					}
				}else{
					$data =[
						'unmatch_email' => "Email not matched try again !",
					];
				}
			}
		}
		return view('admin/login2',$data);
	}

	public function logout(){
		
		if(session()->get('islogged_in')){
			
			session()->destroy();
			return redirect()->to(base_url('/Admin'));
			
        }else{

			return redirect()->to(base_url('Admin/Dashboard'));
		}
	}

	public function Dashboard(){
		
		$postmodel = new Posts;
		$usermodel = new Users;
		$gallerymodel = new Gallery;
		$subscribermodel = new Subscribers;

		$data = [
			'title' => 'Dashboard',
			'postdata' => $postmodel->countAll(),
			'userdata' => $usermodel->countAll(),
			'subscriberdata' => $subscribermodel->countAll(),
			'gallerydata' => $gallerymodel->countAll(),

		];
		
		return view('admin/dashboard',$data);
	}

	// public function data(){
	// 	$postmodel = new Posts;
	// 	$usermodel = new Users;
	// 	$gallerymodel = new Gallery;
	// 	$subscribermodel = new Subscribers;

	// 	$data = [
			
	// 		'postdata' => $postmodel->countAll(),
	// 		'userdata' => $usermodel->countAll(),
	// 		'subscriberdata' => $subscribermodel->countAll(),
	// 		'gallerydata' => $gallerymodel->countAll(),

	// 	];
	// }

	public function forget2(){

		if($this->request->getMethod() == 'post'){
			
			$maildata = $this->request->getVar('email');
			die();
		
		}

		return view('admin/forget2');
		
	}

// ------------------------------------------------------------------------Profile Section

	public function Profile(){
		$data = [];
		$Usermodel = new Users();	
		$data =[
			'profiledata' => $Usermodel->where('user_id' ,session()->get('user_id'))->findAll(),
		];
		return view('Admin/profile',$data);
	}

	public function Update_profile(){
		
		$Usermodel = new Users();

		$firstname = $this->request->getpost('first_name');
		$lastname =$this->request->getpost('last_name');
		$state = $this->request->getpost('State');
		$city = $this->request->getpost('City');
		$zip = $this->request->getpost('Zip');
		$newfile = $this->request->getFile('imgfile');
		$oldfile = $this->request->getPost('old_image');

		$rules = [
			'first_name' 		=> 'required|min_length[2]|max_length[50]',
			'last_name' 			=> 'required|min_length[2]|max_length[50]',
		];

		if(!$this->validate($rules)){
			
			$data['validation'] = $this->validator;

		}else{
			
			if(!empty($newfile->getName())){

				if($newfile->isValid()){
					$randomfilename = $newfile->getRandomName();
					unlink(ROOTPATH.'public/Uploads/profiles/'.$oldfile);
					$newfile->move(ROOTPATH.'public/Uploads/profiles/',$randomfilename);
					$uploadfile = $randomfilename;

				}else{

					$data = [
						'User_Exist' => "Images file not support",
					];
				}

			}else{
				$uploadfile = $oldfile;
			}

			$update_data = [
				'Name'=>$firstname,
				'Surname'=>$lastname,
				'State'=>$state,
				'City'=>$city,
				'Zip'=>$zip,
				'profile_image'=>$uploadfile,
			];

			if($Usermodel->where('user_id',session()->get('user_id'))->set($update_data)->update()){

				$session = session();
				$session->setFlashdata('success','Profile Updated Successfully');
				return redirect()->to(base_url('/Admin/Profile'));
			
			}else{
				
				$session = session();
				$session->setFlashdata('unsuccess','Profile Update Failed');
				return redirect()->to(base_url('/Admin/Profile'));
			}
		}
	}


// ----------------------------------------------------------------------------User Section

	public function Users(){
		$data =[];
		$Usermodel = new Users();
		$data = [
			'userdata' =>  $Usermodel->findAll(),
		];
		return view('Admin/users',$data);
	}

	public function Create_user(){
		$data=[];
		$model = new Users();
		
		if($this->request->getMethod() == 'post'){
			
			$firstname = $this->request->getpost('first_name');
			$lastname =$this->request->getpost('last_name');
			$email = $this->request->getpost('email');
			$password = $this->request->getpost('password');
			$confirmpassword = $this->request->getpost('confirmpassword');
			$state = $this->request->getpost('State');
			$city = $this->request->getpost('City');
			$zip = $this->request->getpost('Zip');
			$newfile = $this->request->getFile('imgfile');

			$rules = [
				'first_name' 		=> 'required|min_length[2]|max_length[50]',
				'last_name' 			=> 'required|min_length[2]|max_length[50]',
				'email' 			=> 'required|valid_email|max_length[80]',
				'password'  		=> 'required|min_length[8]|max_length[20]',
				'confirmpassword'	=> 'required|min_length[8]|max_length[20]|matches[password]',
			];

			if(!$this->validate($rules)){
				$data['validation'] = $this->validator;
			}else{
				
				$user = $model->where('Email',$email)->first();
				if(!$user){
					if($newfile->isValid()){
						$randomfilename = $newfile->getRandomName();
						$newfile->move(ROOTPATH.'public/Uploads/profiles/',$randomfilename);
					}else{
						$data = [
							'User_Exist' => "Images file not support",
						];
					}

					$newData = [
						'Name'=>$firstname,
						'Surname'=>$lastname,
						'Email'=>$email,
						'Password'=>password_hash($password,PASSWORD_DEFAULT),
						'State'=>$state,
						'City'=>$city,
						'Zip'=>$zip,
						'profile_image'=>$randomfilename,
					];

					$model->save($newData);
					$session = session();
					$session->setFlashdata('success','Successful Registred');
					return redirect()->to(base_url('Admin/Create_user'));
					
				}else{
					$data = [
						'User_Exist' => "Email Already Exist Try Again",
					];
				}
			}
		}

		return view('Admin/Create_user',$data);
	}

	public function delete_user($id){
		
		$usermodel = new Users();
		$userdata = $usermodel->where('user_id',$id)->find();
		if($usermodel->where('user_id',$id)->delete()){

			if(!empty($userdata[0]['profile_image'])){

				unlink(ROOTPATH.'public/Uploads/profiles/'.$userdata[0]['profile_image']);
				$session = session();
				$session->setFlashdata('success','User Deleted Successfully');
				return redirect()->to(base_url('/Admin/Users'));
			}
			else{
				$session = session();
				$session->setFlashdata('success','User Deleted Successfully');
				return redirect()->to(base_url('/Admin/Users'));
			}
			

		}else{
			$session = session();
			$session->setFlashdata('unsuccess','Deletion Failed ! Try Again');
			return redirect()->to(base_url('/Admin/Users'));
		}

	}

// ----------------------------------------------------------------------------Post Section

	public function Posts(){
		$data =[];
		$Postmodel = new Posts();
		$data = [
			'postdata' => $Postmodel->join('Users', 'Users.user_id = Posts.Post_owner','left')
									->orderBy('Post_id','desc')
									->findAll(),
		];
		return view('Admin/posts',$data);
	}

	public function create_post(){
		$data=[];
		$postmodel = new Posts();
		
		if($this->request->getMethod() == 'post'){
			
			$title = $this->request->getpost('post_title');
			$description = $this->request->getpost('post_description');
			$newfile = $this->request->getFile('postimgfile');
			$date = date("d-M-Y");

			$rules = [
				'post_title' 		=> 'required',
				'post_description' 	=> 'required',
			];

			if(!$this->validate($rules)){
				
				$data['validation'] = $this->validator;

			}else{
				
				if($newfile->isValid()){
					
					$randomfilename = $newfile->getRandomName();
					$newData = [
						'Post_title'=>$title,
						'Post_description'=>$description,
						'Post_date'=>$date,
						'Post_owner'=>session()->get('user_id'),
						'Post_image'=>$randomfilename,
					];

					if($postmodel->save($newData)){
						$newfile->move(ROOTPATH.'public/Uploads/post-uploads/',$randomfilename);
						$session = session();
						$session->setFlashdata('success','Post created Successfully');
						return redirect()->to(base_url('Admin/Create_post'));
					
					}else{
						
						$session = session();
						$session->setFlashdata('unsuccess','Post create Unsuccessful');
						return redirect()->to(base_url('Admin/Create_post'));
					}

				}else{
					
					$data = [
						'invalidimage' => "Images file Missing or not support",
					];
				}
			}
		}
		return view('Admin/create_post',$data);
	}

	public function delete_post($id){
		
		$postmodel = new Posts();
		$postdata = $postmodel->where('Post_id',$id)->find();

		if($postmodel->where('Post_id',$id)->delete()){
			unlink(ROOTPATH.'public/Uploads/post-uploads/'.$postdata[0]['Post_image']);
			$session = session();
			$session->setFlashdata('success','Post Deleted Successfully');
			return redirect()->to(base_url('/Admin/Posts'));
		}else{
			$session = session();
			$session->setFlashdata('unsuccess','Deletion Failed ! Try Again');
			return redirect()->to(base_url('/Admin/Posts'));
		}

	}

	public function Update_post($id){
		
		$data = [];
		$postmodel = new Posts();
		$data = [
			'postdata' => $postmodel->where('Post_id',$id)->find(),
		];

		if($this->request->getMethod() == 'post'){
			
			$title = $this->request->getpost('post_title');
			$description = $this->request->getpost('post_description');
			$newfile = $this->request->getFile('postimgfile');
			$oldfile = $this->request->getPost('old_image');

			$rules = [
				'post_title' 		=> 'required',
				'post_description' 	=> 'required',
			];

			if(!$this->validate($rules)){

				$data['validation'] = $this->validator;

			}else{
				
				if(!empty($newfile->getName())){

					if($newfile->isValid()){
						
						$randomfilename = $newfile->getRandomName();
						unlink(ROOTPATH.'public/Uploads/post-uploads/'.$oldfile);
						$newfile->move(ROOTPATH.'public/Uploads/post-uploads/',$randomfilename);
						$uploadfile = $randomfilename;

					}else{

						$data = [
							'invalidimage' => "Images file Missing or not support",
						];
					}

				}else{

					$uploadfile = $oldfile;

				}

				$update_data = [
					'Post_title'=>$title,
					'Post_description'=>$description,
					'Post_owner'=>session()->get('user_id'),
					'Post_image'=>$uploadfile,
				];

				if($postmodel->where('Post_id',$id)->set($update_data)->update()){

					$session = session();
					$session->setFlashdata('success','Post Updated Successfully');
					return redirect()->to(base_url('/Admin/Update_post/'.$id));
				
				}else{
					
					$session = session();
					$session->setFlashdata('unsuccess','Post Update Failed');
					return redirect()->to(base_url('/Admin/Update_post/'.$id));
				}
			}
		}
		
		return view('Admin/update_post',$data);
	}

// ---------------------------------------------------------------------------Gallry Section

	public function Gallery(){
		$data =[];
		$gallerymodel = new Gallery();
		// $data = [
		// 	'gallerydata' => $gallerymodel->join('Users', 'Users.user_id = Posts.Post_owner','left')
		// 							->orderBy('Post_id','desc')
		// 							->findAll(),
		// ];

		$data = [
			'gallerydata' => $gallerymodel->findAll(),
		];
		return view('Admin/gallery',$data);
	}

	public function create_gallery(){
		$data=[];
		$gallerymodel = new Gallery();
		
		if($this->request->getMethod() == 'post'){
			
			$newfile = $this->request->getFile('uploadimgfile');
			$date = date("d-M-Y");

			if($newfile->isValid()){
				$randomfilename = $newfile->getRandomName();
				$newData = [
					'image_name'=>$randomfilename,
					'date'=>$date,
				];

				if($gallerymodel->save($newData)){
					$newfile->move(ROOTPATH.'public/Uploads/gallery-uploads/',$randomfilename);
					$session = session();
					$session->setFlashdata('success','Image Uploaded Successfully');
					return redirect()->to(base_url('Admin/Create_gallery'));
				
				}else{
					
					$session = session();
					$session->setFlashdata('unsuccess','Image Upload Unsuccessful');
					return redirect()->to(base_url('Admin/Create_gallery'));
				}

			}else{
				$data = [
					'imgFailed' => "Images file not support",
				];
			}
		}
		return view('Admin/create_gallery');
	}

	public function delete_gallery($id){
		
		$gallerymodel = new Gallery();
		$gallerydata = $gallerymodel->where('gallery_id',$id)->find();

		if($gallerymodel->where('gallery_id',$id)->delete()){
			unlink(ROOTPATH.'public/Uploads/gallery-uploads/'.$gallerydata[0]['image_name']);
			$session = session();
			$session->setFlashdata('success','Gallery Item Deleted Successfully');
			return redirect()->to(base_url('/Admin/Gallery'));
		}else{
			$session = session();
			$session->setFlashdata('unsuccess','Deletion Failed ! Try Again');
			return redirect()->to(base_url('/Admin/Gallery'));
		}

	}

// --------------------------------------------------------------------------Subscribers Section

	public function Subscribers(){
		$data =[];
		$subscribermodel = new Subscribers();

		$data = [
			'subscriberdata' => $subscribermodel->findAll(),
		];
		return view('Admin/subscriber',$data);
	}

	public function delete_subscriber($id){
		$subscribermodel = new Subscribers();
		$subscriberdata = $subscribermodel->where('Sub_id',$id)->find();

		if($subscribermodel->where('Sub_id',$id)->delete()){
			$session = session();
			$session->setFlashdata('success','Data Deleted Successfully');
			return redirect()->to(base_url('/Admin/Subscribers'));
		}else{
			$session = session();
			$session->setFlashdata('unsuccess','Deletion Failed ! Try Again');
			return redirect()->to(base_url('/Admin/Subscribers'));
		}	
	}

// ------------------------------------------------------------------------Notifications Section

	public function Notifications(){
		return view('Admin/notifications');
	}

// -------------------------------------------------------------------------Messages Section

	public function Messages(){
		return view('Admin/messages');
	}

// ------------------------------------------------------------------------------Make/Remove Admin Section

	public function make_admin($id){
		$usermodel = new Users();
		$update_data = [
			'Role' => 1,
		];
		if($usermodel->where('user_id',$id)->set($update_data)->update()){
			return redirect()->to(base_url('/Admin/Users'));
		}else{
			return redirect()->to(base_url('/Admin/Users'));
		}
	}

	public function remove_admin($id){
		$usermodel = new Users();
		$update_data = [
			'Role' => 0,
		];
		if($usermodel->where('user_id',$id)->set($update_data)->update()){
			return redirect()->to(base_url('/Admin/Users'));
		}else{
			return redirect()->to(base_url('/Admin/Users'));
		}
	}

// ----------------------------------------------------------------------------Forget Password email

	public function send_mail(){

		$emailto = $this->request->getpost('email');
        $subject = "Test Message from Ci4";
        $message = "This message is test message and Successfull";
        
        $email = \Config\Services::email();
 
        $email->setTo($emailto);
        $email->setFrom('dhirajdeshmukh1922001@gmail.com', 'Ussaodisha.org');
        
        $email->setSubject($subject);
		$email->setMessage($message);
		
		if ($email->send()) 
 		{
            echo 'Email successfully sent';
        } 
 		else 
 		{
            $data = $email->printDebugger(['headers']);
			echo 'Email send failed <pre>';
			print_r($data);
		}
	}

// -------------------------------------------------------------------------------CSV Export Section

	public function export_csv(){ 
		// file name 
		$filename = 'Subscribers_'.date('Ymd').'.csv'; 
		header("Content-Description: File Transfer"); 
		header("Content-Disposition: attachment; filename=$filename"); 
		header("Content-Type: application/csv; ");
	   // get data 
	   $subscribermodel = new Subscribers;
		$usersData = $subscribermodel->findAll();
		// file creation 
		$file = fopen('php://output','w');
		$header = array("id","Email","Name","Messages","Date","Time"); 
		fputcsv($file, $header);
		foreach ($usersData as $key=>$line){ 
			fputcsv($file,$line); 
		}
		fclose($file); 
		exit; 
	}
}