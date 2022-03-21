@extends('app', ['title' => 'Login'])
@section('content')
  <div class="h-screen bg-gray-50 flex items-center justify-center">
    <div class="w-full max-w-lg bg-white shadow-lg rounded-md p-8 space-y-4">
      <h1 class="text-xl font-semibold">Login</h1>
      <form action="{{ route('auth.post-login') }}" method="post" class="space-y-4">
        @csrf
        <div class="space-y-1">
          <label for="email" class="block">Email</label>
          <input type="email" name="email" id="email" class="block w-full border-gray-400 rounded-md px-4 py-2" />
          <label for="password" class="block">Password</label>
          <input type="password" name="password" id="password" class="block w-full border-gray-400 rounded-md px-4 py-2" />
        </div>
        @if($errors->any())
            <h4>{{$errors->first()}}</h4>
        @endif
        <button class="rounded-md px-4 py-2 bg-indigo-600 text-white">Login</button>
      </form>
      <p>Don't have an account?</p>
       <a href="{{route('auth.register')}}"><button class="rounded-md px-4 py-2 bg-indigo-600 text-white">Register</button></a>
    </div>
  </div>
@endsection