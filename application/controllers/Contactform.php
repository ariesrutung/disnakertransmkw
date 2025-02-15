<?php
class contactform extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->helper(array('form', 'url'));
        // $this->load->library(array('session', 'form_validation', 'email'));
    }

    function index()
    {
        //set validation rules
        $this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean|callback_alpha_space_only');
        $this->form_validation->set_rules('email', 'Emaid ID', 'trim|required|valid_email');
        $this->form_validation->set_rules('subject', 'Subject', 'trim|required|xss_clean');
        $this->form_validation->set_rules('message', 'Message', 'trim|required|xss_clean');

        //run validation on form input
        if ($this->form_validation->run() == FALSE) {
            //validation fails
            $this->load->view('web/contact_form_view');
        } else {
            //get the form data
            $name = $this->input->post('name');
            $from_email = $this->input->post('email');
            $subject = $this->input->post('subject');
            $message = $this->input->post('message');

            //set to_email id to which you want to receive mails
            $to_email = 'noreply@disnakertransmkw.com';

            //configure email settings
            $config['protocol'] = 'smtp';
            $config['smtp_host'] = 'mail.disnakertransmkw.com';
            $config['smtp_port'] = '465';
            $config['smtp_user'] = 'noreply@disnakertransmkw.com';
            $config['smtp_pass'] = 'Dinakertrans@2022';
            $config['mailtype'] = 'html';
            $config['charset'] =  'iso-8859-1';
            $config['wordwrap'] = TRUE;
            $config['newline'] = "\r\n"; //use double quotes
            //$this->load->library('email', $config);
            $this->email->initialize($config);

            $this->email->from($from_email, $name);
            $this->email->to($to_email);
            $this->email->subject($subject);
            $this->email->message($message);
            if ($this->email->send()) {
                $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Pesan Anda telah dikirim!</div>');
                redirect('contactform');
            } else {
                //error
                $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Ada kesalahan! Silakan coba sesaat lagi!</div>');
                redirect('contactform');
            }
        }
    }

    function alpha_space_only($str)
    {
        if (!preg_match("/^[a-zA-Z ]+$/", $str)) {
            $this->form_validation->set_message('alpha_space_only', 'Hanya boleh mengandung huruf dan spasi');
            return FALSE;
        } else {
            return TRUE;
        }
    }
}
