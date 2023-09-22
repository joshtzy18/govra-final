
<x-app-layout>
    @include('components/nav-user')
    @include('components/highlights-directory-nav')
    
    <div class="flex flex-col justify-center items-center h-auto max-w-screen-sm sm:max-w-screen-md md:max-w-screen-lg lg:max-w-screen-xl xl:max-w-screen-2xl border-solid border-2 border-sky-50 drop-shadow-md">

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

   


    </div>

     {{-- details job container --}}
     <div class="flex flex-col gap-4  justify-center items-center h-auto max-w-screen-sm sm:max-w-screen-md md:max-w-screen-lg lg:max-w-screen-xl xl:max-w-screen-2xl w-full mt-1 ">

        {{-- job info container --}}
        <div class="flex flex-col justify-center items-center h-auto py-5 w-[90%] border-solid border-2 border-red-500 mt-2 rounded-md">
            
            {{-- due date containe --}}
            <div class="flex items-center w-full mb-4 justify-end">
                <span class="text-lg font-sans font-bold text-end mr-1">Due Date:</span>
                <span class="text-base font-sans font-semibold text-end mr-3">04/08/2023</span>
            </div>
               
            {{-- job description --}}
            <div class="flex flex-col text-center items-center justify-center font-bold font-sans text-base">
                <span class="text-lg font-sans font-bold">Job Description</span>
                <span class="w-[80%] text-justify text-base font-sans font-semibold">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore dolorem ipsam quasi saepe sint consequatur magnam neque voluptate itaque soluta quae beatae hic fugiat quisquam voluptatem, est optio, eos totam.</span>
            </div>

            <div class="flex  items-center flex-col h-auto w-[90%] mt-2 border-solid border-2 border-red-500">

                {{-- location container --}}
                <div class="h-auto w-[90%] mt-2 rounded-md border-solid border-2 border-red-400">
                        <div class="flex justify-center items-center border-solid border-2 border-green-400 ">
                            <img class="h-8" src="{{URL('assets/icons/location-icon-black.svg')}}" alt="location">
                            <span class="text-lg font-sans font-bold">Location</span>
                            
                         
                        </div>
                        <div class="flex justify-center items-center"><span class="text-base font-sans font-semibold">123 Manila,
                            Philippines</span></div>

                </div>

                 {{-- job requirements container --}}
                 <div class="h-auto w-[90%] mt-2 rounded-md border-solid border-2 border-red-400">
                    <div class="flex justify-center items-center border-solid border-2 border-green-400 ">
                        <img class="h-8 mr-1" src="{{URL('assets/icons/job-requirements-icon.svg')}}" alt="location">
                        <span class="text-lg font-sans font-bold">Job Requierments</span>
                        
                     
                    </div>
                    <div class="flex text-justify justify-center items-center"><span class="text-base font-sans font-semibold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus dolore ex fugit dolorum, bl</span></div>

            </div>

                  {{-- job qualifications container --}}
                  <div class="h-auto w-[90%] mt-2 rounded-md border-solid border-2 border-red-400">
                    <div class="flex justify-center items-center border-solid border-2 border-green-400 ">
                        <img class="h-8 mr-1 mix-blend-darken" src="{{URL('assets/icons/qualification-icon.svg')}}" alt="location">
                        <span class="text-lg font-sans font-bold">Job Qualifications</span>
                        
                     
                    </div>
                    <div class="flex text-justify justify-center items-center"><span class="text-base font-sans font-semibold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus dolore ex fugit dolorum, bl</span></div>

            </div>

              {{-- salary container --}}
              <div class="h-auto w-[90%] mt-2 rounded-md border-solid border-2 border-red-400">
                <div class="flex justify-center items-center border-solid border-2 border-green-400 ">
                    <img class="h-8 mr-1 mix-blend-darken" src="{{URL('assets/icons/currency-dollar.svg')}}" alt="location">
                    <span class="text-lg font-sans font-bold">Salary</span>
                    
                 
                </div>
                <div class="flex text-justify justify-center items-center"><span class="text-base font-sans font-semibold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus dolore ex fugit dolorum, bl</span></div>

        </div>

            </div>


            {{-- form --}}
            <div class=" flex flex-col items-center w-[90%] h-[30rem] border-solid border-2 border-red-500 mt-5 rounded-md">
                <span class="mt-3 text-center font-sans font-bold text-lg">Fil Up this form to apply</span>
                <div class="flex flex-col items-start w-full">
                    <span class="ml-4 mt-3 text-start font-sans font-bold text-base">Personal information</span>

                    <form class="flex flex-col w-[90%]" action="">
                        <label class="text-sm mt-2 ml-3 font-sans font-bold" for="Name">Name</label>
                        <input class="border-solid border-2  border-blue-100 ml-3 xl:ml-10 rounded-md text-xs lg:text-base h-[1.8rem] sm:h-[2rem] lg:h-[2.5rem] pl-2 w-full font-sans font-semibold placeholder-gray-400 text-gray-500 focus:outline-none focus:border-sky-500 focus:ring-sky-500 "   type="text" placeholder="Enter name" />
                        <input class=" mt-2 border-solid border-2  border-blue-100 ml-3 xl:ml-10 rounded-md text-xs lg:text-base h-[1.8rem] sm:h-[2rem] lg:h-[2.5rem] pl-2 w-full font-sans font-semibold placeholder-gray-400 text-gray-500 focus:outline-none focus:border-sky-500 focus:ring-sky-500 "   type="text" placeholder="Enter lastname" />
                        
                        <label class="text-sm mt-2 ml-3 font-sans font-bold" for="Name">Phone</label>
                        <input class="border-solid border-2  border-blue-100 ml-3 xl:ml-10 rounded-md text-xs lg:text-base h-[1.8rem] sm:h-[2rem] lg:h-[2.5rem] pl-2 w-full font-sans font-semibold placeholder-gray-400 text-gray-500 focus:outline-none focus:border-sky-500 focus:ring-sky-500 "   type="text" placeholder="Enter phone number" />

                        <label class="text-sm mt-2 ml-3 font-sans font-bold" for="Name">Email</label>
                        <input class="border-solid border-2  border-blue-100 ml-3 xl:ml-10 rounded-md text-xs lg:text-base h-[1.8rem] sm:h-[2rem] lg:h-[2.5rem] pl-2 w-full font-sans font-semibold placeholder-gray-400 text-gray-500 focus:outline-none focus:border-sky-500 focus:ring-sky-500 "   type="text" placeholder="Enter email" />

                        <label class="text-sm mt-2 ml-3 font-sans font-bold" for="Name">Address</label>
                        <input class="border-solid border-2  border-blue-100 ml-3 xl:ml-10 rounded-md text-xs lg:text-base h-[1.8rem] sm:h-[2rem] lg:h-[2.5rem] pl-2 w-full font-sans font-semibold placeholder-gray-400 text-gray-500 focus:outline-none focus:border-sky-500 focus:ring-sky-500 "   type="text" placeholder="Enter address" />

                        
                        <label class="text-sm mt-2 ml-3 font-sans font-bold" for="Name">Upload Resume</label>
                        <input class="  ml-3 xl:ml-10 rounded-md text-xs lg:text-base h-[2rem] sm:h-[2rem] lg:h-[2.5rem] pl-2 w-full font-sans font-semibold placeholder-gray-400 text-gray-500"   type="file" placeholder="Enter address" />

                     <button class="flex  justify-center tems-center hover:bg-blue-600 py-2 px-1 mt-3 rounded-md w-32 text-sm ml-4 bg-blue-700 text-white font-sans font-bold">Apply Now <span class="ml-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" stroke="white" stroke-width="2" d="M2.998 1H17.5L21 4.5V23H3L2.998 1ZM16 1v5h5m-9 14v-9m-4 3l4-4l4 4"/></svg></span></button>

                    </form>
                </div>
              
            </div>

        </div>

     

     </div>

       {{-- related jobs container --}}
       <div class="flex flex-col gap-4  justify-center items-center h-auto max-w-screen-sm sm:max-w-screen-md md:max-w-screen-lg lg:max-w-screen-xl xl:max-w-screen-2xl w-full mt-1 ">
        <div class="flex flex-col items-center w-[90%] h-auto border-solid border-2 border-red-500">

            <span class="mt-2 font-sans font-bold text-xl text-center">Job Related</span>

          <div class=" flex flex-col items-center py-4 rounded-md bg-gray-50  h-auto w-[80%] mt-2 border-solid border-2 border-pink-500">
          
                <div class="h-32 w-32 border-solid border-2 rounded-[50%] border-blue-400"></div>
                <span class="font-sans font-bold mt-2">Job Position</span>
                <span class="font-sans font-bold text-center text-sm w-[90%]">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ips</span>

                <span class="font-sans font-bold mt-2">Government Agency</span>
                <span class="font-sans font-bold text-center text-sm w-[90%]">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ips</span>

                <span class="font-sans font-bold mt-2">Location</span>
                <span class="font-sans font-bold text-center text-sm w-[90%]">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ips</span>
             
          </div>

          <div class=" flex flex-col items-center py-4 rounded-md bg-gray-50  h-auto w-[80%] mt-4 border-solid border-2 border-pink-500">
            <div class="h-32 w-32 border-solid border-2 rounded-[50%] border-blue-400"></div>
            <span class="font-sans font-bold mt-2">Job Position</span>
            <span class="font-sans font-bold text-center text-sm w-[90%]">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ips</span>

            <span class="font-sans font-bold mt-2">Government Agency</span>
            <span class="font-sans font-bold text-center text-sm w-[90%]">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ips</span>

            <span class="font-sans font-bold mt-2">Location</span>
            <span class="font-sans font-bold text-center text-sm w-[90%]">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ips</span>
         
      </div>

      <div class=" flex flex-col items-center py-4 mb-4 rounded-md bg-gray-50  h-auto w-[80%] mt-4 border-solid border-2 border-pink-500">
        <div class="h-32 w-32 border-solid border-2 rounded-[50%] border-blue-400"></div>
        <span class="font-sans font-bold mt-2">Job Position</span>
        <span class="font-sans font-bold text-center text-sm w-[90%]">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ips</span>

        <span class="font-sans font-bold mt-2">Government Agency</span>
        <span class="font-sans font-bold text-center text-sm w-[90%]">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ips</span>

        <span class="font-sans font-bold mt-2">Location</span>
        <span class="font-sans font-bold text-center text-sm w-[90%]">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ips</span>
     
  </div>

        </div>

        
    </div>

</x-app-layout>
