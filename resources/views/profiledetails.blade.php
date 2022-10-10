@extends('layouts.apps')
@section('content')
    <div class="container flex justify-center w-full h-full">
        <div class="profile bg-slate-200 w-1/2 h-1/2 p-4 mt-10 rounded-lg flex justify-center">
            <div class="picandname flex items-center">
                <div class="profiles-picture relative">
                    <div class="profiles-picture h-32 w-32 rounded-full overflow-hidden object-cover">
                        @if (!$users->profilepicture)
                            <img src="{{ asset('images/anonim.png') }}" alt=""
                                class="h-full w-full relative object-cover">
                        @else
                            <img src="{{ asset('storage/profilpicture/' . $users->profilepicture) }}" alt=""
                                class="h-full w-full relative object-cover">
                        @endif
                    </div>

                    <!-- The button to open modal -->
                    <label for="my-modal-3"
                        class="absolute -mt-10 bg-orange-400 text-white rounded-full flex justify-center items-center h-8 w-8"><span
                            class="material-symbols-outlined">
                            edit
                        </span></label>


                </div>

                <div class="profiles-name flex items-center ml-4">
                    <div class="name">
                        <div class="changeusername flex">
                            <h1 class="font-bold text-3xl">{{ $users->username }}</h1>

                        </div>

                        <h3>{{ $users->name }}</h3>
                    </div>

                </div>
            </div>

        </div>


    </div>
    <div class="stats flex justify-center">
        <div class="question">
            My Questions
        </div>
        <div class="answers">
            <h1>My Answers</h1>
        </div>
    </div>
    <!-- Put this part before </body> tag -->
    <input type="checkbox" id="my-modal-3" class="modal-toggle" />
    <div class="modal">
        <div class="modal-box relative">
            <label for="my-modal-3" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
            <h3 class="text-lg font-bold">Upload The Images</h3>
            <div class="flex-col justify-center">
                <div class="mb-3 w-96">
                    <form action="{{ route('profilepost', $users->slug) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input
                            class="form-control
                  block
                  w-full
                  px-3
                  py-1.5
                  text-base
                  font-normal
                  text-gray-700
                  bg-white bg-clip-padding
                  border border-solid border-gray-300
                  rounded
                  transition
                  ease-in-out
                  m-0
                  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            type="file" id="formFile" name="image" required>
                </div>

                <button type="submit"
                    class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Upload</button>
                </form>
            </div>
        </div>
    </div>
@endsection
