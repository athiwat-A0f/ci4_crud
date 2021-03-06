<?php

namespace App\Controllers;

use App\Models\NewsModel;
use CodeIgniter\Controller;

class News extends Controller
{
    public function index()
    {
        $model = new NewsModel();

        $data = [
            'news' => $model->getNews(),
            'title' => 'News archive',
        ];

        echo view('templates/header', $data);
        echo view('news/overview', $data);
        echo view('templates/footer', $data);
    }

    public function view($slug = null)
    {
        $model = new NewsModel();

        $data['news'] = $model->getNews($slug);

        if (empty($data['news'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the news item: ' . $slug);
        }

        $data['title'] = $data['news']['title'];

        echo view('templates/header', $data);
        echo view('news/view', $data);
        echo view('templates/footer', $data);
    }

    public function create()
    {
        $model = new NewsModel();

        if ($this->request->getMethod() === 'post' && $this->validate([
            'title' => 'required|min_length[3]|max_length[255]',
            'body' => 'required',
        ])) {

            $file = $this->request->getFile('thumbnail');
            $newName = "image-not-found.png";
            if ($file->isValid())
            {
                $newName = $file->getRandomName();
                $file->move('images/uploads', $newName);
            }
         
            $model->insert([
                'title' => $this->request->getPost('title'),
                'slug' => url_title($this->request->getPost('title'), '-', true),
                'body' => $this->request->getPost('body'),
                'thumbnail' => $newName,
            ]);

            return redirect()->to('/news');

        } else {
            echo view('templates/header', ['title' => 'Create a news item']);
            echo view('news/create');
            echo view('templates/footer');
        }
    }

    public function edit($slug = null)
    {
        $model = new NewsModel();

        $data['news'] = $model->getNews($slug);

        if ($this->request->getMethod() === 'post' && $this->validate([
            'title' => 'required|min_length[3]|max_length[255]',
            'body' => 'required',
        ])) {

            $file = $this->request->getFile('thumbnail');
            if ($file->isValid())
            {
                if($this->request->getPost('thumbnail_old') != "image-not-found.png") {
                    unlink('images/uploads/'.$this->request->getPost('thumbnail_old')); 
                }
                $newName = $file->getRandomName();
                $file->move('images/uploads', $newName);

                $model
                ->where('id',$this->request->getPost('id'))
                ->set([
                    'thumbnail' => $newName,
                ])->update();
            }

            $model
            ->where('id',$this->request->getPost('id'))
            ->set([
                'title' => $this->request->getPost('title'),
                'slug' => url_title($this->request->getPost('title'), '-', true),
                'body' => $this->request->getPost('body'),
            ])->update();
         
            return redirect()->to('/news');

        } else {
            if (empty($data['news'])) {
                throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the news item: ' . $slug);
            }

            echo view('templates/header', ['title' => 'Edit a news item']);
            echo view('news/edit',$data);
            echo view('templates/footer');
        }
    }
}
