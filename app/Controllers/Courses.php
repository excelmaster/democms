<?php

namespace App\Controllers;
use App\Models\CourseModel;

class Courses extends BaseController
{
	public function index( $site)
	{
		$courseInstance = new CourseModel($db);
		$courses = $courseInstance->like('idnumber',$site,'after');
		$courses = $courseInstance->where('category',99)->findAll();
		$courses = array('courses'=>$courses, 'courseId'=>'1', 'site' => $site);
		return view('courses/index',$courses);
	}
}
