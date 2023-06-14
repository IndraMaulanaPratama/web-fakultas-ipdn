<?php

namespace App\Http\Livewire\Component\Admin\ArticleManager;

use App\Models\article;
use App\Models\category;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditArticle extends Component
{
    use WithFileUploads;

    public $inputTitle;
    public $inputContent;
    public $inputCategory;
    public $inputThumbnail;
    public $idArticle;
    public $articleCategory;

    public $article;
    public $category;

    protected $rules = [
      'inputTitle' => ['required', 'max:150'],
      'inputContent' => ['required'],
      'inputThumbnail' => ['image', 'max:2048'],
    ];

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

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function updateArticle()
    {
        // Validation data mandatory
        $this->validate();

        // Inisialisasi Variable
        $filename = $this->inputThumbnail->getClientOriginalName();

        // Initialization update data article
        $this->article->ARTICLE_TITLE = $this->inputTitle;
        $this->article->ARTICLE_CONTENT = $this->inputContent;
        $this->article->ARTICLE_CATEGORY = $this->inputCategory;
        $this->article->ARTICLE_THUMBNAIL = $filename;
        $this->article->ARTICLE_UPDATED_AT = Carbon::now('Asia/Jakarta');
        $this->article->ARTICLE_UPDATED_BY = Auth::user()->id;

        // Logic Handle Update Data
        try {
            // Upload File
            $this->inputThumbnail->storeAS('article', $filename, 'dir_image');

            // Process updated data
            $this->article->save();

            // Throw success message to frontend
            session()->flash('success', 'Data Article Berhasil Diperbaharui');
        } catch (\Throwable $th) {
            // Throw failed message to frontend
            session()->flash('error', 'Data Article Berhasil Gagal Diperbaharui');
        }
    }

    public function clearForm()
    {
        $this->inputTitle = null;
        $this->inputContent = null;
        $this->inputCategory = null;
        $this->inputThumbnail = null;
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
