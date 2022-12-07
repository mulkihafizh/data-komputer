@extends('layout.main')

@section('content')
    <section class="grow lg:mx-20 my-8 mx-5 flex flex-col  gap-5  text-white">
        <div class="wrap-title">
            <div class="dashboard-title  text-3xl mb-8"><i class="bi bi-building text-text-color"></i> Data Ruangan</div>
            <div class="stats flex text-gray-300">
                <div class="add">
                    <a href="computer/create" class="text-white"><i class="bi bi-plus-lg text-blue-300"></i> Tambah
                        Brand</a>
                </div>
            </div>
        </div>
        <div class="my-4 bg-gray-600 h-[1px]"></div>
        <div class="computers grid lg:grid-cols-2 grid-cols-1 gap-4">

            <div class="card bg-third-color p-8  shadow-xl rounded-lg">
                <div class="computer rounded-lg ">
                    <h1 class="title text-2xl mb-4"><i class="bi bi-building text-text-color"></i>
                    </h1>
                    <div class="data text-text-color">

                        <p>Jumlah Komputer:
                        </p>
                        <p>Kondisi Baik: 6</p>
                        <p>Kondisi Rusak: 4</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
