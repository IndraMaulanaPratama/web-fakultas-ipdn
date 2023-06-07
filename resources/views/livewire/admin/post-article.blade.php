@extends('layouts.admin', [
    'title' => 'Formulir Postingan - IPDN Kampus Daerah',
    'page_name' => 'Formulir Pembuatan Postingan Baru',
]);

@push('style')
    <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
@endpush

@section('content')
    @livewire('component.admin.article-manager.post-article')
@endsection

@push('script')
@endpush
