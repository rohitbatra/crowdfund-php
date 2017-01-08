<?php namespace App\Http\Controllers;
use App\Category;
use App\CategoryType;
use Illuminate\Http\Request;
use Validator;

class CategoryController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index($type = null)
  {
	$this->layout = 'categories.index';
	$this->metas['title'] = "Categories";
	$this->view = $this->BuildLayout();
	if($type == null)
    {
		$categoryTypes = CategoryType::all();
		return $this->view->withCategoryTypes($categoryTypes);
	} else
    {
		$typId = CategoryType::where('slug',$type)->first()->id;
		$categories = Category::where('type',$typId)->orderBy('position')->get();
		return $this->view->withCategories($categories);
	}
  }
  
  private function getCategoryTypeOptions(){
	$return = [];
	$categoryTypes = CategoryType::select('id','title')->get();
	foreach($categoryTypes as $ct){
		$return[$ct->id] = $ct->title;
	}
	return $return;
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
	public function create($id=null)
    {
		$this->layout = 'categories.create';
		$this->metas['title'] = "Add Category";
		if($id!=null)
        {
			$this->metas['title'] = "Edit Category";
		}
	   
		$this->view = $this->BuildLayout();
        
		if($id!=null)
        {
			$category = Category::find($id);
			$this->view->withCategory($category);
		}
		return $this->view;
	}

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
	public function store(Request $request)
    {
		$rules = [
			'title' => 'required|unique:categories',
			'slug' => 'required|unique:categories'
		];
		if($request->has('id'))
        {
			$category = Category::find($request->input('id'));
			$rules = [
				'title' => 'required|unique:categories,title,'.$category->id,
				'slug' => 'required|unique:categories,slug,'.$category->id
			];
		}
		
		$v = Validator::make($request->all(), $rules);

        if ($v->fails())
        {
			return redirect()->back()->withErrors($v->errors())->withInput();
		}

		if($request->has('id'))
        {
			
			$category->fill($request->all());
			$category->save();
            return redirect('admin/categories/edit/'.$category->id)->with('status', 'Category Edited.');

		} else {
			$category = Category::create($request->all());
            return redirect('admin/categories/edit/'.$category->id)->with('status', 'Category Created.');
        }
		return redirect('admin/categories/edit/'.$category->id)->with('message', 'Login Failed');
	}

  public function destroy($id)
  {
      // Check for Projects if any assigned to this Category
        // If Yes -- DO NOT DELETE
        // If NO -- DELETE
      $category = Category::find($id);
      $projects = \App\Project::where('category_ids',$id)->get();
      if(count($projects) != 0)
      {
          return redirect()->back()->withErrors(['error'=>["{$category->title} -- Category cannot be removed, It is linked to ".count($projects)." Projects."]]);

      }else{
          Category::where('id',$id)->forceDelete();
          return redirect()->back()->withErrors(['error'=>[" {$category->title} -- Category has been removed"]]);
      }
  }
  
}

?>