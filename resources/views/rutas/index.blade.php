@extends('layouts.panel')
@section('content')
<div id="map" style="height: 400px;"></div>


@push('scripts')
<script src="{{ asset('js/map.js') }}"></script>
@endpush
@endsection

