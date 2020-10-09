<?php namespace App\Controllers;

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
		$data = [
			'title' => 'Events'
		];
		return view('events',$data);
	}

	public function Gallery()
	{
		$data = [
			'title' => 'Gallery'
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
