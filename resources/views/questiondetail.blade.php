@extends('layouts.app')



@section('contents')
    <div class="container flex gap-6 w-full pl-24 h-full pr-18">
        <div
            class="faq w-[25%] order-2 h-[200px] border border-gray-200  shadow-lg rounded-lg bg-[#ffffff] items-center flex justify-center">
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
        <div class="questionandanswers w-[75%]">

            <div
                class="details-card flex flex-col gap-4 w-full mb-2 pb-[20px] h-[300px] rounded-lg shadow-lg bg-[#ffffff] border-slate-300 p-4">
                <div class="details-profiles flex gap-2">
                    <div class="imgandname flex gap-2 items-center">
                        <img src="{{ asset('images/dani.png') }}" alt="dany" class="h-12 flex items-center">
                        <div class="details-description flex-col items-center">
                            <p class="">{{ $questions->user->username }}</p>
                            <p class="text-sm">Beginner</p>
                        </div>

                    </div>
                    <div class="history flex items-start mt-[1.5px]">


                        <p class="cursor-pointer">
                            {{ '| ' . $questions->created_at->format('d M Y') . ' ' . ' | ' . $questions->category->name }}
                        </p>
                    </div>


                </div>
                <div class="details-title">
                    <div class="titleandreport flex">

                        <h1 class="font-bold leading-relaxed font-sans text-3xl text-slate-700">{{ $questions->title }}</h1>
                    </div>


                </div>
                <div class="allanswersbutton flex items-center gap-2">
                    <div class="anwersbuttonwrappers flex items-center">


                        <!-- The button to open modal -->
                        <label for="my-modal-5" class="btn modal-button">open modal</label>

                        <input type="checkbox" id="my-modal-5" class="modal-toggle" />
                        <div class="modal">
                            <div class="modal-box w-6/12 max-w-5xl">
                                <h3 class="font-bold text-lg">Congratulations random Internet user!</h3>
                                <p class="py-4">You've been selected for a chance to get one year of subscription to use
                                    Wikipedia for free!</p>
                                <div class="modal-action">
                                    <label for="my-modal-5" class="btn">Yay!</label>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div
                        class="-mt-[2.4px] seeanswers bg-indigo-500 hover:bg-indigo-400 hover:text-slate-100 duration-200 text-white font-semibold pt-[.70rem] pb-[.70rem] pl-4 pr-4 flex gap-[3px] items-center rounded-2xl cursor-pointer">
                        <span class="material-symbols-outlined">
                            visibility
                        </span> See Answers
                    </div>

                </div>


                <div class="comments flex items-center gap-2">
                    <div class="comments-images">
                        <img src="{{ asset('images/orangs/sentana.png') }}" alt="dany" class="h-10">
                    </div>
                    <div class="comentsinput w-full flex items-center">
                        <span class="material-symbols-outlined absolute flex item-center ml-2 text-slate-600">
                            comment
                        </span>
                        <input type="text"
                            class="border-[1.4px] focus:outline-none focus:border-blue-600 focus:border-2 border-slate-300 pl-10 pt-2 pb-2 w-full rounded-2xl"
                            placeholder="Ask {{ $questions->user->username }} About This Question..">
                    </div>

                </div>
            </div>
            <div class="answers bg-white w-full h-full rounded-md shadow-lg">

                <div class="answerswrapper">
                    <div class="title-answers bg-slate-90">

                        <h1 class="font-bold text-2xl ">Answers</h1>
                    </div>

                    @foreach ($questions->answers as $question)
                        <div class="answers-inner p-4 max-w-full bg-slate-100">
                            <div class="h3">{{ $question->user->name }}</div>
                            <h1>{{ $question->content }}</h1>
                        </div>
                    @endforeach
                </div>




            </div>
        </div>
    </div>
@endsection
