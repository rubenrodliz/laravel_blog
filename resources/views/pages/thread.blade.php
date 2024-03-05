@extends('layouts.template')

@section('title', $thread->title)

@section('content')
    <div class="py-4 px-6 rounded border border-gray-200 leading-loose w-full mb-4">
        {{ $thread->body }}
    </div>

    <section class="py-4 antialiased">
        <div class="mx-auto">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-lg lg:text-2xl font-bold text-gray-900">{{ __('comments') }}
                    ({{ $thread->comments->count() }})</h2>
            </div>

            <form class="mb-6" action="{{ route('comment.store', $thread->id) }}" method="POST">
                @csrf
                <div class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200">
                    <x-forms.input-label for="comment" value="Tu comentario" class="text-gray-500"/>
                    <x-forms.textarea name="comment" id="comment" value="{{ old('comment') }}" rows="4"
                        placeholder="{{ __('your_comment') }}"
                        class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none" required />
                </div>

                <x-primary-button
                    class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-gray-800 rounded-lg focus:ring-4 focus:ring-gray-200 hover:bg-gray-700"
                    type="submit">
                    {{ __('submit_comment') }}
                </x-primary-button>           
            </form>

            <hr class="my-4 opacity-0">

            @foreach ($comments as $comment)
                @include('layouts.comment')

                @if ($comments[4] != $comment)
                    <hr class="my-4">
                @endif

                @if ($comments[4] == $comment)
                    <hr class="mb-4">
                @endif
            @endforeach

            {{ $comments->links() }}
    </section>
    </div>
@endsection
