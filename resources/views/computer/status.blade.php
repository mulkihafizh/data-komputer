@extends('layout.main')

@section('content')
    <section class="grow lg:mx-20 my-8 mx-5 flex flex-col  gap-5  text-white">
        <div class="wrap-title">
            <div class="dashboard-title  text-3xl mb-8"><i class="bi bi-lightning text-text-color"></i> Data Status Komputer
            </div>
            <div class="stats grid grid-cols-2 text-gray-300">
                <div class="status ">
                    <h1 class="text-2xl">Kondisi Baik</h1>
                    <p>Jumlah:
                        {{ $computers->where('condition', 1)->count() }}
                    </p>
                </div>
                <div class="status">
                    <h1 class="text-2xl">Kondisi Rusak</h1>
                    <p>Jumlah:
                        {{ $computers->where('condition', 0)->count() }}
                    </p>
                </div>
            </div>
        </div>

        <div class="my-4 bg-gray-600 h-[1px]"></div>
        <div class="computers grid lg:grid-cols-2 grid-cols-1 gap-4">
            @foreach ($computers as $computer)
                <div class="card bg-third-color p-8  shadow-xl rounded-lg">
                    @if ($computer->status == 1)
                        <div class="computer rounded-lg ">
                            <h1 class="title text-2xl mb-4"><i class="bi bi-display text-text-color"></i>
                                {{ $computer->name }}
                            </h1>
                            <div class="data text-text-color">
                                <p>Merk Komputer: {{ $computer->brand->name }}</p>
                                <p>Kondisi: {{ $computer->condition == 1 ? 'Baik' : 'Rusak' }}</p>
                                <p>Ruangan: {{ $computer->room_id == null ? 'Belum ada' : $computer->room->room_number }}
                                </p>
                            </div>
                            <div class="action flex gap-4">
                                <a href="/computer/{{ $computer->id }}/edit" class="hover:text-blue-300">Edit</a>
                                <form action="{{ route('computer.destroy', $computer->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="hover:text-red-400"
                                        onclick="return confirm('Anda Yakin?')">Delete</button>
                                </form>
                            </div>
                        </div>
                    @endif
                    @if ($computer->status == 0)
                        <div class="computer rounded-lg ">
                            <h1 class="title text-2xl mb-4"><i class="bi bi-display text-text-color"></i>
                                {{ $computer->name }}
                            </h1>
                            <div class="data text-text-color">
                                <p>Merk Komputer: {{ $computer->brand->name }}</p>
                                <p>Kondisi: {{ $computer->condition == 1 ? 'Baik' : 'Rusak' }}</p>
                                <p>Ruangan: {{ $computer->room_id == null ? 'Belum ada' : $computer->room->room_number }}
                                </p>
                            </div>
                            <div class="action flex gap-4">
                                <a href="/computer/{{ $computer->id }}/edit" class="hover:text-blue-300">Edit</a>
                                <form action="{{ route('computer.destroy', $computer->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="hover:text-red-400"
                                        onclick="return confirm('Anda Yakin?')">Delete</button>
                                </form>
                            </div>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    </section>
@endsection
