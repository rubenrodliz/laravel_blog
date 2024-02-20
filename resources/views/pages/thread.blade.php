@extends('pages/components/template')

@section('title', $thread->title)

@section('content')
    <div class="leading-loose w-full mb-4">
        {{ $thread->body }}
    </div>

    <h2 class="flex items-center text-2xl gap-1 my-8">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="w-6 h-6">
            <path stroke-linecap="round"
                stroke-linejoin="round"d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
        </svg>
        <span>
            {{ $thread->comments->count() }} Comentarios
        </span>
    </h2>

    @foreach ($comments as $comment)
        <div class="w-full  my-8">
            <div class="flex items-center font-bold gap-1 my-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                </svg>
                {{ $comment->user->name }}
            </div>

            <div class="leading-loose text-sm">
                {{ $comment->body }}
            </div>

            @if ($comments[4] != $comment)
                <hr class="my-4">
            @endif
        </div>
    @endforeach

    {{ $comments->links() }}

@endsection
