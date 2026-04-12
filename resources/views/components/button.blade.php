@props(["typeButton" => "ocre"])

<a {{ $attributes->merge(["class" => "btn-$typeButton"]) }}>{{ $slot }}</a>