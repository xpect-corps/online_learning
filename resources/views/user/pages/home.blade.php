@extends('user.layouts.app')

@section('content')
    User Home




    <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
        href="{{ route('logout') }}" onclick="event.preventDefault();
  document.getElementById('logout-form').submit();">
        <span>Log out</span>
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
    @push('scripts')
        <script></script>
    @endpush
@endsection
