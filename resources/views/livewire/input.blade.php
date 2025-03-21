<div x-data="{ value: '', focus: false }" class="my-2">
    <div class="relative h-full w-full">
        <span :class="(focus || value.length > 0) ? '-top-[8px] text-xs' : 'top-[5px] text-sm'"
            class="absolute font-bold text-sm left-3 z-10 px-1 bg-white text-slate-500 font-monospace">{{ $label }}</span>
        @if (in_array($type, ['text', 'number', 'email', 'password']))
            <input type="{{ $type }}" name="{{ $name }}"
                class="h-8 rounded-md border-2 border-slate-400 relative top-0 left-0 w-full px-3 text-slate-500 font-semibold text-sm focus:border-slate-500 focus:outline-none"
                x-model="value" x-on:focus="focus = true" x-on:blur="focus = false"
                @foreach ($options as $attribute => $value)
                    {{ $attribute }}="{{ $value }}" @endforeach>
        @elseif($type == 'textarea')
            <textarea name="{{ $name }}" x-model="value" x-on:focus="focus = true" x-on:blur="focus = false"
                class="min-h-8 rounded-md border-2 border-slate-400 relative top-0 left-0 w-full h-full px-3 py-1 text-slate-500 font-semibold text-sm focus:border-slate-500 focus:outline-none"
                @foreach ($options as $attribute => $value)
                    {{ $attribute }}="{{ $value }}" @endforeach></textarea>
        @elseif($type == 'select')
            <select name="{{ $name }}" id="" x-model="value" x-on:focus="focus = true" x-on:blur="focus = false"
                class="h-8 rounded-md border-2 border-slate-400 relative top-0 left-0 w-full px-3 text-slate-500 font-semibold text-sm focus:border-slate-500 focus:outline-none bg-white"
                @foreach ($options as $attribute => $value)
                    {{ $attribute }}="{{ $value }}" @endforeach>
                <option value="" selected></option>
                @foreach ($selectOptions as $value => $label)
                    <option value="{{ $value }}">{{ $label }}</option>
                @endforeach
            </select>
        @endif
    </div>
</div>
