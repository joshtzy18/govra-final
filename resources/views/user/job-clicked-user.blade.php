
   

   
  <x-app-layout>
    @include('components/nav-user')
    @include('components/highlights-directory-nav')

  <title>{{$details->name}}</title>
  {{-- find job container --}}
  <div class="flex flex-col justify-center items-center mt-1 h-auto max-w-screen-sm sm:max-w-screen-md md:max-w-screen-lg lg:max-w-screen-xl xl:max-w-screen-2xl">
    
   
    <x-government-info :details="$details">
              
                 
                        
    </x-government-info>
   
       
    
    
    


   
       
      

   
   
  </div>

  </x-app-layout>
  
   
 