<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Setting;
use App\Project;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SettingsController extends Controller
{
    public function index()
    {
        //Slideshow
        $slideshow = [
            ['title'=>'What is PoloniaGo?',
                'desc'=>'Poland\'s most trusted crowdfunding platform that helps you raise funds for personal needs, charitable causes and creative ideas.',
                'slide'=>asset('images/homeslides/slide_1.jpg'),
                'cta'=>'Add a Project','url'=>url('project/add')],
        ];

        // Set metas for SEO
        $this->metas = [
            'title' => 'Best Crowdfunding Platform & Website in Poland | Online Fundraising Website - PoloniaGo',
            'keywords' => 'polish crowdfunding, poland crowdfunding',
            'description' => 'PoloniaGo is a crowdfunding platform for Polish Community, for creative projects. A home for film, music, art, theater, games, comics, design, photography, and more.',
            'author' => 'PoloniaGo.com',
        ];

        $projects = [];
        $projects['featured'] = Project::where('featured','1')->orderBy('created_at')->get()->take(4);
        $projects['updated'] = Project::orderBy('updated_at')->get()->take(4);
        $projects['new'] = Project::orderBy('created_at')->get()->take(4);

        $this->layout = 'setting.index';
        $this->view = $this->BuildLayout();
        $this->view
            ->withProjects($projects)
            ->withSlideshow($slideshow)
        ;
        return $this->view;
    }

    public function edit($type=null)
    {
        $projects = [];
        $projects['featured'] = Project::where('featured','1')->orderBy('created_at')->get()->take(4);
        $projects['updated'] = Project::orderBy('updated_at')->get()->take(4);
        $projects['new'] = Project::orderBy('created_at')->get()->take(4);

        $this->layout = 'setting.edit';
        $this->view = $this->BuildLayout();
        $this->view
            ->withProjects($projects);
        return $this->view;
    }

    public function store()
    {

    }

    public function getSetting($type=null)
    {
        if($type == null)
        {
            // Get All Settings
        }else{

            // Get Specified Type Settings Only

        }
    }
}
