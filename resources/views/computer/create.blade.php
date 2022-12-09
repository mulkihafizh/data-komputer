@extends('layout.main')

@section('content')
    <section class="grow lg:mx-20 mx-5 flex min-h-screen items-center text-white ">
        <div class="form mx-40 grow ">
            <form action="/computer" method="POST" class="flex flex-col gap-5 px-8 bg-third-color rounded-lg shadow-lg py-12"
                autocomplete="off">
                @csrf
                <div class="title text-3xl mb-4 flex  items-center flex-col">
                    <i class="bi bi-display text-8xl"></i>
                    <h1> Tambah Data Komputer</h1>
                </div>
                <div class="form-group">
                    <div class="input-group flex  flex-col gap-2  rounded-2xl">
                        <label for="" class="text-lg px-4">Name</label>
                        <input type="text" name="name" id="name" placeholder="Computer Name"
                            class="block focus:outline-none w-full px-4 py-3 text-gray-300 rounded-2xl bg-gray-600 border-transparent  ">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group flex  flex-col gap-2  rounded-2xl">
                        <label for="" class="text-lg px-4">Merk</label>
                        <select name="brand_id"
                            class="w-full focus:outline-none text-gray-300 px-4 py-3 rounded-2xl bg-gray-600"
                            id="">
                            <option value="" hidden>Pilih Merk</option>
                            @foreach ($brands as $brand)
                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group my-5 flex  justify-between items-center">
                    <button type="submit"
                        class="px-12 py-3 text-white bg-blue-500 rounded-full focus:bg-blue-600 focus:outline-none">Tambah
                        Data</button>
            </form>
        </div>
    </section>
@endsection
