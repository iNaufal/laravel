<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>

  <article class="py-8 max-w-screen-md">
    <div class="text-base text-gray-500">
      <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900 text-justify">{{ $post['title'] }}</h2>
      <a href="/authors/{{ $post->author->id }}">{{ $post->author->name }}</a> | {{ $post->created_at->diffForHumans() }}
    </div>
    <p class="my-4 font-light text-justify">{{ $post['body'] }}</p>
    <a href="/posts" class="font-medium text-blue-500">&laquo; Back to Posts</a>
  </article>

</x-layout>