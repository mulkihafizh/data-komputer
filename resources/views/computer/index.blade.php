@extends('layout.main')

@section('content')
    <section class="grow lg:mx-20 my-8 mx-5 flex flex-col  gap-5  text-white">
        <div class="wrap-title">
            <div class="dashboard-title  text-3xl mb-8"><i class="bi bi-display text-text-color"></i> Data Komputer</div>
            <div class="stats flex justify-between text-gray-300">
                <div class="status flex gap-8">
                    <p>Total: 20</p>
                    <p>Baik: 12</p>
                    <p>Rusak : 8</p>
                </div>
                <div class="add">
                    <a href="computer/create" class="text-white"><i class="bi bi-plus-lg text-blue-300"></i> Tambah
                        Komputer</a>
                </div>
            </div>
        </div>
        <div class="my-4 bg-gray-600 h-[1px]"></div>
        <div class="computers grid lg:grid-cols-2 grid-cols-1 gap-4">
            @foreach ($computers as $computer)
                <div class="card bg-third-color p-8  shadow-xl rounded-lg">
                    <div class="computer rounded-lg ">
                        <h1 class="title text-2xl mb-4"><i class="bi bi-display text-text-color"></i> {{ $computer->name }}
                        </h1>
                        <div class="data text-text-color">
                            <p>Merk Komputer: {{ $computer->brand->name }}</p>
                            <p>Kondisi: {{ $computer->condition == 1 ? 'Baik' : 'Rusak' }}</p>
                            <p>Ruangan: {{ $computer->room_id == null ? 'Belum ada' : $computer->room->name }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
