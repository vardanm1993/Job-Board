<div>
    @if($allOption)
        <label for="{{ $name }}" class="mb-1 flex items-center">
            <input type="radio" name="{{ $name }}" value="" checked
                @checked(!request($name))/>
            <span class="ml-2">All</span>
        </label>
    @endif

    @foreach($optionsWithLabels as $label => $option)
        <label for="{{ $name }}" class="mb-1 flex items-center">
            <input type="radio" name="{{ $name }}" value="{{ $option }}"
                @checked($option === ($value ?? request($name))) />
            <span class="ml-2">{{ $label }}</span>
        </label>
    @endforeach
</div>
