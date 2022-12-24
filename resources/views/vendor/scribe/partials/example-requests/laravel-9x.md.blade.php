@php
/** @var \Knuckles\Camel\Output\OutputEndpointData $endpoint */
@endphp
```php
use Illuminate\Support\Facades\Http;

@if (!empty($endpoint->cleanBodyParameters))
$body = @php
    $data = json_encode($endpoint->cleanBodyParameters, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

    $data = str_replace('{', '[', $data);
    $data = str_replace('}', ']', $data);
    $data = str_replace(':', ' =>', $data);
    $data = str_replace('\/', '/', $data);

    echo $data;
@endphp;
@endif

@if (!empty($endpoint->headers))
$headers = [
@foreach ($endpoint->headers as $header => $value)
    "{{ $header }}": "{{ $value }}",
@endforeach
];
@else
$headers = [];
@endif

$response = Http::withHeaders($headers)
->{{ strtolower($endpoint->httpMethods[0]) }}(
'{{ $baseUrl }}/{{ $endpoint->boundUri }}'@if (!empty($endpoint->cleanBodyParameters)), $body
@endif);

dd($response->json());

```
