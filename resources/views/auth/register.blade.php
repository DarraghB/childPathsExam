@extends('app', ['title' => 'Register'])
@section('content')
  <div class="h-screen bg-gray-50 flex items-center justify-center">
    <div class="w-full max-w-lg bg-white shadow-lg rounded-md p-8 space-y-4">
      <h1 class="text-xl font-semibold">Register</h1>
      <form action="{{ route('auth.register-create') }}" method="post" class="space-y-4">
        @csrf
        <div class="space-y-1">
           <label for="name" class="block">Name</label>
          <input type="text" name="name" id="name" class="block w-full border-gray-400 rounded-md px-4 py-2" />
          <label for="email" class="block">Email</label>
          <input type="email" name="email" id="email" class="block w-full border-gray-400 rounded-md px-4 py-2" />
           <label for="password" class="block">Password</label>
          <input type="password" name="password" id="password" class="block w-full border-gray-400 rounded-md px-4 py-2" />
        </div>
        <button class="rounded-md px-4 py-2 bg-indigo-600 text-white">register</button>
      </form>
      <p>Have an account?</p>
       <a href="{{route('auth.login')}}"><button class="rounded-md px-4 py-2 bg-indigo-600 text-white">Login</button></a>
    </div>
  </div>
@endsection