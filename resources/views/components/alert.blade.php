
@props([
    'type' => 'success',
    'message' => ''
])

<div class="alert alert-{{ $type }}">
    <strong>
        @if ($type == 'success')
            Berhasil!
        @elseif ($type == 'danger')
            Terjadi Kesalahan!
        @else
            Informasi
        @endif
    </strong>

    <p>{{ $message }}</p>
</div>
