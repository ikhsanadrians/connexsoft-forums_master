@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"></div>

                    {{-- <div class="card-body ml-4 lg:ml-24 text-xl lg:text-2xl font-bold text-slate-700 tracking-wide">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('Welcome') }} {{ Auth::user()->name }}


                    </div> --}}
                </div>
            </div>
        </div>
        <div class="home ml-24 mr-4 flex gap-4">
            <div class="categories">
                <div class="categories-card p-4 max-w-[200px] max-h-[500px] border-r-[1.2px] border-slate-300">
                    <ul>
                        <li class="font-bold flex items-center gap-[1.4px]">
                            <span class="material-symbols-outlined">
                                category
                            </span>Categories
                        </li>
                        <li class="hover:bg-slate-300 p-2 rounded-md">All Category</li>
                        @foreach ($category as $itemcategory)
                            <li class="hover:bg-slate-300 p-2 rounded-md">{{ $itemcategory->name }}</li>
                        @endforeach

                    </ul>
                </div>
            </div>
            <div class="questions">
                @foreach ($question as $itemquestion)
                    <div class="question-card w-[680px] mb-2 h-[300px] border-[1.2px] rounded-lg border-slate-300 p-4">
                        <div class="question-card-inner">
                            <div class="flex justify-between">
                                <div class="userandtitle">
                                    <h1 class="profile">{{ $itemquestion->user->name }}</h1>
                                    <h1 class="font-bold text-xl">{{ $itemquestion->title }}</h1>
                                </div>
                                <div class="point flex items-center">

                                    <h1 class="point bg-slate-200 p-2 rounded-lg font-bold flex items-center gap-[1.2px]">
                                        <img src="./images/connexsoftlogomobile.png" alt="tes" class="h-4">+
                                        {{ $itemquestion->point }} Pts
                                    </h1>
                                </div>


                            </div>

                        </div>


                    </div>
                @endforeach

            </div>
            <div class="faq w-full h-[200px] border-[1.2px] rounded-lg border-slate-300">
                <div class="faq-profile p-4">
                    <div class="profileandimages flex justify-center items-center gap-2">
                        <div class="faq-images">
                            <img src="./images/dani.png" alt="dany" class="h-24">
                        </div>
                        <div class="faq-description flex-col">
                            <ul>
                                <li>
                                    <h1 class="text-xl font-semibold">{{ Auth::user()->username }}</h1>
                                </li>
                                <li>
                                    <p class="font-semibold bg-amber-200 pl-[12px] rounded-lg">Beginner</p>
                                </li>
                            </ul>
                        </div>

                    </div>

                </div>
            </div>
        </div>


    </div>
@endsection
