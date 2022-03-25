@extends('layout.admin')

@section('title', isset($template) ? 'Edit Template ID: ' . $template->id : 'Create Template')

@section('content')
    <div class="container mx-auto px-6 py-8">
        <h3 class="text-gray-700 text-3xl font-medium">{{ isset($template) ? 'Edit Template ID: ' . $template->id : 'Create Template' }}</h3>

        <div class="mt-8">

        </div>

        <div class="mt-8">
            <form enctype="multipart/form-data" class="space-y-5 mt-5" action="{{ isset($template) ? route('admin.templates.update', $template->id) : route('admin.templates.store') }}" method="POST">
                @csrf

                @if(isset($template))
                    @method('PUT')
                @endif

                <input name="title" value="{{ isset($template) ? $template->title : '' }}" type="text" class="w-full h-12 border border-gray-800 rounded px-3 @error('title') border-red-800 @enderror" placeholder="Название" />
                @error('title')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror

                @if(isset($template) && $template->filepath)
                    <div>
                        <img class="h-64 w-64" src="/storage/templates/{{ $template->filepath }}">
                    </div>
                @endif

                <input name="thumbnail" type="file" class="w-full h-12" placeholder="Обложка" />
                @error('thumbnail')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror

                <button type="submit" class="text-center w-full bg-blue-900 rounded-md text-white py-3 font-medium">Сохранить</button>
            </form>
        </div>
    </div>
@endsection
