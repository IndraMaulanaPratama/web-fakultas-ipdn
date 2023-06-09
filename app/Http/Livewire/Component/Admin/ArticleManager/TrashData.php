<?php

namespace App\Http\Livewire\Component\Admin\ArticleManager;

use App\Models\article;
use App\Models\category;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class TrashData extends Component
{
    use WithPagination;
    public $login;
    public $inputStatus = null;
    public $inputCategory = null;
    public $inputSearch = null;
    public $inputSort = null;

    // TODO::Selesaikan variable untuk table bagian category
    public $inputSortCategory = null;
    public $inputSearchCategory = null;


    protected $paginationTheme = 'bootstrap';
    public $sortField = 'CREATED_DATE';
    public $sortOption = 'DESC';
    public $sortFieldCategory = 'CATEGORY_CREATED_AT';
    public $sortOptionCategory = 'DESC';

    public function mount()
    {
        $this->login = Auth::user();
    }

    public function updated()
    {
        // Handle for Input Sort Article
        if ('asc_title' == $this->inputSort) :
            $this->sortField = 'ARTICLE_TITLE';
            $this->sortOption = 'ASC';

        elseif ('desc_title' == $this->inputSort) :
            $this->sortField = 'ARTICLE_TITLE';
            $this->sortOption = 'DESC';

        elseif ('asc_date' == $this->inputSort) :
            $this->sortField = 'CREATED_DATE';
            $this->sortOption = 'ASC';

        elseif ('desc_date' == $this->inputSort || null == $this->inputSort) :
            $this->sortField = 'CREATED_DATE';
            $this->sortOption = 'DESC';
        endif;

        // Handle for Input Sort Category
        if ('asc_name' == $this->inputSortCategory) :
            $this->sortFieldCategory = 'CATEGORY_NAME';
            $this->sortOptionCategory = 'ASC';

        elseif('desc_name' == $this->inputSortCategory):
            $this->sortFieldCategory = 'CATEGORY_NAME';
            $this->sortOptionCategory = 'DESC';

        elseif('asc_date' == $this->inputSortCategory):
            $this->sortFieldCategory = 'CATEGORY_CREATED_AT';
            $this->sortOptionCategory = 'ASC';

        elseif('desc_date' == $this->inputSortCategory || null == $this->inputSortCategory):
            $this->sortFieldCategory = 'CATEGORY_CREATED_AT';
            $this->sortOptionCategory = 'DESC';
        endif;
    }

    public function render()
    {
        $params = [
          'title' => 'Daftar Sampah Data Artikel dan Kategori| IPDN Kampus Daerah',
          'page_name' => 'Daftar Data Sampah Artikel dan Kategori'
        ];

        return view(
            'livewire.component.admin.article-manager.trash-data',
            [
              'paginate_article' => article::with('user', 'category')
              ->deleted()
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
              ->orderBy($this->sortField, $this->sortOption)
              ->paginate(
                  8,
                  [
                'ARTICLE_ID AS ID',
                'ARTICLE_TITLE',
                'ARTICLE_CATEGORY',
                'ARTICLE_STATUS',
                'ARTICLE_CREATED_AT AS CREATED_DATE',
                'ARTICLE_CREATED_BY'
                ]
              ),

              'paginate_category' => category::with('user')
              ->NullDeleted()
              ->where('CATEGORY_NAME', 'LIKE', '%'. $this->inputSearchCategory .'%')
              ->orderBy($this->sortFieldCategory, $this->sortOptionCategory)
              ->paginate(
                  15,
                  [
                'CATEGORY_ID AS ID',
                'CATEGORY_NAME AS NAME',
                'CATEGORY_CREATED_AT AS CREATED_DATE',
                'CATEGORY_CREATED_BY'
                ]
              ),

              'category' => category::nullDeleted()->get(
                  [
                    'CATEGORY_ID',
                    'CATEGORY_NAME'
                  ]
              ),
            ]
        )->extends('layouts.admin', $params)
        ->section('content');
    }
}
