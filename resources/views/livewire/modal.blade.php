<div>
    @if ($isOpen)
        <div class="fixed inset-0 bg-black bg-opacity-70 flex justify-center items-center z-50">
            <div class="bg-gray-200 rounded-3xl min-w-80 overflow-hidden relative p-2">
                <div class="rounded-xl bg-white shadow-[inset_0_0_3px_1px_gray]">
                    @if ($showHeader)
                        <div class="flex justify-between items-start py-2 pl-3 pr-8 relative border-b border-gray-100 mx-1">
                            <div class="">
                                <span
                                    class="text-lg md:text-xl lg:text-2xl font-semibold text-slate-700 block">{{ $modalTitle }}</span>
                                @if ($modalSubTitle)
                                    <span
                                        class="text-gray-600 text-sm md:text-base relative -top-1">{{ $modalSubTitle }}</span>
                                @endif
                            </div>
                            <div wire:click="closeModal" class="text-xl text-gray-500 cursor-pointer absolute top-2 right-3">X</div>
                        </div>
                    @endif
                    <div class="min-h-32 py-4 px-3">
                        {!! $content !!}
                    </div>

                    @if ($showFooter)
                        <div class="flex justify-end gap-3 p-2 px-3 border-t border-gray-100 mx-1">
                            @if ($showCloseButton)
                                <div wire:click="closeModal"
                                    class="px-3 py-[2px] font-monospace text-sm md:text-base font-semibold hover:bg-red-400 bg-red-500 cursor-pointer text-slate-100 rounded-md">
                                    <span>{{ $closeButtonText }}</span>
                                </div>
                            @endif
                            @if ($showBackButton)
                                <div
                                    class="px-3 py-[2px] font-monospace text-sm md:text-base font-semibold hover:bg-blue-400 bg-blue-500 cursor-pointer text-slate-100 rounded-md">
                                    <span>{{ $backButtonText }}</span>
                                </div>
                            @endif

                            @if ($showNextButton)
                                <div
                                    class="px-3 py-[2px] font-monospace text-sm md:text-base font-semibold hover:bg-green-400 bg-green-500 cursor-pointer text-slate-100 rounded-md">
                                    <span>{{ $nextButtonText }}</span>
                                </div>
                            @endif
                            @if ($showConfirmButton)
                                <div wire:click="handleConfirmAction"
                                    class="px-3 py-[2px] font-monospace text-sm md:text-base font-semibold hover:bg-blue-400 bg-blue-500 cursor-pointer text-slate-100 rounded-md">
                                    <span>{{ $confirmButtonText }}</span>
                                </div>
                            @endif
                        </div>
                    @endif
                </div>

            </div>
        </div>
    @endif
</div>
