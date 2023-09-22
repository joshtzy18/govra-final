
<x-app-layout>
    @include('components/nav-user')
    @include('components/highlights-directory-nav')

    <div class="flex flex-col justify-center items-center mt-1 h-auto max-w-screen-sm sm:max-w-screen-md md:max-w-screen-lg lg:max-w-screen-xl xl:max-w-screen-2xl">
    
              
                 
                        
       
  
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
                <a href="/government-job-offers"><li class="text-xs sm:text-base md:text-lg font-sans font-bold  text-blue-500 underline decoration-blue-500 underline-offset-4 decoration-2 ">Jobs Offer</li></a>
                <a href="/government-reviews"><li class="text-xs sm:text-base md:text-lg font-sans font-bold">Reviews</li></a>
            </ul>
            
        </div>

        <span class="text-xl sm:text-2xl lg:text-3xl font-sans font-semibold mt-5 text-center">Jobs Hiring</span>
        {{-- job offers details container --}}
        <div class="flex flex-col gap-8  justify-center items-center h-auto border-solid border-2 max-w-screen-sm sm:max-w-screen-md md:max-w-screen-lg lg:max-w-screen-xl xl:max-w-screen-2xl border-blue-500 w-full mt-3">

            {{-- job-details --}}
            <div class="flex flex-col justify-start items-start w-[90%] sm:w-[75%] md:w-[65%] lg:w-full  h-[13rem] sm:h-[14rem] md:h-[15rem] xl:h-[17rem] lg:pl-20 xl:pl-24 mt-8 border-solid border-2 lg:border-x-0 border-sky-50 rounded-md lg:rounded-none bg-gray-50 shadow-lg">
                <span class="text-lg sm:text-2xl xl:text-3xl font-sans font-semibold mt-5 ml-5">Job Position:</span>
                <span class="text-sm sm:text-xl xl:text-2xl gap-4 font-sans font-semibold flex justify-center items-center ml-8 mt-2"><img class="h-[2.5rem] sm:h-[2.8rem] xl:h-[3.5rem]" src="{{URL('assets/icons/job-requirements-icon.svg')}}" alt="requirements"> Job Requirements</span>
                <span class="text-sm sm:text-xl xl:text-2xl gap-4 font-sans font-semibold flex justify-center items-center ml-8 mt-2"><img class="h-[2.5rem] sm:h-[2.8rem] xl:h-[3.5rem]" src="{{URL('assets/icons/location-icon-black.svg')}}" alt="requirements"> Location</span>
                <span class="text-sm sm:text-xl xl:text-2xl gap-4 font-sans font-semibold flex justify-center items-center ml-8 mt-2 text-blue-500"><img class="h-[2.5rem] sm:h-[2.8rem] xl:h-[3.5rem]" src="{{URL('assets/icons/currency-dollar.svg')}}" alt="requirements">Click here for more information</span>
            </div>

    
           {{-- job-details --}}
           <div class="flex flex-col justify-start items-start w-[90%] sm:w-[75%] md:w-[65%] lg:w-full lg:border-x-0 lg:rounded-none lg:pl-20 xl:pl-24 h-[13rem] sm:h-[14rem] md:h-[15rem] xl:h-[17rem]  border-solid border-2 border-sky-50 rounded-md bg-gray-50 shadow-lg">
            <span class="text-lg sm:text-2xl xl:text-3xl font-sans font-semibold mt-5 ml-5">Job Position:</span>
            <span class="text-sm sm:text-xl xl:text-2xl gap-4 font-sans font-semibold flex justify-center items-center ml-8 mt-2"><img class="h-[2.5rem] sm:h-[2.8rem] xl:h-[3.5rem]" src="{{URL('assets/icons/job-requirements-icon.svg')}}" alt="requirements"> Job Requirements</span>
            <span class="text-sm sm:text-xl xl:text-2xl gap-4 font-sans font-semibold flex justify-center items-center ml-8 mt-2"><img class="h-[2.5rem] sm:h-[2.8rem] xl:h-[3.5rem]" src="{{URL('assets/icons/location-icon-black.svg')}}" alt="requirements"> Location</span>
            <span class="text-sm sm:text-xl xl:text-2xl gap-4 font-sans font-semibold flex justify-center items-center ml-8 mt-2 text-blue-500"><img class="h-[2.5rem] sm:h-[2.8rem] xl:h-[3.5rem]" src="{{URL('assets/icons/currency-dollar.svg')}}" alt="requirements">Click here for more information</span>
        </div>

           {{-- job-details --}}
           <div class="flex flex-col justify-start items-start w-[90%] sm:w-[75%] md:w-[65%] lg:w-full lg:rounded-none lg:border-x-0 lg:pl-20 xl:pl-24    h-[13rem] sm:h-[14rem] md:h-[15rem] xl:h-[17rem]  border-solid border-2 border-sky-50 rounded-md bg-gray-50 shadow-lg">
            <span class="text-lg sm:text-2xl xl:text-3xl font-sans font-semibold mt-5 ml-5">Job Position:</span>
            <span class="text-sm sm:text-xl xl:text-2xl gap-4 font-sans font-semibold flex justify-center items-center ml-8 mt-2"><img class="h-[2.5rem] sm:h-[2.8rem] xl:h-[3.5rem]" src="{{URL('assets/icons/job-requirements-icon.svg')}}" alt="requirements"> Job Requirements</span>
            <span class="text-sm sm:text-xl xl:text-2xl gap-4 font-sans font-semibold flex justify-center items-center ml-8 mt-2"><img class="h-[2.5rem] sm:h-[2.8rem] xl:h-[3.5rem]" src="{{URL('assets/icons/location-icon-black.svg')}}" alt="requirements"> Location</span>
            <span class="text-sm sm:text-xl xl:text-2xl gap-4 font-sans font-semibold flex justify-center items-center ml-8 mt-2 text-blue-500"><img class="h-[2.5rem] sm:h-[2.8rem] xl:h-[3.5rem]" src="{{URL('assets/icons/currency-dollar.svg')}}" alt="requirements">Click here for more information</span>
        </div>


           {{-- job-details --}}
           <div class="flex flex-col justify-start items-start w-[90%] sm:w-[75%] md:w-[65%] lg:w-full lg:rounded-none lg:border-x-0 lg:pl-20 xl:pl-24  h-[13rem] sm:h-[14rem] md:h-[15rem] xl:h-[17rem] mb-5  border-solid border-2 border-sky-50 rounded-md bg-gray-50 shadow-lg">
            <span class="text-lg sm:text-2xl xl:text-3xl font-sans font-semibold mt-5 ml-5">Job Position:</span>
            <span class="text-sm sm:text-xl xl:text-2xl gap-4 font-sans font-semibold flex justify-center items-center ml-8 mt-2"><img class="h-[2.5rem] sm:h-[2.8rem] xl:h-[3.5rem]" src="{{URL('assets/icons/job-requirements-icon.svg')}}" alt="requirements"> Job Requirements</span>
            <span class="text-sm sm:text-xl xl:text-2xl gap-4 font-sans font-semibold flex justify-center items-center ml-8 mt-2"><img class="h-[2.5rem] sm:h-[2.8rem] xl:h-[3.5rem]" src="{{URL('assets/icons/location-icon-black.svg')}}" alt="requirements"> Location</span>
            <span class="text-sm sm:text-xl xl:text-2xl gap-4 font-sans font-semibold flex justify-center items-center ml-8 mt-2 text-blue-500"><img class="h-[2.5rem] sm:h-[2.8rem] xl:h-[3.5rem]" src="{{URL('assets/icons/currency-dollar.svg')}}" alt="requirements">Click here for more information</span>
        </div>
          
        </div>

        
    </div>
  
</x-app-layout>