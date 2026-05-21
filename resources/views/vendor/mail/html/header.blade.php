@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel' || trim($slot) === 'Meadow Minds')
<img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('assets/images/meadow-minds-logo.png'))) }}" class="logo" alt="Meadow Minds Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
