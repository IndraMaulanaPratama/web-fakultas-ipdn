<?php

namespace App\Http\Livewire\Component\Admin\ArticleManager;

use App\Models\article;
use App\Models\category;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class DataTable extends Component
{
    use WithPagination;

    public $inputStatus = null;
    public $inputCategory = null;
    public $inputSearch = null;
    public $inputSort = null;
    public $login;

    public $sortField = 'ARTICLE_CREATED_AT';
    public $sortOption = 'DESC';
    protected $paginationTheme = 'bootstrap';

    public function mount()
    {
        $this->login = Auth::user();

        // $article = ;
    }

    public function updated()
    {
        // Handle for Input Sort
        if ('asc_title' == $this->inputSort) :
            $this->sortField = 'ARTICLE_TITLE';
            $this->sortOption = 'ASC';

        elseif ('desc_title' == $this->inputSort) :
            $this->sortField = 'ARTICLE_TITLE';
            $this->sortOption = 'DESC';

        elseif ('asc_date' == $this->inputSort) :
            $this->sortField = 'ARTICLE_CREATED_AT';
            $this->sortOption = 'ASC';

        elseif ('desc_date' == $this->inputSort || null == $this->inputSort) :
            $this->sortField = 'ARTICLE_CREATED_AT';
            $this->sortOption = 'DESC';
        endif;
    }

    public function SoftDelete($id)
    {
        $article = article::find($id);

        try {
            $article->ARTICLE_DELETED_AT = Carbon::now('Asia/Jakarta');
            $article->ARTICLE_DELETED_BY = $this->login->id;
            $article->save();

            session()->flash('success', 'Postingan yang anda pilih berhasil dihapuskan');
        } catch (\Throwable $th) {
            session()->flash('error', 'Postingan yang anda pilih gagal dihapuskan');
        }
    }

    public function render()
    {
        return view(
            'livewire.component.admin.article-manager.data-table',
            [
              'paginate' => article::with('user', 'category')
              ->nullDeleted()
              ->where(function ($query) {

                  // Handle Filter by Status
                  if (null != $this->inputStatus) :
                      $query->status($this->inputStatus);
                  endif;

                  // Handle Filter by Kategori
                  if(null != $this->inputCategory) :
                      $query->category($this->inputCategory);
                  endif;
              })
              ->searchTitle($this->inputSearch)
              ->orderBy($this->sortField, $this->sortOption) // TODO:: Belum berfungsi
              ->paginate(
                  15,
                  [
                'ARTICLE_ID AS ID',
                'ARTICLE_TITLE',
                'ARTICLE_CATEGORY',
                'ARTICLE_STATUS',
                'ARTICLE_CREATED_AT AS CREATED_DATE',
                'ARTICLE_CREATED_BY'
              ]
              ),

              'category' => category::nullDeleted()->get(
                  [
                    'CATEGORY_ID',
                    'CATEGORY_NAME'
                  ]
              ),
        ]
        );
    }
}
