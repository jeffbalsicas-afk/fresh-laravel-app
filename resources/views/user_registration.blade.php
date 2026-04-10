<x-layout title="User Registration">

<div class="flex justify-center items-center min-h-screen">
    
    <div class="bg-white text-black p-8 rounded-2xl shadow-lg w-full max-w-lg">
        
        <h2 class="text-2xl font-bold mb-6 text-center">User Registration</h2>

        <form method="POST" action="/users/store" class="space-y-4">
            @csrf

            <div class="grid grid-cols-2 gap-3">
                <input type="text" name="first_name" placeholder="First Name" class="p-2 border rounded w-full">
                <input type="text" name="last_name" placeholder="Last Name" class="p-2 border rounded w-full">
            </div>

            <div class="grid grid-cols-2 gap-3">
                <input type="text" name="middle_name" placeholder="Middle Name" class="p-2 border rounded w-full">
                <input type="text" name="nickname" placeholder="Nickname" class="p-2 border rounded w-full">
            </div>

            <input type="email" name="email" placeholder="Email" class="p-2 border rounded w-full">

            <div class="grid grid-cols-2 gap-3">
                <input type="number" name="age" placeholder="Age" class="p-2 border rounded w-full">
                <input type="text" name="contact_number" placeholder="Contact Number" class="p-2 border rounded w-full">
            </div>

            <textarea name="address" placeholder="Address" class="p-2 border rounded w-full"></textarea>

            <button type="submit" class="w-full bg-blue-600 text-white p-2 rounded hover:bg-blue-700 transition">
                Register
            </button>
        </form>

    </div>

</div>

</x-layout>