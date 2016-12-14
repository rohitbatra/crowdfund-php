<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Setting;
use App\Project;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
		//Slideshow
		$slideshow = [
			['title'=>'What is PoloniaGo?',
             'desc'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
             'slide'=>asset('images/homeslides/main.jpg'),
             'cta'=>'Add a Project','url'=>url('project/add')],
		];

		// Set metas for SEO
		$this->metas = [
            'title' => 'PoloniaGo',
            'keywords' => 'polish crowdfunding, poland crowdfunding',
            'description' => 'PoloniaGo is a crowdfunding platform for Polish Community, for creative projects. A home for film, music, art, theater, games, comics, design, photography, and more.',
            'author' => '',
		];

		$projects = [];
		$projects['featured'] = Project::where('featured','1')->orderBy('created_at')->get()->take(4);
		$projects['updated'] = Project::orderBy('updated_at')->get()->take(4);
		$projects['new'] = Project::orderBy('created_at')->get()->take(4);
		
		$this->layout = 'main.homepage';
		$this->view = $this->BuildLayout();
		$this->view
			->withProjects($projects)
			->withSlideshow($slideshow)
			;
		return $this->view;
	}
}
