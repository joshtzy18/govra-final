<div class=" flex flex-col w-[95%] mt-2 h-auto mb-2 shadow-sm py-2 rounded-lg border-solid border-2 border-sky-50 drop-shadow-md  ">

    <span class="text-white w-full bg-red-600 h-auto text-lg items-center flex-wrap text-start px-3 py-1 font-sans font-bold xl:text-start xl:h-11 xl:justify-center xl:items-center xl:text-lg xl:py-2">{{$nudetails->title}}</span>
    <span class="mt-2 font-sans text-gray-400 text-sm px-5">Published: {{ $nudetails->getFormattedDate()}} </span>
    <span class="mt-2 font-sans text-sm text-justify h-auto px-5 w-[98%] break-words">{!! $nudetails->content !!}</span>
   
   
  </div>