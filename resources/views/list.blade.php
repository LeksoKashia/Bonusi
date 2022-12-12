<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>Posters</title>
</head>
<body>

 <a href="admin" style="display:inline-block; margin:10px 0px 0px 10px "><button class="btn-primary">Admin</button></a>
  <br>
  <br>
  <table class="table">
    <thead>
      <tr>
        <th>title</th>
        <th>body</th>
        <th>author</th>
        <th>active</th>
      </tr>
    </thead>
    @forelse ($posts as $post)
    <tbody>
      <tr>
        <th>{{$post->title}}</th>
        <td>{{$post->body}}</td>
        <td>{{$post->author}}</td>
        <td>{{$post->active}}</td>
      </tr>
    @empty
      <p>No posts found</p>
    @endforelse
  </table>

  


      



</body>
</html>