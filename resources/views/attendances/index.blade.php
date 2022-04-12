@extends('layouts.layout')

@section('content')
@if (session('fls_msg'))
<div class="p-4 m-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
  {{ session('fls_msg') }}
</div>
@endif
<div class="grid grid-cols-2">
  <div class="current-time col-span-1">
    <div class="current-time__inner flex justify-center border-solid border-2 rounded border-gray-600 m-2 p-7">
      <div id="cloce" class="text-7xl"></div>
    </div>
  </div>
  <div class="current-time col-span-1">
    <div class="current-time__inner flex flex-wrap border-solid border-2 rounded border-gray-600 m-2 p-7">
      <form action="{{ route('attendances.jobIn') }}" method="post">
        @csrf
        <button type="submit" {{ $state['job-in'] ? 'disabled' : '' }} class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">出勤</button>
      </form>
      <form action="{{ route('attendances.jobOut') }}" method="post">
        @csrf
        <button type="submit" {{ $state['job-out'] ? 'disabled' : '' }} class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">退勤</button>
      </form>

    </div>
  </div>
</div>

<script>
  function twoDigit(num) {
    let ret;
    if (num < 10)
      ret = "0" + num;
    else
      ret = num;
    return ret;
  }

  function cloce() {
    let nowTime = new Date();
    let nowHour = twoDigit(nowTime.getHours());
    let nowMin = twoDigit(nowTime.getMinutes());
    let nowSec = twoDigit(nowTime.getSeconds());
    let msg = nowHour + ":" + nowMin + ":" + nowSec;
    document.getElementById("cloce").innerHTML = msg;
  }
  setInterval('cloce()', 1000);
</script>
@endsection