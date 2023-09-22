
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body class="bg-white-400">
  <nav class="text-white p-5 bg-blue-500 z-50  shadow md:flex md:items-center md:justify-between fixed w-full top-0">
    <div class="flex justify-between items-center ">
      <span class="text-2xl font-[Poppins] cursor-pointer">
        <img class="h-10 inline " src="{{URL('assets/images/govra_logo.png')}}" alt="govlogo">
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
       
        

      <li class="mx-4 my-6 md:my-0">
        <a href="#" class=" text-white text-xl hover:text-slate-950 duration-500 font-sans font-semibold">HOME</a>
      </li>
      <li class="mx-4 my-6 md:my-0">
        <a href="/job-offers-user" class="text-white text-xl hover:text-slate-950 duration-500 font-sans font-semibold">FIND JOBS</a>
      </li>
      <li class="mx-4 my-6 md:my-0">
        <a href="#" class="text-white text-xl hover:text-slate-950 duration-500 font-sans font-semibold" >GOVERNMENT</a>
      </li>
<li><button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover" class="text-white font-sans text-xl font-semibold rounded-lg uppercase px-5 py-2.5 text-center inline-flex items-center" type="button">About <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
</svg></button>
<!-- Dropdown menu -->
<div id="dropdownHover" class=" absolute z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
  <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton">
    <li>
      <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mandate</a>
    </li>
    <li>
      <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Historical Highlights</a>
    </li>
    <li>
      <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">The Commission</a>
    </li>
    <li>
      <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Performance Pledge</a>
    </li>
    <li>
      <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Privacy Policy</a>
    </li>
  </ul>
</div></li>


      <li class="mx-4 my-6 md:my-0">
        <a href="#" class="text-white text-xl hover:text-slate-950 duration-500font-sans font-semibold">CONTACT</a>
      </li>
     
    </ul>
<h2 class=""></h2>
    </ul>

  
    {{-- profile and dropdown copnatiner --}}
    <li class="list-none mr-28"> <div class="flex">
      <div class="flex items-center justify-center h-11 w-11 rounded-full bg-red-500">
        <img class=" rounded-full object-fill w-[80%]" src="{{URL('assets/images/government-logo/DepEd.svg')}}" alt="profile">
      </div>
     
      <button id="dropdownHoverButtonProfile" data-dropdown-toggle="dropdownHoverProfileMenu" data-dropdown-trigger="hover" class=" inline-flex items-center" type="button"> <svg class="w-3 h-3 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
      </svg></button>
    </div> 
    <!-- Dropdown menu -->
    <div id="dropdownHoverProfileMenu" class=" absolute z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
      <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButtonProfile">
        <li>
          <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mandate</a>
        </li>
        <li>
          <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Historical Highlights</a>
        </li>
        <li>
          <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">The Commission</a>
        </li>
        <li>
          <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Performance Pledge</a>
        </li>
        <li>
          <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Privacy Policy</a>
        </li>
      </ul>
    </div></li>

  </nav>



  

  {{-- <div class=" w-96 h-70 mt-8">
   
    <img class=" w-96 h-70 " src="images/csc_logo.png" alt="logo">
    
    
  </div> --}}


  <script>
    function Menu(e){
      let list = document.querySelector('ul');
      e.name === 'menu' ? (e.name = "close",list.classList.add('top-[80px]') , list.classList.add('opacity-100')) :( e.name = "menu" ,list.classList.remove('top-[80px]'),list.classList.remove('opacity-100'))
    }
    </script>

    <!-- Add the following JavaScript code to your HTML file -->

    <script>
  // Get the button and dropdown elements
  const button = document.getElementById('dropdownHoverButton');
  const dropdown = document.getElementById('dropdownHover');

  // Show the dropdown when the button is hovered
  button.addEventListener('mouseover', () => {
    dropdown.classList.remove('hidden');
  });

  // Hide the dropdown when the mouse leaves the button or dropdown
  button.addEventListener('mouseleave', () => {
    dropdown.classList.add('hidden');
  });

  dropdown.addEventListener('mouseleave', () => {
    dropdown.classList.add('hidden');
  });

  // Prevent the dropdown from hiding when the mouse moves within the dropdown
  dropdown.addEventListener('mouseover', () => {
    dropdown.classList.remove('hidden');
  });

  
  
  

  


  

  // // Add click event listeners to each list item to handle selection
  // const listItems = dropdown.querySelectorAll('ul li a');
  // listItems.forEach((item) => {
  //   item.addEventListener('click', (event) => {
  //     event.preventDefault();
  //     const selectedText = item.innerText.trim();
  //     console.log('Selected:', selectedText);
  //     // Perform any action based on the selected item here
  //     // For example, you could update the button's text with the selected option
  //     button.innerText = `Dropdown hover ${selectedText}`;
  //     dropdown.classList.add('hidden'); // Hide the dropdown after selection
  //   });
  // });



  </script>

<script>
  function Menu(e){
    let list = document.querySelector('ul');
    e.name === 'menu' ? (e.name = "close",list.classList.add('top-[80px]') , list.classList.add('opacity-100')) :( e.name = "menu" ,list.classList.remove('top-[80px]'),list.classList.remove('opacity-100'))
  }
  </script>




{{-- profile scrript --}}
  <script>
  
  // Get the button and dropdown elements
  const buttonProfile = document.getElementById('dropdownHoverButtonProfile');
  const dropdownMenu = document.getElementById('dropdownHoverProfileMenu');

  // Show the dropdown when the button is hovered
  button.addEventListener('mouseover', () => {
    dropdown.classList.remove('hidden');
  });

  // Hide the dropdown when the mouse leaves the button or dropdown
  button.addEventListener('mouseleave', () => {
    dropdown.classList.add('hidden');
  });

  dropdown.addEventListener('mouseleave', () => {
    dropdown.classList.add('hidden');
  });

  // Prevent the dropdown from hiding when the mouse moves within the dropdown
  dropdown.addEventListener('mouseover', () => {
    dropdown.classList.remove('hidden');
  });

  </script>
  

 
