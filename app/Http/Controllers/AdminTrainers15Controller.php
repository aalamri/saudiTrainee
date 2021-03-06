<?php namespace App\Http\Controllers;

use App\User;
use App\Trainer;

	use Session;
	use Request;
	use DB;
	use CRUDBooster;

	class AdminTrainers15Controller extends \crocodicstudio\crudbooster\controllers\CBController {

	    public function cbInit() {

			# START CONFIGURATION DO NOT REMOVE THIS LINE
			$this->title_field = "nameAr";
			$this->limit = "20";
			$this->orderby = "id,desc";
			$this->global_privilege = false;
			$this->button_table_action = true;
			$this->button_bulk_action = true;
			$this->button_action_style = "button_icon";
			$this->button_add = true;
			$this->button_edit = true;
			$this->button_delete = true;
			$this->button_detail = true;
			$this->button_show = true;
			$this->button_filter = true;
			$this->button_import = false;
			$this->button_export = false;
			$this->table = "trainers";
			# END CONFIGURATION DO NOT REMOVE THIS LINE

			# START COLUMNS DO NOT REMOVE THIS LINE
			$this->col = [];
			$this->col[] = ["label"=>"NameAr","name"=>"nameAr"];
			$this->col[] = ["label"=>"NameEn","name"=>"nameEn"];
			$this->col[] = ["label"=>"Phone","name"=>"phone"];
			$this->col[] = ["label"=>"Email","name"=>"email"];
			$this->col[] = ["label"=>"Twitter","name"=>"twitter"];
			$this->col[] = ["label"=>"LinkedIn","name"=>"linkedIn"];
			$this->col[] = ["label"=>"Facebook","name"=>"facebook"];
			$this->col[] = ["label"=>"Image","name"=>"image","image"=>true];
			$this->col[] = ["label"=>"User","name"=>"user_id","join"=>"cms_users,name"];
			# END COLUMNS DO NOT REMOVE THIS LINE

			# START FORM DO NOT REMOVE THIS LINE
			$this->form = [];
			$this->form[] = ['label'=>'NameAr','name'=>'nameAr','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'NameEn','name'=>'nameEn','type'=>'text','validation'=>'max:255','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Phone','name'=>'phone','type'=>'number','validation'=>'required|numeric','width'=>'col-sm-10','placeholder'=>'You can only enter the number only'];
			$this->form[] = ['label'=>'Email','name'=>'email','type'=>'email','validation'=>'required|min:1|max:255|email|unique:trainers','width'=>'col-sm-10','placeholder'=>'Please enter a valid email address'];
			$this->form[] = ['label'=>'Twitter','name'=>'twitter','type'=>'text','validation'=>'max:255','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'LinkedIn','name'=>'linkedIn','type'=>'text','validation'=>'max:255','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Facebook','name'=>'facebook','type'=>'text','validation'=>'max:255','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'City','name'=>'city','type'=>'text','validation'=>'max:255','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Degree','name'=>'degree','type'=>'text','validation'=>'max:255','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'TrainingArea','name'=>'trainingArea','type'=>'text','validation'=>'max:255','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Certificate','name'=>'certificate','type'=>'text','validation'=>'max:255','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Experience','name'=>'experience','type'=>'textarea','validation'=>'min:5|max:5000','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Image','name'=>'image','type'=>'upload','validation'=>'required|image|max:3000','width'=>'col-sm-10','help'=>'File types support : JPG, JPEG, PNG, GIF, BMP'];
			if (\crocodicstudio\crudbooster\helpers\CRUDBooster::me()->id_cms_privileges == \App\User::ADMIN_PRIVILAGE_ID) {

				$this->form[] = ['label'=>'User','name'=>'user_id','type'=>'select','validation'=>'required','width'=>'col-sm-9', 'datatable' => 'cms_users,email', 'datatable_where' => 'id_cms_privileges=2'];
			}
				# END 	# END FORM DO NOT REMOVE THIS LINE

			# OLD START FORM
			//$this->form = [];
			//$this->form[] = ['label'=>'NameAr','name'=>'nameAr','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'NameEn','name'=>'nameEn','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Phone','name'=>'phone','type'=>'number','validation'=>'required|numeric','width'=>'col-sm-10','placeholder'=>'You can only enter the number only'];
			//$this->form[] = ['label'=>'Email','name'=>'email','type'=>'email','validation'=>'required|min:1|max:255|email|unique:trainers','width'=>'col-sm-10','placeholder'=>'Please enter a valid email address'];
			//$this->form[] = ['label'=>'Twitter','name'=>'twitter','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'LinkedIn','name'=>'linkedIn','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Facebook','name'=>'facebook','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'City','name'=>'city','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Degree','name'=>'degree','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'TrainingArea','name'=>'trainingArea','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Certificate','name'=>'certificate','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Experience','name'=>'experience','type'=>'textarea','validation'=>'required|string|min:5|max:5000','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Image','name'=>'image','type'=>'upload','validation'=>'required|image|max:3000','width'=>'col-sm-10','help'=>'File types support : JPG, JPEG, PNG, GIF, BMP'];
			//if (\crocodicstudio\crudbooster\helpers\CRUDBooster::me()->id_cms_privileges == \App\User::ADMIN_PRIVILAGE_ID) {
			//
			//$this->form[] = ['label'=>'User','name'=>'user_id','type'=>'select','validation'=>'required','width'=>'col-sm-9', 'datatable' => 'cms_users,email', 'datatable_where' => 'id_cms_privileges=2'];
			//}
			# OLD END FORM

			/* 
	        | ---------------------------------------------------------------------- 
	        | Sub Module
	        | ----------------------------------------------------------------------     
			| @label          = Label of action 
			| @path           = Path of sub module
			| @foreign_key 	  = foreign key of sub table/module
			| @button_color   = Bootstrap Class (primary,success,warning,danger)
			| @button_icon    = Font Awesome Class  
			| @parent_columns = Sparate with comma, e.g : name,created_at
	        | 
	        */
	        $this->sub_module = array();


	        /* 
	        | ---------------------------------------------------------------------- 
	        | Add More Action Button / Menu
	        | ----------------------------------------------------------------------     
	        | @label       = Label of action 
	        | @url         = Target URL, you can use field alias. e.g : [id], [name], [title], etc
	        | @icon        = Font awesome class icon. e.g : fa fa-bars
	        | @color 	   = Default is primary. (primary, warning, succecss, info)     
	        | @showIf 	   = If condition when action show. Use field alias. e.g : [id] == 1
	        | 
	        */
	        $this->addaction = array();


	        /* 
	        | ---------------------------------------------------------------------- 
	        | Add More Button Selected
	        | ----------------------------------------------------------------------     
	        | @label       = Label of action 
	        | @icon 	   = Icon from fontawesome
	        | @name 	   = Name of button 
	        | Then about the action, you should code at actionButtonSelected method 
	        | 
	        */
	        $this->button_selected = array();

	                
	        /* 
	        | ---------------------------------------------------------------------- 
	        | Add alert message to this module at overheader
	        | ----------------------------------------------------------------------     
	        | @message = Text of message 
	        | @type    = warning,success,danger,info        
	        | 
	        */
	        $this->alert        = array();
	                

	        
	        /* 
	        | ---------------------------------------------------------------------- 
	        | Add more button to header button 
	        | ----------------------------------------------------------------------     
	        | @label = Name of button 
	        | @url   = URL Target
	        | @icon  = Icon from Awesome.
	        | 
	        */
	        $this->index_button = array();



	        /* 
	        | ---------------------------------------------------------------------- 
	        | Customize Table Row Color
	        | ----------------------------------------------------------------------     
	        | @condition = If condition. You may use field alias. E.g : [id] == 1
	        | @color = Default is none. You can use bootstrap success,info,warning,danger,primary.        
	        | 
	        */
	        $this->table_row_color = array();     	          

	        
	        /*
	        | ---------------------------------------------------------------------- 
	        | You may use this bellow array to add statistic at dashboard 
	        | ---------------------------------------------------------------------- 
	        | @label, @count, @icon, @color 
	        |
	        */
	        $this->index_statistic = array();



	        /*
	        | ---------------------------------------------------------------------- 
	        | Add javascript at body 
	        | ---------------------------------------------------------------------- 
	        | javascript code in the variable 
	        | $this->script_js = "function() { ... }";
	        |
	        */
	        $this->script_js = NULL;


            /*
	        | ---------------------------------------------------------------------- 
	        | Include HTML Code before index table 
	        | ---------------------------------------------------------------------- 
	        | html code to display it before index table
	        | $this->pre_index_html = "<p>test</p>";
	        |
	        */
	        $this->pre_index_html = null;
	        
	        
	        
	        /*
	        | ---------------------------------------------------------------------- 
	        | Include HTML Code after index table 
	        | ---------------------------------------------------------------------- 
	        | html code to display it after index table
	        | $this->post_index_html = "<p>test</p>";
	        |
	        */
	        $this->post_index_html = null;
	        
	        
	        
	        /*
	        | ---------------------------------------------------------------------- 
	        | Include Javascript File 
	        | ---------------------------------------------------------------------- 
	        | URL of your javascript each array 
	        | $this->load_js[] = asset("myfile.js");
	        |
	        */
	        $this->load_js = array();
	        
	        
	        
	        /*
	        | ---------------------------------------------------------------------- 
	        | Add css style at body 
	        | ---------------------------------------------------------------------- 
	        | css code in the variable 
	        | $this->style_css = ".style{....}";
	        |
	        */
	        $this->style_css = NULL;
	        
	        
	        
	        /*
	        | ---------------------------------------------------------------------- 
	        | Include css File 
	        | ---------------------------------------------------------------------- 
	        | URL of your css each array 
	        | $this->load_css[] = asset("myfile.css");
	        |
	        */
	        $this->load_css = array();
	        
	        
	    }


	    /*
	    | ---------------------------------------------------------------------- 
	    | Hook for button selected
	    | ---------------------------------------------------------------------- 
	    | @id_selected = the id selected
	    | @button_name = the name of button
	    |
	    */
	    public function actionButtonSelected($id_selected,$button_name) {
	        //Your code here
	            
	    }


	    /*
	    | ---------------------------------------------------------------------- 
	    | Hook for manipulate query of index result 
	    | ---------------------------------------------------------------------- 
	    | @query = current sql query 
	    |
	    */
	    public function hook_query_index(&$query) {
	        //Your code here
			if (\crocodicstudio\crudbooster\helpers\CRUDBooster::me()->id_cms_privileges != User::ADMIN_PRIVILAGE_ID) {
				$query->where("user_id", \crocodicstudio\crudbooster\helpers\CRUDBooster::myId());
			}
	    }

	    /*
	    | ---------------------------------------------------------------------- 
	    | Hook for manipulate row of index table html 
	    | ---------------------------------------------------------------------- 
	    |
	    */    
	    public function hook_row_index($column_index,&$column_value) {	        
	    	//Your code here
	    }

	    /*
	    | ---------------------------------------------------------------------- 
	    | Hook for manipulate data input before add data is execute
	    | ---------------------------------------------------------------------- 
	    | @arr
	    |
	    */
	    public function hook_before_add(&$postdata) {        
			//Your code here
			if (\crocodicstudio\crudbooster\helpers\CRUDBooster::me()->id_cms_privileges != User::ADMIN_PRIVILAGE_ID) {
				$postdata['user_id'] = \crocodicstudio\crudbooster\helpers\CRUDBooster::myId();
			}

	    }

	    /* 
	    | ---------------------------------------------------------------------- 
	    | Hook for execute command after add public static function called 
	    | ---------------------------------------------------------------------- 
	    | @id = last insert id
	    | 
	    */
	    public function hook_after_add($id) {        
	        //Your code here

	    }

	    /* 
	    | ---------------------------------------------------------------------- 
	    | Hook for manipulate data input before update data is execute
	    | ---------------------------------------------------------------------- 
	    | @postdata = input post data 
	    | @id       = current id 
	    | 
		*/
		
		function hasPermission($id)
		{
			if (\crocodicstudio\crudbooster\helpers\CRUDBooster::me()->id_cms_privileges != User::ADMIN_PRIVILAGE_ID) {
				$trainer = Trainer::where('user_id', \crocodicstudio\crudbooster\helpers\CRUDBooster::myId())->find($id);
				if ($trainer == null) {
					return false;
				}
			}
			return true;
		}
	
		public function getDetail($id)
		{
			if (!$this->hasPermission($id)) {
				return redirect(url("/admin/trainers"));
			}
			return parent::getDetail($id); // TODO: Change the autogenerated stub
		}
	
		public function getEdit($id)
		{
			if (!$this->hasPermission($id)) {
				return redirect(url("/admin/trainers"));
			}
			return parent::getEdit($id); // TODO: Change the autogenerated stub
		}

		
	    public function hook_before_edit(&$postdata,$id) {        
	        //Your code here

	    }

	    /* 
	    | ---------------------------------------------------------------------- 
	    | Hook for execute command after edit public static function called
	    | ----------------------------------------------------------------------     
	    | @id       = current id 
	    | 
	    */
	    public function hook_after_edit($id) {
	        //Your code here 

	    }

	    /* 
	    | ---------------------------------------------------------------------- 
	    | Hook for execute command before delete public static function called
	    | ----------------------------------------------------------------------     
	    | @id       = current id 
	    | 
	    */
	    public function hook_before_delete($id) {
	        //Your code here

	    }

	    /* 
	    | ---------------------------------------------------------------------- 
	    | Hook for execute command after delete public static function called
	    | ----------------------------------------------------------------------     
	    | @id       = current id 
	    | 
	    */
	    public function hook_after_delete($id) {
	        //Your code here

	    }



	    //By the way, you can still create your own method in here... :) 


	}