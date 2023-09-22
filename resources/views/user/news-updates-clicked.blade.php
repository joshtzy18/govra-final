
<x-app-layout>
    <title>{{$nudetails->title}}</title>
   


    @include('components/nav-user')
   
    
    
    {{-- csc banner logo --}}

    <div class="flex max-w-screen-sm sm:max-w-screen-md md:max-w-screen-lg lg:flex lg:max-w-screen-xl  md:justify-center md:items-center lg:justify-center lg:items-center xl:max-w-screen-2xl xl:justify-start xl:items-center justify-start items-center w-full h-40 mt-20 border-solid border-y-2 border-l-blue-600 z-0">
     <img class="h-[6rem] w-[100%] md:w-[80%] lg:w-[80%] xl:w-[55%] xl:ml-20 xl:h-[8rem] " src="{{URL('assets/images/csc-logo-03.png')}}" alt="cscbannerlogo">   
    </div>

    {{-- banner and announcements container --}}
    <div class="flex items-center max-w-screen-sm sm:max-w-screen-md md:max-w-screen-lg lg:max-w-screen-xl xl:max-w-screen-2xl xl:flex-row xl:h-[25rem] flex-col h-[29rem] md:h-[53rem] lg:h-[40rem] w-full">

     

        {{-- banner container --}}
        <div class="hidden md:flex border-solid border-2 relative border-sky-50 shadow-md mt-5 w-[90%] lg:w-[80%] xl:w-[50%] xl:mr-10 xl:ml-28 xl:mb-4 xl:h-70 h-auto">

            <div
  id="carouselExampleControls"
  class="relative"
  data-te-carousel-init
  data-te-ride="carousel">
  <!--Carousel items-->
  <div
    class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
    <!--First item-->
    <div
      class="relative float-left -mr-[100%] w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
      data-te-carousel-item
      data-te-carousel-active>
      {{-- <img
        src="https://mdbcdn.b-cdn.net/img/new/slides/041.webp"
        class="block w-full"
        alt="Wild Landscape" /> --}}
        <img src="{{URL('assets/images/Online_Zumba_and_Film_Showing.png')}}" alt="onlinezumba" class="block w-full h-full object-cover" />
    </div>
    <!--Second item-->
    <div
      class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
      data-te-carousel-item>
      <img src="{{URL('assets/images/2023_Government_Online_Career_Fair.png')}}" alt="onlinecareer" class="block w-full h-full object-cover" />
      

    </div>
    <!--Third item-->
    <div
      class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
      data-te-carousel-item>
      
      <img src="{{URL('assets/images/csevs.png')}}" alt="csevs" class="block w-full h-full object-cover" />
    </div>

     <!--fourth item-->
     <div
     class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
     data-te-carousel-item>
     
     <img src="{{URL('assets/images/List_of_Passers_for_the_26_March_2023_CSE-PPT.png')}}" alt="List_of_Passers" class="block w-full h-full object-cover" />
   </div>

    <!--5th item-->
    <div
    class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
    data-te-carousel-item>
    
    <img src="{{URL('assets/images/MicrosoftTeams-image_4.png')}}" alt="microsoftteams" class="block w-full h-full object-cover" />
  </div>

   <!--six item-->
   <div
   class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
   data-te-carousel-item>
   
   <img src="{{URL('assets/images/CSC_in_Action_Slider.jpg')}}" alt="inactionslider" class="block w-full h-full object-cover" />
 </div>

  <!--seven item-->
  <div
  class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
  data-te-carousel-item>
  
  <img src="{{URL('assets/images/CS_Reporter_Q2_2023.png')}}" alt="csreporter" class="block w-full h-full object-cover" />
</div>

         <!--last item-->
  <div
  class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
  data-te-carousel-item>
  
  <img src="{{URL('assets/images/CSC_TikTok_slider.png')}}" alt="tiktok" class="block w-full h-full object-cover" />
</div>


   

  </div>

  <!--Carousel controls - prev item-->
  <button
    class="absolute bottom-0 left-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
    type="button"
    data-te-target="#carouselExampleControls"
    data-te-slide="prev">
    <span class="inline-block h-8 w-8">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 24 24"
        stroke-width="1.5"
        stroke="currentColor"
        class="h-6 w-6">
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          d="M15.75 19.5L8.25 12l7.5-7.5" />
      </svg>
    </span>
    <span
      class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
      >Previous</span
    >
  </button>
  <!--Carousel controls - next item-->
  <button
    class="absolute bottom-0 right-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
    type="button"
    data-te-target="#carouselExampleControls"
    data-te-slide="next">
    <span class="inline-block h-8 w-8">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 24 24"
        stroke-width="1.5"
        stroke="currentColor"
        class="h-6 w-6">
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          d="M8.25 4.5l7.5 7.5-7.5 7.5" />
      </svg>
    </span>
    <span
      class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
      >Next</span
    >
  </button>
</div>
        </div>

        
        
        <div class="flex flex-col w-full justify-center items-center lg:flex lg:flex-row lg:gap-10 lg:w-full xl:items-start xl:justify-start xl:gap-2 xl:flex-col xl:w-[30%] xl:mr-10 xl:h-[22rem] xl:mb-4  lg:mt-5 lg:justify-center lg:items-center lg:h-[19rem]">
          <div class="border-solid border-2 border-red-600 mt-5 w-[90%] lg:w-[25rem] xl:w-full lg:mt-0 h-48 md:h-56">
            <span class=" flex justify-center md:justify-start md:pl-4 md:h-10 md:text-center md:pt-1 text-white text-center w-full bg-red-600 h-8 text-xl font-sans font-bold">announcements</span>
          
            

          
              @foreach ($announcements as $announce)
              <x-announcement :announce="$announce">

              </x-announcement>
              @endforeach
      
      
      
  
          </div>


          <div class="border-solid border-2 border-red-600 mt-5 w-[90%] lg:w-[25rem] lg:mt-0 xl:w-full h-48 md:h-56">
            <span class=" flex justify-center md:justify-start md:pl-4 md:h-10 md:text-center md:pt-1 text-white text-center w-full bg-red-600 h-8 text-xl font-sans font-bold">Examinations</span>
            
         @foreach ($examinations as $exams)
             <x-examinations :exams="$exams">


             </x-examinations>

         @endforeach
                 
         </div>

        </div>
       

    </div>

    {{-- banner-content container  --}}
    <div class="flex lg:flex-row max-w-screen-sm sm:max-w-screen-md md:max-w-screen-lg lg:max-w-screen-xl xl:max-w-screen-2xl items-center flex-col h-[30rem] w-full ">
        <div class="flex flex-col justify-center items-center h-[25rem] w-[90%] md:w-[80%] lg:w-[50%] lg:mt-0 mt-10">
            <span class="text-3xl font-sans font-semibold sm:text-4xl md:text-4xl lg:text-3xl xl:text-4xl">FIND YOUR DREAM</span>
            <span class="text-3xl font-sans font-semibold mt-3 sm:text-4xl md:text-4xl lg:text-3xl xl:text-4xl">JOB TODAY</span>
            <span class="text-lg font-sans font-semibold mt-3 sm:text-2xl md:text-2xl lg:text-xl xl:text-2xl">Explore all the most exciting job</span>
            <span class="text-lg font-sans font-semibold sm:text-2xl md:text-2xl lg:text-xl xl:text-2xl">roles based on your career!</span>

            <div class="flex flex-row items-center justify-center w-[90%] lg:w-[80%] xl:w-[60%] h-[7rem] bg-blue-50 mt-7 px-4">
                <div class="flex flex-col">
                    <label class="font-sans font-semibold sm:text-lg md:text-xl lg:text-lg" for="location">Location</label>
                <input type="password" name="password" id="password" required class="relative h-[1.8rem] sm:h-[2rem] md:h-[2.5rem] lg:h-[1.8rem] max-w-full w-[100%] mr-5  mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block  rounded-md focus:ring-1 mb-3" placeholder="Enter location" />
               
                </div>
                
                <button class="inline-flex items-center justify-center md:text-lg h-10 lg:h-10 sm:h-12 md:h-13 sm:w-[8rem] lg:w-[7rem] sm:ml-7 px-4 py-2 w-[7rem] bg-orange-500 hover:bg-orange-600 text-white font-medium rounded-md mx-2">
                    <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                      </svg>
                
                    Search
                  </button>

            </div>

           
        
        </div>

        <div class="hidden lg:flex lg:h-[25rem] w-[50%] justify-center items-center">

            <img class="xl:w-[80%]" src="{{URL('assets/images/img-banner.png')}}" alt="">
        </div>
           
    </div>

     {{-- popular job container --}}
     <div class="flex max-w-screen-sm sm:max-w-screen-md md:max-w-screen-lg lg:max-w-screen-xl xl:max-w-screen-2xl flex-col items-center  w-full h-[80rem] sm:h-[90rem] md:h-[95rem] lg:h-[21rem] xl:h-[25rem]">
        <div class="flex flex-col items-center h-[80rem]  sm:h-[90rem] md:h-[95rem] w-[90%] lg:flex-col lg:w-screen lg:flex lg:justify-start lg:items-start lg:h-[21rem] mt-2">
            <span class="font-sans font-bold text-2xl sm:text-3xl lg:ml-7 lg:text-2xl xl:text-3xl xl:mt-2 lg:mb-2 lg:pt-2 pt-5 mb-3">Popular Job Category</span>

            <div class="flex mt-2 drop-shadow-md bg-blue-100 flex-col rounded-xl lg:flex-row lg:h-[15rem] lg:justify-center lg:items-center lg:mt-0 lg:w-screen xl:h-[22rem] xl:mt-3 items-center h-[95%] lg:pt-0 w-[85%]">  
                {{-- popular job contents teacher --}}
                <div class="flex flex-col justify-center items-center h-[13rem] w-[85%] lg:w-[25%] lg:mr-5 lg:ml-5   sm:h-[15rem] md:h-[16rem] sm:w-[80%] lg:h-[13rem] xl:h-[14rem] lg:mt-0 bg-boxbg  shadow-md bg-opacity-50 mt-5  rounded-lg">
                    <img class="h-[6rem] md:h-[7rem] lg:h-[5rem] xl:h-[6rem]" src="{{URL('assets/icons/man-teacher.svg')}}" alt="teacher">
                    <div class="flex justify-center items-center mt-2 h-8 md:h-10 bg-darkb w-full border-solid border-2 border-red-400  (0,34,51)">
                        <span class="font-sans font-semibold md:text-xl text-lg lg:text-base xl:text-xl text-white">Teacher</span>
                    </div>
    
                    <div class="flex justify-center items-center mt-[1px] h-8 md:h-10 bg-orange-500 w-full border-solid border-2 border-red-400  (0,34,51)">
                        <span class="font-sans font-semibold md:text-xl text-lg lg:text-base xl:text-xl text-white">120 Job offers</span>
                    </div>
    
                </div>
    
                    {{-- popular job contents fireman --}}
                    <div class="flex flex-col justify-center items-center h-[13rem] w-[85%] lg:w-[25%] lg:mr-5   sm:h-[15rem] md:h-[16rem] lg:h-[13rem] xl:h-[14rem]  lg:mt-0 sm:w-[80%] bg-boxbg shadow-md  bg-opacity-50 mt-5  rounded-lg">
                        <img class="h-[6rem] md:h-[7rem] lg:h-[5rem] xl:h-[6rem]" src="{{URL('assets/icons/firefighter.svg')}}" alt="teacher">
                        <div class="flex justify-center items-center mt-2 h-8 md:h-10 bg-darkb w-full border-solid border-2 border-red-400  (0,34,51)">
                            <span class="font-sans font-semibold text-lg md:text-xl lg:text-base xl:text-xl md:text-center text-white">Fire Fighter</span>
                        </div>
        
                        <div class="flex justify-center items-center mt-[1px] h-8 md:h-10 bg-orange-500 w-full border-solid border-2 border-red-400  (0,34,51)">
                            <span class="font-sans font-semibold text-lg md:text-xl lg:text-base xl:text-xl text-white">120 Job offers</span>
                        </div>
        
                    </div>

                     {{-- popular job contents it specialist --}}
                    <div class="flex flex-col justify-center items-center h-[13rem] w-[85%] lg:w-[25%] lg:mr-5   sm:h-[15rem] md:h-[16rem] lg:h-[13rem] xl:h-[14rem]  lg:mt-0 sm:w-[80%] bg-boxbg shadow-md  bg-opacity-50 mt-5  rounded-lg">
                        <img class="h-[6rem] md:h-[7rem] lg:h-[5rem] xl:h-[6rem]" src="{{URL('assets/icons/laptop.svg')}}" alt="laptop">
                        <div class="flex justify-center items-center mt-2 h-8 md:h-10 bg-darkb w-full border-solid border-2 border-red-400  (0,34,51)">
                            <span class="font-sans font-semibold text-lg md:text-xl lg:text-base xl:text-xl text-white">IT Specialist</span>
                        </div>
        
                        <div class="flex justify-center items-center mt-[1px] h-8 md:h-10 bg-orange-500 w-full border-solid border-2 border-red-400  (0,34,51)">
                            <span class="font-sans font-semibold text-lg md:text-xl xl:text-xl lg:text-base text-white">120 Job offers</span>
                        </div>
        
                    </div>

                      {{-- popular job contents it nurrse --}}
                      <div class="flex flex-col justify-center items-center h-[13rem] w-[85%] sm:h-[15rem] md:h-[16rem] sm:w-[80%] lg:w-[25%] xl:mb-5 xl:mr-5 lg:h-[13rem] xl:h-[14rem] lg:hidden xl:flex bg-boxbg shadow-md  bg-opacity-50 mt-5  rounded-lg">
                        <img class="h-[6rem] md:h-[7rem] lg:h-[5rem] xl:h-[6rem] w-[40%]" src="{{URL('assets/icons/nurse.png')}}" alt="nurse">
                        <div class="flex justify-center mt-2 h-8 md:h-10 bg-darkb w-full border-solid border-2 border-red-400  (0,34,51)">
                            <span class="font-sans font-semibold text-lg md:text-xl xl:text-xl text-white">Nurse</span>
                        </div>
        
                        <div class="flex justify-center mt-[1px] h-8 md:h-10 bg-orange-500 w-full border-solid border-2 border-red-400  (0,34,51)">
                            <span class="font-sans font-semibold text-lg md:text-xl xl:text-xl text-white">120 Job offers</span>
                        </div>
        
                    </div>

                      {{-- explore all --}}
                      <div class="flex flex-col justify-center items-center h-[13rem] w-[85%] lg:w-[25%] lg:mr-5  sm:h-[15rem] md:h-[16rem] lg:h-[13rem] xl:h-[14rem] shadow-md   lg:mt-0 sm:w-[80%] bg-orange-500 bg-opacity-95 mt-5  rounded-lg">
                        <img class="h-[8rem] md:h-[10rem] lg:h-[8rem] xl:h-[9rem] w-[100%]" src="{{URL('assets/icons/arroow.svg')}}" alt="arrow">
                        <span class="text-2xl md:text-3xl font-sans font-bold lg:text-xl xl:text-2xl  text-white">EXPLORE ALL!</span>
                     
        
                    </div>
                
                </div>

        </div>
    </div>

    <div class="none  lg:flex lg:flex-row relative">
{{-- featured video container --}}

<div class=" flex flex-col flex-start items-center h-auto lg:h-auto lg:flex-col  lg:float-left max-w-screen-sm sm:max-w-screen-md md:max-w-screen-lg lg:max-w-screen-xl w-full lg:w-[40%] mt-2">

    {{-- feature video content --}}
    <div class="flex flex-col items-center h-[33rem] lg:h-[25rem] w-[90%] border-solid border-2 border-sky-50 shadow-md">

        <span class="mt-2 text-center font-sans font-bold text-lg">Featured Videos</span>
       
        {{-- featured video container 1 --}}
        <div class="h-[13rem] lg:h-[10rem] relative mt-2 rounded-lg w-[90%] border-solid border-2 border-sky-50 shadow-md">

            {{-- <iframe class="h-full w-full rounded-lg object-cover" src="https://youtu.be/mPf1EOcuJiw">
            </iframe> --}}
            <iframe class="h-full w-full object-contain rounded-md" src="https://www.youtube.com/embed/mPf1EOcuJiw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>

         {{-- featured video container 2 --}}
         <div class="h-[13rem] lg:h-[10rem] mt-3 rounded-lg w-[90%] border-solid border-2 border-sky-50 shadow-md">
            <iframe class="h-full w-full object-contain rounded-md" src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fweb.facebook.com%2Fcivilservicegovph%2Fvideos%2F287999550472969%2F&show_text=true&width=560&t=0" frameborder="0" width="560" height="429" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
         </div>
        
      
    </div>
 
    {{-- //social media container --}}
    <div class="flex justify-center items-center h-[30rem] max-w-screen-sm mt-5 w-[70%] sm:w-[80%] relative rounded-lg border-solod border-2 border-sky-50 shadow-md">
        <iframe class="h-full w-full object-contain rounded-md" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fweb.facebook.com%2Fcivilservicegovph%2F%3Fref%3Dembed_page&tabs=timeline&width=340&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" framdeborder="0" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
     </div>
</div>
            <hr class="flex md:hidden h-10 w-full border-t-2 border-gray-300 mt-2 absolute">

            {{-- new and update container --}}
            <div class="flex justify-center mt-5 2xl:mt-0 items-start w-full 2xl:w-[70%] py-5  h-auto">
                <div class="flex items-center flex-col rounded-lg h-auto  w-[90%] lg:w-[95%] pb-12">

                   
                   

                    <x-news-updates-clicked :nudetails="$nudetails">
                    
                      
                 
                        
                    </x-news-updates-clicked>
                   
                
                   
                </div>

                
            </div>
          

            {{-- csc activities with links --}}
            <div class="flex justify-center flex-start h-auto float-left w-full lg:w-[27%] lg:mt-2">


            {{-- csc activities with links container --}}
            <div class="flex flex-col items-center h-auto w-[80%] md:w-[55%] py-5 lg:w-full">

            {{-- csc acitvity 1 --}}
            <div class="flex justify-center items-center h-[10rem] w-[80%] lg:w-[80%] relative lg:h-[7rem] border-solid border-2 border-sky-50 shadow-md">
               {{-- <span class=" text-2xl font-sans font-bold">csc activity 1</span> --}}
               
                <img class="h-full w-full object-fit" src="{{URL('assets/images/government-logo/csevs_logo.png')}}" alt="csevs">
    
               

            </div>

            {{-- csc acitvity 2 --}}
            <div class="flex justify-center items-center h-[10rem] mt-5 w-[80%] lg:w-[80%] lg:h-[7rem] border-solid border-2 border-sky-50 shadow-md">
            {{-- <span class="  text-2xl font-sans font-bold">csc activity 2</span> --}}
            <img class="h-full w-full object-fit" src="{{URL('assets/images/government-logo/ccharter.png')}}" alt="ccharter">
            </div>

            {{-- csc acitvity 3 --}}
            <div class="flex justify-center items-center h-[10rem] mt-5 w-[80%] lg:w-[80%] lg:h-[7rem] border-solid border-2 border-sky-50 shadow-md">
            {{-- <span class="  text-2xl font-sans font-bold">csc activity 3</span> --}}
            <img class="h-full w-full object-fit" src="{{URL('assets/images/government-logo/trainingca.png')}}" alt="traningca">
            </div>

            {{-- csc acitvity 4 --}}
            <div class="flex justify-center items-center h-[10rem] mt-5 w-[80%] lg:w-[80%] lg:h-[7rem] border-solid border-2 border-sky-50 shadow-md">
            {{-- <span class=" text-2xl font-sans font-bold">csc activity 4</span> --}}
            <img class="h-full w-full object-fit" src="{{URL('assets/images/government-logo/oras.png')}}" alt="oras">
            </div>

            {{-- csc acitvity 5 --}}
            <div class="flex justify-center items-center h-[10rem] mt-5 w-[80%] lg:w-[80%] lg:h-[7rem] border-solid border-2 border-sky-50 shadow-md">
            {{-- <span class="  text-2xl font-sans font-bold">csc activity 5</span> --}}
            <img class="h-full w-full object-fit" src="{{URL('assets/images/government-logo/saln.png')}}" alt="saln">
            </div>

             {{-- csc acitvity 6 --}}
             <div class="flex justify-center items-center h-[10rem] mt-5 w-[80%] lg:w-[80%] lg:h-[7rem] border-solid border-2 border-sky-50 shadow-md">
                {{-- <span class="  text-2xl font-sans font-bold">csc activity 5</span> --}}
                <img class="h-full w-full object-fit" src="{{URL('assets/images/government-logo/comex.png')}}" alt="comex">
                </div>

                 {{-- csc acitvity 7 --}}
             <div class="flex justify-center items-center h-[10rem] mt-5 w-[80%] lg:w-[80%] lg:h-[7rem] border-solid border-2 border-sky-50 shadow-md">
                {{-- <span class="  text-2xl font-sans font-bold">csc activity 5</span> --}}
                <img class="h-full w-full object-fit" src="{{URL('assets/images/government-logo/examresult.png')}}" alt="examresult">
                </div>

            </div>
            </div>
           
                    
                </div>
    




    {{-- quick links --}}
    <div class="flex max-w-screen-sm sm:max-w-screen-md md:max-w-screen-lg lg:max-w-screen-xl xl:max-w-screen-2xl xl:h-[20rem] xl:gap-10 xl:flex-row  flex-col items-center h-[51rem] w-full">
        

       

        {{-- issuances container --}}
        <div class="h-[15rem] w-[90%] mt-5 rounded-lg xl:ml-14 border-solid border-2 border-red-600">
            <span class=" flex justify-center md:justify-start md:pl-4 md:h-10 md:text-center md:pt-1 text-white text-center w-full bg-red-600 h-8 text-xl font-sans font-bold">Issuances</span>

        </div>

            {{-- issuances quick links --}}
            <div class="h-[15rem] w-[90%] mt-5 rounded-lg border-solid border-2 border-red-600">
                <span class=" flex justify-center md:justify-start md:pl-4 md:h-10 md:text-center md:pt-1 text-white text-center w-full bg-red-600 h-8 text-xl font-sans font-bold">Quick Links</span>
    
            </div>

             {{-- issuances archives --}}
             <div class="h-[15rem] w-[90%] mt-5 rounded-lg xl:mr-14 border-solid border-2 border-red-600">
                <span class=" flex justify-center md:justify-start md:pl-4 md:h-10 md:text-center md:pt-1 text-white text-center w-full bg-red-600 h-8 text-xl font-sans font-bold">Archives</span>
    
            </div>

    </div>
 
   
   

    
<script>
    // Add the JavaScript code here
    document.addEventListener('DOMContentLoaded', function () {
      // Get all carousel items
      const carouselItems = document.querySelectorAll('[data-te-carousel-item]');
      
      // Get the prev and next buttons
      const prevButton = document.querySelector('[data-te-slide="prev"]');
      const nextButton = document.querySelector('[data-te-slide="next"]');
  
      // Set the current active slide index
      let activeSlide = 0;
  
      // Function to advance to the next slide
      const nextSlide = () => {
        carouselItems[activeSlide].classList.add('hidden');
        activeSlide = (activeSlide + 1) % carouselItems.length;
        carouselItems[activeSlide].classList.remove('hidden');
      };
  
      // Function to go to the previous slide
      const prevSlide = () => {
        carouselItems[activeSlide].classList.add('hidden');
        activeSlide = (activeSlide - 1 + carouselItems.length) % carouselItems.length;
        carouselItems[activeSlide].classList.remove('hidden');
      };
  
      // Start the auto-advance timer
      let interval = setInterval(nextSlide, 4000); // Adjust the duration (in milliseconds) as needed
  
      // Function to stop the auto-advance on user interaction
      const stopAutoAdvance = () => clearInterval(interval);
  
      // Bind the stopAutoAdvance function to user interactions
      const carousel = document.getElementById('carouselExampleControls');
      carousel.addEventListener('mouseenter', stopAutoAdvance);
      carousel.addEventListener('mouseleave', () => {
        interval = setInterval(nextSlide, 4000); // Restart the auto-advance when the mouse leaves the carousel
      });
  
      // Bind the nextSlide function to the next button click
      nextButton.addEventListener('click', () => {
        nextSlide();
        stopAutoAdvance(); // Stop auto-advance on button click
      });
  
      // Bind the prevSlide function to the prev button click
      prevButton.addEventListener('click', () => {
        prevSlide();
        stopAutoAdvance(); // Stop auto-advance on button click
      });
    });
  </script>
  
</x-app-layout>