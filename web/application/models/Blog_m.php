<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Blog_m extends CI_Model
    {
        public function getBlog()
        {
            $this->db->order_by('created_at', 'desc');
            $query = $this->db->get('news');
            if($query->num_rows() > 0){

                return $query->result();

            }else {

                return false;
            }
        }

        //i add this to the original

        public function get_user_by_email($arg){

            return $this->db->query("SELECT * FROM admins WHERE email= ?", $arg)->row_array();
    
        }

        public function submit($arg)
        {
           
            return $this->db->insert('news', $arg);

          
        }


        public function showArticle()
        {
           
            return $this->db->query("SELECT news.id as newsId, news.title, news.description, admins.id
            FROM news
            LEFT JOIN admins ON news.admins_id = admins.id ORDER BY
            news.created_at DESC;")->result_array();



          
        }public function showArticlestoAdmin()
        {
           
            return $this->db->query("SELECT news.id as newsId, news.title, news.description, admins.id
            FROM news
            LEFT JOIN admins ON news.admins_id = admins.id ORDER BY
            news.created_at DESC;")->result_array();



          
        }


        public function getBlogBy($id){
            $query = "SELECT * FROM news
            WHERE news.id =$id";
            $result = $this->db->query($query)->row_array();
            return $result;
            
        }
        public function editBlog($arg){
        $query = "UPDATE `news` SET `title`= ? ,`description`= ? WHERE news.id= ?";
        $values = [$arg['title'], $arg['description'], $arg['id']];
        $this->db->query($query, $values);
    }

        
        public function update(){

            $id = $this->input->post('txt_hidden');
            $field = array(

                'title'=> $this->input->post('txt_title'),
                'description' => $this->input->post('txt_description')
            );

            $this->db->where('id', $id);
            $this->db->update('news', $field);
            echo $this->db->last_query(); extit; 
            if($this->db->affected_rows() > 0){

                return true;
            }else {

                return false;

            }
        }


        public function delete($id){

            $this->db->where('id', $id);
            $this->db->delete('news');

            if($this->db->affected_rows() > 0){

                return true;

            }else {

                return false;

            }

        }


        public function delete_news($id){

        return $this->db->query("DELETE FROM news WHERE id = '{$id}'");

        }
        
    }
    

?>