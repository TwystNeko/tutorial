<?php declare(strict_types = 1);

namespace App\Controllers;
use Http\Response;
use Http\Request;
use App\Template\Renderer;

class Signup
{
	private $request;
	private $response;
	private $renderer;

	public function __construct(Response $response, Request $request, Renderer $renderer)
	{
		$this->response = $response;
		$this->request = $request;
		$this->renderer = $renderer;
	}

	public function show()
	{
		$data = [
		'name' => $this->request->getParameter('name', 'stranger'),
		];
		$html = $this->renderer->render('Signup', $data);
		$this->response->setContent($html); 
	}
}