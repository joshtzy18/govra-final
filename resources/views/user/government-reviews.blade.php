<x-app-layout>
    @include('components/nav-user')
    @include('components/highlights-directory-nav')
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

        <div class="flex justify-end mt-3 h-10 sm:h-12 md:h-14 items-center pr-5 md:pr-8 w-full ">  <a href="/user-write-review"><button class="btn btn-orangee bg-orange-500 hover:bg-orange-700 text-white font-bold text-xs md:text-base xl:text-lg py-1 px-6 sm:px-7 md:px-8 h-7 sm:h-8 md:h-9 rounded-md w-full z-10">Write a review

        </button></a> </div>

        {{-- government reviews container --}}
        <div class="flex flex-col gap-4  justify-center items-center h-auto max-w-screen-sm sm:max-w-screen-md md:max-w-screen-lg lg:max-w-screen-xl xl:max-w-screen-2xl w-full mt-1">
                 
            {{-- review-details --}}
            <div class="flex flex-row sm:gap-4 justify-start items-center w-[90%] sm:w-[75%] md:w-[65%] lg:w-full  h-[15rem] sm:h-[16rem] md:h-[15rem] lg:h-[18rem] xl:h-[20rem] lg:pl-32 xl:pl-48 mt-3 border-solid border-2 lg:border-x-0 border-sky-50 rounded-md lg:rounded-none bg-gray-50 shadow-lg">
                <div class="flex flex-col items-center sm:ml-[3rem] h-[13rem] sm:h-[14rem] lg:h-[16rem] w-[8.2rem] lg:w-[13rem] xl:h-[18rem]">
                    <span class="font-sans font-bold text-sm sm:text-base lg:text-lg xl:text-xl text-orange-500 mt-2">Star Rate</span>
                    
                    {{-- star container --}}
                    <div class="flex flex-row justify-center w-auto h-auto">
                        <img class="h-5 sm:h-6 lg:h-7 xl:h-8" src="{{URL('/assets/icons/star.svg')}}" alt="star">
                        <img class="h-5 sm:h-6 lg:h-7 xl:h-8" src="{{URL('/assets/icons/star.svg')}}" alt="star">
                        <img class="h-5 sm:h-6 lg:h-7 xl:h-8" src="{{URL('/assets/icons/star.svg')}}" alt="star">
                        <img class="h-5 sm:h-6 lg:h-7 xl:h-8" src="{{URL('/assets/icons/star.svg')}}" alt="star">
                        <img class="h-5 sm:h-6 lg:h-7 xl:h-8" src="{{URL('/assets/icons/star-transparent.svg')}}" alt="star-transparent">

                    </div>

                    <span class="text-sm sm:text-base lg:text-lg xl:text-xl font-sans font-bold mt-3">Name</span>
                    <span class="name text-xs sm:text-sm lg:text-base xl:text-lg font-sans font-semibold">Joshua Bugayong</span>

                    <span class="text-sm sm:text-base lg:text-lg xl:text-xl font-sans font-bold mt-2">Date</span>
                    <span class="name text-xs sm:text-sm lg:text-base xl:text-lg font-sans font-semibold">02/08/2023</span>
                </div>

              
                <div class="flex flex-col items-start h-[13rem] sm:h-[14rem] w-[13rem] sm:w-[14rem] lg:w-[50%] lg:h-[16rem] xl:h-[18rem] ">
                 <span class="text-sm sm:text-base lg:text-lg xl:text-xl mt-2 font-sans font-bold">Comment and Reviews</span>
                 <span class="name text-xs sm:text-sm lg:text-base xl:text-lg  text-justify font-sans font-semibold">Lorem ipsum dolor sit amet consecteturQuos obcaecati esse </span>

                 <span class="text-sm sm:text-base lg:text-lg xl:text-xl mt-2 lg:mt-3 font-sans font-bold">The good things</span>
                 <span class="name text-xs sm:text-sm lg:text-base xl:text-lg   text-justify font-sans font-semibold">Lorem ipsum dolor sit amet consecteturQuos obcaecati esse  </span>

                 <span class="text-sm sm:text-base lg:text-lg xl:text-xl mt-2 lg:mt-3  font-sans font-bold">The challenges</span>
                 <span class="name text-xs sm:text-sm lg:text-base xl:text-lg   text-justify font-sans font-semibold">Lorem ipsum dolor sit amet consecteturQuos obcaecati esse  </span>

                </div>
            </div>

                {{-- review-details --}}
                <div class="flex flex-row sm:gap-4 justify-start items-center w-[90%] sm:w-[75%] md:w-[65%] lg:w-full  h-[15rem] sm:h-[16rem] md:h-[15rem] lg:h-[18rem] xl:h-[20rem] lg:pl-32 xl:pl-48 mt-3 border-solid border-2 lg:border-x-0 border-sky-50 rounded-md lg:rounded-none bg-gray-50 shadow-lg">
                    <div class="flex flex-col items-center sm:ml-[3rem] h-[13rem] sm:h-[14rem] lg:h-[16rem] w-[8.2rem] lg:w-[13rem] xl:h-[18rem]">
                        <span class="font-sans font-bold text-sm sm:text-base lg:text-lg xl:text-xl text-orange-500 mt-2">Star Rate</span>
                        
                        {{-- star container --}}
                        <div class="flex flex-row justify-center w-auto h-auto">
                            <img class="h-5 sm:h-6 lg:h-7 xl:h-8" src="{{URL('/assets/icons/star.svg')}}" alt="star">
                            <img class="h-5 sm:h-6 lg:h-7 xl:h-8" src="{{URL('/assets/icons/star.svg')}}" alt="star">
                            <img class="h-5 sm:h-6 lg:h-7 xl:h-8" src="{{URL('/assets/icons/star.svg')}}" alt="star">
                            <img class="h-5 sm:h-6 lg:h-7 xl:h-8" src="{{URL('/assets/icons/star.svg')}}" alt="star">
                            <img class="h-5 sm:h-6 lg:h-7 xl:h-8" src="{{URL('/assets/icons/star-transparent.svg')}}" alt="star-transparent">
    
                        </div>
    
                        <span class="text-sm sm:text-base lg:text-lg xl:text-xl font-sans font-bold mt-3">Name</span>
                        <span class="name text-xs sm:text-sm lg:text-base xl:text-lg font-sans font-semibold">Joshua Bugayong</span>
    
                        <span class="text-sm sm:text-base lg:text-lg xl:text-xl font-sans font-bold mt-2">Date</span>
                        <span class="name text-xs sm:text-sm lg:text-base xl:text-lg font-sans font-semibold">02/08/2023</span>
                    </div>
    
                  
                    <div class="flex flex-col items-start h-[13rem] sm:h-[14rem] w-[13rem] sm:w-[14rem] lg:w-[50%] lg:h-[16rem] xl:h-[18rem] ">
                     <span class="text-sm sm:text-base lg:text-lg xl:text-xl mt-2 font-sans font-bold">Comment and Reviews</span>
                     <span class="name text-xs sm:text-sm lg:text-base xl:text-lg  text-justify font-sans font-semibold">Lorem ipsum dolor sit amet consecteturQuos obcaecati esse </span>
    
                     <span class="text-sm sm:text-base lg:text-lg xl:text-xl mt-2 lg:mt-3 font-sans font-bold">The good things</span>
                     <span class="name text-xs sm:text-sm lg:text-base xl:text-lg   text-justify font-sans font-semibold">Lorem ipsum dolor sit amet consecteturQuos obcaecati esse  </span>
    
                     <span class="text-sm sm:text-base lg:text-lg xl:text-xl mt-2 lg:mt-3  font-sans font-bold">The challenges</span>
                     <span class="name text-xs sm:text-sm lg:text-base xl:text-lg   text-justify font-sans font-semibold">Lorem ipsum dolor sit amet consecteturQuos obcaecati esse  </span>
    
                    </div>
                </div>

                    {{-- review-details --}}
            <div class="flex flex-row sm:gap-4 justify-start items-center w-[90%] sm:w-[75%] md:w-[65%] lg:w-full  h-[15rem] sm:h-[16rem] md:h-[15rem] lg:h-[18rem] xl:h-[20rem] lg:pl-32 xl:pl-48 mt-3 border-solid border-2 lg:border-x-0 border-sky-50 rounded-md lg:rounded-none bg-gray-50 shadow-lg">
                <div class="flex flex-col items-center sm:ml-[3rem] h-[13rem] sm:h-[14rem] lg:h-[16rem] w-[8.2rem] lg:w-[13rem] xl:h-[18rem]">
                    <span class="font-sans font-bold text-sm sm:text-base lg:text-lg xl:text-xl text-orange-500 mt-2">Star Rate</span>
                    
                    {{-- star container --}}
                    <div class="flex flex-row justify-center w-auto h-auto">
                        <img class="h-5 sm:h-6 lg:h-7 xl:h-8" src="{{URL('/assets/icons/star.svg')}}" alt="star">
                        <img class="h-5 sm:h-6 lg:h-7 xl:h-8" src="{{URL('/assets/icons/star.svg')}}" alt="star">
                        <img class="h-5 sm:h-6 lg:h-7 xl:h-8" src="{{URL('/assets/icons/star.svg')}}" alt="star">
                        <img class="h-5 sm:h-6 lg:h-7 xl:h-8" src="{{URL('/assets/icons/star.svg')}}" alt="star">
                        <img class="h-5 sm:h-6 lg:h-7 xl:h-8" src="{{URL('/assets/icons/star-transparent.svg')}}" alt="star-transparent">

                    </div>

                    <span class="text-sm sm:text-base lg:text-lg xl:text-xl font-sans font-bold mt-3">Name</span>
                    <span class="name text-xs sm:text-sm lg:text-base xl:text-lg font-sans font-semibold">Joshua Bugayong</span>

                    <span class="text-sm sm:text-base lg:text-lg xl:text-xl font-sans font-bold mt-2">Date</span>
                    <span class="name text-xs sm:text-sm lg:text-base xl:text-lg font-sans font-semibold">02/08/2023</span>
                </div>

              
                <div class="flex flex-col items-start h-[13rem] sm:h-[14rem] w-[13rem] sm:w-[14rem] lg:w-[50%] lg:h-[16rem] xl:h-[18rem] ">
                 <span class="text-sm sm:text-base lg:text-lg xl:text-xl mt-2 font-sans font-bold">Comment and Reviews</span>
                 <span class="name text-xs sm:text-sm lg:text-base xl:text-lg  text-justify font-sans font-semibold">Lorem ipsum dolor sit amet consecteturQuos obcaecati esse </span>

                 <span class="text-sm sm:text-base lg:text-lg xl:text-xl mt-2 lg:mt-3 font-sans font-bold">The good things</span>
                 <span class="name text-xs sm:text-sm lg:text-base xl:text-lg   text-justify font-sans font-semibold">Lorem ipsum dolor sit amet consecteturQuos obcaecati esse  </span>

                 <span class="text-sm sm:text-base lg:text-lg xl:text-xl mt-2 lg:mt-3  font-sans font-bold">The challenges</span>
                 <span class="name text-xs sm:text-sm lg:text-base xl:text-lg   text-justify font-sans font-semibold">Lorem ipsum dolor sit amet consecteturQuos obcaecati esse  </span>

                </div>
            </div>

                {{-- review-details --}}
                <div class="flex flex-row sm:gap-4 mb-10 justify-start items-center w-[90%] sm:w-[75%] md:w-[65%] lg:w-full  h-[15rem] sm:h-[16rem] md:h-[15rem] lg:h-[18rem] xl:h-[20rem] lg:pl-32 xl:pl-48 mt-3 border-solid border-2 lg:border-x-0 border-sky-50 rounded-md lg:rounded-none bg-gray-50 shadow-lg">
                    <div class="flex flex-col items-center sm:ml-[3rem] h-[13rem] sm:h-[14rem] lg:h-[16rem] w-[8.2rem] lg:w-[13rem] xl:h-[18rem]">
                        <span class="font-sans font-bold text-sm sm:text-base lg:text-lg xl:text-xl text-orange-500 mt-2">Star Rate</span>
                        
                        {{-- star container --}}
                        <div class="flex flex-row justify-center w-auto h-auto">
                            <img class="h-5 sm:h-6 lg:h-7 xl:h-8" src="{{URL('/assets/icons/star.svg')}}" alt="star">
                            <img class="h-5 sm:h-6 lg:h-7 xl:h-8" src="{{URL('/assets/icons/star.svg')}}" alt="star">
                            <img class="h-5 sm:h-6 lg:h-7 xl:h-8" src="{{URL('/assets/icons/star.svg')}}" alt="star">
                            <img class="h-5 sm:h-6 lg:h-7 xl:h-8" src="{{URL('/assets/icons/star.svg')}}" alt="star">
                            <img class="h-5 sm:h-6 lg:h-7 xl:h-8" src="{{URL('/assets/icons/star-transparent.svg')}}" alt="star-transparent">
    
                        </div>
    
                        <span class="text-sm sm:text-base lg:text-lg xl:text-xl font-sans font-bold mt-3">Name</span>
                        <span class="name text-xs sm:text-sm lg:text-base xl:text-lg font-sans font-semibold">Joshua Bugayong</span>
    
                        <span class="text-sm sm:text-base lg:text-lg xl:text-xl font-sans font-bold mt-2">Date</span>
                        <span class="name text-xs sm:text-sm lg:text-base xl:text-lg font-sans font-semibold">02/08/2023</span>
                    </div>
    
                  
                    <div class="flex flex-col items-start h-[13rem] sm:h-[14rem] w-[13rem] sm:w-[14rem] lg:w-[50%] lg:h-[16rem] xl:h-[18rem] ">
                     <span class="text-sm sm:text-base lg:text-lg xl:text-xl mt-2 font-sans font-bold">Comment and Reviews</span>
                     <span class="name text-xs sm:text-sm lg:text-base xl:text-lg  text-justify font-sans font-semibold">Lorem ipsum dolor sit amet consecteturQuos obcaecati esse </span>
    
                     <span class="text-sm sm:text-base lg:text-lg xl:text-xl mt-2 lg:mt-3 font-sans font-bold">The good things</span>
                     <span class="name text-xs sm:text-sm lg:text-base xl:text-lg   text-justify font-sans font-semibold">Lorem ipsum dolor sit amet consecteturQuos obcaecati esse  </span>
    
                     <span class="text-sm sm:text-base lg:text-lg xl:text-xl mt-2 lg:mt-3  font-sans font-bold">The challenges</span>
                     <span class="name text-xs sm:text-sm lg:text-base xl:text-lg   text-justify font-sans font-semibold">Lorem ipsum dolor sit amet consecteturQuos obcaecati esse  </span>
    
                    </div>
                </div>

           
            

            
           

              




           
           

        </div>

    </div>
   
</x-app-layout>