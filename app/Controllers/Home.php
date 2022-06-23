<?php

namespace App\Controllers;

use App\Models\PortfolioModel;
use App\Models\ServicesModel;
use App\Models\BlogModel;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\OAuth;
use League\OAuth2\Client\Provider\Google;

class Home extends BaseController
{
    public function __construct()
    {
        $this->PortfolioModel = new PortfolioModel();
        $this->BlogModel = new BlogModel();
        $this->ServicesModel = new ServicesModel();
    }

    public function index()
    {
        $data = [
            'title' => 'HOME',
            'portfolio' => $this->PortfolioModel->getPortfolio()
        ];
        return view('home/index', $data);
        // return view('welcome_message', $data);
    }
    public function services()
    {
        $data = [
            'title' => 'SERVICES',
            'services' => $this->ServicesModel->getServices()
        ];
        return view('home/services', $data);
    }
    public function product()
    {
        $data = [
            'title' => 'PRODUCT',
        ];
        return view('home/product', $data);
    }
    public function talk()
    {
        $data = [
            'title' => 'LETS TALK'
        ];
        return view('home/lets-talk', $data);
    }
    public function portfolio()
    {
        $model = new PortfolioModel();
        $data = [
            'title' => 'PORTFOLIO',
            'portfolio' => $model->getPortfolio()
        ];
        return view('home/portfolio', $data);
    }

    public function blog()
    {
        $model = new BlogModel();
        $data = [
            'title' => 'BLOG',
            'blog' => $model->getBlog()
        ];
        return view('home/blog', $data);
    }

    // detail portofolio

    public function detail_portfolio($slug)
    {
        $model = new PortfolioModel();
        $data = [
            'title' => 'Detail Portfolio',
            'portfolio' => $model->getPortfolio($slug)
        ];
        return view('portfolio/detail-portfolio', $data);
    }

    //end detail portofolio
    // detail services

    public function detail_services($slug)
    {
        $model = new ServicesModel();
        $data = [
            'title' => 'Detail Services',
            'services' => $model->getservices($slug)
        ];
        return view('services/detail-services', $data);
    }

    //end detail service

    public function sendMail()
    {
        if (isset($_POST['kirim'])) {

            $nama = $this->request->getPost('nama');
            $email = $this->request->getPost('email');
            $subjek = $this->request->getPost('subjek');
            $pesan = $this->request->getPost('pesan');

            $response = [];

            $mail = new PHPMailer(true);

            $mail->isSMTP();
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = 587;
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->SMTPAuth = true;
            $mail->AuthType = 'XOAUTH2';

            $email_send = 'tesssany@gmail.com';
            $clientId = '734549949759-ld6k8mhde7aueo5b86o8fbg9ceftvs3n.apps.googleusercontent.com';
            $clientSecret = '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';
            $refreshToken = '1//0gor-6-ZV4uncCgYIARAAGBASNwF-L9IrKo-2L4r_seC59u7J_-iqwpoim7XVr_3tXy5wxwyl1bM2HZXpMqTdSG-uWe2EIes5tks';

            $provider = new Google(['clientId' => $clientId, 'clientSecret' => $clientSecret]);
            $mail->setOAuth(new OAuth(['provider' => $provider, 'clientId' => $clientId, 'clientSecret' => $clientSecret, 'refreshToken' => $refreshToken, 'userName' => $email_send,]));

            //change from this 
            $mail->setFrom($email_send, $nama);
            $mail->addAddress('mekarlaserc@gmail.com');
            $mail->addReplyTo($email, $nama);
            $mail->Subject = 'Pesan dari ' . $nama;

            $mail->isHTML(true);
            $mail->Body =
                '<div style="margin: auto; border-radius: 25px; border: 2px solid #80aaff; padding: 20px; width: auto; height: max-content;">
                <p style="font-family: Arial, Helvetica, sans-serif; color: #262626;">Email: ' . $email . '</p>
                <p style="font-family: Arial, Helvetica, sans-serif; color: #262626;">Nama : ' . $nama . '</p>
                <p style="font-family: Arial, Helvetica, sans-serif;color: #262626;">Subjek : ' . $subjek . '</p>
                <p style="font-family: Arial, Helvetica, sans-serif; color: #262626;">Pesan : ' . $pesan . '</p>
            </div>';
            $mail->AltBody = $pesan;

            //send the message, check for errors
            if (!$mail->send()) {
                $response['status'] = 'failed';
                $response['message'] = $mail->ErrorInfo;
            } else {
                $response['status'] = 'success';
                $response['message'] = 'berhasil mengirim email';
            }

            echo json_encode($response, JSON_PRETTY_PRINT);
            return redirect()->to('/talk');
        } else {
            return redirect()->to('/talk');
        }
    }
}