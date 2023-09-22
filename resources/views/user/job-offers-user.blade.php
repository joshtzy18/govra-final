

<x-app-layout>
    @include('components/nav')
    @include('components/highlights-directory-nav')
  
       
    <div class="h-auto w-full max-w-screen-sm sm:max-w-screen-md md:max-w-screen-lg lg:max-w-screen-xl xl:max-w-screen-2xl flex flex-col gap-6 mt-5 py-5">  
       
        @foreach($posts as $post)
       
            <x-government-post :post="$post">
              
                 
                        
            </x-government-post>
      
            @endforeach
         
        </div>
   
      
 
  
   
</x-app-layout>

   

    





