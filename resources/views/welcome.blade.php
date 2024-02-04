@extends('layouts.app')
@section('title', 'หน้าแรกของweb site')
@section('content')
    <h2 class="text-lg-center">บทความล่าสุด</h2>
    <hr>
    @if (count($blogs) == 0)
    <div class="mt-5" style="height: 500px">
        <h2 class="text-danger text-center">ไม่มีบทความ</h2>
    </div>
    @endif
    @foreach ($blogs as $item)
        <h2>{{ $item->title }}</h2>
        <p>{!! $item->content !!}</p>
        <a href="/blog/{{ $item->id }}" class="btn btn-primary">อ่านเพิ่มเดิม</a>
        <hr>
    @endforeach
@endsection
