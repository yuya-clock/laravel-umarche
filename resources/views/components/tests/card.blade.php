@props([
    'title',
    'content' => 'キャプテンファルコンの得意技にはセリフがある',
    'message' => 'え？',
])

<div {{ $attributes->merge(['class' => 'border-2 shadow-md w-1/2 p-2']) }}>
    <div>{{ $title }}</div>
    <div>画像</div>
    <div>{{ $content }}</div>
    <div>{{ $message }}</div>
</div>