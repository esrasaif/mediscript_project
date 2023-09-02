<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 border border-gray-300 bg-gray-100 p-6 rounded-xl ">
          
            <h1 class="text-center font-bold text-xl  text-blue-400">welcome!</h1>
                <h6 class="text-center text-xl mt-2">Register</h6>


        <form method="POST" action="/register" class="mt-10">

         @csrf

            {{-- name --}}
            <x-formPieces.input name="name" />
             {{-- username --}}
             <x-formPieces.input name="username" />
             
               {{-- speciality --}}
               <x-formPieces.input name="speciality" />


                      {{-- department --}}
             <div class="relative  rounded-xl">

                {{-- get all departments as array --}}
          @php
              $categories= \App\Models\Category::all() ;
          @endphp

          <x-formPieces.label name="department" />

            <select name="department" id="department" class="bg-gray-200 rounded-sm p-2" >

                  @foreach( $categories as $category)
                  <option value="{{$category->id}}"  {{old('department') == $category->id ? 'selected'  :'' }}  >  {{ucwords($category->name)}} </option>
                  @endforeach

            </select>  

            <x-formPieces.error name="department" />

        </div>


             {{-- email --}}
              <x-formPieces.input name="email" type="email" />

                {{-- phone number --}}
                <x-formPieces.input name="phoneNumber" type="tel" />

              {{-- pass --}}
              <x-formPieces.input name="password" type="password" />

              <x-formPieces.input name="password_confirmation" type="password" />



               {{-- submit --}}

              <x-formPieces.button name="Submit" />

        </form>

        </main>
    </section>


</x-layout>