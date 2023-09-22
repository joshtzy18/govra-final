<x-app-layout>

  
  @include('components/nav')
      @include('components/highlights-directory-nav')
  
  
  
  <div class="body bg-gray-100">
      <div class="flex justify-center items-center body-container flex-col">
  
      
  
  
          <div class="flex flex-row justify-start w-[90%] items-start mt-2 py-5 px-7 gap-3 bg-white rounded-sm shadow-sm">
              <div class="flex flex-col w-[50%] "> <span class="flex justify-start">Welcome Alfrancis
              </span>
              <span class="flex justify-start text-gray-400">You’re all up to date. &nbsp;  <span class="text-blue-500">View profile</span>
              </span>
          </div>

          <div class="flex flex-row w-[50%] justify-evenly items-center py-3 ">
              <div class="flex">  <span><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-5 text-blue-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                </svg></span>
              <span class=" hover:text-blue-500 underline underline-offset-4 ">
                  Saved jobs</span>
              </div>
            
              <div class="flex">  <span><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg></span>
              <span class=" hover:text-blue-500 underline underline-offset-4 ">
                  Job application</span>
              </div>


              <div class="flex">  <span><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                </svg></span>
              <span class=" hover:text-blue-500 underline underline-offset-4 ">
                  Saved jobs</span>
              </div>

          </div>
             
          </div>
  
          <div class=" flex w-[90%] justify-between">
            <span class="font-sans text-base py-5 text-start  ">New posted jobs</span>
            <span class="font-sans text-base py-5 text-start xl:block md:hidden text-blue-500">Show all</span>
          </div>
  
  
       {{-- no.1 --}}
      <div class="h-auto w-[90%]  whitespace-nowrap   py-3 flex flex-row gap-3 horizontal-scroll">
        <div class="h-auto w-[50%] inline-block  mt-1 bg-sky-100 my-2 border-solid border-l-4 rounded-md border-blue-600">
          <div class="h-auto w-full flex-col job-container border-sky-50 border-solid border-2 drop-shadow-md bg-sky-50 ">
         
  
            <div class="content-container w-full h-auto flex flex-col justify-start ">
              <img src="" alt="" class="h-20 w-20 object-cover ml-7 my-2 justify-start">
             
              <span class="job-position font-sans text-md ml-7 mt-2   ">Position</span>
  
              <span class="government-name font-sans text-md ml-7   ">Agency Name</span>
  
  
              <span class="location font-sans text-md ml-7 mt-3 ">Address</span>
   
              
              <span class="time-duration font-sans ml-7 mb-3 text-md mt-6"> 9h</span>
            </div>
  
  
  
          </div>
          
        
  
      </div>
  
  
      {{-- no2 --}}
  
  
      <div class="h-auto w-[50%]  mt-1 bg-sky-100 inline-block my-2 border-solid border-l-4 rounded-md border-blue-600">
        <div class="h-auto w-full flex-col job-container border-sky-50 border-solid border-2 drop-shadow-md bg-sky-50 ">
       
  
          <div class="content-container w-full h-auto flex flex-col justify-start ">
            <img src="" alt="" class="h-20 w-20 object-cover ml-7 my-2 justify-start">
           
            <span class="job-position font-sans text-md ml-7 mt-2   ">Position</span>
  
            <span class="government-name font-sans text-md ml-7   ">Agency Name</span>
  
  
            <span class="location font-sans text-md ml-7 mt-3 ">Address</span>
  
            
            <span class="time-duration font-sans ml-7 mb-3 text-md mt-6"> 9h</span>
          </div>
  
  
  
        </div>
        
      
  
    </div>
  
    {{-- no3 --}}
  
    <div class="h-auto w-[50%]  mt-1 bg-sky-100 inline-block my-2 border-solid border-l-4 rounded-md border-blue-600">
      <div class="h-auto w-full flex-col job-container border-sky-50 border-solid border-2 drop-shadow-md bg-sky-50 ">
     
  
        <div class="content-container w-full h-auto flex flex-col justify-start ">
          <img src="" alt="" class="h-20 w-20 object-cover ml-7 my-2 justify-start">
         
          <span class="job-position font-sans text-md ml-7 mt-2   ">Position</span>
  
          <span class="government-name font-sans text-md ml-7   ">Agency Name</span>
  
  
          <span class="location font-sans text-md ml-7 mt-3 ">Address</span>
  
          
          <span class="time-duration font-sans ml-7 mb-3 text-md mt-6"> 9h</span>
        </div>
  
  
  
      </div>
      
    
  
  </div>
  
  {{-- no.4 --}}
  
  <div class="h-auto w-[50%]  mt-1 bg-sky-100 inline-block my-2 border-solid border-l-4 rounded-md border-blue-600">
    <div class="h-auto w-full flex-col job-container border-sky-50 border-solid border-2 drop-shadow-md bg-sky-50 ">
   
  
      <div class="content-container w-full h-auto flex flex-col justify-start ">
        <img src="" alt="" class="h-20 w-20 object-cover ml-7 my-2 justify-start">
       
        <span class="job-position font-sans text-md ml-7 mt-2   ">Position</span>
  
        <span class="government-name font-sans text-md ml-7   ">Agency Name</span>
  
  
        <span class="location font-sans text-md ml-7 mt-3 ">Address</span>
  
        
        <span class="time-duration font-sans ml-7 mb-3 text-md mt-6"> 9h</span>
      </div>
  
  
  
    </div>
    
  
  
  
  </div>
  
  
  
      
    </div>
  
    <div class="w-[90%] text-start py-3     ">
  <span class="xl:hidden">Show all</span>
  
  {{-- save jobs --}}

  <span>Saved jobs</span>
  
  <div class=" flex w-full  flex-row  gap-3 h-auto py-4 justify-between ">
      <div class="h-auto w-[50%]  mt-1 bg-sky-100 inline-block my-2 border-solid border-l-4 rounded-md border-blue-600">
          <div class="h-auto w-full flex-col job-container border-sky-50 border-solid border-2 drop-shadow-md bg-sky-50 ">
         
        
            <div class="content-container w-full h-auto flex flex-col justify-start ">
              <img src="" alt="" class="h-20 w-20 object-cover ml-7 my-2 justify-start">
             
              <span class="job-position font-sans text-md ml-7 mt-2   ">Position</span>
        
              <span class="government-name font-sans text-md ml-7   ">Agency Name</span>
        
        
              <span class="location font-sans text-md ml-7 mt-3 ">Address</span>
        
              
              <span class="time-duration font-sans ml-7 mb-3 text-md mt-6"> 9h</span>
            </div>
        
        
        
          </div>
          
        
        
        
        </div>

        <div class="h-auto w-[50%]  mt-1 bg-sky-100 inline-block my-2 border-solid border-l-4 rounded-md border-blue-600">
          <div class="h-auto w-full flex-col job-container border-sky-50 border-solid border-2 drop-shadow-md bg-sky-50 ">
         
        
            <div class="content-container w-full h-auto flex flex-col justify-start ">
              <img src="" alt="" class="h-20 w-20 object-cover ml-7 my-2 justify-start">
             
              <span class="job-position font-sans text-md ml-7 mt-2   ">Position</span>
        
              <span class="government-name font-sans text-md ml-7   ">Agency Name</span>
        
        
              <span class="location font-sans text-md ml-7 mt-3 ">Address</span>
        
              
              <span class="time-duration font-sans ml-7 mb-3 text-md mt-6"> 9h</span>
            </div>
        
        
        
          </div>
          
        
        
        
        </div>

        <div class="h-auto w-[50%]  mt-1 bg-sky-100 inline-block my-2 border-solid border-l-4 rounded-md border-blue-600">
          <div class="h-auto w-full flex-col job-container border-sky-50 border-solid border-2 drop-shadow-md bg-sky-50 ">
         
        
            <div class="content-container w-full h-auto flex flex-col justify-start ">
              <img src="" alt="" class="h-20 w-20 object-cover ml-7 my-2 justify-start">
             
              <span class="job-position font-sans text-md ml-7 mt-2   ">Position</span>
        
              <span class="government-name font-sans text-md ml-7   ">Agency Name</span>
        
        
              <span class="location font-sans text-md ml-7 mt-3 ">Address</span>
        
              
              <span class="time-duration font-sans ml-7 mb-3 text-md mt-6"> 9h</span>
            </div>
        
        
        
          </div>
          
        
        
        
        </div>

        <div class="h-auto w-[50%]  mt-1 bg-sky-100 inline-block my-2 border-solid border-l-4 rounded-md border-blue-600">
          <div class="h-auto w-full flex-col job-container border-sky-50 border-solid border-2 drop-shadow-md bg-sky-50 ">
         
        
            <div class="content-container w-full h-auto flex flex-col justify-start ">
              <img src="" alt="" class="h-20 w-20 object-cover ml-7 my-2 justify-start">
             
              <span class="job-position font-sans text-md ml-7 mt-2   ">Position</span>
        
              <span class="government-name font-sans text-md ml-7   ">Agency Name</span>
        
        
              <span class="location font-sans text-md ml-7 mt-3 ">Address</span>
        
              
              <span class="time-duration font-sans ml-7 mb-3 text-md mt-6"> 9h</span>
            </div>
        
        
        
          </div>
          
        
        
        
        </div>



  </div>


  {{-- top employers container --}}
  <span class=" font-sans">Top government agency</span>
  
  <div class="w-full mt-2  flex justify-center items-center">
    <div class="border-2 border-solid border-sky-50 bg-white w-[85%] rounded-md h-auto flex flex-wrap gap-x-8 py-8 px-3 ">
      <img class="w-40 h-24 object-contain p-2 " src="{{URL('assets/images/government-logo/DepEd.svg')}}" alt="DEPED">
      <img class="w-40 h-24 object-contain p-2 " src="{{URL('assets/images/government-logo/DepEd.svg')}}" alt="DEPED">
      <img class="w-40 h-24 object-contain p-2 " src="{{URL('assets/images/government-logo/DepEd.svg')}}" alt="DEPED">
      <img class="w-40 h-24 object-contain p-2 " src="{{URL('assets/images/government-logo/DepEd.svg')}}" alt="DEPED">
      <img class="w-40 h-24 object-contain p-2 " src="{{URL('assets/images/government-logo/DepEd.svg')}}" alt="DEPED">
      <img class="w-40 h-24 object-contain p-2 " src="{{URL('assets/images/government-logo/DepEd.svg')}}" alt="DEPED">
      <img class="w-40 h-24 object-contain p-2 " src="{{URL('assets/images/government-logo/DepEd.svg')}}" alt="DEPED">
      <img class="w-40 h-24 object-contain p-2 " src="{{URL('assets/images/government-logo/DepEd.svg')}}" alt="DEPED">
      <img class="w-40 h-24 object-contain p-2 " src="{{URL('assets/images/government-logo/DepEd.svg')}}" alt="DEPED">
      <img class="w-40 h-24 object-contain p-2 " src="{{URL('assets/images/government-logo/DepEd.svg')}}" alt="DEPED">
      <img class="w-40 h-24 object-contain p-2 " src="{{URL('assets/images/government-logo/DepEd.svg')}}" alt="DEPED">
      <img class="w-40 h-24 object-contain p-2 " src="{{URL('assets/images/government-logo/DepEd.svg')}}" alt="DEPED">
      <img class="w-40 h-24 object-contain p-2 " src="{{URL('assets/images/government-logo/DepEd.svg')}}" alt="DEPED">
      <img class="w-40 h-24 object-contain p-2 " src="{{URL('assets/images/government-logo/DepEd.svg')}}" alt="DEPED">
      <img class="w-40 h-24 object-contain p-2 " src="{{URL('assets/images/government-logo/DepEd.svg')}}" alt="DEPED">
      <img class="w-40 h-24 object-contain p-2 " src="{{URL('assets/images/government-logo/DepEd.svg')}}" alt="DEPED">
      <img class="w-40 h-24 object-contain p-2 " src="{{URL('assets/images/government-logo/DepEd.svg')}}" alt="DEPED">
      <img class="w-40 h-24 object-contain p-2 " src="{{URL('assets/images/government-logo/DepEd.svg')}}" alt="DEPED">
      <img class="w-40 h-24 object-contain p-2 " src="{{URL('assets/images/government-logo/DepEd.svg')}}" alt="DEPED">
      <img class="w-40 h-24 object-contain p-2 " src="{{URL('assets/images/government-logo/DepEd.svg')}}" alt="DEPED">
      <img class="w-40 h-24 object-contain p-2 " src="{{URL('assets/images/government-logo/DepEd.svg')}}" alt="DEPED">
      <img class="w-40 h-24 object-contain p-2 " src="{{URL('assets/images/government-logo/DepEd.svg')}}" alt="DEPED">
      <img class="w-40 h-24 object-contain p-2 " src="{{URL('assets/images/government-logo/DepEd.svg')}}" alt="DEPED">
      <img class="w-40 h-24 object-contain p-2 " src="{{URL('assets/images/government-logo/DepEd.svg')}}" alt="DEPED">
      
    </div>
         
  </div>
  
        
  
      
    </div>
  
    <button class="text-center py-2 px-5 my-2 border-2 border-solid border-cyan-400 rounded-sm hover:bg-blue-200 text-blue-500">Show more</button>
  
  
        {{-- no.1 job --}}
        {{-- <div class="h-auto w-[90%]  mt-3 bg-sky-100 flex my-2 border-solid border-l-4 rounded-md border-blue-600">
          <div class="h-auto w-full flex-col job-container border-sky-50 border-solid border-2 drop-shadow-md bg-sky-50 ">
            <div class="banner-container py-5 items-center w-full ">
            <div class="h-[6rem] border-2 banner w-full">
            </div>
            </div>
  
            <div class="content-container w-full h-auto flex flex-col justify-start ">
              <img src="" alt="" class="h-20 w-20 object-cover ml-7 my-2 justify-start">
             
              <span class="job-position font-sans text-md ml-7 mt-5   ">DEPED</span>
  
              <span class="government-name font-sans text-md ml-7   ">DEPED</span>
  
  
              <span class="location font-sans text-md ml-7 mt-5 ">DEPED</span>
  
              <div class="job-details mt-3 ">
              <span class="location font-sans text-md ml-7  ">DEPED</span>
  
              </div>
              <span class="time-duration font-sans ml-7 mb-3 text-md mt-6"> 9h</span>
            </div>
  
  
  
          </div>
          
        
  
      </div> --}}
  
      {{-- no2 --}}
  
      {{-- <div class="h-auto w-[90%]  mt-3 bg-sky-100 flex my-2 border-solid border-l-4 rounded-md border-blue-600">
        <div class="h-auto w-full flex-col job-container border-sky-50 border-solid border-2 drop-shadow-md bg-sky-50 ">
          <div class="banner-container py-5 items-center w-full ">
          <div class="h-[6rem] border-2 banner w-full">
          </div>
          </div>
  
          <div class="content-container w-full h-auto flex flex-col justify-start ">
            <img src="" alt="" class="h-20 w-20 object-cover ml-7 my-2 justify-start">
           
            <span class="job-position font-sans text-md ml-7 mt-5   ">DEPED</span>
  
            <span class="government-name font-sans text-md ml-7   ">DEPED</span>
  
  
            <span class="location font-sans text-md ml-7 mt-5 ">DEPED</span>
  
            <div class="job-details mt-3 ">
            <span class="location font-sans text-md ml-7  ">DEPED</span>
  
            </div>
            <span class="time-duration font-sans ml-7 mb-3 text-md mt-6"> 9h</span>
          </div>
  
  
  
        </div>
        
      
  
    </div> --}}
  
    
      </div>
  
  
      
    </div>
  
    
   
  
    <script>
      function Menu(e){
        let list = document.querySelector('ul');
        e.name === 'menu' ? (e.name = "close",list.classList.add('top-[80px]') , list.classList.add('opacity-100')) :( e.name = "menu" ,list.classList.remove('top-[80px]'),list.classList.remove('opacity-100'))
      }
    </script>
  
      <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
      ></script>
      <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
      ></script>
  
      <div id="root"></div>
      <script type="module" src="/resources/main.jsx"></script>
  
     
   
  </x-app-layout>