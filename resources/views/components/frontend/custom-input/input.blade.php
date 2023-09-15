@props(['id'=> '', 'name'=>'', 'placeholder'=>'', 'class'=>'', 'type'=>''])
  <input id="{{$id}}" type="{{$type}}" placeholder="{{$placeholder}}" name="{{$name}}" class="flex w-full h-12 py-3 px-[18px] outline-none border border-gray-100 shadow-[0px_3px_14px_rgba(23,30,21,0.02)] rounded-md focus:border-primary-500 focus:shadow-[0px_8px_24px_rgba(88,179,43,0.12)] {{$class}}" />
