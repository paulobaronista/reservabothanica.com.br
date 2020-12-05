<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class homeContato extends CI_Controller{

    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $data['title'] = 'Reserva Bothanica';
        $data['description'] = '';
        $data['keywords'] = '';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'contato_view';

        if($this->input->post('enviar_email') == "enviar"){
            $homeNome = $this->input->post('homeNome');
            $homeEmail = $this->input->post('homeEmail');
            $homeTelefone = $this->input->post('homePhone');
            $assunto = utf8_decode('Contato enviado pelo site www.reservabothanica.com.br');

            $this->load->library('email');
            $config['mailtype'] = 'html';
            $this->email->initialize($config);

            $this->email->from("contato@reservabothanica.com.br","Reserva Bothanica");
            $this->email->to('contato@reservabothanica.com.br');
            $this->email->cc('paulobaronista@gmail.com');

            $this->email->subject($assunto);
            $this->email->message("<html xmlns='http://www.w3.org/1999/xhtml' dir='ltr' lang='pt-br'>
            <head> <meta http-equiv='content-type' content='text/html;charset=UTF-8' /> </head><body>
            Nome:		{$homeNome}<br/>
                E-mail:		{$homeEmail}<br/>
                    Telefone:	{$homeTelefone}<br/>
                            </body></html>");

            if($this->email->send()){
                redirect('contato/obrigado');
            }else{
                redirect('contato/fail');
            }
        }

        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }

    public function obrigado(){
        $data['title'] = 'Reserva Bothanica';
        $data['description'] = '';
        $data['keywords'] = '';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'contato_sucesso';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }

    public function fail(){
        $data['title'] = 'Reserva Bothanica';
        $data['description'] = '';
        $data['keywords'] = '';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'contato_insucesso';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }

}

/* Location: ./application/controllers/contato.php */
