<x-app-layout>
  @if(session('login_success'))
            <div class="alert alert-success">
                {{ session('login_success') }}
            </div>
        @endif
       
  {{-- <body class="bg-white-400">
    <nav class="text-white p-5 bg-blue-500 shadow md:flex md:items-center md:justify-between">
      <div class="flex justify-between items-center ">
        <span class="text-2xl font-[Poppins] cursor-pointer">
          <img class="h-10 inline"
            src="images/govra_logo.png">
          GOVRA
        </span>
  
        <span class="text-3xl cursor-pointer mx-2 md:hidden block">
          <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
        </span>
      </div>
  
      <ul class="md:flex md:items-center z-[100] md:z-auto md:static absolute bg-blue-500  w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500 text-center">
  
          {{-- <span><img class="h-10 inline"
              src="images/govra_logo.png"></span>
          <li class="mx-4 my-6 md:my-0">
          <a href="#" class="text-white text-xl hover:text-white duration-500">GOVRA</a> --}}
         
          
  
        {{-- <li class="mx-4 my-6 md:my-0">
          <a href="#" class=" text-white text-xl hover:text-slate-950 duration-500">HOME</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
          <a href="#" class="text-white text-xl hover:text-slate-950 duration-500">FIND JOBS</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
          <a href="#" class="text-white text-xl hover:text-slate-950 duration-500">GOVERNMENT</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
          <a href="#" class="text-white text-xl hover:text-slate-950 duration-500">CONTACT</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
          <a href="#" class=" text-white text-xl hover:text-slate-950 duration-500">ABOUT</a>
        </li>
        <li class="ml-4 my-6 md:my-0">
          <a href="#" class="text-white text-xl hover:text-slate-950 duration-500">LOGIN</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
        
  
        <button class="bg-cyan-400 text-white font-[Poppins] duration-500 px-6 py-2 mx-4 hover:bg-cyan-500 rounded ">
          Sign up Free
        </button>
        </li>
      </ul> --}}
  @include('components/nav')
      @include('components/highlights-directory-nav')
  
  
  
  <div class="body bg-gray-100">
      <div class="flex justify-center items-center body-container flex-col">
  
        <div class="w-[90%] mt-2 h-auto ">
         <span class="font-sans">Recommended based on your preferences</span> 
          </div>
  
  
          <div class="flex flex-col justify-center w-[90%] items-center mt-2 p-5 gap-3 bg-white rounded-sm shadow-sm">
            <img class="h-16 w-16" src="{{URL('assets/images/list.png')}}" alt="list">
            <span>Sign up today to discover jobs picked just for you</span>
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