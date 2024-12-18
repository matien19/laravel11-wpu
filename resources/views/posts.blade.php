<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @foreach ($posts as $post)
        
    <article class="py-8 max-w-screen-md border-b border-gray-300 ">
        <a href="/post/{{ $post['slug'] }}" class="hover:underline">
            <h2 class="mb-1 tracking-light font-bold text-gray-900">{{ $post['title'] }}</h2>
        </a>
        <div class="text-base text-gray-500">
            <a href="#" class=" hover:underline">{{ $post['author'] }} </a> | 1 Kanuari 2024
        </div>
        <p class="my-4 font-light">
            {{ Str::limit($post['body'], 150) }}
        </p>
        <a href="/post/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:underline">Read More &raquo;</a>
    </article>

    @endforeach
  

</x-layout>