<article class="py-2.5 px-4 text-base bg-white rounded-lg">
    <div class="flex justify-between items-center mb-2">
        <div class="flex items-center">
            <p class="inline-flex items-center mr-3 text-sm text-gray-900 font-semibold">
                <img class="mr-2 w-6 h-6 rounded-full" src="{{ $comment->user->image }}"
                    alt="{{ $comment->user->name }}">{{ $comment->user->name }}
            </p>
            <p class="text-sm text-gray-600"><time pubdate datetime="2022-02-08"
                    title="{{ $comment->updated_at_formatted }}">{{ $comment->updated_at_formatted }}</time></p>
        </div>

        {{-- Si el usuario logueado es propietario del comentario --}}
        @can('hasPermissions', $comment)
            <div x-data="{ open: false }" class="relative">
                <button @click="open = !open" @keydown.escape="open = false"
                    class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50"
                    type="button">
                    <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                    </svg>
                    <span class="sr-only">Comment settings</span>
                </button>
                <!-- Dropdown menu -->
                <div x-show="open" @click.away="open = false" x-transition:enter="transition ease-out duration-100"
                    x-transition:enter-start="transform opacity-0 scale-95"
                    x-transition:enter-end="transform opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75"
                    x-transition:leave-start="transform opacity-100 scale-100"
                    x-transition:leave-end="transform opacity-0 scale-95"
                    class="absolute z-10 bg-white rounded divide-y divide-gray-100 shadow  right-0 mt-1" style="display: none;">
                    <ul class="py-1 text-sm text-gray-700" aria-labelledby="dropdownMenuIconHorizontalButton">
                        <li>
                            <form action="{{ route('comment.destroy', ['thread' => $thread->id, 'comment' => $comment->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="block py-2 px-4 hover:bg-gray-100">Eliminar</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        @endcan

    </div>
    <p class="text-gray-500 normal-case">{{ $comment->body }}</p>
</article>
