<?php

namespace App\Http\Livewire\Component\Admin\ArticleManager;

use App\Models\article;
use App\Models\category;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class PostArticle extends Component
{
    use WithFileUploads;

    public $inputTitle;
    public $inputContent;
    public $inputCategory;
    public $inputThumbnail;

    public $login;

    public function mount()
    {
        $this->login = Auth::user();
    }

    public function AddNew()
    {
        // Inisialisasi Form Data
        $value = [
          'ARTICLE_CATEGORY' => $this->inputCategory,
          'ARTICLE_TITLE' => $this->inputTitle,
          'ARTICLE_CONTENT' => $this->inputContent,
          'ARTICLE_STATUS' => 1,
          'ARTICLE_CREATED_BY' => $this->login->id,
        ];

        // dd($value);

        // Process Insert Data
        try {
            article::create($value);

            // Clear Form Input Data
            $this->clearForm();

            // Create Success Session Alert
            session()->flash('success', 'Artikel yang anda buat berhasil tersimpan didalam system');
        } catch (\Throwable $th) {
            // Create Error Session Alert
            // session()->flash('error', 'Artikel yang anda buat tidak dapat tersimpan kedalam system, silahkan hubungi system administrator');

            session()->flash('error', $th->getMessage());
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
        return view('livewire.component.admin.article-manager.post-article', [
          'category' => category::nullDeleted()->get(['CATEGORY_ID', 'CATEGORY_NAME']),
        ]);
    }
}
