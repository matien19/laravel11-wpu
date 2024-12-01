<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    
    <article class="py-8 max-w-screen-md border-b border-gray-300">
        <h2 class="mb-1 tracking-light font-bold text-gray-900">{{ $post['title'] }}</h2>
        <div class="text-base text-gray-500">
            <a href="#">{{ $post['author'] }}</a> | 1 Kanuari 2024
        </div>
        <p class="my-4 font-light">
            {{ $post['body'] }}
        </p>
        <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Backt To Post </a>
    </article>
</x-layout>