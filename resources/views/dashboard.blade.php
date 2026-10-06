@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="bg-white rounded-lg shadow p-8">
    <h1 class="text-3xl font-bold text-gray-800 mb-2">Selamat Datang, {{ auth()->user()->name }}! 👋</h1>
    <p class="text-gray-600 mb-6">Aplikasi Pengelolaan Data Buku Perpustakaan</p>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <a href="{{ route('books.index') }}" class="bg-blue-50 border border-blue-200 rounded-lg p-6 hover:bg-blue-100 transition">
            <h2 class="text-lg font-semibold text-blue-800 mb-1">📖 Daftar Buku</h2>
            <p class="text-sm text-gray-600">Lihat, cari, dan kelola semua buku</p>
        </a>
        <a href="{{ route('books.create') }}" class="bg-green-50 border border-green-200 rounded-lg p-6 hover:bg-green-100 transition">
            <h2 class="text-lg font-semibold text-green-800 mb-1">➕ Tambah Buku</h2>
            <p class="text-sm text-gray-600">Tambah data buku baru</p>
        </a>
    </div>
</div>
@endsection