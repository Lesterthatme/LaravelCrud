 <nav class="grid grid-cols-2 bg-gray-600 h-[10vh] text-white shadow-xl">
     <div class="flex justify-start items-center">
         <p class="text-4xl ps-2 font-bold">CRUD</p>
     </div>
     <ul class="flex text-xl gap-3 justify-end items-center pe-3">
         <li><a href="{{ route('CRUD.home') }}" class="hover:text-orange-500 transition-colors duration-200">Home</a></li>
         <li><a href="{{ route('CRUD.create.page') }}"
                 class="hover:text-orange-500 transition-colors duration-200">Create</a>
         </li>
         <li><a href="#" class="hover:text-orange-500 transition-colors duration-200">Log Out</a>
         </li>
     </ul>
 </nav>
