@extends('layouts.app')


@section('contents')
    <div class="container z-10">
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
                            <li class="hover:bg-slate-300 hover:-translate-x-3 duration-700 p-2 rounded-md">
                                {{ $itemcategory->name }}</li>
                        @endforeach

                    </ul>
                </div>
            </div>
            <div class="questions">
                <div class="welcoming-users pt-4 pl-6 rounded-lg text-white text-4xl font-bold h-[220px] w-[680px] flex bg-gradient-to-r from-sky-400 to-blue-500 mb-4 overflow-hidden">
                       <h1 class="flex">Welcome Back {{Auth::user()->username}}!</h1>
                   
                        <img src="{{ asset('images/coworking.png')}}" alt="ilustration" class="h-72 pointer-events-none -ml-8">
                        
                            
                        
        
                </div>

                @foreach ($question as $itemquestion)
                    <div
                        class="question-card w-[680px] mb-2 pb-[20px] max-h-[180px] rounded-lg shadow-lg bg-[#ffffff] border-slate-300 p-4">
                        <div class="question-card-inner relative">
                            <div class="flex justify-between">
                                <div class="userandtitle">
                                    <h1 class="profile flex items-center text-l text-zinc-500"><span
                                            class="material-symbols-outlined text-zinc-500 text-transparent bg-gradient-to-r cursor-pointer from-emerald-600 to-sky-500 bg-clip-text">
                                            person
                                        </span>{{ $itemquestion->user->name }}
                                        <span
                                            class="material-symbols-outlined ml-2 text-zinc-500 text-transparent bg-gradient-to-r cursor-pointer from-emerald-600 to-sky-500 bg-clip-text">
                                            history
                                        </span>
                                        <p class="cursor-pointer">{{ $itemquestion->created_at->diffForHumans() }}</p>
                                        <span
                                            class="material-symbols-outlined text-transparent bg-gradient-to-r cursor-pointer from-emerald-600 to-sky-500 bg-clip-text  ml-2">
                                            dataset
                                        </span>
                                        Web Programming
                                    </h1>
                                    <h1 class="font-bold text-xl text-slate-700"><a
                                            href="{{ url('question/' . $itemquestion->id) }}">{{ $itemquestion->title }}</a>
                                    </h1>
                                </div>
                                <div class="point flex">

                                    <h1
                                        class="point pt-[0.8px] pb-[0.8px] pr-[5px] pl-[5px] rounded-2xl font-bold cursor-pointer flex items-center gap-[1.2px]">
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
                                        <div class="pangkats flex items-center bg-gradient-to-r p-2 rounded-xl from-amber-300 to-yellow-500">
                                            <i class="fa-sharp fa-solid fa-crown pointer-events-none items-center bg-gradient-to-r from-slate-300 to-slate-600 text-transparent bg-clip-text"></i>
                                            <p
                                                class="font-semibold pl-2 rounded-lg flex justify-center">
                                                Beginner</p>

                                        </div>
                                    </li>
                                    <h1
                                        class="point mb-2 bg-slate-200 p-2 rounded-lg font-bold flex items-center gap-[1.6px] justify-center">
                                        <img src="./images/connexsoftlogomobile.png" alt="tes" class="h-4 pointer-events-none">
                                        3450
                                    </h1>
                                </ul>
                            </div>

                        </div>

                    </div>

                </div>
                <div id="buttonaskbody"
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

    <div class="question-modals flex justify-center">
        <div
            class="question-modals-inner nonactive  z-20 bg-slate-100 p-6 rounded-lg top-1/4 shadow-lg h-[440px] w-1/2 absolute">
            <div class="question-title flex justify-between mb-2">
                <h1 class="font-bold">Ask a question about your Problems!</h1>
                <span class="material-symbols-outlined cursor-pointer" id="buttonclose">
                    close
                </span>
            </div>
            <div class="question-input mb-2">
                <textarea placeholder="Type your Question Here" style="resize:none" rows="4" cols="74"
                    class="placeholder:text-slate-400 h-[200px] p-2 rounded-lg focus:outline-none focus:outline-cyan-400 bg-slate-200 "></textarea>
            </div>
            <div class="upload-image-preview nonactive h-6 pt-2 pb-2 pl-4 pr-4 mb-4 bg-gradient-to-r rounded-lg bg-slate-200 items-center"
                style="max-width:100%">
                <div class="imgandname flex items-center justify-around h-full gap-4 w-full">
                    <div class="imgandp flex w-full gap-2">
                        <img src="" alt="imgpreview" id="imagepreview" class="h-6">
                        <p id="imagenames"></p>
                    </div>

                    <span class="material-symbols-outlined cursor-pointer hover:opacity-80" id="buttoncloseimagepreview">
                        close
                    </span>
                </div>

            </div>
            <div class="question-selects flex gap-4 mb-4">
                <div class="question-category">
                    <select
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-400 focus:border-cyan-500 block w-full p-2">
                        <option>Select Category</option>
                        @foreach ($category as $itemcategory)
                            <option value="{{ $itemcategory->id }}">{{ $itemcategory->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="point-select ">
                    <select name="" id=""
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-400 focus:border-cyan-500 block w-full p-2">

                        @for ($i = 10; $i < $counts; $i++)
                            <option>{{ $i }}</option>
                        @endfor

                    </select>
                </div>
                <div class="upload flex items-center cursor-pointer">
                    <input type="file" name="imageinputs" id="imageinput" class="absolute opacity-0 w-6">
                    <span class="material-symbols-outlined cursor-pointer hover:text-slate-600">
                        attach_file
                    </span>
                </div>

                <div class="point-totals flex items-center">
                    <span class="material-symbols-outlined">
                        contact_support
                    </span>

                    <p class="text-sm">
                        You Have 65 Points
                    </p>
                </div>
            </div>
            <button type="submit"
                class="flex mt-2 items-center pt-2 pb-2 pr-4 pl-4 rounded-2xl font-bold text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:opacity-80">
                <span class="material-icons text-slate-200">
                    front_hand
                </span>
                Ask Your Question
            </button>
        </div>
    </div>
    <div class="backdrop nonactive bg-sky-600/50 w-full absolute top-[83px] -mt-2 mb-4" style="z-index: 10; height:100%">

    </div>

    <script src="./js/home.js"></script>
@endsection
