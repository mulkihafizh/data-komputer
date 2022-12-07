@extends('layout.main')

@section('content')
    <section class="grow lg:mx-20 my-8 mx-5 flex flex-col  gap-5  text-white">
        <div class="wrap-title">
            <div class="dashboard-title  text-3xl mb-12">Data Komputer dan Ruangan</div>
            <div class="card bg-third-color p-8  shadow-xl rounded-lg">
                <div class="computer rounded-lg ">

                    <h1 class="title text-2xl mb-4"><i class="bi bi-display text-text-color"></i> Computer</h1>
                    <div class="data text-text-color">
                        <p>Total: 20</p>
                        <p>Merk Komputer: 4</p>
                        <p>Kondisi Baik: 12</p>
                        <p>Kondisi Rusak: 8</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card bg-third-color p-8 shadow-xl rounded-lg">
            <div class="room rounded-lg  ">
                <h1 class="title text-2xl mb-4"><i class="bi bi-building text-text-color"></i> Room</h1>
                <div class="data text-text-color">
                    <p>Total: 4</p>
                    <p>Total Komputer yang menempati Ruangan : 18</p>
                    <p>Total Komputer tanpa Ruangan</p>
                </div>
            </div>
        </div>
    </section>
@endsection
