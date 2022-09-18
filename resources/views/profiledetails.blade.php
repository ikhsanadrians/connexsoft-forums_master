@extends('layouts.apps')
@section('content')
    <div class="container flex justify-center w-full h-full">
        <div class="profile bg-slate-200 w-1/2 h-1/2 p-4 mt-10 rounded-lg flex justify-center">
            <div class="picandname">
                <div class="profiles-picture relative">
                    <img src="{{ asset('images/orangs/feris.png') }}" alt="" class="h-32 relative">
                    <!-- The button to open modal -->
                    <label for="my-modal-3" class="absolute -mt-10 bg-orange-400 text-white rounded-2xl p-[2px]"><span
                            class="material-symbols-outlined">
                            edit
                        </span></label>


                </div>

                <div class="profiles-name">
                    <div class="changeusername flex">
                        <h1 class="font-bold text-3xl">{{ $users->username }}</h1>

                    </div>

                    <h3>{{ $users->name }}</h3>
                </div>
            </div>

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
                    <form action="{{ route('profilepost', $users->id) }}" method="POST" enctype="multipart/form-data">
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
                            type="file" id="formFile" name="image">
                </div>

                <button type="submit"
                    class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Upload</button>
                </form>
            </div>
        </div>
    </div>
@endsection
