<?php
	class Pages extends Controller{
		public function __construct(){
			$this->postModel = $this->model('Post');
		}

		public function index(){
			$posts = $this->postModel->getPosts();
			$data = [
				'title' => 'welcome to home',
				'posts' => $posts
			];

			$this->view('pages/index', $data);
		}

		public function about(){
			$data = [
				'title' => 'welcome to about'
			];

			$this->view('pages/about', $data);
		}
	}