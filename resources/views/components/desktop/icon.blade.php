<a href="{{ $url }}" class="icon" title="{{ $title ?? $label }}">
    <img src="{{ asset("storage/icons/{$icon}.svg") }}" alt="{{ $label }}_icon" title="{{ $title ?? $label }}">
    <span class="label">{{ $label }}</span>
</a>
