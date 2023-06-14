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

    // Definitions og validation form
    protected $rules = [
        'inputTitle' => ['required', 'max:150'],
        'inputThumbnail' => ['image', 'max:2048'],
        'inputContent' => ['required'],
    ];

    public function mount()
    {
        $this->login = Auth::user();
    }

    // Real Time Validation
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function AddNew()
    {
        $this->validate();

        // Inisialisasi Variable
        $filename = $this->inputThumbnail->getClientOriginalName();

        // Inisialisasi Form Data
        $value = [
          'ARTICLE_CATEGORY' => $this->inputCategory,
          'ARTICLE_TITLE' => $this->inputTitle,
          'ARTICLE_CONTENT' => $this->inputContent,
          'ARTICLE_THUMBNAIL' => $filename,
          'ARTICLE_STATUS' => 1,
          'ARTICLE_CREATED_BY' => $this->login->id,
        ];

        // Process Insert Data
        try {
            // Upload File
            $this->inputThumbnail->storeAS(
                'article',
                $filename,
                'dir_image'
            );

            // Insert to database
            article::create($value);

            // Create Success Session Alert
            session()->flash('success', 'Artikel yang anda buat berhasil tersimpan didalam system');
        } catch (\Throwable $th) {
            // session()->flash('error', $th->getMessage());

            // Create Error Session Alert
            session()->flash('error', 'Artikel yang anda buat tidak dapat tersimpan kedalam system, silahkan hubungi system administrator');

        }

        $this->clearForm();
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
