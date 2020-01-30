<?php

namespace App\Http\Controllers;

use App\Models\IndexModel;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Psr\SimpleCache\InvalidArgumentException;

/**
 * Class IndexController
 * @package App\Http\Controllers
 */
class IndexController
{
    /** @var IndexModel $indexModel */
    private $indexModel;

    /**
     * IndexController constructor.
     * @param IndexModel $indexModel
     * @param Request $request
     * @throws InvalidArgumentException
     */
    public function __construct(
        IndexModel $indexModel,
        Request $request
    ){
        $this->indexModel = $indexModel;
    }

    /**
     * @return \App\Services\Youtube
     */
    public function indexAction()
    {
        return $this->indexModel->get();
    }

    /**
     * @return Factory|View
     */
    public function postAction(Request $request)
    {
        $response = $this->indexModel->post($request);

        return response()
            ->json($response);
    }
}

