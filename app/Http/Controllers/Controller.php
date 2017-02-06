<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

//settings model
use App\Setting as Setting;
//use App\Navigations;
use Auth;

abstract class Controller extends BaseController
{
    use DispatchesJobs, ValidatesRequests;

	public $styles;
	public $scripts;
	public $metas;
	public $layout;
	public $view;
	public $user;

	public function __construct(){
		$this->styles = ['app.css','all.css'];
		$this->layout = 'layouts.default';
		$this->user = Auth::user();
		$this->scripts = [
			'header'=>['https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js','https://www.google.com/recaptcha/api.js?hl=en&render=explicit&onload=callRecaptcha'],
			'footer'=>['bootstrap.min.js','app.js']
		];
		
		$recaptchakey = Setting::getSetting('recaptchakey');
		$this->view = $this->BuildLayout()->with('recaptchakey',$recaptchakey);

		$this->metas = array(
			'description'=>Setting::getSetting('description'),
			'keywords'=>Setting::getSetting('keywords'),
			'author'=>Setting::getSetting('author'),
			'title'=>Setting::getSetting('title'),
			);
	}
	
	/**
	 * get youtube video ID from URL
	 *
	 * @param string $url
	 * @return string Youtube video id or FALSE if none found. 
	 */
	function youtube_id_from_url($url) {
		$pattern = 
			'%^# Match any youtube URL
			(?:https?://)?  # Optional scheme. Either http or https
			(?:www\.)?      # Optional www subdomain
			(?:             # Group host alternatives
			  youtu\.be/    # Either youtu.be,
			| youtube\.com  # or youtube.com
			  (?:           # Group path alternatives
				/embed/     # Either /embed/
			  | /v/         # or /v/
			  | /watch\?v=  # or /watch\?v=
			  )             # End path alternatives.
			)               # End host alternatives.
			([\w-]{10,12})  # Allow 10-12 for 11 char youtube id.
			$%x'
			;
		$result = preg_match($pattern, $url, $matches);
		if ($result) {
			return $matches[1];
		}
		return false;
	}
	
	public function parseVideoUrl($video){
		$return['status'] = false;
		$parsed = parse_url($video);
		if(isset($parsed['host']) && !empty($parsed['host'])){
			switch($parsed['host']){
				case 'www.youtube.com':
				case 'youtube.com':
				case 'youtu.be':
					$return['status'] = true;
					$return['type'] = 'youtube';
					$return['id'] = $this->youtube_id_from_url($video);
					if($return['id'] == false){
						$return['status'] = false;
						$return['errors'] = ['video'=>['Youtube Channel support address']];
					}
				break;
				case 'vimeo.com':
				case 'www.vimeo.com':
					$return['status'] = true;
					$return['type'] = 'vimeo';
					$return['id'] = (int) substr(parse_url($video, PHP_URL_PATH), 1);
					if ($return['id'] == 0){
						$return['status'] = false;
						$return['errors'] = ['video'=>['Vimeo support Channel address']];
					}
				break;
				default:
					$return['status'] = false;
					$return['errors'] = ['video'=>['Youtube or Vimeo put video address']];
				break;
			}
		} else {
			$return['status'] = false;
			$return['errors'] = ['video'=>['Youtube or Vimeo video address shall Ob']];
		}
		return $return;
	}

	public function BuildLayout()
    {
		$settings = Setting::allSetting();
		$navigations = [
			'super'=>[
				['title'=>'Projects','url'=>url('projects')],
				['title'=>'Add a Project','url'=>url('project/add')],
				['title'=>'About Us','url'=>url('about-us')],
			],
			'user'=>[
				['title'=>'Login','url'=>'#','attributes'=>[
						'data-toggle'=>'modal',
						'data-target'=>'#loginModal',
					],
				],
				['title'=>'Register','url'=>'#','attributes'=>[
						'data-toggle'=>'modal',
						'data-target'=>'#registerModal',
					],
				],
			],
			'about'=>[
				['title'=>'Partners','url'=>url('about-partners')],
				['title'=>'Supporters','url'=>url('about-supporters')],
				['title'=>'Terms of Service','url'=>url('tos')],
			],
			'help'=>[
				['title'=>'FAQ','url'=>url('faq')],
				['title'=>'Funding','url'=>url('funding')],
				['title'=>'Requirements','url'=>url('requirment')]
			]
		];
		
		$categories = \App\Category::where('type',1)->get();
		foreach($categories as $c)
        {
			$navigations['categories'][]=['title'=>$c->title,'url'=>$c->url];
		}

		if ($this->user)
        {
            if($this->user->role !== 1)
            {
                $navigations['profile'] = [
                    ['title'=>'My Projects','url'=>url('user/projects')],
                    ['title'=>'Support','url'=>url('user/support')],
                    ['title'=>'Edit Profile','url'=>url('user/edit/profile')],
                    ['title'=>'Change Password','url'=>url('user/edit/profile/password')],
                ];
                $navigations['user'] = [
                    ['title'=>'My Profile','url'=>url('user/profile'),'child'=>$navigations['profile']],
                    ['title'=>'Logout','url'=>url('user/logout')],
                ];
            }else{
                $navigations['user'] = [];
            }

			
			$navigations['admin'] = [
				['title'=>'Categories','url'=>url('admin/categories/project')],
				['title'=>'Content','url'=>url('admin/content')],
				['title'=>'Projects','url'=>url('admin/projects')],
				['title'=>'Users','url'=>url('admin/users')],
                ['title'=>'Logout','url'=>url('user/logout')]
			];
			
			if ($this->user->role == 1)
            {
				$navigations['user'][] = ['title'=>'Admin','url'=>url('admin'),'child'=>$navigations['admin']];
			}
		}
		
		$recaptchakey = Setting::getSetting('recaptchakey');
		
		$this->view = view($this->layout)
			->withStyles($this->styles)
			->withScripts($this->scripts)
			->withSettings($settings)
			->withMetas($this->metas)
			->withNavigations($navigations)
			->with('recaptchakey',$recaptchakey)
		;

		if ($this->user){
			$this->view->withUserlevel($this->user->usr_level);
		}
		return $this->view;
		// Run the 'csrf' filter on all post, put, patch and delete requests.
		//$this->beforeFilter('csrf', ['on' => ['post', 'put', 'patch', 'delete']]);
	}
	
}
