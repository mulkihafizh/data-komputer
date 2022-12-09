@extends('layout.main')

@section('content')
    <section class="grow lg:mx-20 flex items-center mx-5 min-h-screen text-white ">
        <div class="form my-auto mx-40 grow">
            <form action="/room" method="POST" class="flex flex-col my gap-5 px-8 bg-third-color rounded-lg shadow-lg py-12"
                autocomplete="off">
                @csrf
                <div class="title text-3xl mb-4 flex  items-center flex-col">
                    <i class="bi bi-building text-8xl"></i>
                    <h1> Tambah Data Ruangan</h1>
                </div>
                <div class="form-group">
                    <div class="input-group flex  flex-col gap-2  rounded-2xl">
                        <label for="" class="text-lg px-4">Nomor Ruangan</label>
                        <input type="number" name="room_number" id="room_number" placeholder="Room Number"
                            class="block focus:outline-none w-full px-4 py-3 text-gray-300 rounded-2xl bg-gray-600 border-transparent  ">
                    </div>
                </div>

                <div class="form-group my-5 flex  justify-between items-center">
                    <button type="submit"
                        class="px-12 py-3 text-white bg-blue-500 rounded-full focus:bg-blue-600 focus:outline-none">Tambah
                        Data</button>
                </div>
            </form>
        </div>
    </section>
@endsection
