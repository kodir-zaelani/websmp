<?php

namespace App\Livewire\Backend\Blog;

use App\Models\Blog;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class Draft extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $currentPage   = 1;
    public $paginate      = 10;
    public $search        = '';
    public $checked       = [];
    public $selectPage    = false;
    public $selectAll     = false;
    public $sortDirection = 'asc';
    public $sortColumn    = 'created_at';
    public $statusUpdate  = false;
    public $headersTable;
    public $action;
    public $selectedItem;
    public $uploadPath = 'uploads/images/blogs';

    public $author_id;
    public $title;
    public $slug;

    protected $queryString = [
        // Keeping A Clean Query String https://laravel-livewire.com/docs/2.x/query-string#clean-query-string
        'search'      => ['except' => ''],
        'currentPage' => ['except' => 1]
    ];

    private function headerConfig()
    {
        return [
            'image'           => 'Image',
            'title'           => 'Title',
            // 'blogcategory_id' => 'Category',
        ];
    }

    public function sortBy($column)
    {
        $this->sortColumn = $column;

        $this->sortDirection = $this->reverseSort();

    }

    public function reverseSort()
    {
        return $this->sortDirection === 'asc'
        ? 'desc'
        : 'asc';
    }

    public function mount()
    {
        $this->fill(request()->only('search', 'currentPage'));
        $this->resetSearch();
        $this->headersTable = $this->headerConfig();

    }

    public function resetSearch()
    {
        $this->search = '';
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function getBlogallQueryProperty()
    {
        $this->author_id = Auth::id();

        return Blog::with('author')
        ->where('status', 0)
        ->orderBy($this->sortColumn, $this->sortDirection)
        ->search(trim($this->search)); //search menggunakan scopeSearch di model
    }

    public function getBlogallProperty()
    {
        return $this->blogallQuery->paginate($this->paginate);
    }

    public function updatedSelectBlog($value)
    {
        if ($value) {
            $this->checked = $this->blogall->pluck('id')->map(fn ($item) => (string) $item)->toArray();
        } else {
            $this->checked = [];
        }
    }

    public function updatedChecked()
    {
        $this->selectPage = false;
    }

    public function selectAll()
    {
        $this->selectAll = true;
        $this->checked = $this->blogallQuery->pluck('id')->map(fn ($item) => (string) $item)->toArray();
    }

    public function isChecked($id)
    {
        return in_array($id, $this->checked);
    }

    public function selectItem($itemId, $action)
    {
        $this->statusUpdate = false;

        $this->selectedItem = $itemId;

        if ($action == 'deletedraft') {
            // This will show the modal in the frontend
            $this->dispatch('openDeleteModaldraft');
        } elseif($action == 'draft'){
            $this->changeDraft();
        } elseif($action == 'publish') {
            $this->changePublish();
        } elseif($action == 'inactiveh'){
            $this->changeHinactive();
        } elseif($action == 'activeh') {
            $this->changeHactive();
        } elseif($action == 'primary'){
            $this->changePrimary();
        } elseif($action == 'selection') {
            $this->changeSelection();
        }
    }
    public function changeHinactive()
    {
        $data = [];
        $data = array_merge($data, ['headline' => 0]);
        $blog = Blog::find($this->selectedItem);

        $blog->update($data);
        session()->flash('success', 'Blog Change to Headline non active was successfully');
        return redirect()->to('backend/blog');
    }
    public function changeHactive()
    {
        $data = [];
        $data = array_merge($data, ['headline' => 1]);
        $blog = Blog::find($this->selectedItem);

        $blog->update($data);
        session()->flash('success', 'Blog Change to Headline active was successfully');
        return redirect()->to('backend/blog');
    }
    public function changePrimary()
    {
        $data = [];
        $data = array_merge($data, ['selection' => 0]);
        $blog = Blog::find($this->selectedItem);

        $blog->update($data);
        session()->flash('success', 'Blog Change to Primary  was successfully');
        return redirect()->to('backend/blog');
    }
    public function changeSelection()
    {
        $data = [];
        $data = array_merge($data, ['selection' => 1]);
        $blog = Blog::find($this->selectedItem);

        $blog->update($data);
        session()->flash('success', 'Blog Change to Selection active was successfully');
        return redirect()->to('backend/blog');
    }
    public function changeDraft()
    {
        $data = [];
        $data = array_merge($data, ['status' => 0]);
        $blog = Blog::find($this->selectedItem);

        $blog->update($data);
        session()->flash('success', 'Blog Change to Draft was successfully');
        return redirect()->to('backend/blog');
    }
    public function changePublish()
    {
        $data = [];
        $data = array_merge($data, ['status' => 1]);
        $blog = Blog::find($this->selectedItem);

        $blog->update($data);
        session()->flash('success', 'Blog Change to Publish was successfully');
        return redirect()->to('backend/blog');
    }
    // Delete Single Record
    public function delete()
    {
        $blog = Blog::find($this->selectedItem);

        Blog::destroy($this->selectedItem);

        // Sweet alert
        $this->dispatch('swal:modal', [
            'title' => 'Success!',
            'timer' => 4000,
            'icon'  => 'success',
            'text'  => 'Blog was send to trash',
            // 'toast'=>true, // Jika mau menggunakan toas
            // 'position'=>'top-right', // Jika mau menggunakan toas
            'showConfirmButton' => true,
            'showCancelButton'  => false,
        ]);

        $this->dispatch('refreshParent');
        // This will hide the modal in the frontend
        $this->dispatch('closeDeleteModaldraft');
        return redirect()->to('backend/blog')->with('danger', 'Blog send to trash was successfully');
    }


    public function render()
    {
        return view('livewire.backend.blog.draft',[
            'datablogall' => $this->blogall,
        ]);
    }

}