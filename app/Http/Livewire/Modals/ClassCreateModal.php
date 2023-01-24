<?php

namespace App\Http\Livewire\Modals;

use LivewireUI\Modal\ModalComponent;

class ClassCreateModal extends ModalComponent
{
    public function render()
    {
        return view('livewire.modals.class-create-modal');
    }
}
