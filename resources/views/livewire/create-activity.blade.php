<div>
    <x-modal-wrapper modalTitle="Create new activity" modalSubTitle='' confirmAction="createActivity" >
        @livewire('input', ['inputType' => 'text', 'inputLabel' => 'Title'])
        @livewire('input', ['inputType' => 'textarea', 'inputLabel' => 'Description'])
        @livewire('input', ['inputType' => 'select', 'inputLabel' => 'Type', 'selectOptions' => $types])
    </x-modal-wrapper>
</div>
