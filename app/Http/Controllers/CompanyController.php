<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Repositories\Company\CompanyInterface;
use Faker;

class CompanyController extends Controller
{
    private $client;

    private $company_repo;

    private $faker;

    public function __construct(CompanyInterface $company_repo)
    {
        $this->client = new Client();
        $this->company_repo = $company_repo;
        $this->faker = Faker\Factory::create();
    }

    public function index()
    {

        // $response = $this->client->request('GET', 'https://api.github.com/repos/guzzle/guzzle');

        // echo $response->getHeaderLine('content-type'); // 'application/json; charset=utf8'
        // dump(json_decode($response->getBody()));
        $companies = $this->company_repo->paginate(3);
        // dd($companies);
        return view('index', ['companies' => $companies]);
    }

    public function create()
    {
        $this->company_repo->create([
            'name' => $this->faker->name()
        ]);
        return redirect()->route('home', ['binh' => 2]);
    }
}
