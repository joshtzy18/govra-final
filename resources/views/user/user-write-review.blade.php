
<x-app-layout>
    <title>Document</title>
    @vite('resources/css/app.css')



    @include('components/nav-user')
 
    
    <div class="flex flex-col justify-center items-center h-auto max-w-screen-sm sm:max-w-screen-md md:max-w-screen-lg lg:max-w-screen-xl xl:max-w-screen-2xl">

        {{-- government details container --}}
        <div class="flex items-center justify-center gap-5 h-[11rem] sm:h-[13rem] md:h-[14rem] xl:h-[15rem] xl:gap-20 2xl:h-[16rem] w-full bg-bgcolor">
           {{-- government logo here --}}
               <div class=" flex justify-center items-center h-[80%] w-[45%] sm:w-[40%] md:w-[35%] lg:w-[30%] xl:w-[25%] 2xl:w-[20%] border-solid border-2 border-sky-50 shadow-md  rounded-lg bg-gray-50">
                  <img class="h-full w-[90%] lg:w-[85%] object-fill" src="{{URL('assets/images/government-logo/DepEd.svg')}}" alt="DepEd">
               </div>
               {{-- government details --}}
               <div class="flex flex-col justify-center gap-8 h-[80%] w-[40%] md:w-[35%] lg:w-[30%] xl:w-[25%] 2xl:w-[20%]">
                   <span class="text-sm font-sans font-bold sm:text-xl md:text-2xl xl:text-3xl">Government name</span>
                   <span class="text-xs font-sans font-semibold sm:text-lg md:text-xl xl:text-2xl">Government type</span>
               </div>
       </div>

       <div class="h-[3rem] sm:h-[3.5rem] md:h-[4rem] w-full flex items-center justify-center border-y-2 border-gray-200">
           <ul class="flex flex-row gap-5 md:gap-16">
               <a href="/job-clicked-user"><li class="text-xs sm:text-base md:text-lg font-sans font-bold ">Government Overview</li></a>
               <a href="/government-job-offers"><li class="text-xs sm:text-base md:text-lg font-sans font-bold ">Jobs Offer</li></a>
               <a href="/government-reviews"><li class="text-xs sm:text-base md:text-lg font-sans font-bold  text-blue-500 underline decoration-blue-500 underline-offset-4 decoration-2 ">Reviews</li></a>
           </ul>
   
       </div>


    </div>

    {{-- write reviews container --}}
    <div class="flex flex-col gap-4  justify-center items-center h-auto max-w-screen-sm sm:max-w-screen-md md:max-w-screen-lg lg:max-w-screen-xl xl:max-w-screen-2xl w-full mt-1 ">

        {{-- form container --}}
        <div class="flex flex-col justify-center items-center h-auto py-2 rounded-md w-[88%] sm:w-[80%] lg:w-[75%] xl:w-[70%] bg-blue-500 my-10 drop-shadow-lg border-sky-50 ">

            {{-- rating section --}}
            <div class="flex flex-col h-[16rem] sm:h-[19rem] lg:h-[25rem] w-full bg-gray-50 ">
                <span class="text-sm sm:text-base font-sans lg:text-lg xl:text-2xl font-bold  mt-2 text-center">Have something to say about your job?</span>
                <span class="font-sans text-sm sm:text-base lg:text-lg xl:text-2xl xl:pl-10 font-bold pl-2 mt-4">Company to review</span>
                <input class="border-solid border-2 border-blue-100 ml-3 xl:ml-10  rounded-md text-xs lg:text-sm h-[1.8rem] sm:h-[2rem] lg:h-[2.5rem] pl-2 w-[75%] font-sans font-bold text-gray-500" disabled type="text" value="Department of Education 'DepEd'" />

                <span class="mt-4 ml-3 text-xs sm:text-sm lg:text-base xl:text-lg xl:ml-10 font-sans font-bold">how would you rate the agency on the following...</span>
                
                {{-- rating contents --}}

                {{-- Opportunities for career development container --}}
                <div class="flex  gap-5"> 
                    <span class="font-sans font-bold text-xs sm:text-sm lg:text-base  xl:text-lg xl:ml-10 mt-2 ml-3">Opportunities for career <br>
                         development</span>
                         <div class="flex flex-row w-auto mt-2 xl:ml-5 ml-[0.1rem]">
                            <img class="h-5 sm:h-6 lg:h-8 xl:h-10" src="{{URL('/assets/icons/star.svg')}}" alt="star">
                            <img class="h-5 sm:h-6 lg:h-8 xl:h-10" src="{{URL('/assets/icons/star.svg')}}" alt="star">
                            <img class="h-5 sm:h-6 lg:h-8 xl:h-10" src="{{URL('/assets/icons/star.svg')}}" alt="star">
                            <img class="h-5 sm:h-6 lg:h-8 xl:h-10" src="{{URL('/assets/icons/star.svg')}}" alt="star">
                            <img class="h-5 sm:h-6 lg:h-8 xl:h-10" src="{{URL('/assets/icons/star-transparent.svg')}}" alt="star-transparent">
                         </div>
                </div>

                  {{-- work/life balance container --}}
                <div class="flex gap-14"> 
                    <span class="font-sans font-bold text-xs sm:text-sm lg:text-base  xl:text-lg xl:ml-10 mt-2 ml-3">Work/Life balance</span>
                         <div class="flex flex-row w-auto mt-[0.30rem] lg:ml-[1.8rem] xl:ml-[2.3rem] xl:mt-[-0.10rem]">
                            <img class="h-5 sm:h-6 lg:h-8 xl:h-10" src="{{URL('/assets/icons/star.svg')}}" alt="star">
                            <img class="h-5 sm:h-6 lg:h-8 xl:h-10" src="{{URL('/assets/icons/star.svg')}}" alt="star">
                            <img class="h-5 sm:h-6 lg:h-8 xl:h-10" src="{{URL('/assets/icons/star.svg')}}" alt="star">
                            <img class="h-5 sm:h-6 lg:h-8 xl:h-10" src="{{URL('/assets/icons/star.svg')}}" alt="star">
                            <img class="h-5 sm:h-6 lg:h-8 xl:h-10" src="{{URL('/assets/icons/star-transparent.svg')}}" alt="star-transparent">
                         </div>
                </div>

                  {{-- work environment container --}}
                  <div class="flex gap-12"> 
                    <span class="font-sans font-bold text-xs sm:text-sm lg:text-base  xl:text-lg xl:ml-10 mt-2 ml-3">Work environment</span>
                         <div class="flex flex-row w-auto mt-[0.30rem] xl:mt-[-0.05rem] ml-[0.3rem] lg:ml-[2rem] xl:ml-[2.5rem] ">
                            <img class="h-5 sm:h-6 lg:h-8 xl:h-10" src="{{URL('/assets/icons/star.svg')}}" alt="star">
                            <img class="h-5 sm:h-6 lg:h-8 xl:h-10" src="{{URL('/assets/icons/star.svg')}}" alt="star">
                            <img class="h-5 sm:h-6 lg:h-8 xl:h-10" src="{{URL('/assets/icons/star.svg')}}" alt="star">
                            <img class="h-5 sm:h-6 lg:h-8 xl:h-10" src="{{URL('/assets/icons/star.svg')}}" alt="star">
                            <img class="h-5 sm:h-6 lg:h-8 xl:h-10" src="{{URL('/assets/icons/star-transparent.svg')}}" alt="star-transparent">
                         </div>
                </div>

                  {{-- benifits and perks container --}}
                  <div class="flex gap-14"> 
                    <span class="font-sans font-bold text-xs sm:text-sm lg:text-base xl:text-lg xl:ml-10 mt-2 ml-3">Benifits and perks</span>
                         <div class="flex flex-row w-auto mt-[0.30rem] xl:mt-[-0.05rem] lg:ml-[2rem] xl:ml-[2.5rem] ml-[0.1rem] ">
                            <img class="h-5 sm:h-6 lg:h-8 xl:h-10" src="{{URL('/assets/icons/star.svg')}}" alt="star">
                            <img class="h-5 sm:h-6 lg:h-8 xl:h-10" src="{{URL('/assets/icons/star.svg')}}" alt="star">
                            <img class="h-5 sm:h-6 lg:h-8 xl:h-10" src="{{URL('/assets/icons/star.svg')}}" alt="star">
                            <img class="h-5 sm:h-6 lg:h-8 xl:h-10" src="{{URL('/assets/icons/star.svg')}}" alt="star">
                            <img class="h-5 sm:h-6 lg:h-8 xl:h-10" src="{{URL('/assets/icons/star-transparent.svg')}}" alt="star-transparent">
                         </div>
                </div>
               
                

            </div>

               {{-- role section --}}
               <div class=" flex flex-col bg-gray-50  mt-0.5 w-full h-[12rem] sm:h-[13rem] lg:h-[13.5rem] lg:relative">
                    <span class="ml-4 xl:ml-10 font-sans font-bold text-sm sm:text-base lg:text-lg xl:text-xl mt-3">Your Role</span>
                    <span class="ml-4 xl:ml-10 font-sans font-bold text-xs sm:text-sm lg:text-base xl:text-lg mt-1">Your department or role title</span>
                    <input class="border-solid border-2 border-blue-100 ml-3 xl:ml-10 rounded-md text-xs lg:text-base h-[1.8rem] sm:h-[2rem] lg:h-[2.5rem] pl-2 w-[75%] font-sans font-semibold placeholder-gray-400 text-gray-500 focus:outline-none focus:border-sky-500 focus:ring-sky-500 "   type="text" placeholder="Enter your role" />
                    
                    <span class="font-sans font-bold text-xs sm:text-sm lg:text-base xl:text-lg  text-center lg:absolute lg:float-left lg:bottom-[4.7rem] xl:bottom-[4rem] lg:ml-4 xl:ml-10 mt-2">Work Type:</span>
                   <div class="flex flex-row mt-1 lg:mt-[0.4rem] xl:ml-36 xl:mt-[0.60rem]">
                   
                    
                        <input class="ml-2 " type="radio" name="fulltime" id="fulltime" /> <label class="text-xs sm:text-sm lg:text-base xl:text-lg font-sans font-semibold mr-2 xl:mr-8" for="Fulltime">Full time</label>
                       <input type="radio" name="parttime" id="parttime">  <label class="text-xs sm:text-sm lg:text-base xl:text-lg font-sans font-semibold mr-2 xl:mr-8" for="Parttime">Part time</label>
                        <input type="radio" name="contract" id="conteract"> <label class="text-xs sm:text-sm lg:text-base xl:text-lg font-sans font-semibold mr-2 xl:mr-8" for="ContractTemp">Contract</label>
                        <input type="radio" name="Volunteer/Intern" id="Volunteer/Intern"> <label class="text-xs sm:text-sm lg:text-base xl:text-lg font-sans font-semibold mr-2 xl:mr-8" for="Volunteer/Intern">Volunteer/Intern</label>
                </div>

               
                 <div class="flex flex-row">
                    <span class="font-sans font-bold text-xs sm:text-sm lg:text-base xl:text-lg xl:ml-10 mt-4 ml-3 lg:ml-4">Base salary:</span>
                    <button id="dropdownHoverButtons" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover" class=" mt-2 sm:mt-3  ml-10 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-xs lg:text-sm px-2 sm:px-3 lg:px-4 py-2  text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Monthly <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                      </svg></button>
                      
                      <button id="dropdownHoverButtons" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover" class=" mt-2 sm:mt-3  ml-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-xs lg:text-sm px-2 sm:px-3 lg:px-4 py-2 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Daily <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                      </svg></button>
                     
                 </div>
               </div>

                 {{-- comment and reviews section --}}
                 <div class=" flex flex-col bg-gray-50  mt-0.5 w-full h-[8rem] sm:h-[10rem] lg:h-[12rem] xl:h-[13rem] ">
                    <span class="text-sm sm:text-base lg:text-lg xl:text-xl font-sans font-bold ml-3 xl:ml-10 mt-2">Comments and Reviews</span>
                   <textarea class="border-solid border-2 border-gray-400 h-[5rem] sm:h-[7rem] lg:h-[8.5rem] xl:h-[9.8rem] w-[90%] pl-2 text-sm xl:text-lg font-semibold ml-3 xl:ml-10 placeholder:to-slate-400 ring-blue-500 outline-none focus:border-blue-500 " name="" id="" cols="30" rows="10" placeholder="Enter comment"></textarea>
               </div>

                     {{-- the good things section --}}
                     <div class=" flex flex-col bg-gray-50  mt-0.5 w-full h-[8rem] sm:h-[10rem] lg:h-[12rem] xl:h-[13rem] ">
                        <span class="text-sm sm:text-base lg:text-lg xl:text-xl font-sans font-bold ml-3 xl:ml-10 mt-2">The Good Things</span>
                       <textarea class="border-solid border-2 border-gray-400 h-[5rem] sm:h-[7rem]  lg:h-[8.5rem] xl:h-[9.8rem] w-[90%] pl-2 text-sm xl:text-lg  font-semibold ml-3 xl:ml-10 placeholder:to-slate-400 ring-blue-500 outline-none focus:border-blue-500 " name="" id="" cols="30" rows="10" placeholder="Enter comment"></textarea>
                   </div>

                         {{--the challenges section --}}
                 <div class=" flex flex-col bg-gray-50  mt-0.5 w-full h-[11rem] sm:h-[12.8rem] lg:h-[15rem] xl:h-[16.5rem]  ">
                    <span class="text-sm sm:text-base lg:text-lg xl:text-xl font-sans font-bold ml-3 xl:ml-10 mt-2">The Challenges</span>
                   <textarea class="border-solid border-2 border-gray-400 h-[5rem] sm:h-[7rem]  lg:h-[8.5rem] xl:h-[10rem] w-[90%] pl-2 text-sm xl:text-lg font-semibold ml-3 xl:ml-10 placeholder:to-slate-400 ring-blue-500 outline-none focus:border-blue-500 " name="" id="" cols="30" rows="10" placeholder="Enter comment"></textarea>

                  <a href="/government-reviews"><button class="py-1.5 px-3 w-[7rem] xl:w-[8rem] lg:py-1.5 lg:px-2 rounded-sm text-center ml-3 xl:ml-10 mt-3 cursor-pointer hover:bg-orange-600 text-white text-sm lg:text-base xl:text-lg font-sans font-bold bg-orange-500">Submit</button></a> 
               </div>

                 
        </div>

    </div>

</x-app-layout>
 
      
