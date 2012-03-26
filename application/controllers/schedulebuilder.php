<?php

class ScheduleBuilder extends CI_Controller{
    
    function __constructor(){
      parent::__contructor();
    }


	public function listAllCourses()
	{
		$this->load->helper(array('form', 'url'));
        $this->load->model('course', 'course_model');
        $data = array('courseList' => $this->course_model->get_all_courses());
        $this->load->view('listAllCourses.php', $data);
	}


    public function listAllAllowedCourses()
    {
      //1. Get student id from session, query the student record for completed courses or from global variable.
      $id = 3;
      $this->load->model('CompletedCourse', 'completed_courses');
      $this->load->model('course', 'course_model');
      $student_completed_courses = $this->completed_courses->find_by_student_id($id);
      $data["courseList"] = $this->course_model->get_all_courses_allowed($student_completed_courses);
      $this->load->view('listAllCourses.php',  $data);
      //4. Function returns an array of courses that student meets the requirement.
    }

    
    public function generate_schedule(/*array of course id*/)
    {
     $courses = $this->input->post("course");
     $course_data = $this->get_course_detail($courses);
     //use $course_data to call another function that build an array of all possible course combination
     //load view to display combination of courses
    }


    private function get_course_detail($courses)
    {
      $this->load->model('course', 'course_model');
      $course_detail = array();
      foreach($courses as $course):
        settype($course, 'integer');
        $the_course = $this->course_model->find_by_id($course);
        $the_course['lectures'] = $this->get_lecture($course);
        array_push($course_detail,$the_course);

      endforeach;
      print_r($course_detail);
    }

    private function get_lecture($course_id)
    {
      $this->load->model('lecture', 'lecture_model');
      return $lectures = $this->lecture_model->find_by_course_id($course_id);
      //foreach($lectures as $lecture):
          //$lecture["tutorials"] = $this->get_tutorials($lecture["id"]);
      //endforeach;
    }

    private function get_tutorial($lecture_id)
    {
    }



}

?>
