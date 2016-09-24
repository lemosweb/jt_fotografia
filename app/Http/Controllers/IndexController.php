<?php

namespace App\Http\Controllers;

use App\Agenda;
use App\Gallery;
use App\ImageGallery;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Http\Requests;
use PHPMailer;

class IndexController extends Controller
{

    private $images;
    private $videos;
    private $agenda;



    public function __construct(ImageGallery $images, Video $videos, Agenda $agenda)
    {
        $this->videos = $videos;
        $this->images = $images;
        $this->agenda = $agenda;
    }

    public function index()
    {
        $covers = $this->images->getCovers();
        $images = $this->images->where('gallery_id', 1)->get();
        $videos = $this->videos->all();
        $agendas = $this->agenda->all();
        $count = 0;



        return view('home.index', compact('images','covers','videos','agendas','count'));
    }


    public function slideGallery($category)
    {

        $images = $this->images->all();

        return view('home.slidegallery',compact('category','images'));
    }

    public function sendMail(Request $request)
    {

        // Instanciamos a classe
        @$email = new PHPMailer();

        // Informamos que a classe ira enviar o email por SMTP
        $email->isSMTP();

        // Configuração de SMTP
        $email->Host = "smtp.juliotorresfotografia.com.br";
        $email->SMTPAuth = true;
        $email->SMTPDebug = false;
        $email->Port     = 587;
        $email->Username = "contato@juliotorresfotografia.com.br";
        $email->Password = "macarrao@2016";

        // Remetente da mensagem
        $email->From     = "contato@juliotorresfotografia.com.br";
        $email->FromName = "Site do Julio Torres";

        // Destinatario do email
        $email->AddAddress("contato@juliotorresfotografia.com.br", "Julio Torres Fotografia");


        // Iremos enviar o email no formato HTML
        $email->IsHTML(true);

        // Assunto e Corpo do email
        $email->Subject  = "Mensagem do Site - www.juliotorresfotografia.com.br";
        $email->Body = "<p>De : ".$request->get('name')."</p><p>e-mail : ".$request->get('email')."</p><p>Mensagem : ".$request->get('message')."<p>";

        // Enviando o email

        $enviado = $email->Send();
        $email->ClearAllRecipients();
        $email->ClearAttachments();




        return redirect()->route('index');

    }


}
