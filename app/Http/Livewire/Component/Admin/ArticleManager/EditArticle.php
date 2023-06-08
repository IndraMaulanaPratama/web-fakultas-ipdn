<?php

namespace App\Http\Livewire\Component\Admin\ArticleManager;

use App\Models\article;
use App\Models\category;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class EditArticle extends Component
{
    public $inputTitle;
    public $inputContent;
    public $inputCategory;
    public $idArticle;
    public $articleCategory;

    public $article;
    public $category;

    public function mount($id)
    {
        // Preference form edit data by request id
        $this->article = article::find($id);
        $this->inputTitle = $this->article->ARTICLE_TITLE;
        $this->inputContent = $this->article->ARTICLE_CONTENT;
        $this->inputCategory = $this->article->ARTICLE_CATEGORY;

        // Collecti data Category for select form on sidebar
        $this->category = category::nullDeleted()->get(['CATEGORY_ID', 'CATEGORY_NAME']);
    }

    public function updated()
    {
    }

    public function updateArticle()
    {
        // Validation data mandatory
        $this->validate([
          'inputTitle' => ['required'],
          'inputContent' => ['required'],
          'inputCategory' => ['required'],
        ]);

        // Initialization update data article
        $this->article->ARTICLE_TITLE = $this->inputTitle;
        $this->article->ARTICLE_CONTENT = $this->inputContent;
        $this->article->ARTICLE_CATEGORY = $this->inputCategory;
        $this->article->ARTICLE_UPDATED_AT = Carbon::now('Asia/Jakarta');
        $this->article->ARTICLE_UPDATED_BY = Auth::user()->id;

        // Logic Handle Update Data
        try {
            $this->article->save();

            session()->flash('success', 'Data Article Berhasil Diperbaharui');
        } catch (\Throwable $th) {
            session()->flash('error', 'Data Article Berhasil Gagal Diperbaharui');
        }
    }

    public function render()
    {
        $params = [
          'title' => 'Formulir Postingan - IPDN Kampus Daerah',
          'page_name' => 'Formulir Perubahan Postingan',
        ];

        return view(
            'livewire.component.admin.article-manager.edit-article',
            [
              'data' => $this->article,
              'category' => $this->category,
            ]
        )
        ->extends('layouts.admin', $params)
        ->section('content');
    }
}
