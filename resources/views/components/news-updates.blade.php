<div class=" flex flex-col w-[95%] mt-2 border-solid border-2 h-auto mb-2 border-sky-50 shadow-md py-2 rounded-lg  ">
    <span class="mt-1 font-sans font-bold text-base text-justify uppercase px-2 w-[95%]">{{$items->title}}</span>
    <span class="mt-2 font-sans text-gray-400 text-sm px-2">Published: {{$items->getFormattedDate()}}</span>
    <span class="mt-2 font-sans text-sm text-justify h-auto px-2 w-[98%] break-words">{!! $items->content !!}</span>
    <a href="{{url('/news-updates-clicked', $items->id )}}" class="mt-2 font-semibold font-sans text-base text-justify px-2 py-2 text-blue-400">Read more: {!! $items->links !!}</a>
   
  </div>