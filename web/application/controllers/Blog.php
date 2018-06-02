<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Blog extends CI_Controller
    {
        function __construct(){
            parent::__construct();
            $this->load->model('Blog_m', 'm');
        }

        public function index()
        {
            $data['blogs']= $this->m->getblog();
            $this->load->view('layout/header');
            $this->load->view('blog/index', $data);
            $this->load->view('layout/footer');
        }

        public function home(){
            $this->load->view('blog/home');
        }
        public function contact(){
            $this->load->view('blog/contact');
        }
        public function orga(){
            $this->load->view('blog/orga');
        }

        public function  news(){
            $news['article'] = $this->m->showArticle();
            $this->load->view('blog/news', $news);
        }


        public function steunons(){
            $this->load->view('blog/steun-ons');
        }
        public function  volunteer(){
            $this->load->view('blog/volunteer');
        }

       

  

        //I added this page, and we can go to this page

        public function welcome(){

            $this->load->view('blog/welcome');

            
        }




        public function login(){

        $email_login = $this->input->post('email_login',TRUE);
        $password_login = $this->input->post('password_login',TRUE);
       
       
         $user = $this->m->get_user_by_email($email_login);
            
        if($user && $user['password'] == $password_login){

            $user_logged = array(

                'id' => $user['id'],
                'email' =>$user['email'],
                'is_logged_in' => true
            );


            $this->session->set_userdata($user_logged);
            $datainfo['logged']= 'You are logged in';
            redirect('http://localhost:8888/add');

             
        } else{

            $error['logerror']= 'Wrong email or password, please try agian';
            $this->load->view('blog/welcome', $error);
        }

  
        }


        public function addNews(){


            $this->form_validation->set_rules('txt_title', 'Title', 'required');
            $this->form_validation->set_rules('txt_description', 'Description', 'required');
            if($this->form_validation->run()==false){
                $data['error'] = validation_errors();
                $this->load->view('blog/add',$data);

            } else {

                $title = $this->input->post('txt_title', true);
                $description= $this->input->post('txt_description', true);
                $id= $this->input->post('admin_id');

             

                $data = array(

                    'title' => $title,
                    'description' => $description,
                    'admins_id' => $id

                );

              

                $news['article'] = $this->m->showArticle();
                $this->m->submit($data);
                $this->load->view('blog/add', $news);
                redirect('http://localhost:8888/add');

            }


        }

        public function allnews(){
            $this->load->view('blog/editPage');
            redirect('http://localhost:8888/admin/news');
        }

        public function backAdd(){
            $this->load->view('blog/add');
            redirect('http://localhost:8888/add');
        }
        public function backNews(){
            $this->load->view('blog/editPage');
            redirect('http://localhost:8888/admin/news');
        }
        

        public function newsImage($id)
        {
            $article = $this->m->getBlogBy($id);

            $data = array(
              'image' => $article['image'],
              'image_type' => $article['image_type']
            );
            $this->load->view('blog/news_image', $data);
        }

        public function showPage()
        {

            $news['article'] = $this->m->showArticle();
            
        
            $this->load->view('blog/news', $news);
      
        }


        public function delete($id){

            // var_dump($id);
            // die();

            $deleting = $this->m->delete_news($id);
            $news['article'] = $this->m->showArticle();
            // $this->load->view('blog/add', $news);
            redirect('/admin/news');

        }

        public function adminNews(){

            $news['article'] = $this->m->showArticlestoAdmin();
            $this->load->view('blog/adminnews', $news);

        }

        public function editPage($id){

            $data['new'] = $this->m->getBlogBy($id);
            $this->load->view('blog/editpage', $data );


            // $this->load->view('layout/header');
            // $this->load->view('blog/edit', $data);
            // $this->load->view('layout/footer');

        }public function editnew(){

            $postinfo = $this->input->post(null, true);
           
            $this->m->editBlog($postinfo);      
            redirect('/admin/news');
    
        
        }


        public function logout()
        {
            $this->session->sess_destroy();

            redirect('http://localhost:8888/admin');
        }
       

        


       

        
    }

    ?>