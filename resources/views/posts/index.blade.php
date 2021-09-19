
<x-app-layout>
   

    <div class="py-12">
        <div class="max-w-9xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('posts.create') }}"> Create New Post</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="container mt-5">
            <table class="table table-bordered mb-5">
                <thead>
                    <tr class="table-success">
                        <th scope="col">Id</th>
                        <th scope="col">Title</th>
                        
                        <th scope="col">Author</th>
                        <th scope="col">Category</th>
                        <th width="280px">Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($data as $key => $value)
                <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->title }}</td>
            
            <td>{{$value->author}}</td>
            <td>{{$value->categories}}</td>
            <td>
                <form action="{{ route('posts.destroy',$value->id) }}" method="POST">    
                    <a class="btn btn-primary" href="{{ route('posts.edit',$value->id) }}">Edit</a>   
                    @csrf
                    @method('DELETE')      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
</tbody>
    </table>  
    {{-- Pagination --}}
        <div class="d-flex justify-content-center">
            {!! $data->links() !!}
        </div>
        </div>
    
    </div>
</x-app-layout>
