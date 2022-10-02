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
                <div
                    class="welcoming-users pt-4 pl-6 rounded-lg text-white text-4xl font-bold h-[220px] w-[680px] flex bg-gradient-to-r from-sky-400 to-blue-500 mb-4 overflow-hidden">
                    <h1 class="flex">Welcome Back {{ Auth::user()->username }}!</h1>

                    <img src="{{ asset('images/coworking.png') }}" alt="ilustration" class="h-72 pointer-events-none -ml-8">




                </div>

                @foreach ($question as $itemquestion)
                    <div
                        class="question-card w-[680px] mb-2 pb-[20px] max-h-[1800px] rounded-lg shadow-lg bg-[#ffffff] border-slate-300 p-4">
                        <div class="question-card-inner relative">
                            <div class="flex justify-between">
                                <div class="userandtitle w-[75%]">
                                    <h1 class="profile flex items-center text-l text-zinc-500">
                                        <div class="imagesbingkai h-8 w-8 rounded-full overflow-hidden mr-2">
                                            @if (!$itemquestion->user->profilepicture)
                                                <img src="{{ asset('images/anonim.png') }}" alt=""
                                                    class="h-full w-full object-cover user-select-none pointer-events-none">
                                            @else
                                                <img src="{{ asset('storage/profilpicture/' . $itemquestion->user->profilepicture) }}"
                                                    alt=""
                                                    class="h-full w-full object-cover user-select-none pointer-events-none">
                                            @endif
                                        </div>
                                        {{ $itemquestion->user->username }}
                                        <span
                                            class="material-symbols-outlined ml-2 text-zinc-500 text-transparent bg-gradient-to-r cursor-pointer from-emerald-600 to-sky-500 bg-clip-text">
                                            history
                                        </span>
                                        <p class="cursor-pointer">{{ $itemquestion->created_at->diffForHumans() }}</p>
                                        <span
                                            class="material-symbols-outlined text-transparent bg-gradient-to-r cursor-pointer from-emerald-600 to-sky-500 bg-clip-text  ml-2">
                                            dataset
                                        </span>
                                        <p>{{ Str::limit($itemquestion->category->name, 15) }}</p>
                                    </h1>
                                    <h1 class="font-medium text-xl text-slate-700"><a
                                            href="{{ url('/question/' . $itemquestion->id . '' . '/details') }}">{{ $itemquestion->title }}</a>
                                    </h1>
                                </div>
                                <div class="point">

                                    <h1
                                        class="point pt-[0.8px] pb-[0.8px] pr-[5px] pl-[5px] rounded-2xl font-bold cursor-pointer flex items-center gap-[1.2px]">
                                        <img src="./images/connexsoftlogomobile.png" alt="tes"
                                            class="h-4 user-select-none pointer-events-none">+
                                        {{ $itemquestion->point }}
                                    </h1>
                                </div>
                            </div>

                            <div class="answerandblank flex justify-end items-end cursor-pointer">

                                <div
                                    class="self-end flex mt-[12px] border-[1.2px] border-slate-300 hover:bg-slate-300 pt-2 pb-2 pl-4 pr-4 rounded-2xl">
                                    <span class="material-symbols-outlined text-zinc-500 font-medium">
                                        history_edu
                                    </span>
                                    <h1 class="font-medium text-zinc-500">Answer</h1>
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
                            <div class="faq-images h-28 w-28 overflow-hidden rounded-full">
                                <img src="{{ asset('storage/profilpicture/' . Auth::user()->profilepicture) }}"
                                    alt="dany" class="h-full w-full object-cover">
                            </div>
                            <div class="faq-description flex-col">
                                <ul>
                                    <li class="mb-2">
                                        <h1 class="text-xl font-semibold"><a
                                                href="{{ url('/user/' . Auth::user()->id . '' . '/details') }}">{{ Auth::user()->username }}</a>
                                        </h1>
                                    </li>
                                    <li class="mb-2">

                                        @if (!Auth::user()->userrank)
                                            <h1 class="font-bold text-slate-600">Unranked</h1>
                                        @else
                                            @switch(Auth::user()->userrank->rank->name)
                                                @case('Pakar')
                                                    <div
                                                        class="ranks bg-gradient-to-r from-sky-600 to-blue-700 px-4 py-[1.5px] rounded-xl order-2">
                                                        <h1 class="font-bold text-white">
                                                            {{ Auth::user()->userrank->rank->name }}
                                                        </h1>

                                                    </div>
                                                @break

                                                @case('Si Hebat')
                                                    <div
                                                        class="ranks bg-gradient-to-r from-red-600 to-amber-500 px-4 py-[1.5px] rounded-xl order-2">
                                                        <h1 class="font-bold text-white">
                                                            {{ Auth::user()->userrank->rank->name }}
                                                        </h1>

                                                    </div>
                                                @break

                                                @case('Gemar Membantu')
                                                    <div
                                                        class="ranks bg-gradient-to-r from-emerald-400 to-amber-500 px-4 py-[1.5px] rounded-xl order-2">
                                                        <h1 class="font-bold text-white">
                                                            {{ Auth::user()->userrank->rank->name }}
                                                        </h1>

                                                    </div>
                                                @break

                                                @case('Terpelajar')
                                                    <div
                                                        class="ranks bg-gradient-to-r from-amber-600 to-lime-600 px-4 py-[1.5px] rounded-xl order-2">
                                                        <h1 class="font-bold text-white">
                                                            {{ Auth::user()->userrank->rank->name }}
                                                        </h1>

                                                    </div>
                                                @break

                                                @case('Pemula')
                                                    <div
                                                        class="ranks bg-gradient-to-r from-slate-200 to-zinc-400 px-4 py-[1.5px] rounded-xl order-2">
                                                        <h1 class="font-bold text-white">
                                                            {{ Auth::user()->userrank->rank->name }}
                                                        </h1>

                                                    </div>
                                                @break

                                                @case('Ambisius')
                                                    <div
                                                        class="ranks bg-gradient-to-r from-red-300 to-amber-300 px-4 py-[1.5px] rounded-xl order-2">
                                                        <h1 class="font-bold text-white">
                                                            {{ Auth::user()->userrank->rank->name }}
                                                        </h1>

                                                    </div>
                                                @break

                                                @default
                                            @endswitch
                                        @endif





                                    </li>
                                    <h1
                                        class="point mb-2 bg-slate-200 p-2 rounded-lg font-bold flex items-center gap-[1.6px] justify-center">
                                        <img src="./images/connexsoftlogomobile.png" alt="tes"
                                            class="h-4 pointer-events-none">
                                        3450
                                    </h1>
                                </ul>
                            </div>

                        </div>

                    </div>

                </div>
                <label for="my-modal-3"
                    class="buttonask flex gap-[1.8px] justify-center mt-4 font-bold text-white bg-gradient-to-r from-red-500 to-red-600 hover:bg-gradient-to-r hover:from-red-600 hover:to-red-500 p-2 rounded-2xl cursor-pointer duration-500">
                    <span class="material-icons text-slate-200">
                        front_hand
                    </span>
                    Ask Question
                </label>
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
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- The button to open modal -->


    <form action="{{ route('homepost') }}" method="POST">
        @csrf
        <input type="checkbox" id="my-modal-3" class="modal-toggle" />
        <div class="modal">
            <div class="modal-box h-[440px] w-11/12 max-w-3xl">
                <label for="my-modal-3" class="text-slate-800 hover:text-red-500 absolute right-2 top-2">✕</label>
                <h1 class="font-bold">Ask a question about your Problems!</h1>
                <div class="questions-input mt-2 mb-2">
                    <textarea name="question" placeholder="Type your Question Here" style="resize:none" rows="4" cols="80"
                        class="placeholder:text-slate-400 h-[200px] w-full p-2 rounded-lg focus:outline-none focus:outline-cyan-400 bg-slate-200 "></textarea>
                </div>
                <div class="question-selects flex gap-4 mb-4">

                    <div class="question-category">

                        <select
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-400 focus:border-cyan-500 block w-full p-2"
                            name="category">
                            <option>Select Category</option>
                            @foreach ($category as $itemcategory)
                                <option value="{{ $itemcategory->id }}">{{ $itemcategory->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="point-select ">
                        <select name="point" id=""
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
    </form>

    <div class="mb-[1200px]"></div>

    <script src="{{ asset('js/home.js') }}"></script>
@endsection
