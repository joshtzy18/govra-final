<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    {{-- signup   body --}}
  <div class="flex justify-center items-center max-w-screen max-h-sm h-[82rem] lg:h-[55rem] xl:h-[58rem]">
    
    {{-- signup box-container --}}
    <div class=" flex max-w-sm sm:max-w-md md:max-w-lg lg:max-w-3xl xl:max-w-5xl lg:max-h-xl lg:h-3/4 lg:w-screen xl:h-4/5 w-4/5 h-1/2 shadow-lg justify-center items-center ">
    
      {{-- signup left side --}}
      <div class="hidden relative items-center flex-col sm:hidden md:hidden lg:flex lg:h-full lg:w-1/2 lg:max-w-xl">
          
        <div class="absolute h-full z-1 sm:w-full md:w-full lg:w-full xl:w-full ">
          <img src="{{URL('assets/images/waves.svg')}}" alt="bg-signup" class="h-[800px] w-full object-cover z-0">
        </div>
        <span class="text-3xl text-white font-sans font-bold mr-60 ml-10 mt-12 xl:mt-[4rem] z-10 xl:text-4xl xl:mb-10 xl:ml-0">GOVra</span>

          <img class="h-96 z-10 xl:w-[100rem]" src="{{URL('assets/images/pngegg2.png')}}" alt="banner">

          <span class="text-2xl font-semibold font-sans text-white z-10 xl:text-3xl  ">FIND YOUR WORK HERE</span>
          <div class="h-1 w-[73%] bg-orange-500 z-10 xl:w-[67%] 2xl:w-[68%]"></div>

          <img class="h-80 absolute w-80 top-[14rem] xl:w-[25rem] xl:top-[18rem] z-0 opacity-30" src="{{URL('assets/images/pngegg3.png')}}" alt="banner">
      </div>

      {{-- signup right side --}}
      <div class="flex flex-col max-w-sm sm:max-w-md md:max-w-lg lg:max-w-xl lg:w-1/2 lg:justify-center items-center h-full w-full  relative">
        <div class="absolute h-full z-1 sm:w-full md:w-full lg:w-full xl:w-full">
            <img src="{{URL('assets/images/blob-scene-haikei.svg')}}" alt="bg-signup" class="h-full w-full object-cover">
        </div>
   
        <h1 class="text-3xl text-center mt-8 mb-3 font-sans font-bold lg:mt-0 xl:text-4xl text-white z-10">Sign up</h1>

        {{-- form container --}}
        <div class=" relative max-w-[80%] sm:max-w-[80%] md:max-w-[80%] lg:max-w-[80%] lg:mb-[12rem] xl:mb-[13rem]  lg:h-1/2 w-full h-4/5 px-3">
        
          <form method="POST" action="{{ route('signup.post')}}">
            @csrf
            <label class="block">
                <span class="after:ml-0.5 after:text-red-500 block text-base font-medium xl:text-lg text-white">
                  Name
                </span>
                <input type="text" name="name"  required class="h-[2.1rem] xl:h-[2.3rem] max-w-screen  mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full  rounded-md  focus:ring-1 mb-3" placeholder="Enter name" />
              </label>

              <label class="block">
                <span class="after:ml-0.5 after:text-red-500 block text-base font-medium xl:text-lg text-white">
                  Gender
                </span>
                <input type="text" name="gender"  required class="h-[2.1rem] xl:h-[2.3rem] max-w-screen  mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full  rounded-md  focus:ring-1 mb-3" placeholder="Enter gender" />
              </label>

              <label class="block">
                <span class="after:ml-0.5 after:text-red-500 block text-base font-medium xl:text-lg text-white">
                  Contact No.
                </span>
                <input type="text" name="contact"  required class="h-[2.1rem] xl:h-[2.3rem] max-w-screen  mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full  rounded-md  focus:ring-1 mb-3" placeholder="Enter contact no." />
              </label>

              <label class="block">
                <span class="after:ml-0.5 after:text-red-500 block text-base font-medium xl:text-lg text-white">
                  Email
                </span>
                <input type="text" name="email"  required class="h-[2.1rem] xl:h-[2.3rem] max-w-screen  mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full  rounded-md  focus:ring-1 mb-3" placeholder="Enter email" />
              </label>

              <label class="block">
                <span class="after:ml-0.5 after:text-red-500 block text-base font-medium xl:text-lg text-white">
                  Username
                </span>
                <input type="text" name="username"  required class="h-[2.1rem] xl:h-[2.3rem] max-w-screen  mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full  rounded-md  focus:ring-1 mb-3" placeholder="Enter username" />
              </label>


              <label class="block">
                <span class="after:ml-0.5 after:text-red-500 block text-base font-medium xl:text-lg text-white">
                  Password
                </span>
               
                  <input type="password" name="password" id="password" required class="relative h-[2.1rem] xl:h-[2.3rem] max-w-screen w-full  mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block  rounded-md focus:ring-1 mb-3" placeholder="Enter password" />
                  <div class="z-10" onclick="showPass()">
                  <img  class="hidden absolute cursor-pointer bottom-[95px] right-5 h-8 lg:hidden lg:bottom-[-100px] xl:hidden " src="{{URL('/assets/icons/show.png')}}" id="showicon" alt="showicon">
                  <img  class="absolute cursor-pointer bottom-[95px] right-5 h-8 lg:flex lg:bottom-[-100px]  xl:bottom-[-100px]"  src="{{URL('/assets/icons/hide.png')}}" id="hideicon" alt="hide">
                  </div>
              
              </label>

              <label class="block">
                <span class="after:ml-0.5 after:text-red-500 block text-base font-medium xl:text-lg text-white">
                  Confirm Password
                </span>
               
                  <input type="confirm password" name="confirm password" id="confirm password" required class="relative h-[2.1rem] xl:h-[2.3rem] max-w-screen w-full  mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block  rounded-md focus:ring-1 mb-3" placeholder="Confirm password" />
                  <div class="z-10" onclick="showPass()">
                  <img  class="hidden absolute cursor-pointer bottom-[95px] right-5 h-8 lg:hidden lg:bottom-[-100px] xl:hidden " src="{{URL('/assets/icons/show.png')}}" id="showicon" alt="showicon">
                  <img  class="absolute cursor-pointer bottom-[95px] right-5 h-8 lg:flex lg:bottom-[-100px]  xl:bottom-[-100px]"  src="{{URL('/assets/icons/hide.png')}}" id="hideicon" alt="hide">
                  </div>
              
              </label>
              
              

         <button name="submit" class="btn btn-orangee mt-3 bg-orange-500 hover:bg-orange-700 text-white font-bold text-md xl:text-lg py-2 px-4 rounded w-full z-10">Sign up

         </button>

          </form>

         
          <div class="flex mt-3">
            <span class="text-white font-sans font-extralight xl:text-lg">Have account?</span>
           <a href="{{url('/login')}}"> <span class="text-blue-500 font-sans font-medium ml-1 xl:text-lg">Login</span></a>
          </div>
        </div>

      
    </div>

    
  </div>

  <script>

  function showPass(){
    var pass = document.getElementById("password");
    var showicon = document.getElementById("showicon");
    var hideicon = document.getElementById("hideicon");

    if(pass.type === "password"){
      pass.type = "text";
      showicon.style.display = "none";
      hideicon.style.display = "block";
  }
  else{
    pass.type = "password";
      showicon.style.display = "block";
      hideicon.style.display = "none";

  }
}
  </script>
</body>
</html>