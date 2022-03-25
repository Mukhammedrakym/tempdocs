@extends('layout.admin')

@section('title', isset($user) ? 'Edit User ID: ' . $user->id : 'Create User')

@section('content')
    <div class="container mx-auto px-6 py-8">
        <h3 class="text-gray-700 text-3xl font-medium">{{ isset($user) ? 'Edit User ID: ' . $user->id : 'Create User' }}</h3>

        <div class="mt-8">

        </div>

        <div class="mt-8">
            <form enctype="multipart/form-data" class="space-y-5 mt-5" action="{{ isset($user) ? route('admin.users.update', $user->id) : route('admin.users.store') }}" method="POST">
                @csrf

                @if(isset($user))
                    @method('PUT')
                @endif

                <input name="name" value="{{ isset($user) ? $user->name : '' }}" type="text" class="w-full h-12 border border-gray-800 rounded px-3 @error('name') border-red-800 @enderror" placeholder="Name" />
                @error('email')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror

                <input name="email" value="{{ isset($user) ? $user->email : '' }}" type="text" class="w-full h-12 border border-gray-800 rounded px-3 @error('email') border-red-800 @enderror" placeholder="Email" />
                @error('email')
                <p class="text-red-500">{{ $message }}</p>
                @enderror

                <input name="password" value="{{ isset($user) ? $user->password : '' }}" type="text" class="w-full h-12 border border-gray-800 rounded px-3 @error('password') border-red-800 @enderror" placeholder="Password" />
                @error('password')
                <p class="text-red-500">{{ $message }}</p>
                @enderror

                <input name="city" value="{{ isset($user) ? $user->city : '' }}" type="text" class="w-full h-12 border border-gray-800 rounded px-3 @error('city') border-red-800 @enderror" placeholder="City" />
                @error('city')
                <p class="text-red-500">{{ $message }}</p>
                @enderror

                <input name="address" value="{{ isset($user) ? $user->address : '' }}" type="text" class="w-full h-12 border border-gray-800 rounded px-3 @error('address') border-red-800 @enderror" placeholder="Address" />
                @error('address')
                <p class="text-red-500">{{ $message }}</p>
                @enderror

                <input name="organization" value="{{ isset($user) ? $user->organization : '' }}" type="text" class="w-full h-12 border border-gray-800 rounded px-3 @error('organization') border-red-800 @enderror" placeholder="Organization" />
                @error('organization')
                <p class="text-red-500">{{ $message }}</p>
                @enderror

                <input name="department" value="{{ isset($user) ? $user->department : '' }}" type="text" class="w-full h-12 border border-gray-800 rounded px-3 @error('department') border-red-800 @enderror" placeholder="Department" />
                @error('department')
                <p class="text-red-500">{{ $message }}</p>
                @enderror

                <input name="post" value="{{ isset($user) ? $user->post : '' }}" type="text" class="w-full h-12 border border-gray-800 rounded px-3 @error('post') border-red-800 @enderror" placeholder="Position" />
                @error('post')
                <p class="text-red-500">{{ $message }}</p>
                @enderror

                <button type="submit" class="text-center w-full bg-blue-900 rounded-md text-white py-3 font-medium">Сохранить</button>
            </form>
        </div>
    </div>
@endsection
