<?php

namespace App\Http\Livewire\Component\Admin\ArticleManager;

use App\Models\article;
use App\Models\category;
use Livewire\Component;
use Livewire\WithPagination;

class DataTable extends Component
{
    use WithPagination;

    public $inputSort = null;
    public $inputStatus = null;
    public $inputCategory = null;
    public $inputSearch = null;

    protected $paginationTheme = 'bootstrap';
    protected $sortField = 'ARTICLE_CREATED_AT';
    protected $sortOption = 'DESC';
    protected $selectCategory;

    public function mount()
    {
    }

    public function update()
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

    public function render()
    {
        return view(
            'livewire.component.admin.article-manager.data-table',
            [
              'paginate' => article::with('category')
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
              // ->status($this->inputStatus)
              // ->category($this->inputCategory)
              ->searchTitle($this->inputSearch)
              ->orderBy($this->sortField, $this->sortOption)
              ->paginate(
                  15,
                  [
                'ARTICLE_ID AS ID',
                'ARTICLE_TITLE',
                'ARTICLE_CATEGORY',
                'ARTICLE_STATUS',
                'ARTICLE_CREATED_AT AS CREATED_DATE',
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
