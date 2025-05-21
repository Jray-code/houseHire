@props(['active'=>true])
<a class="{{$active ? 'nav-link bg-dark text-light':'nav-link'}}" {{$attributes}}>{{$slot}}</a>