<x-app-layout>

    
    <div class="flex flex-row gap-3 justify-center mx-20 w-auto h-auto p-10">

        {{-- side bar profile container --}}
        <div class="flex flex-col justify-start items-start gap-3 h-auto w-[25%] border-2 border-solid relative  py-2  bg-white border-sky-50 drop-shadow-sm">
        <ul>
          
            <a href="/myjobprofile">
              <li class="w-full h-auto  flex items-center justify-center flex-row gap-5 pr-2 py-2 ml-3 border-2 border-solid border-red-500 mb-2">
                <div class="flex items-center justify-center">
                    <img class=" h-16 w-16 object-contain border-red border-2 border-solid" src="" alt="profile">
                </div>
                <div class="flex flex-col">
                    <span>Alfrancis</span>
                   <span class="text-gray-400 text-sm"> View profile</span>

                </div>
              
            </li>
            </a>
          
           <a href="/work-experience">
            <li class="h-10 flex gap-3 pl-3 items-center w-full "><span><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5  text-gray-700" viewBox="0 0 20 20" fill="currentColor">
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
          
          
            <a href="/langauge"><li class="h-10 flex gap-3 pl-3"> <span><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5  text-gray-700" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M7 2a1 1 0 011 1v1h3a1 1 0 110 2H9.578a18.87 18.87 0 01-1.724 4.78c.29.354.596.696.914 1.026a1 1 0 11-1.44 1.389c-.188-.196-.373-.396-.554-.6a19.098 19.098 0 01-3.107 3.567 1 1 0 01-1.334-1.49 17.087 17.087 0 003.13-3.733 18.992 18.992 0 01-1.487-2.494 1 1 0 111.79-.89c.234.47.489.928.764 1.372.417-.934.752-1.913.997-2.927H3a1 1 0 110-2h3V3a1 1 0 011-1zm6 6a1 1 0 01.894.553l2.991 5.982a.869.869 0 01.02.037l.99 1.98a1 1 0 11-1.79.895L15.383 16h-4.764l-.724 1.447a1 1 0 11-1.788-.894l.99-1.98.019-.038 2.99-5.982A1 1 0 0113 8zm-1.382 6h2.764L13 11.236 11.618 14z" clip-rule="evenodd" />
            </svg></span>Languages</li></a>


            <a href="/additional-info"><li class="h-10 flex gap-3 pl-3"> <span><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-700" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M10 2a1 1 0 00-1 1v1a1 1 0 002 0V3a1 1 0 00-1-1zM4 4h3a3 3 0 006 0h3a2 2 0 012 2v9a2 2 0 01-2 2H4a2 2 0 01-2-2V6a2 2 0 012-2zm2.5 7a1.5 1.5 0 100-3 1.5 1.5 0 000 3zm2.45 4a2.5 2.5 0 10-4.9 0h4.9zM12 9a1 1 0 100 2h3a1 1 0 100-2h-3zm-1 4a1 1 0 011-1h2a1 1 0 110 2h-2a1 1 0 01-1-1z" clip-rule="evenodd" />
            </svg></span>Addtional info</li></a>
            <li class="h-10 flex gap-3 pl-3"><span><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
              </svg></span>About me</li>
            <li class="h-10 flex gap-3 pl-3"> <span><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M12.586 4.586a2 2 0 112.828 2.828l-3 3a2 2 0 01-2.828 0 1 1 0 00-1.414 1.414 4 4 0 005.656 0l3-3a4 4 0 00-5.656-5.656l-1.5 1.5a1 1 0 101.414 1.414l1.5-1.5zm-5 5a2 2 0 012.828 0 1 1 0 101.414-1.414 4 4 0 00-5.656 0l-3 3a4 4 0 105.656 5.656l1.5-1.5a1 1 0 10-1.414-1.414l-1.5 1.5a2 2 0 11-2.828-2.828l3-3z" clip-rule="evenodd" />
              </svg></span>Upload Resume</li>
           
         
        </ul>
        </div>

        <div class="flex flex-col h-auto w-[70%] border-2  border-solid bg-white border-sky-50 drop-shadow-sm py-2 px-5">

        
              



  {{-- experience container --}}
 
  
  

  
 
  <div class="mt-2">  <button class="flex flex-row float-right"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
  </svg>
  </span>Add</button></div>
 

  

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
    <div class="flex flex-row h-full justify-start items-start gap-2 float-right "><button><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-6">
      <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
    </svg>
    </button>
  
    <button> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
      <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
    </svg></button>
  </div>
    
  </div>

 

  
  <hr class="w-full mt-10">


  
      
     


   

  

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

        
           
           
    </div>

      


</x-app-layout>