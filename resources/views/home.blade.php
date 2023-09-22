<x-app-layout>

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

    
<h2 class=""></h2>
    </ul>
  </nav>
<div class=" flex justify w-[100] h-[100] mt-8">
   
    <img class=" w-65 h-45 ml-60" src="assets/images/csc logo.png" alt="logo">
    <div class=" border-solid border-8 border-black w-[800px] h-[300px] mt-40 ml-60">
        <h1 class="font-sans md:font-serif mt-5 ml-[100px] flex justify-center font-semibold text-[30px] ">Welcome to the GOVra</h1>
        <h2 class="break-all mr-[50px] mt-5 ml-[100px]">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique veniam, delectus aperiam, illum possimus dicta minima quae molestiae aliquam velit soluta, vero ipsa officia ex illo voluptatem quisquam suscipit temporibus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi aut dolores necessitatibus? Ea corrupti reiciendis harum cupiditate blanditiis obcaecati ab, fugit odit unde voluptates! Architecto quo atque eos officiis veniam.</h2>
      
    </div>
  </div>

  <div class=" flex flex-column mx-20 w-[1800px] h-[550px] mt-8 border-none border-8 ">

    <div class="flex justify-center flex-column border-solid border-8 border-black w-[1200px] h-[450px] "><h1 class=" mr-[100px] font-sans md:font-serif mt-5 ml-[100px] flex justify-center font-semibold text-[30px] ">Updates</h1> </div>
   
    
    
    <div class=" ml-[10px] justify-center  border-none border-8 w-[1000px] h-[500px] ">
      <div class="justify-center border-solid border-8 border-black w-[700px] h-[220px]  "><h1 class="font-sans md:font-serif mt-5 ml-[100px] flex justify-center font-semibold text-[30px] ">Announcement</h1>
      
      </div>
      <div class="justify-center border-solid border-8 border-black w-[700px] h-[220px] mt-[10px] "><h1 class="font-sans md:font-serif mt-5 ml-[100px] flex justify-center font-semibold text-[30px] ">Examination Advisories</h1></div>
    </div>
   
  </div>

  <div class=" flex flex-column mx-20 w-[1678px] h-[605px] border-solid border-8 border-black">

    
    <div class=" ml-[10px] justify-center  border-none border-black  border-8 w-[1000px] h-[570px] ">
     <div class="mt-1 justify-center border-solid border-8 border-black w-[1000px] h-[285px]  "><h1 class="font-sans md:font-serif mt-5 flex justify-center font-semibold text-[45px] ">START FINDING YOUR DREAM JOB</h1>
     <H2 class="text-center text-[25px]">Explore all the most exciting job roles based on your career!</H2></div>
     <div class="justify-center border- border-8 border-black w-[1000px] h-[285px] mt-[10px] "><h1 class="font-sans md:font-serif mt-5 ml-[100px] flex justify-center font-semibold text-[30px] ">
      <div class="relative w-[720px] mr-[130px]  ">
      <form>
       <div class="mt-20 flex justify-between overflow-hidden rounded-md bg-white shadow shadow-black/100">
         <input type="text" class="block w-full flex-1 py-2 px-3 focus:outline-none" placeholder="Search Location" />
         <span class="m-1 inline-flex cursor-pointer items-center rounded-md bg-blue-500 px-2 py-2 hover:bg-blue-800">
           <svg class="text-white" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="M21.07 16.83L19 14.71a3.08 3.08 0 0 0-3.4-.57l-.9-.9a7 7 0 1 0-1.41 1.41l.89.89a3 3 0 0 0 .53 3.46l2.12 2.12a3 3 0 0 0 4.24 0a3 3 0 0 0 0-4.29Zm-8.48-4.24a5 5 0 1 1 0-7.08a5 5 0 0 1 0 7.08Zm7.07 7.07a1 1 0 0 1-1.42 0l-2.12-2.12a1 1 0 0 1 0-1.42a1 1 0 0 1 1.42 0l2.12 2.12a1 1 0 0 1 0 1.42Z" /></svg>
         </span>
       </div>
     </form></h1></div>
   </div>
  
 
   
   <div class=" place-content-center ml-2 flex flex-column border-none border-8 border-black w-[750px] h-[580px] ">
     <img class=" w-[600px] h-[600px]" src="images/img-banner.png" alt="logo"> </div>


  </div>
  <div class="... mx-14 mt-10 flex space-x-4 h-[300px] w-[1800px] flex-row items-center justify-between border-8 border-none border-black">
    <div class="h-[280px] w-[600px] border-8 border-solid border-black"><h1 class=" font-sans md:font-serif mt-5 ml-[100px] flex justify-center mr-20 font-semibold text-[30px] ">Issuances</h1></div>
    <div class="h-[280px] w-[600px] border-8 border-solid border-black"><h1 class="font-sans md:font-serif mt-5 ml-[100px] flex justify-center mr-20 font-semibold text-[30px] ">Quick Links</h1></div>
    <div class="h-[280px] w-[600px] border-8 border-solid border-black"><h1 class="font-sans md:font-serif mt-5 ml-[100px] flex justify-center mr-20 font-semibold text-[30px] ">Archives</h1></div>
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