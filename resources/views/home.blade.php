@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        <div class="toast" role="alert" aria-live="polite" aria-atomic="true" data-bs-autohide="false">
                            <div role="alert" aria-live="assertive" aria-atomic="true">เข้าสู่ระบบสำเร็จ</div>
                        </div>
                    @endif
                        <a href="/author/create">เขียนบทความ</a>
                        <a href="/author/blog">บทความทั้งหมด</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
