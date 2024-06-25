<x-layout title="{{ $title }}">
    <article class="space-y-3 border-b border-gray-200 py-6">
        <a href="/" class="text-2xl font-bold cursor-pointer hover:underline">{{ $post['title']; }}</a>
        <div class="post__content space-y-2">
            <p class="text-base">{{ $post['author']; }} | {{ $post->created_at->diffForHumans(); }}</p>
            <p class="text-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur obcaecati dolor magni illum ullam dolore nisi, tempore quis expedita rem, eaque cupiditate aperiam vel est voluptatum commodi? Provident, velit quam!</p>
    </div>
        <a href="/posts" class="text-blue-500 px-4 py-2 rounded-md inline-block">&laquo; Back to posts</a>
    </article>
</x-layout>

