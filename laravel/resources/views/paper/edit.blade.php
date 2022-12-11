@extends('layouts.template')
@section('title', '論文編集')
@section('content')
    <h1 class="text-lg">Paper</h1>
    <form action="{{ route('papers.update', $paper->id) }}" method="POST">
        @method('PUT')
        @csrf
        <label>
            Title
            <input name="title" value="{{ $paper->title }}">
        </label>

        <label>
            Memo
            <input name="memo" value="{{ $paper->memo }}">
        </label>

        <label>
            URL
            <input name="url" value="{{ $paper->url }}">
        </label>

        <button type="submit">更新</button>
    </form>
@endsection