<img src="https://app.childpaths.ie/images/childpaths-logo-updated.jpeg" style="width: 100%; height: 100%; max-height: 80px; max-width: 120px;">
<style>
#posts {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#posts td, #posts th {
  border: 1px solid #ddd;
  padding: 8px;
}

#posts tr:nth-child(even){background-color: #f2f2f2;}

#posts tr:hover {background-color: #ddd;}

#posts th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>

<h1>Child paths posts</h1>

<table id="posts">
<tr>
<th>Post</th>	
<th>User</th>
<th>Created at</th>
<tr>
@foreach($posts as $post)
<tr>
	<td>{{$post->content}}</td>
	<td>{{$post->user->name}}</td>
	<td>{{$post->created_at}}</td>

</tr>
@endforeach

</table>