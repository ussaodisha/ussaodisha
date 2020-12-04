<?php 

namespace App\Controllers;
use App\Models\Gallery;
use App\Models\Posts;
use App\Models\Subscribers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Home'
		];
		return view('home',$data);
	}

	public function About()
	{
		$data = [
			'title' => 'About_Us'
		];
		return view('about',$data);
	}

	public function Events()
	{
		$postmodel = new Posts;
		$data = [
			'title' => 'Events',
			'eventdata'=>$postmodel->findAll(),
		];
		return view('events',$data);
	}

	public function Gallery()
	{
		$gallerymodel = new Gallery;
		$data = [
			'title' => 'Gallery',
			'galleydata'=>$gallerymodel->findAll(),
		];
		
		return view('gallery',$data);
	}

	public function Contact()
	{
		$data = [
			'title' => 'Contact'
		];
		return view('contact',$data);
	}

	//-------------------------------------------------------------------- backdata

	public function subscribe_emails(){

		$Subscribersmodel = new Subscribers;
			
		$email = $this->request->getpost('email');
		$name = $this->request->getpost('name');
		$message = $this->request->getpost('message');
		$time = date("h-m-s-a");
		$date = date("d-M-Y");

		$newdata = [
			'Emails'      => $email,
			'Sub_name' 	  => $name,
			'Sub_message' => $message,
			'Date'		  => $date,
			'Time'		  => $time,
		];

		if($Subscribersmodel->save($newdata)){

			return redirect()->to(base_url('/'));

		}else{

			return redirect()->to(base_url('/'));

		}
	}

}
