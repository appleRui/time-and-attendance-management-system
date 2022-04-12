<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <title>Document</title>
</head>

<body>
  <nav class="bg-white bg-gray-400 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-800">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
      <a href="/" class="flex items-center">
        <span class="self-center text-xl font-semibold whitespace-nowrap text-white">勤怠管理システム</span>
      </a>
      <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
        <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
          <li>
            <a class="text-white" href="/">ホーム</a>
          </li>
          <li>
            <form method="POST" action="http://localhost:8000/logout">
              @csrf
              <a class="text-white" href="/logout" onclick="event.preventDefault();this.closest('form').submit();">ログアウト</a>
            </form>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container mx-auto mb-5">
    @yield('content')
  </div>
</body>

</html>