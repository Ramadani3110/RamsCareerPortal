<?php

namespace App\Livewire\Admin;

use App\Models\Skils;
use Livewire\Component;
use Livewire\WithPagination;

class JobSkils extends Component
{
    use WithPagination;

    public $name;
    public $skilId;
    public $isOpen = false;
    public $isDelete = false;
    public $search = '';
    public $mode = 'create';

    protected $queryString = ['search'];

    protected function rules()
    {
        return [
            'name' => 'required|min:3|unique:skils,name' . ($this->mode === 'edit' ? ',' . $this->skilId : ''),
        ];
    }

    protected $messages = [
        'name.required' => 'The skill name is required.',
        'name.min' => 'The skill name must be at least 3 characters.',
        'name.unique' => 'This skill name already exists.',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        $skils = Skils::where('name', 'like', '%' . $this->search . '%')
            ->select('id','name')
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        return view(
            'livewire.admin.job-skils',['skils' => $skils]
        );
    }

    public function create()
    {
        $this->resetInputFields();
        $this->mode = 'create';
        $this->openModal();
    }

    public function edit($id)
    {
        $skil = Skils::findOrFail($id);
        $this->skilId = $id;
        $this->name = $skil->name;
        $this->mode = 'edit';
        $this->openModal();
    }

    public function confirmDelete($id)
    {
        $this->isDelete = true;
        $this->skilId = $id;
    }

    public function delete()
    {
        Skils::find($this->skilId)->delete();
        $this->isDelete = false;
        $this->resetPage();
        session()->flash('message', 'Skill deleted successfully!');
    }

    public function cancelDelete()
    {
        $this->isDelete = false;
    }

    public function store()
    {
        $this->validate();

        try {
            Skils::create([
                'name' => $this->name,
            ]);
            session()->flash('message', 'Skill created successfully!');
            $this->resetInputFields();
            $this->closeModal();
        } catch (\Exception $e) {
            session()->flash('error', 'Something went wrong!');
        }
    }

    public function update()
    {
        $this->validate();

        try {
            $skil = Skils::find($this->skilId);
            $skil->update([
                'name' => $this->name,
            ]);
            session()->flash('message', 'Skill updated successfully!');
            $this->resetInputFields();
            $this->closeModal();
        } catch (\Exception $e) {
            session()->flash('error', 'Something went wrong!');
        }
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    private function resetInputFields()
    {
        $this->name = '';
        $this->skilId = null;
        $this->resetErrorBag();
        $this->resetValidation();
    }
}
