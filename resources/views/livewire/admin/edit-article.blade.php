@extends('layouts.admin', [
    'title' => 'Formulir Postingan - IPDN Kampus Daerah',
    'page_name' => 'Formulir Perubahan Postingan',
]);

@push('style')
    <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
@endpush

@section('content')
    @livewire('component.admin.article-manager.edit-article')
@endsection

@push('script')
<script>
  CKEDITOR.replace( 'inputContent' );
</script>
@endpush
