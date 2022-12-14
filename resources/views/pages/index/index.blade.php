@extends('master')
@section('description', 'ЮгСтройАльянс - промышленное и гражданское строительство')
@section('title', 'ЮгСтройАльянс')
@section('style')
@endsection

@section('content')
    @include('pages.index.sections.about')
    @include('pages.index.sections.services')
    @include('pages.index.sections.portfolio')
    @include('pages.index.sections.contacts-form')
    @include('pages.index.sections.contacts-map')
@endsection

@section('script')
@endsection
