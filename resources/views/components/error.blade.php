 @props(['name'])
 @error($name)
     <label {{$attributes->merge(['class'=>'text-danger'])}}>{{$message}}</label>
 @enderror