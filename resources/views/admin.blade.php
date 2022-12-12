<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>

  <a href="posts" style="display:inline-block; margin:10px 0px 0px 10px ">
    <button class="btn-primary">Back Home</button>
  </a>


  <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>title</th>
        <th>body</th>
        <th>author</th>
        <th>active</th>
      </tr>
    </thead>
    @forelse ($posts as $post)
    <form action="" method='POST'>
      @csrf
      <tbody>
        <tr>
          {{-- <th><button name='id' value='{{$post->id}}' style='pointer-events: none'>{{$post->id}}</button></th> --}}
          <th><input name='id' value='{{$post->id}}' size="1" style="font-weight:bold;"disabled></th>
          <th><input type="text" name='title' value='{{$post->title}}'></th>
          <td><input type="text" name='body'value='{{$post->body}}'></td>
          <td><input type="text" name='author'value='{{$post->author}}'></td>
          <td><input type="text" name='active'value='{{$post->active}}'></td>
          <td><button name="edit" value="pressed">Edit</button></td>
          <td><button name="delete" value="{{$post->title}}">Delete</button></td>


          
        </tr>
      </form>
      @empty
      <p>No posts found.</p>
    @endforelse
  </table>


    <form method="post">
      @csrf
      <div>
      <input type="text"  name='title' placeholder="title">
    </div>
    <div>
      <input type="text" name='body' placeholder="body">
    </div>
    <div>
      <input type="text" name='author' placeholder="author">
    </div>
    <div>
      <input type="number" name='active' placeholder="active">
    </div>
    <button name='add' value='1' class="btn btn-primary">Add Poster</button>
  </form>
  
</body>
</html>