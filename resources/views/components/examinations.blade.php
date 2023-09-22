<h4 class=" pl-3  text-cyan-500 text-lg font-sans max-w-full">
       
    {{-- {{$announcement->title}} --}}
{{--     
   {{$exams->title}} --}}

   <a href="{!! url('/examination-clicked', 
 $exams->id) !!}" class="mt-2 font-normal font-sans text-base text-justify pr-2 py-2 text-blue-400 before:content-['\226B'] before:text-base before:mr-1 before:text-gray-400">{!! $exams->title !!}</a>
<hr class="mt-2">
        
    
    </h4>