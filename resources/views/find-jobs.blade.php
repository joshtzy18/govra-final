
<x-app-layout>
    @include('components/nav')
    @include('components/highlights-directory-nav')

    
<h2 class=""></h2>


    <div class="container mx-auto py-8">
      <!-- Sample 1 -->
      <div class="bg-gray-200 rounded-md overflow-hidden mb-4 shadow-md">
        <div class="p-6 flex">
          <div class="flex items-center mr-4">
            <img class="h-[200px] w-[200px]" src="assets/images/csc logo.png" alt="Government Logo" />
          </div>
          <div class="mt-[50px] flex flex-col">
            <div class="text-lg font-semibold">Government Name 1</div>
            <div class="mb-2">Job Offer: Software Engineer</div>
            <div class="mb-2">Available Slots: 5</div>
            <a href="#" class="mt-4 block text-blue-600 hover:underline">See more details</a>
          </div>
        </div>
      </div>
  
      <!-- Sample 2 -->
      <div class="bg-gray-200 rounded-md overflow-hidden mb-4 shadow-md">
        <div class="p-6 flex">
          <div class="flex items-center mr-4">
            <img class="h-[200px] w-[200px]" src="assets/images/csc logo.png" alt="Government Logo" />
          </div>
          <div class="mt-[50px] flex flex-col">
            <div class="text-lg font-semibold">Government Name 2</div>
            <div class="mb-2">Job Offer: Data Analyst</div>
            <div class="mb-2">Available Slots: 3</div>
            <a href="#" class="mt-4 block text-blue-600 hover:underline">See more details</a>
          </div>
        </div>
      </div>
  
      <!-- Sample 3 -->
      <div class="bg-gray-200 rounded-md overflow-hidden mb-4 shadow-md">
        <div class="p-6 flex">
          <div class="flex items-center mr-4">
            <img class="h-[200px] w-[200px]" src="assets/images/csc logo.png" alt="Government Logo" />
          </div>
          <div class="mt-[50px] flex flex-col">
            <div class="text-lg font-semibold">Government Name 3</div>
            <div class="mb-2">Job Offer: Accountant</div>
            <div class="mb-2">Available Slots: 2</div>
            <a href="#" class="mt-4 block text-blue-600 hover:underline">See more details</a>
          </div>
        </div>
      </div>
  
      <!-- Sample 4 -->
      <div class="bg-gray-200 rounded-md overflow-hidden mb-4 shadow-md">
        <div class="p-6 flex">
          <div class="flex items-center mr-4">
            <img class="h-[200px] w-[200px]" src="assets/images/csc logo.png" alt="Government Logo" />
          </div>
          <div class="mt-[50px] flex flex-col">
            <div class="text-lg font-semibold">Government Name 4</div>
            <div class="mb-2">Job Offer: Marketing Specialist</div>
            <div class="mb-2">Available Slots: 8</div>
            <a href="#" class="mt-4 block text-blue-600 hover:underline">See more details</a>
          </div>
        </div>
      </div>
    </div>
  
  </body>
  
 


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