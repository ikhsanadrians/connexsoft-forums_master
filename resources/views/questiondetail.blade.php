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
                class="details-card flex flex-col gap-4 w-full mb-2 pb-[50px] max-h-[900px] rounded-lg shadow-lg bg-[#ffffff] border-slate-300 p-4">
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

                        <h1 class="font-semibold font-sans text-2xl text-slate-700">{{ $questions->title }}</h1>
                    </div>


                </div>
                <div class="allanswersbutton flex items-center gap-2">
                    <div class="anwersbuttonwrappers flex items-center">


                        <!-- The button to open modal -->
<<<<<<< HEAD
                      <!-- The button to open modal -->
                <label for="my-modal-3" class="btn modal-button rounded-2xl gap-2 flex items-center"><span class="material-symbols-outlined flex items-center">
                 edit_square
                 </span>Answers</label>

<!-- Put this part before </body> tag -->
        <input type="checkbox" id="my-modal-3" class="modal-toggle" />
        <div class="modal w-full">
            <div class="modal-box relative w-11/12 h-[600px] max-w-3xl" >
             <label for="my-modal-3" class="p-2 absolute right-2 top-2">✕</label>
            <h3 class="text-lg font-bold ml-4">Answer</h3>
             <div class="input w-full">
                <textarea name="question" placeholder="Type your Question Here" style="resize:none" rows="4" cols="90"
                        class="placeholder:text-slate-400 w-full h-[200px] p-2 rounded-lg focus:outline-none focus:outline-cyan-400 bg-slate-200 "></textarea>
             </div>
             </div>
                </div>

=======
                        <!-- The button to open modal -->
                        <label for="my-modal-3" class="btn modal-button">Add Answers</label>

                        <!-- Put this part before </body> tag -->
                        <input type="checkbox" id="my-modal-3" class="modal-toggle" />
                        <div class="modal">
                            <div class="modal-box w-11/12 max-w-5xl">
                                <label for="my-modal-3"
                                    class="absolute right-4 text-2xl top-2 hover:text-red-600 duration-200">✕</label>
                                <h3 class="text-2xl font-bold">Answers</h3>
                                <div class="inputs w-full mt-4">
                                    <textarea name="" id="" cols="70" rows="10"
                                        class="p-2 w-full focus:outline-sky-600 focus:outline-none bg-slate-200 rounded-2xl"
                                        placeholder="Type Your Answers Here" autocomplete="false" spellcheck="false"></textarea>
                                </div>
                                <div class="inputandpoints  mt-4 flex justify-between items-center">
                                    <div class="inputuploads flex items-center">
                                        <div class="formating-text flex items-center gap-2">
                                            <span class="material-symbols-outlined text-slate-500 cursor-pointer ">
                                                format_underlined
                                            </span>
                                            <span class="material-symbols-outlined text-slate-500 cursor-pointer">
                                                text_format
                                            </span>
                                            <span class="material-symbols-outlined text-slate-500 cursor-pointer">
                                                format_size
                                            </span>
                                            <span class="material-symbols-outlined text-slate-500 cursor-pointer">
                                                format_bold
                                            </span>
                                            <span
                                                class="material-symbols-outlined text-slate-500 cursor-pointer items-center">
                                                format_italic
                                            </span>
                                        </div>
                                        <div class="inputfiles flex justify-between">
                                            <div class="upload flex items-center cursor-pointer">
                                                <input type="file" name="imageinputs" id="imageinputs"
                                                    class="absolute opacity-0 w-6">
                                                <span
                                                    class="material-symbols-outlined cursor-pointer text-slate-500 hover:text-slate-600">
                                                    attach_file
                                                </span>
                                            </div>


                                        </div>
                                        <div class="upload-image-previews invisible h-6 pt-2 pb-2 pl-4 pr-4 bg-gradient-to-r rounded-lg bg-slate-200 flex items-center"
                                            style="max-width:100%" id="bingkai">
                                            <div class="imgandname flex items-center justify-around h-full gap-4 w-full">
                                                <div class="imgandp flex items-center w-full gap-2">
                                                    <img src="" alt="imgpreview" id="imagepreviews" class="h-6">
                                                    <p id="imagesnames"></p>
                                                </div>

                                                <span
                                                    class="buttonupload material-symbols-outlined cursor-pointer hover:opacity-80">
                                                    close
                                                </span>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="point-totals flex items-center">

                                        <span class="material-symbols-outlined">
                                            contact_support
                                        </span>

                                        <p class="text-sm flex-end">
                                            You Will Get {{ $questions->point }} Points
                                        </p>
                                    </div>
                                </div>


                                <button
                                    class="answersbutton bg-gradient-to-r from-sky-400 to-blue-600 px-4 py-2 mt-4 rounded-2xl font-bold text-white">Answers</button>
                            </div>
                        </div>
>>>>>>> 669d1aed5caa3b152901d525ab6e0e5626348e56
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
            <div class="answers bg-white p-4 w-full h-full rounded-md shadow-lg">

                <div class="answerswrapper">
                    <div class="title-answers bg-slate-90">

                        <h1 class="font-bold text-2xl ">Answers</h1>
                    </div>

                    @foreach ($questions->answers as $question)
                        <div class="answers-inner p-4 max-w-full bg-slate-100 rounded-2xl mt-4">
                            <div class="answers flex items-center gap-2">
                                <img src="{{ asset('images/orangs/raya.png')}}" alt="profilepic" class="h-12">
                                <div class="usersdetails">
                                    <div class="font-bold">{{ $question->user->name }}</div>
                                    <h1 class="bg-cyan-400 w-24 pl-8 rounded-xl">Pakar</h1>
                                </div>
                            </div>
                           <div class="content mt-4">
                               <h1>{{ $question->content }}</h1>
 
                           </div>
                           <div class="thanksandrate mt-4 flex justify-between gap-4">
                              <div class="thanks flex  font-bold -top-3 items-center bg-slate-200 pl-4 mt-2 pr-4 pt-[1.5px] pb-[1.5px] rounded-2xl hover:bg-slate-300 duration-200 cursor-pointer hover:-translate-y-2"><span class="material-symbols-outlined text-blue-500">
                                arrow_upward
                                </span> Up</div>
                              <div class="rate">

                                <div class="rating">
                                    <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                    <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" checked />
                                    <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                    <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                    <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                  </div>
                              </div>
                           </div>

                        </div>
                    @endforeach
                </div>




            </div>
        </div>
    </div>


    <script src="{{ asset('js/Answers.js') }}"></script>
@endsection
