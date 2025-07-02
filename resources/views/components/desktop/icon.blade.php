<a class="icon" href="{{ $href }}"
    onclick="window.open(this.href, '_blank', 'width=800,height=600,toolbar=no,menubar=no,scrollbars=yes'); return false;">

    <img src="{{ asset($asset) }}" alt="{{ $label }}-icon">
    <span class="label">{{ $label }}</span>

</a>
