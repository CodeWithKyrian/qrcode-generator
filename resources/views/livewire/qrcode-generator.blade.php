<div class="p-6">
    <form wire:submit="create">
        <div class="mb-4">
            {{ $this->form }}
        </div>
        {{ $this->submitAction }}
    </form>

    <x-filament-actions::modals/>
</div>
