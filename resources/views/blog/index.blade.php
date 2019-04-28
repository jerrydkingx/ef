@extends ('layouts.master')

@section('content')

<h3>Blog</h3>

<table class="table table-responsive">
      <thead>
                <tr>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Modify</th>
                </tr>
      </thead>
      <tbody>
            @foreach($blogs as $blo)
                <tr>
                <td>{{$blo->title}}</td>
                <td>{{$blo->description}}</td>
                <td>
                    <button class="btn btn-info" data-blogid="{{$blo->id}}" data-mytitle="{{$blo->title}}" data-mydescription="{{$blo->description}}" data-toggle="modal" data-target="#edit">Edit</button>
                      <button class="btn btn-danger" data-blogid="{{$blo->id}}" data-toggle="modal" data-target="#delete">Delete</button>
                </td>
                </tr>
            @endforeach
      </tbody>
</table>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add Blog
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">New Blog</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('blog.store')}}" method="post">
        {{csrf_field()}}
      <div class="modal-body">
        <label for=""></label>
        <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" name="title" id="title">
        </div>
        <div class="form-group">
              <label for="des">Description</label>
              <textarea name="description" id="des" col="20" row="5" class="form-control"></textarea>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Post</button>
      </div>
    </form>
    </div>
  </div>
</div>
<!-- edit window -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Edit Blog</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('blog.update','ef')}}" method="post">
        {{method_field('patch')}}
        {{csrf_field()}}
      <div class="modal-body">
        <input type="hidden" name="blog_id" id="blof" value="">
        <label for=""></label>
        <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" name="title" id="title">
        </div>
        <div class="form-group">
              <label for="des">Description</label>
              <textarea name="description" id="des" col="20" row="5" class="form-control"></textarea>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save Changes</button>
      </div>
    </form>
    </div>
  </div>
</div>

<!-- delete window -->
<div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title text-center" id="exampleModalLabel">Delete Blog</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('blog.destroy','ef')}}" method="post">
        {{method_field('delete')}}
        {{csrf_field()}}
      <div class="modal-body">
        <input type="hidden" name="blog_id" id="blof" value="">
        <p class="text-center"> Are you sure?
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancel</button>
        <button type="submit" class="btn btn-warning">Delete</button>
      </div>
    </form>
    </div>
  </div>
</div>
@endsection
