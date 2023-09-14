<?php

namespace RalphJSmit\Tall\Interactive\Livewire\Concerns;

trait HasSlot
{
    public string $slot = '';

    public function submitSlot(): void
    {
        $this->handleCloseOnSubmit();
    }
}
