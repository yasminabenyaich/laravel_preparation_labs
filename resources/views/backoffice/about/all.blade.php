@extends('layouts.appBack')

@section('content')
    <div class="d-flex align-items-center justify-content-center mb-5">
        <h1 class="my-0 mx-2">abouts</h1>
    </div>
    <table class="table text-white">
        <thead>
            <tr>
                <th scope="col">#</th>

                <th scope="col">icone</th>
                <th scope="col">st</th>
                <th scope="col">descripition</th> 
                <th scope="col">Btn texte</th>

         
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($abouts as $about)
                <tr>
                    <th scope="row">{{ $about->id }}</th>
                    <td>{{ $about->st}}</td>
                    <td>{{ $about->icone}}</td>
                    <td>{{ $about->descripition }}</td>
                    <td>{{ $about->btnTxt }}</td>
                 

                    <td>
                        <div class="d-flex">
                            <a class="btn btn-warning text-white mx-2" href="/abouts/{{ $about->id }}"><i class="fas fa-eye"></i></a>
                            @can('update', $about)
                            <a class="btn btn-success text-white mx-2" href="/abouts/{{ $about->id }}/edit"><i class="fas fa-edit"></i></a> 
                            @endcan
                            
                               
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div>
        {{ $abouts->links() }}
    </div>

@endsection
