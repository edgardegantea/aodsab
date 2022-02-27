<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\NewsModel;

class NewsController extends BaseController
{
    public function index()
    {
        $model = model(NewsModel::class);

        $data = [
            'title' => 'Noticias',
            'news'  => $model->getNews()
        ];

        echo view('news/index', $data);
    }

    public function cards()
    {
        $model = model(NewsModel::class);

        $data = [
            'title' => 'Noticias en versión CARD',
            'news'  => $model->getNews()
        ];

        return view('news/cards', $data);
    }
}