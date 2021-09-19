<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <html>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Laravel Pagination Demo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    </head>
    <body>
    <div class="container mt-5">
            <table class="table table-bordered mb-5">
                <thead>
                    <tr class="table-success">
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Author</th>
                        <th scope="col">Category</th>
                        <th width="280px">View Content</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($employeeData as $data)
                    <tr>
                        <th scope="row">{{ $data->id }}</th>
                        <td>{{ $data->title }}</td>
                        <td>{{ $data->author }}</td>
                        <td>{{ $data->categories}}</td>
                        <td> 
                    <a class="btn btn-info" href="{{ route('posts.show',$data->id) }}">Show</a>   
            </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- Pagination --}}
        <div class="d-flex justify-content-center">
            {!! $employeeData->links() !!}
        </div>
        </div>
        </body>
</html>