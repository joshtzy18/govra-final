<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body class="bg-white-400">
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

    <ul class="md:flex md:items-center z-[-1] md:z-auto md:static absolute bg-blue-500  w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500 text-center">

        {{-- <span><img class="h-10 inline"
            src="images/govra_logo.png"></span>
        <li class="mx-4 my-6 md:my-0">
        <a href="#" class="text-white text-xl hover:text-white duration-500">GOVRA</a> --}}
       
        

      <li class="mx-4 my-6 md:my-0">
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
      <li class="ml-4 my-6 md:my-0">
        <a href="#" class="text-white text-xl hover:text-slate-950 duration-500">LOGIN</a>
      </li>
      <li class="mx-4 my-6 md:my-0">
      

      <button class="bg-cyan-400 text-white font-[Poppins] duration-500 px-6 py-2 mx-4 hover:bg-cyan-500 rounded ">
        Sign up Free
      </button>
      </li>
    </ul>
<h2 class=""></h2>
    </ul>
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
</body>

</html>