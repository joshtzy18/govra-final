<x-app-layout>
    @include('components/nav-user')
    
    
    
    {{-- csc banner logo --}}

    <div class="flex max-w-screen-sm sm:max-w-screen-md md:max-w-screen-lg lg:flex lg:max-w-screen-xl  md:justify-center md:items-center lg:justify-center lg:items-center xl:max-w-screen-2xl xl:justify-start xl:items-center justify-start items-center w-full h-40 mt-20 border-solid border-y-2 border-l-blue-600 z-0">
     <img class="h-[6rem] w-[100%] md:w-[80%] lg:w-[80%] xl:w-[55%] xl:ml-20 xl:h-[8rem] " src="{{URL('assets/images/csc-logo-03.png')}}" alt="cscbannerlogo">   
    </div>

      {{-- announcement-container=--clicked --}}
<div class="h-auto w-full border-solid border-2  mb-5 flex flex-col border-red-500 announcement-container">
  <div class="h-auto w-full">
      <span class="flex flex-wrap text-start font-sans font-bold text-lg bg-red-600 text-white p-2 md:text-xl xl:text-2xl">{{$announce->title}}</span>
  </div>

  {{-- published text --}}
  <div class="h-auto w-auto mt-1 px-2 py-2">
    <span class="text-sm font-sans text-gray-400 sm:text-md md:text-[16px] xl:text-lg">Published: {{$announce->getFormattedDate()}}</span>
  </div>

  {{-- announce no text --}}
  <div class="flex h-auto w-full justify-end mt-1 px-2">
    <span class="font-sans text-sm sm:text-md md:text-[16px] xl:text-lg ">{{$announce->announcement_no}}</span>
  </div>

  {{-- announcement text --}}
  <div class="flex h-auto w-full justify-center my-6">
    <span class="font-semibold font-sans md:text-lg xl:text-xl">ANNOUNCEMENT</span>

  </div>

  {{-- for and subject text --}}

  <div class="flex flex-col">
    <div class="flex flex-row w-full h-auto border-solid border-2 border-gray-50 ">
      <span class=" font-bold font-sans py-16 pl-16 w-[50%] xl:w-[38%] justify-end md:pl-36 lg:pl-[17rem]  lg:py-10 xl:pl-[23rem] xl:text-lg">FOR:</span>
      <span class="flex flex-wrap px-5  text-justify font-sans font-semibold md:p-3 lg:p-2 xl:text-lg">{{$announce->for}}</span>
    </div>

  </div>
  <div class="w-full h-auto flex flex-row items-center content-center bg-gray-100 py-2 md:justify-center md:items-center xl:justify-start xl:item">
    <span class="font-bold font-sans pl-8 xl:text-lg xl:pl-[21rem]">SUBJECT:</span>
    <i class="font-sans underline px-5 flex flex-wrap text-justify font-semibold xl:text-lg">{{$announce->subject}}</i>
  </div>

  {{-- content container --}}
  <div class="h-auto w-full p-4">
    <span class="flex flex-wrap text-justify xl:text-[17px]">{!! $announce->content !!}</span>
  </div>
  <hr class="w-full ">

    {{-- view full document --}}
  <div class="w-full px-4 py-2 ">
    <span class="xl:text-[17px]">View full document here:</span>
    <span class="text-blue-500 text-justify xl:text-[17px] ">{{$announce->links}}</span>
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