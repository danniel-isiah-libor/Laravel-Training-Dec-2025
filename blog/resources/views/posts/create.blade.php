<x-layouts.app :title="__('Create Post')">

    <div class="bg-gray-900 py-24 sm:py-32">
        <div class="mx-auto max-w-2xl px-6 lg:px-8 text-white">

            <h1 class="text-4xl font-bold mb-10">Create New Post</h1>

            <form action="{{ route('posts.store') }}" method="POST" class="space-y-6">
                @csrf

                {{-- Title --}}
                <div>
                    <label class="block text-sm font-medium mb-2">Title</label>
                    <input
                        type="text"
                        name="title"
                        class="w-full rounded-md bg-gray-800 border border-gray-700 px-3 py-2 text-white focus:ring-indigo-500 focus:border-indigo-500"
                        placeholder="Enter post title"
                        required
                    >
                </div>

                {{-- Body --}}
                <div>
                    <label class="block text-sm font-medium mb-2">Body</label>
                    <textarea
                        name="body"
                        rows="6"
                        class="w-full rounded-md bg-gray-800 border border-gray-700 px-3 py-2 text-white focus:ring-indigo-500 focus:border-indigo-500"
                        placeholder="Write your post content..."
                        required
                    ></textarea>
                </div>

                {{-- Submit --}}
                <div class="flex justify-end space-x-3">
                    <a href="{{ route('posts.index') }}"
                       class="text-gray-300 hover:text-gray-100 text-sm underline">
                        Cancel
                    </a>

                    <button
                        type="submit"
                        class="px-4 py-2 bg-indigo-600 hover:bg-indigo-500 rounded-md font-medium">
                        Publish Post
                    </button>
                </div>

            </form>

        </div>
    </div>

</x-layouts.app>
