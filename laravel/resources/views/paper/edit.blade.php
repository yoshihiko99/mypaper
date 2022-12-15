@extends('layouts.template')
@section('title', '論文編集')
@section('content')
    <form action="{{ route('papers.update', $paper->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="mt-8">
            <button type="submit"
                    class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-600 dark:focus:ring-blue-800"
            >Update
            </button>
        </div>

        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
            Title
            <input name="title" value="{{ old("title", $paper->title) }}"
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </label>

        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
            Memo
            <input name="memo" value="{{ old("memo", $paper->memo) }}"
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </label>

        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
            URL
            <input name="url" value="{{ old("url", $paper->url) }}"
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </label>

        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
            PDF
            <div>
                <input name="pdf" type="file" accept="application/pdf">
            </div>
        </label>

        @if($paper->pdf_url)
            <div class="mt-3">
                <a href="{{ $paper->pdf_url }}" target="_blank">
                    <button type="button"
                            class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">
                        PDF Download
                    </button>
                </a>
                <button
                    class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900"
                    type="button" data-modal-toggle="defaultModal">
                    PDF Delete
                    {{-- TODO: delete --}}
                </button>
            </div>
        @endif
    </form>
@endsection
