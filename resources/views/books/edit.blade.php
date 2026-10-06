@extends('layouts.app')

@section('title', 'Edit Buku')

@section('content')
<div class="bg-white rounded-lg shadow p-6 max-w-2xl mx-auto">
    <h1 class="text-2xl font-bold text-gray-800 mb-4">Edit Buku</h1>

    <form action="{{ route('books.update', $book) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        @include('books._form', ['book' => $book])

        <div class="flex gap-2">
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">Update</button>
            <a href="{{ route('books.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-4 py-2 rounded">Batal</a>
        </div>
    </form>
</div>
@endsection