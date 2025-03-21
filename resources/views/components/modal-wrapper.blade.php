<div>
    <livewire:modal :title="$title" :subTitle="$subTitle" :content="$slot->toHtml()" :backButtonText="$backButtonText" :nextButtonText="$nextButtonText"
        :closeButtonText="$closeButtonText" :confirmButtonText="$confirmButtonText" :showBackButton="$showBackButton" :showNextButton="$showNextButton" :showCloseButton="$showCloseButton" :showConfirmButton="$showConfirmButton"
        :showFooter="$showFooter" :showHeader="$showHeader" :maxWidth="$maxWidth" :confirmAction="$confirmAction" />
</div>
