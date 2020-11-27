<?php 

namespace App\Controllers;
use App\Models\Gallery;
use App\Models\Posts;

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

	//--------------------------------------------------------------------

}
