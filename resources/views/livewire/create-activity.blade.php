<div>
    <x-modal-wrapper title="Create new activity" subTitle='' confirmAction="create" >
        @livewire('input', ['type' => 'text', 'label' => 'Title', 'options'=> ['wire:model' => 'title']])
        @livewire('input', ['type' => 'textarea', 'label' => 'Description', 'options'=> ['wire:model' => 'description']])
        @livewire('input', ['type' => 'select', 'label' => 'Type', 'selectOptions' => $types, 'options'=> ['wire:model' => 'type']])
    </x-modal-wrapper>
</div>
