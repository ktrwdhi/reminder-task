@extends('template.template')
@section('content')
@section('title')
    <h1>MATA KULIAH</h1>
@endsection
    <div class="subject">
        <h1>Daftar Pelajaran</h1>
        <div class="subject-list">
            @foreach ($subjects as $subject)
                <a href="/subject/{{ Str::uuid($subject->id) }}">
                    <div class="subject-detail">
                        <h1>{{ $subject->subject_name }}</h1>
                        <p>{{ $subject->lecturer_name }}</p>
                    </div>
                </a>    
            @endforeach
            <div class="subject-detail">
                <h1>Bahasa Indonesia</h1>
                <p>Pak anjing</p>
            </div>
            <div class="subject-detail">
                <h1>Bahasa Indonesia</h1>
                <p>Pak anjing</p>
            </div>
            <div class="subject-detail">
                <h1>Bahasa Indonesia</h1>
                <p>Pak anjing</p>
            </div>
            <div class="subject-detail">
                <h1>Bahasa Indonesia</h1>
                <p>Pak anjing</p>
            </div>
            <div class="subject-detail">
                <h1>Bahasa Indonesia</h1>
                <p>Pak anjing</p>
            </div>
            <div class="subject-detail">
                <h1>Bahasa Indonesia</h1>
                <p>Pak anjing</p>
            </div>
            <div class="subject-detail">
                <h1>Bahasa Indonesia</h1>
                <p>Pak anjing</p>
            </div>
            <div class="subject-detail">
                <h1>Bahasa Indonesia</h1>
                <p>Pak anjing</p>
            </div>
        </div>
    </div>
@endsection
<style>
    .subject{
        padding: 20px;
        display: flex;
        flex-direction: column;
        gap: 20px;
    }
    .subject-list{
        display: flex;
        justify-content: start;
        gap: 20px;
        flex-wrap: wrap;
    }
    .subject-detail{
        background-color: var(--forth-color);
        width: 300px;
        min-width:250px;
        flex: 1;
        padding: 20px;
        height: auto;
        overflow-wrap: break-word;
        word-wrap: break-word;
        min-height: 140px;
        cursor: pointer;
        border-radius: 20px;
        border: 2px solid;
    }
    .subject-detail:hover{
        transform: translateY(-10px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    }
    .subject-list a{
        text-decoration: none;
        color: var(--thrid-color)
    }
</style>