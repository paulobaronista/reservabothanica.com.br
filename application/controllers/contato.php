<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Contato extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['title'] = 'Reserva Bothanica';
        $data['description'] = 'Loteamento residencial fechado de alto padrão';
        $data['keywords'] = 'Reserva Bothanica; loteamento Maracaju; loteamento dourados ;lotes ms; corpal; loteamento royale premium; royale premium Maracaju';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'contato_view';

        if ($this->input->post('enviar_email') == "enviar") {
            $nome = $this->input->post('nome');
            $email = $this->input->post('email');
            $telefone = $this->input->post('phone');
            $cidade = $this->input->post('cidade');
            $mensagem = utf8_decode($this->input->post('mss'));
            $assunto = utf8_decode('Contato enviado pelo site www.reservabothanica.com.br');

            $this->load->library('email');
            $config['mailtype'] = 'html';
            $this->email->initialize($config);

            $this->email->from("site@reservabothanica.com.br", "Reserva Bothanica");
            $this->email->to('site@reservabothanica.com.br');
            $this->email->cc('contato@terradouradainc.com.br, rafael@terradouradainc.com.br, renata@spicycomm.com.br, leadsreservabothanica@gmail.com, paulobaronista@gmail.com');

            $this->email->subject($assunto);
            $this->email->message("<html xmlns='http://www.w3.org/1999/xhtml' dir='ltr' lang='pt-br'>
            <head> <meta http-equiv='content-type' content='text/html;charset=UTF-8' /> </head><body>
            Nome:		{$nome}<br/>
                E-mail:		{$email}<br/>
                    Telefone:	{$telefone}<br/>
                        Cidade:	    {$cidade}<br/>
                            Mensagem:	{$mensagem}<br/>
                                </body></html>");

            if ($this->email->send()) {
                redirect('contato/obrigado');
            } else {
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

    public function obrigado()
    {
        $data['title'] = 'Reserva Bothanica';
        $data['description'] = 'Estilo naturalmente exclusivo de viver';
        $data['keywords'] = 'Reserva Bothanica; loteamento Maracaju; loteamento dourados ;lotes ms; corpal; loteamento royale premium; royale premium Maracaju';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'contato_sucesso';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }

    public function fail()
    {
        $data['title'] = 'Reserva Bothanica';
        $data['description'] = 'Estilo naturalmente exclusivo de viver';
        $data['keywords'] = 'Reserva Bothanica; loteamento Maracaju; loteamento dourados ;lotes ms; corpal; loteamento royale premium; royale premium Maracaju';
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
