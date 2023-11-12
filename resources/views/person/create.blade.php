<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('People') }}
        </h2>
    </x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <form action="{{route('person.store')}}" method="POST">
                    @csrf
                    <h3 class="font-semibold pb-5">Add a new person</h3>

                    <div class="grid grid-cols-2 gap-6">
                        <div>
                            <label class="block" for="firstname"> first name</label>
                            <input class="block w-full" type="text" name="firstname" id="firstname" value="{{old('firstname')}}">
                        </div>
                        <div>
                            <label class="block" for="lastname"> last name</label>
                            <input class="block w-full" type="text" name="lastname" id="lastname" value="{{old('lastname')}}">
                        </div>
                        <div>
                            <label class="block" for="email"> email</label>
                            <input class="block w-full" type="text" name="email" id="email" value="{{old('email')}}">
                        </div>
                        <div>
                            <label class="block" for="phone"> phone</label>
                            <input class="block w-full" type="text" name="phone" id="phone" value="{{old('phone')}}">
                        </div>
                    </div>
                    <div class="mt-6 flex items-center justify-end gap-x-6">
                        <a href="{{route('person.index')}}">Cancel</a>
                        <button class="bg-blue-600 text-white py-2 px-3 rounded-full" type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
