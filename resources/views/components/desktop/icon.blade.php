<a href="{{ $url }}" class="icon" title="{{ $title ?? $label }}">
    <img src="{{ asset("storage/icons/{$icon}.svg") }}" alt="{{ $label }}_icon" title="{{ $title ?? $label }}">
    <h3 class="label">{{ $label }}</h3>
</a>
