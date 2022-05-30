@extends('layouts.admin')
@section('content')
    <div class="card col-10 offset-1 border-danger">
        <div class="card-header d-flex justify-content-between bg-danger bg-gradient">
            <div class="p-2 text-light">
                <h3>AUF SUBSCRIBERS LIST</h3>
            </div>
            <div class="p-2">
                <a href="{{ route('home') }}" class="btn btn-info bg-gradient shadow-sm bg rounded">Home</a>
                <a href="{{ route('create.create') }}" class="btn btn-primary bg-gradient shadow-sm bg rounded">Add</a>
            </div>
        </div>
        <div class="card-body bg-gradient">
            <table class="table bg-gradient table-striped ">
                <thead class="border border-bottom ">
                    <tr class="border-1 border ">
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Options</th>
                    </tr>
                </thead>
                @foreach ($tasks as $task)
                    <tbody class="border border-1">
                        <td class="border-0 border-bottom ">{{ $task->name }}</td>
                        <td class="border-0 border-bottom ">{{ $task->email }}</td>
                        <td class="border-0 border-bottom ">{{ $task->contact }}</td>

                        <td class="border border-0 d-flex flex-row-reverse">
                            <form action="{{ route('create.destroy', $task) }}" method="post">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger bg-gradient mx-1 shadow-sm bg rounded" data-toggle="toolinfo"
                                    data-toggle="tooltip" data-placement="top" onclick="return confirm(' Confirm delete?')">Delete</button>
                            </form>

                            <a href="{{ route('create.edit', $task) }}" title="Edit">
                                <button class="btn btn-info mx-1 shadow-sm bg-gradient bg rounded" data-toggle="tooltip"
                                    data-placement="top">Edit</button>
                            </a>
                            <a href="{{ route('create.show', $task) }}" title="View details">
                                <button class="btn btn-primary bg-gradient mx-1 shadow-sm rounded" data-toggle="tooltip"
                                    data-placement="top">Veiw</button>
                            </a>
                        </td>
                    </tbody>
                @endforeach

            </table>
        </div>
    </div>
@endsection
