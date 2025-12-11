<x-layouts.app :title="__('Posts')">

    <div class="px-4 py-8 sm:px-6 lg:px-8">

        {{-- Header --}}
        <div class="flex items-center justify-between">
            <h1 class="text-3xl font-bold text-white">Posts</h1>

            <a href="{{ route('posts.create') }}"
               class="px-4 py-2 text-sm font-semibold bg-indigo-600 hover:bg-indigo-500 rounded-lg text-white">
                + New Post
            </a>
        </div>

        {{-- Divider --}}
        <div class="border-t border-gray-700 mt-6 pt-6"></div>

        {{-- Posts List --}}
        <div class="grid gap-6 lg:grid-cols-2">

            @forelse ($posts as $post)
                <article class="bg-gray-800 rounded-xl p-6 shadow-sm hover:shadow-md transition">

                    {{-- Title --}}
                    <header>
                        <h2 class="text-xl font-semibold text-white">
                            <a href="{{ route('posts.show', $post) }}"
                               class="hover:text-indigo-400">
                                {{ $post->title }}
                            </a>
                        </h2>
                    </header>

                    {{-- Body --}}
                    <p class="mt-4 text-gray-300">
                        {{ Str::limit($post->body, 150, '...') }}
                    </p>

                    {{-- Footer --}}
                    <footer class="mt-6 flex items-center justify-between">

                        {{-- Author --}}
                        @php
                            $authorName = $post->user_id
                                ? ($post->user->name ?? 'Unknown User')
                                : 'John Doe';

                            $authorEmail = $post->user_id
                                ? ($post->user->email ?? 'unknown@example.com')
                                : 'johndoe@example.com';
                        @endphp

                        <div class="flex items-center gap-3">
                            <img src="https://i.pravatar.cc/80?u={{ $post->user_id ?? 'johndoe' }}"
                                 class="w-10 h-10 rounded-full bg-gray-700"/>

                            <div class="text-sm">
                                <p class="font-semibold text-white">
                                    {{ $authorName }}
                                </p>
                                <p class="text-gray-400">{{ $authorEmail }}</p>
                            </div>
                        </div>

                        <p class="text-xs text-gray-500">
                            {{ $post->created_at->diffForHumans() }}
                        </p>
                    </footer>

                </article>
            @empty
                <p class="text-gray-400">No posts found.</p>
            @endforelse

        </div>

        {{-- Pagination --}}
        <div class="mt-10">
            {{ $posts->links() }}
        </div>

    </div>


</x-layouts.app>
