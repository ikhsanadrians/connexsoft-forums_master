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
                <div class="categories-card p-4 max-w-[200px] max-h-[500px] border-slate-300">
                    <ul>
                        <li class="font-bold flex items-center gap-[1.4px]">
                            <span class="material-symbols-outlined">
                                category
                            </span>Categories
                        </li>
                        <li class="hover:bg-slate-300 p-2 rounded-md">All Category</li>
                        @foreach ($category as $itemcategory)
                            <li class="hover:bg-slate-300 hover:translate-x-3 duration-700 p-2 rounded-md">
                                {{ $itemcategory->name }}</li>
                        @endforeach

                    </ul>
                </div>
            </div>
            <div class="questions">
                @foreach ($question as $itemquestion)
                    <div
                        class="question-card w-[680px] mb-2 pb-[20px] max-h-[180px] rounded-lg shadow-lg bg-[#ffffff] border-slate-300 p-4">
                        <div class="question-card-inner relative">
                            <div class="flex justify-between">
                                <div class="userandtitle">
                                    <h1 class="profile flex items-center text-l text-zinc-500"><span
                                            class="material-symbols-outlined text-zinc-500">
                                            person
                                        </span>{{ $itemquestion->user->name }}
                                        <span class="material-symbols-outlined ml-2 text-zinc-500">
                                            history
                                        </span>
                                        <p>{{ $itemquestion->created_at->diffForHumans() }}</p>
                                        <span class="material-symbols-outlined text-zinc-500 ml-2">
                                            dataset
                                        </span>
                                        Web Programming
                                    </h1>
                                    <h1 class="font-bold text-xl text-slate-700">{{ $itemquestion->title }}</h1>
                                </div>
                                <div class="point flex">

                                    <h1
                                        class="point pt-[0.8px] pb-[0.8px] pr-[5px] pl-[5px] rounded-2xl font-bold flex items-center gap-[1.2px]">
                                        <img src="./images/connexsoftlogomobile.png" alt="tes" class="h-4">+
                                        {{ $itemquestion->point }}
                                    </h1>
                                </div>
                            </div>

                            <div class="answerandblank flex justify-end items-end cursor-pointer">

                                <div
                                    class="self-end flex mt-[12px] border-[1.2px] border-slate-300 hover:bg-slate-300 p-2 rounded-2xl">
                                    <span class="material-symbols-outlined text-zinc-500">
                                        history_edu
                                    </span>
                                    <h1 class="font-semibold text-zinc-500">Answer</h1>
                                </div>


                            </div>


                        </div>


                    </div>
                @endforeach

            </div>
            <div class="faqandaskrank w-full">
                <div
                    class="faq w-full h-[200px]  shadow-lg rounded-lg bg-[#ffffff] border-slate-300 items-center flex justify-center">
                    <div class="faq-profile p-4">
                        <div class="profileandimages flex justify-center items-center gap-2">
                            <div class="faq-images">
                                <img src="./images/dani.png" alt="dany" class="h-24">
                            </div>
                            <div class="faq-description flex-col">
                                <ul>
                                    <li class="mb-2">
                                        <h1 class="text-xl font-semibold">{{ Auth::user()->username }}
                                        </h1>
                                    </li>
                                    <li class="mb-2">
                                        <p
                                            class="font-semibold bg-gradient-to-r from-amber-300 to-yellow-500 pl-[12px] rounded-lg">
                                            Beginner</p>
                                    </li>
                                    <h1
                                        class="point mb-2 bg-slate-200 p-2 rounded-lg font-bold flex items-center gap-[1.6px]">
                                        <img src="./images/connexsoftlogomobile.png" alt="tes" class="h-4">
                                        3450
                                    </h1>
                                </ul>
                            </div>

                        </div>

                    </div>

                </div>
                <div
                    class="buttonask flex gap-[1.8px] justify-center mt-4 font-bold text-white bg-gradient-to-r from-red-500 to-red-600 hover:bg-gradient-to-r hover:from-red-600 hover:to-red-500 p-2 rounded-2xl cursor-pointer duration-500">
                    <span class="material-icons text-slate-200">
                        front_hand
                    </span>
                    Ask Question
                </div>
                <div class="rankcard w-full h-[300px] rounded-lg bg-[#ffffff] shadow-2xl mt-8">
                    <div class="rankcard-title flex justify-center pt-4 text-[20px] font-bold items-center ">
                        <span class="material-symbols-outlined text-[30px] text-yellow-600">
                            psychology
                        </span>
                        Top Users

                    </div>
                    <div class="ranklist p-4 items-center">
                        <ul class="flex-col">
                            <li class="flex justify-between">
                                <div class="picandusers flex gap-2">
                                    <div class="pic flex">
                                        <img src="./images/orangs/raya.png" alt="dudungs" class="h-8">
                                    </div>
                                    <p>rayasquirel234</p>
                                </div>
                                <div class="points items-center">
                                    <h1 class="-mt-[10px]">12411 Point</h1>

                                </div>

                            </li>
                            <li class="flex justify-between">
                                <div class="picandusers flex gap-2">
                                    <div class="pic flex">
                                        <img src="./images/orangs/sentana.png" alt="dudungs" class="h-8">
                                    </div>
                                    <p>zxuanta666</p>
                                </div>
                                <div class="points items-center">
                                    <h1 class="-mt-[10px]">12359 Point</h1>

                                </div>

                            </li>
                            <li class="flex justify-between">
                                <div class="picandusers flex gap-2">
                                    <div class="pic flex">
                                        <img src="./images/orangs/pael.png" alt="dudungs" class="h-8">
                                    </div>
                                    <p>el-renzo</p>
                                </div>
                                <div class="points items-center">
                                    <h1 class="-mt-[10px]">12110 Point</h1>

                                </div>

                            </li>
                            <li class="flex justify-between">
                                <div class="picandusers flex gap-2">
                                    <div class="pic flex">
                                        <img src="./images/orangs/ferisdolpin.png" alt="dudungs" class="h-8">
                                    </div>
                                    <p>55_dolpinferis</p>
                                </div>
                                <div class="points items-center">
                                    <h1 class="-mt-[10px]">10987 Point</h1>

                                </div>

                            </li>
                        </ul>
                    </div>


                </div>

            </div>


        </div>


    </div>
@endsection
