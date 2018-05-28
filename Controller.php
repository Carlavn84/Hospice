<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Controller extends CI_Controller
{
    public function index()
    {
    }

    public function volunteerpage()
    {
        $this->load->view('hospice/volunteer_intro');
    }

    public function volunteer_register_page()
    {
        $this->load->view('hospice/register');
    }

      public function steun_ons_pagina()
    {
        $this->load->view('hospice/donation');
    }
    

    public function register()
    {
        $this->input->post(null, true);
        $this->form_validation->set_rules('fullname', 'Naam', 'required');
        $this->form_validation->set_rules('birthday', 'Geboortedatum', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('address', 'Anders', 'required');
        $this->form_validation->set_rules('postcode', 'Postcode', 'required');
        $this->form_validation->set_rules('telephone', 'Telefoonnummer', 'required');
        $this->form_validation->set_rules('mobile', 'Mobiel', 'required');
        $this->form_validation->set_rules('profession', 'Beroep/ Opleiding', 'required');
        $this->form_validation->set_rules('working_hour_volunteer', 'werkuren per week', 'required|integer|greater_than[7]');
        $this->form_validation->set_rules('life_conviction', 'Levensovertuiging', 'required');
        $this->form_validation->set_rules('marial_status', 'Burgerlijke staat/Gezinssamenstelling', 'required');
        $this->form_validation->set_rules('gender', 'geslacht', 'required');
        $this->form_validation->set_rules('working_experience', 'Antwoord', 'required');
        $this->form_validation->set_rules('question_1', 'Antwoord op vraag 1', 'required');
        $this->form_validation->set_rules('question_2', 'Antwoord op vraag 2', 'required');
        $this->form_validation->set_rules('question_3', 'Antwoord op vraag 3', 'required');
        $this->form_validation->set_rules('question_4', 'Antwoord op vraag 4', 'required');
        $this->form_validation->set_rules('question_5', 'Antwoord op vraag 5', 'required');
        $this->form_validation->set_rules('question_6', 'Antwoord op vraag 6', 'required');
        $this->form_validation->set_rules('question_7', 'Antwoord op vraag 7', 'required');

        if ($this->form_validation->run() == false) {
            $data['error']= validation_errors();
            $this->load->view('hospice/register', $data);
        } else {
            $fullname =  $this->input->post('fullname', true);
            $birthday =  $this->input->post('birthday', true);
            $email =  $this->input->post('email', true);
            $selected_gender = $this->input->post('gender', true);
            $address =  $this->input->post('address', true);
            $postcode =  $this->input->post('postcode', true);
            $telephone =  $this->input->post('telephone', true);
            $mobile =  $this->input->post('mobile', true);
            $profession =  $this->input->post('profession', true);
            $working_hour_volunteer =  $this->input->post('working_hour_volunteer', true);
            $life_conviction =  $this->input->post('life_conviction', true);
            $working_experience =  $this->input->post('working_experience', true);
            $marial_status =  $this->input->post('marial_status', true);
            $working_experience =  $this->input->post('working_experience', true);
            $answer_question_1 =  $this->input->post('question_1', true);
            $answer_question_2 =  $this->input->post('question_2', true);
            $answer_question_3 =  $this->input->post('question_3', true);
            $answer_question_4 =  $this->input->post('question_4', true);
            $answer_question_5 =  $this->input->post('question_5', true);
            $answer_question_6 =  $this->input->post('question_6', true);
            $answer_question_7 =  $this->input->post('question_7', true);

            $query= array(
            'full_name' => $fullname,
            'email' => $email,
            'birthday' => $birthday,
            'gender' => $selected_gender,
            'address' => $address,
            'postcode' => $postcode,
            'phone_number' => $telephone,
            'mobile_number' => $mobile,
            'profession' => $profession,
            'working_hour_volunteer' =>  $working_hour_volunteer,
            'work_experience' => $working_experience,
            'marial_status' =>   $marial_status,
            'answer_of_q1' =>   $answer_question_1,
            'answer_of_q2' =>   $answer_question_2,
            'answer_of_q3' =>   $answer_question_3,
            'answer_of_q4' =>   $answer_question_4,
            'answer_of_q5' =>   $answer_question_5,
            'answer_of_q6' =>   $answer_question_6,
            'answer_of_q7' =>   $answer_question_7
          );
            $this->load->model('data');
            $check= $this->data->add_volunteer($query);
            $this->session->set_flashdata('register_successful', 'Your volunteer request have been submitted. We will get back to you soon');
            $this->load->view('hospice/register');
        }
    }
}
