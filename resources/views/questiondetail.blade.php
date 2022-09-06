@extends('layouts.app')
<<<<<<< HEAD
@section('content')
<style>
    body{

        background-color: #f1f3f2;
       
    }

    * {
        font-family: 'Plus Jakarta Sans', sans-serif;
    }
    
</style>
    <div class="container flex gap-6 w-full pl-24 pr-18 font-['Plus Jakarta Sans']">
=======
@section('contents')
    <div class="container flex gap-6 w-full pl-24 max-h-60 pr-18">
>>>>>>> b3f474876727cde9d91b7c961b8a2dffc29e9134
        <div
            class="faq w-[25%] order-2 h-[200px]  shadow-lg rounded-lg bg-[#ffffff] border-slate-300 items-center flex justify-center">
            <div class="faq-profile p-4">
                <div class="profileandimages flex justify-center items-center gap-2">
                    <div class="faq-images">
                        <img src="{{ asset('images/dani.png') }}" alt="dany" class="h-24">
                    </div>
                    <div class="faq-description flex-col">
                        <ul>
                            <li class="mb-2">
                                <h1 class="text-xl font-semibold">{{ Auth::user()->username }}
                                </h1>

                            <li class="mb-2">
        
                                <p
                                    class="flex justify-center font-semibold bg-gradient-to-r from-amber-300 to-yellow-500 rounded-lg">
                                    Beginner</p>
                            </li>
                            <h1
                                class="point mb-2 bg-slate-200 p-2 rounded-lg font-bold flex justify-center items-center gap-[1.6px]">
                                <img src="{{ '/images/connexsoftlogomobile.png' }}" alt="tes" class="h-4">
                                3450
                            </h1>
                        </ul>
                    </div>

                </div>

            </div>

        </div>
<<<<<<< HEAD
        <div class="details-card w-[75%] mb-2 pb-[20px] pt-8 pl-12 h-[300px] rounded-lg shadow-lg bg-[#ffffff] border-slate-300 p-4">
            <div class="details-profiles flex gap-2">
                <img src="{{ asset('images/dani.png') }}" alt="dany" class="h-10 flex items-center">
                <div class="details-description flex-col items-center">
                    <ul class="flex-col">
                        <li><p class="font-bold">{{ $questions->user->username }}</p></li>
                        <li><p class="text-sm">{{ $questions}}</p></li>
                    </ul>
               
                 
                </div>
                <div class="history flex">
                    <span
                        class="material-symbols-outlined ml-2-zinc-500 text-transparent bg-gradient-to-r cursor-pointer from-emerald-600 to-sky-500 bg-clip-text">
                        history
                    </span>
=======
        <div
            class="details-card flex flex-col gap-4 w-[75%] mb-2 pb-[20px] h-[300px] rounded-lg shadow-lg bg-[#ffffff] border-slate-300 p-4">
            <div class="details-profiles flex gap-2">
                <div class="imgandname flex gap-2">
                    <img src="{{ asset('images/dani.png') }}" alt="dany" class="h-10 flex items-center">
                    <div class="details-description flex-col items-center">
                        <p class="">{{ $questions->user->username }}</p>
                        <p class="text-sm">Beginner</p>
                    </div>

                </div>
                <div class="history flex">

>>>>>>> b3f474876727cde9d91b7c961b8a2dffc29e9134
                    <p class="cursor-pointer">{{ $questions->created_at->format('d M Y') }}</p>
                </div>


            </div>
            <div class="details-title">
                <div class="titleandreport flex">

                    <h1 class="font-bold leading-relaxed font-sans text-3xl text-slate-700">{{ $questions->title }}</h1>
                </div>


            </div>
            <div
                class="answersbutton flex items-center border-[1.4px] max-w-[220px] rounded-2xl hover:bg-slate-200 border-slate-400 p-2 max-h-14">

                <span class="material-symbols-outlined">
                    add
                </span>
                <a href="" class="font-bold">Add Answer </a><span class="ml-2 font-semibold text-slate-500"> +
                    {{ $questions->point }}
                    pts</span>
            </div>
            <div class="comments flex items-center gap-2">
                <div class="comments-images">
                    <img src="{{ asset('images/orangs/sentana.png') }}" alt="dany" class="h-10">
                </div>
                <div class="comentsinput w-full">
                    <span class="material-symbols-outlined absolute mt-2 ml-2 text-slate-600">
                        comment
                    </span>
                    <input type="text" class="border-[1.4px]  border-slate-400 pl-10 pt-2 pb-2 w-full rounded-2xl"
                        placeholder="Ask {{ $questions->user->username }} About This Question..">
                </div>

            </div>
        </div>
    </div>
@endsection
