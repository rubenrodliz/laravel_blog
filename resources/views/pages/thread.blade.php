@extends('pages/components/template')

@section('title', $thread->title)

@section('content')
    <div class="py-4 px-6 rounded border border-gray-200 leading-loose w-full mb-4">
        {{ $thread->body }}
    </div>

    <section class="py-4 antialiased">
        <div class="mx-auto">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-lg lg:text-2xl font-bold text-gray-900">Comentarios
                    ({{ $thread->comments->count() }})</h2>
            </div>

            <form class="mb-6">
                <div class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200">
                    <label for="comment" class="sr-only">Tu comentario</label>
                    <textarea id="comment" rows="6"
                        class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none"
                        placeholder="Escribe un comentario..." required></textarea>
                </div>
                <button type="submit"
                    class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-gray-700 rounded-lg focus:ring-4 focus:ring-gray-200 hover:bg-gray-800">
                    Publicar comentario
                </button>
            </form>

            <hr class="my-4 opacity-0">

            @foreach ($comments as $comment)
                @include('pages.components.comment')

                @if ($comments[4] != $comment)
                    <hr class="my-4">
                @endif
            @endforeach

            {{ $comments->links() }}
    </section>
    </div>
@endsection

    