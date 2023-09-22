<x-app-layout>

    
    <div class="flex flex-row gap-3 justify-center mx-20 w-auto h-auto p-10">

        {{-- side bar profile container --}}
        <div class="flex flex-col justify-start items-start gap-3 h-auto w-[25%] border-2 border-solid relative  py-2  bg-white border-sky-50 drop-shadow-sm">
        <ul>
          
            <li class="w-full h-auto  flex items-center justify-center flex-row gap-5 pr-2 py-2 ml-3 border-2 border-solid border-red-500 mb-2">
                <div class="flex items-center justify-center">
                    <img class=" h-16 w-16 object-contain border-red border-2 border-solid" src="" alt="profile">
                </div>
                <div class="flex flex-col">
                    <span>Alfrancis</span>
                   <span class="text-gray-400 text-sm"> View profile</span>

                </div>
              
            </li>
           <a href="/work-experience"><li class="h-10 flex gap-3 pl-3 items-center w-full "><span><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5  text-gray-700" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd" />
            <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z" />
          </svg></span> Experience</li></a> 


          <a href="/education">
            <li class="h-10 flex gap-3 pl-3 "><span><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5  text-gray-700 " viewBox="0 0 20 20" fill="currentColor">
            <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
          </svg></span> Education</li></a>  

           <a href="/skills"><li class="h-10 flex gap-3 pl-3"><span><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5  text-gray-700" viewBox="0 0 20 20" fill="currentColor">
            <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z" />
            <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm9.707 5.707a1 1 0 00-1.414-1.414L9 12.586l-1.293-1.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
          </svg></span> Skills</li></a> 


           <a href="/language"><li class="h-10 flex gap-3 pl-3"> <span><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5  text-gray-700" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M7 2a1 1 0 011 1v1h3a1 1 0 110 2H9.578a18.87 18.87 0 01-1.724 4.78c.29.354.596.696.914 1.026a1 1 0 11-1.44 1.389c-.188-.196-.373-.396-.554-.6a19.098 19.098 0 01-3.107 3.567 1 1 0 01-1.334-1.49 17.087 17.087 0 003.13-3.733 18.992 18.992 0 01-1.487-2.494 1 1 0 111.79-.89c.234.47.489.928.764 1.372.417-.934.752-1.913.997-2.927H3a1 1 0 110-2h3V3a1 1 0 011-1zm6 6a1 1 0 01.894.553l2.991 5.982a.869.869 0 01.02.037l.99 1.98a1 1 0 11-1.79.895L15.383 16h-4.764l-.724 1.447a1 1 0 11-1.788-.894l.99-1.98.019-.038 2.99-5.982A1 1 0 0113 8zm-1.382 6h2.764L13 11.236 11.618 14z" clip-rule="evenodd" />
          </svg></span>Languages</li></a> 


            <a href="/additional-info"><li class="h-10 flex gap-3 pl-3"> <span><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-700" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M10 2a1 1 0 00-1 1v1a1 1 0 002 0V3a1 1 0 00-1-1zM4 4h3a3 3 0 006 0h3a2 2 0 012 2v9a2 2 0 01-2 2H4a2 2 0 01-2-2V6a2 2 0 012-2zm2.5 7a1.5 1.5 0 100-3 1.5 1.5 0 000 3zm2.45 4a2.5 2.5 0 10-4.9 0h4.9zM12 9a1 1 0 100 2h3a1 1 0 100-2h-3zm-1 4a1 1 0 011-1h2a1 1 0 110 2h-2a1 1 0 01-1-1z" clip-rule="evenodd" />
            </svg></span>Addtional info</li></a>
            <li class="h-10 flex gap-3 pl-3"><span><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
              </svg></span>About me</li>
           <a href="/upload-resume"><li class="h-10 flex gap-3 pl-3"> <span><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M12.586 4.586a2 2 0 112.828 2.828l-3 3a2 2 0 01-2.828 0 1 1 0 00-1.414 1.414 4 4 0 005.656 0l3-3a4 4 0 00-5.656-5.656l-1.5 1.5a1 1 0 101.414 1.414l1.5-1.5zm-5 5a2 2 0 012.828 0 1 1 0 101.414-1.414 4 4 0 00-5.656 0l-3 3a4 4 0 105.656 5.656l1.5-1.5a1 1 0 10-1.414-1.414l-1.5 1.5a2 2 0 11-2.828-2.828l3-3z" clip-rule="evenodd" />
          </svg></span>Upload Resume</li></a> 
           
         
        </ul>
        </div>

        <div class="flex flex-col h-auto w-[70%] border-2  border-solid bg-white border-sky-50 drop-shadow-sm py-2 px-5 resume-container">

            <div class="w-full flex justify-end">
              <a href="{{route('pdf/user-resume')}}"><button class="bg-green-500 hover:bg-green-600 text-white font-semibold font-sans py-2 px-4 rounded-md">Download Resume</button></a>
            </div>
          {{-- profile and contacts container --}}
          
          <div class="flex flex-row h-auto w-full p-3">
            <div class="flex flex-row p-5 mt-5">
              <img class="h-20 w-32" src="" alt="profile">
          </div>

          <div class="flex flex-col px-5 mt-5 border-2 borde-solid border-green-500"> 
          
              <span class="text-lg text-blue-600 font-sans font-semibold">Alfrancis Crasco</span>
              <span class="text-base font-semibold font-sans text-gray-500">Bachelor's, Computer Science/ IT (Oct 2024)</span>
              <span class="text-base font-semibold font-sans text-gray-500">Don Honorio Ventura State University</span>

              <div class="flex flex-row gap-2 justify-center items-center h-auto w-auto mt-1">
                 <span><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                </svg></span> <span class=" text-sm"> (+63) 9366453047 |</span> &nbsp;<span><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                  <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                </svg></span> <span class="text-sm"> onlymapex2@gmail.com |</span> &nbsp; <span><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                </svg></span> <span class="text-sm"> San Fernando, Central Luzon</span>

               
              </div>
             
            
          </div>

        
          </div>
          <hr class="w-full">
              



  {{-- experience container --}}
 
  <div class=" text-start flex flex-row w-full items-center my-4"">
    <span><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5  text-gray-700" viewBox="0 0 20 20" fill="currentColor">
      <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd" />
      <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z" />
    </svg></span>  &nbsp; <span class="text-lg">Experience</span>
  </div>



  <div class="flex flex-row gap-16 ">
    <div class="flex flex-col">
      <span>Sep 2021 - Present</span>
      <span class="text-sm font-sans text-gray-500">2 Years 1 month</span>
    </div>

    <div class="flex flex-col gap-3">
      <span class="text-xl font-sans font-semibold">IT Clerk</span>

      <div class="flex mb-3">
        <span class="font-sans text-lg">ConcentrixPH &nbsp; | </span><span class="text-lg font-sans"> &nbsp; Philippines</span>
      </div>
      
      {{-- industry container --}}
      <div>
        <div class="w-auto flex gap-x-28 flex-row">
          <span class="text-sm text-gray-400">Industry </span> 
          <span class="text-sm" >Call Center / IT-Enabled Services / BPO</span>
        </div>
  
          {{-- specialization container --}}
        <div class="w-auto flex gap-x-20   flex-row">
          <span class="text-sm text-gray-400">Specialization </span> 
          <span class="text-sm" >IT/Computer - Hardware</span>
        </div>
  
            {{-- role container --}}
        <div class="w-auto flex gap-x-[8.6rem] flex-row">
          <span class="text-sm text-gray-400">Role </span> 
          <span class="text-sm" >IT Trainer</span>
        </div>

    {{-- position level container --}}
    <div class="w-auto flex gap-x-20 flex-row">
      <span class="text-sm text-gray-400">Position Level </span> 
      <span class="text-sm" >Fresh Grad / < 1 Year Experienced Employee</span>
    </div>

    {{-- monthly salary container --}}
    <div class="w-auto flex gap-x-16 flex-row">
      <span class="text-sm text-gray-400">Monthly Salary</span> 
      <span class="text-sm" > &nbsp; PHP 12,000</span>
    </div>

  
      </div>
      
      
    </div>
    
  </div>
  <hr class="w-full mt-10">


  {{-- education container --}}

  <div class=" text-start flex flex-row w-full items-center my-4"">
    <span><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5  text-gray-700 " viewBox="0 0 20 20" fill="currentColor">
      <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
    </svg></span>  &nbsp; <span class="text-lg">Education</span>
  </div>



  <div class="flex flex-row gap-[8.2rem] ">
    <div class="flex border-2 border-solid w-20 border-green-500">
      <span class="text-sm font-sans text-gray-500">Oct 2024</span>
    </div>

    <div class="flex flex-col gap-3">
      <span class="text-xl font-sans font-semibold">Don Honorio Ventura State University</span>

      <div class="flex mb-3 flex-wrap">
        <span class="font-sans text-lg">Bachelor's/College Degree in Computer Science/  </span> <span class="text-lg">Information Technology Information Technology &nbsp; |</span><span class="text-lg font-sans"> &nbsp; Philippines</span>
      </div>
      
      {{-- industry container --}}
      <div>
        <div class="w-auto flex gap-x-32 flex-row">
          <span class="text-sm text-gray-400">Major </span> 
          <span class="text-sm" >Programming</span>
        </div>
  
          {{-- specialization container --}}
        <div class="w-auto flex gap-x-32   flex-row">
          <span class="text-sm text-gray-400">CGPA </span> 
          <span class="text-sm" >1.57 / 100.0</span>
        </div>
  
          


      </div>
      
      
    </div>
    
  </div>
  <hr class="w-full mt-10">


   {{-- education container --}}

   <div class=" text-start flex flex-row w-full items-center my-4"">
    <span><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
      <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
    </svg></span>  &nbsp; <span class="text-lg">About Me</span>
  </div>



  <div>
    <div class="flex flex-row gap-x-28 gap-y-10 ">

      {{-- age container --}}
      <div class="flex border-2 border-solid w-20 border-green-500">
        <span class="text-sm font-sans text-gray-500">Age</span>
      </div>
  
      <div>
        <span class="text-sm text-gray-400">21 years </span> 
      </div>

  </div>


  

    {{-- <div class="flex flex-col gap-3">
      <span class="text-xl font-sans font-semibold">Don Honorio Ventura State University</span>

      <div class="flex mb-3 flex-wrap">
        <span class="font-sans text-lg">Bachelor's/College Degree in Computer Science/  </span> <span class="text-lg">Information Technology Information Technology &nbsp; |</span><span class="text-lg font-sans"> &nbsp; Philippines</span>
      </div>
       --}}
      {{-- industry container --}}
      {{-- <div>
        <div class="w-auto flex gap-x-32 flex-row">
          <span class="text-sm text-gray-400">Major </span> 
          <span class="text-sm" >Programming</span>
        </div> --}}
  
          {{-- specialization container --}}
        {{-- <div class="w-auto flex gap-x-32   flex-row">
          <span class="text-sm text-gray-400">CGPA </span> 
          <span class="text-sm" >1.57 / 100.0</span>
        </div>
  
          


      </div>
       --}}
      
    </div>


    <div class="mt-2">
      <div class="flex flex-row gap-x-28 gap-y-10 ">

      {{-- age container --}}
      <div class="flex border-2 border-solid w-20 border-green-500">
        <span class="text-sm font-sans text-gray-500">Address</span>
      </div>
  
      <div>
        <span class="text-sm text-gray-400">Blk 1A Lot 33, Sunshine Homes, Brgy.Magliman, 2000, San Fernando, Central Luzon, Philippines </span> 
      </div>
    
     
  </div>

  

  
  
</div>

<div class="mt-2">
  <div class="flex flex-row gap-x-28 gap-y-10 ">

  {{-- age container --}}
  <div class="flex border-2 border-solid w-20 border-green-500">
    <span class="text-sm font-sans text-gray-500">Nationality</span>
  </div>

  <div>
    <span class="text-sm text-gray-400">Philippines </span> 
  </div>

 
</div>





</div>



<hr class="w-full mt-10">



 
 




       </div>

        
           
           
    </div>

      


</x-app-layout>