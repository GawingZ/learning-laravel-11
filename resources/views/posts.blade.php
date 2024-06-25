<x-layout title="{{ $title }}">
<section class="post-wrappers max-w-4xl mx-auto space-y-6 mt-4">
    @foreach ($posts as $post)
    <article class="space-y-2 border-b border-gray-200 py-6">
        <a href="/post/{{ $post['slug'] }}" class="text-2xl font-bold cursor-pointer hover:underline">{{ $post['title'] }}</a>
        <p class="text-base">{{ $post['author']; }} | {{ $post->created_at->diffForHumans(); }}</p>
        <p class="text-base">{{ Str::limit("Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur obcaecati dolor magni illum ullam dolore nisi, tempore quis expedita rem, eaque cupiditate aperiam vel est voluptatum commodi? Provident, velit quam!", 100)}}</p>
        <button class="bg-blue-500 text-white px-4 py-2 rounded-md">Click me &raquo;</button>
    </article>
    @endforeach
</section>
</x-layout>
