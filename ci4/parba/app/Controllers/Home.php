<?php

namespace App\Controllers;

class Home extends BaseController
{

	public function index()
	{
		if (isset($_POST['submit'])) {

			$email = \Config\Services::email();

			$name = $this->request->getPost('name');
			$client_email = $this->request->getPost('email');
			$phone = $this->request->getPost('phone');
			$kelas = $this->request->getPost('kelas');
			$msg = $this->request->getPost('message');

			$from = 'mydummygiant.2012@gmail.com';
			$email->setFrom($from, 'Brutallity Trading');
			$email->setTo('kadekprimagiantmartadinata@gmail.com');

			$msg = "
			<!DOCTYPE html>
			<html lang=\"en\">
			
			<head>
				<meta charset=\"UTF-8\">
				<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
				<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
				<title>Brutallity Trading</title>
				<style>
					* {
						padding: 0;
						margin: 0;
						font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
					}
			
					.judul {
						display: flex;
						justify-content: center;
						align-items: center;
						width: 100vw;
						color: white;
						background-image: linear-gradient(to right, rgb(80, 53, 177), rgb(68, 104, 201));
					}
			
					h1 {
						font-size: 3rem;
						text-transform: uppercase;
						font-weight: 900;
						font-style: italic;
						padding: 30px;
					}
			
					.content {
						margin: 2rem 3rem;
					}
			
					p {
						font-size: 1.5rem;
					}
			
					span {
						color: rgb(122, 153, 255);
					}
				</style>
			</head>
			
			<body>
				<div class=\"judul\">
					<h1>Brutallity Trading</h1>
				</div>
				<div class=\"content\">
					<p>Nama    : <span>$$name</span></p>
					<p>Email   : <span>$client_email</span></p>
					<p>No Telp : <span>$phone</span></p>
					<p>Kelas   : <span>$kelas</span></p>
					<p>Massage : <span>$msg</span></p>
				</div>
			</body>
			
			</html>
			";

			$email->setSubject('Someone Make An Order');
			$email->setMessage("$msg");

			$email->send();
		}

		return view('index');
	}
}
