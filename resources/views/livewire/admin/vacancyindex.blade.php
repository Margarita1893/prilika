<div class="card">

    <thead class=" text-gray-500">

        <div class="card-header ">
            <input wire:model="search" class="form-control" placeholder="Ingrese el nombre de una vacante">
        </div>

        {{-- @if($vacancies->count()) --}}

        <div class="card-body">
            <table class="table table-striped c">
                <thead>
                    <tr class=" bg-primary">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Estado</th>
                        <!-- <th>Candidatos</th> -->
                        <th colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($vacancies as $vacancy)
                    <tr>
                        <td>{{$vacancy->id}}</td>
                        <td>{{$vacancy->name}}</td>
                        <td>{{$vacancy->status}}</td>
                        <!-- <td>$vacancy-></td> -->

                        {{-- <td width="10px">
                        <a class="btn btn-dark btn-sm" href="{{ route('vacancy', $vacancy->id) }}">Ver</a>
                        </td> --}}

                        <td width="10px">
                            <a class="btn btn-success btn-sm"
                                href="{{route('admin.vacancies.edit', $vacancy)}}">Editar</a>
                        </td>
                        <td width="10px">
                            <form action="{{route('admin.vacancies.destroy', $vacancy)}}" method="POST">
                            </form>
                            @csrf
                            @method('delete')

                            <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{-- para usar la paginación --}}
        @if ($vacancies->count())
        <div class="div card-footer">
            {{$vacancies->links()}}
        </div>
        @else
        <div class="card-body">
            <strong>No existe registros</strong>
        </div>
        @endif


</div>