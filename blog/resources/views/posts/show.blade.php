<x-layouts.app :title="$post->title">

    <section class="relative isolate overflow-hidden bg-gray-900 px-6 py-24 sm:py-32 lg:px-8">
        <div class="absolute inset-0 -z-10 bg-[radial-gradient(45rem_50rem_at_top,var(--color-indigo-500),transparent)] opacity-10"></div>
        <div class="absolute inset-y-0 right-1/2 -z-10 mr-16 w-[200%] origin-bottom-left skew-x-[-30deg] bg-gray-900 shadow-xl ring-1 shadow-indigo-500/5 ring-white/5 sm:mr-28 lg:mr-0 xl:mr-16 xl:origin-center"></div>

        <div class="mx-auto max-w-3xl text-center">
            {{-- Optional Logo --}}
            <img src="https://tailwindcss.com/plus-assets/img/logos/workcation-logo-indigo-400.svg"
                 alt="Logo"
                 class="mx-auto h-12" />

            {{-- Post Title --}}
            <h1 class="mt-10 text-4xl font-bold text-white sm:text-5xl">
                {{ $post->title }}
            </h1>

            <figure class="mt-10">
                {{-- Post Body --}}
                <blockquote class="text-center text-lg sm:text-xl font-semibold text-gray-300 leading-relaxed">
                    <p>{{ $post->body }}</p>
                </blockquote>

                {{-- Author Info --}}
                @php
                    $authorName = $post->user_id
                        ? ($post->user->name ?? 'Unknown User')
                        : 'John Doe';

                    $authorRole = $post->user_id
                        ? ($post->user->email ?? 'unknown@example.com')
                        : 'Guest Author';

                    $avatarId = $post->user_id ?? 'johndoe';
                @endphp

                <figcaption class="mt-10">
                    <img
                        src="https://i.pravatar.cc/150?u={{ $avatarId }}"
                        alt="{{ $authorName }}"
                        class="mx-auto size-10 rounded-full"
                    />

                    <div class="mt-4 flex items-center justify-center space-x-3 text-base">
                        <div class="font-semibold text-white">{{ $authorName }}</div>
                        <svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true" class="fill-white">
                            <circle r="1" cx="1" cy="1" />
                        </svg>
                        <div class="text-gray-400">{{ $authorRole }}</div>
                    </div>
                </figcaption>
            </figure>

            {{-- Back Button --}}
            <div class="mt-12">
                <a href="{{ route('posts.index') }}"
                   class="text-indigo-400 hover:text-indigo-300 underline text-sm">
                    ← Back to Posts
                </a>
            </div>
        </div>
    </section>

</x-layouts.app>
