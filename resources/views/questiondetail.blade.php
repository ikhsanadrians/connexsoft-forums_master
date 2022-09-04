@extends('layouts.app')
@section('content')
    <div class="container flex gap-6 w-full pl-24 pr-18">
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
                            </li>
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
        <div class="details-card w-[75%] mb-2 pb-[20px] h-[300px] rounded-lg shadow-lg bg-[#ffffff] border-slate-300 p-4">
            <div class="details-profiles flex gap-2">
                <img src="{{ asset('images/dani.png') }}" alt="dany" class="h-8 flex items-center">
                <div class="details-description flex-col items-center">
                    <p class="">{{ $questions->user->username }}</p>
                    <p class="text-sm">Beginner</p>
                </div>
                <div class="history flex">
                    <span
                        class="material-symbols-outlined ml-2-zinc-500 text-transparent bg-gradient-to-r cursor-pointer from-emerald-600 to-sky-500 bg-clip-text">
                        history
                    </span>
                    <p class="cursor-pointer">{{ $questions->created_at }}</p>
                </div>


            </div>
            <div class="details-title">
                <div class="titleandreport flex">

                    <h1 class="font-bold leading-relaxed font-sans text-3xl text-slate-700">{{ $questions->title }}</h1>
                </div>


            </div>
        </div>
    </div>
@endsection
