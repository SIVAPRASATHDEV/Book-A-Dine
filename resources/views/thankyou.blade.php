<link rel="stylesheet" href="{{asset('/css/thankyou.css')}}">
<x-guest-layout>
  <div class="thank ">
    <h1>Thankyou {{ Auth::user()->name }} ! </h1>
    <p>You Reservation is Ready</p>
    <span>go to <a href="/"> Home </a></span>
  </div>
</x-guest-layout>