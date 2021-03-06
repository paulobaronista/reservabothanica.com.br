<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{

    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $data['title'] = 'Reserva Bothanica';
        $data['description'] = 'Estilo naturalmente exclusivo de viver';
        $data['keywords'] = 'Reserva Bothanica; loteamento Maracaju; loteamento dourados ;lotes ms; corpal; loteamento royale premium; royale premium Maracaju';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'home_view';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }
    public function politicadeprivacidade() {
        $data['title'] = 'Reserva Bothanica';
        $data['description'] = 'Estilo naturalmente exclusivo de viver';
        $data['keywords'] = 'Reserva Bothanica; loteamento Maracaju; loteamento dourados ;lotes ms; corpal; loteamento royale premium; royale premium Maracaju';
        $menu['politicadeprivacidade'] = 'active';
        $conteudo['pagina_view'] = 'politicadeprivacidade_view';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }
    public function politicadecookies() {
        $data['title'] = 'Reserva Bothanica';
        $data['description'] = 'Estilo naturalmente exclusivo de viver';
        $data['keywords'] = 'Reserva Bothanica; loteamento Maracaju; loteamento dourados ;lotes ms; corpal; loteamento royale premium; royale premium Maracaju';
        $menu['politicadecookies'] = 'active';
        $conteudo['pagina_view'] = 'politicadecookies_view';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }
}

/* Location: ./application/controllers/home.php */
